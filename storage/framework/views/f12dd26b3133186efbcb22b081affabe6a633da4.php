<?php $__env->startSection('content'); ?>
    <div class="box login-box-body w_50-s mb_0px-s pt_30px-s">
         <div class="text-right px_100px-s">
          <!-- <span class="fg_dark_blue-s">
            Don't have an account?
            <a class="fw_800-s btn btn-link  pr_0px-s pl_2px-s ff_poppins-s" href="<?php echo e(route('register'), false); ?>" class="text-center">
              <strong><?php echo e(trans('app.form.register_as_merchant'), false); ?></strong>
            </a>
          </span> -->
          
         </div> 
      <div class="modal-login-col-data">
        <div class="box-header with-border">
          <h2 class="modal-login-h"><strong><?php echo e(trans('Login to your account!'), false); ?></strong></h2>
        </div> <!-- /.box-header -->
        <div class="box-body form_box_body-s">
            <?php echo Form::open(['route' => 'login', 'id' => 'form', 'data-toggle' => 'validator']); ?>

                <div class="form-group has-feedback login_frm_group-s">
                     <div class=" d_flex-s">
            <div class="align-self-center padding_10px_27px-s">
              <img src="<?php echo e(asset('images/email_icon.svg'), false); ?>" width="15" height="15" class="" alt="username">
            </div>
                    <?php echo Form::email('email', null, ['class' => 'form-control input-lg border_0px-s pl_0px-s', 'placeholder' => trans('app.form.email_address'), 'required']); ?>

                    </div>
                   <!--  <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group has-feedback login_frm_group-s">
                    <div class="d_flex-s">
            <div class="align-self-center padding_10px_27px-s">
              <img src="<?php echo e(asset('images/user_img.svg'), false); ?>" width="15" height="15" class="" alt="username">
            </div>
                    <?php echo Form::password('password', ['class' => 'form-control input-lg border_0px-s pl_0px-s', 'id' => 'password', 'placeholder' => trans('app.form.password'), 'data-minlength' => '6', 'required']); ?>

                   <!--  <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
                </div>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label>
                                <?php echo Form::checkbox('remember', null, null, ['class' => 'icheck']); ?> <?php echo e(trans('app.form.remember_me'), false); ?>

                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <?php echo Form::submit(trans('app.form.login'), ['class' => 'btn btn-block btn-lg btn-flat btn-primary login_btn-s py-3 ff_poppins-s fs_11px-s fg_white-s fw_bold-s']); ?>

                    </div>
                </div>
            <?php echo Form::close(); ?>

        </div>
         <?php if(count($errors) > 0): ?>
          <div class="alert alert-danger">
              <strong><?php echo e(trans('app.error'), false); ?>!</strong> <?php echo e(trans('messages.input_error'), false); ?><br><br>
              <ul class="list-group">
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li class="list-group-item list-group-item-danger"><?php echo e($error, false); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </div>
      <?php endif; ?>
    </div>

        <a class="btn btn-link" href="<?php echo e(route('password.request'), false); ?>"><?php echo e(trans('app.form.forgot_password'), false); ?></a>
        <a class="btn btn-link" href="<?php echo e(route('register'), false); ?>" class="text-center"><?php echo e(trans('app.form.register_as_merchant'), false); ?></a>
    </div>

    <?php if(config('app.demo') == TRUE): ?>
        <div class="box login-box-body">
            <div class="box-header with-border">
              <h3 class="box-title">Demo Login::</h3>
            </div> <!-- /.box-header -->
            <div class="box-body">
                <p><strong>ADMIN::</strong> Username: <strong>superadmin@demo.com</strong> | Password: <strong>123456</strong> </p>
                <p><strong>MERCHANT::</strong> Username: <strong>merchant@demo.com</strong> | Password: <strong>123456</strong> </p>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bitsclansolution/summerstreet/resources/views/auth/login.blade.php ENDPATH**/ ?>