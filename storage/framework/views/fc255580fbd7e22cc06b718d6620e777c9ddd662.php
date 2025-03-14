<td>
	<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('massDelete', App\Inventory::class)): ?>
		<td><input id="<?php echo e($inventory->id, false); ?>" type="checkbox" class="massCheck"></td>
	<?php endif; ?>
</td><?php /**PATH /home/bitsclansolution/summerstreet/resources/views/admin/inventory/partials/checkbox.blade.php ENDPATH**/ ?>