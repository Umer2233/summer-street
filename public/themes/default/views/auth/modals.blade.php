<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
  @import url('https://fonts.googleapis.com/css?family=Open Sans');
</style>

<div class="modal auth-modal fade modal-login-cus ff_poppins-s" id="loginModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content flat">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="modal-title">{{ trans('theme.account_login') }}</span>
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
                <span class="fg_blue-s">Don't have an account?</span><a href="javascript:void(0);" class="btn btn-link ff_poppins-s  fw_800-s pr-0 pl-1" data-dismiss="modal" data-toggle="modal" data-target="#createAccountModal">{{ trans('Create Account') }}</a>
                <!-- <a href="javascript:void(0);" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#createAccountModal">{{ trans('theme.register_here') }}</a> -->
              </div>   
            </div>
            <div class="row d-flex align-self-center h_100-s pb-5 px-3">
              
              <div class="col-12 pb-4 modal-login-col-data">
                <div>
                  <h2 class="modal-login-h">Login to your account!</h2>
  
                  <div class="social-auth-links text-center">
                    <div class="row pt-3">
                      <div class="col-6 social-auth-links-col-right-pd">
                        <a href="{{ route('customer.login.social', 'google') }}" class="btn btn-block fg_blue-s fs_11px-s btn-google google_btn-s py-3  btn-lg flat">
                          {{-- <i class="fab fa-google"></i> --}}
                          <img src="../../themes/default/assets/img/goole_img.svg" width="15"  height="15" class="" alt="google img">
                           <span><strong>{{ trans('Google') }}</strong></span>
                          </a>
                      </div>
                      <div class="col-6 social-auth-links-col-left-pd">
                        <a href="{{ route('customer.login.social', 'facebook') }}" class="btn btn-block fg_blue-s fs_11px-s btn-facebook fb_btn-s py-3 btn-lg flat">
                          {{-- <i class="fab fa-facebook"></i> --}}
                          <img src="../../themes/default/assets/img/fb_img.svg" width="15"  height="15" class="" alt="facebook img">
                           <strong>{{ trans('Facebook') }}</strong>
                          </a>
                        <!-- <a href="{{ route('customer.login.social', 'facebook') }}" class="btn btn-block btn-social btn-facebook btn-lg flat"><i class="fab fa-facebook-f"></i> {{ trans('theme.button.login_with_fb') }}</a> -->
                      </div>
                    </div>
                  </div>
                  {!! Form::open(['route' => 'customer.login.submit', 'id' => 'loginForm', 'data-toggle' => 'validator', 'novalidate']) !!}
                  <div class="form-group ">
                    <div class="d-flex frm_group-s">
                      <div class="align-self-center pl-4 pr-2">
                        <img src="../../themes/default/assets/img/email_icon.svg" width="15" height="15" class="" alt="username">
                      </div>
                      {{-- <input name="username" id="username-d" class="form-control input-lg input-s mt-2" type="text"  placeholder="{{ trans('Username') }}" required /> --}}
                      <input name="email" id="email" class="form-control input-lg input-s mt-2" type="email" placeholder="{{ trans('theme.placeholder.your_email') }}" required />
                    </div>
                    
                    <div class="help-block with-errors"></div>
                  </div>
                  
                  <div class="form-group mt-4">
                    <div class="d-flex frm_group-s">
                      <div class="align-self-center pl-4 pr-2">
                        <img src="../../themes/default/assets/img/user_img.svg" width="15" height="15" class="" alt="password">
                      </div>
                      <input name="password" id="password" class="form-control input-lg input-s mt-2" type="password" placeholder="{{ trans('Password') }}" required />
                      <!-- <input name="password" id="password" class="form-control input-lg flat" type="password" placeholder="{{ trans('theme.placeholder.password') }}" required /> -->
                    </div>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="row">
                    {{-- <div class="col-12">
                      <div class="form-group">
                        <label>
                          <input name="remeber" id="remeber" class="i-check-blue" type="checkbox" /> {{ trans('theme.remember_me') }}
                        </label>
                      </div>
                    </div> --}}
                    <div class="col-12 pt-3">
                      <strong><input class="btn btn-block btn-lg flat login_btn-s py-3 ff_poppins-s fs_11px-s fg_white-s fw_bold-s" type="submit" value="{{ trans('theme.button.login') }}"></strong>
                    </div>
                  </div>
                  {!! Form::close() !!}
  
                  {{-- <div class="row">
                    <a href="javascript:void(0);" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#passwordResetModal">{{ trans('theme.forgot_password') }}</a>
                    
                  </div> --}}
                </div>
              </div>
            </div>
              
          </div>
        </div>
      </div><!-- /.modal-body -->

      <div class="modal-footer">
        @if (config('app.demo') == true)
          <h4>Demo Login::</h4>
          <p>Username: <strong>customer@demo.com</strong> | Password: <strong>123456</strong> </p>
        @endif
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /#loginModal -->

