<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.2
 * @link http://coreui.io
 * Copyright (c) 2016 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
 <!DOCTYPE html>
<html lang="IR-fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo e($setting->translate(app()->getlocale())->content); ?>">
    <meta name="keyword" content="<?php echo e($setting->translate(app()->getlocale())->title); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset($setting->favicon)); ?>">
    <title><?php echo e($setting->translate(app()->getlocale())->title); ?></title>
    <!-- Icons -->
    <link href="<?php echo e(asset('adminassets/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('adminassets/css/simple-line-icons.css')); ?>" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="<?php echo e(asset('adminassets/dest/style.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

</head>
<!-- BODY options, add following classes to body to change options
         1. 'compact-nav'     	  - Switch sidebar to minified version (width 50px)
         2. 'sidebar-nav'		  - Navigation on the left
             2.1. 'sidebar-off-canvas'	- Off-Canvas
                 2.1.1 'sidebar-off-canvas-push'	- Off-Canvas which move content
                 2.1.2 'sidebar-off-canvas-with-shadow'	- Add shadow to body elements
         3. 'fixed-nav'			  - Fixed navigation
         4. 'navbar-fixed'		  - Fixed navbar
     -->

<body class="navbar-fixed sidebar-nav fixed-nav">
    <header class="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
            <a class="navbar-brand" href="#" style="background-image: url(<?php echo e(asset($setting->logo)); ?>);"></a>
            <ul class="nav navbar-nav hidden-md-down">
                <li class="nav-item">
                    <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
                </li>


            </ul>
            <ul class="nav navbar-nav pull-left hidden-md-down">

                <li class="nav-item dropdown" style="margin-left: 10px !important">
                    <?php echo e(auth()->user()->name); ?>(<?php echo e(auth()->user()->status); ?>)</li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="hidden-md-down"><?php echo e(__('words.settings')); ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header text-xs-center">
                            <strong><?php echo e(__('words.settings')); ?></strong>
                        </div>
                        <a class="dropdown-item" href="<?php echo e(route('dashboard.users.edit', auth()->user())); ?>"><i
                                class="fa fa-user"></i> <?php echo e(__('words.user settings')); ?></a>
                        <div class="divider"></div>

                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <?php echo e(__('words.logout')); ?>

                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="hidden-md-down"><?php echo e(LaravelLocalization::getCurrentLocaleNative()); ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">

                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="dropdown-item" rel="alternate" hreflang="<?php echo e($localeCode); ?>"
                                href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                <?php echo e($properties['native']); ?>

                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </li>


                <li class="nav-item">

                </li>

            </ul>
        </div>
    </header>
    <?php echo $__env->make('dashboard.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Main content -->
    <main class="main">
        <?php echo $__env->yieldContent('body'); ?>
    </main>



    <footer class="footer">
        <a href="http://coreui.io" target="_blank"> <span class="text-left">كورس انشاء مدونة إلكترونية
                &copy; 2022.
            </span></a>

    </footer>
    <!-- Bootstrap and necessary plugins -->
    <script src="<?php echo e(asset('adminassets/js/libs/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('adminassets/js/libs/tether.min.js')); ?>"></script>
    <script src="<?php echo e(asset('adminassets/js/libs/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('adminassets/js/libs/pace.min.js')); ?>"></script>

    <!-- Plugins and scripts required by all views -->
    <script src="<?php echo e(asset('adminassets/js/libs/Chart.min.js')); ?>"></script>

    <!-- CoreUI main scripts -->
    <script src="<?php echo e(asset('adminassets/js/app.js')); ?>"></script>

    <!-- Plugins and scripts required by this views -->
    <!-- Custom scripts required by this view -->
    <script src="<?php echo e(asset('adminassets/js/views/main.js')); ?>"></script>

    <!-- Grunt watch plugin -->
    <script src="<?php echo e(asset('adminassets')); ?>/livereload.js"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        var allEditors = document.querySelectorAll('#editor');
        for (var i = 0; i < allEditors.length; ++i) {
            ClassicEditor.create(allEditors[i]);
        }
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>


    <?php echo $__env->yieldPushContent('javascripts'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\youtubeAPP\resources\views/dashboard/layouts/layouts.blade.php ENDPATH**/ ?>