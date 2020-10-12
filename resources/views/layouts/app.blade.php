<!DOCTYPE html>
<html lang="en">
        <head>

          <!-- jQuery -->
  

<!-- <link href="{{URL::asset('css/jquery-editable-select.min.css')}}" rel="stylesheet"> -->
        <!--All css related styles  -->
        @include('includes.head')

        @yield('custom_css_links')

	<meta name="csrf-token" content="{{ csrf_token() }}" />
		<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
        </head>

        <body class="nav-md ">
         <div class="container body ">
                 <div class="main_container ">



                        <!--Left side bar-->
                       
                        <!--End left side bar

      <!--Left side bar-->
                      
                        <!--End left side bar-->


                        <!--Top navigation -->
                       
                        <!--End top navigation -->

                      

                        <!--Top navigation -->
                       
                        <!--End top navigation -->

                      

                      
                        <!--Page content -->
                        <div 
                        
                         role="main">
                               

                                <div class="clearfix"></div>
                                <!--Main content should go here-->
                                @include('includes.message')
                                @yield('page-content')
                        </div>

                        <!--End page content-->



                      
                      
                 </div>
        </div>

        <!--Links of javascript libraries -->
        @include('includes.footer')    
        <!--Custom javascript codes -->
        @yield('scripts')


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