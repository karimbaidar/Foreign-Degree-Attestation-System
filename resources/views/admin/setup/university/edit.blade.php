@extends('admin-layout.app',['title'=>'Update Location'])
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
							<h2 style="padding-bottom:5px">Edit university</h2>
							<div class="clearfix"></div>
					</div>

					<div class="x_content">
				<form  action="{{'/university/'.$university->id}}" method="post" class="form-horizontal form-label-left">

			<div class="panel-body">
				
				{{ csrf_field() }}
                {{method_field('put')}}

	       <fieldset>


					<div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}" >
					  <label class="col-md-4 control-label" for="code">{{__('ui.code')}}</label>  
					  <div class="col-md-4">
					  <input id="code" name="code" type="text" value="{{$university->code}}"  readonly class="form-control input-md">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					  <label class="col-md-4 control-label" for="description">University</label>  
					  <div class="col-md-4">
					  <input id="name" value="{{$university->name}}" name="name" class="form-control input-md"/>
					  </div>
					</div>
					
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					  <label class="col-md-4 control-label" for="description">Domain</label>  
					  <div class="col-md-4">
					  <input id="type" value="{{$university->type}}" name="type" class="form-control input-md"/>
					  </div>
					</div>
					
					

					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
										<label class="col-md-4 control-label" required for="name">Is this University BlackListed</label>  
										<div class="col-md-4">
											<select id="Blacklisted" name="Blacklisted" class="form-control input-md">
													
													<option value="Yes">Yes</option>
													<option value="NULL">No</option>
													
											</select>
										</div>
					</div>



					</fieldset>
						        

	        

			</div>

			<div class=" text-center">
				
				<div class="form-group">
					
	            <input type="submit" class="btn btn-primary" value="{{__('ui.save')}}">
	            <a href="/university" class="btn btn-danger">{{__('ui.cancel')}}</a>
	         </div>

			</div>


		</form>
					</div>
			</div>
		</div>
	</div>
		
	

		

	


	
	



@stop