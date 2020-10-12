@extends('admin-layout.app',['title'=>'Create Location'])
@section('custom_css_links')

	<style>
	   @if(App::getLocale()=='fa')
			 label{
				 text-align:left !important;
			 }
	   @endif()
	</style>

@endsection()
@section('page-content')


 @if(Auth::user()->lastName == "CommissionDirector")
 



 <div class="row">
 			<div class="col-md-2 col-sm-12 col-xs-12">
 			</div>
				<div class="col-md-9 col-sm-12 col-xs-13">
					<div class="x_panel">
						<div class="x_title">
							<h2 style="padding-bottom:5px">مشخصات شخصی</h2>
							<div class="col-md-4 pull-right">

									
											
							</div>
							<div class="clearfix"></div>
						</div>
					<div class="x_content">
							<br />
					
				
						



	<!-- Text input-->
								
							
									        
									        
	    	<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نام</div></label>  
                          <div class="col-md-7">
                          <input id="name" name="name" required  readonly type="text" value="{{$doctor->name}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">ولد</div></label>  
                          <div class="col-md-7">
                          <input id="nil" name="nil" required  readonly type="text" value="{{$doctor->father_name}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">تخلص</div></label>  
                          <div class="col-md-7">
                          <input id="nil" name="nil" required  readonly type="text" value="{{$doctor->surname}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
							  
					<br/>
					
				    	<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">سویه تحصیلی:</div></label>  
                          <div class="col-md-7">
                          <input id="nil" name="nil" required  readonly type="text" value="{{$doctor->EducationLevel}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">پروتوکول: </div></label>  
                          <div class="col-md-7">
                          <input id="nil" name="nil" required  readonly type="text" value="{{$doctor->Protocol}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نمبر تذکره:</div></label>  
                          <div class="col-md-7">
                          <input id="nil" name="nil" required  readonly type="text" value="{{$doctor->nic}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       <br/>
                       
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نمبر پاسپورت:</div></label>  
                          <div class="col-md-7">
                          <input id="nil" name="nil" required  readonly type="text" value="{{$doctor->nic}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">سال شروع :</div></label>  
                          <div class="col-md-7">
                          <input id="nil" name="nil" required  readonly type="text" value="{{$doctor->AYear}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">سال ختم :</div></label>  
                          <div class="col-md-7">
                          <input id="nil" name="nil" required  readonly type="text" value="{{$doctor->GYear}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">ایمیل ادرس:</div></label>  
                          <div class="col-md-7">
                          <input id="nil" name="nil" required  readonly type="text" value="{{$doctor->PersonalEmail}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       
                  
       
             
									
						  
					
						
               
			
			
					</div>
				</div>
				
				<div class="x_content">
							<br />
					
				
						



	<!-- Text input-->
								
							
									        
									        
	    	<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نمبر تماس:</div></label>  
                          <div class="col-md-7">
                          <input id="nil" name="nil" required  readonly type="text" value="{{$doctor->PersonalCellPhone}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">	نوع سند:</div></label>  
                          <div class="col-md-7">
                          
                           @if($doctor->EDocument == 1)
                                <input id="nil" name="nil" required  readonly type="text" value="Diploma" class="form-control input-md">   
								  @elseif($doctor->EDocument == 2)
								  <input id="nil" name="nil" required  readonly type="text" value="Certificate" class="form-control input-md">   
                                
								  
								  @endif()    
                              
                         
                          
                          
                          
                          
                          
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">مدت تحصیل:</div></label>  
                          <div class="col-md-7">
                          <input id="nil" name="nil" required  readonly type="text" value="{{$doctor->StudyDuration}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
							  
					<br/>
					
					<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نوعیت تحصیل:</div></label>  
                          <div class="col-md-7">
                                 @if($doctor->typeEducation== 1)
                                    <input id="nil" name="nil" required  readonly type="text" value="حضوری " class="form-control input-md">   
								  @elseif($doctor->typeEducation == 2)
								   <input id="nil" name="nil" required  readonly type="text" value="یمه حضوری" class="form-control input-md">   
                                  @elseif($doctor->typeEducation == 3)
								  <input id="nil" name="nil" required  readonly type="text" value="غیر حضوری " class="form-control input-md">   
								  
								  @endif()
                         
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نوع بورس:  </div></label>  
                          <div class="col-md-7">
                              
                               @if($doctor->typeScholarship == 1)
                                   <input id="nil" name="nil" required  readonly type="text" value="{{__('ui-list.Government')}}" class="form-control input-md">   
								  @elseif($doctor->typeScholarship == 2)
								    <input id="nil" name="nil" required  readonly type="text" value="{{__('ui-list.Private')}}" class="form-control input-md">   
								    
								  @endif()
                        
                          </div>
                          </div>
                       </div>
                      
       
                  	
				
                 
                            
									
						  
					
						
               
			
			
					</div>
		
					<div class="row">
 			<div class="col-md-10 col-sm-15 col-xs-14">
 			</div>
				<div class="col-md-12 col-sm-15 col-xs-14">
					<div class="x_panel">
						<div class="x_title">
							<h2 style="padding-bottom:5px"><b>اعضای کمیسون</b></h2>
							<div class="col-md-4 pull-right">

									
											
							</div>
							<div class="clearfix"></div>
						</div>
					<div class="x_content">
							<br />
					
              
                            
					  <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نمبر دیپلوم:      </div></label>  
                          <div class="col-md-7">
                          <input id="DiplomaNumber" name="DiplomaNumber" disabled   type="text" value="{{$attestationcomments_register->DiplomaNumber}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left"> پوهنتون:</div></label>  
                          <div class="col-md-7">
                          <input id="University" name="University" disabled   type="text" value="{{$attestationcomments_register->University}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>


                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">رشته تحصیلی:</div></label>  
                          <div class="col-md-7">
                          <input id="EducationField" name="EducationField"  disabled  type="text" value="{{$attestationcomments_register->EducationField}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       
                       <br/>
                       
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left"> پروتوکول:</div></label>  
                          <div class="col-md-7">
                          <input id="Protocol" name="Protocol"  disabled  type="text" value="{{$attestationcomments_register->Protocol}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نوعیت تحصیل: </div></label>  
                          <div class="col-md-7">
                          @if($attestationcomments_register->EducationLevel == 1)

                               <input id="EducationLevel" name="EducationLevel"  disabled  type="text" value="حضوری" class="form-control input-md">  
                               @elseif($attestationcomments_register->EducationLevel == 2)

                               <input id="EducationLevel" name="EducationLevel"  disabled  type="text" value="نیمه حضوری" class="form-control input-md">  
                               @else
                               <input id="EducationLevel" name="EducationLevel"  disabled  type="text" value="غیر حضوری" class="form-control input-md">  
                               @endif

                              
                          </div>
                          </div>
                       </div>
                       
                    
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left"> تیزس  : </div></label>  
                          <div class="col-md-7">
                              
                          @if($attestationcomments_register->Thesis == 1)

