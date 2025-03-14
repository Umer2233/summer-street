<?php $__env->startSection('content'); ?>
  <div class="box login-box-body w_50-s mb_0px-s pt_30px-s">
    <div class="text-right px_100px-s">
      <span class="fg_dark_blue-s">
        Don't have an account?
        <a class="fw_800-s btn btn-link  pr_0px-s pl_2px-s ff_poppins-s" href="<?php echo e(route('customer.register'), false); ?>" class="text-center">
          <strong>Create Account</strong>
        </a>
      </span>
      
    </div>  
    <div class="modal-login-col-data">
      <div class="box-header">
        <h2 class="modal-login-h"><strong><?php echo e(trans('Login to your account!'), false); ?></strong></h2>
      </div> <!-- /.box-header -->
      <div class="box-body form_box_body-s">
        <?php if(config('system_settings.social_auth')): ?>
          <div class="social-auth-links text-center d_flex-s  mb_30px-s">
            <a href="<?php echo e(route('customer.login.social', 'google'), false); ?>" class="btn w_100-s ff_open_sans-s br_blue-s fg_blue-s fs_11px-s btn-google google_btn-s py-3  btn-lg flat">
              
              <img src="<?php echo e(asset('images/goole_img.svg'), false); ?>" width="15"  height="15" class="" alt="google img">
  
              <strong><?php echo e(trans('Google'), false); ?></strong>
            </a>
  
            <a href="<?php echo e(route('customer.login.social', 'facebook'), false); ?>" class="btn w_100-s ff_open_sans-s fg_blue-s ml_10px-s br_blue-s fs_11px-s btn-facebook fb_btn-s py-3 btn-lg flat">
              
              <img src="<?php echo e(asset('images/fb_img.svg'), false); ?>" width="15"  height="15" class="" alt="google img">
               <strong><?php echo e(trans('Facebook'), false); ?></strong>
            </a>
  
            
          </div> <!-- /.social-auth-links -->
        <?php endif; ?>
        <?php echo Form::open(['route' => 'customer.login.submit', 'id' => 'form', 'data-toggle' => 'validator']); ?>

        <div class="form-group has-feedback login_frm_group-s">
          <div class=" d_flex-s">
            <div class="align-self-center padding_10px_27px-s">
              <img src="<?php echo e(asset('images/pass_img.svg'), false); ?>" width="15" height="15" class="" alt="username">
            </div>
            <?php echo Form::email('email', null, ['class' => 'pl_0px-s form-control input-lg border_0px-s', 'placeholder' => trans('theme.placeholder.email'), 'required']); ?>

          </div>
          
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group has-feedback login_frm_group-s">
          <div class="d_flex-s">
            <div class="align-self-center padding_10px_27px-s">
              <img src="<?php echo e(asset('images/user_img.svg'), false); ?>" width="15" height="15" class="" alt="username">
            </div>
            <?php echo Form::password('password', ['class' => 'pl_0px-s form-control input-lg border_0px-s', 'id' => 'password', 'placeholder' => trans('theme.placeholder.password'), 'data-minlength' => '6', 'required']); ?>

            
          </div>
          <div class="help-block with-errors"></div>
        </div>
        <div class="">
          <div class="mb_10px-s">
            
            
          </div>
          <div class="">
            <?php echo Form::submit(trans('theme.button.login'), ['class' => 'btn btn-block btn-lg flat login_btn-s py-3 ff_poppins-s fs_11px-s fg_white-s fw_bold-s']); ?>

          </div>
        </div>
        <?php echo Form::close(); ?>


      </div>
    </div>
  </div>

  <?php if(config('app.demo') == true): ?>
    <div class="box login-box-body">
      <div class="box-header with-border">
        <h3 class="box-title">Demo Login::</h3>
      </div> <!-- /.box-header -->
      <div class="box-body">
        <p>Username: <strong>customer@demo.com</strong> | Password: <strong>123456</strong> </p>
      </div>
    </div>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme::auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bitsclansolution/summerstreet/public/themes/default/views/auth/login.blade.php ENDPATH**/ ?>