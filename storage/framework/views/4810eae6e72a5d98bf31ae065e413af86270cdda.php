

<div class="header__top header__top_custom">
  <div class="container">
    <div class="header__top-inner">
      <div class="header__top-welcome">
        
        <?php if(is_incevio_package_loaded('zipcode')): ?>
          <a href="javascript:void(0)" id="enterZipcodeModal">
            <i class="fal fa-location-arrow"></i> <?php echo e(trans('theme.ship_to') . ' ' . Session::get('zipcode'), false); ?>

          </a>
        <?php else: ?>
          <h3><?php echo e(trans('theme.welcome') . ' ' . config('theme.name'), false); ?></h3>
        <?php endif; ?>
      </div>

      <div class="header__top-utility">
        <ul>
          <!-- <?php if(auth()->guard('customer')->check()): ?>
            <li class="image-icon">
              <a href="<?php echo e(route('account', 'dashboard'), false); ?>">
                <i class="fal fa-user"></i>
                <span><?php echo e(trans('theme.hello') .
                    ', ' .
                    Auth::guard('customer')->user()->getName(), false); ?></span>
              </a>
            </li>

            <li class="image-icon">
              <a href="<?php echo e(route('customer.logout'), false); ?>">
                <i class="fal fa-power-off"></i>
                <span><?php echo e(trans('theme.logout'), false); ?></span>
              </a>
            </li>
          <?php else: ?>
            <li class="image-icon">
              <a href="javascript:void(0)" data-toggle="modal" data-target="#loginModal">
                <i class="fal fa-user"></i>
                <span><?php echo e(trans('theme.sing_in'), false); ?></span>
              </a>
            </li>
          <?php endif; ?> -->

          

          

          <li class="image-icon">
            <a href="<?php echo e(route('account', 'orders'), false); ?>">
              <!-- <img src="images/truck.svg" alt=""> -->
              <i class="fal fa-map-marker-alt"></i> <?php echo e(trans('theme.track_your_order'), false); ?>

            </a>
          </li>
          <li class="image-icon">
            <a href="<?php echo e(get_page_url(\App\Page::PAGE_CONTACT_US), false); ?>">
              <i class="fal fa-life-ring"></i> <?php echo e(trans('theme.support'), false); ?>

            </a>
          </li>

          

          <li class="language">
            <select name="lang" id="languageChange">
              <?php $__currentLoopData = config('active_locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option dd-link="<?php echo e(route('locale.change', $lang->code), false); ?>" value="<?php echo e($lang->code, false); ?>" data-imagesrc="<?php echo e(get_flag_img_by_code(array_slice(explode('_', $lang->php_locale_code), -1)[0], true), false); ?>" <?php echo e($lang->code == \App::getLocale() ? 'selected' : '', false); ?>>
                  <?php echo e($lang->language, false); ?>

                </option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </li>

          <?php if(auth()->guard('customer')->check()): ?>
            <li class="image-icon">
              <a href="<?php echo e(route('account', 'dashboard'), false); ?>">
                <i class="fal fa-user"></i>
                <span><?php echo e(trans('theme.hello') .
                    ', ' .
                    Auth::guard('customer')->user()->getName(), false); ?></span>
              </a>
            </li>

            <li class="image-icon">
              <a href="<?php echo e(route('customer.logout'), false); ?>">
                <i class="fal fa-power-off"></i>
                <span><?php echo e(trans('theme.logout'), false); ?></span>
              </a>
            </li>
          <?php else: ?>
            <li class="image-icon">
              <a href="javascript:void(0)" data-toggle="modal" data-target="#loginModal">
                <i class="fal fa-user"></i>
                <span><?php echo e(trans('theme.sing_in'), false); ?></span>
              </a>
            </li>
          <?php endif; ?>
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
        <a href="<?php echo e(url('/'), false); ?>">
          <!-- <img src="<?php echo e(get_logo_url('platform', 'full'), false); ?>" class="brand-logo" alt="<?php echo e(trans('theme.logo'), false); ?>" title="<?php echo e(trans('theme.logo'), false); ?>"> -->
          <img src="../../themes/default/assets/img/summer-street-logo.svg" class="brand-logo" alt="<?php echo e(trans('theme.logo'), false); ?>" title="<?php echo e(trans('theme.logo'), false); ?>" style="height: 50px;">
        </a>
      </div>

      <div class="header__search">
        <?php echo Form::open(['route' => 'inCategoriesSearch', 'method' => 'GET', 'id' => 'search-categories-form', 'class' => 'navbar-left navbar-form navbar-search', 'role' => 'search']); ?>

        <div class="search-box">
          <div class="search-box__select">
            <i class="fas fa-chevron-down"></i>
            <select class="category search-category-select" name="insubgrp">
              <option value="all"><?php echo e(trans('theme.all_categories'), false); ?></option>

              <?php $__currentLoopData = $search_category_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $search_category_grp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <optgroup label="<?php echo e($search_category_grp->name, false); ?>">
                  <?php $__currentLoopData = $search_category_grp->subGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $search_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($search_category->slug, false); ?>" <?php echo e(Request::get('insubgrp') == $search_category->slug ? 'selected' : '', false); ?>>
                      <?php echo e($search_category->name, false); ?>

                    </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </optgroup>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>

          <div class="search-box__input">
            <?php echo Form::text('q', Request::get('q'), ['id' => 'autoSearchInput', 'placeholder' => trans('theme.main_searchbox_placeholder'), 'autocomplete' => 'off', 'data-search']); ?>


            <div class="search-box__dropdown">
              <ul id="autoSearchResult">
                <li><?php echo e(trans('theme.type_min_char', ['min' => 3]), false); ?></li>
              </ul>
            </div>
          </div>

          <div class="search-box__button">
            <button type="submit" class="navbar-search-submit" onclick="document.getElementById('search-categories-form').submit()">
              
              <i class="fal fa-search"></i>
              
            </button>
          </div>
        </div>
        <?php echo Form::close(); ?>

      </div>

      <div class="header__utility">
        <ul>
          <li>
            <a href="<?php echo e(route('account', 'account'), false); ?>">
              <i class="fal fa-user"></i>
              <!-- <img src="images/big-user.svg" alt=""> -->
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('account', 'wishlist'), false); ?>">
              <i class="fal fa-heart"></i>
              <!-- <img src="images/big-heart.svg" alt=""> -->
              
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('cart.index'), false); ?>">
              <!-- <i class="fal fa-shopping-cart"></i> -->
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 20.173 20.524">
              <g id="Group_607" data-name="Group 607" transform="translate(-1493.158 5656.305)">
                <path id="Path_147" data-name="Path 147" d="M1503.353-5650.879a4.427,4.427,0,0,1,4.426-4.427h0a4.427,4.427,0,0,1,4.427,4.427v.947" transform="translate(-4.46 0)" fill="none" stroke="#52575D" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                <path id="Path_148" data-name="Path 148" d="M1507.746-5644.863h3.033a1.544,1.544,0,0,1,1.509,1.872l-2.147,9.889a1.766,1.766,0,0,1-1.726,1.391h-10.341a1.766,1.766,0,0,1-1.726-1.391l-2.147-9.889a1.544,1.544,0,0,1,1.509-1.872h8.8" transform="translate(0 -5.069)" fill="none" stroke="#52575D" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                <line id="Line_121" data-name="Line 121" x2="12.531" transform="translate(1498.46 -5642.267)" fill="none" stroke="#52575D" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
              </g>
              </svg>

              <span id="globalCartItemCount" class="badge <?php echo e($cart_item_count == 0 ? 'hidden' : '', false); ?>"><?php echo e($cart_item_count, false); ?></span>
            </a>
          </li>
          
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
          <a href="<?php echo e(route('categories'), false); ?>" class="menu-link" data-menu-link>
            <i class="fas fa-stream" style="margin-right: 10px;"></i>
            <?php echo e(trans('theme.categories'), false); ?>

            
          </a>

          <ul class="menu-cat" data-menu-toggle>
            <?php $__currentLoopData = $all_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($catGroup->subGroups->count()): ?>
                <?php
                  $categories_count = $catGroup->subGroups->sum('categories_count');
                  $cat_counter = 0;
                ?>
                <li>
                  <a href="<?php echo e(route('categoryGrp.browse', $catGroup->slug), false); ?>">
                    <?php if($catGroup->logoImage && Storage::exists($catGroup->logoImage->path)): ?>
                      <img src="<?php echo e(get_storage_file_url($catGroup->logoImage->path, 'tiny_thumb'), false); ?>" alt="<?php echo e($catGroup->name, false); ?>">
                    <?php else: ?>
                      <i class="fal <?php echo e($catGroup->icon ?? 'fa-cube', false); ?>"></i>
                    <?php endif; ?>

                    <span><?php echo e($catGroup->name, false); ?></span>
                    <i class="fal fa-chevron-right"></i>
                  </a>

                  <div class="mega-dropdown" style="background-image:url(<?php echo e($catGroup->backgroundImage ? get_storage_file_url(optional($catGroup->backgroundImage)->path, 'full') : '', false); ?>); background-position: right bottom; background-repeat: no-repeat;margin-right: 0; background-size: contain;">
                    <div class="mega-dropdown-inner">
                    <div class="row">
                      <?php $__currentLoopData = $catGroup->subGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-<?php echo e($categories_count > 15 ? '4' : '6', false); ?>">
                          <?php
                            $cat_counter = 0; //Reset the counter
                          ?>

                          <div class="mega-dropdown__item">
                            <h3>
                              <a href="<?php echo e(route('categories.browse', $subGroup->slug), false); ?>"><?php echo e($subGroup->name, false); ?></a>
                            </h3>
                            <ul>
                              <?php $__currentLoopData = $subGroup->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                  <a href="<?php echo e(route('category.browse', $cat->slug), false); ?>"><?php echo e($cat->name, false); ?></a>
                                  <?php if($cat->description): ?>
                                    <p><?php echo $cat->description; ?></p>
                                  <?php endif; ?>
                                </li>
                                <?php
                                  $cat_counter++; //Increase the counter value by 1
                                ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                          </div>
                        </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </div>
                </div>
                </li>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </li>
      </ul>

      

        <!-- <li>
          <a class="menu-link" href="<?php echo e(route('shops'), false); ?>">
            <i class="fal fa-store menu-icon"></i> <?php echo e(trans('theme.vendors'), false); ?>

          </a>
        </li> -->

        

        <!-- <li>
          <a class="menu-link" href="<?php echo e(url('/selling'), false); ?>">
            <i class="fal fa-seedling menu-icon"></i> <?php echo e(trans('theme.nav.sell_on', ['platform' => get_platform_title()]), false); ?>

          </a>
        </li> -->

        

        
      

      
    </div>
  </div>
</div>
<?php /**PATH /home/bitsclansolution/summerstreet/public/themes/default/views/nav/main.blade.php ENDPATH**/ ?>