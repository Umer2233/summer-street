<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title ?? get_platform_title() }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <link href="{{ Url('public/css/mina_admin.css') }}" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css?family=Open Sans');
  </style>

  
  <style type="text/css">
    .select2-selection__arrow {
      display: none;
    }

    .form-control-feedback {
      width: 46px;
      height: 46px;
      line-height: 46px;
    }

    .select2-container--default .select2-selection--single {
      height: 46px !important;
      padding: 10px 16px;
      font-size: 18px;
      line-height: 1.33;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
      line-height: 31px !important;
    }

  </style>


</head>

<body class="hold-transition login-page hello ff_poppins-s ">
  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>{{ trans('theme.error') }}!</strong> {{ trans('messages.input_error') }}<br><br>
      <ul class="list-group">
        @foreach ($errors->all() as $error)
          <li class="list-group-item list-group-item-danger">{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <div class="login_in_d_flex-s h_100vh-s overflow_hidden-s">

    <div class="w_50-s login_img-s">
      {{-- <a href="{{ url('/') }}">{{ get_platform_title() }}</a> --}}
      <img src="{{ asset('images/login_img.png') }}" class="h_100-s" width="100%"  alt="">
    </div>

    @yield('content')

  </div>
  <!-- /.login-box -->

  <script src="{{ mix('js/app.js') }}"></script>

  {{-- Include the recaptcha api script when its enabled --}}
  @if (config('services.recaptcha.key'))
    @include('theme::scripts.recaptcha')
  @endif

  <!-- Scripts -->
  @yield('scripts', '')

  <script type="text/javascript">
    // ;(function($, window, document) {
    $("#plans").select2({
      minimumResultsForSearch: -1,
    });
    $("#exp-year").select2({
      placeholder: "{{ trans('theme.placeholder.exp_year') }}",
      minimumResultsForSearch: -1,
    });
    $("#exp-month").select2({
      placeholder: "{{ trans('theme.placeholder.exp_month') }}",
      minimumResultsForSearch: -1,
    });

    $('.icheck').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    // });
  </script>

  <div class="loader">
    <center>
      <img class="loading-image" src="{{ theme_asset_url('img/loading.gif') }}" alt="busy...">
    </center>
  </div>
</body>

</html>
