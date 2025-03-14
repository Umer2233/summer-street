<section class="space40 popular-product-style">
  <div class="product-type">
    <div class="container">
      <div class="product-type__inner popular_product_section_custom">
        <div class="row mx-auto">
          

          <div class="col-lg-6">
            <div class="product-type__col">
              <div class="product-type__col-header product-type__col-header_custom">
                <div class="sell-header">
                  <div class="sell-header__title">
                    <h2><?php echo trans('theme.weekly_popular'); ?></h2>
                  </div>
                  <div class="header-line">
                    <span></span>
                  </div>
                </div>
              </div>
              <div class="product-type__col-product">
                <?php echo $__env->make('theme::partials._product_vertical', ['products' => $weekly_popular], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="product-type__col">
              <div class="product-type__col-header product-type__col-header_custom">
                <div class="sell-header">
                  <div class="sell-header__title">
                    <h2><?php echo trans('theme.monthly_popular'); ?></h2>
                  </div>
                  <div class="header-line">
                    <span></span>
                  </div>
                </div>
              </div>
              <div class="product-type__col-product">
                <?php echo $__env->make('theme::partials._product_vertical', ['products' => $monthly_popular], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<?php /**PATH /home/bitsclansolution/summerstreet/public/themes/default/views/sections/popular.blade.php ENDPATH**/ ?>