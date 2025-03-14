@if ($wishlist->count() > 0)
  <div class="row product-list mr-1">
    @foreach ($wishlist as $wish)
      <div class="col-md-12">
        <div class="d-lg-flex  w_100-s products wishlist_products-s product-list-view">
          <ul class="product-info-labels">
            @if ($wish->inventory->free_shipping == 1)
              <li>@lang('theme.free_shipping')</li>
            @endif
            @if ($wish->inventory->stuff_pick == 1)
              <li>@lang('theme.stuff_pick')</li>
            @endif
            @if ($wish->inventory->hasOffer())
              <li>@lang('theme.percent_off', ['value' => get_percentage_of($wish->inventory->sale_price, $wish->inventory->offer_price)])</li>
            @endif
          </ul>

          <div class="product-img-wrap">
            <img class="product-img-primary" src="{{ get_product_img_src($wish->inventory, 'medium') }}" alt="{!! $wish->inventory->title !!}" title="{!! $wish->inventory->title !!}" />

            <img class="product-img-alt" src="{{ get_product_img_src($wish->inventory, 'medium', 'alt') }}" alt="{!! $wish->inventory->title !!}" title="{!! $wish->inventory->title !!}" />

            <a class="product-link" href="{{ route('show.product', $wish->inventory->slug) }}"></a>
          </div>

          <div class="product-info">
            @include('theme::layouts.ratings', ['ratings' => $wish->inventory->feedbacks->avg('rating')])

            <a href="{{ route('show.product', $wish->inventory->slug) }}" class="product-info-title fg_black-s">
              <strong>{!! $wish->inventory->title !!}</strong>
            </a>

            <div class="product-info-availability fg_black-s">
              @lang('theme.availability'): <span class="fg_light_blue-s">{{ $wish->inventory->stock_quantity > 0 ? trans('theme.in_stock') : trans('theme.out_of_stock') }}</span>
            </div>

            @include('theme::layouts.pricing', ['item' => $wish->inventory])

            <div class="product-info-desc fg_black-s"> {!! $wish->inventory->description !!} </div>
            <ul class="product-info-feature-list mt-4">
              <li>{{ $wish->inventory->condition }}</li>
            </ul>
          </div><!-- /.product-info -->
          
          <div class="product-actions align-self-center mx-auto">
            <a class="btn btn-default flat w_fit_content-s itemQuickView px-4" href="{{ route('quickView.product', $wish->inventory->slug) }}">
              {{-- <i class="far fa-external-link" data-toggle="tooltip" title="@lang('theme.button.quick_view')"></i> --}}
              <span>@lang('theme.button.quick_view')</span>
            </a>

            <a class="btn btn-primary w_fit_content-s px-4 buy_now_btn-s" href="{{ route('direct.checkout', $wish->inventory->slug) }}">
              {{-- <i class="fas fa-rocket"></i> --}}
               @lang('theme.button.buy_now')
            </a>

            {!! Form::open(['route' => ['wishlist.remove', $wish], 'method' => 'delete', 'class' => 'data-form']) !!}
            <button class="btn btn-link btn-block confirm " type="submit">
              <i class="fas fa-trash-o" data-toggle="tooltip" title="@lang('theme.button.remove_from_wishlist')"></i>
              <span class="fg_light_blue-s">@lang('theme.button.remove')</span>
            </button>
            {!! Form::close() !!}
          </div>
          
        </div><!-- /.product -->
      </div><!-- /.col-md-* -->
    @endforeach
  </div><!-- /.row .product-list -->
  {{-- <div class="sep"></div> --}}
@else
  <div class="clearfix space50"></div>
  <p class="lead text-center space50">
    @lang('theme.empty_wishlist')
    <a href="{{ url('/') }}" class="btn btn-primary btn-sm flat">@lang('theme.button.shop_now')</a>
  </p>
@endif

<div class="row pagenav-wrapper">
  {{ $wishlist->links('theme::layouts.pagination') }}
</div><!-- /.row .pagenav-wrapper -->

<div class="clearfix space20"></div>
