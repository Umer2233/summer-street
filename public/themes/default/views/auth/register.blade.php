@extends('theme::auth.layout')

@section('content')
  <div class="box login-box-body  w_50-s mb_0px-s pt_30px-s">
    <div class="text-right  px_100px-s">
      <span class="fg_dark_blue-s">
        Do you have account?
      </span>  
      </a>
      <a href="{{ route('customer.login') }}" class="btn btn-link fg_red-s fw_800-s pr_0px-s pl_2px-s ff_poppins-s">
        <strong>Log In</strong>
      </a>
      {{-- <!-- <a href="javascript:void(0);" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#createAccountModal">{{ trans('theme.register_here') }}</a> --> --}}
    </div>   
    <div class="modal-login-col-data">
      <div class="box-header">
        <h2 class="modal-login-h">{{ trans('Create Account') }}</h2>
        <span class="fg_dark_blue-s opacity_5-s mt_10px-s">Follow the instructions to make it easier to register and you will be able to explore inside.</span>
      </div> <!-- /.box-header -->
      <div class="box-body form_box_body-s">
        {!! Form::open(['route' => 'customer.register', 'id' => 'form', 'data-toggle' => 'validator']) !!}
        <div class="form-group has-feedback login_frm_group-s">
          <div class=" d_flex-s">
            <div class="align-self-center padding_10px_27px-s">
              <img src="{{ asset('images/pass_img.svg') }}" width="15" height="15" class="" alt="username">
            </div>
            {!! Form::text('name', null, ['class' => 'form-control input-lg  border_0px-s', 'placeholder' => trans('theme.placeholder.full_name'), 'required']) !!}
            {{-- <span class="glyphicon glyphicon-user form-control-feedback"></span> --}}
          </div>
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group has-feedback login_frm_group-s">
          <div class="d_flex-s">
            <div class="align-self-center padding_10px_27px-s">
              <img src="{{ asset('images/email_icon.svg') }}" width="15" height="15" class="" alt="email">
            </div>
            {!! Form::email('email', null, ['class' => 'form-control input-lg  border_0px-s', 'placeholder' => trans('theme.placeholder.valid_email'), 'required']) !!}
          </div>
          {{-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> --}}
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group has-feedback login_frm_group-s">
          <div class=" d_flex-s">
            <div class="align-self-center padding_10px_27px-s">
              <img src="{{ asset('images/user_img.svg') }}" width="15" height="15" class="" alt="username">
            </div>
            {!! Form::password('password', ['class' => 'form-control input-lg  border_0px-s', 'id' => 'password', 'placeholder' => trans('theme.placeholder.password'), 'data-minlength' => '6', 'required']) !!}
          </div>
          {{-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> --}}
          <div class="help-block with-errors"></div>
        </div>
        {{-- <div class="form-group has-feedback">
          {!! Form::password('password_confirmation', ['class' => 'form-control input-lg', 'placeholder' => trans('theme.placeholder.confirm_password'), 'data-match' => '#password', 'required']) !!}
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <div class="help-block with-errors"></div>
        </div> --}}
  
        {{-- <div class="form-group has-feedback">
          @if (config('services.recaptcha.key'))
            <div class="g-recaptcha" data-sitekey="{!! config('services.recaptcha.key') !!}"></div>
          @endif
          <div class="help-block with-errors"></div>
        </div> --}}
  
        {{-- @if (config('system_settings.ask_customer_for_email_subscription'))
          <div class="form-group">
            <label>
              {!! Form::checkbox('subscribe', null, null, ['class' => 'icheck']) !!} {!! trans('theme.input_label.subscribe_to_the_newsletter') !!}
            </label>
          </div>
        @endif --}}
  
        <div class="">
          {{-- <div class="col-sm-7">
            <div class="form-group">
              <label>
                {!! Form::checkbox('agree', null, null, ['class' => 'icheck', 'required']) !!} {!! trans('theme.input_label.i_agree_with_terms', ['url' => route('page.open', \App\Page::PAGE_TNC_FOR_CUSTOMER)]) !!}
              </label>
              <div class="help-block with-errors"></div>
            </div>
          </div> --}}
          <div class="mb_30px-s">
            {!! Form::submit(trans('theme.register'), ['class' => 'btn btn-block btn-lg btn-flat login_btn-s py-3 ff_poppins-s fs_11px-s fg_white-s fw_bold-s']) !!}
          </div>
        </div>
        {!! Form::close() !!}
  
        @if (config('system_settings.social_auth'))
          <div class="social-auth-links text-center d_flex-s">
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
          </div>
        @endif
  
        
      </div>
    </div>
  </div>
@endsection
