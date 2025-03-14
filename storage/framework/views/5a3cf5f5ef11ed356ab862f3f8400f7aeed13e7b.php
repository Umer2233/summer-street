
<!-- <?php if(isset($category)): ?> -->
<section class="category-banner-img-wrapper mb-0">
  <div class="banner banner-o-hid cover-img-wrapper" style="background-image:url( <?php echo e(get_cover_img_src($category, 'category'), false); ?> );">
    <div class="page-cover-caption">
      <h5 class="page-cover-title"><?php echo e($category->name, false); ?></h5>
      <p class="page-cover-desc"><?php echo $category->description; ?></p>
    </div>
  </div>
</section>
<!-- <?php endif; ?> -->




<?php /**PATH /home/bitsclansolution/summerstreet/public/themes/default/views/banners/category_cover.blade.php ENDPATH**/ ?>