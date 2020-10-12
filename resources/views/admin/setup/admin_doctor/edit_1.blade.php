<?php
header("Cache-Control: no-store, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
echo time();
?>


@extends('admin-layout.app',['title'=>'Update Location'])
@section('custom_css_links')

	<style>
	
	.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  height:15px;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding-bottom: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.a span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.a span:after {
  content: '\00bb';
  position: relative;
  opacity: 0;
  
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.a:hover span {
  padding-right: 25px;
}

.a:hover span:after {
  opacity: 1;
  right: 0;
}




.simple-form {
  display: flex;
  overflow-y: scroll;
  padding-bottom: 1.25rem;
}
.simple-form input,
.simple-form select


 {
  margin: 0 .25rem;
  min-width: 125px;
  border: 1px solid #eee;
  border-left: 3px solid;
  border-radius: 5px;
  transition: border-color .5s ease-out;
}
.simple-form input:optional,
.simple-form select:optional {
  border-left-color: #999;
}
.simple-form input:required:valid,
.simple-form select:required:valid {
  border-left-color: palegreen;
}
.simple-form input:invalid,
.simple-form select:invalid {
  border-left-color: salmon;
}
.simple-form input:required:focus:valid,
.simple-form select:required:focus:valid {
  background: url("/images/check.svg") no-repeat 95% 50%;
  background-size: 25px;
}
.simple-form input:focus:invalid,
.simple-form select:focus:invalid {
  background: url("/images/tnt.svg") no-repeat 95% 50%;
  background-size: 45px;
}


	
	
	
	   @if(App::getLocale()=='fa')
			 label{
				 text-align:left !important;
			 }
	   @endif()

	   
	</style>

  	<style>
.save{
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


.save_load{
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


</style>
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
   
   
      <script>
       
  $(document).ready(function() {
  $(".save").click(function() {
    $(".save").addClass("save_load");
    setTimeout(function() {
      $(".save").addClass("hide-loading");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 9000);
    setTimeout(function() {
      $(".save").removeClass("save_load");
      $(".save").removeClass("hide-loading");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 9000);
  })
});
      
</script>
             <script>
       
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
      
</script>

    <script type="text/javascript">
onload=function(){
var e=document.getElementById("refreshed");
if(e.value=="no")e.value="yes";
else{e.value="no";location.reload();}
}
   
   </script>
   <script>
   
$(window).bind("pageshow", function() {
    var form = $('form'); 
    // let the browser natively reset defaults
    form[0].reset();
});
   
   </script>
	
	
	</script>

@endsection()
@section('page-content')


	 @if(Auth::user()->id == $registred_doctor->userid)

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
					<div class="x_title">
							<h2 style="padding-bottom:5px">{{__('ui-list.studentinformation')}}</h2>
							<div class="clearfix"></div>
					</div>

					<div class="x_content">
		<form  action="{{'/admin_doctor/'.$registred_doctor->reg_no}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data" files="true">

			<div class="panel-body">
				
				{{ csrf_field() }}
                {{method_field('put')}}

	       <fieldset>


					<div class="row" style="margin-top:20px">
    <!-- <div class="col-md-1 col-sm-2 col-xs-12">

    </div> -->
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" >
        <div class="x_title">
            <a href="/admin_doctor" ><i class="fa fa-arrow-left"></i> {{__('ui.back')}}</a>
          
        
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            
        
<div class="row">


  <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" >
        <div class="x_title btn-info">
            <a href="/doctor" ></i></a>
            <a id="printOrder" href="#"></a>
          <div class="text-center">
              <h3 class="text-center" >{{__('ui-list.personaldetails')}}</h3>
          </div>
        
          <div class="clearfix"></div>
        </div>
        <div class="x_content">   

                
         <table class="table   table-bordered table-condensed" style="position:inline;">
                    <thead>
					
					<tr>
                        <td  class="btn-primary">{{__('ui-list.entity1')}}</td>      
                        <td class="btn-primary">{{__('ui-list.entity2')}}</td> 
                        <td class="btn-primary">{{__('ui-list.image')}}</td> 
                      </tr>
                      <tr>
                        <td  width="40%">{{__('ui-list.no')}}</td>      
                       <td width="50%"><input id="reg_no" readonly name="reg_no"  tabindex="2"  type="text" value="{{$registred_doctor->reg_no}}" class="form-control input-md"></td>
                  
					            <td rowspan="4" style="text-align:center">
                                                      <!-- <img src="{{ asset('storage/app/public/images/'.$registred_doctor->image)}}" style="width:220px;height:220px;" />-->
            	<img src="{{URL::to('/storage/app/public/documents/'.$registred_doctor->image)}}" style="width:220px;height:220px;" />
                        
                        </td>
                      </tr>
                       <tr>
                        <td width="40%" style="display:none">USERID</td>
                        <td width="50%"><input id="userid" readonly style="display:none" name="userid"  tabindex="2"  type="text" value="{{$registred_doctor->userid}}" class="form-control input-md"></td>
                      
                      </tr>
                      <tr>
                        <td width="40%">{{__('ui-list.name')}}</td>
                        <td width="50%"><input id="name"  name="name" autofocus tabindex="1" type="text" value="{{$registred_doctor->name}}" class="form-control input-md"></td>
                      </tr>
                      <tr>
                        <th>{{__('ui-list.surname')}}</th>
                        <td><input id="surname" name="surname"  tabindex="3"  type="text" value="{{$registred_doctor->surname}}" class="form-control input-md"></td>
                      </tr>
                      <tr>
                        <th>{{__('ui-list.fatherName')}}</th>
                        <td><input id="father_name" tabindex="4"  name="father_name"  type="text" value="{{$registred_doctor->father_name}}" class="form-control input-md"></td>
                      </tr>
                      <tr>
                        <th>{{__('ui-list.issueingCountry')}}</th>
                        <td><input id="issueingCountry" tabindex="5"  name="issueingCountry"  type="text" value="{{$registred_doctor->issueingCountry}}" class="form-control input-md"></td>
                      		
                      	<td><input value="{{$registred_doctor->image}}"   onchange="document.getElementById('imgDisplayarea').src=window.URL.createObjectURL(this.files[0])" id="image"    name="image"  type="file" /></td>
                        
					 </tr>
                      
             
                      <tr>
                        <th>{{__('ui-list.nic')}}</th>
                        <td><input id="nic" name="nic" tabindex="8"  type="text" value="{{$registred_doctor->nic}}" class="form-control input-md"></td>
                      	
                      </tr>
                     
                      
					  <tr>
                        <th>{{__('ui-list.diplomaNumber')}}</th>
                        <td><input id="DiplomaNumber" name="DiplomaNumber"  tabindex="8"  type="text" value="{{$registred_doctor->DiplomaNumber}}" class="form-control input-md"></td>
                      	
                      </tr>
                      
                       <tr>
                        <th>{{__('ui-list.transcriptNumber')}}</th>
                        <td><input id="TranscriptNumber" name="TranscriptNumber"  tabindex="8"  type="text" value="{{$registred_doctor->TranscriptNumber}}" class="form-control input-md"></td>
                      	
                      </tr>
					
                     
					 
					           <tr>
                        <th>{{__('ui-list.EducationalDocument')}} </th>
						<td>
						<select  id="EDocument" tabindex="17" required name="EDocument" class="form-control" >
                                  
                                  @if($registred_doctor->EDocument == 1)
                                  <option selected value="1">{{__('ui-list.original')}}</option>
								  <option value="2">{{__('ui-list.temporary')}}</option>
								  @elseif($registred_doctor->EDocument == 2)
								    <option value="1">{{__('ui-list.original')}}</option>
								  <option selected value="2">{{__('ui-list.temporary')}}</option>
								 
								  @endif()
                                
                          </select>
                     </td>
                      </tr>
					  
					          
                      <tr>
                        <th>{{__('ui-list.typeofscholarship')}}</th>
						<td>
						<select  id="typeScholarship" tabindex="16" required name="typeScholarship" class="form-control" >
                                  
                                  @if($registred_doctor->typeScholarship == 1)
                                  <option selected value="1">{{__('ui-list.Government')}}</option>
                                  <option value="2">{{__('ui-list.Private')}}</option>
								  @elseif($registred_doctor->typeScholarship == 2)
								   <option value="1">{{__('ui-list.Government')}}</option>
                                  <option selected value="2">{{__('ui-list.Private')}}</option>
								  @endif()
                        </select>
					</td>
                     
                    

                      </tr>

                          <tr>
                        <th>{{__('ui-list.universityID')}}</th>
                        <td><input id="UniID" name="UniID" tabindex="8"   type="text" value="{{$registred_doctor->UniID}}" class="form-control input-md"></td>
                      	
                      </tr>

                      
                      <tr>
                        <th>{{__('ui-list.rollNum')}}</th>
                        <td><input id="RollNum" name="RollNum"  tabindex="8"  type="text" value="{{$registred_doctor->RollNum}}" class="form-control input-md"></td>
                      	
                      </tr>

                       <tr>
                        <th>{{__('ui-list.personalPhone')}}</th>
                        <td><input id="PersonalCellPhone" name="PersonalCellPhone" tabindex="8"   type="text" value="{{$registred_doctor->PersonalCellPhone}}" class="form-control input-md"></td>
                      	
                      </tr>

                       <tr>
                        <th>{{__('ui-list.studyDuration')}}</th>
                        <td><input id="StudyDuration" name="StudyDuration" tabindex="8"  type="text"  value="{{$registred_doctor->StudyDuration}}" class="form-control input-md"></td>
                      	
                      </tr>

                      <tr>
                        <th>{{__('ui-list.PAddress')}}</th>
                        <td><input id="PAddress" name="PAddress" tabindex="8"  type="text"  value="{{$registred_doctor->PAddress}}" class="form-control input-md"></td>
                      	
                      </tr>
                      <tr>
                        <th>{{__('ui-list.CAddress')}}</th>
                        <td><input id="CAddress" name="CAddress" tabindex="8"  type="text"  value="{{$registred_doctor->PAddress}}" class="form-control input-md"></td>
                      	
                      </tr>
                      <tr >
                        <th>{{__('ui-list.fieldofEducation')}}</th>
                        <td><input id="FEducation" name="FEducation" tabindex="8"   type="text" value="{{$registred_doctor->FEducation}}" class="form-control input-md"></td>
                      	
                      </tr>
                      <tr>
                        <th>{{__('ui-list.email')}}</th>
                        <td><input id="PersonalEmail" name="PersonalEmail" tabindex="8"  type="text"  value="{{$registred_doctor->PersonalEmail}}" class="form-control input-md"></td>
                      	
                      </tr>

                      

                        <tr>
                        <th>{{__('ui-list.pob')}}</th>
                        <td><input id="Pbirth" name="Pbirth" tabindex="8"  type="text" value="{{$registred_doctor->Pbirth}}"  class="form-control input-md"></td>
                      	

                      </tr>
                      <tr>
                        <th>{{__('ui-list.dob')}}</th>
                        <td><input id="dob" name="dob" tabindex="8"  type="text" value="{{$registred_doctor->dob}}"  class="form-control input-md"></td>
                      	
                      </tr>

                      <tr>
                        <th>{{__('ui-list.GYear')}}</th>
                        <td><input id="GYear" name="GYear" tabindex="8"  type="text" value="{{$registred_doctor->GYear}}"  class="form-control input-md"></td>
                      	
                      </tr>
                      <tr>
                        <th>{{__('ui-list.AYear')}}</th>
                        <td><input id="AYear" name="AYear" tabindex="8"  type="text" value="{{$registred_doctor->AYear}}"  class="form-control input-md"></td>
                      	
                      </tr>
                      

					  
					   <tr>
                        <th>{{__('ui-list.GPA')}}</th>
                        <td><input id="GPA" name="GPA" tabindex="8"  type="text" value="{{$registred_doctor->GPA}}" class="form-control input-md"></td>
                      	
                      </tr>
					  
					   <tr>

               <tr>
                        <th>{{__('ui-list.GYear')}}</th>
                        <td><input id="Grade" name="Grade"  tabindex="8"  type="text" value="{{$registred_doctor->Grade}}" class="form-control input-md"></td>
                      	
              </tr>
					  <tr>
                        <th>{{__('ui-list.typeofEducation')}}</th>
						
						
                        <!--<td><input id="typeEducation" name="typeEducation"  tabindex="8"  type="text" value="1" class="form-control input-md">{{__('ui-list.regular')}}</td>-->
						<td><select  id="typeEducation" tabindex="15" required name="typeEducation" class="form-control" >
                                  <option value="0">{{__('ui-list.selectType')}}</option>
                                  @if($registred_doctor->typeEducation == 1)
                                <option selected value="1">{{__('ui-list.regular')}}</option>
								<option value="2"> {{__('ui-list.partiallyRegular')}}</option>
								<option value="3">{{__('ui-list.NotRegular')}}</option>
								  @elseif($registred_doctor->typeEducation == 2)
								  <option selected value="2"> {{__('ui-list.partiallyRegular')}}</option>
								  <option  value="1">{{__('ui-list.regular')}}</option>
								  	<option value="3">{{__('ui-list.NotRegular')}}</option>
                                  @elseif($registred_doctor->typeEducation == 3)
								  <option selected value="3">{{__('ui-list.NotRegular')}}</option>
								    <option  value="2"> {{__('ui-list.partiallyRegular')}}</option>
								  <option  value="1">{{__('ui-list.regular')}}</option>
								  
								  @endif()
                          </select>
						  
                      	
					
                      </tr>
					  <!--
					 <tr style="display:none">
                        <th style="display:none">{{__('ui-list.edit')}}</th>
                        <td><input id="edited" readonly  style="display:none" name="edited" tabindex="8"  type="text" value="1" class="form-control input-md"></td>
                      	
                      </tr>-->
					
                  
					  
                      
                    </thead>
                    <tbody>

                     
                      

                      

                      

    

                      

                     
                       
                    
                    
                      
                    </tbody>
                  </table>





        </div>
    </div>
  </div>

  
       
</div>

<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" >
        <div class="x_title btn-info">
            <a href="/doctor" ></i></a>
            <a id="printOrder" href="#"></a>
          <div class="text-center">
              <h3 class="text-center" >{{__('ui-list.educationalqualification')}}</h3>
          </div>
        
          <div class="clearfix"></div>
        </div>
        <div class="x_content">   


                  <table class="table   table-bordered table-condensed table-hover table-striped" style="position:inline">
                    <thead>
                      <tr style="display:none">
                      </tr>

                      <tr style="background: rgba(38, 185, 154, 0.88);color:white">
                        <th style="text-align:left">{{__('ui-list.degree')}}</th>  
                        <th>{{__('ui-list.FromDate')}}</th>
                        <th>{{__('ui-list.ToDate')}}</th>
                        <th>{{__('ui-list.university')}}</th>
                        <th>{{__('ui-list.address')}}</th>
                        <th>{{__('ui-list.contact')}}</th>
                        <th>{{__('ui-list.files')}}</th>
                      </tr>
                      
                      
                    </thead>
                    <tbody>
                    
					
					
                      <tr>
                       
                     <td style="width:15%">
                        <select name="degree"  id="degre"  required class="form-control product" >
                        
                                
                                <option value="{{$registred_doctor->degree}}" >{{$registred_doctor->degree}}</option>
                              
                    
                         


                        </select>
                      </td>
                  
                  
                                   
                     <td><input type="text"  name="from_date" value="{{$registred_doctor->from_date}}" class="form-control"/></td>
                        <td><input type="text"  name="to_date" value="{{$registred_doctor->to_date}}" class="form-control"/></td>
                        
                      
                        
                        <td>
                        <select name="university"   required class="form-control product" >
                         
                         
                         
                          @foreach($universities as $university)
                          <option value="{{$university->name}}" >{{$university->name}}</option>
                          @endforeach()
                         
                        </select></td>
                     
                        
                        

                       
                      <td><input type="text" class="form-control"  value="{{$registred_doctor->PersonalPhon2}}"  name="address"/> </td>
                      <td><input type="text" class="form-control"  value="{{$registred_doctor->PersonalEmail2}}" name="contact"/> </td>
						          <td><u>
						              
						            <!--  <a href="{{ asset('storage/app/public/images/'.$registred_doctor->file_name)}}" target="_blank">{{$registred_doctor->file_name}}</a>-->
						                 <a href="{{URL::to('/storage/app/public/documents/'.$registred_doctor->file_name)}}" target="_blank">{{$registred_doctor->file_name}}</a>
                            	
					            <input type="file" class="form-control quantity"  name="file_name"/>
					            </u></td>
                      </tr>
                  
                    </tbody>
                  </table>
        </div>
    </div>
  </div>


  
       
</div>

  </div>






       






                        
                  <hr>
                 
                  
                  
                      
                  
                  
      
      
      </div>

  </div> 
  </div>
   <div class="col-md-1 col-sm-2 col-xs-12">

    

  </div> 
  </div>

					

					</fieldset>
						        

	        
   	</div>

			<div class=" text-center">
				
				<div class="form-group">
        @if($registred_doctor->edited == NULL)
        <!-- <center><h3>{{__('ui-list.note')}} </h3></center>-->
		
	            <input type="submit" class="save" value="{{__('ui.save')}}">
	            <a href="/admin_doctor" class="cancel">{{__('ui.cancel')}}</a>
	         </div>
        @elseif($registred_doctor->edited == 1)

              <input type="#" disabled class="save" value="{{__('ui.save')}}">
	            <a href="#" disabled class="cancel">{{__('ui.cancel')}}</a>

        @endif()
			</div>


		</form>
					</div>
			</div>
		</div>
	</div>
		
	

		
@else
<center>You are not allowed</center>
@endif
	


	
	



@stop