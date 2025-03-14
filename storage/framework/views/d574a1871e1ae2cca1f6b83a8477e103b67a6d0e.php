<!-- Main Footer -->
<footer class="main-footer position_relative-s">
  <div class="pull-right hidden-xs">
  	<?php if(auth()->user()->isSuperAdmin()): ?>
	    
  	<?php else: ?>
	  	<span><?php echo e(trans('app.today_is') . ' ' . date('l M-j, Y'), false); ?></span>
  	<?php endif; ?>
  </div>
  <!-- Default to the left -->
  <strong>Copyright &copy; <?php echo e(date('Y'), false); ?> <?php echo e(config('system_settings.name') ?: config('app.name'), false); ?>.</strong> All rights reserved.
</footer><?php /**PATH /home/bitsclansolution/summerstreet/resources/views/admin/footer.blade.php ENDPATH**/ ?>