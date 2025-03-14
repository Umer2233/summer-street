<div class="feature__items-wishlist box-cart ml-3">
  <div class="feature__items-wishlist box-cart">
    <a href="javascript:void(0)" data-link="{{ route('cart.addItem', $item->slug) }}" class="btn-primary sc-add-to-cart ff_nunito-s" tabindex="0">
    
      {{-- <i class="fal fa-shopping-cart"></i> --}}
      <span class="d-none d-sm-inline-block">{{ trans('theme.add_to_cart') }}</span>
    </a>
  </div>
</div>
