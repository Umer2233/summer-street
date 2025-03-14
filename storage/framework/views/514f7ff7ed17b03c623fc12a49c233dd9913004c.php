<section>
  <div class="container">
    <div class="row mt-5 ">
      <div class="space20">
        <h3><strong>Shop By Category</strong></h3>
      </div>
    </div>
    <div class="row mb-4">
      <?php $__currentLoopData = $all_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($catGroup->subGroups->count()): ?>
          <?php
            $categories_count = $catGroup->subGroups->sum('categories_count');
            $cat_counter = 0;
          ?>
          <div class="col-lg-3 col-md-4 col-12 mt-4">
            <div class="card">
              <div class="card-body text-center crd_br-s  py-3 px-2">
                <a href="<?php echo e(route('categoryGrp.browse', $catGroup->slug), false); ?>" class="text-center">
                  <?php if($catGroup->backgroundImage): ?>
                  
                    <div style="background-image:url(<?php echo e($catGroup->backgroundImage ? get_storage_file_url(optional($catGroup->backgroundImage)->path, 'full') : '', false); ?>); background-position: center; background-repeat: no-repeat;margin-right: 0; background-size: contain;width:100%; height:120px"></div>
                  <?php else: ?>
                    <img src="../../themes/default/assets/img/summer-street-logo.svg" width='100%' height="120" alt="">
                  <?php endif; ?>
                  <h4 class="fg_dark-s mb-3"><strong><?php echo e($catGroup->name, false); ?></strong></h4>
                </a>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
      <div class="col-12 mt-4">
        <h3><strong>What is Lorem Ipsum</strong></h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
      <div class="col-12 mt-4">
        <h3><strong>What is Lorem Ipsum</strong></h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
      <div class="col-12 mt-4">
        <h3><strong>What is Lorem Ipsum</strong></h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
      
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>
<?php /**PATH /home/bitsclansolution/summerstreet/public/themes/default/views/contents/categories_page.blade.php ENDPATH**/ ?>