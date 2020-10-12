<?php 

//require_once '/home/karimbaidar1/public_html/afghanistanmedicalcouncil.com/public/jDateTime-master/jdatetime.class.php';
require_once 'C:\xampp\htdocs\RheinlandStudie\public\jDateTime-master/jdatetime.class.php';

//Init
$date = new jDateTime(true, true, 'Asia/Tehran');

?>
@extends('layouts.app')
@section('custom_css_links')
<style>

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
.submit{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  width:100px;
  height:40px;
  background-color:#006400;
  border:2px solid #006400;
  border-radius:10px;
  color:#FFFFFF;
  font-size:17px;
  cursor:pointer !important;
  outline:none;
}

.submit:hover{
  background-color:#222222;
}
.loading{
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







.simple-form {
  display: flex;
 
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





input:invalid + span:after {
    content: '';
    color: #f00;
    padding-left: 5px;
}

input:valid + span:after {
    content: '✓';
    color: #26b72b;
    padding-left: 5px;
}


/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}






.wizard {
    margin: 20px auto;
    background: #fff;
}

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.container {
    width:95%;
}
.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #5bc0de;
    
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #5bc0de;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
}

.wizard h3 {
    margin-top: 0;
}

@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}
</style>
	

@endsection()
@section('page-content')
 <div class="x_title text-center" style="padding:5px">
         <img src="{{url('/images/logo.png')}}" style="width:100px;height:100px;border-radius:50%"></img>   <table border="2px solid" width="100%" style="margin-top: 5px;">
                                                          <tr>
                                                         <td><b>    <center>د لوړو زده کړو وزارت<br/>د افغانستان اسلامی حمهوریت</center></br></b></br></br></td>
                                                           <center> <td><b>   <center>ISLAMIC REPUBLIC OF AFGHANISTAN </br>Ministry of Higher Education</center></b></br></br></td>
                                                           <center> <td><b>   <center>جمهوری اسلامی افغانستان</br>وزارت تحصیلات عالی افغانستان</center></b></br></br></td>
                                                          </tr>
                                                          
                                                        </table>
                                                       
                                                    </div>
	
                     	   <fieldset>  
