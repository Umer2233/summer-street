<?php $__env->startSection('content'); ?>
  <!-- CONTENT SECTION -->
  <?php echo $__env->make('theme::contents.categories_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Recently Viewed -->
  <?php echo $__env->make('theme::sections.recent_views', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme::layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bitsclansolution/summerstreet/public/themes/default/views/categories.blade.php ENDPATH**/ ?>