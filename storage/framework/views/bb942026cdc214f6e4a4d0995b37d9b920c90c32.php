<style>
  @import  url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
  @import  url('https://fonts.googleapis.com/css?family=Open Sans');
</style>

<div class="modal auth-modal fade modal-login-cus ff_poppins-s" id="loginModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content flat">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="modal-title"><?php echo e(trans('theme.account_login'), false); ?></span>
      </div>
      <div class="modal-body">
        
        <div class="row"> 

          <!--Modal left column start-->
          <div class="col-md-6 col-12 pl-1 pr-0 h_fit_content-s ">
              <img src="../../themes/default/assets/img/login-modal-left.png" width="100%" class="mh_600px-s modal-login-img-style" alt="">
          </div>
          <!--Modal right column start-->
          
          <div class="col-md-6 col-12  px-lg-5">
            <div class="pt-5 px_100px-s">
              <div class="text-right">
                <span class="fg_blue-s">Don't have an account?</span><a href="javascript:void(0);" class="btn btn-link ff_poppins-s  fw_800-s pr-0 pl-1" data-dismiss="modal" data-toggle="modal" data-target="#createAccountModal"><?php echo e(trans('Create Account'), false); ?></a>
                <!-- <a href="javascript:void(0);" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#createAccountModal"><?php echo e(trans('theme.register_here'), false); ?></a> -->
              </div>   
            </div>
            <div class="row d-flex align-self-center h_100-s pb-5 px-3">
              
              <div class="col-12 pb-4 modal-login-col-data">
                <div>
                  <h2 class="modal-login-h">Login to your account!</h2>
  
                  <div class="social-auth-links text-center">
                    <div class="row pt-3">
                      <div class="col-6 social-auth-links-col-right-pd">
                        <a href="<?php echo e(route('customer.login.social', 'google'), false); ?>" class="btn btn-block fg_blue-s fs_11px-s btn-google google_btn-s py-3  btn-lg flat">
                          
                          <img src="../../themes/default/assets/img/goole_img.svg" width="15"  height="15" class="" alt="google img">
                           <span><strong><?php echo e(trans('Google'), false); ?></strong></span>
                          </a>
                      </div>
                      <div class="col-6 social-auth-links-col-left-pd">
                        <a href="<?php echo e(route('customer.login.social', 'facebook'), false); ?>" class="btn btn-block fg_blue-s fs_11px-s btn-facebook fb_btn-s py-3 btn-lg flat">
                          
                          <img src="../../themes/default/assets/img/fb_img.svg" width="15"  height="15" class="" alt="facebook img">
                           <strong><?php echo e(trans('Facebook'), false); ?></strong>
                          </a>
                        <!-- <a href="<?php echo e(route('customer.login.social', 'facebook'), false); ?>" class="btn btn-block btn-social btn-facebook btn-lg flat"><i class="fab fa-facebook-f"></i> <?php echo e(trans('theme.button.login_with_fb'), false); ?></a> -->
                      </div>
                    </div>
                  </div>
                  <?php echo Form::open(['route' => 'customer.login.submit', 'id' => 'loginForm', 'data-toggle' => 'validator', 'novalidate']); ?>

                  <div class="form-group ">
                    <div class="d-flex frm_group-s">
                      <div class="align-self-center pl-4 pr-2">
                        <img src="../../themes/default/assets/img/email_icon.svg" width="15" height="15" class="" alt="username">
                      </div>
                      
                      <input name="email" id="email" class="form-control input-lg input-s mt-2" type="email" placeholder="<?php echo e(trans('theme.placeholder.your_email'), false); ?>" required />
                    </div>
                    
                    <div class="help-block with-errors"></div>
                  </div>
                  
                  <div class="form-group mt-4">
                    <div class="d-flex frm_group-s">
                      <div class="align-self-center pl-4 pr-2">
                        <img src="../../themes/default/assets/img/user_img.svg" width="15" height="15" class="" alt="password">
                      </div>
                      <input name="password" id="password" class="form-control input-lg input-s mt-2" type="password" placeholder="<?php echo e(trans('Password'), false); ?>" required />
                      <!-- <input name="password" id="password" class="form-control input-lg flat" type="password" placeholder="<?php echo e(trans('theme.placeholder.password'), false); ?>" required /> -->
                    </div>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="row">
                    
                    <div class="col-12 pt-3">
                      <strong><input class="btn btn-block btn-lg flat login_btn-s py-3 ff_poppins-s fs_11px-s fg_white-s fw_bold-s" type="submit" value="<?php echo e(trans('theme.button.login'), false); ?>"></strong>
                    </div>
                  </div>
                  <?php echo Form::close(); ?>

  
                  
                </div>
              </div>
            </div>
              
          </div>
        </div>
      </div><!-- /.modal-body -->

      <div class="modal-footer">
        <?php if(config('app.demo') == true): ?>
          <h4>Demo Login::</h4>
          <p>Username: <strong>customer@demo.com</strong> | Password: <strong>123456</strong> </p>
        <?php endif; ?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /#loginModal -->

