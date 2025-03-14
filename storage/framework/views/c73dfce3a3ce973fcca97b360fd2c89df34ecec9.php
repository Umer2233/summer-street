<?php if(Auth::user()->isSubscribed() && ! Auth::user()->shop->hide_trial_notice): ?>
	<?php
		$subscription = Auth::user()->getCurrentPlan();
	?>

	<?php if(Auth::user()->isOnTrial()): ?>
		<div class="alert alert-warning alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<strong><i class="icon fa fa-info-circle"></i><?php echo e(trans('app.notice'), false); ?></strong>
			<?php echo e(trans('messages.trial_ends_at', ['ends' => \Carbon\Carbon::now()->diffInDays($subscription->trial_ends_at)]), false); ?>

		</div>
	<?php elseif(Auth::user()->isOnGracePeriod()): ?>
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<strong><i class="icon fa fa-info-circle"></i><?php echo e(trans('app.notice'), false); ?></strong>
			<?php echo e(trans('messages.resume_subscription', ['ends' => \Carbon\Carbon::now()->diffInDays($subscription->ends_at)]), false); ?>


			<?php if(Auth::user()->isMerchant()): ?>
				<span class="pull-right">
		    		<a href="<?php echo e(route('admin.account.subscription.resume'), false); ?>" class="confirm btn bg-navy"><i class="fa fa-rocket"></i>  <?php echo e(trans('app.resume_subscription'), false); ?></a>
				</span>
			<?php endif; ?>
		</div>
	<?php elseif($subscription && $subscription->provider == 'wallet' && $subscription->active()): ?>
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<strong><i class="icon fa fa-info-circle"></i><?php echo e(trans('app.notice'), false); ?></strong>
			<?php echo trans('messages.next_billing_date', ['date' => $subscription->ends_at->toRfc7231String()]); ?>


			<?php if(Auth::user()->isMerchant()): ?>
				<span class="pull-right">
		    		<a href="<?php echo e(route(config('wallet.routes.deposit_form')), false); ?>" class="btn btn-sm bg-navy"><?php echo e(trans('wallet::lang.deposit_fund'), false); ?></a>
				</span>
			<?php endif; ?>
		</div>
	<?php elseif(Auth::user()->isOnGenericTrial()): ?>
		<div class="alert alert-warning alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<strong><i class="icon fa fa-info-circle"></i><?php echo e(trans('app.notice'), false); ?></strong>
			<?php echo e(trans('messages.generic_trial_ends_at', ['ends' => \Carbon\Carbon::now()->diffInDays(Auth::user()->shop->trial_ends_at)]), false); ?>

			<?php if (! (Request::is('admin/account/billing'))): ?>
				<span class="pull-right">
		    		<a href="<?php echo e(route('admin.account.billing'), false); ?>" class="btn bg-navy"><i class="fa fa-rocket"></i>  <?php echo e(trans('app.choose_plan'), false); ?></a>
				</span>
			<?php endif; ?>
		</div>
	<?php endif; ?>
<?php elseif(Auth::user()->hasExpiredPlan()): ?>
	<div class="alert alert-danger">
		<i class="icon fa fa-info-circle"></i><strong><?php echo e(trans('app.notice'), false); ?></strong>
		<?php echo e(trans('messages.trial_expired'), false); ?>

		<?php if (! (Request::is('admin/account/billing'))): ?>
			<span class="pull-right">
	    		<a href="<?php echo e(route('admin.account.billing'), false); ?>" class="btn bg-navy"><i class="fa fa-rocket"></i>  <?php echo e(trans('app.choose_plan'), false); ?></a>
			</span>
		<?php endif; ?>
	</div>
<?php endif; ?><?php /**PATH /home/bitsclansolution/summerstreet/resources/views/admin/partials/_subscription_notice.blade.php ENDPATH**/ ?>