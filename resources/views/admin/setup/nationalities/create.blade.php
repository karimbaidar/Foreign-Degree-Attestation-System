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
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2 style="padding-bottom:5px">Create Nationality</h2>
							<div class="clearfix"></div>
					</div>
					<div class="x_content">
							<br />
						<form  action="{{'/nationality/'}}" method="post" class="form-horizontal form-label-left">
				
							{{ csrf_field() }}

							<fieldset>



									<!-- Text input-->
									<div class="form-group{{ $errors->has('Code') ? ' has-error' : '' }}" >
										<label class="col-md-4 control-label" for="Code">{{__('ui.code')}}</label>  
										<div class="col-md-4">
										<input id="Code" name="code" type="text" value="{{$code_value}}"  readonly class="form-control input-md">
											
										</div>
									</div>

									<!-- Text input-->
									<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" for="nationality">Nationality</label>  
										<div class="col-md-4">
										<input id="nationality" name="nationality" class="form-control input-md"/>
										</div>
									</div>

									

						
                <div class="form-group">
                     <div class="text-center">
                          <a href="{{'/nationality'}}" class="btn btn-primary" type="button">{{__('ui.cancel')}}</a>
					             	
                          <button type="submit" class="btn btn-success">{{__('ui.create')}}</button>
                        </div>
                </div>
					</fieldset>
					</form>
					</div>
				</div>
						        

	  

			</div>
@stop