<?php if(count($recently_viewed_items)): ?>
  <section class="recent-views-sec-custom">
    <div class="best-under">
      <div class="container">
        <div class="best-under__inner">
          <div class="best-under__header">
            <div class="sell-header sell-header--bold">
              <div class="sell-header__title">
                <h2><?php echo app('translator')->getFromJson('theme.recently_viewed'); ?></h2>
              </div>
              <div class="header-line">
                <span></span>
              </div>
              <div class="best-deal__arrow">
                <ul>
                  <li>
                    <button class="left-arrow slider-arrow slick-arrow best-under-left"><i class="fal fa-chevron-left"></i></button>
                  </li>
                  <li>
                    <button class="right-arrow slider-arrow slick-arrow best-under-right"><i class="fal fa-chevron-right"></i></button>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="best-under__items">
            <div class="best-under__items-inner">
              
              <?php echo $__env->make('theme::partials._product_horizontal', ['products' => $recently_viewed_items, 'title' => 1, 'pricing' => 1, 'hover' => 1, 'ratings' => 1], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php /**PATH H:\xampp\htdocs\summerstreet\public\themes\default/views/sections/recent_views.blade.php ENDPATH**/ ?>