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


 @if(Auth::user()->lastName == "asdff331")


 	<div class="row">
 			<div class="col-md-2 col-sm-12 col-xs-12">
 			</div>
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2 style="padding-bottom:5px">Check List</h2>
							<div class="col-md-4 pull-right">

										<!-- <h4>{{$id}}</h4> -->
											
							</div>
							<div class="clearfix"></div>
						</div>
					<div class="x_content">
							<br />
						<form  action="{{'/check_list/'}}" method="post" class="form-horizontal form-label-left">
				
							{{ csrf_field() }}

							<fieldset>



									<!-- Text input-->
									 <div style="display:none" class="form-group{{ $errors->has('Code') ? ' has-error' : '' }}" >
										<label class="col-md-4 control-label" for="Code">{{__('ui.code')}}</label>  
										<div class="col-md-4">
										<input id="reg_no" name="reg_no" type="text"  value="{{$id}}"  readonly class="form-control input-md">
											
										</div>
									</div>

									<!-- Text input-->
									
									
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality">ID VARIFICATION</label>  
										<div class="col-md-4">
										<input id="nationality"  name="id_varification"  type="checkbox" class="form-control input-md" {{$doctor->id_varification==1?'checked':''}}/>
										</div>
									</div>
									
									
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality">POLICE VARIFICATION</label>  
										<div class="col-md-4">
										<input id="nationality" name="police_varification"   type="checkbox" class="form-control input-md" {{$doctor->police_varification==1?'checked':''}}/>
										</div>
									</div>
									
									
									
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality">EDUCATION DOCUMENT VARIFICATION</label>  
										<div class="col-md-4">
										<input id="nationality" name="document_varification" type="checkbox" class="form-control input-md" {{$doctor->document_varification==1?'checked':''}} />
										</div>
									</div>
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality">BANK VARIFICATION</label>  
										<div class="col-md-4">
										<input id="nationality" name="bank_varification"  type="checkbox" class="form-control input-md" {{$doctor->bank_varification==1?'checked':''}}/>
										</div>
									</div>
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality">TEST/EXAMINATION</label>  
										<div class="col-md-4">
										<input id="nationality" name="test_varification"  type="checkbox" class="form-control input-md" {{$doctor->test_examination==1?'checked':''}}/>
										</div>
									</div>
									
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality">FIT TO WORK</label>  
										<div class="col-md-4">
										<input id="nationality" name="fit_to_work"   type="checkbox" class="form-control input-md" {{$doctor->fit_to_work==1?'checked':''}}/>
										</div>
									</div>
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality">DECLARATION</label>  
										<div class="col-md-4">
										<input id="nationality" name="declaration"   type="checkbox" class="form-control input-md" {{$doctor->diclaration==1?'checked':''}}/>
										</div>
									</div>
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality">APPROVAL</label>  
										<div class="col-md-4">
										<input id="nationality" name="approval"  type="checkbox" class="form-control input-md" {{$doctor->approval==1?'checked':''}}/>
										</div>
									</div>
									<div class="form-group {{$errors->has('code')?'has_error':''}}">
                          
									<div class="col-md-7">
									
							  
						
                   
									<input id="id"  name="id" required readonly type="text" style="display: none" value="{{$id}}" class="form-control input-md">   
						  
									
						  
									</div>
									</div>
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality">Explanation of Rejection</label>  
										<div class="col-md-4">
										<input id="rejection" name="rejection"  type="textarea" class="form-control input-md"/>
										</div>
									</div>
									
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality">Documents' Non-Availibility Explanation</label>  
										<div class="col-md-4">
										<input id="nondocument" name="nondocument"  type="textarea" class="form-control input-md"/>
										</div>
									</div>
								</br>
								</br>
						
                <div class="form-group">
                     <div class="text-center">
                          <a href="{{'/admin_doctor'}}" class="btn btn-warning" type="button">BACK</a>
					             	
                          <button type="submit" class="btn btn-success">VERIFY</button>
						  <button type="submit" class="btn btn-danger">Reject</button>
                          <button type="submit" class="btn btn-info">Save</button>

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