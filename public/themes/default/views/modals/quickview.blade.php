

<div class="modal-dialog modal-xl quickViewZoom-custom" role="document">
  <div class="modal-content flat">
    <a class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
    <div class="row sc-product-item">
      <div class="col-lg-5 col-md-12 col-sm-12 pl-1 pt-1">
        @include('theme::layouts.jqzoom', ['item' => $item])
      </div>
      <div class="col-lg-7 col-md-12 col-sm-12">
        <div class="product-single">
          <div class="row">
            <div class="col-md-7 col-sm-12 mt-lg-0 mt-3">
              @include('theme::layouts.product_info', ['zoomID' => 'quickViewZoom', 'item' => $item])
              
            </div>
             <div class="col-md-5 col-sm-12 mt-lg-0 mt-3">
            <div class="seller-info space20">
              <div class="text-muted small space10">
                @lang('theme.sold_by')
                <a href="{{ route('show.store', $item->shop->slug) }}" class="btn-link pull-right d-flex align-self-center btn-visit-store-custom">
                  {{-- <i class="far fa-store d-none"></i> --}}
                  <img src="../themes/default/assets/img/home.svg" width="18" height="18"  class="mr-1" />
                   {{ trans('theme.button.visit_store') }}
                </a>
              </div>

              <img src="{{ get_storage_file_url(optional($item->shop->logoImage)->path, 'thumbnail') }}" class="seller-info-logo img-sm" alt="{{ trans('theme.logo') }}">

              <a href="javascript:void(0)" data-toggle="modal" data-target="#shopReviewsModal" class="seller-info-name">
                {!! $item->shop->getQualifiedName() !!}
              </a>

              <div class="space10"></div>

              @include('theme::layouts.ratings', ['ratings' => $item->shop->feedbacks->avg('rating'), 'count' => $item->shop->feedbacks_count, 'shop' => true])

            </div><!-- /.seller-info -->

            <a data-link="{{ route('cart.addItem', $item->slug) }}" class="btn btn-lg add_to_cart_btn-s ff_nunito-s space10 sc-add-to-cart">
              <i class="fas fa-shopping-bag d-none"></i> @lang('theme.button.add_to_cart')
            </a>

          <!--   @if ($item->product->inventories_count > 1)
              <a href="{{ route('show.offers', $item->product->slug) }}" class="btn btn-block btn-link btn-sm">
                @lang('theme.view_more_offers', ['count' => $item->product->inventories_count])
              </a>
            @endif -->

            {{-- @if ($item->product->offers > 1)
                  <a href="{{ route('show.offers', $item->product->slug) }}" class="btn btn-block btn-link btn-sm">
                    @lang('theme.view_more_offers', ['count' => $item->product->offers])
                  </a>
            @endif --}}

            <div class="clearfix space20"></div>

            @if ($item->key_features)
              <div class="list_color-s">
                <div class="mb-4">
                  <h4>{!! trans('theme.section_headings.key_features') !!}</h4>
                </div>
                <ul class="bullet_list-s" id="item_key_features">
                  @foreach (unserialize($item->key_features) as $key_feature)
                    <li>{!! $key_feature !!}</li>
                  @endforeach
                </ul>
                {{-- <ul class="key_feature_list">
                  <li>Dog</li>
                  <li>Cat</li>
                  <li>Mouse</li>
                  <li>Rabbit</li>
                </ul> --}}
              </div>
            @endif
          </div>
          </div>
        

          {{-- <div class="sep"></div> --}}

          <!-- /.row -->

          {{-- <div class="sep"></div> --}}
          

          <!-- <a href="javascript:void(0);" data-link="{{ route('cart.addItem', $item->slug) }}" class="btn btn-primary flat sc-add-to-cart" data-dismiss="modal">
            <i class="fas fa-shopping-bag"></i> @lang('theme.button.add_to_cart')
          </a> -->

          <a href="{{ route('direct.checkout', $item->slug) }}" class="btn btn-lg buy_btn-s ff_nunito-s" id="buy-now-btn"><!-- <i class="fas fa-rocket"></i> -->
            @lang('theme.button.buy_now')
          </a>

          @if ($item->product->inventories_count > 1)
            <a href="{{ route('show.offers', $item->product->slug) }}" class="btn btn-sm btn-link">
              @lang('theme.view_more_offers', ['count' => $item->product->inventories_count])
            </a>
          @endif
        </div><!-- /.product-single -->

        <div class="space50"></div>
      </div>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
