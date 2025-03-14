<section>
  <div class="product-cat">
    <div class="container">
      <div class="product-cat__inner">
        <div class="product-cat__header product-cat__header_custom">
          <div class="sell-header sell-header--bold">
            <div class="sell-header__title featured-category">
              <h2>{{ trans('theme.featured_category') }}</h2>
            </div>
            <div class="header-line">
              <span></span>
            </div>
          </div>
        </div>
        <div class="product-cat__list product-cat__list_custom">
          <div class="row">
            @foreach ($featured_category as $item)
              <div class="col-6 col-md-3 col-sm-4 px-1">
                <div class="product-cat__list-item">
                  <a class="product-cat__list-box" href="{{ route('category.browse', $item->slug) }}">
                    <img src="{{ get_storage_file_url(optional($item->featureImage)->path, 'full') }} }}" alt="{{ $item->name }}">
                  </a>
                  <a class="product-cat__list-text" href="{{ route('category.browse', $item->slug) }}">{{ $item->name }}</a>
                  <a class="product-cat__list-btn" href="{{ route('category.browse', $item->slug) }}">Shop now</a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