<div class="modal auth-modal fade ff_poppins-s" id="createAccountModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content flat">
      {{-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="modal-title">{{ trans('theme.create_account') }}</span>
      </div> --}}
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
                <span class="fg_blue-s">Do you have account?</span><a href="javascript:void(0);" class="btn btn-link ff_poppins-s fw_800-s pr-0 pl-1" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">{{ trans('Log In') }}</a>
                <!-- <a href="javascript:void(0);" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#createAccountModal">{{ trans('theme.register_here') }}</a> -->
              </div>   
            </div>
            <div class="row d-flex align-self-center h_100-s pb-5 px-3">
              <div class="col-12 pb-4 modal-login-col-data">
                <div class="">
                  <div>
                    <h2 class="modal-login-h">Create account</h2>
                    <p class="fg_blue-s mt-3 ff_poppins-s opacity_5-s">Follow the instructions to make it easier to register and you will be able to explore inside.</p>
                  </div>
                  
                  {!! Form::open(['route' => 'customer.register', 'id' => 'registerForm', 'data-toggle' => 'validator', 'novalidate']) !!}
                  
                  <div class="form-group mt-4">
                    <div class="d-flex frm_group-s">
                      <div class="align-self-center pl-4 pr-2">
                        <img src="../../themes/default/assets/img/pass_img.svg" width="15" height="15" class="" alt="username">
                      </div>
                      <input name="name" class="form-control input-lg input-s mt-2" placeholder="{{ trans('Username') }}" type="text" required />
                    </div>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group mt-3">
                    <div class="d-flex frm_group-s">
                      <div class="align-self-center pl-4 pr-2">
                        <img src="../../themes/default/assets/img/email_icon.svg" width="15" height="15" class="" alt="email">
                      </div>
                      <input name="email" class="form-control input-lg input-s mt-2" placeholder="{{ trans('Email') }}" type="email" required />
                    </div>
                    <div class="help-block with-errors"></div>
                  </div>
  
                  <div class="form-group mt-3">
                    <div class="d-flex frm_group-s">
                      <div class="align-self-center pl-4 pr-2">
                        <img src="../../themes/default/assets/img/user_img.svg" width="15" height="15" class="" alt="password">
                      </div>
                      <input name="password" class="form-control input-lg input-s mt-2" placeholder="{{ trans('theme.placeholder.password') }}" type="password" required />
                    </div>
                    <div class="help-block with-errors"></div>
                  </div>
  
                  {{-- <div class="form-group">
                    <input name="password_confirmation" class="form-control input-lg flat" placeholder="{{ trans('theme.placeholder.confirm_password') }}" type="password" required />
                    <div class="help-block with-errors"></div>
                  </div> --}}
  
                  {{-- <div class="form-group has-feedback mb-2">
                    @if (config('services.recaptcha.key'))
                      <div class="g-recaptcha" data-sitekey="{!! config('services.recaptcha.key') !!}"></div>
                    @endif
                    <div class="help-block with-errors"></div>
                  </div> --}}
  
                  {{-- @if (config('system_settings.ask_customer_for_email_subscription'))
                    <div class="form-group">
                      <label>
                        <input name="subscribe" class="i-check-blue" type="checkbox" /> {{ trans('theme.input_label.subscribe_to_the_newsletter') }}
                      </label>
                    </div>
                  @endif --}}
  
                  <div class="row mt-3">
                    {{-- <div class="col-7">
                      <div class="form-group">
                        <label>
                          <input name="agree" class="i-check-blue" type="checkbox" required /> {!! trans('theme.input_label.i_agree_with_terms', ['url' => route('page.open', \App\Page::PAGE_TNC_FOR_CUSTOMER)]) !!}
                        </label>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div> --}}
                    <div class="col-12">
                      <input class="btn btn-block btn-lg flat login_btn-s py-3 fs_11px-s text-white ff_poppins-s fw_bold-s" type="submit" value="{{ trans('theme.create_account') }}" />
                    </div>
                  </div>
                  {!! Form::close() !!}
  
                  {{-- <div class="row mt-3">
                    <a href="javascript:void(0);" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">{{ trans('theme.have_account') }}</a>
                  </div> --}}
  
                  <div class="social-auth-links text-center mt-4">
                    <div class="row">
                      <div class="col-6 social-auth-links-col-right-pd">
                        <a href="{{ route('customer.login.social', 'google') }}" class="btn btn-block fg_blue-s fs_11px-s btn-google google_btn-s py-3  btn-lg flat">
                          {{-- <i class="fab fa-google"></i> --}}
                          <img src="../../themes/default/assets/img/goole_img.svg" width="15"  height="15" class="" alt="google img">
                          <span><strong>{{ trans('Google') }}</strong></span>
                           {{-- {{ trans('theme.button.login_with_g') }} --}}
                        </a>
                      </div>
                      <div class="col-6 social-auth-links-col-left-pd">
                        <a href="{{ route('customer.login.social', 'facebook') }}" class="btn btn-block fg_blue-s fs_11px-s btn-facebook fb_btn-s py-3 btn-lg flat">
                          {{-- <i class="fab fa-facebook-f"></i> --}}
                          <img src="../../themes/default/assets/img/fb_img.svg" width="15"  height="15" class="" alt="facebook img">
                          <span><strong>{{ trans('Facebook') }}</strong></span>
                           {{-- {{ trans('theme.button.login_with_fb') }} --}}
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
      {{-- <div class="modal-footer"></div> --}}
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /#createAccountModal -->

<div class="modal auth-modal fade" id="passwordResetModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content flat">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span class="modal-title">{{ trans('theme.password_recovery') }}</span>
      </div>
      <div class="modal-body">
        {!! Form::open(['route' => 'customer.password.email', 'id' => 'psswordRecoverForm', 'data-toggle' => 'validator', 'novalidate']) !!}
        <div class="form-group">
          <input name="email" class="form-control input-lg flat" placeholder="{{ trans('theme.placeholder.your_email') }}" type="email" required />
          <div class="help-block with-errors"></div>
        </div>

        <input class="btn btn-block flat btn-primary" type="submit" value="{{ trans('theme.button.recover_password') }}" />
        {!! Form::close() !!}
      </div><!-- /.modal-body -->
      <div class="modal-footer"></div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /#passwordResetModal -->

{{-- Include the recaptcha api script when its enabled --}}
@if (config('services.recaptcha.key'))
  @include('theme::scripts.recaptcha')
@endif
