
  <script src='https://www.google.com/recaptcha/api.js'></script>



<div class="clearfix space50"></div>
<section>
  <div class="container">
    <div class="row">
      <!-- <div class="col-md-4">
        <div class="contact-info hello-s">
          <h2 class="space20">&nbsp;</h2>
          <div class="media-list">
            @if (config('system_settings.support_phone'))
              <div class="media space20">
                <i class="pull-left fas fa-phone"></i>
                <div class="media-body">
                  <h4>@lang('theme.phone'):</h4>
                  {{ config('system_settings.support_phone') }}
                </div>
              </div>
            @endif

            @if (config('system_settings.support_phone_toll_free'))
              <div class="media space20">
                <i class="pull-left fas fa-phone-square"></i>
                <div class="media-body">
                  <h4>@lang('theme.phone'): (@lang('theme.toll_free'))</h4>
                  {{ config('system_settings.support_phone_toll_free') }}
                </div>
              </div>
            @endif

            @if (config('system_settings.support_email'))
              <div class="media space20">
                <i class="pull-left fas fa-envelope-o"></i>
                <div class="media-body">
                  <h4>@lang('theme.email'):</h4>
                  <a href="mailto:{{ config('system_settings.support_email') }}">{{ config('system_settings.support_email') }}</a>
                </div>
              </div>
            @endif
          </div>
        </div>
      </div> /.col-md-4 -->

      <div class="col-12">
        <div class="d-flex py-5 px-md-5">
          <img src="../themes/default/assets/img/headphones.svg" class="mr-2" width="30" height="30" alt="headphones">
          <h2 class="ff_poppins-s">Contact Us</h2>
        </div>
        <div class="br_44px-s box_shadow-s py-md-3 py-4 px-md-5 px-4">
          {!! Form::open(['route' => 'contact_us', 'id' => 'contact_us_form', 'role' => 'form', 'data-toggle' => 'validator']) !!}
          <div class="row px-md-3 pt-4">
            <div class="col-12 pb-3 ">
            <h4 class="ff_poppins-s">@lang('theme.section_headings.contact_form')</h4>
            </div>
            <div class="col-lg-6 col-12 mt-lg-0 mt-3 ">
              <div class="form-group">
                {!! Form::text('name', null, ['class' => 'form-control input-lg flat border_bottom-s px-0', 'placeholder' => trans('theme.placeholder.name'), 'maxlength' => '100', 'required']) !!}
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-lg-6 col-12 mt-lg-0 mt-3">
              <div class="form-group">
                {!! Form::email('email', null, ['class' => 'form-control input-lg flat border_bottom-s px-0', 'placeholder' => trans('theme.placeholder.email'), 'maxlength' => '100', 'required']) !!}
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row px-md-3">
            <div class="col-12 mt-3">
              <div class="form-group ">
                {!! Form::text('subject', null, ['class' => 'form-control input-lg flat border_bottom-s px-0', 'placeholder' => trans('theme.placeholder.contact_us_subject'), 'maxlength' => 200, 'required']) !!}
                <div class="help-block with-errors"></div>
              </div>
            </div>
    
            <div class="col-12 mt-5 pb-4">
              <div class="form-group">
                {!! Form::textarea('message', null, ['class' => 'form-control input-lg flat border-s', 'placeholder' => trans('theme.placeholder.message'), 'rows' => 6, 'cols' => 10, 'maxlength' => 500, 'required']) !!}
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
  
          
        </div>

        <div class="row px-md-5 mx-md-2 pt-5">
          <div class="col-md-8 col-12 ">
            <div class="form-group">
              <!-- @if (config('services.recaptcha.key'))
                <div class="g-recaptcha" data-sitekey="{!! config('services.recaptcha.key') !!}"></div>
              @endif
              <div class="help-block with-errors"></div> -->

              <div class="g-recaptcha" data-sitekey="6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ"></div>
              <!-- <input type="submit" value="Submit" class="fb9" /> -->
            </div>
          </div>
          <div class="col-md-4 col-12 justify-content-end d-md-flex pt-md-0 pt-3">
            <div class="form-group">
              <button type="submit" class='btn btn_red-s btn-lg ff_nunito-s'><i class="fas fa-paper-plane"></i> {{ trans('theme.button.send_message') }}</button>
            </div>
          </div>
          
        </div>
        {!! Form::close() !!}
      </div> <!-- /.col-md-8 -->
    </div>
  </div>
</section>
<!-- END CONTENT SECTION -->

<div class="clearfix space50"></div>

{{-- Include the recaptcha api script when its enabled --}}
@if (config('services.recaptcha.key'))
  @section('scripts')
    @include('theme::scripts.recaptcha')
  @endsection
@endif
