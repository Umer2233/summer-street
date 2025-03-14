<div class="product-info-price">
  <span class="product-info-price-new">
    <?php echo get_formated_price($item->current_sale_price(), config('system_settings.decimals', 2)); ?>

  </span>

  <?php if($item->hasOffer()): ?>
    <span class="old-price"><?php echo get_formated_price($item->sale_price, config('system_settings.decimals', 2)); ?></span>
  <?php endif; ?>
</div>


<?php /**PATH /home/bitsclansolution/summerstreet/public/themes/default/views/layouts/pricing.blade.php ENDPATH**/ ?>