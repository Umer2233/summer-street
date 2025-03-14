<section class="space40 popular-product-style">
  <div class="product-type">
    <div class="container">
      <div class="product-type__inner popular_product_section_custom">
        <div class="row mx-auto">
          {{-- <div class="col-lg-4">
            <div class="product-type__col">
              <div class="product-type__col-header product-type__col-header_custom">
                <div class="sell-header">
                  <div class="sell-header__title">
                    <h2>{!! trans('theme.today_popular') !!}</h2>
                  </div>
                  <div class="header-line">
                    <span></span>
                  </div>
                </div>
              </div>
              <div class="product-type__col-product">

                @include('theme::partials._product_vertical', ['products' => $daily_popular ])

              </div>
            </div>
          </div> --}}

          <div class="col-lg-6">
            <div class="product-type__col">
              <div class="product-type__col-header product-type__col-header_custom">
                <div class="sell-header">
                  <div class="sell-header__title">
                    <h2>{!! trans('theme.weekly_popular') !!}</h2>
                  </div>
                  <div class="header-line">
                    <span></span>
                  </div>
                </div>
              </div>
              <div class="product-type__col-product">
                @include('theme::partials._product_vertical', ['products' => $weekly_popular])
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="product-type__col">
              <div class="product-type__col-header product-type__col-header_custom">
                <div class="sell-header">
                  <div class="sell-header__title">
                    <h2>{!! trans('theme.monthly_popular') !!}</h2>
                  </div>
                  <div class="header-line">
                    <span></span>
                  </div>
                </div>
              </div>
              <div class="product-type__col-product">
                @include('theme::partials._product_vertical', ['products' => $monthly_popular])
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
