<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

</head>
<body>

<div class="bgOverLay">
<div class="loader">


  

</div>
</div>


<div class="printable" >

         <center>
             <div class="id-card-tag"></div>
	<div class="id-card-tag-strip"></div>
	<div class="id-card-hook"></div>
	<div class="id-card-holder">
		<div class="id-card">
			
			
			
			</div>
			<br/><br/>
			@foreach($doctor_lists as $doctor_list)
			<div align="left"><b>Name  :</b> {{$doctor_list->name}}<br/></div>
			<div align="left"><b>Father Name:</b> {{$doctor_list->father_name}}<br/></div>
			<div align="left"><b>Country&nbsp;:</b> {{$doctor_list->nationality}}<br/></div>
			<div align="left"><b>Gender&nbsp;:</b> {{$doctor_list->gender}}<br/><br/></div>
			<h3>www.amc.gov.af</h3>
			<hr>
			<p><strong>"PENGG"</strong>Share Naw, Opposite to MTN Plaza <p>
			<p>Near Kabul New Kabul Bank <strong>1004, Afghanistan</strong></p>
			<p>Ph: 0093778178438 | E-ail: info@amc.gov.af</p>
			@endforeach()
		</div>
	</div>
              </center>    
                  
                      
                  
                  
      
      
     


</div>


     

 



    <script src="{{URL::asset('js/jquery-1.11.0.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.PrintArea.js')}}"></script>


</body>
</html>





