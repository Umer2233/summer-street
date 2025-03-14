@extends('theme::auth.layout')

@section('content')
  <div class="box login-box-body w_50-s mb_0px-s pt_30px-s">
    <div class="text-right px_100px-s">
      <span class="fg_dark_blue-s">
        Don't have an account?
        <a class="fw_800-s btn btn-link  pr_0px-s pl_2px-s ff_poppins-s" href="{{ route('customer.register') }}" class="text-center">
          <strong>Create Account</strong>
        </a>
      </span>
      
    </div>  
    <div class="modal-login-col-data">
      <div class="box-header">
        <h2 class="modal-login-h"><strong>{{ trans('Login to your account!') }}</strong></h2>
      </div> <!-- /.box-header -->
      <div class="box-body form_box_body-s">
        @if (config('system_settings.social_auth'))
          <div class="social-auth-links text-center d_flex-s  mb_30px-s">
            <a href="{{ route('customer.login.social', 'google') }}" class="btn w_100-s ff_open_sans-s br_blue-s fg_blue-s fs_11px-s btn-google google_btn-s py-3  btn-lg flat">
              {{-- <i class="fa fa-google"></i> --}}
              <img src="{{ asset('images/goole_img.svg') }}" width="15"  height="15" class="" alt="google img">
  
              <strong>{{ trans('Google') }}</strong>
            </a>
  
            <a href="{{ route('customer.login.social', 'facebook') }}" class="btn w_100-s ff_open_sans-s fg_blue-s ml_10px-s br_blue-s fs_11px-s btn-facebook fb_btn-s py-3 btn-lg flat">
              {{-- <i class="fa fa-facebook"></i> --}}
              <img src="{{ asset('images/fb_img.svg') }}" width="15"  height="15" class="" alt="google img">
               <strong>{{ trans('Facebook') }}</strong>
            </a>
  
            
          </div> <!-- /.social-auth-links -->
        @endif
        {!! Form::open(['route' => 'customer.login.submit', 'id' => 'form', 'data-toggle' => 'validator']) !!}
        <div class="form-group has-feedback login_frm_group-s">
          <div class=" d_flex-s">
            <div class="align-self-center padding_10px_27px-s">
              <img src="{{ asset('images/pass_img.svg') }}" width="15" height="15" class="" alt="username">
            </div>
            {!! Form::email('email', null, ['class' => 'pl_0px-s form-control input-lg border_0px-s', 'placeholder' => trans('theme.placeholder.email'), 'required']) !!}
          </div>
          {{-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> --}}
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group has-feedback login_frm_group-s">
          <div class="d_flex-s">
            <div class="align-self-center padding_10px_27px-s">
              <img src="{{ asset('images/user_img.svg') }}" width="15" height="15" class="" alt="username">
            </div>
            {!! Form::password('password', ['class' => 'pl_0px-s form-control input-lg border_0px-s', 'id' => 'password', 'placeholder' => trans('theme.placeholder.password'), 'data-minlength' => '6', 'required']) !!}
            {{-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> --}}
          </div>
          <div class="help-block with-errors"></div>
        </div>
        <div class="">
          <div class="mb_10px-s">
            {{-- <div class="form-group">
              <label>
                {!! Form::checkbox('remember', null, null, ['class' => 'icheck']) !!} {{ trans('theme.remember_me') }}
              </label>
            </div> --}}
            {{-- <a class="btn btn-link" href="{{ route('customer.password.request') }}">
              {{ trans('theme.forgot_password') }}
            </a> --}}
          </div>
          <div class="">
            {!! Form::submit(trans('theme.button.login'), ['class' => 'btn btn-block btn-lg flat login_btn-s py-3 ff_poppins-s fs_11px-s fg_white-s fw_bold-s']) !!}
          </div>
        </div>
        {!! Form::close() !!}

      </div>
    </div>
  </div>

  @if (config('app.demo') == true)
    <div class="box login-box-body">
      <div class="box-header with-border">
        <h3 class="box-title">Demo Login::</h3>
      </div> <!-- /.box-header -->
      <div class="box-body">
        <p>Username: <strong>customer@demo.com</strong> | Password: <strong>123456</strong> </p>
      </div>
    </div>
  @endif
@endsection
