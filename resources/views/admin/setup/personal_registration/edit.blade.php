@extends('layouts.app',['title'=>'Create Location'])
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
					<h2 style="padding-bottom:5px">{{__('ui.edit')}} </h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<form  action="{{'/product/'.$product->id}}" method="post" class="form-horizontal">

			<div class="panel-body">
				
				{{ csrf_field() }}
                {{method_field('put')}}

				<input type="hidden" value="{{$product->id}}" id="product_id"/>

	       <fieldset>

				<!-- Text input-->
				<div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}" >
					<label class="col-md-4 control-label" for="Code">{{__('ui.code')}}</label>  
					<div class="col-md-4">
					<input id="code" name="code" type="text" value="{{$product->code}}"  readonly class="form-control input-md">
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					<label class="col-md-4 control-label" for="name">{{__('ui.name')}}</label>  
					<div class="col-md-4">
					<input id="name"type="text" name="name" value="{{$product->name}}" class="form-control input-md"/>
					</div>
				</div>

					<!-- Text input-->
				<div class="form-group{{ $errors->has('measurement_id') ? ' has-error' : '' }}">
					<label class="col-md-4 control-label" for="Unit_measurement">  {{__('ui.unit_measurement')}}</label>  
					<div class="col-md-4">
					<select id="Unit_measurement"type="text" name="measurement_id" class="form-control input-md">
						<option value="{{$product->unit_measurement->id}}" selected>{{$product->unit_measurement->name}}</option>
						@foreach($measurements as $measurement)
							<option value="{{$measurement->id}}">{{$measurement->name}}</option>
						@endforeach()
					</select>
					</div>
				</div>

				


					<!-- Text input-->
				<div class="form-group{{ $errors->has('product_category_id') ? ' has-error' : '' }}">
					<label class="col-md-4 control-label" for="product_category">{{__('ui.product_category')}}</label>  
					<div class="col-md-4">
					<select id="product_category"   name="product_category_id" class="form-control input-md">
							<option selected value="{{$product->product_category->id}}"> {{$product->product_category->name}}</option>
							@foreach($product_categories as $product_cateogory)
							    <option value="{{$product_cateogory->id}}">{{$product_cateogory->name}}</option>
							@endforeach()
					</select>
					
					<input type="text" style="display:none" readonly id="product_classification" class="form-control"/>
					
				</div>
				</div>
				
				
					

						<!-- Text input-->
				<div class="form-group{{ $errors->has('brand_id') ? ' has-error' : '' }}">
					<label class="col-md-4 control-label" for="Unit_measurement"> {{__('ui.brand')}}</label>  
					<div class="col-md-4">
					<select id="brand_id"  name="brand_id" class="form-control input-md">
						<option value="{{$product->model->brand->id}}" >{{$product->model->brand->name}}  </option>
						@foreach($brands as $brand)
							<option value="{{$brand->id}}">{{$brand->name}}</option>
						@endforeach()
					</select>
					</div>
				</div>
				

				<div class="form-group{{ $errors->has('model_id') ? ' has-error' : '' }}">
					<label class="col-md-4 control-label" for="Unit_measurement"> {{__('ui.model')}}</label>  
					<div class="col-md-4">
					<select id="model_id"   name="model_id" class="form-control input-md">
					
		
					</select>
					</div>
			    </div>
		

			

				</fieldset>
								
			</div>

			<div class=" text-center">
				
				<div class="form-group">
					
	            <input type="submit" class="btn btn-primary" value="{{__('ui.save')}}">
	            <a href="/product" class="btn btn-danger">{{__('ui.cancel')}}</a>
	         </div>

			</div>


		</form>
				</div>
			</div>
		</div>
	</div>

	

		

	


	
	



@stop

@section('scripts')

   
	<script type="text/javascript">
	
	
	  $(document).ready(function(){
		 var model= $('#model_id');
		 var brand_id= $('#brand_id').val();
		 var product_id=$('#product_id').val();

		 var brand=$('#brand_id').on('change',appendResult);


	
		 $.ajax({
			 method:'get',
			 url:'/brand/model/edit/'+product_id+'/'+brand_id,
			 success:function(data){
				 var result=JSON.parse(data);
				 var model_ids=result.model_ids;
				 var model_names=result.model_names;
				 var model_name=result.model_name;
				 var model_id=result.model_id;

			
				 model.append('<option value='+model_id+'>'+model_name+'</option>');
				 
				 for(i=0;i<model_ids.length;i++){
					 model.append('<option value='+model_ids[i]+'>'+model_names[i]+'</option>');
				 }
			 }
		 });


		 function appendResult(){
			  var brandValue=$('#brand_id').val();
			   var model= $('#model_id');

			 
			  
			   if(!brandValue){
				   return;
			   }else{
				 
				   $.ajax({
					method:'get',
					url:'admin/brand/models/'+brandValue,
					success:function(data){
						var resultObj=JSON.parse(data);
						var model_names=resultObj.model_names;
						var model_ids=resultObj.model_ids;
						

						
						
				
						model.empty();
						model.append('<option></option>');
						for(i=0;i<model_names.length;i++){
							model.append('<option value='+model_ids[i]+'>'+model_names[i]+'</option>');
						}

					}
				   });
			   }
		 }
		 
		 
	  });
	
	
	
	
	
	
	</script>

@endsection()

