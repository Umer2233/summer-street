<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', $inventory)): ?>
	<a href="javascript:void(0)" data-link="<?php echo e(route('admin.stock.inventory.show', $inventory->id), false); ?>"  class="ajax-modal-btn"><i data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('app.detail'), false); ?>" class="fa fa-expand"></i></a>&nbsp;
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $inventory)): ?>
	<a href="<?php echo e(route('admin.stock.inventory.edit', $inventory->id), false); ?>"><i data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('app.edit'), false); ?>" class="fa fa-edit"></i></a>&nbsp;
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $inventory)): ?>
	<?php echo Form::open(['route' => ['admin.stock.inventory.trash', $inventory->id], 'method' => 'delete', 'class' => 'data-form']); ?>

	<?php echo Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit', 'class' => 'confirm ajax-silent', 'title' => trans('app.trash'), 'data-toggle' => 'tooltip', 'data-placement' => 'top']); ?>

	<?php echo Form::close(); ?>

<?php endif; ?>
<?php /**PATH /home/bitsclansolution/summerstreet/resources/views/admin/inventory/partials/options.blade.php ENDPATH**/ ?>