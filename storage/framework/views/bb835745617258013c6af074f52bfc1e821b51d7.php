<?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<span class="label label-outline"><?php echo e($category->name, false); ?></span>
	<?php if($loop->iteration > 2): ?>
		<span class="text-primary indent10">
			<?php echo trans('app.and_in_more_categories', ['count' => $product->categories->count()]); ?>

		</span>

		<?php break; ?>
	<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/bitsclansolution/summerstreet/resources/views/admin/partials/actions/product/category.blade.php ENDPATH**/ ?>