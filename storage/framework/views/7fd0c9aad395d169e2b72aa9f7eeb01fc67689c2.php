<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="recent__items-box box br_34px-s b_1px-s mnh_320px-s mb-3">
    <!-- <a href="<?php echo e(route('show.product', $item->slug), false); ?>"> -->
      <a href="<?php echo e(route('show.product', $item->slug), false); ?>">
      <div class="recent__items-img box-img pt-2">
        <img src="<?php echo e(get_inventory_img_src($item, 'medium'), false); ?>" data-name="product_image" alt="<?php echo e($item->title, false); ?>" title="<?php echo e($item->title, false); ?>">
      </div>
    </a>

    <?php if(empty($ratings)): ?>
      <div class="recent__items-ratting box-ratting">
        <?php echo $__env->make('theme::partials._ratings', ['ratings' => $item->ratings], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
      </div>
    <?php endif; ?>

    <?php if(empty($title)): ?>
      <div class="recent__items-title box-title">
        <!-- <a href="<?php echo e(route('show.product', $item->slug), false); ?>"><?php echo \Str::limit($item->title, 55); ?></a> -->
        <a href="<?php echo e(route('show.product', $item->slug), false); ?>"><?php echo \Str::limit($item->title, 55); ?></a>
      </div>
    <?php endif; ?>

    <?php if(empty($pricing)): ?>
      <div class="recent__items-price box-price">
        <?php echo $__env->make('theme::partials._home_pricing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
    <?php endif; ?>

    <?php if(empty($hover)): ?>
      <div class="feature__items-action box-action br_26px-s">
        <?php echo $__env->make('theme::partials._btn_quick_view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('theme::partials._btn_wishlist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('theme::partials._btn_add_to_cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
    <?php endif; ?>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php /**PATH H:\xampp\htdocs\summerstreet\public\themes\default/views/partials/_product_horizontal.blade.php ENDPATH**/ ?>