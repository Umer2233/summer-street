@include('theme::contents.product_list_top_filter')

@include('theme::banners.category_cover')
<div class="row product-list myacount-wishlist-w">
  @foreach ($products as $item)
    <div class="col-12 col-sm-4 col-md-{{ $colum ?? '3' }} p-0">
      <div class="product product-grid-view sc-product-item  ">
        <ul class="product-info-labels">
          @if ($item->shop->isVerified() && Route::current()->getName() != 'show.store')
            <li>@lang('theme.from_verified_seller')</li>
          @endif

          @foreach ($item->getLabels() as $label)
            <li>{!! $label !!}</li>
          @endforeach
        </ul>

        <div class="product-img-wrap">
          
          <img class="product-img-primary" src="{{ get_product_img_src($item, 'medium') }}" alt="{{ $item->title }}" title="{{ $item->title }}" />

          <img class="product-img-alt" src="{{ get_product_img_src($item, 'medium', 'alt') }}" alt="{{ $item->title }}" title="{{ $item->title }}" />

          <a class="product-link" href="{{ route('show.product', $item->slug) }}"></a>
        </div>

        <div class="product-actions cat_btn--group">
          <div class="btn-default__box">
            
            <a class="btn btn-default flat itemQuickView cat_btn--qv" href="{{ route('quickView.product', $item->slug) }}">
              <i class="far fa-search-plus" data-toggle="tooltip" title="@lang('theme.button.quick_view')"></i> <span>@lang('theme.button.quick_view')</span>
            </a>
            <a class="btn btn-default flat add-to-wishlist cat_btn--wl" href="javascript:void(0)" data-link="{{ route('wishlist.add', $item) }}">
              <i class="far fa-heart" data-toggle="tooltip" title="@lang('theme.button.add_to_wishlist')"></i> <span>@lang('theme.button.add_to_wishlist')</span>
            </a>
          </div>
          <div class="addToCart__box">

            <a class="btn btn-primary flat sc-add-to-cart cat_btn--aTc" data-link="{{ route('cart.addItem', $item->slug) }}">
              <i class="far fa-shopping-cart"></i> <span class="d-none cartToBtn_text d-sm-inline-block">{{ trans('theme.add_to_cart') }}</span>
            </a>
          </div>
        </div>

        <div class="product-info">
          @include('theme::layouts.ratings', ['ratings' => $item->ratings, 'count' => $item->feedbacks_count])
          {{-- @include('theme::layouts.ratings', ['ratings' => $item->feedbacks->avg('rating'), 'count' => $item->feedbacks_count]) --}}

          <a href="{{ route('show.product', $item->slug) }}" class="product-info-title" data-name="product_name">{{ $item->title }}</a>

          <div class="product-info-availability">
            @lang('theme.availability'): <span>{{ $item->stock_quantity > 0 ? trans('theme.in_stock') : trans('theme.out_of_stock') }}</span>
          </div>

          @include('theme::layouts.pricing', ['item' => $item])

          <div class="product-info-desc"> {!! $item->description !!} </div>

          <ul class="product-info-feature-list">
            <li>{!! $item->condition !!}</li>
            {{-- <li>{{ $item->manufacturer->name }}</li> --}}
          </ul>
        </div><!-- /.product-info -->
      </div><!-- /.product -->
    </div><!-- /.col-md-* -->

    @if ($loop->iteration % 4 == 0)
      <div class="clearfix"></div>
    @endif
  @endforeach
</div><!-- /.row .product-list -->

<div class="sep"></div>

<div class="row pagenav-wrapper">
  {{ $products->links('theme::layouts.pagination') }}
</div><!-- /.row .pagenav-wrapper -->
