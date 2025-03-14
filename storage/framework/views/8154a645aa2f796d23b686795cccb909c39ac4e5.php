<?php $__env->startSection('content'); ?>
  <!-- CATEGORY COVER IMAGE -->
  

  <!-- HEADER SECTION -->
  <?php echo $__env->make('theme::headers.category_group_page', ['category' => $categoryGroup], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- CONTENT SECTION -->
  <?php echo $__env->make('theme::contents.category_page', ['category' => $categoryGroup], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- BROWSING ITEMS -->
  <?php echo $__env->make('theme::sections.recent_views', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- bottom Banner -->
  <?php echo $__env->make('theme::banners.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme::layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bitsclansolution/summerstreet/public/themes/default/views/category_group.blade.php ENDPATH**/ ?>