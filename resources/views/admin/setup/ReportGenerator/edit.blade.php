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
							<h2 style="padding-bottom:5px">Edit Nationality</h2>
							<div class="clearfix"></div>
					</div>

					<div class="x_content">
				<form  action="{{'/nationality/'.$nationality->id}}" method="post" class="form-horizontal form-label-left">

			<div class="panel-body">
				
				{{ csrf_field() }}
                {{method_field('put')}}

	       <fieldset>


					<div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}" >
					  <label class="col-md-4 control-label" for="code">{{__('ui.code')}}</label>  
					  <div class="col-md-4">
					  <input id="code" name="code" type="text" value="{{$nationality->code}}"  readonly class="form-control input-md">
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
					  <label class="col-md-4 control-label" for="description">Nationality</label>  
					  <div class="col-md-4">
					  <input id="name" value="{{$nationality->nationality}}" name="nationality" class="form-control input-md"/>
					  </div>
					</div>

					

					</fieldset>
						        

	        

			</div>

			<div class=" text-center">
				
				<div class="form-group">
					
	            <input type="submit" class="btn btn-primary" value="{{__('ui.save')}}">
	            <a href="/nationality" class="btn btn-danger">{{__('ui.cancel')}}</a>
	         </div>

			</div>


		</form>
					</div>
			</div>
		</div>
	</div>
		
	

		

	


	
	



@stop