<div class="container">
	<div class="row">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form role="form">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        
                     
                    <form  action="{{'/createPersonal/'}}" method="post" class="simple-form" enctype="multipart/form-data" files="true">
                    
                    <div class ="row">
                     	      @if(Auth::check())
							  
						
                   
                          <input id="id" name="id" required readonly type="text" style="display:none" value="{{Auth::user()->id}}" class="form-control input-md">   
						     <input id="flagTurnOff" name="flagTurnOff"   type="text" style="display:none" value="flagOff" class="form-control input-md">   
						  
						  @endif
                     	    
                     	 <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">{{__('ui-list.regNo')}}":</div></label>  
                          <div class="col-md-7">
                          <input id="reg_no" name="reg_no" required  readonly type="text" value="{{$code_value}}" class="form-control input-md">   
                          </div>
                          </div>
                    </div>
					
						<div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.registrationDate')}}:</div></label>  
                          <div class="col-md-7">
                          <input id="reg_date"  name="reg_date" required  readonly  type="text" value="{{$registration_date}}" class="form-control input-md">
                              
                          </div>
                          </div>
						</div>
						
						
						
						<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							 <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.shamsi')}}</div></label>    
							<div class="col-md-7">
							<input id="shamsi" readonly value="<?php echo $date->date("Y-m-d", false, false);?>"  type="text" name="shamsi" class="form-control input-md"/>
						</div>
						</div>
						</div>
                     	
                     	
                     	
                     	
                     	<div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.email')}}:</div></label>  
                          <div class="col-md-7">
                          <input id="PersonalEmail"  required placeholder="example@gmail.com" name="PersonalEmail"  type="email" value="{{Auth::user()->email}}" readonly class="form-control input-md">
                              
                          </div>
                          </div>
                </div>
		       
		      </div> <!--end of row-->
                     
                     
              <div class="row">
                  
              <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}"><br/>
                          <label class="col-md-12 control-label" for="order_date"><div align="left">	<h4><b>{{__('ui-list.personaldetails')}} | *  {{__('ui-list.mandatory')}}	</h4></b>                              <span></span></div></label>  
                          <div class="col-md-7">
                        
                          </div>
                          </div>


           		 </div>
                  
                  
              </div> <!--end of row-->
            
              <div class="row">      	
                     	
                     	 <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.name')}}:*</div></label>  
                          <div class="col-md-7">
                          <input id="name" name="name"  placeholder="کریم" tabindex="1"  type="text" value="{{old('name')}}" class="form-control input-md"  title ="Number is Not Allowed" maxlength="30" minlength="2" required>
                              <span></span>
                          </div>
                          </div>


           		 </div>
				 
				 
				 <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.surname')}}:*</div></label>  
                          <div class="col-md-7">
                          <input id="surname" name="surname" placeholder="بیدار" tabindex="2"   type="text" value="{{old('surname')}}" class="form-control input-md"  title ="Number is Not Allowed" maxlength="30" minlength="2" required>
                          <span></span>
                          </div>
                          </div>


           		 </div>
				 <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.fatherName')}}:*</div></label>  
                          <div class="col-md-7">
                          <input id="father_name" tabindex="3" placeholder="سمون"  name="father_name"  type="text" value="{{old('father_name')}}" class="form-control input-md"  title ="Number is Not Allowed" maxlength="30" minlength="2" required>
                          <span></span>
                          </div>
                          </div>


           		 </div>
           		 
           		 <div class="col-md-4 col-sm-6 col-xs-12">
								<!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.personalPhone')}}:*</div></label>  
                          <div class="col-md-7">
                          <input id="PersonalCellPhone" tabindex="4" placeholder="0091778178438" name="PersonalCellPhone"  type="text" pattern="[0-9]{4}[0-9]{3}[0-9]{6}"  title="Text is not allowed" value="{{old('PersonalCellPhone')}}" class="form-control input-md" required>
                              <span></span>
                          </div>
                          </div>
                </div>
				
				
				
				
				<div class="col-md-4 col-sm-6 col-xs-12">
								<!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.PAddress')}}:*</div></label>  
                          <div class="col-md-7">
                          <input id="PAddress" required tabindex="5" name="PAddress" placeholder="City, District, Street"  type="text" value="{{old('PAddress')}}" class="form-control input-md"  title="Your address should contain city and street number">
                            <span></span>
                          </div>
                          </div>
                </div>
				
				<div class="col-md-4 col-sm-6 col-xs-12">
								<!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.CAddress')}}:*</div></label>  
                          <div class="col-md-7">
                          <input id="CAddress" required tabindex="6" name="CAddress" placeholder="City, District, Street" type="text" value="{{old('CAddress')}}" class="form-control input-md"  title="Please enter city and street number">
                              <span></span>
                          </div>
                          </div>
                </div>
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.nic')}}:*</div></label>  
                          <div class="col-md-7">
                          <input id="nic" tabindex="7" required  name="nic" placeholder="10607432" type="text" value="{{old('nic')}}" class="form-control input-md"  title="Your Tazkira Number">
                              <span></span>
                          </div>
                          </div>
                </div>
				 
				
				       
				<div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.dob')}}:*</div></label>  
                          <div class="col-md-7">
                          <input id="dob" tabindex="8" required  name="dob"  type="text" placeholder="1375/08/20" pattern="^[1-4]\d{3}\/((0[1-6]\/((3[0-1])|([1-2][0-9])|(0[1-9])))|((1[0-2]|(0[7-9]))\/(30|31|([1-2][0-9])|(0[1-9]))))$"  title="The date format should be Day/Month/Year" value="{{old('dob')}}" class="form-control input-md">
                             <span></span> 
                          </div>
                          </div>
                </div>
				
				<div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.pob')}}:*</div></label>  
                          <div class="col-md-7">
                          <input id="Pbirth" tabindex="9"  placeholder="City, Country"  name="Pbirth"  type="text" value="{{old('Pbirth')}}" class="form-control input-md"  title ="Number is Not Allowed" maxlength="30" minlength="2" required>
                              <span></span>
                          </div>
                          </div>
                </div>
			
                     	
            </div> <!--end of row-->
                  	
            <div class="row">
              <hr size="1" width="80%">
            
		        <center>	<h4><b>{{__('ui-list.uploadpic')}}: ({{__('ui-list.filesize')}})*</h4></b><br/>
                    عکس باید رسمی باشد با بگروند سفید
			
            <hr size="1" width="80%">
              
              <div class="x_content" class="col-md-4 col-sm-6 col-xs-12">
              
                        <!-- Text input-->
                         <div class="form-group {{$errors->has('image')?'has_error':''}}">
                         
                         <div class="col-md-7">
                             <img id="imgDisplayarea"  width="300px" height="200px"/>  
                             <input accept="image/png, image/jpeg, image/jpeg" onchange="document.getElementById('imgDisplayarea').src=window.URL.createObjectURL(this.files[0])" id="image" tabindex="10"  name="image" required type="file" value="{{old('imgDisplayarea')}}"/>
						</div>           
                        
                        </div>

                          
              </div>
			  .</center>
       
    
                
            </div>	<!--end of row-->
                     	
                        
                       
                       
                       
                        <ul class="list-inline pull-left">
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        
                        
                        	<div class="row">
                        
                        
                        
                         <div class="col-md-4 col-sm-6 col-xs-12">
				   <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
				    <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.issueingCountry')}}*</div></label>  
					 <div class="col-md-7">
					 <select name="issueingCountry"  tabindex="27"  required class="form-control product" >
                          <option value="" >{{__('ui-list.selectCountry')}}"</option>
                          @foreach($medical_degrees as $nationality)
                          <option value="{{$nationality->degree}}" >{{$nationality->degree}}</option>
                          @endforeach()
                        </select>
					</div>
				 </div>
				 </div>
				 
				 
				 	 <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.diplomaNumber')}}</div></label>  
                          <div class="col-md-7">
                          <input id="DiplomaNumber"  name="DiplomaNumber" placeholder="654545" tabindex="12"  type="text" value="{{old('DiplomaNumber')}}" class="form-control input-md"  title="Please enter your diploma number">
                            <span></span>
                          </div>
                          </div>
                 </div>
				
				 <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.transcriptNumber')}}</div></label>  
                          <div class="col-md-7">
                          <input id="TranscriptNumber"  name="TranscriptNumber" placeholder="54544" tabindex="13"  type="text" value="{{old('TranscriptNumber')}}" class="form-control input-md"  title="Please enter your transcript number">
                              <span></span>
                          </div>
                          </div>
                 </div>
				 
				 <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.thesistitle')}}:</div></label>  
                          <div class="col-md-7">
                          <input id="thesistitle"  name="thesistitle"  value="{{old('thesistitle')}}" tabindex="14" type="text" placeholder="Developing 2D Architecture" class="form-control input-md"  title="Your thesis Title">
                              <span></span>
                          </div>
                          </div>
				</div>
				
               
           	
	
				 
				 
                        
                        
                        </div>	<!--end of row-->
                        
                        
                        	<div class="row">
                        
                        	<div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.typeofEducation')}}*</div></label>  
                          <div class="col-md-7">
                          <select id="typeEducation" tabindex="15" required name="typeEducation" class="form-control" >
                                  <option value="{{old('typeEducation')}}">{{__('ui-list.selectType')}}"</option>
                                  
                                  <option value="1">Regular</option>
								  <option value="2">Distance</option>
                                  <option value="3">Semi-Distance</option>
                          </select>
                              
                          </div>
                          </div>


           		 </div>
				 
				 <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.typeofscholarship')}}:*</div></label>  
                          <div class="col-md-7">
                          <select id="typeScholarship" tabindex="16" required name="typeScholarship" class="form-control" >
                                  <option value="{{old('typeScholarship')}}">{{__('ui-list.selectType')}}"</option>
                                  
                                  <option value="1">Government Scholarship</option>
                                  <option value="2">Private</option>
                          </select>
                              
                          </div>
                          </div>


           		 </div>
				 
				 <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.EducationalDocument')}}*</div></label>  
                          <div class="col-md-7">
                          <select required id="EDocument" tabindex="17"  name="EDocument" class="form-control" >
                                  <option value="{{old('EDocument')}}">{{__('ui-list.selectType')}}"</option>
                                  
                                  <option value="1">Original Document</option>
								  <option value="2">Temporary Certificate</option>
                                
                          </select>
                              
                          </div>
                          </div>


           		 </div>
                        
                        
                             </div>	<!--end of row-->
                          
                     
                        
                        
                        	<div class="row">
                        
                        	<div class="col-md-4 col-sm-6 col-xs-12">
								<!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.Grade')}}</div></label>  
                          <div class="col-md-7">
                          <input id="Grade"  tabindex="18" placeholder="A" name="Grade"  type="text" value="{{old('Grade')}}" class="form-control input-md"  title="Your Grade">
                              <span></span>
                          </div>
                          </div>
                </div>
             
				

				 <div class="col-md-4 col-sm-6 col-xs-12">
								<!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.rollNum')}}</div></label>  
                          <div class="col-md-7">
                          <input id="RollNum" tabindex="20" name="RollNum" placeholder="05" type="text" value="{{old('RollNum')}}" class="form-control input-md"  title="Your Roll Number">
                              <span></span>
                          </div>
                          </div>
                </div>
                        
                        
                            </div>	<!--end of row-->
                            
                            
                            	<div class="row">
				
				 <div class="col-md-4 col-sm-6 col-xs-12">
								<!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.studyDuration')}}*(Years)</div></label>  
                          <div class="col-md-7">
                          <input id="StudyDuration" tabindex="21" placeholder="4" name="StudyDuration"  type="number" value="{{old('StudyDuration')}}" class="form-control input-md" required>
                              
                          </div>
                          </div>
                </div>
				
				
				
				<div class="col-md-4 col-sm-6 col-xs-12">
								<!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.fieldofEducation')}}*</div></label>  
                          <div class="col-md-7">
                          <input id="FEducation" tabindex="22" name="FEducation" placeholder="Computer Science" type="text" value="{{old('FEducation')}}" class="form-control input-md"  title ="Number is Not Allowed" maxlength="30" minlength="2" >
                                    <span></span>
                          
                          </div>
                          </div>
                </div>
				
				
		
				<div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">T/O/C-{{__('ui-list.GPA')}}</div></label>  
                          <div class="col-md-7">
                          <input id="GPA" tabindex="23" name="GPA" placeholder="3.5" type="number" step="any" value="{{old('GPA')}}" class="form-control input-md">
                          <center> <b>Out of</b></center>
                          <select id=" tabindex="15"  name=" class="form-control" >
                                  <option value="{{old('email_search')}}">{{__('ui-list.selectGPA')}}"</option>
                                  <option value="1">1</option>
								  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="1">4</option>
								  <option value="2">5</option>
                                  <option value="3">6</option>
                                  <option value="1">7</option>
								  <option value="2">8</option>
                                  <option value="3">9</option>
                                  <option value="1">10</option>
                          </select>
                          <br/>
                          </div>
                          </div>
                </div>
				
