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
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2 style="padding-bottom:5px">تایید رییس عمومی امور اکادمیک</h2>
							<div class="col-md-4 pull-right">

										<!-- <h4>{{$id}}</h4> -->
											
							</div>
							<div class="clearfix"></div>
						</div>
					<div class="x_content">
							<br />
						<form  action="{{'/check_list5/'}}" method="post" class="form-horizontal form-label-left">
				
							{{ csrf_field() }}

							<fieldset>



									<!-- Text input-->
									 <div  class="form-group{{ $errors->has('Code') ? ' has-error' : '' }}" >
										<label class="col-md-4 control-label" for="Code">ID</label>  
										<div class="col-md-4">
										<input id="reg_no" name="reg_no" readonly type="text" required  value="{{$id}}"   class="form-control input-md">
											
										</div>
									</div>
					
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality"> تایید امریت ارزیابی اسناد تحصیلی خارج مرز </label>  
										<div class="col-md-4">
										<input id="attestation"  name="attestation" type="checkbox"   class="form-control input-md"/>
										</div>
									</div>
									
									
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality">تایید کمیته تخنیکی</label>  
										<div class="col-md-4">
										<input id="technical" name="technical"   type="checkbox"    class="form-control input-md"/>
										</div>
									</div>
									
									
									<!--
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality">تایید کمیسون عالی ارزیابی اسناد تحصیلی خارج مرز</label>  
										<div class="col-md-4">
										<input id="HA" name="HA" type="checkbox"   class="form-control input-md" />
										</div>
									</div>
									-->
									

									<!-- Text input-->
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										
										<label class="col-md-4 control-label" for="nationality">تایید</label>  
										<div class="col-md-4">
										<input id="nationality" name="nationality" required  type="checkbox" class="form-control input-md">
										</div>
									
									</div>
									<BR/><BR/>
						
                <div class="form-group">
                     <div class="text-center">
                          <a href="{{'/admin_doctor'}}" class="btn btn-warning" type="button">{{__('ui-list.back')}}</a>
					             	
                          <button type="submit" class="btn btn-success">{{__('ui-list.approve')}}</button>

                        </div>
                </div>
					</fieldset>
					</form>
					</div>
				</div>
						        

	  

			</div>
			
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
@stop		<div class="col-md-2 col-sm-12 col-xs-12">
 			</div>