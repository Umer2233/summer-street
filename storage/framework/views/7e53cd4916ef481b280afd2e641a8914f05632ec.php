<!-- Main Header -->
<header class="main-header pt_14px-s ff_raleway-s">
  <!-- Logo -->
  <a href="<?php echo e(url('/'), false); ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    
    <img src="<?php echo e(asset('images/summer_street_logo.svg'), false); ?>" class="" width="100%" height="54" alt="">
    <!-- logo for regular state and mobile devices -->
    
  </a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="javascript::void(0)" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <ul class="nav navbar-nav hidden-xs">
      <li class="fs_32px-s nav_header-s">
        <a href="<?php echo e(route('admin.account.profile'), false); ?>" class="fg_black-s">
          <strong><?php echo e(trans('app.welcome') . ' ' . Auth::user()->getName(), false); ?></strong>
          <!-- <strong><?php echo e(trans('app.welcome'), false); ?> Admin</strong> -->
        </a>
      </li>
      <li class="p_10px-s">
        <a href="<?php echo e(url('/'), false); ?>" target="_blank" class="store_font_btn-s">
          
          <img src="<?php echo e(asset('images/internet.svg'), false); ?>" class="" width="17" height="17" alt="store">
          <?php echo e(trans('app.store_front'), false); ?>

        </a>
      </li>
    </ul>

    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages Menu-->
        <li class="dropdown messages-menu p_10px-s">
          <a href="javascript:void(0)" class="dropdown-toggle header_menu_btn-s" data-toggle="dropdown">
            <i class="fa fa-envelope-o"></i>
            <?php if($count_message = $unread_messages->count()): ?>
            <span class="label label-success"><?php echo e($count_message, false); ?></span>
            <?php endif; ?>
          </a>
          <ul class="dropdown-menu">
            <li class="header"><?php echo e(trans('messages.message_count', ['count' => $count_message]), false); ?></li>
            <li>
              <ul class="menu">
                <?php $__empty_1 = true; $__currentLoopData = $unread_messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if($loop->index > 5) continue; ?>

                <li>
                  <!-- start message -->
                  <a href="<?php echo e(route('admin.support.message.show', $message), false); ?>">
                    <div class="pull-left">
                      <img src="<?php echo e(get_avatar_src($message->customer, 'tiny'), false); ?>" class="img-circle" alt="<?php echo e(trans('app.avatar'), false); ?>">
                    </div>
                    <h4>
                      <?php echo $message->subject; ?>

                      <small><i class="fa fa-clock-o"></i> <?php echo e($message->created_at->diffForHumans(), false); ?></small>
                    </h4>

                    <p>
                      <?php echo e(Str::limit($message->message, 100), false); ?>

                    </p>
                  </a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul><!-- /.menu -->
            </li>
            <li class="footer"><a href="<?php echo e(url('admin/support/message/labelOf/' . App\Message::LABEL_INBOX), false); ?>"><?php echo e(trans('app.go_to_msg_inbox'), false); ?></a></li>
          </ul>
        </li><!-- /.messages-menu -->

        <!-- Notifications Menu -->
        <li class="dropdown notifications-menu p_10px-s" id="notifications-dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle header_menu_btn-s" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <?php if($count_notification = Auth::user()->unreadNotifications->count()): ?>
            <span class="label label-warning"><?php echo e($count_notification, false); ?></span>
            <?php endif; ?>
          </a>
          <ul class="dropdown-menu">
            <li class="header"><?php echo e(trans('messages.notification_count', ['count' => $count_notification]), false); ?></li>
            <li>
              <ul class="menu">
                <?php $__currentLoopData = Auth::user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                  <?php
                  $notification_view = 'admin.partials.notifications.' . Str::snake(class_basename($notification->type));
                  ?>

                  <?php echo $__env->first([$notification_view, 'admin.partials.notifications.default'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul><!-- .menu -->
            </li>
            <li class="footer"><a href="<?php echo e(route('admin.notifications'), false); ?>"><?php echo e(trans('app.view_all_notifications'), false); ?></a></li>
          </ul>
        </li><!-- /.notifications-menu -->

        <!-- Announcement Menu -->
        <?php if($active_announcement = get_global_announcement()): ?>
        <li class="dropdown tasks-menu p_10px-s" id="announcement-dropdown">
          <a href="javascript:void(0)" class="dropdown-toggle header_menu_btn-s" data-toggle="dropdown">
            <i class="fa fa-bullhorn"></i>
            <?php if($active_announcement && $active_announcement->updated_at > Auth::user()->read_announcements_at): ?>
            <span class="label"><i class="fa fa-circle"></i></span>
            <?php endif; ?>
          </a>
          <ul class="dropdown-menu">
            <li>
              <?php echo $active_announcement->parsed_body; ?>

              <?php if($active_announcement->action_url): ?>
              <span class="indent10">
                <a href="<?php echo e($active_announcement->action_url, false); ?>" class="btn btn-flat btn-default btn-xs"><?php echo e($active_announcement->action_text, false); ?></a>
              </span>
              <?php endif; ?>
            </li>
          </ul>
        </li><!-- /.notifications-menu -->
        <?php endif; ?>

        <!-- Wallet -->
        <?php if(Auth::user()->isMerchant() && is_incevio_package_loaded('wallet')): ?>
        <li class="dropdown tasks-menu" id="wallet-dropdown">
          <a href="<?php echo e(route(config('wallet.routes.wallet')), false); ?>">
            <span><?php echo e(trans('wallet::lang.balance'), false); ?>: </span>
            <?php echo e(get_formated_currency(Auth::user()->shop->balance, config('system_settings.decimals', 2)), false); ?>

          </a>
        </li>
        <?php endif; ?>

        <li class="user user-menu p_10px-s">
          <a href="<?php echo e(route('admin.account.profile'), false); ?>" class="user_btn-s">
            <?php if(Auth::user()->image): ?>
            <img src="<?php echo e(get_storage_file_url(Auth::user()->image->path, 'tiny'), false); ?>" class="user-image" alt="<?php echo e(trans('app.avatar'), false); ?>">
            <?php else: ?>
            <img src="<?php echo e(get_gravatar_url(Auth::user()->email, 'tiny'), false); ?>" class="user-image" alt="<?php echo e(trans('app.avatar'), false); ?>">
            <?php endif; ?>
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            
          </a>
        </li>

        <li class="p_10px-s">
          <a href="<?php echo e(Request::session()->has('impersonated') ? route('admin.secretLogout') : route('logout'), false); ?>" class="logout_btn-s">
            
            <img src="<?php echo e(asset('images/logout_icon.svg'), false); ?>" class="" width="20" height="20" alt="logout">
            
          </a>
        </li>

        <li>
          
        </li>
      </ul>
    </div>
  </nav>
</header><?php /**PATH /home/bitsclansolution/summerstreet/resources/views/admin/header.blade.php ENDPATH**/ ?>