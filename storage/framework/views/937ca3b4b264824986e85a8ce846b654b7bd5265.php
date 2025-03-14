<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="best-seller__item mb-3  mx-auto w_md-80-s">
    <div class="best-seller__item-inner">
      <div class="best-seller__item-image">
        <a href="<?php echo e(route('show.product', $item->slug), false); ?>">
          
          <img src="<?php echo e(get_inventory_img_src($item, 'small'), false); ?>" data-name="product_image" alt="<?php echo e($item->title, false); ?>" title="<?php echo e($item->title, false); ?>">
        </a>
      </div>
      <div class="best-seller__item-details">
        <div class="best-seller__item-details-inner">
          <div class="best-seller__item-name">
            <a href="<?php echo e(route('show.product', $item->slug), false); ?>"><?php echo \Str::limit($item->title, 80); ?></a>
            
          </div>
          <div class="best-seller__item-rating ">
            <?php echo $__env->make('theme::partials._vertical_ratings', ['ratings' => $item->ratings], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
          </div>
          <div class="best-seller__item-price ">
            <?php echo $__env->make('theme::partials._home_pricing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
          <div class="best-seller__item-utility">
            <?php echo $__env->make('theme::partials._vertical_hover_buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH H:\xampp\htdocs\summerstreet\public\themes\default/views/partials/_product_vertical.blade.php ENDPATH**/ ?>