<input id="Thesis" name="Thesis" disabled   type="text" value="با تیزس" class="form-control input-md">  
@elseif($attestationcomments_register->Thesis == 2)
<input id="Thesis" name="Thesis" disabled   type="text" value="بدون تیزس" class="form-control input-md">  

@else
<input id="Thesis" name="Thesis" disabled   type="text" value="پروژه تحقیقی" class="form-control input-md">  

@endif
                      
                          </div>
                          </div>
                       </div>
                       
                       
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نوعیت تایید : </div></label>  
                          <div class="col-md-7">
                              
                                

                          @if($attestationcomments_register->AttestationType == 1)
                           <input id="AttestationType" name="AttestationType" disabled   type="text" value="تایید موقت " class="form-control input-md">  

                           @elseif($attestationcomments_register->AttestationType == 2)
                           <input id="AttestationType" name="AttestationType" disabled   type="text" value="تایید دایم" class="form-control input-md">  

                           @endif
                            
                              
                         
                          </div>
                          </div>
                       </div>
                       
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">نوع اسناد </div></label>  
                          <div class="col-md-7">
                          @if($attestationcomments_register->DocType == 1)
                                <input id="DocType" name="DocType"  disabled  type="text" value="دیپلوم" class="form-control input-md">  
                           @else
                           <input id="DocType" name="DocType"  disabled  type="text" value="سرتیفیکیت" class="form-control input-md">  
                           @endif
                            
                          </div>
                          </div>
                       </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">کمنت      </div></label>  
                          <div class="col-md-7">
                          <input id="nondocument" name="nondocument"  disabled tabindex="27"  type="textarea" value="{{$attestationcomments_register->nondocument}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       
                    
                     
                      
                          <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">     </div></label>  
                          <div class="col-md-7">
                          <input id="nil" name="nil" required disabled  readonly  type="text"  value="{{ $doctor->nil }}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                     
                     
                     
                     
                     
                    

                  
					    
					    
					    
					    
			

								</div>

			
			<div class="row">
 			<div class="col-md-10 col-sm-15 col-xs-14">
 			</div>
				<div class="col-md-12 col-sm-15 col-xs-14">
					<div class="x_panel">
						<div class="x_title">
							<h2 style="padding-bottom:5px"><b>بخش تخنیکی</b></h2>
							<div class="col-md-4 pull-right">

									
											
							</div>
							<div class="clearfix"></div>
						</div>
					<div class="x_content">
							<br />
					



                  @unless (empty($technicalcomments_register->adminapproval) ) 

                  <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">صفحه      </div></label>  
                          <div class="col-md-7">
                          <input id="page" name="page"    type="text" value="{{$technicalcomments_register->page}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left"> جلد:</div></label>  
                          <div class="col-md-7">
                          <input id="jild" name="jild"    type="text" value="{{$technicalcomments_register->jild}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>

                 
                       
                       <br/>
                       
                     
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">سویه تحصیلی  </div></label>  
                          <div class="col-md-7">
                              <input id="EducationType" name="EducationType"    type="text" value="{{$technicalcomments_register->EducationType}}" class="form-control input-md">   
                          
                          </div>
                          </div>
                       </div>
                       
                        
                       
                       
                       
                       
                       
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">کمنت      </div></label>  
                          <div class="col-md-7">
                          <input id="nondocument" name="nondocument"   tabindex="27"   type="textarea" value="{{$technicalcomments_register->nondocument}}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                       
                    

                      
                          <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">     </div></label>  
                          <div class="col-md-7">
                          <input id="nil" name="nil" required  readonly  type="text"  value="{{ $doctor->reg_no }}" class="form-control input-md">   
                          </div>
                          </div>
					   </div>
					   
					


                       <!--   temporary -->


                       @unless ( empty($technicalcomments_register->Temporary) )
                    @if($technicalcomments_register->Temporary == "on" )
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  موقت  </div></label>  
                          <div class="col-md-7">
                         	<input id="Temporary" name="Temporary" disabled  type="checkbox" checked class="form-control input-md" />  
                          </div>
                          </div>
                       </div>
                    
                    @else
                    <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  موقت  </div></label>  
                          <div class="col-md-7">
                         	<input id="Temporary" name="Temporary" disabled type="checkbox" class="form-control input-md" />  
                          </div>
                          </div>
                       </div>
                    
                    @endif
                 @endunless         
                  
                  @unless ( empty($technicalcomments_register->Permanent) )    
                     
                     @if($technicalcomments_register->Permanent == "on" )

						<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  دایم  </div></label>  
                          <div class="col-md-7">
                        	<input id="Permanent" name="Permanent" disabled type="checkbox" checked class="form-control input-md" />
                          </div>
                          </div>
                       </div>
					      @else
					 	<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  دایم  </div></label>  
                          <div class="col-md-7">
                        	<input id="Permanent" name="Permanent" disabled type="checkbox" class="form-control input-md" />
                          </div>
                          </div>
                       </div>
					 
					 
					       @endif
					  @endunless  
					 
					  @unless ( empty($technicalcomments_register->Email) )   
					   @if($technicalcomments_register->Email == "on" )

								
					  <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  ایمیل   </div></label>  
                          <div class="col-md-7">
                        	<input id="Email" name="Email" disabled  type="checkbox"  checked class="form-control input-md" />
                          </div>
                          </div>
                       </div>	
                       
                       @else
                         <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  ایمیل   </div></label>  
                          <div class="col-md-7">
                        	<input id="Email" name="Email" disabled type="checkbox" class="form-control input-md" />
                          </div>
                          </div>
                       </div>	
                       
                       @endif
                       @endunless 






						@elseif (!empty($technicalcomments_register->flagattestation) )  

                      
					         	
          
                 

						  <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">صفحه      </div></label>  
                          <div class="col-md-7">
                          @unless (empty($technicalcomments_register->page) )
                          <input id="page" name="page"  readonly  type="text" value="{{$technicalcomments_register->page}}" class="form-control input-md">   
                          @else
                          <input id="page" name="page"    type="text" value="" class="form-control input-md">   
                          @endunless
                          </div>
                          </div>
                       </div>
                       
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left"> جلد:</div></label>  
                          <div class="col-md-7">
                          @unless (empty($technicalcomments_register->jild) )
                          <input id="jild" name="jild" readonly   type="text" value="{{$technicalcomments_register->jild}}" class="form-control input-md">   
                          @else
                          <input id="jild" name="jild"    type="text" value="" class="form-control input-md">   
                          @endunless
                          </div>
                          </div>
                       </div>

                 
                       
               
                       
                     
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">سویه تحصیلی  </div></label>  
                          <div class="col-md-7">
                          @unless (empty($technicalcomments_register->EducationType) )
                              <input id="EducationType" name="EducationType" readonly   type="text" value="{{$technicalcomments_register->EducationType}}" class="form-control input-md">   
                          @else
                          <input id="EducationType" name="EducationType"    type="text" value="" class="form-control input-md">   
                          @endunless  
                          
                          </div>
                          </div>
                       </div>
                       
                        
                       
                       
                       
                       
                       
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">کمنت      </div></label>  
                          <div class="col-md-7">
                          @unless (empty($technicalcomments_register->nondocument) )
                          <input id="nondocument" name="nondocument"   tabindex="27" readonly  type="textarea" value="{{$technicalcomments_register->nondocument}}" class="form-control input-md">   
                          @else
                          <input id="nondocument" name="nondocument"   tabindex="27"   type="textarea" value="" class="form-control input-md">   
                          @endunless
                          </div>
                          </div>
                       </div>
                       
                       
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">-      </div></label>  
                          <div class="col-md-7">
                          <input id="" name="" readonly  tabindex="27"  type="textarea" value="" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                          
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">-      </div></label>  
                          <div class="col-md-7">
                          <input id="" name=""  readonly  tabindex="27"  type="textarea" value="" class="form-control input-md">   
                          </div>
                          </div>
                       </div>

                      
                          <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">     </div></label>  
                          <div class="col-md-7">
                          <input id="nil" name="nil" style="display:none" required  readonly  type="text"  value="{{ $doctor->nil }}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>


                       @unless ( empty($technicalcomments_register->Temporary) )
                    @if($technicalcomments_register->Temporary == "on" )
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  موقت  </div></label>  
                          <div class="col-md-7">
                         	<input id="Temporary" name="Temporary" disabled  type="checkbox" checked class="form-control input-md" />  
                          </div>
                          </div>
                       </div>
                    
                    @else
                    <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  موقت  </div></label>  
                          <div class="col-md-7">
                         	<input id="Temporary" name="Temporary" disabled type="checkbox" class="form-control input-md" />  
                          </div>
                          </div>
                       </div>
                    
                    @endif
                 @endunless         
                  
                  @unless ( empty($technicalcomments_register->Permanent) )    
                     
                     @if($technicalcomments_register->Permanent == "on" )

						<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  دایم  </div></label>  
                          <div class="col-md-7">
                        	<input id="Permanent" name="Permanent" disabled type="checkbox" checked class="form-control input-md" />
                          </div>
                          </div>
                       </div>
					      @else
					 	<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  دایم  </div></label>  
                          <div class="col-md-7">
                        	<input id="Permanent" name="Permanent" disabled type="checkbox" class="form-control input-md" />
                          </div>
                          </div>
                       </div>
					 
					 
					       @endif
					  @endunless  
					 
					  @unless ( empty($technicalcomments_register->Email) )   
					   @if($technicalcomments_register->Email == "on" )

								
					  <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  ایمیل   </div></label>  
                          <div class="col-md-7">
                        	<input id="Email" name="Email" disabled  type="checkbox"  checked class="form-control input-md" />
                          </div>
                          </div>
                       </div>	
                       
                       @else
                         <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  ایمیل   </div></label>  
                          <div class="col-md-7">
                        	<input id="Email" name="Email" disabled type="checkbox" class="form-control input-md" />
                          </div>
                          </div>
                       </div>	
                       
                       @endif
                       @endunless 

                       
						
						@else
						
        

						  <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">صفحه      </div></label>  
                          <div class="col-md-7">
                          @unless (empty($technicalcomments_register->page) )
                          <input id="page" name="page"  readonly  type="text" value="{{$technicalcomments_register->page}}" class="form-control input-md">   
                          @else
                          <input id="page" name="page"    type="text" value="" class="form-control input-md">   
                          @endunless
                          </div>
                          </div>
                       </div>
                       
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left"> جلد:</div></label>  
                          <div class="col-md-7">
                          @unless (empty($technicalcomments_register->jild) )
                          <input id="jild" name="jild" readonly   type="text" value="{{$technicalcomments_register->jild}}" class="form-control input-md">   
                          @else
                          <input id="jild" name="jild"    type="text" value="" class="form-control input-md">   
                          @endunless
                         
                         
                          </div>
                          </div>
                       </div>

                 
                       
                       <br/>
                       
                     
                       <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">سویه تحصیلی  </div></label>  
                          <div class="col-md-7">
                          @unless (empty($technicalcomments_register->EducationType) )
                              <input id="EducationType" name="EducationType" readonly   type="text" value="{{$technicalcomments_register->EducationType}}" class="form-control input-md">   
                          @else
                          <input id="EducationType" name="EducationType"    type="text" value="" class="form-control input-md">   
                          @endunless
                          </div>
                          </div>
                       </div>
                       
                        
                       
                       
                       
                       
                       
                        <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">کمنت      </div></label>  
                          <div class="col-md-7">
                          @unless (empty($technicalcomments_register->nondocument) )
                          <input id="nondocument" name="nondocument"   tabindex="27" readonly  type="textarea" value="{{$technicalcomments_register->nondocument}}" class="form-control input-md">   
                          @else
                          <input id="nondocument" name="nondocument"   tabindex="27"   type="textarea" value="" class="form-control input-md">   
                          @endunless
                          
                          </div>
                          </div>
                       </div>
                       
                    

                      
                          <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">     </div></label>  
                          <div class="col-md-7">
                          <input id="nil" name="nil" required  readonly  type="text"  value="{{ $doctor->nil }}" class="form-control input-md">   
                          </div>
                          </div>
                       </div>
						

                       @unless ( empty($technicalcomments_register->Temporary) )
                    @if($technicalcomments_register->Temporary == "on" )
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  موقت  </div></label>  
                          <div class="col-md-7">
                         	<input id="Temporary" name="Temporary" disabled  type="checkbox" checked class="form-control input-md" />  
                          </div>
                          </div>
                       </div>
                    
                    @else
                    <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  موقت  </div></label>  
                          <div class="col-md-7">
                         	<input id="Temporary" name="Temporary" disabled type="checkbox" class="form-control input-md" />  
                          </div>
                          </div>
                       </div>
                    
                    @endif
                 @endunless         
                  
                  @unless ( empty($technicalcomments_register->Permanent) )    
                     
                     @if($technicalcomments_register->Permanent == "on" )

						<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  دایم  </div></label>  
                          <div class="col-md-7">
                        	<input id="Permanent" name="Permanent" disabled type="checkbox" checked class="form-control input-md" />
                          </div>
                          </div>
                       </div>
					      @else
					 	<div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  دایم  </div></label>  
                          <div class="col-md-7">
                        	<input id="Permanent" name="Permanent" disabled type="checkbox" class="form-control input-md" />
                          </div>
                          </div>
                       </div>
					 
					 
					       @endif
					  @endunless  
					 
					  @unless ( empty($technicalcomments_register->Email) )   
					   @if($technicalcomments_register->Email == "on" )

								
					  <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  ایمیل   </div></label>  
                          <div class="col-md-7">
                        	<input id="Email" name="Email" disabled  type="checkbox"  checked class="form-control input-md" />
                          </div>
                          </div>
                       </div>	
                       
                       @else
                         <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code"><div align="left">  ایمیل   </div></label>  
                          <div class="col-md-7">
                        	<input id="Email" name="Email" disabled type="checkbox" class="form-control input-md" />
                          </div>
                          </div>
                       </div>	
                       
                       @endif
                       @endunless 

						
						
						@endunless
					
                      
							    
						
									
									
								
					

								</div>
                            
                            
                       
                    
								<form  action="{{'/check_list4/'}}" method="post" class="form-horizontal form-label-left">
				
				{{ csrf_field() }}

				<fieldset>

					
			
                  
                
					 
					 
					
					
                     
                    
    
			
					</div>

                       
				
				
							

					
					
			
					<!-- Text input-->
									 <div style="display:none" class="form-group{{ $errors->has('Code') ? ' has-error' : '' }}" >
										<label class="col-md-4 control-label" for="Code">{{__('ui.code')}}</label>  
										<div class="col-md-4">
										<input id="reg_no" name="reg_no" type="text" required  value="{{$id}}"  readonly class="form-control input-md">
											
										</div>
									</div>
							
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality"> تایید امریت ارزیابی اسناد تحصیلی خارج مرز </label>  
										<div class="col-md-4">
										<input id="nationality"  name="id_varification"  type="checkbox" disabled checked class="form-control input-md"/>
										</div>
									</div>
									
									
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality">تایید کمیته تخنیکی</label>  
										<div class="col-md-4">
										<input id="nationality" name="police_varification"   type="checkbox" disabled  checked class="form-control input-md"/>
										</div>
									</div>
									
									
									
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality">تایید کمیسون عالی ارزیابی اسناد تحصیلی خارج مرز</label>  
										<div class="col-md-4">
										<input id="nationality" name="document_varification" type="checkbox" disabled checked class="form-control input-md" />
										</div>
									</div>
									
									

									<!-- Text input-->
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										
										<label class="col-md-4 control-label" for="nationality">تایید</label>  
										<div class="col-md-4">
										<input id="nationality" name="nationality" required  type="checkbox" class="form-control input-md">
										</div>
									
									</div>
								
                            
			
			
									       
            <div class="form-group">
                  <div class="text-center">

                  
          	      
                    
                    <button type="submit"   class="btn btn-success">ارسال</button>
                    
                 





					
                     </div>
                    </div>
					</fieldset>
					</form>
 			 	
						
 			@else
 			
 			
 		
 	<div class="row">
 			<div class="col-md-2 col-sm-12 col-xs-12">
 			</div>
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="x_panel">
						
						
						
							
				
					            <center> You are not allowed to visit this page </center>
				
				</div>
						        

	  

			</div>
 			
 			@endif
 			
 			
 			@stop	
 			
 			
 			
 			@section('scripts')


    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="{{URL::asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	
	<script>
	    
	    $(".form-control input-md").click(function(){
    var group = "input[name='"+$(this).attr("name")+"']";
    $(group).attr("checked",false);
    $(this).attr("checked",true);
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
 			