</div>
<div class="row">	 
				 
				
				<div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.AYear')}}*</div></label>  
                          <div class="col-md-7">
                          <input id="AYear" tabindex="25" required  name="AYear" placeholder="2009" type="number" value="{{old('AYear')}}" class="form-control input-md">
                              
                          </div>
                          </div>
                </div>
				<div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.GYear')}}*</div></label>  
                          <div class="col-md-7">
                          <input id="GYear" tabindex="26" required  name="GYear" placeholder="2012" type="number" value="{{old('GYear')}}" class="form-control input-md">
                              
                          </div>
                          </div>
                </div>
</div>
<br/><br/>

<div class="row">
				
           		 <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">{{__('ui-list.details1')}}</div></label>  
                          <div class="col-md-7">
                          <textarea id="details" tabindex="27"  name="details" placeholder="{{__('ui-list.details3')}}" type="text" cols="40" rows="5">{{Request::old('body')}}</textarea>
                          </div>
                          </div>
                </div>

               
</div>	
		
                            
                            
                            
                        
                        <ul class="list-inline pull-left">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        
                        
                        
                                 	<div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
              <div class="x_title">
				
			<h4><b>{{__('ui-list.educationdetails')}}</h4></b>
              </div>
              <div class="x_content">
              <div class="table-responsive">
            <table class="table  table-bordered table-condensed table-hover table-striped">
              <thead>
                <tr style="background:lavender;">
                  
      
                  <th><font size="2px"><center>{{__('ui-list.degree')}}*</center></font><span></span></th>
                      
                  <th><font size="2px"><center>{{__('ui-list.FromDate')}}*</center></font></th>
                   <th ><font size="2px"><center>{{__('ui-list.ToDate')}}*</center></font></th>  
                   <th ><font size="2px"><center>{{__('ui-list.universityName')}}*</center></font></th>   
                 <th ><font size="2px"><center>{{__('ui-list.email')}}*</center></font></th> 
                  
                  <th ><font size="2px"><center>{{__('ui-list.universityphone')}}*</center></font></th>
                  <th ><font size="2px">{{__('ui-list.attach')}}*</font></th>
                

                </tr>
              </thead>
              <tbody>


                

      <tr class="table_rows" >

                     
                        
                     
                 
						<!--  <select required name="degree"  tabindex="28"   class="form-control product" >
                          <option value="{{old('email_search')}}" >{{__('ui-list.selectdegree')}}</option>
                          @foreach($medical_degrees as $medical_degree)
                          <option value="{{$medical_degree->degree}}" >{{$medical_degree->degree}}</option>
                          @endforeach()-->
						  
					
					
						<td width="15%">
						    
						    <!--<input type="text" tabindex="33" required readonly  id ="degree" name="degree" value="Bachelor" class="form-control input-md" />  -->
						    
						     <select required name="degree"    class="form-control product" >
                                <option value="Bachelor" >Bachelor</option>
                                 <option value="Master" >Master</option>
                                  <option value="PHD" >PHD</option>
                        
                         
                             </select>
						    
						    <span></span></td>
                            

                       
                
					  
					  
					  

						<div class="form-group{{ $errors->has('from_date') ? ' has-error' : '' }}">
                        <td><input type="text" name="from_date" tabindex = "29" required placeholder="1375/08/28" value="{{old('from_date')}}" name="from_date" pattern="^[1-4]\d{3}\/((0[1-6]\/((3[0-1])|([1-2][0-9])|(0[1-9])))|((1[0-2]|(0[7-9]))\/(30|31|([1-2][0-9])|(0[1-9]))))$"  title="The date format should be Day/Month/Year" class=" form-control"/> <span></span> 
						<br/><small class="text-danger">{{ $errors->first('from_date') }}</small>
						</td>
						
						</div>
						
						<div class="form-group{{ $errors->has('to_date') ? ' has-error' : '' }}">
						<td><input type="text" name="to_date" tabindex = "30" required placeholder="1379/08/28" name="to_date" value="{{old('to_date')}}"  pattern="^[1-4]\d{3}\/((0[1-6]\/((3[0-1])|([1-2][0-9])|(0[1-9])))|((1[0-2]|(0[7-9]))\/(30|31|([1-2][0-9])|(0[1-9]))))$" title="The date format should be Day/Month/Year" class="form-control"/>
					<br/><small class="text-danger">{{ $errors->first('to_date') }} </small>
						
						</td>
						
						</div>
                      
					  <td >
                      <select required name="university" tabindex="31"   class="form-control product" >
                          <option value="{{old('university')}}" >{{__('ui-list.selectuniversity')}}"</option>
                          @foreach($universities as $university)
                          <option value="{{$university->name}}" >{{$university->name}}</option>
                          @endforeach()
                         
                      </select>
                      
                      </td>
                     
                      <td width="12%"><input type="email" tabindex="32" placeholder="info@mit.com" value="{{old('PersonalEmail2')}}" id="PersonalEmail2" required class="form-control quantity" name="PersonalEmail2"/> 
					  <input type="email" tabindex="32" placeholder="info@mit.com" value="{{old('PersonalEmail2')}}" class="form-control quantity"/> 
                    
					  
					  </td>
                     
					 <td width="15%">
					 <input type="text" tabindex="33" required  name="PersonalPhon2" placeholder="009102025691162" id="PersonalPhon2"  value="{{old('PersonalPhon2')}}" class="form-control input-md" />   
					  <input type="text" tabindex="33"     placeholder="009102025691162"   class="form-control input-md" />   
					 
					 
					 </td>
                   
                       <td><input type="file" tabindex="34" required class="form-control quantity" name="file_name" value="{{old('file_name')}}" accept="application/pdf" /><span></span> </td>
					
                     

                    </tr>



                

