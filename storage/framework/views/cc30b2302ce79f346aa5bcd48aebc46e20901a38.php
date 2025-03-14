<!DOCTYPE html>
<html>
    <head>
        <title><?php echo app('translator')->getFromJson('app.marketplace_down'); ?></title>

        <!-- <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> -->
        <style>
            @import  url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
            /* @import  url('https://fonts.googleapis.com/css?family=Open Sans'); */
        </style>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: poppins;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                padding: 0 20px;
                font-size: 35px;
                margin-top: 20px;
                margin-bottom: 40px;
            }
            .brand-logo {
              max-width: 175px;
              max-height: 50px;
            }
            .fg_red-s {
                background-color: #c7004a;
                color: white;
                text-decoration: none;
                padding: 5px 12px;
                border-radius: 9px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content tf">
                <a href="<?php echo e(url('/'), false); ?>">
                    <?php if( Storage::exists('logo.png') ): ?>
                        <img src="<?php echo e(get_storage_file_url('logo.png', 'full'), false); ?>" class="brand-logo" alt="<?php echo e(trans('app.logo'), false); ?>" title="<?php echo e(trans('app.logo'), false); ?>">
                    <?php else: ?>
                      <img src="<?php echo e(asset('images/summer-street-logo.svg'), false); ?>" class="brand-logo" alt="LOGO" title="LOGO" />
                    <?php endif; ?>
                </a>
                <div class="title"><?php echo e(trans('responses.404_not_found'), false); ?></div>
                <a href="<?php echo e(url()->previous(), false); ?>" class="fg_red-s"><?php echo app('translator')->getFromJson('theme.button.go_back'); ?></a>
            </div>
        </div>
    </body>
</html>
<?php /**PATH H:\xampp\htdocs\summerstreet\resources\views/errors/404.blade.php ENDPATH**/ ?>