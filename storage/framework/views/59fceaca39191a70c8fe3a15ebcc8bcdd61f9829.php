    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="cache-control" content="private, max-age=0, no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">

    <title>MOHE | <?php echo $__env->yieldContent('title'); ?></title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
	


    <!-- Bootstrap -->
   <!-- <link href="<?php echo e(URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('vendors/bootstrap/dist/css/bootstrap-notifications.min.css')); ?>">
	 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
 


