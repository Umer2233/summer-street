<footer>
  <div class="footer footer_custom">
    <div class="container">
      <div class="footer__inner">
        <!-- <div class="footer__news">
          <div class="footer__news-inner">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="footer__news-content">
                  <div class="footer__news-icon">
                    <img src="<?php echo e(theme_asset_url('img/mail.png'), false); ?>" alt="">
                  </div>
                  <div class="footer__news-text">
                    <h3><?php echo app('translator')->getFromJson('theme.subscription'); ?></h3>
                    <p><?php echo app('translator')->getFromJson('theme.help.subscribe_to_newsletter'); ?></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="footer__news-form">
                  <?php echo Form::open(['route' => 'newsletter.subscribe', 'class' => 'form-inline', 'id' => 'form', 'data-toggle' => 'validator']); ?>

                  <div class="footer__news-form-box">
                    <?php echo Form::email('email', null, ['placeholder' => trans('theme.placeholder.email'), 'required']); ?>

                    <button type="submit"><?php echo app('translator')->getFromJson('theme.button.subscribe'); ?></button>
                  </div>
                  <?php echo Form::close(); ?>

                </div>
              </div>
            </div>
          </div>
        </div> -->

        <div class="footer__content footer__content_custom">
          <div class="footer-inner-div-custom">
            <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
              <div class="footer__content-box">
                <div class="footer__content-box-inner">
                  <div class="footer__content-box-logo">
                    <a href="<?php echo e(url('/'), false); ?>">
                      <?php if(Storage::exists('logo.png')): ?>
                        <img src="<?php echo e(get_storage_file_url('logo.png', 'full'), false); ?>" class="brand-logo" alt="<?php echo e(trans('app.logo'), false); ?>" title="<?php echo e(trans('app.logo'), false); ?>" style="max-width: 70%; margin-bottom: 10px;">
                      <?php else: ?>
                      <img src="../../themes/default/assets/img/summer-street-logo.svg" alt="<?php echo e(trans('app.logo'), false); ?>" title="<?php echo e(trans('app.logo'), false); ?>" style="max-width: 90%; margin-bottom: 0px;" />
                        <!-- <img src="https://placehold.it/140x60/eee?text=<?php echo e(get_platform_title(), false); ?>" alt="<?php echo e(trans('app.logo'), false); ?>" title="<?php echo e(trans('app.logo'), false); ?>" style="max-width: 70%; margin-bottom: 10px;" /> -->
                      <?php endif; ?>
                    </a>
                  </div>
                  <div class="footer__content-box-text display-none">
                    <p><?php echo config('system_settings.slogan'); ?></p>
                  </div>
                  <div class=footer__content_about>
                    <p>Lorem ipsum dolor sit amet, constetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  </div>
                  <!-- <div class="footer__content-box-location">
                    <p><i class="fas fa-map-marker-alt"></i> <?php echo get_platform_address_string(); ?></p>
                  </div> -->

                  <?php if(config('system_settings.support_phone')): ?>
                    <div class="footer__content-box-number">
                      <a href="tel: <?php echo config('system_settings.support_phone'); ?>"><i class="fas fa-phone-alt"></i> <?php echo config('system_settings.support_phone'); ?></a>
                    </div>
                  <?php endif; ?>

                  
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4  col-sm-6 col-12">
              <div class="footer__content-box">
                <div class="footer__content-box-inner">
                  <div class="footer__content-box-title">
                    <h3><?php echo app('translator')->getFromJson('theme.nav.let_us_help'); ?></h3>
                  </div>
                  <div class="footer__content-box-links">
                    <!-- <ul>
                      <li>
                        <a href="javascript:void(0)" rel="nofollow"><?php echo app('translator')->getFromJson('theme.nav.your_account'); ?></a>
                      </li>
                      <li>
                        <a href="javascript:void(0)" rel="nofollow"><?php echo app('translator')->getFromJson('theme.nav.your_orders'); ?></a>
                      </li>
                      <?php $__currentLoopData = $pages->where('position', 'footer_1st_column'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                          <a href="javascript:void(0)" rel="nofollow" target="_blank">
                            <?php echo e($page->title, false); ?>

                          </a>
                        </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <li>
                        <a href="javascript:void(0)" target="_blank"><?php echo app('translator')->getFromJson('theme.nav.blog'); ?></a>
                      </li>
                    </ul> -->
                    <ul>
                      <li>
                        <a href="<?php echo e(route('account', 'dashboard'), false); ?>" rel="nofollow"><?php echo app('translator')->getFromJson('theme.nav.your_account'); ?></a>
                      </li>
                      <li>
                        <a href="<?php echo e(route('account', 'orders'), false); ?>" rel="nofollow"><?php echo app('translator')->getFromJson('theme.nav.your_orders'); ?></a>
                      </li>
                      <?php $__currentLoopData = $pages->where('position', 'footer_1st_column'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                          <a href="<?php echo e(get_page_url($page->slug), false); ?>" rel="nofollow" target="_blank">
                            <?php echo e($page->title, false); ?>

                          </a>
                        </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <li>
                        <a href="<?php echo e(route('blog'), false); ?>" target="_blank"><?php echo app('translator')->getFromJson('theme.nav.blog'); ?></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
           <!--  <div class="col-lg-2 col-md-4  col-sm-6 col-6">
              <div class="footer__content-box">
                <div class="footer__content-box-inner">
                  <div class="footer__content-box-title">
                    <h3>About</h3>
                  </div>
                  <div class="footer__content-box-links">
                    <ul>
                      <li>
                        <a href="javascript:void(0)">Improve the quality of business</a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">Transact easily</a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">Take advantage of technological advances</a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">Shopingg online</a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">Easy payment</a>
                      </li>
                      <?php $__currentLoopData = $pages->where('position', 'footer_2nd_column'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                          <a href="javascript:void(0)" rel="nofollow" target="_blank">
                            <?php echo e($page->title, false); ?>

                          </a>
                        </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <li>
                        <a href="javascript:void(0)" rel="nofollow"><?php echo app('translator')->getFromJson('theme.nav.faq'); ?></a>
                      </li>
                    </ul>
                    <h3><?php echo app('translator')->getFromJson('theme.nav.make_money'); ?></h3>
                  </div>
                  <div class="footer__content-box-links">
                    <ul>
                      <li>
                        <a href="<?php echo e(url('/selling'), false); ?>"><?php echo e(trans('theme.nav.sell_on', ['platform' => get_platform_title()]), false); ?></a>
                      </li>
                      <li>
                        <a href="<?php echo e(url('/selling#pricing'), false); ?>"><?php echo app('translator')->getFromJson('theme.nav.become_merchant'); ?></a>
                      </li>
                      <li>
                        <a href="<?php echo e(url('/selling#howItWorks'), false); ?>"><?php echo app('translator')->getFromJson('theme.nav.how_it_works'); ?></a>
                      </li>
                      <?php $__currentLoopData = $pages->where('position', 'footer_2nd_column'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                          <a href="<?php echo e(get_page_url($page->slug), false); ?>" rel="nofollow" target="_blank">
                            <?php echo e($page->title, false); ?>

                          </a>
                        </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <li>
                        <a href="<?php echo e(url('/selling#faqs'), false); ?>" rel="nofollow"><?php echo app('translator')->getFromJson('theme.nav.faq'); ?></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="col-lg-3 col-md-4  col-sm-6 col-12">
              <div class="footer__content-box">
                <div class="footer__content-box-inner">
                  <div class="footer__content-box-title">
                    <!-- <h3>Information</h3>
                  </div>
                  <div class="footer__content-box-links">
                    <ul>
                      <li>
                        <a href="javascript:void(0)">Online transaction</a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">Buy and sell online</a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">Online business</a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">Internet progress</a>
                      </li>
                      <?php $__currentLoopData = $pages->where('position', 'footer_3rd_column'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                          <a href="javascript:void(0)" rel="nofollow" target="_blank">
                            <?php echo e($page->title, false); ?>

                          </a>
                        </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul> -->
                    <h3><?php echo app('translator')->getFromJson('theme.nav.customer_service'); ?></h3>
                  </div>
                  <div class="footer__content-box-links">
                    <ul>
                      <li>
                        <a href="<?php echo e(route('account', 'disputes'), false); ?>"><?php echo app('translator')->getFromJson('theme.nav.refunds_disputes'); ?></a>
                      </li>
                      <!-- <li>
                        <a href="<?php echo e(route('account', 'orders'), false); ?>"><?php echo app('translator')->getFromJson('theme.nav.contact_seller'); ?></a>
                      </li> -->
                      <?php $__currentLoopData = $pages->where('position', 'footer_3rd_column'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                          <a href="<?php echo e(get_page_url($page->slug), false); ?>" rel="nofollow" target="_blank">
                            <?php echo e($page->title, false); ?>

                          </a>
                        </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4  col-sm-6 col-12">
              <div class="footer__content-box">
                <div class="footer__content-box-inner footer__content-box-inner-socail-custom">
                  <div class="footer__content-box-title">
                    <h3>Looking for</h3>
                  </div>
                  <?php if($social_media_links = get_social_media_links()): ?>
                    <div class="footer__content-box-social">
                      <!-- <div class="footer-social-top-content">
                        You can search our content on other social media
                      </div> -->
                      <ul class="social-links-style">
                        <?php $__currentLoopData = $social_media_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_media => $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li>
                            <a href="<?php echo e($link, false); ?>" target="_blank">
                              <i class="fab fa-<?php echo e($social_media, false); ?>"></i>
                            </a>
                          </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </ul>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- COPYRIGHT AREA -->
<?php echo $__env->make('theme::nav.copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/bitsclansolution/summerstreet/public/themes/default/views/nav/footer.blade.php ENDPATH**/ ?>