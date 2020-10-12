    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ministry of Higher Education | @yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{URL::asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{URL::asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{URL::asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    
    <!-- bootstrap-daterangepicker -->
    <link href="{{URL::asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
   
    <!--  <link href="{{URL::asset('build/css/dari-custom.css')}}" rel="stylesheet"> -->

     @if(App::getLocale()=='en')
         <link href="{{URL::asset('build/css/custom.css')}}" rel="stylesheet">
     @elseif(App::getLocale()=='fa' || App::getLocale()=='ps') 
         <link href="{{URL::asset('build/css/custom-rtl.css')}}" rel="stylesheet">

     @endif  
 <!--
<div class="text-center">
                  <form class="" action="{{url('/locale')}}" id="locale_form" method="post">
                      {{csrf_field()}}
               
                    <select  name="locale" id="locale">
                      
                      <option value="en" {{App::getLocale()=='en'?'selected':''}}>{{__('ui.english')}}</option>
                      <option value="fa" {{App::getLocale()=='fa'?'selected':''}}>{{__('ui.dari')}}</option>
                      <option value="ps" {{App::getLocale()=='ps'?'selected':''}}>{{__('ui.pashtu')}}</option>  
 
                    </select>
                </form>
              </div> 

-->
