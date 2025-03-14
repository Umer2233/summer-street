@foreach ($products as $item)
  <div class="recent__items-box box br_34px-s b_1px-s mnh_320px-s mb-3">
    <!-- <a href="{{ route('show.product', $item->slug) }}"> -->
      <a href="{{ route('show.product', $item->slug) }}">
      <div class="recent__items-img box-img pt-2">
        <img src="{{ get_inventory_img_src($item, 'medium') }}" data-name="product_image" alt="{{ $item->title }}" title="{{ $item->title }}">
      </div>
    </a>

    @if (empty($ratings))
      <div class="recent__items-ratting box-ratting">
        @include('theme::partials._ratings', ['ratings' => $item->ratings])
        {{-- @include('theme::partials._ratings', ['ratings' => $item->feedbacks->avg('rating')]) --}}
      </div>
    @endif

    @if (empty($title))
      <div class="recent__items-title box-title">
        <!-- <a href="{{ route('show.product', $item->slug) }}">{!! \Str::limit($item->title, 55) !!}</a> -->
        <a href="{{ route('show.product', $item->slug) }}">{!! \Str::limit($item->title, 55) !!}</a>
      </div>
    @endif

    @if (empty($pricing))
      <div class="recent__items-price box-price">
        @include('theme::partials._home_pricing')
      </div>
    @endif

    @if (empty($hover))
      <div class="feature__items-action box-action br_26px-s">
        @include('theme::partials._btn_quick_view')
        @include('theme::partials._btn_wishlist')
        @include('theme::partials._btn_add_to_cart')
      </div>
    @endif
  </div>
@endforeach


