<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="<?php echo e(csrf_token(), false); ?>">
  <title><?php echo e($title ?? get_platform_title(), false); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link href="<?php echo e(mix('css/app.css'), false); ?>" rel="stylesheet">
  <link href="<?php echo e(Url('public/css/mina_admin.css'), false); ?>" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
  <style>
    @import  url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
    @import  url('https://fonts.googleapis.com/css?family=Open Sans');
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
  <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
      <strong><?php echo e(trans('theme.error'), false); ?>!</strong> <?php echo e(trans('messages.input_error'), false); ?><br><br>
      <ul class="list-group">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="list-group-item list-group-item-danger"><?php echo e($error, false); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
  <?php endif; ?>
  <div class="login_in_d_flex-s h_100vh-s overflow_hidden-s">

    <div class="w_50-s login_img-s">
      
      <img src="<?php echo e(asset('images/login_img.png'), false); ?>" class="h_100-s" width="100%"  alt="">
    </div>

    <?php echo $__env->yieldContent('content'); ?>

  </div>
  <!-- /.login-box -->

  <script src="<?php echo e(mix('js/app.js'), false); ?>"></script>

  
  <?php if(config('services.recaptcha.key')): ?>
    <?php echo $__env->make('theme::scripts.recaptcha', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>

  <!-- Scripts -->
  <?php echo $__env->yieldContent('scripts', ''); ?>

  <script type="text/javascript">
    // ;(function($, window, document) {
    $("#plans").select2({
      minimumResultsForSearch: -1,
    });
    $("#exp-year").select2({
      placeholder: "<?php echo e(trans('theme.placeholder.exp_year'), false); ?>",
      minimumResultsForSearch: -1,
    });
    $("#exp-month").select2({
      placeholder: "<?php echo e(trans('theme.placeholder.exp_month'), false); ?>",
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
      <img class="loading-image" src="<?php echo e(theme_asset_url('img/loading.gif'), false); ?>" alt="busy...">
    </center>
  </div>
</body>

</html>
<?php /**PATH H:\xampp\htdocs\summerstreet\public\themes\default/views/auth/layout.blade.php ENDPATH**/ ?>