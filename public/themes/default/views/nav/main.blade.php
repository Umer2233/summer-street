{{-- @if (isset($global_announcement))
  <div id="global-announcement" class="global-announcement-custom">
    {!! $global_announcement->parsed_body !!}
    @if ($global_announcement->action_url)
     <span class="topbar-offer"> 80% Off!</span>
      <span class="indent10">
        <a href="{{ $global_announcement->action_url }}" class="btn btn-sm">
          {{ $global_announcement->action_text }}
        </a>
      </span>
     
    @endif
  </div>
@endif --}}

<div class="header__top header__top_custom">
  <div class="container">
    <div class="header__top-inner">
      <div class="header__top-welcome">
        {{-- @if (is_incevio_package_loaded('zipcode') && Session::has('zipcode')) --}}
        @if (is_incevio_package_loaded('zipcode'))
          <a href="javascript:void(0)" id="enterZipcodeModal">
            <i class="fal fa-location-arrow"></i> {{ trans('theme.ship_to') . ' ' . Session::get('zipcode') }}
          </a>
        @else
          <h3>{{ trans('theme.welcome') . ' ' . config('theme.name') }}</h3>
        @endif
      </div>

      <div class="header__top-utility">
        <ul>
          <!-- @auth('customer')
            <li class="image-icon">
              <a href="{{ route('account', 'dashboard') }}">
                <i class="fal fa-user"></i>
                <span>{{ trans('theme.hello') .
                    ', ' .
                    Auth::guard('customer')->user()->getName() }}</span>
              </a>
            </li>

            <li class="image-icon">
              <a href="{{ route('customer.logout') }}">
                <i class="fal fa-power-off"></i>
                <span>{{ trans('theme.logout') }}</span>
              </a>
            </li>
          @else
            <li class="image-icon">
              <a href="javascript:void(0)" data-toggle="modal" data-target="#loginModal">
                <i class="fal fa-user"></i>
                <span>{{ trans('theme.sing_in') }}</span>
              </a>
            </li>
          @endauth -->

          {{-- @if (Auth::guard('customer')->check() && customer_has_wallet())
            <li class="image-icon">
              <a href="{{ route(config('wallet.routes.wallet')) }}">
                <i class="fal fa-wallet"></i>
                <strong>{{ get_formated_currency(Auth::guard('customer')->user()->balance) }}</strong>
              </a>
            </li>
          @endif --}}

          {{-- <li class="image-icon">
            <a href="{{ route('brands') }}">
              <i class="fal fa-crown"></i> {{trans('theme.all_brands')}}
            </a>
          </li>

          <li class="image-icon">
            <a href="{{ route('shops') }}">
              <i class="fal fa-store"></i> {{trans('theme.all_shops')}}
            </a>
          </li> --}}

          <li class="image-icon">
            <a href="{{ route('account', 'orders') }}">
              <!-- <img src="images/truck.svg" alt=""> -->
              <i class="fal fa-map-marker-alt"></i> {{ trans('theme.track_your_order') }}
            </a>
          </li>
          <li class="image-icon">
            <a href="{{ get_page_url(\App\Page::PAGE_CONTACT_US) }}">
              <i class="fal fa-life-ring"></i> {{ trans('theme.support') }}
            </a>
          </li>

          {{-- <li class="currency">
             <select name="currency" id="currencyChange">
               <option value="usd" data-imagesrc="{{theme_asset_url('icon/lang3.png')}}">USD</option>
               <option value="jpy" data-imagesrc="{{theme_asset_url('icon/lang4.png')}}">JPY</option>
               <option value="eur" data-imagesrc="{{theme_asset_url('icon/lang5.png')}}">EUR</option>
               <option value="aud" data-imagesrc="{{theme_asset_url('icon/lang6.png')}}">AUD</option>
             </select>
           </li> --}}

          <li class="language">
            <select name="lang" id="languageChange">
              @foreach (config('active_locales') as $lang)
                <option dd-link="{{ route('locale.change', $lang->code) }}" value="{{ $lang->code }}" data-imagesrc="{{ get_flag_img_by_code(array_slice(explode('_', $lang->php_locale_code), -1)[0], true) }}" {{ $lang->code == \App::getLocale() ? 'selected' : '' }}>
                  {{ $lang->language }}
                </option>
              @endforeach
            </select>
          </li>

          @auth('customer')
            <li class="image-icon">
              <a href="{{ route('account', 'dashboard') }}">
                <i class="fal fa-user"></i>
                <span>{{ trans('theme.hello') .
                    ', ' .
                    Auth::guard('customer')->user()->getName() }}</span>
              </a>
            </li>

            <li class="image-icon">
              <a href="{{ route('customer.logout') }}">
                <i class="fal fa-power-off"></i>
                <span>{{ trans('theme.logout') }}</span>
              </a>
            </li>
          @else
            <li class="image-icon">
              <a href="javascript:void(0)" data-toggle="modal" data-target="#loginModal">
                <i class="fal fa-user"></i>
                <span>{{ trans('theme.sing_in') }}</span>
              </a>
            </li>
          @endauth
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="header__main header__main_custom">
  <div class="container">
    <div class="header__main-inner">
      <div class="header__menu-icon">
        <div class="menu-icon">
          <a class="main-menu-toggle" href="javascript:void(0)"><i class="fal fa-bars"></i></a>
        </div>
      </div>
      <div class="header__logo">
        <a href="{{ url('/') }}">
          <!-- <img src="{{ get_logo_url('platform', 'full') }}" class="brand-logo" alt="{{ trans('theme.logo') }}" title="{{ trans('theme.logo') }}"> -->
          <img src="../../themes/default/assets/img/summer-street-logo.svg" class="brand-logo" alt="{{ trans('theme.logo') }}" title="{{ trans('theme.logo') }}" style="height: 50px;">
        </a>
      </div>

      <div class="header__search">
        {!! Form::open(['route' => 'inCategoriesSearch', 'method' => 'GET', 'id' => 'search-categories-form', 'class' => 'navbar-left navbar-form navbar-search', 'role' => 'search']) !!}
        <div class="search-box">
          <div class="search-box__select">
            <i class="fas fa-chevron-down"></i>
            <select class="category search-category-select" name="insubgrp">
              <option value="all">{{ trans('theme.all_categories') }}</option>

              @foreach ($search_category_list as $search_category_grp)
                <optgroup label="{{ $search_category_grp->name }}">
                  @foreach ($search_category_grp->subGroups as $search_category)
                    <option value="{{ $search_category->slug }}" {{ Request::get('insubgrp') == $search_category->slug ? 'selected' : '' }}>
                      {{ $search_category->name }}
                    </option>
                  @endforeach
                </optgroup>
              @endforeach
            </select>
          </div>

          <div class="search-box__input">
            {!! Form::text('q', Request::get('q'), ['id' => 'autoSearchInput', 'placeholder' => trans('theme.main_searchbox_placeholder'), 'autocomplete' => 'off', 'data-search']) !!}

            <div class="search-box__dropdown">
              <ul id="autoSearchResult">
                <li>{{ trans('theme.type_min_char', ['min' => 3]) }}</li>
              </ul>
            </div>
          </div>

          <div class="search-box__button">
            <button type="submit" class="navbar-search-submit" onclick="document.getElementById('search-categories-form').submit()">
              {{-- <a class="navbar-search-submit" onclick="document.getElementById('search-categories-form').submit()"> --}}
              <i class="fal fa-search"></i>
              {{-- </a> --}}
            </button>
          </div>
        </div>
        {!! Form::close() !!}
      </div>

      <div class="header__utility">
        <ul>
          <li>
            <a href="{{ route('account', 'account') }}">
              <i class="fal fa-user"></i>
              <!-- <img src="images/big-user.svg" alt=""> -->
            </a>
          </li>
          <li>
            <a href="{{ route('account', 'wishlist') }}">
              <i class="fal fa-heart"></i>
              <!-- <img src="images/big-heart.svg" alt=""> -->
              {{-- <span class="badge">2</span> --}}
            </a>
          </li>
          <li>
            <a href="{{ route('cart.index') }}">
              <!-- <i class="fal fa-shopping-cart"></i> -->
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 20.173 20.524">
              <g id="Group_607" data-name="Group 607" transform="translate(-1493.158 5656.305)">
                <path id="Path_147" data-name="Path 147" d="M1503.353-5650.879a4.427,4.427,0,0,1,4.426-4.427h0a4.427,4.427,0,0,1,4.427,4.427v.947" transform="translate(-4.46 0)" fill="none" stroke="#52575D" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                <path id="Path_148" data-name="Path 148" d="M1507.746-5644.863h3.033a1.544,1.544,0,0,1,1.509,1.872l-2.147,9.889a1.766,1.766,0,0,1-1.726,1.391h-10.341a1.766,1.766,0,0,1-1.726-1.391l-2.147-9.889a1.544,1.544,0,0,1,1.509-1.872h8.8" transform="translate(0 -5.069)" fill="none" stroke="#52575D" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                <line id="Line_121" data-name="Line 121" x2="12.531" transform="translate(1498.46 -5642.267)" fill="none" stroke="#52575D" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
              </g>
              </svg>

              <span id="globalCartItemCount" class="badge {{ $cart_item_count == 0 ? 'hidden' : '' }}">{{ $cart_item_count }}</span>
            </a>
          </li>
          {{-- <li>
            <a href="#">
              <i class="fal fa-wallet"></i>
              <!-- <img src="images/wal.svg" alt=""> -->
              <span>$159.00</span>
            </a>
          </li> --}}
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="header__navigation header__navigation_custom">
  <div class="container">
    <div class="header__navigation-inner">
      <ul class="menu-dropdown-list header__navigation-category">
        <li>
          <a href="{{ route('categories') }}" class="menu-link" data-menu-link>
            <i class="fas fa-stream" style="margin-right: 10px;"></i>
            {{ trans('theme.categories') }}
            {{-- <i class="far fa-chevron-down"></i> --}}
          </a>

          <ul class="menu-cat" data-menu-toggle>
            @foreach ($all_categories as $catGroup)
              @if ($catGroup->subGroups->count())
                @php
                  $categories_count = $catGroup->subGroups->sum('categories_count');
                  $cat_counter = 0;
                @endphp
                <li>
                  <a href="{{ route('categoryGrp.browse', $catGroup->slug) }}">
                    @if ($catGroup->logoImage && Storage::exists($catGroup->logoImage->path))
                      <img src="{{ get_storage_file_url($catGroup->logoImage->path, 'tiny_thumb') }}" alt="{{ $catGroup->name }}">
                    @else
                      <i class="fal {{ $catGroup->icon ?? 'fa-cube' }}"></i>
                    @endif

                    <span>{{ $catGroup->name }}</span>
                    <i class="fal fa-chevron-right"></i>
                  </a>

                  <div class="mega-dropdown" style="background-image:url({{ $catGroup->backgroundImage ? get_storage_file_url(optional($catGroup->backgroundImage)->path, 'full') : '' }}); background-position: right bottom; background-repeat: no-repeat;margin-right: 0; background-size: contain;">
                    <div class="mega-dropdown-inner">
                    <div class="row">
                      @foreach ($catGroup->subGroups as $subGroup)
                        <div class="col-lg-{{ $categories_count > 15 ? '4' : '6' }}">
                          @php
                            $cat_counter = 0; //Reset the counter
                          @endphp

                          <div class="mega-dropdown__item">
                            <h3>
                              <a href="{{ route('categories.browse', $subGroup->slug) }}">{{ $subGroup->name }}</a>
                            </h3>
                            <ul>
                              @foreach ($subGroup->categories as $cat)
                                <li>
                                  <a href="{{ route('category.browse', $cat->slug) }}">{{ $cat->name }}</a>
                                  @if ($cat->description)
                                    <p>{!! $cat->description !!}</p>
                                  @endif
                                </li>
                                @php
                                  $cat_counter++; //Increase the counter value by 1
                                @endphp
                              @endforeach
                            </ul>
                          </div>
                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>
                </li>
              @endif
            @endforeach
          </ul>
        </li>
      </ul>

      {{-- <ul class="header__menu">
        <li>
          <a class="menu-link" href="{{ route('brands') }}">
            <i class="fal fa-crown menu-icon"></i> {{ trans('theme.brands') }}
          </a>
        </li> --}}

        <!-- <li>
          <a class="menu-link" href="{{ route('shops') }}">
            <i class="fal fa-store menu-icon"></i> {{ trans('theme.vendors') }}
          </a>
        </li> -->

        {{-- <li class="menu-dropdown-list">
          <a class="menu-link" href="javascript:void(0)">
            <i class="fal fa-store menu-icon"></i> {{ trans('theme.vendors') }}
            <i class="far fa-chevron-down"></i>
          </a>
          <div class="menu-cat shop-menu">
            <div class="row" id="top_vendors">
              @foreach ($top_vendors as $top_vendor)
                <div class="col-md-4 col-6 mb-3">
                  <div class="menu-banner">
                    <a href="{{ route('admin.vendor.shop.show', $top_vendor->id) }}">
                      <img src="{{ get_storage_file_url(optional($top_vendor->logoImage)->path, 'thumbnail') }}" class="" alt="{{ trans('app.logo') }}">
                    </a>
                  </div>
                  <p class="my-2">
                    {{ $top_vendor->name }}
                  </p>
                </div>
              @endforeach
            </div>
            <a href="{{ route('shops') }}" class="text-primary">{{ trans('theme.all_vendors') }}</a>
          </div>
        </li> --}}

        <!-- <li>
          <a class="menu-link" href="{{ url('/selling') }}">
            <i class="fal fa-seedling menu-icon"></i> {{ trans('theme.nav.sell_on', ['platform' => get_platform_title()]) }}
          </a>
        </li> -->

        {{-- <li class="menu-dropdown-list">
          <a class="menu-link" href="#">
            Shop
            <i class="far fa-chevron-down"></i>
          </a>
          <div class="menu-cat shop-menu">
            <div class="row">
              <div class="col-lg-4">
                <div class="menu-cat__item mega-dropdown__item">
                  <h3>
                    <a href="#">Home & Garden</a>
                  </h3>
                  <ul>
                    <li><a href="#">Schoen and Sons <p>Air Jordan 1 Top 3 Sneaker (DS)</p> </a></li>
                    <li><a href="#">Funk, Paucek and Krajcik <p>iPad Pro 2017 Model</p> </a></li>
                    <li><a href="#">Home Entertainment <p>Heimer Miller Sofa (Mint Condition)</p> </a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="menu-cat__item mega-dropdown__item">
                  <h3>
                    <a href="#">Electronics</a>
                  </h3>
                  <ul>
                    <li><a href="#">Corkery Group <p>Brand New Bike, Local buyer only</p> </a></li>
                    <li><a href="#">Corkery Group <p>Coach Tabby 26 for sale</p> </a></li>
                    <li><a href="#">Home Entertainment <p>Playstation 4 Limited Edition (with games)</p> </a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="menu-cat__item mega-dropdown__item">
                  <h3>
                    <a href="#">hobbies & DIY</a>
                  </h3>
                  <ul>
                    <li><a href="#">Schoen and Sons <p>DJI Mavic Pro 2</p> </a></li>
                    <li><a href="#">Funk, Paucek and Krajcik <p>Dell Computer Monitor</p> </a></li>
                    <li><a href="#">Dell Computer Monitor <p>Gopro hero 7 (with receipt)</p> </a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="menu-cat__item mega-dropdown__item">
                  <h3>
                    <a href="#">Pats</a>
                  </h3>
                  <ul>
                    <li><a href="#">Schoen and Sons <p>Macbook Pro 16 inch (2020 ) For Sale</p> </a></li>
                    <li><a href="#">Funk, Paucek and Krajcik <p>Heimer Miller Sofa (Mint Condition)</p> </a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="menu-cat__item mega-dropdown__item">
                  <h3>
                    <a href="#">kids & Toy</a>
                  </h3>
                  <ul>
                    <li><a href="#">Schoen and Sons <p>Gaming Chair, local pickup only</p> </a></li>
                    <li><a href="#">Funk, Paucek and Krajcik <p>Lego Star'War edition</p> </a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="menu-cat__item mega-dropdown__item">
                  <h3>
                    <a href="#">Clothing & Shoes</a>
                  </h3>
                  <ul>
                    <li><a href="#">Schoen and Sons <p>Brand New Bike, Local buyer only</p> </a></li>
                    <li><a href="#">Funk, Paucek and Krajcik <p>Gaming Chair, local pickup only</p> </a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="menu-banner">
                  <a href="#">
                    <img src="{{ theme_asset_url('img/shop-1.png') }}" alt="">
                  </a>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="menu-banner">
                  <a href="#">
                    <img src="{{ theme_asset_url('img/shop-2.png') }}" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </li> --}}

        {{-- <li class="menu-dropdown-list">
          <a class="menu-link" href="#">
            Pages
            <i class="far fa-chevron-down"></i>
          </a>
          <ul class="menu-cat">
            <li>
              <a href="#">Shopping Cart</a>
            </li>
            <li>
              <a href="#">Checkout</a>
            </li>
            <li>
              <a href="#">Account</a>
            </li>
            <li>
              <a href="#">About Us</a>
            </li>
            <li>
              <a href="#">Blog</a>
            </li>
            <li>
              <a href="#">Wishlist</a>
            </li>
          </ul>
        </li> --}}
      {{-- </ul> --}}

      {{-- <div class="shale-text">
        <a style="text-decoration: none" href="{{ $promotional_tagline['action_url'] ?? 'javascript:void(0)' }}">
          <p>{{ !empty($promotional_tagline['text']) ? $promotional_tagline['text'] : '' }}</p>
        </a>
      </div> --}}
    </div>
  </div>
</div>
