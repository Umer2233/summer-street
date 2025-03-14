<?php if($product->featureImage): ?>
	<img src="<?php echo e(get_storage_file_url(optional($product->featureImage)->path, 'tiny'), false); ?>" class="img-sm" alt="<?php echo e(trans('app.featured_image'), false); ?>">
<?php else: ?>
	<img src="<?php echo e(get_storage_file_url(optional($product->image)->path, 'tiny'), false); ?>" class="img-sm" alt="<?php echo e(trans('app.image'), false); ?>">
<?php endif; ?><?php /**PATH /home/bitsclansolution/summerstreet/resources/views/admin/partials/actions/product/image.blade.php ENDPATH**/ ?>