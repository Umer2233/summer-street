<?php echo e($product->name, false); ?>


<?php if (! ($product->active)): ?>
    <span class="label label-default indent10"><?php echo e(trans('app.inactive'), false); ?></span>
<?php endif; ?>

<?php if(is_incevio_package_loaded('inspector') && $product->inspection_status && $product->inInspection()): ?>
	<br/>
	<?php echo trans('inspector::lang.inspection') .': '. $product->getInspectionStatus(); ?>

<?php endif; ?><?php /**PATH /home/bitsclansolution/summerstreet/resources/views/admin/partials/actions/product/name.blade.php ENDPATH**/ ?>