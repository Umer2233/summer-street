<?php if(Gate::allows('update', $inventory)): ?>
    <a href="javascript:void(0)" data-link="<?php echo e(route('admin.stock.inventory.editQtt', $inventory->id), false); ?>" class="ajax-modal-btn qtt-<?php echo e($inventory->id, false); ?>" data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('app.update'), false); ?>">
        <?php echo e(($inventory->stock_quantity > 0) ? $inventory->stock_quantity : trans('app.out_of_stock'), false); ?>

    </a>
<?php else: ?>
    <?php echo e(($inventory->stock_quantity > 0) ? $inventory->stock_quantity : trans('app.out_of_stock'), false); ?>

<?php endif; ?><?php /**PATH /home/bitsclansolution/summerstreet/resources/views/admin/inventory/partials/quantity.blade.php ENDPATH**/ ?>