<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
     .loader{
    border: 4px solid #f3f3f3; /* Light grey */
    border-top: 4px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 100px;
    height: 100px;
    position:fixed;
    
    top:40%;
    left:50%;
    
   -webkit-animation: spin 1s linear infinite;
    animation: spin 1s linear infinite;
}

.bgOverLay{
    position:fixed;
    width:100%;
    height:2000px
    ;background:#fff;
    z-index:100;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
    
    </style>
</head>
<body>
    
     @if(Auth::user()->lastName == "Attestation" || Auth::user()->lastName == "TechnicalCommittee" || Auth::user()->lastName == "HA" ||
        Auth::user()->lastName == "CommissionDirector" || Auth::user()->lastName == "Administrator" 
     
     )

<div class="bgOverLay">
<div class="loader">


  

</div>
</div>


<div class="printable" >

         
              <div class="x_title text-center" style="padding:5px">
                                                        <img src="{{URL::asset('images/logo.png')}}" style="width:100px;height:100px;border-radius:50%"></img>
                                                        <table border="2px solid" width="100%" style="margin-top: 5px;">
                                                          <tr>
                                                         <td><b>    <center>د لوړو زده کړو وزارتد افغانستان اسلامی حمهوریت</center></br></b></br></br></td>
                                                           <center> <td><b>   <center>ISLAMIC REPUBLIC OF AFGHANISTAN </br>Ministry of Higher Education</center></b></br></br></td>
                                                           <center> <td><b>   <center>جمهوری اسلامی افغانستان</br>وزارت تحصیلات عالی افغانستان</center></b></br></br></td>
                                                          </tr>
                                                          
                                                        </table>
                                                       
                                                    </div>


                                                        
														
														<center><h2>Students' Statistics </h2></center>
														<center>Gregorial Date - From: {{$fromDate}} - To: {{$toDate}} </center><br/>
														<center>Hijri Shamsi Date - From: {{$shamsiFromDate}} - To: {{$shamsiToDate}} </center>
														
														<center>{{$universities}}</center>
														@if($edocument == 1)
														<center>Original Certificate</center>
														@elseif($edocument == 2)
														<center>Temporary Certificate</center>
														@endif
														@if($scholarship == 1)
														<center>Government</center>
														@elseif($scholarship == 2)
														<center>Private</center>
														@endif
													
														@if($typeEdu == 1)
															<center>Regular</center>
														@elseif($typeEdu == 2)
														<center>Distance</center>
														@elseif($typeEdu == 3)
														<center>Semi Distance</center>
														@endif()
														@if($ELevel == "Bachelor")
														<center>Bachelor</center>
														@elseif($ELevel == "Master")
														<center>Master</center>
														@elseif($ELevel == "PHD")
															<center>PHD</center>
														@endif()
														<center>{{$country}}</center>
														

                                                        <table  id="myTable" class="table table-condensed table-hover table-striped" border="1px solid">
				<thead>
					<tr>			
						<th><center>Total No # of Approved</center></th>
						<th><center>Total No # of Rejected</center></th>
						<th><center>Total No # of Pending</center></th>
						
						
						
						
						
						@if($ELevel == "Bachelor")
						<th><center>Total No # of Bachelor</center></th>
						@elseif($ELevel == "Master")
						<th><center>Total No # of Master</center></th>
						@elseif($ELevel == "PHD")
						<th><center>Total No # of PHD</center></th>
						@endif()
						
						@if($edocument == 1)
						<th><center>Total No # of Original Certificate</center></th>
						@elseif($edocument == 2)
						<th><center>Total No # of Temporary Certificate</center></th>
						@endif()
						
					
						@if($scholarship == 1)
						<th><center>Total No # of Government Scholarships</center></th>
						@elseif($scholarship == 2)
						<th><center>Total No # of Private Graduates</center></th>
						
						@endif()
						
						@if($typeEdu == 1)
						<th><center>Total No # of Regular </center></th>
						@elseif($typeEdu == 2)
						<th><center>Total No # of Distance</center></th>
						@elseif($typeEdu == 3)
						<th><center>Total No # of Semi Distance</center></th>
						
						@endif()
						
						
					
						
					</tr>
				</thead>
				<tbody>
			
			
			
		
					
			</div>
            
				<tr>
					
						
						<td><center> {{$reservationsMale}} </center></td>
						<td><center> {{$reservationsFemale}} </center> </td>
						<td><center>  {{$reservationsApproved}}</center> </td>
						
						
						@if($ELevel != NULL)
						<td><center>  {{$reservationsdegree}}</center> </td>
						@endif()
						
						@if($edocument != NULL)
						<td><center>  {{$reservationsOriginal}}</center> </td>
						@endif()
							
						@if($edocument != NULL)
						<td><center>  {{$reservationsTemporary}}</center> </td>
						@endif()
							
						@if($scholarship != NULL)
						<td><center>  {{$reservationsScholarship}}</center> </td>
						@endif()
						
						@if($typeEdu != NULL)
						<td><center>  {{$reservationsEduType}}</center> </td>
						@endif()
						
					
					
					
					</tr>
					
			
							
				</tbody>
			</table>

                                                        


          
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            
        







       






                        
                  <hr>
                 
                  
                  
                      
                  
                  
      
      
     


</div>


     

 



    <script src="{{URL::asset('js/jquery-1.11.0.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.PrintArea.js')}}"></script>

<script>
  
    $(document).ready(function(){
      
       
      
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = { mode : mode, popClose : close};
        $("div.printable").printArea( options );  

       
     },1000,function(){
       $('.bgOverLay').removeClass('bgOverLay');
       $('.loader').removeClass('loader');
     });
    

</script>

@else
<center>You are not allowed</center>
@endif
</body>
</html>