<!-- The Modal -->
<div id="myModal" class="modal" >

  <!-- Modal content -->
  <div class="modal-content" align="right" dir = "rtl">
    <span class="close">&times;</span>
<center>
<center><h4>{{__('ui-list.instructions1')}}<br/>
{{__('ui-list.instructions2')}}"<br/> {{__('ui-list.instructions3')}}" </h4>
<br/><h1>در این بخش تمام اسناد های ضروری مرتبط به تحصیل در خارج از کشور مطابق به چک لیست اپلود میگردد، اسناد خواسته شده را به ترتیب و با فارمت خواسته شده به سیستم داخل نمایید که سایز مجموعی آن از پنج ام بی (5 Mb) بیشتر نباشد.</h1><br/>

 
 <h4> <b>یاد آوری : بعد از اتمام ثبت نام در سیستم یک مسج جهت آگاهی شما می آید که ضمن ذکر ثبت نام موفق شما در سیستم یک زمان مشخص میگردد که در تاریخ و ساعت ذکر رفته اصل اسناد تحصیلی خود را تسلیم این ریاست نموده به عوض آن تعرفه حاصل نماید <br/>
<h4><b>برای لیسانس </b></h4>
</b></h4>
	    1-	شهادتنامه صنف دوازدهم (از هر دو طرف ) ... دکمه upload <br/>
	
