<section>
  <div class="neckbands neckbands_custom">
    <div class="container">
      <div class="neckbands__inner">
        <div class="neckbands__header neckbands__header_custom neckband-style">
          <div class="sell-header sell-header--bold">
            <div class="sell-header__title neckband-header-style">
              <h2>{{ trans('theme.recently_added') }}</h2>
            </div>
            <div class="header-line">
              <span></span>
            </div>
            <div class="best-deal__arrow">
              <ul>
                <li><button class="left-arrow slider-arrow slick-arrow neckbands-left"><i class="fas fa-arrow-left"></i></button></li>
                <li><button class="right-arrow slider-arrow slick-arrow neckbands-right"><i class="fas fa-arrow-right"></i></button></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="neckbands__items">
          <div class="neckbands__items-inner">
            @include('theme::partials._product_horizontal', ['products' => $recent, 'ratings' => 1])
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
