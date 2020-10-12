<?php 

require_once 'C:\xampp\htdocs\RheinlandStudie\public\jDateTime-master/jdatetime.class.php';//Init
$date = new jDateTime(true, true, 'Asia/Tehran');

?>
@extends('layouts.app')
@section('custom_css_links')
<style>

.button1 {
    background-color: #73879C; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.button1 {
    display: block;
}


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



import url(https://fonts.googleapis.com/css?family=Raleway:100,600,400);


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





</style>
	

@endsection()
@section('page-content')

<div class="text-center">
                  <form class=" action="{{url('/locale')}}" id="locale_form" method="post">
                      {{csrf_field()}}

<center>              

</center>
                </form>
</div> 

	<div class="row" style="margin-top:50px;" width="300px">
    <div class="col-md-1 col-sm-13 col-xs-15">
    </div>
		<div class="col-md-10 col-sm-12 col-xs-12">
			<div class="x_panel" style="min-height: 700px">
			
				 <div class="x_title text-center" style="padding:5px">
         <img src="{{url('/images/logo.png')}}" style="width:100px;height:100px;border-radius:50%"></img>   <table border="2px solid" width="100%" style="margin-top: 5px;">
                                                          <tr>
                                                         <td><b>    <center>د لوړو زده کړو وزارت<br/>د افغانستان اسلامی حمهوریت</center></br></b></br></br></td>
                                                           <center> <td><b>   <center>ISLAMIC REPUBLIC OF AFGHANISTAN </br>Ministry of Higher Education</center></b></br></br></td>
                                                           <center> <td><b>   <center>جمهوری اسلامی افغانستان</br>وزارت تحصیلات عالی افغانستان</center></b></br></br></td>
                                                          </tr>
                                                          
                                                        </table>
                                                       
                                                    </div>
				<div class="x_content">

		<form  action="{{'/createPersonal/'}}" method="post" class="simple-form" enctype="multipart/form-data" files="true">

			<div class="panel-body">
				
				{{ csrf_field() }}

	    <fieldset>

				<!-- Text input-->
			
			<div class="row">
				 

                <div class="col-md-4 col-sm-6 col-xs-12 col-sm-12 col-xs-12" style="float:right">
                            <!-- Text input-->
                           
                         <div class="col-md-12" style="background-color: lightgray">
                          	
                          	<h4 style="text-align: center"><b>فورم برای تاییدی</b></h4>
                              
                          </div>

                          
                </div>
				 <div class="col-md-4 col-sm-6 col-xs-12 col-sm-12 col-xs-12" style="float:right">
                            <!-- Text input-->
                         

                           <a href="/home" class="btn btn-danger">{{__('ui.back')}}</a>
                              
                  

                           
                </div>                   	                         

               

			</div>
			

			<div class="row">
			
			<div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
              <div class="x_title">
				<h4><b>{{__('ui-list.systemdetails')}}</b></h4>
          
              </div>
              <div class="x_content">
              <div class="table-responsive">
         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          
                          <div class="col-md-7">
						  @if(Auth::check())
							  
						
                   
                          <input id="id" name="id" required readonly type="text" style="display:none" value="{{Auth::user()->id}}" class="form-control input-md">   
						     <input id="flagTurnOff" name="flagTurnOff"   type="text" style="display:none" value="flagOff" class="form-control input-md">   
						  
						  @endif
						  
                          </div>
                          </div>
						  
                  
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
				
                
				 

              

                     
            </div>
              </div>
     
    
               
           
            
            


              </div>
			  
			 


       
      </div>
			  
          </div>
		  
		  
		  
		  
		  
				
                         
            <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
              <div class="x_title">
			<h4><b>{{__('ui-list.personaldetails')}} | *  {{__('ui-list.mandatory')}}	</h4></b>
          
              </div>
              <div class="x_content">
              <div class="table-responsive">
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
			

			</div>
     

              </div>
			  
			 <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
              <div class="x_title">
				<h4><b>{{__('ui-list.uploadpic')}}: ({{__('ui-list.filesize')}})*</h4></b><br/>
                    <h4 dir="rtl">عکس باید رسمی باشد با بگروند سفید.</h4>
              </div>
              
              <div class="x_content" class="col-md-4 col-sm-6 col-xs-12">
              
                        <!-- Text input-->
                         <div class="form-group {{$errors->has('image')?'has_error':''}}">
                         
                         <div class="col-md-7">
                             <img id="imgDisplayarea"  width="300px" height="200px"/>  
                             <input accept="image/png, image/jpeg, image/jpeg" onchange="document.getElementById('imgDisplayarea').src=window.URL.createObjectURL(this.files[0])" id="image" tabindex="10"  name="image" required type="file" value="{{old('imgDisplayarea')}}"/>
						</div>           
                        
                        </div>

                          
              </div>
			  
			 


       
      </div>
			  
          </div>


       
      </div>
			  
          </div>

              </div>
     
   
              </div>

       
      </div>
			  
          </div>
				
				<!-- Text input-->
				

			<div class=" text-right" style="margin-right: 8px;">
			
			<div class="form-group">
			
      
   
         <input type="submit" tabindex="20" class="submit" value="{{__('ui-list.submit')}}" >  
      
       <a href="/home" class="btn btn-danger">{{__('ui.back')}}"</a>
       
  
      
    
	        </div>

			</div>


		</form>
					
				</div>

			</div>

		</div>
    <div class="col-md-1 col-sm-12 col-xs-12">
    </div>

	</div>



@stop

@section('scripts')

   <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
   
   
   <script>
       
  $(document).ready(function() {
  $(".submit").click(function() {
    $(".submit").addClass("loading");
    setTimeout(function() {
      $(".submit").addClass("hide-loading");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 9000);
    setTimeout(function() {
      $(".submit").removeClass("loading");
      $(".submit").removeClass("hide-loading");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 9000);
  })
});
       
       
       
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
   
   
   
   
   <script>
   
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
   
   
   <script>
   $('.selectParent select').on('change', function () {
     var $this = $(this),
     	value = $this.val();

     	if (value == 'Afghan') {
			$('#nic').removeAttr('disabled');
			$('#jild').removeAttr('disabled');
			$('#page').removeAttr('disabled');
			$('#ShumaraSabt').removeAttr('disabled');
     		$('#nic').fadeIn(350);
			$('#jild').fadeIn(350);
			$('#page').fadeIn(350);
			$('#ShumaraSabt').fadeIn(350);
			
			$('#passport_no').attr('disabled','disabled');
			$('#visa_issue_date').attr('disabled','disabled');
			$('#visa_exp_date').attr('disabled','disabled');
			$('#issue_place').attr('disabled','disabled');
			$('#issue_date').attr('disabled','disabled');

     	} else {
			$('#nic').attr('disabled','disabled');
			$('#jild').attr('disabled','disabled');
			$('#page').attr('disabled','disabled');
			$('#ShumaraSabt').attr('disabled','disabled');
			$('#passport_no').removeAttr('disabled');
			$('#visa_issue_date').removeAttr('disabled');
			$('#visa_exp_date').removeAttr('disabled');
			$('#issue_place').removeAttr('disabled');
			$('#issue_date').removeAttr('disabled');
     	}
		
		
 });
   </script>
   
   
   
	<script type="text/javascript">
	
	jQuery( document ).ready(function( $ ) {

   //Use this inside your document ready jQuery 
   $(window).on('popstate', function() {
      location.reload(true);
   });

});


	
	
	
	
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

// $(document).ready(function(){


//       $("#imgload").change(function(){

//         if(this.files&&this.files[0]){
//           var reader = new fileReader();
//           reader.onload = function(e){
//             $("#imgshow").attr("src"),e.target.result);

//           }
//           reader.readAsDataURL(this.files[0]);
//         });
//       }); 
//   });

	
	  // $(document).ready(function(){


   //    $('#imgload').change(function(){

   //      if(this.files&&this.files[0]){
   //        var reader = new fileReader();
   //        reader.onload = function(e){
   //          $('#imgshow').attr('src'),e.target.result);

   //        }
   //        reader.readAsDataURL(this.files[0]);
   //      });
   //    }); 


		 
		 //  var product_category=$('#product_category');
		 //  product_category.on('change',function(event){
         
		 //  var selectedElementIndex=$("#product_category option:selected").index();
		 // if(selectedElementIndex==0){
			//  $('#product_classification').hide();
			 
		 // }else{
			//      product_category_id=$(this).val();
			//      $.ajax({
			// 		 method:'get',
			// 		 url:'/show_selected_product_category_class/'+product_category_id,
			// 		 success:function(data){
			// 			 var product_classification= $('#product_classification');
						 
			// 			 product_classification.val(data.substr(1,data.length-2));
			// 			 product_classification.show();
			// 		 },
			// 		 error:function(){
			// 			 alert("Something went wrong");
			// 		 }
			// 	 })
			 	
		 // }
		  
		  
		 //   });


		 //   var brand=$('#brand_id');
		 //   var model=$('#model_id');
		 //   brand.on('change',function(){
			//    var brandValue=$('#brand_id').val();
			  
			//    if(!brandValue){
			// 	   model.prop('disabled','disabled');
				  
			// 	   return;
			//    }else{
			// 	   model.prop('disabled','');
			// 	   $.ajax({
			// 		method:'get',
			// 		url:'admin/brand/models/'+brandValue,
			// 		success:function(data){
			// 			var resultObj=JSON.parse(data);
			// 			var model_names=resultObj.model_names;
			// 			var model_ids=resultObj.model_ids;
						
					
			// 			model.empty();
			// 			model.append('<option></option>');
			// 			for(i=0;i<model_names.length;i++){
			// 				model.append('<option value='+model_ids[i]+'>'+model_names[i]+'</option>');
			// 			}

			// 		}
			// 	   });
			//    }
		 //   });
	  // });
	
	
	
	
	
	
	</script>
	
	
	<script>
	$(document).ready(function() {
    $("body").prepend('<div id="overlay" class="ui-widget-overlay" style="z-index: 1001; display: none;"></div>');
    $("body").prepend("<div id='PleaseWait' style='display: none;'><img src="'{{ URL::to('"/images/logo.png"') }}'"></div>");
});

$('#gds_form').submit(function() {
    var pass = true;
    //some validations

    if(pass == false){
        return false;
    }
    $("#overlay, #PleaseWait").show();

    return true;
});
	
	</script>

@endsection()