2-	دیپلوم لیسانس  (از هر دو طرف ) ... دکمه upload	<br/>
3-	ترانسکریپت نمرات ... دکمه upload	<br/>
4-	کاپی تذکره... دکمه upload		<br/>
5-	کاپی پاسپورت از صفحه اول و ویزای آن... دکمه upload	<br/>
6-	کاپی کارت پوهنتون یا مهاجر کارت در صورت امکان ... دکمه upload	<br/>




</td>


<h4><b>برای ماستری </b></h4>
	    •	دیپلوم لیسانس  (از هر دو طرف ) ... دکمه upload <br/>
	
•	ترانسکریپت نمرات ... دکمه upload	<br/>
•	دیپلوم دوره ماستری ... دکمه upload	<br/>
•	ترانسکریپت نمرات دوره ماستری ... دکمه upload	<br/>
•	کاپی تذکره... دکمه upload	<br/>
•	کاپی پاسپورت از صفحه اول و ویزای آن... دکمه upload	<br/>
•	کاپی کارت پوهنتون یا مهاجر کارت در صورت امکان ... دکمه upload	<br/>

<h4><b>برای دوکتورا </b></h4>
	   •	دیپلوم دوره ماستری ... دکمه upload <br/>
	
•	ترانسکریپت نمرات دوره ماستری ... دکمه upload	<br/>
•	دیپلوم و یا سرتیفیکت دوره دوکتورا... دکمه upload	<br/>
•	ترانسکریپت نمرات دوره دوکتورا در صورت که موجود باشد... دکمه upload	<br/>
•	کاپی تذکره... دکمه upload	<br/>
•	کاپی پاسپورت از صفحه اول و ویزای آن... دکمه upload	<br/>
•	کاپی کارت پوهنتون یا مهاجر کارت در صورت امکان ... دکمه upload	<br/>


	
</center>


	</div>

