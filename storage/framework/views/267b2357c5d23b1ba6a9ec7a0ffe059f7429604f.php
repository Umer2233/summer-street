<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <?php echo Form::model($warehouse, ['method' => 'PUT', 'route' => ['admin.stock.warehouse.update', $warehouse->id], 'files' => true, 'id' => 'form', 'data-toggle' => 'validator']); ?>

        <div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <?php echo e(trans('app.form.form'), false); ?>

        </div>
        <div class="modal-body">
            <?php echo $__env->make('admin.warehouse._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="modal-footer">
            <?php echo Form::submit(trans('app.update'), ['class' => 'btn btn-flat btn-new']); ?>

        </div>
        <?php echo Form::close(); ?>

    </div> <!-- / .modal-content -->
</div> <!-- / .modal-dialog --><?php /**PATH /home/bitsclansolution/summerstreet/resources/views/admin/warehouse/_edit.blade.php ENDPATH**/ ?>