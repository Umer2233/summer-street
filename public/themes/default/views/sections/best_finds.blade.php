@if (count($deals_under))
  <section>
    <div class="best-deals best-deals-custom">
      <div class="container">
        <div class="best-deals__inner">
          <div class="best-deals__header best-deals__header_custom best-find-style">
            <div class="sell-header sell-header--bold">
              <div class="sell-header__title">
                <h2>
                  {{ trans('theme.best_find_under', ['amount' => get_formated_price(get_from_option_table('best_finds_under'))]) }}
                </h2>
              </div>
              <div class="header-line">
                <span></span>
              </div>
              <div class="best-deal__arrow">
                <ul>
                  <li><button class="left-arrow slider-arrow slick-arrow best-deal-left"><i class="fas fa-arrow-left"></i></button></li>
                  <li><button class="right-arrow slider-arrow slick-arrow best-deal-right"><i class="fas fa-arrow-right"></i></button></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="best-deals__items best-deals__items_custom">
            <div class="best-deals__items-inner">

              @include('theme::partials._product_horizontal', ['products' => $deals_under])

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endif