</div>

                 <h4>  {{__('ui-list.forfileupload')}}  <a   id="myBtn" class="btn btn-danger"><span>{{__('ui-list.seeinstructions')}}</span></a></h4> </td>
					
					
              
                
              </tbody>
            </table>

              </div>
     
    
               
           
            
            


              </div>
			  
			 


       
      </div>
			  
          </div>
      
      
      </div>

                        
                        
                        
                        
                        
                        <ul class="list-inline pull-left">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete" align="center">
                       <div class="row">
				
           		 <div class="row">	 
				 
				 <center><h2><b>Completed Successfully, Please submit the Data</b></h2></center><br/><br/>
				
				<div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">Completed</div></label>  
                          <div class="col-md-7">
                          <input id="" tabindex="20"   name="" disabled readonly placeholder="" type="number" value="" class="form-control input-md">
                              
                          </div>
                          </div>
                </div>
				<div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">Completed</div></label>  
                          <div class="col-md-7">
                          <input id="" tabindex="20" disabled readonly name="" placeholder="" type="number" value="" class="form-control input-md">
                              
                          </div>
                          </div>
                </div>
                	<div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">Completed</div></label>  
                          <div class="col-md-6">
                          <input id="" tabindex="20" disabled  name="" readonly placeholder="" type="number" value="" class="form-control input-md">
                              
                          </div>
                          </div>
                </div>
                	<div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">Completed</div></label>  
                          <div class="col-md-7">
                          <input id="" tabindex="20" disabled  name="" readonly placeholder="" type="number" value="" class="form-control input-md">
                              
                          </div>
                          </div>
                </div>
                	<div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date"><div align="left">Completed</div></label>  
                          <div class="col-md-7">
                          <input id="" tabindex="20" disabled  name="" readonly placeholder="" type="number" value="" class="form-control input-md">
                              
                          </div>
                          </div>
                </div>
</div>
               
</div>	
		
                 <br/><br/>
                 <input type="submit" tabindex="20" class="submit" value="{{__('ui-list.submit')}}" >
                 

                         <ul class="list-inline pull-center">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                        </ul>
                          
                    </div>
                        
                       
                    <div class="clearfix"></div>
                </div>
                </fieldset>
                     	</form>
            </form>
            
        </div>
    </section>
   </div>
</div>



	
                     	 
                       

@stop

@section('scripts')



   
	<script type="text/javascript">
	


	
	
	
	
	 function showimagepreview(input) 
    {
      if (input.files && input.files[0]) 
      {
        var filerdr = new FileReader();
        filerdr.onload = function(e) {
            $('#imgDisplayarea').attr('src', e.target.result);
        };
        filerdr.readAsDataURL(input.files[0]);
      }
    }


	
	
	
	</script>
	
	
   
   <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
	
  <script>$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}</script>

@endsection()

