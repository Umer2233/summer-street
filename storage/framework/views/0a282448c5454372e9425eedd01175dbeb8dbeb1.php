<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-body" style="padding: 0px;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="position: absolute; top: 5px; right: 10px; z-index: 9;">×</button>
            <div class="col-md-3 nopadding" style="margin-top: 10px;">
				<img src="<?php echo e(get_storage_file_url(optional($warehouse->image)->path, 'medium'), false); ?>" class="thumbnail" width="100%" alt="<?php echo e(trans('app.image'), false); ?>">
			</div>
            <div class="col-md-9 nopadding">
				<table class="table no-border">
					<tr>
						<th class="text-right"><?php echo e(trans('app.name'), false); ?>:</th>
						<td style="width: 75%;"><?php echo e($warehouse->name, false); ?></td>
					</tr>
		            <?php if($warehouse->manager): ?>
					<tr>
						<th class="text-right"><?php echo e(trans('app.incharge'), false); ?>:</th>
						<td style="width: 75%;"><?php echo e($warehouse->manager->name, false); ?></td>
					</tr>
					<?php endif; ?>
					<tr>
		            	<th class="text-right"><?php echo e(trans('app.status'), false); ?>: </th>
		            	<td style="width: 75%;"><?php echo e(($warehouse->active) ? trans('app.active') : trans('app.inactive'), false); ?></td>
		            </tr>
					<tr>
						<th class="text-right"><?php echo e(trans('app.available_from'), false); ?>:</th>
						<td style="width: 75%;"><?php echo e($warehouse->created_at->toFormattedDateString(), false); ?></td>
					</tr>
					<tr>
						<th class="text-right"><?php echo e(trans('app.updated_at'), false); ?>:</th>
						<td style="width: 75%;"><?php echo e($warehouse->updated_at->toDayDateTimeString(), false); ?></td>
					</tr>
				</table>
			</div>
			<div class="clearfix"></div>
			<!-- Custom Tabs -->
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs nav-justified">
				  <li class="active"><a href="#tab_1" data-toggle="tab">
					<?php echo e(trans('app.inventories'), false); ?>

				  </a></li>
				  <li><a href="#tab_2" data-toggle="tab">
					<?php echo e(trans('app.description'), false); ?>

				  </a></li>
				  <li><a href="#tab_3" data-toggle="tab">
					<?php echo e(trans('app.contact'), false); ?>

				  </a></li>
				</ul>
				<div class="tab-content">
				    <div class="tab-pane active" id="tab_1">
						<table class="table table-hover table-2nd-sort">
							<thead>
								<tr>
									<th><?php echo e(trans('app.image'), false); ?></th>
									<th><?php echo e(trans('app.sku'), false); ?></th>
									<th><?php echo e(trans('app.name'), false); ?></th>
									<th><?php echo e(trans('app.condition'), false); ?></th>
									<th><?php echo e(trans('app.tax'), false); ?></th>
									<th><?php echo e(trans('app.price'), false); ?> <small>( <?php echo e(trans('app.excl_tax'), false); ?> )</small> </th>
									<th><?php echo e(trans('app.quantity'), false); ?></th>
									<th><?php echo e(trans('app.status'), false); ?></th>
									<th><?php echo e(trans('app.option'), false); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $warehouse->inventories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td>
										<?php if($inventory->image): ?>
											<img src="<?php echo e(get_storage_file_url(optional($inventory->image)->path, 'tiny'), false); ?>" class="img-circle img-sm" alt="<?php echo e(trans('app.image'), false); ?>">
										<?php else: ?>
											<img src="<?php echo e(get_storage_file_url(optional($inventory->product->image)->path, 'tiny'), false); ?>" class="img-circle img-sm" alt="<?php echo e(trans('app.image'), false); ?>">
										<?php endif; ?>
									</td>
									<td><?php echo e($inventory->sku, false); ?></td>
									<td><?php echo e($inventory->product->name, false); ?></td>
									<td><?php echo e($inventory->condition, false); ?></td>
									<td><?php echo e(get_formated_decimal($inventory->tax->taxrate).' '. trans('app.percent'), false); ?></td>
									<td>
										<?php if(($inventory->offer_price > 0) && ($inventory->offer_end > \Carbon\Carbon::now())): ?>
											<?php
												$offer_price_help =
													trans('help.offer_starting_time').': '.
													$inventory->offer_start->diffForHumans().' and '.
													trans('help.offer_ending_time').': '.
													$inventory->offer_end->diffForHumans();
											?>

											<small class="text-muted"><?php echo e($inventory->sale_price, false); ?></small><br/>
											<?php echo e(get_formated_currency($inventory->offer_price, 2), false); ?>


											<small class="text-muted" data-toggle="tooltip" data-placement="top" title="<?php echo e($offer_price_help, false); ?>"><sup><i class="fa fa-question"></i></sup></small>
										<?php else: ?>
											<?php echo e(get_formated_currency($inventory->sale_price, 2), false); ?>

										<?php endif; ?>
									</td>
									<td><?php echo e(($inventory->stock_quantity > 0) ? $inventory->stock_quantity : trans('app.out_of_stock'), false); ?></td>
									<td><?php echo e(($inventory->active) ? trans('app.active') : trans('app.inactive'), false); ?></td>
									<td class="row-options">
										<a href="<?php echo e(route('admin.stock.inventory.edit', $inventory->id), false); ?>"><i data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('app.edit'), false); ?>" class="fa fa-edit"></i></a>&nbsp;

										<?php echo Form::open(['route' => ['admin.stock.inventory.trash', $inventory->id], 'method' => 'delete', 'class' => 'data-form']); ?>

											<?php echo Form::button('<i class="fa fa-trash-o"></i>', ['type' => 'submit', 'class' => 'confirm ajax-silent', 'title' => trans('app.trash'), 'data-toggle' => 'tooltip', 'data-placement' => 'top']); ?>

										<?php echo Form::close(); ?>

									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
				    </div>
				    <!-- /.tab-pane -->
				    <div class="tab-pane" id="tab_2">
					  <div class="box-body">
				        <?php if($warehouse->description): ?>
				            <?php echo $warehouse->description; ?>

				        <?php else: ?>
				            <p><?php echo e(trans('app.description_not_available'), false); ?> </p>
				        <?php endif; ?>
					  </div>
				    </div>
				    <!-- /.tab-pane -->
				    <div class="tab-pane" id="tab_3">
				        <table class="table">
				            <?php if($warehouse->primaryAddress): ?>
							<tr>
								<th class="text-right"><?php echo e(trans('app.address'), false); ?>:</th>
								<td style="width: 75%;">
				        			<?php echo $warehouse->primaryAddress->toHtml(); ?>

								</td>
							</tr>
							<?php endif; ?>
				            <?php if($warehouse->email): ?>
							<tr>
								<th class="text-right"><?php echo e(trans('app.email'), false); ?>:</th>
								<td style="width: 75%;"><?php echo e($warehouse->email, false); ?></td>
							</tr>
							<?php endif; ?>
				        </table>
				    </div>
				    <!-- /.tab-pane -->
				</div>
				<!-- /.tab-content -->
			</div>
        </div>
    </div> <!-- / .modal-content -->
</div> <!-- / .modal-dialog --><?php /**PATH /home/bitsclansolution/summerstreet/resources/views/admin/warehouse/_show.blade.php ENDPATH**/ ?>