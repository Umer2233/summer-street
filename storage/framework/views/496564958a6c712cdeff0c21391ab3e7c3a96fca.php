<td>
  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('massDelete', App\Product::class)): ?>
    <?php if(\Auth::user()->isFromPlatform() || ($product->inventories_count == 0 && $product->shop_id == \Auth::user()->shop_id)): ?>
      <input id="<?php echo e($product->id, false); ?>" type="checkbox" class="massCheck">
    <?php endif; ?>
  <?php endif; ?>
</td>
<?php /**PATH /home/bitsclansolution/summerstreet/resources/views/admin/partials/actions/product/checkbox.blade.php ENDPATH**/ ?>