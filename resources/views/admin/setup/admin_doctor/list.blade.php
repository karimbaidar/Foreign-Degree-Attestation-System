


@extends('admin-layout.app',['title'=>'Order List'])

@section('custom_css_links')

	
	 <!-- Datatables related files  -->
    <link href="{{URL::asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

	<style>
		table th,table td{
			text-align:center;
		}
		
		#myTable_filter label{
			float:left;
		}
	
	</style>
	
	
	
	<style>
    
    .button1 {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}




@import url(https://fonts.googleapis.com/css?family=Raleway:100,600,400);


.text-holder{
  color:#aaaaaa;
  text-align:center;
  padding-top:40px;
}
.button-holder{
  padding-top:100px;
}
.ajax-button{
  position:relative;
  display:inline-block;
  width:100px;
  height:40px;
  left:50%;
  top:50%;
  margin-left:-50px;
  margin-top:-20px;
  text-align:center;
}
/ 
.print{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

  

 
  outline:none;
  
  
   background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
  
  
  
}

.details{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

  

 
  outline:none;
  
  
   background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
 
  
}

.edit{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

  outline:none;
  
  
   background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
  
  
  
}

.excel{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

  outline:none;
  
  
   background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
  
  
  
}

.pass{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

  outline:none;
  
  
   background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
  
  
  
}

.checklist{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

  outline:none;
  
  
   background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
  
  
  
}
.delete{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

  outline:none;
  
  
   background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
  
  
  
}

.cancel{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

  outline:none;
  
  
   background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
  
  
  
}

.submit_nav4{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

  


  
  
  
}



.print:hover{
  background-color:#222222;
}



.details:hover{
  background-color:#222222;
}

.edit:hover{
  background-color:#222222;
}

.excel:hover{
  background-color:#222222;
}
.pass:hover{
  background-color:#222222;
}
.delete:hover{
  background-color:#222222;
}
.cancel:hover{
  background-color:#222222;
}
.checklist:hover{
  background-color:#222222;
}







.print_load{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:5px;
  border-radius:15px;
  padding:0;
  border:3px solid #006400;
  border-bottom:3px solid rgba(1,1,1,0.0);
  border-left:3px solid rgba(1,1,1,0.0);
  background-color:transparent !important;
  animation-name: rotateAnimation;
  -webkit-animation-name: wk-rotateAnimation;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-delay: 0.2s;
  -webkit-animation-delay: 0.2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}
.details_load{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:5px;
  border-radius:15px;
  padding:0;
  border:3px solid #006400;
  border-bottom:3px solid rgba(1,1,1,0.0);
  border-left:3px solid rgba(1,1,1,0.0);
  background-color:transparent !important;
  animation-name: rotateAnimation;
  -webkit-animation-name: wk-rotateAnimation;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-delay: 0.2s;
  -webkit-animation-delay: 0.2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}
.edit_load{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:5px;
  border-radius:15px;
  padding:0;
  border:3px solid #006400;
  border-bottom:3px solid rgba(1,1,1,0.0);
  border-left:3px solid rgba(1,1,1,0.0);
  background-color:transparent !important;
  animation-name: rotateAnimation;
  -webkit-animation-name: wk-rotateAnimation;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-delay: 0.2s;
  -webkit-animation-delay: 0.2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}
.excel_load{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:5px;
  border-radius:15px;
  padding:0;
  border:3px solid #006400;
  border-bottom:3px solid rgba(1,1,1,0.0);
  border-left:3px solid rgba(1,1,1,0.0);
  background-color:transparent !important;
  animation-name: rotateAnimation;
  -webkit-animation-name: wk-rotateAnimation;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-delay: 0.2s;
  -webkit-animation-delay: 0.2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}

.pass_load{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:5px;
  border-radius:15px;
  padding:0;
  border:3px solid #006400;
  border-bottom:3px solid rgba(1,1,1,0.0);
  border-left:3px solid rgba(1,1,1,0.0);
  background-color:transparent !important;
  animation-name: rotateAnimation;
  -webkit-animation-name: wk-rotateAnimation;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-delay: 0.2s;
  -webkit-animation-delay: 0.2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}
.checklist_load{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:5px;
  border-radius:15px;
  padding:0;
  border:3px solid #006400;
  border-bottom:3px solid rgba(1,1,1,0.0);
  border-left:3px solid rgba(1,1,1,0.0);
  background-color:transparent !important;
  animation-name: rotateAnimation;
  -webkit-animation-name: wk-rotateAnimation;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-delay: 0.2s;
  -webkit-animation-delay: 0.2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}

.delete_load{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:5px;
  border-radius:15px;
  padding:0;
  border:3px solid #006400;
  border-bottom:3px solid rgba(1,1,1,0.0);
  border-left:3px solid rgba(1,1,1,0.0);
  background-color:transparent !important;
  animation-name: rotateAnimation;
  -webkit-animation-name: wk-rotateAnimation;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-delay: 0.2s;
  -webkit-animation-delay: 0.2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}

.cancel_load{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:5px;
  border-radius:15px;
  padding:0;
  border:3px solid #006400;
  border-bottom:3px solid rgba(1,1,1,0.0);
  border-left:3px solid rgba(1,1,1,0.0);
  background-color:transparent !important;
  animation-name: rotateAnimation;
  -webkit-animation-name: wk-rotateAnimation;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-delay: 0.2s;
  -webkit-animation-delay: 0.2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}
@keyframes rotateAnimation {
    0%   {transform: rotate(0deg);}
    100% {transform: rotate(360deg);}
}
@-webkit-keyframes wk-rotateAnimation {
    0%   {-webkit-transform: rotate(0deg);}
    100% {-webkit-transform: rotate(360deg);}
}

.fa{
  color:#ffffff;
  font-size:18px !important;
  position:absolute;
  left:50%;
  top:50%;
  margin-left:-9px;
  margin-top:-9px;
  -webkit-transform:scaleX(0) !important;
  transform:scaleX(0) !important;
}

.finish{
  -webkit-transform:scaleX(1) !important;
  transform:scaleX(1) !important;
}
.hide-loading{
  opacity:0;
  -webkit-transform: rotate(0deg) !important;
  transform: rotate(0deg) !important;
  -webkit-transform:scale(0) !important;
  transform:scale(0) !important;
}





    
</style>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
@endsection


@section('page-content')


	<div class="row" style="margin-top:20px">
		<!-- <div class="col-md-1 col-sm-4 col-xs-12">
		</div> -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			
			<div class="x_panel">
				<div class="x_title">
					<h2 style="padding-bottom:5px">{{__('ui-list.studentslist')}}</h2>
					
							
					

					<div class="clearfix"></div>

				</div>

		
				<div class="x_content">
				
			<!--	<div class="table-responsive"> -->
			<div>
					
				
					
					@if(Auth::user()->status == 0 && Auth::user()->lastName == "Attestation" ||
					Auth::user()->status == 0 && Auth::user()->lastName == "TechnicalCommittee" ||
					Auth::user()->status == 0 && Auth::user()->lastName == "HA" ||
					Auth::user()->status == 0 && Auth::user()->lastName == "CommissionDirector" ||
					Auth::user()->status == 3 && Auth::user()->lastName == "Administrator") 
					
					
					
				<table  id="myTable" class="table table-condensed table-hover table-striped" border="1px solid">
				<thead>
					<tr>						
						<th>{{__('ui-list.regNo')}}</th>
						<th>{{__('ui-list.name')}}</th>
						<th>{{__('ui-list.fatherName')}}</th>
						<th>{{__('ui-list.issueingCountry')}}</th>
						<th>{{__('ui-list.attestationstatus')}}</th>
						<th>{{__('ui-list.action')}}</th>
						
						
					</tr>
				</thead>
				<tbody>
				    
				    	
					
					
					@foreach($doctor_lists as $doctor_list)
					
					
					
					<tr>
					
						<td> {{$doctor_list->reg_no}}</td>
						<td> {{$doctor_list->name}}</td>
						<td> {{$doctor_list->father_name}}</td>
						<td> {{$doctor_list->issueingCountry}}</td>
						
				
						
						@if($doctor_list->status == "Approved")
						<td> <b><font color="green">{{__('ui-list.approved')}}</font></b></td>
						
						@elseif($doctor_list->status == "Rejected")
						
						<td> <b><font color="red">{{__('ui-list.rejected')}}</font></b></font></td>
						
						@elseif($doctor_list->status == "Pending")
						<td> <b><font color="grey">{{__('ui-list.pending')}}</font></b></td>
						
						@endif
						
						<td> 
						
						
						
						
						
						@if(Auth::user()->status == 0 && Auth::user()->lastName == "Attestation")
						
						@if($doctor_list->pass == "The Application is with Documents Evaluation Committee for Review")
						
						    <?php
                                              $encrypted = $doctor_list->reg_no;
                                              $encrypted = encrypt($encrypted);
                            ?>
                            
                            
                        
						<a style="border-left:2px solid grey" class="details" href="{{'admin_doctor/'.$encrypted.'/details'}}"><i class="fa fa-list"></i> {{__('ui.details')}}</a>
						
						@if($doctor_list->status == "Rejected")
						
					
						
						@else
						
						<a style="border-left:2px solid grey" class="pass" href="{{'checklist1/'.$encrypted.'/create'}}"><i class="fa fa-check"></i>{{__('ui-list.pass')}}</a>

            
            @endif
						
					    
				  	<!--	<a style="border-left:2px solid
				  	grey" class="pass" href="{{'checklist1/'.$doctor_list->id.'/create'}}"><i class="fa fa-check"></i>{{__('ui-list.pass')}}</a> -->

						<!-- <a class="btn btn-primary" href="{{'/admin_doctor/'.$doctor_list->id.'/edit'}}"><i class="fa fa-edit"></i>{{__('ui.edit')}}</a>  -->
						
						<!--<a onclick="return confirm('Are you sure?');" disabled class="btn btn-danger" href="{{'/delete/'.$doctor_list->id}}"><i class="fa fa-warni"></i>{{__('ui.delete')}}</a>  -->
						@elseif($doctor_list->pass == "The Application has been forwarded to Technical Committee by Documents Attestation Evaluation department.")
						  <?php
                                              $encrypted = $doctor_list->reg_no;
                                              $encrypted = encrypt($encrypted);
                            ?>
							<a style="border-left:2px solid grey" class="details" href="{{'admin_doctor/'.$encrypted.'/details'}}"><i class="fa fa-list"></i> {{__('ui.details')}}</a>
								<a style="border-left:2px solid grey" class="pass" href="{{'checklist1/'.$encrypted.'/create'}}"><i class="fa fa-check"></i>{{__('ui-list.pass')}}</a>
				
						<p>اسناد به کمیته تخنیکی ارسال شده است.</p>

				        
						
						<!--<a onclick="#" disabled class="btn btn-danger" href="#"><i class="fa fa-warni"></i>{{__('ui.delete')}}</a>  -->
						
						
						@endif
	
						 @elseif(Auth::user()->lastName == "Verifier")
						
							@if($doctor_list->pass == "Yes" && $doctor_list->status == "Pending")
						
								@if($doctor_list->rejectionFlag == 1)
								<a style="border-left:2px solid grey" class="btn btn-danger" href="#"><i class="fa fa-times"></i>{{__('ui-list.rejected')}}</a> 
								@else
								<a style="border-left:2px solid grey" class="checklist" href="{{'checklist/'.$doctor_list->id.'/create'}}"><i class="fa fa-check"></i>{{__('ui-list.checklist')}}</a> 
								@endif
							
							@elseif(Auth::user()->status == 0 && Auth::user()->lastName == "CommissionDirector" && $doctor_list->status == "Approved" && $doctor_list->pass == "Yes")
								<?php
                                              $encrypted = $doctor_list->reg_no;
                                              $encrypted = encrypt($encrypted);
                                         ?>
						    <!-- <center><a id="printButton" href="{{'printcertificate/'.$doctor_list->reg_no.'/certificate'}}"  class="btn btn-primary  pull-right"><i class="fa fa-print"></i> Print ID Card</a></center>-->
							<center><a id="printButton" href="{{'printcertificate/'.$encrypted.'/certificate1'}}"  class="print">
							<i class="fa fa-print"></i> {{__('ui-list.printcertificate')}}</a></center>
	
						
							@endif
							
							
						 @elseif(Auth::user()->lastName == "Administrator")
						<!--
						<a style="border-left:2px solid grey" class="btn btn-primary" href="{{'admin_doctor/'.$doctor_list->reg_no.'/details'}}"><i class="fa fa-list"></i> {{__('ui.details')}}</a>
					    
						<a style="border-left:2px solid grey" class="btn btn-primary" href="{{'checklist1/'.$doctor_list->id.'/create'}}"><i class="fa fa-check"></i>Pass</a> 	

						<a class="btn btn-primary" href="{{'/admin_doctor/'.$doctor_list->id.'/edit'}}"><i class="fa fa-edit"></i>{{__('ui.edit')}}</a>  
						
						<a onclick="return confirm('Are you sure?');" disabled class="btn btn-danger" href="{{'/delete/'.$doctor_list->id}}"><i class="fa fa-warni"></i>{{__('ui.delete')}}</a>  -->
					
						
						@elseif(Auth::user()->status == 0 && Auth::user()->lastName == "TechnicalCommittee" && $doctor_list->pass == "The Application has been forwarded to Technical Committee by Documents Attestation Evaluation department.")
						
						
						@if(Auth::user()->status == 0 && Auth::user()->lastName == "TechnicalCommittee" && $doctor_list->approvechecklist == "The application has been forwarded to Higher Attestation Evaluation committee by Technical Committee")
							 <?php
                                              $encrypted = $doctor_list->reg_no;
                                              $encrypted = encrypt($encrypted);
                                         ?>
							
						<a style="border-left:2px solid grey" class="details" href="{{'admin_doctor/'.$encrypted.'/details'}}"><i class="fa fa-list"></i> {{__('ui.details')}}</a>
					    	
					    	    
					    	    @if($doctor_list->StudyDuration == "4")
					    		<a id="printButton" style="border-left:2px solid grey" class="details" href="{{'printcertificate/'.$doctor_list->reg_no.'/maktoob2years'}}"  class="print"><i class="fa fa-print"></i> مکتوب دو ساله</a>
                                @endif
                                
                                @if($doctor_list->typeEducation == "2")
                                <a id="printButton" style="border-left:2px solid grey" class="details" href="{{'printcertificate/'.$doctor_list->reg_no.'/maktoobGherHuzoory'}}"  class="print"><i class="fa fa-print"></i> مکتوب غیر حضوری </a>
                                @endif
                                
                                <?php
                                              $encrypted = $doctor_list->reg_no;
                                              $encrypted = encrypt($encrypted);
                                         ?>

 @if($doctor_list->Temporary === "on")
  <a id="printButton" style="border-left:2px solid grey" class="details" href="{{'printcertificate/'.$doctor_list->reg_no.'/maktoobTemporary'}}"  class="print"><i class="fa fa-print"></i>  مکتوب موقت</a>
 @endif                                 
                                	<a style="border-left:2px solid grey" class="pass" href="{{'checklist2/'.$encrypted.'/create'}}"><i class="fa fa-check"></i>{{__('ui-list.pass')}}</a> 
                                      
                                
                             <!--   <a id="printButton" style="border-left:2px solid grey" class="details" href="{{'printcertificate/'.$doctor_list->reg_no.'/certificate6'}}"  class="print"><i class="fa fa-print"></i> {{__('ui-list.printcertificate')}}</a> -->

						<b>درخواست توسط کمیته تخنیکی به کمسیون عالی ارزیابی اسناد تحصیلی ارسال شده است</b>
						
						@else
							             <?php
                                              $encrypted = $doctor_list->reg_no;
                                              $encrypted = encrypt($encrypted);
                                         ?>
                                         
						<a style="border-left:2px solid grey" class="details" href="{{'admin_doctor/'.$encrypted.'/details'}}"><i class="fa fa-list"></i> {{__('ui.details')}}</a>
					    
						<a style="border-left:2px solid grey" class="pass" href="{{'checklist2/'.$encrypted.'/create'}}"><i class="fa fa-check"></i>{{__('ui-list.pass')}}</a> 
						
						
						
						
						@endif
						
						
						
						@elseif(Auth::user()->status == 0 && Auth::user()->lastName == "HA" && $doctor_list->pass == "The Application has been forwarded to Technical Committee by Documents Attestation Evaluation department." && $doctor_list->approvechecklist == "The application has been forwarded to Higher Attestation Evaluation committee by Technical Committee")
						 
						
						@if(Auth::user()->status == 0 && Auth::user()->lastName == "HA" && $doctor_list->approvechecklist1 == "The Application has been forwarded to Commission Director by H.A Evaluation committee .")
						                 <?php
                                              $encrypted = $doctor_list->reg_no;
                                              $encrypted = encrypt($encrypted);
                                         ?>
						<a style="border-left:2px solid grey" class="details" href="{{'admin_doctor/'.$encrypted.'/details'}}"><i class="fa fa-list"></i> {{__('ui.details')}}</a>
					    
						<b> به ریس کمسیون ارجاع گردیده است.</b>

					
						
						@else
						                <?php
                                              $reg_no = $doctor_list->reg_no;
                                              $encrypted = encrypt($reg_no);
                                        ?>
							
						<a style="border-left:2px solid grey" class="details" href="{{'admin_doctor/'.$encrypted.'/details'}}"><i class="fa fa-list"></i> {{__('ui.details')}}</a>
					    
						<a style="border-left:2px solid grey" class="pass" href="{{'checklist3/'.$doctor_list->id.'/create'}}"><i class="fa fa-check"></i>{{__('ui-list.pass')}}</a> 

                         <?php
                                              $encrypted = $doctor_list->reg_no;
                                              $encrypted = encrypt($encrypted);
                                         ?>
						<a class="edit" href="{{'/admin_doctor/'.$encrypted.'/edit'}}"><i class="fa fa-edit"></i>{{__('ui.edit')}}</a> 
						
						@endif
						
						
						
						@elseif(Auth::user()->status == 0 && Auth::user()->lastName == "CommissionDirector" && $doctor_list->pass == "The Application has been forwarded to Technical Committee by Documents Attestation Evaluation department." && $doctor_list->approvechecklist1 == "The Application has been forwarded to Commission Director by H.A Evaluation committee .")
						
						
					
						@if(Auth::user()->status == 0 && Auth::user()->lastName == "CommissionDirector" && $doctor_list->status=="Approved")
						
						 <?php
                                              $encrypted = $doctor_list->reg_no;
                                              $encrypted = encrypt($encrypted);
             ?>
             
						<a style="border-left:2px solid grey" class="details" href="{{'admin_doctor/'.$encrypted.'/details'}}"><i class="fa fa-list"></i> {{__('ui.details')}}</a>
					    
					  <h2 style="style="border-left:2px solid green">	{{__('ui-list.approved')}}</h2>

              
						<!--<a class="btn btn-primary" disabled href="#"><i class="fa fa-edit"></i>{{__('ui.edit')}}</a> --> 
						<?php
                                              $encrypted = $doctor_list->reg_no;
                                              $encrypted = encrypt($encrypted);
                                         ?>
						<a id="printButton" href="{{'printcertificate/'.$encrypted.'/certificate1'}}"  class="print"><i class="fa fa-print"></i> {{__('ui-list.printcertificate')}}</a>
						
						
						@else
							   <?php
                                              $encrypted = $doctor_list->reg_no;
                                              $encrypted = encrypt($encrypted);
                                         ?>
						
						<a style="border-left:2px solid grey" class="details" href="{{'admin_doctor/'.$encrypted.'/details'}}"><i class="fa fa-list"></i> {{__('ui.details')}}</a>
					    
						<a style="border-left:2px solid grey" class="btn btn-primary" href="{{'checklist4/'.$doctor_list->id.'/create'}}"><i class="fa fa-check"></i>{{__('ui-list.approve')}}</a> 	

            <a style="border-left:2px solid grey" class="btn btn-primary" href="{{'checklist5/'.$doctor_list->id.'/create'}}"><i class="fa fa-check"></i>تغیر</a> 	

						<!--<a class="btn btn-primary" href="{{'/admin_doctor/'.$doctor_list->reg_no.'/edit'}}"><i class="fa fa-edit"></i>{{__('ui.edit')}}</a>  -->
						
						@endif

						
						@endif
						
						
						
						 </td>
					
					
						
						
							@endforeach()	
					
					
					@else
						
						
					</tr>
					
						
					

			
					
					
				</tbody>
		
			</table>
						
						
					
		<table  id="myTable1" class="table table-condensed table-hover table-striped" border="1px solid">
				<thead>
					<tr>			
						<th>{{__('ui-list.regNo')}}</th>
						<th style="display:none">Reg Date</th>
						<th>{{__('ui-list.name')}}</th>
						<th>{{__('ui-list.DegreeStatus')}}</th>

						<th>{{__('ui-list.documentattestationcommittee')}}</th>
						<th>{{__('ui-list.technicalcommittee')}} </th>
						<th>{{__('ui-list.H.A')}}</th>
						<th>{{__('ui-list.commissiondirector')}}</th>
						<th>{{__('ui-list.attestationstatus')}}</th>
						<th>{{__('ui-list.print')}}</th>
						
						<th>{{__('ui-list.details1')}}</th>
						<th>{{__('ui-list.edit')}}</th>	
						
					</tr>
				</thead>
				<tbody>
				
				
			  @foreach($doctor_lists as $doctor_list)
			  @if(Auth::user()->lastName == 'Balakarzai')
			  
			  <tr>
					
						<td> {{$doctor_list->reg_no}}</td>
						<td style="display:none"> {{$doctor_list->reg_date}}</td>
						<td> {{$doctor_list->name}}</td>
						<td> {{$doctor_list->degree}}</td>
						
					
						
						
						<!--committee reivew-->
					@if($doctor_list->pass == "The Application is with Documents Evaluation Committee for Review" || $doctor_list->pass == "The Application has been forwarded to Technical Committee by Documents Attestation Evaluation department.")
					
				
						<td> {{__('ui-list.withDocumentEvaluation')}} <br/> <b>{{__('ui-list.datetime')}} :</b>  {{$doctor_list->reg_date}}<br/><br/>  </td>
						
						@if($doctor_list->approvechecklist == "The application has been forwarded to Higher Attestation Evaluation committee by Technical Committee")
						<td> {{__('ui-list.approvechecklist')}} <br/> <b>{{__('ui-list.datetime')}} :</b>  {{$doctor_list->timeDuration}} </td>
						@else
						<td> Pending </td>
						
						@endif
						@if($doctor_list->approvechecklist1 == "The Application has been forwarded to Commission Director by H.A Evaluation committee .")
						<td> {{__('ui-list.approvechecklist1')}} <br/> <b>{{__('ui-list.datetime')}} :</b>  {{$doctor_list->timeDuration}} </td>
						@else
							<td> Pending </td>
						@endif
						@if($doctor_list->status == "Approved")
						<td> {{__('ui-list.approved')}} <br/> <b>{{__('ui-list.datetime')}} :</b>  {{$doctor_list->timeDuration}}</td>
						@else
							<td> Pending </td>
						@endif	
						@if($doctor_list->status == "Rejected")
						<td> {{__('ui-list.rejected')}} <br/> <b>{{__('ui-list.datetime')}} :</b>  {{$doctor_list->timeDuration}}</td>
						@else
							<td> Pending </td>
						@endif
						@if($doctor_list->status == "Pending")
						<td> {{__('ui-list.pending')}} <br/> <b>{{__('ui-list.datetime')}} :</b>  {{$doctor_list->timeDuration}}</td>
						@else
							<td> Pending </td>	
						@endif	
							
						
				
						@if($doctor_list->status == "Approved")
						<td> <font color="green"><b><font color="green">{{__('ui-list.approved')}}</font></b></font></td>
						@elseif($doctor_list->status == "Rejected")
						<td> <font color="green"><b><font color="red">{{__('ui-list.rejected')}}</font></b></font></td>
						@endif
						
						
					
					@endif
						
						
						
					
						
						
					</tr>
					
			  
			  
			  
			  @endif
			  @endforeach()
				
			
			  @foreach($doctor_lists as $doctor_list)
			  @if(strcasecmp(Auth::user()->email, $doctor_list->PersonalEmail) == 0)
					<tr>
					
						<td> {{$doctor_list->reg_no}}</td>
						<td style="display:none"> {{$doctor_list->reg_date}}</td>
						<td> {{$doctor_list->name}}</td>
						<td> {{$doctor_list->degree}}</td>
						
						
						
						@if($doctor_list->pass == "The Application has been forwarded to Technical Committee by Documents Attestation Evaluation department.")	
					
						<td> {{__('ui-list.technicalcommittee1')}} <br/> <b>{{__('ui-list.datetime')}} :</b>  {{$doctor_list->reg_date}}<br/><br/>  </td>
						
						@else
						
							<td> Pending </td>
						
						@endif
						
						@if($doctor_list->approvechecklist == "The application has been forwarded to Higher Attestation Evaluation committee by Technical Committee")
						
						<td> {{__('ui-list.approvechecklist')}} <br/> <b>{{__('ui-list.datetime')}} :</b>  {{$doctor_list->timeDuration}} </td>
						
						@else
							<td> Pending </td>
						@endif
						
						@if($doctor_list->approvechecklist1 == "The Application has been forwarded to Commission Director by H.A Evaluation committee .")
						<td> {{__('ui-list.approvechecklist1')}} <br/> <b>{{__('ui-list.datetime')}} :</b>  {{$doctor_list->timeDuration}} </td>
						@else
							<td> Pending </td>
						@endif
						
						@if($doctor_list->status == "Approved")
						<td> {{__('ui-list.approved')}} <br/> <b>{{__('ui-list.datetime')}} :</b>  {{$doctor_list->timeDuration}}</td>
						
						@elseif($doctor_list->status == "Rejected")
						
						<td> {{__('ui-list.rejected')}} <br/> <b>{{__('ui-list.datetime')}} :</b>  {{$doctor_list->timeDuration}}</td>
						
						@elseif($doctor_list->status == "Pending" && $doctor_list->approvechecklist2 == "Yes")
						<td> {{__('ui-list.pending')}} <br/> <b>{{__('ui-list.datetime')}} :</b>  {{$doctor_list->timeDuration}}</td>
						@else
							<td> Pending </td>
						@endif
					
							
						
				
						@if($doctor_list->status == "Approved")
						<td> <font color="green"><b><font color="green">{{__('ui-list.approved')}}</font></b></font></td>
						@elseif($doctor_list->status == "Rejected")
						<td> <font color="green"><b><font color="red">{{__('ui-list.rejected')}}</font></b></font></td>
						@else
							<td> Pending </td>
						@endif
						
					
						
						<td width="10px">
						
						@if($doctor_list->degree == "Bachelor" )
						  <?php
                                              $id = $doctor_list->reg_no;
                                              $encrypted = encrypt($id);
                                        ?>
						<a id="printButton" href="{{'printcertificate/'.$encrypted.'/certificate3'}}"  >
            <button class="excel">{{__('ui-list.print')}}</button>  </a> 
						
						<a href="{{'printcertificate1/'.$doctor_list->reg_no}}"><button class="excel">Excel</button></a>	
						@elseif($doctor_list->degree == "Master" || $doctor_list->degree == "PHD")
						<?php
                                              $encrypted = $doctor_list->reg_no;
                                              $encrypted = encrypt($encrypted);
                                         ?>
						<a id="printButton" href="{{'printcertificate/'.$doctor_list->reg_no.'/certificate4'}}"  class="print">
						<i class="fa fa-print"></i> {{__('ui-list.print')}} </a> 
						<a href="{{'printcertificate1/'.$doctor_list->reg_no}}"><button class="excel">Excel</button></a>
						
						
						@endif
						
						
					
						
						
						
						</td>
						
						<td width="10px">
						                <?php
                                              $encrypted = $doctor_list->reg_no;
                                              $encrypted = encrypt($encrypted);
                                         ?>

					<!--	<a style="border-left:2px solid grey" class="details" href="{{'admin_doctor/'.$doctor_list->reg_no.'/details'}}"><i class="fa fa-list"></i> {{__('ui.details')}}</a>-->
						<a style="border-left:2px solid grey" class="details" href="{{'admin_doctor/'.$encrypted.'/details'}}"><i class="fa fa-list"></i> {{__('ui.details')}}</a>
					    </td>
					
									
					
						
					
						@if( $doctor_list->pass == "The Application has been forwarded to Technical Committee by Documents Attestation Evaluation department.")

						
						
						<td width="10px">
						 
						    <h2 style="style="border-left:2px solid green">{{__('ui.edit')}} </h2>
						

						</td>
						
							

						@elseif($doctor_list->edited == NULL)
						
						 <?php
                                              $encrypted = $doctor_list->reg_no;
                                              $encrypted = encrypt($encrypted);
                                         ?>
						
						<td width="10px">
							<a class="edit" href="{{'/admin_doctor/'.$encrypted.'/edit_1'}}"><i class="fa fa-edit"></i>{{__('ui.edit')}}</a>  
						</td>

						
			
						
						@endif
						
						
						
						
					
						
						
					</tr>
					
						
					
					@endif


					
					
				









					@endforeach()
					
				
				

					
					
					
					@endif
					


	<!--<center><h3>{{__('ui-list.note')}} </h3	></center> -->

			
				</tbody>
			</table>
			
			
			

					</div>
					
					
					
			
		
					
					
					
					
					
				</div>
			</div>
		</div>

		<!-- <div class="col-md-1 col-sm-4 col-xs-12">
		</div> -->

	</div>
	
	
		

		

	


@stop

@section('scripts')


    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="{{URL::asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	
   
   <script>
	
			$(document).ready(function(){
			$('#myTable').DataTable({
				  "language": {
						"lengthMenu": "{{__('ui.show')}} _MENU_ {{__('ui.entry')}}",
						"zeroRecords": "{{__('ui.empty_info')}}",
						"info": "",
						"search":"{{__('ui.search')}}",
						"infoEmpty": "{{__('ui.search_result')}}",
						 "paginate": {
     						 "previous": "{{__('ui.previous')}}",
							  "next":"{{__('ui.next')}}"
   							 }
       					 }
				});
		});
	
	
		$(document).ready(function(){
			$('#myTable1').DataTable({
				  "language": {
						"lengthMenu": "{{__('ui.show')}} _MENU_ {{__('ui.entry')}}",
						"zeroRecords": "{{__('ui.empty_info')}}",
						"info": "",
						"search":"{{__('ui.search')}}",
						"infoEmpty": "{{__('ui.search_result')}}",
						 "paginate": {
     						 "previous": "{{__('ui.previous')}}",
							  "next":"{{__('ui.next')}}"
   							 }
       					 }
				});
		});
	
	


   
  
   
       
  $(document).ready(function() {
  $(".print").click(function() {
    $(".print").addClass("print_load");
    setTimeout(function() {
      $(".print").addClass("hide-loading");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 9000);
    setTimeout(function() {
      $(".print").removeClass("print_load");
      $(".print").removeClass("hide-loading");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 9000);
  })
});
       
       
 
       
  $(document).ready(function() {
  $(".details").click(function() {
    $(".details").addClass("details_load");
    setTimeout(function() {
      $(".details").addClass("hide-loading");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 9000);
    setTimeout(function() {
      $(".details").removeClass("details_load");
      $(".details").removeClass("hide-loading");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 9000);
  })
});
       
       
       

  $(document).ready(function() {
  $(".edit").click(function() {
    $(".edit").addClass("edit_load");
    setTimeout(function() {
      $(".edit").addClass("hide-loading");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 9000);
    setTimeout(function() {
      $(".edit").removeClass("edit_load");
      $(".edit").removeClass("hide-loading");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 9000);
  })
});
       
       
       

       
  $(document).ready(function() {
  $(".excel").click(function() {
    $(".excel").addClass("excel_load");
    setTimeout(function() {
      $(".excel").addClass("hide-loading");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 9000);
    setTimeout(function() {
      $(".excel").removeClass("excel_load");
      $(".excel").removeClass("hide-loading");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 9000);
  })
});
      

       
  $(document).ready(function() {
  $(".checklist").click(function() {
    $(".checklist").addClass("checklist_load");
    setTimeout(function() {
      $(".checklist").addClass("hide-loading");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 9000);
    setTimeout(function() {
      $(".checklist").removeClass("checklist_load");
      $(".checklist").removeClass("hide-loading");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 9000);
  })
});
      

       
  $(document).ready(function() {
  $(".pass").click(function() {
    $(".pass").addClass("pass_load");
    setTimeout(function() {
      $(".pass").addClass("hide-loading");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 9000);
    setTimeout(function() {
      $(".pass").removeClass("pass_load");
      $(".pass").removeClass("hide-loading");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 9000);
  })
});
      

       
  $(document).ready(function() {
  $(".delete").click(function() {
    $(".delete").addClass("delete_load");
    setTimeout(function() {
      $(".delete").addClass("hide-loading");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 9000);
    setTimeout(function() {
      $(".delete").removeClass("delete_load");
      $(".delete").removeClass("hide-loading");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 9000);
  })
});
      

       
  $(document).ready(function() {
  $(".cancel").click(function() {
    $(".cancel").addClass("cancel_load");
    setTimeout(function() {
      $(".cancel").addClass("hide-loading");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 9000);
    setTimeout(function() {
      $(".cancel").removeClass("cancel_load");
      $(".cancel").removeClass("hide-loading");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 9000);
  })
});
      

		


		$('#printButton').on('click',function(){
                product_name=$('.p_name').text();
                category_name=$('.c_name').text();
                unit_measurement=$('.u_name').text();
                quantity=$('.q').text();
               $.ajax({
                   type:'GET',
                   url:'/print_product_report/'+product_name+'/'+category_name+'/'+unit_measurement+'/'+quantity,
                   success:function(response){
                       window.location.href=response;
                   }
               });
            });


		
	
	</script>

@endsection()
