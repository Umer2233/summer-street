<section class="section-home-slider mb-9">
  <div id="ei-slider" class="ei-slider container">
    <ul class="ei-slider-large">
      <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
          <a href="<?php echo e($slider['link'], false); ?>">
            <img src="<?php echo e(get_storage_file_url($slider['feature_image']['path'], 'full'), false); ?>" alt="<?php echo e($slider['title'] ?? 'Slider Image ' . $loop->count, false); ?>">
          </a>

          <?php if($slider['sub_title'] || $slider['title'] || $slider['description']): ?>
            <div class="banner__content-<?php echo e($slider['text_position'] == 'right' ? 'left' : 'right', false); ?>"></div>

            <div class="banner__content-<?php echo e($slider['text_position'] ?? 'right', false); ?>">
              <div class="banner__content-sub-title ">
                <h3 style="color: <?php echo e($slider['sub_title_color'], false); ?>"><?php echo $slider['sub_title']; ?></h3>
              </div>
              <div class="banner__content-title">
                <h1 style="color: <?php echo e($slider['title_color'], false); ?>"><?php echo $slider['title']; ?></h1>
              </div>
              <div class="banner__content-text">
                <p style="color: <?php echo e($slider['description_color'], false); ?>"><?php echo $slider['description']; ?></p>
              </div>
              <?php if(!empty($slider['link'])): ?>
                <div class="banner__content-btn">
                  <a href="<?php echo e($slider['link'], false); ?>"><?php echo e(trans('theme.shop_now'), false); ?></a>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul><!-- ei-slider-large -->

    <ul class="ei-slider-thumbs">
      <li class="ei-slider-element">Current</li>

      <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
          <a href="javascript:void(0)">Slide <?php echo e($loop->count, false); ?></a>
          <img src="<?php echo e(isset($slider['images'][0]['path']) ? get_storage_file_url($slider['images'][0]['path'], 'slider_thumb') : get_storage_file_url($slider['feature_image']['path'], 'slider_thumb'), false); ?>" alt="thumbnail <?php echo e($loop->count, false); ?>" />
        </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
</section>
<?php /**PATH H:\xampp\htdocs\summerstreet\public\themes\default/views/sections/slider.blade.php ENDPATH**/ ?>