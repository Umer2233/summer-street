<?php $__env->startSection('content'); ?>
  <style type="text/css">
    section {
      margin: 0 0 35px 0;
    }
    .recent-views-sec-custom{
    display: none;
    }


    @media  screen and (max-width: 991px) {
      section {
        margin: 0 0 30px 0;
      }
    }

  </style>

  <!-- MAIN SLIDER -->
  <?php if(!app('mobile-detect')->isMobile()) : ?>
  <?php echo $__env->make('theme::sections.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php else: ?>
  <?php echo $__env->make('theme::mobile.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>

  <!-- banner grp one -->
  

  <!-- Flash deal start -->
  <?php if(isset($flashdeals)): ?>
    <?php echo $__env->make('flashdeal::_deals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>

  <!-- Trending start -->
  

  <!-- banner grp two -->
  

  <!-- Deal of Day start -->
  

  <!-- banner grp three -->
  

  <!-- Featured category stat -->
   <?php echo $__env->make('theme::sections.featured_category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Popular Product type start -->
  <?php echo $__env->make('theme::sections.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- banner grp three -->
  

  <!-- Bundle start -->
  

  <!-- feature-brand start -->
  

  <!-- Recently Added -->
  

  <!-- banner grp four -->
  

  <!-- Additional Items -->
  

  <!-- banner grp four -->
   

  <!-- Best finds under $99 deals start -->
  

  <!-- best selling Now   -->
  

  <!-- Recently Viewed -->
  
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <script src="<?php echo e(theme_asset_url('js/eislideshow.js'), false); ?>"></script>
  <script type="text/javascript">
    // Main slider
    $('#ei-slider').eislideshow({
      animation: 'center',
      autoplay: true,
      slideshow_interval: 5000,
    });

    // $("#top_vendors").slick({
    //   slidesToShow: 3,
    //   slidesToScroll: 1,
    //   autoplay: true,
    //   autoplaySpeed: 2000,
    // });

    // Trending now tabs
    $(function() {
      $('.feature__tabs a').click(function() {
        let targetDom = $(this).attr('href');
        $(targetDom).slick('refresh');

        // Check for active
        $('.feature__tabs li').removeClass('active');
        $(this).parent().addClass('active');

        // Display active tab
        $('.feature__items .feature__items-inner').hide();
        $(targetDom).show();

        return false;
      });
    });

    
  </script>

  <!-- Flash deals script -->
  <?php if(isset($flashdeals)): ?>
    <?php echo $__env->make('flashdeal::scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme::layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bitsclansolution/summerstreet/public/themes/default/views/index.blade.php ENDPATH**/ ?>