<!DOCTYPE html>
<html lang="en">
        <head>

          <!-- jQuery -->
  

<!-- <link href="<?php echo e(URL::asset('css/jquery-editable-select.min.css')); ?>" rel="stylesheet"> -->
        <!--All css related styles  -->
        <?php echo $__env->make('admin_includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('custom_css_links'); ?>
		<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
		<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
		    
        </head>

        <body class="nav-md " onunload="">
         <div class="container body ">
                 <div class="main_container ">



                        <!--Left side bar-->
                        <?php echo $__env->make('admin_includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <!--End left side bar-->


                        <!--Top navigation -->
                        <?php echo $__env->make('admin_includes.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <!--End top navigation -->

                      

                      
                        <!--Page content -->
                        <div 
                        <?php if(App::getLocale()=='en'): ?>
                                class="right_col"
                        <?php elseif(App::getLocale()=='fa' || App::getLocale()=='ps'): ?>
                                class="left_col"
                        <?php endif; ?>
                         role="main">
                               

                                <div class="clearfix"></div>
                                <!--Main content should go here-->
                                <?php echo $__env->make('admin_includes.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <?php echo $__env->yieldContent('page-content'); ?>
                        </div>

                        <!--End page content-->



                      
                      
                 </div>
        </div>

        <!--Links of javascript libraries -->
        <?php echo $__env->make('admin_includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>    
        <!--Custom javascript codes -->
        <?php echo $__env->yieldContent('scripts'); ?>
		<script type="text/javascript">
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
</script>
    
	
		
			
			
			<script type="text/javascript">
					$(window).bind("pageshow", function() {
    var form = $('form'); 
    // let the browser natively reset defaults
    form[0].reset();
});
			</script>
			
			
		
	
	
	
        <script type="text/javascript">
                $(document).ready(function(){
                      $('#logout').on('click',function(){
                          $('#logout_form').submit();
                        });
                        $('#locale').on('change',function(){
                        
                           $('#locale_form').submit();
                        });
                     
                });
        </script>
        </body>

</html>