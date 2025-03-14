<div class="container">
  <header class="page-header mt-3">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb nav-breadcrumb">
          <?php echo $__env->make('theme::headers.lists.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php echo $__env->make('theme::headers.lists.categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <li class="active"><?php echo $category->name; ?></li>
        </ol>
      </div>
    </div>
  </header>
</div>
<?php /**PATH /home/bitsclansolution/summerstreet/public/themes/default/views/headers/category_group_page.blade.php ENDPATH**/ ?>