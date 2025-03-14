<?php if(($inventory->offer_price > 0) && ($inventory->offer_end > \Carbon\Carbon::now())): ?>
    <?php
        $offer_price_help =
            trans('help.offer_starting_time') . ': ' .
            $inventory->offer_start->diffForHumans() . ' ' . trans('app.and') . ' ' .
            trans('help.offer_ending_time') . ': ' .
            $inventory->offer_end->diffForHumans();
    ?>

    <small class="text-muted"><?php echo e($inventory->sale_price, false); ?></small><br/>
    <?php echo e(get_formated_currency($inventory->offer_price, 2), false); ?>


    <small class="text-muted" data-toggle="tooltip" data-placement="top" title="<?php echo e($offer_price_help, false); ?>"><sup><i class="fa fa-question"></i></sup></small>
<?php else: ?>
    <?php echo e(get_formated_currency($inventory->sale_price, 2), false); ?>

<?php endif; ?><?php /**PATH /home/bitsclansolution/summerstreet/resources/views/admin/inventory/partials/price.blade.php ENDPATH**/ ?>