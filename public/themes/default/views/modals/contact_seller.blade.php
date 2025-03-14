<div class="modal fade" id="contactSellerModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content flat contact-seller-style">
      <div class="modal-header contact-seller-headings bb-none">
       
        <a class="close " data-dismiss="modal" aria-hidden="true">&times;</a>
        <!-- {{ trans('theme.button.contact_seller') }} -->
        Contact Seller
      </div>
     
      <div class="modal-body">
        {!! Form::open(['route' => ['seller.contact', $item->shop->slug], 'data-toggle' => 'validator']) !!}
        {!! Form::hidden('product_id', $item->id) !!}
        <div class="form-group">
        <label class="label-s ml-2 px-2 form-lable position-relative class-name" for="full_name-d">
            <!--  <strong class="form-lable">Full Name</strong> -->
            Subject
        </label>
          <!-- {!! Form::label('subject', trans('theme.subject') . '*') !!} -->
          {!! Form::text('subject', null, ['class' => 'form-control flat input-feilds', 'placeholder' => trans('theme.placeholder.contact_us_subject'), 'required']) !!}
          <div class="help-block with-errors"></div>
        </div>

        <div class="form-group">
          <!-- {!! Form::label('message', trans('theme.write_your_message') . '*') !!} -->
          <label class="label-s ml-2 px-2 form-lable position-relative class-name" for="full_name-d">
            <!--  <strong class="form-lable">Full Name</strong> -->
           Write Your Message*
        </label>
        
          {!! Form::textarea('message', null, ['class' => 'form-control flat message-for-seller', 'rows' => '4', 'placeholder' => trans('theme.placeholder.message'), 'required']) !!}
          <div class="help-block with-errors"></div>
        </div>

        <div class="row">
          <div class="col-md-6 nopadding-right">
            <div class="form-group">
              @if (config('services.recaptcha.key'))
                <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
              @endif
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-md-6 nopadding-left">
            <div class="form-group">
              <div class="space10"></div>
              <button type="submit" class='btn btn-primary btn-lg pull-right flat btn-send-message'><i class="fas fa-paper-plane"></i> {{ trans('theme.button.send_message') }}</button>
            </div>
          </div>
        </div>
        {!! Form::close() !!}
        <!-- <small class="help-block text-muted">* {{ trans('theme.help.required_fields') }}</small> -->
      </div><!-- /.modal-body -->
      <div class="modal-footer">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /#disputeOpenModal -->

  <script src='https://www.google.com/recaptcha/api.js'></script>
