<?php

namespace App\Http\Controllers\Api;

use DB;
use App\Cart;
use App\Shop;
use App\PaymentMethod;
use App\Common\ShoppingCart;
use App\Events\Order\OrderCreated;
use App\Http\Resources\CartResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Http\Resources\PaymentMethodResource;
// use App\Http\Requests\Validations\DirectCheckoutRequest;
use App\Http\Requests\Validations\CheckoutCartRequest;
use App\Contracts\PaymentServiceContract as PaymentService;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    use ShoppingCart;

    /**
     * Checkout the specified cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkout(CheckoutCartRequest $request, Cart $cart, PaymentService $paymentService)
    {
        $cart = crosscheckAndUpdateOldCartInfo($request, $cart);

        DB::beginTransaction();

        try {
            // Create the order
            $order = $this->saveOrderFromCart($request, $cart);

            $receiver = vendor_get_paid_directly() ? 'merchant' : 'platform';

            // When the order has been paid on the app end
            if ($request->input('payment_status') == 'paid' && $request->has('payment_meta')) {
                $response = $paymentService->verifyPaidPayment();
                // dd($response);
            } else {
                $response = $paymentService->setReceiver($receiver)
                    ->setOrderInfo($order)
                    ->setAmount($order->grand_total)
                    ->setDescription(trans('app.purchase_from', ['marketplace' => get_platform_title()]))
                    ->setConfig()
                    ->charge();
            }

            // Payment succeed
            if ($response->success) {
                // Order confirmed
                if ($order->paymentMethod->type !== PaymentMethod::TYPE_MANUAL) {
                    // Order has been paid
                    $order->markAsPaid();
                }

                // Everything is fine. Now commit the transaction
                DB::commit();

                // Delete the cart
                // $cart->forceDelete();

                // Trigger the Event
                event(new OrderCreated($order));

                return response()->json([
                    'message' => trans('theme.notify.order_placed'),
                    'order' => new OrderResource($order)
                ], 200);
            }

            throw new \Exception("Error Payment Processing Request");
        } catch (\Exception $e) {
            DB::rollback(); // rollback the transaction and log the error

            \Log::error($request->payment_method . ' Payment failed:: ' . $e->getMessage());
            \Log::error($e);

            return response()->json([
                'error' => $e->getMessage(),
                'cart' => new CartResource($cart)
            ], 403);
        }

        return new OrderResource($order);


        // if (!crosscheckCartOwnership($request, $cart)) {
        //     return response()->json(['message' => trans('theme.notify.please_login_to_checkout')], 404);
        // }

        // \Log::info(get_class($paymentService));
        return $request->all();

        // Update the cart
        $cart->shipping_rate_id = $request->shipping_option_id;
        $cart->packaging_id = $request->packaging_id;
        $cart->payment_method_id = $request->payment_method_id;
        $cart->shipping_address = $request->shipping_address;
        $cart->shipping = $request->shipping_option_id ? getShippingingCost($request->shipping_option_id) : Null;

        if ($request->packaging_id) {
            $cart->packaging = getPackagingCost($request->packaging_id);
        }

        $cart->grand_total = $cart->calculate_grand_total();
        $cart->save();

        $cart = crosscheckAndUpdateOldCartInfo($request, $cart);

        // Start transaction!
        DB::beginTransaction();
        try {
            // Create the order from the cart
            $order = $this->saveOrderFromCart($request, $cart);
        } catch (\Exception $e) {
            \Log::error($e);

            // rollback the transaction and log the error
            DB::rollback();

            return response()->json(trans('theme.notify.order_creation_failed'), 500);
        }

        // Everything is fine. Now commit the transaction
        DB::commit();

        // $cart->forceDelete();   // Delete the cart

        event(new OrderCreated($order));   // Trigger the Event

        return new OrderResource($order);
    }

    /**
     * Direct checkout with the item/cart
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  str $slug
     *
     * @return \Illuminate\Http\Response
     */
    // public function directCheckout(DirectCheckoutRequest $request, $slug)
    // {
    //     $cart = $this->addToCart($request, $slug);

    //     if (200 == $cart->status())
    //         return redirect()->route('cart.index', $cart->getdata()->id);
    //     else if (444 == $cart->status())
    //         return redirect()->route('cart.index', $cart->getdata()->cart_id);

    //     return redirect()->back()->with('warning', trans('theme.notify.failed'));
    // }

    /**
     * Return available payment options options for the cart.
     *
     * @param  Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function paymentOptions(Cart $cart)
    {
        // Get the shop
        $shop = $cart->shop;

        // Get all active payment methods
        $activePaymentMethods = PaymentMethod::active()->get();
        $activePaymentCodes = $activePaymentMethods->pluck('code')->toArray();

        $shop_config = Null;
        if (vendor_get_paid_directly()) {
            $activePaymentMethods = $shop->paymentMethods;
            $shop_config = $shop;
        }

        $results = collect([]);
        foreach ($activePaymentMethods as $payment) {
            if (
                !in_array($payment->code, $activePaymentCodes) ||
                !get_payment_config_info($payment->code, $shop_config)
            ) {
                continue;
            }

            $results->push($payment);
        }

        return PaymentMethodResource::collection($results);
    }
}
