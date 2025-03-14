
<button type="button" id="filterBtn">
  <span class="sr-only">Filters</span>
  <i class="fas fa-filter"></i>
</button>

<aside class="category-filters">
  <div class="d-flex justify-content-between category-filters-section">
    <h4 class="mb-0 align-self-center fs_15px-s"><strong>Filter Results</strong></h4>
    <span class="fg_light_blue-s align-self-center">Clear All</span>
  </div>
  <div class="accordion" id="accordionExample">
    <?php echo $__env->make('theme::partials._categories_filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    

    
    

    
    

    
    

    
    <div class="card category-filters-section pb-0">
      <div class="card-header" id="heading_two">
        <h2 class="mb-0">
          <button class="btn btn-link text-left pl-0 d-flex justify-content-between btn-block toggle_img-d" type="button" data-toggle="collapse" data-target="#collapse_two" aria-expanded="true" aria-controls="collapse_two">
            <h3><?php echo app('translator')->getFromJson('theme.brand'); ?></h3>
            <span class="align-self-center">
              <img src="../../themes/default/assets/img/plus_icon.svg" data-close="../../themes/default/assets/img/minus_icon.svg" data-open="../../themes/default/assets/img/plus_icon.svg" width="20" height="20" alt="">
            </span>
          </button>
        </h2>
      </div>
  
      <div id="collapse_two" class="collapse " aria-labelledby="heading_two" data-parent="#accordionExample">
        <div class="card-body">
          <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="checkbox">
              <label>
                <input name="brand[<?php echo e(str_replace(' ', '%20', $brand), false); ?>]" class="i-check filter_opt_checkbox" type="checkbox" <?php echo e(Request::has('brand.' . $brand) ? 'checked' : '', false); ?>> <?php echo e(\Str::title(\Str::limit($brand, 21)), false); ?>

              </label>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>

    
    
  </div>  
</aside>
<?php /**PATH /home/bitsclansolution/summerstreet/public/themes/default/views/contents/product_list_sidebar_filters.blade.php ENDPATH**/ ?>