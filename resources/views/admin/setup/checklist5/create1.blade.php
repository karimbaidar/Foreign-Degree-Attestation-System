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
										<input id="reg_no" name="reg_no" type="text" required  value="{{$id}}"  readonly class="form-control input-md">
											
										</div>
									</div>

									<!-- Text input-->
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality">ID VARIFICATION</label>  
										<div class="col-md-4">
										<input id="nationality" name="nationality" required  type="checkbox" class="form-control input-md">
										</div>
									</div>
							
									
								</br>
								</br>
						
                <div class="form-group">
                     <div class="text-center">
                          <a href="{{'/admin_doctor'}}" class="btn btn-warning" type="button">DENIED</a>
					             	
                          <button type="submit" class="btn btn-success">APPROVED</button>

                        </div>
                </div>
					</fieldset>
					</form>
					</div>
				</div>
						        

	  

			</div>
@stop		<div class="col-md-2 col-sm-12 col-xs-12">
 			</div>