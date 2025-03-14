<?php

//working code 
// This will output the barcode as HTML output to display in the browser
// $generator = new Picqer\Barcode\BarcodeGeneratorSVG();
// echo $generator->getBarcode($product->inventories_count, $generator::TYPE_CODE_128);



// This will output the barcode as HTML output to display in the browser
// All detail barcode is 
$array = [
	// $product->gtin,
	// $product->gtin_type,
	// $product->inventories_count,
	// $product->name,
];

// $data = implode(" | ", $array);
// $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
// echo $generator->getBarcode($data, $generator::TYPE_CODE_128);

?>

<!-- <?php if($product->shop && Auth::user()->isFromPlatform()): ?>
	<img src="<?php echo e(get_storage_file_url(optional($product->shop->logo)->path, 'tiny'), false); ?>" class="img-circle img-sm" alt="<?php echo e(trans('app.logo'), false); ?>">
	<p class="indent10">
		<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', $product->shop)): ?>
			<a href="javascript:void(0)" data-link="<?php echo e(route('admin.vendor.shop.show', $product->shop->id), false); ?>"  class="ajax-modal-btn"><?php echo e($product->shop->name, false); ?></a>
		<?php else: ?>
			<?php echo e($product->shop->name, false); ?>

		<?php endif; ?>
	</p>
<?php endif; ?> --><?php /**PATH /home/bitsclansolution/summerstreet/resources/views/admin/partials/actions/product/added_by.blade.php ENDPATH**/ ?>