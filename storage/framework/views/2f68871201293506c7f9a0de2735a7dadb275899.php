    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ministry of Higher Education | <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo e(URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(URL::asset('vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(URL::asset('vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo e(URL::asset('vendors/iCheck/skins/flat/green.css')); ?>" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo e(URL::asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet">
    <!-- JQVMap -->
    
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo e(URL::asset('vendors/bootstrap-daterangepicker/daterangepicker.css')); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
   
    <!--  <link href="<?php echo e(URL::asset('build/css/dari-custom.css')); ?>" rel="stylesheet"> -->

     <?php if(App::getLocale()=='en'): ?>
         <link href="<?php echo e(URL::asset('build/css/custom.css')); ?>" rel="stylesheet">
     <?php elseif(App::getLocale()=='fa' || App::getLocale()=='ps'): ?> 
         <link href="<?php echo e(URL::asset('build/css/custom-rtl.css')); ?>" rel="stylesheet">

     <?php endif; ?>  
 <!--
<div class="text-center">
                  <form class="" action="<?php echo e(url('/locale')); ?>" id="locale_form" method="post">
                      <?php echo e(csrf_field()); ?>

               
                    <select  name="locale" id="locale">
                      
                      <option value="en" <?php echo e(App::getLocale()=='en'?'selected':''); ?>><?php echo e(__('ui.english')); ?></option>
                      <option value="fa" <?php echo e(App::getLocale()=='fa'?'selected':''); ?>><?php echo e(__('ui.dari')); ?></option>
                      <option value="ps" <?php echo e(App::getLocale()=='ps'?'selected':''); ?>><?php echo e(__('ui.pashtu')); ?></option>  
 
                    </select>
                </form>
              </div> 

-->
