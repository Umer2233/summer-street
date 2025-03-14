<?php

// use Illuminate\Http\Request;

Route::group(['namespace' => 'Api'], function () {

	// Homepage
	Route::get('announcement', 'HomeController@announcement');
	Route::get('sliders', 'HomeController@sliders');
	Route::get('banners', 'HomeController@banners');
	Route::get('page/{slug}', 'HomeController@page');

	// Plugins
	// Route::get('plugin/{slug}', 'PluginController@isLoaded');

	// Blogs
	Route::get('blogs', 'BlogController@index');
	Route::get('blog/{slug}', 'BlogController@show');

	// Categories
	Route::get('featured-categories', 'CategoryController@featuredCategories');
	Route::get('trending-categories', 'CategoryController@trendingCategories');
	Route::get('category-grps', 'CategoryController@categoryGroup');
	Route::get('category-subgrps/{group?}', 'CategoryController@categorySubGroup');
	Route::get('categories/{sub_group?}', 'CategoryController@index');

	// Shops
	Route::get('shops', 'HomeController@allShops');
	Route::get('shop/{slug}', 'HomeController@shop');
	Route::get('shop/{slug}/listings', 'ListingController@shop');
	Route::get('shop/{slug}/feedbacks', 'FeedbackController@show_shop_feedbacks');

	// Brands
	Route::get('brands', 'HomeController@allBrands');
	Route::get('brands/featured', 'HomeController@featuredBrands');
	Route::get('brand/{slug}', 'HomeController@brand');
	Route::get('brand/{slug}/listings', 'ListingController@brand');

	// Listings
	Route::get('search/{term}', 'ListingController@search');
	Route::get('offers/{slug}', 'ListingController@offers');
	Route::get('listings/{list?}', 'ListingController@index');
	Route::get('listing/{slug}', 'ListingController@item');
	Route::post('variant/{slug}', 'ListingController@variant');
	Route::get('listing/category/{slug}', 'ListingController@category');
	Route::get('listing/category-subgrp/{slug}', 'ListingController@categorySubGroup');
	Route::get('listing/category-grp/{slug}', 'ListingController@categoryGroup');
	Route::post('listing/{item}/shipTo', 'ListingController@shipTo');
	Route::get('listing/{slug}/feedbacks', 'FeedbackController@show_item_feedbacks');
	Route::get('recently_viewed_items', 'ListingController@recently_viewed');

	// Deals 
	Route::group(['prefix' => 'deals'], function () {
		Route::get('under-the-price', 'DealController@underPrice');
		Route::get('deal-of-the-day', 'DealController@dealOfTheDay');
		Route::get('tagline', 'DealController@tagline');
	});

	// CART
	Route::post('addToCart/{slug}', 'CartController@addToCart');
	Route::delete('cart/removeItem', 'CartController@remove');
	Route::get('carts', 'CartController@index');
	Route::get('cart/{cart}', 'CartController@show');
	Route::put('cart/{cart}/update', 'CartController@update');
	Route::post('cart/{cart}/shipping', 'CartController@shipping');
	Route::post('cart/{cart}/checkout', 'CheckoutController@checkout');
	Route::get('cart/{cart}/paymentOptions', 'CheckoutController@paymentOptions');

	// Stripe
	Route::post('cart/{cart}/stripePaymentIntent', 'CheckoutController@stripePaymentIntent');

	// Shipping and packaging
	Route::get('packaging/{shop}', 'HomeController@packaging');
	Route::post('shipping/{shop}', 'HomeController@shipping');
	Route::get('paymentOptions/{shop}', 'HomeController@paymentOptions');
	Route::get('countries', 'HomeController@countries');
	Route::get('states/{country}', 'HomeController@states');

	// Route::get('cart/{expressId?}', 'CartController@index')->name('cart.index');
	// Route::get('checkout/{slug}', 'CheckoutController@directCheckout');

	// Auth
	Route::group(['prefix' => 'auth'], function () {
		Route::post('register', 'AuthController@register');
		Route::post('login', 'AuthController@login');
		Route::post('logout', 'AuthController@logout')->middleware(['auth:api']);
		Route::post('forgot', 'AuthController@forgot');
		Route::get('reset/{token}', 'AuthController@find');
		Route::post('reset', 'AuthController@reset');
		Route::post('social/{provider}', 'AuthController@socialLogin');
		// Route::get('social/{provider}', 'AuthController@socialLogin');
		// Route::get('social/{provider}/callback', 'AuthController@handleSocialProviderCallback');
	});

	// Customer
	Route::group(['middleware' => 'auth:api'], function () {
		Route::get('dashboard', 'AccountController@index');
		Route::get('account/update', 'AccountController@edit');
		Route::put('account/update', 'AccountController@update');
		Route::put('password/update', 'AccountController@password_update');
		Route::get('conversations', 'ConversationController@conversations');

		// Address
		Route::get('addresses', 'AddressController@index');
		Route::get('address/create', 'AddressController@create');
		Route::post('address/store', 'AddressController@store');
		Route::get('address/{address}', 'AddressController@edit');
		Route::put('address/{address}', 'AddressController@update');
		Route::delete('address/{address}', 'AddressController@delete');

		// Coupons
		Route::get('coupons', 'AccountController@coupons');
		Route::post('cart/{cart}/applyCoupon', 'CartController@validateCoupon');

		// Wishlist
		Route::get('wishlist', 'WishlistController@index');
		Route::get('wishlist/{slug}/add', 'WishlistController@add');
		Route::delete('wishlist/{wishlist}/remove', 'WishlistController@remove');

		// Orders
		Route::get('orders', 'OrderController@index');
		Route::get('order/{order}', 'OrderController@show');
		Route::get('order/{order}/conversation', 'OrderController@conversation');
		Route::post('order/{order}/conversation', 'OrderController@save_conversation');
		Route::get('order/{order}/track', 'OrderController@track');
		Route::post('order/{order}/feedback', 'FeedbackController@save_product_feedbacks');
		Route::post('order/{order}/goodsReceived', 'OrderController@goods_received');

		Route::post('shop/{order}/feedback', 'FeedbackController@save_shop_feedbacks');
		Route::get('shop/{shop}/contact', 'ConversationController@conversation');
		Route::post('shop/{shop}/contact', 'ConversationController@save_conversation');

		// Disputes
		Route::get('disputes', 'DisputeController@index');
		Route::get('order/{order}/dispute', 'DisputeController@create');
		Route::post('order/{order}/dispute', 'DisputeController@store');
		Route::get('dispute/{dispute}', 'DisputeController@show');
		Route::get('dispute/{dispute}/response', 'DisputeController@response_form');
		Route::post('dispute/{dispute}/response', 'DisputeController@response');
		Route::post('dispute/{dispute}/appeal', 'DisputeController@appeal');
		Route::put('dispute/{dispute}/solved', 'DisputeController@mark_as_solved');
		Route::get('attachment/{attachment}/download', 'AttachmentController@download');
	});
});
