<div class="main-menu mobile-mega-menu mobile-mega-menu-custom">
  <nav>
    <div class="main-menu__top main-menu__top_custom pt-0">
      <div class="main-menu__top-inner">
        <div class="main-menu__top-box">
          <!-- <div class="main-menu__top-item"><a href="#"><i class="fal fa-user"></i></a></div> -->
          <?php if(auth()->guard('customer')->check()): ?>
            <div class="main-menu__top-item">
              <a href="<?php echo e(route('account', 'dashboard'), false); ?>" class="text-center">
                <i class="fal fa-user small"></i>
                <p class="small"><?php echo e(trans('theme.account'), false); ?></p>
              </a>
            </div>

            <div class="main-menu__top-item">
              <a href="<?php echo e(route('customer.logout'), false); ?>" class="text-center">
                <i class="fal fa-sign-out-alt"></i>
                <p class="small"><?php echo e(trans('theme.logout'), false); ?></p>
              </a>
            </div>
          <?php else: ?>
            <div class="main-menu__top-item">
              <a href="<?php echo e(route('account', 'dashboard'), false); ?>" class="text-center">
                <i class="fal fa-sign-in-alt small"></i>
                <p><?php echo e(trans('theme.login'), false); ?></p>
              </a>
            </div>
            <?php endif; ?>
            <!-- <div class="main-menu__top-item"><a href="#"><i class="fal fa-wallet"></i></a></div> -->
            <div class="main-menu__top-item">
              <div class="form-group">
                <select name="lang" id="mobile-lang">
                  <?php $__currentLoopData = config('active_locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option dd-link="<?php echo e(route('locale.change', $lang->code), false); ?>" value="<?php echo e($lang->code, false); ?>" data-imagesrc="<?php echo e(get_flag_img_by_code(array_slice(explode('_', $lang->php_locale_code), -1)[0], true), false); ?>" <?php echo e($lang->code == \App::getLocale() ? 'selected' : '', false); ?>>
                      <?php echo e($lang->code, false); ?>

                    </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>
            
          </div>
        </div>
      </div>

      <ul class="main-menu-nav">
        <?php $__currentLoopData = $all_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($catGroup->subGroups->count()): ?>
            <?php
              $categories_count = $catGroup->subGroups->sum('categories_count');
              // $cat_counter = 0;
            ?>
            <li>
              <a href="<?php echo e(route('categoryGrp.browse', $catGroup->slug), false); ?>"><?php echo e($catGroup->name, false); ?></a>
              <ul>
                <?php $__currentLoopData = $catGroup->subGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                    // $cat_counter = 0; //Reset the counter
                  ?>
                  <li>
                    <a href="<?php echo e(route('categories.browse', $subGroup->slug), false); ?>"><?php echo e($subGroup->name, false); ?></a>
                    <ul>
                      <?php $__currentLoopData = $subGroup->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                          <a href="<?php echo e(route('category.browse', $cat->slug), false); ?>"><?php echo e($cat->name, false); ?></a>
                        </li>
                        <?php
                          // $cat_counter++;  //Increase the counter value by 1
                        ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                  </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </li>
          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </nav>
  </div>

  <div class="main-menu__bottom main-menu__bottom_custom">
    <div class="main-menu__bottom-inner">
      <div class="main-menu__bottom-box">
        

        <div class="main-menu__bottom-item">
          <a href="<?php echo e(route('account', 'wishlist'), false); ?>">
            <i class="fal fa-heart small"></i> <span><?php echo e(trans('theme.wishlist'), false); ?></span>
            
          </a>
        </div>

        <div class="main-menu__bottom-item">
          <a href="<?php echo e(route('brands'), false); ?>">
            <i class="fal fa-crown small"></i> <span><?php echo e(trans('theme.brands'), false); ?></span>
          </a>
        </div>

        <div class="main-menu__bottom-item">
          <a href="<?php echo e(route('shops'), false); ?>">
            <i class="fal fa-store small"></i> <span><?php echo e(trans('theme.vendors'), false); ?></span>
          </a>
        </div>

        <div class="main-menu__bottom-item">
          <a href="<?php echo e(url('/selling'), false); ?>">
            <i class="fal fa-seedling small"></i> <span><?php echo e(trans('theme.sell'), false); ?></span>
          </a>
        </div>
        
        
        
      </div>
    </div>
  </div>
<?php /**PATH /home/bitsclansolution/summerstreet/public/themes/default/views/nav/mobile.blade.php ENDPATH**/ ?>