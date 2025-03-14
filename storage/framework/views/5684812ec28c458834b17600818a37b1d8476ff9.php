<!DOCTYPE html>
<html class="no-js" lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>">

<head>
  <?php echo $__env->make('meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php if(url('/') !== request()->url()): ?>
    
    
  <?php endif; ?>
  <style>
    @import  url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
    @import  url('https://fonts.googleapis.com/css?family=Open Sans');
    @import  url('https://fonts.googleapis.com/css?family=Nunito');
  </style>

  <!-- Main custom css -->
  <link href="<?php echo e(theme_asset_url('css/style.css'), false); ?>" media="screen" rel="stylesheet">
  <link href="<?php echo e(theme_asset_url('css/mina_style.css'), false); ?>" media="screen" rel="stylesheet">
  <link href="<?php echo e(theme_asset_url('css/shoaib_style.css'), false); ?>" media="screen" rel="stylesheet">
  <link href="<?php echo e(theme_asset_url('css/zunair_style.css'), false); ?>" media="screen" rel="stylesheet">

  

  <?php if(config('active_locales')->firstWhere('code', App::getLocale())->rtl): ?>
    <link href="<?php echo e(theme_asset_url('css/rtl.css'), false); ?>" media="screen" rel="stylesheet">
  <?php endif; ?>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  
    <link rel="icon" type="image/x-icon" href="<?php echo e(theme_asset_url('img/Fevi.svg'), false); ?>" sizes="16x16">
</head>

<body class="<?php echo e(config('active_locales')->firstWhere('code', App::getLocale())->rtl ? 'rtl' : 'ltr', false); ?>">
  <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

  <!-- Wrapper start -->
  <div class="wrapper">
    <!-- Header start -->
    <header class="header">
      <!-- VALIDATION ERRORS -->
      <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong><?php echo e(trans('theme.error'), false); ?>!</strong> <?php echo e(trans('messages.input_error'), false); ?><br><br>
          <ul class="list-group">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="list-group-item list-group-item-danger"><?php echo e($error, false); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      <?php endif; ?>

      <?php if(Session::has('global_announcement')): ?>
        <div class="header__enouncement">
          <?php if(session('global_announcement')->action_url): ?>
            <div class="container">
              <div class="header__enouncement-inner">
                <p><?php echo session('global_announcement')->parsed_body; ?></p>
                <a href="<?php echo e(session('global_announcement')->action_url, false); ?>"><?php echo e(session('global_announcement')->action_text, false); ?></a>
              </div>
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <!-- Primary Menu -->
      <?php echo $__env->make('theme::nav.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- Mobile Menu -->
      <?php echo $__env->make('theme::nav.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

    <div class="close-sidebar">
      <strong><i class="fal fa-times"></i></strong>
    </div>


    <div id="content-wrapper">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
      
    
    <div id="loading">
      <img id="loading-image" src="<?php echo e(theme_asset_url('img/loading.gif'), false); ?>" alt="busy...">
    </div>
    <!-- Quick View Modal-->
    <div id="quickViewModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"></div>

    <!-- my Dynamic Modal-->
    <div id="myDynamicModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false"></div>

    <!-- footer start -->
    <?php echo $__env->make('theme::nav.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
  <!-- Wrapper end -->

  <!-- MODALS -->
  <?php if (! (Auth::guard('customer')->check())): ?>
    <?php echo $__env->make('theme::auth.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>

  <script src="<?php echo e(theme_asset_url('js/app.js'), false); ?>"></script>
  

  <?php echo $__env->make('theme::notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- AppJS -->
  <?php echo $__env->make('theme::scripts.appjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Page Scripts -->
  <?php echo $__env->yieldContent('scripts'); ?>
  <script>
      $(".toggle_img-d").on("click" , function(){
        let elm = $(this);
        let img_attr = elm.find("img").attr("src");
        let open_img = elm.find("img").attr("data-open");
        let close_img = elm.find("img").attr("data-close");
        if(img_attr == "../../themes/default/assets/img/plus_icon.svg"){
          elm.find("img").attr("src" , close_img);
        }
        else {
          elm.find("img").attr("src" , open_img);
        }
        
    });
  </script>
</body>

</html>
<?php /**PATH H:\xampp\htdocs\summerstreet\public\themes\default/views/layouts/main.blade.php ENDPATH**/ ?>