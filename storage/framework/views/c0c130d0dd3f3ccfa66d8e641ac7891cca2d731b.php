<section>
  <div class="product-cat">
    <div class="container">
      <div class="product-cat__inner">
        <div class="product-cat__header product-cat__header_custom">
          <div class="sell-header sell-header--bold">
            <div class="sell-header__title featured-category">
              <h2><?php echo e(trans('theme.featured_category'), false); ?></h2>
            </div>
            <div class="header-line">
              <span></span>
            </div>
          </div>
        </div>
        <div class="product-cat__list product-cat__list_custom">
          <div class="row">
            <?php $__currentLoopData = $featured_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-6 col-md-3 col-sm-4 px-1">
                <div class="product-cat__list-item">
                  <a class="product-cat__list-box" href="<?php echo e(route('category.browse', $item->slug), false); ?>">
                    <img src="<?php echo e(get_storage_file_url(optional($item->featureImage)->path, 'full'), false); ?> }}" alt="<?php echo e($item->name, false); ?>">
                  </a>
                  <a class="product-cat__list-text" href="<?php echo e(route('category.browse', $item->slug), false); ?>"><?php echo e($item->name, false); ?></a>
                  <a class="product-cat__list-btn" href="<?php echo e(route('category.browse', $item->slug), false); ?>">Shop now</a>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php /**PATH /home/bitsclansolution/summerstreet/public/themes/default/views/sections/featured_category.blade.php ENDPATH**/ ?>