<div class="modal auth-modal fade ff_poppins-s" id="createAccountModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content flat">
      
      <div class="modal-body mx-md-0 mx-1">
        <div class="row">
          <!--Modal left column - START -->
          <div class="col-md-6 col-12 pl-0 pr-0 h_fit_content-s">
            <img src="../../themes/default/assets/img/login-modal-left.png" width="100%" class="mh_700px-s" alt="">
          </div>
          <!--Modal left column - END -->

          <!--Modal right column - START-->
          <div class="col-md-6 col-12  px-lg-5">
            <div class="pt-5 px_100px-s">
              <div class="text-right">
                <span class="fg_blue-s">Do you have account?</span><a href="javascript:void(0);" class="btn btn-link ff_poppins-s fw_800-s pr-0 pl-1" data-dismiss="modal" data-toggle="modal" data-target="#loginModal"><?php echo e(trans('Log In'), false); ?></a>
                <!-- <a href="javascript:void(0);" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#createAccountModal"><?php echo e(trans('theme.register_here'), false); ?></a> -->
              </div>   
            </div>
            <div class="row d-flex align-self-center h_100-s pb-5 px-3">
              <div class="col-12 pb-4 modal-login-col-data">
                <div class="">
                  <div>
                    <h2 class="modal-login-h">Create account</h2>
                    <p class="fg_blue-s mt-3 ff_poppins-s opacity_5-s">Follow the instructions to make it easier to register and you will be able to explore inside.</p>
                  </div>
                  
                  <?php echo Form::open(['route' => 'customer.register', 'id' => 'registerForm', 'data-toggle' => 'validator', 'novalidate']); ?>

                  
                  <div class="form-group mt-4">
                    <div class="d-flex frm_group-s">
                      <div class="align-self-center pl-4 pr-2">
                        <img src="../../themes/default/assets/img/pass_img.svg" width="15" height="15" class="" alt="username">
                      </div>
                      <input name="name" class="form-control input-lg input-s mt-2" placeholder="<?php echo e(trans('Username'), false); ?>" type="text" required />
                    </div>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group mt-3">
                    <div class="d-flex frm_group-s">
                      <div class="align-self-center pl-4 pr-2">
                        <img src="../../themes/default/assets/img/email_icon.svg" width="15" height="15" class="" alt="email">
                      </div>
                      <input name="email" class="form-control input-lg input-s mt-2" placeholder="<?php echo e(trans('Email'), false); ?>" type="email" required />
                    </div>
                    <div class="help-block with-errors"></div>
                  </div>
  
                  <div class="form-group mt-3">
                    <div class="d-flex frm_group-s">
                      <div class="align-self-center pl-4 pr-2">
                        <img src="../../themes/default/assets/img/user_img.svg" width="15" height="15" class="" alt="password">
                      </div>
                      <input name="password" class="form-control input-lg input-s mt-2" placeholder="<?php echo e(trans('theme.placeholder.password'), false); ?>" type="password" required />
                    </div>
                    <div class="help-block with-errors"></div>
                  </div>
  
                  
  
                  
  
                  
  
                  <div class="row mt-3">
                    
                    <div class="col-12">
                      <input class="btn btn-block btn-lg flat login_btn-s py-3 fs_11px-s text-white ff_poppins-s fw_bold-s" type="submit" value="<?php echo e(trans('theme.create_account'), false); ?>" />
                    </div>
                  </div>
                  <?php echo Form::close(); ?>

  
                  
  
                  <div class="social-auth-links text-center mt-4">
                    <div class="row">
                      <div class="col-6 social-auth-links-col-right-pd">
                        <a href="<?php echo e(route('customer.login.social', 'google'), false); ?>" class="btn btn-block fg_blue-s fs_11px-s btn-google google_btn-s py-3  btn-lg flat">
                          
                          <img src="../../themes/default/assets/img/goole_img.svg" width="15"  height="15" class="" alt="google img">
                          <span><strong><?php echo e(trans('Google'), false); ?></strong></span>
                           
                        </a>
                      </div>
                      <div class="col-6 social-auth-links-col-left-pd">
                        <a href="<?php echo e(route('customer.login.social', 'facebook'), false); ?>" class="btn btn-block fg_blue-s fs_11px-s btn-facebook fb_btn-s py-3 btn-lg flat">
                          
                          <img src="../../themes/default/assets/img/fb_img.svg" width="15"  height="15" class="" alt="facebook img">
                          <span><strong><?php echo e(trans('Facebook'), false); ?></strong></span>
                           
                          </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              
          </div>
          <!--Modal right column - END-->

        </div>
        
      </div><!-- /.modal-body -->
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /#createAccountModal -->

<div class="modal auth-modal fade" id="passwordResetModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content flat">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="modal-title"><?php echo e(trans('theme.password_recovery'), false); ?></span>
      </div>
      <div class="modal-body">
        <?php echo Form::open(['route' => 'customer.password.email', 'id' => 'psswordRecoverForm', 'data-toggle' => 'validator', 'novalidate']); ?>

        <div class="form-group">
          <input name="email" class="form-control input-lg flat" placeholder="<?php echo e(trans('theme.placeholder.your_email'), false); ?>" type="email" required />
          <div class="help-block with-errors"></div>
        </div>

        <input class="btn btn-block flat btn-primary" type="submit" value="<?php echo e(trans('theme.button.recover_password'), false); ?>" />
        <?php echo Form::close(); ?>

      </div><!-- /.modal-body -->
      <div class="modal-footer"></div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /#passwordResetModal -->


<?php if(config('services.recaptcha.key')): ?>
  <?php echo $__env->make('theme::scripts.recaptcha', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH H:\xampp\htdocs\summerstreet\public\themes\default/views/auth/modals.blade.php ENDPATH**/ ?>