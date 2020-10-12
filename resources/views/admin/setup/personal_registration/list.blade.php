@extends('layouts.app',['title'=>'Product List'])

@section('custom_css_links')

	 <!-- Datatables related files  -->
    <link href="{{URL::asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
	<style>
			table th,table td{
			text-align:center;
		}
		#myTable_filter label{
			float:left;
			
		}
	</style>
@endsection


@section('page-content')


	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			
			<div class="x_panel">
				<div class="x_title">
					<h2 style="padding-bottom:5px">{{__('ui.product_list')}}</h2>
					<a href="{{url('/product/create')}}" 
					@if(App::isLocale('en'))
						class="btn btn-success btn-default pull-right"
					@elseif(App::isLocale('fa'))
						class="btn btn-success   pull-left"
					@endif
					 >  {{__('ui.add')}}  </a> 

					<div class="clearfix"></div>

				</div>

				<div class="x_content">
					<div class="table-responsive">
			
			  <table  id="myTable" class="table table-condensed table-hover table-striped">
				<thead>
					<tr>			
						<th>{{__('ui.code')}} </th>
						<th> {{__('ui.name')}}</th>
						<th>{{__('ui.brand')}}</th>
						<th>{{__('ui.model')}}</th>
						<th>{{__('ui.product_category')}}</th>
						<th>{{__('ui.unit_measurement')}} </th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
					<tr>
					
						<td> {{$product->code}}</td>
						<td> {{$product->name}}</td>
						<td>{{$product->model->brand->name}}</td>
						<td>{{$product->model->name}}</td>
						<td> {{$product->product_category->name}}</td>
						<td>{{$product->unit_measurement->name}}
						
						
						<td>
							<form action="{{'/product/'.$product->id}}" method="post">
							{{csrf_field()}}
							{{method_field('delete')}}
								<div class=" " role="group">
								
									<a class="btn btn-primary" href="{{'/product/'.$product->id.'/edit'}}">{{__('ui.edit')}}</a>
									<input type="submit" class="btn btn-danger delete-btn" value="{{__('ui.delete')}}"/>
								</div>
							</form>
						</td>
					</tr>

					@endforeach()
					
				</tbody>
			</table>

					</div>
				</div>
			</div>
		</div>

	</div>
	
	
		

		

	


@stop

@section('scripts')


	<script src="{{URL::asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
	
    <script src="{{URL::asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
	<script>
		$(document).ready(function(){
			$('#myTable').DataTable({
				  "language": {
						"lengthMenu": "{{__('ui.show')}} _MENU_ {{__('ui.entry')}}",
						"zeroRecords": "{{__('ui.empty_info')}}",
						"info": "",
						"search":"{{__('ui.search')}}",
						"infoEmpty": "{{__('ui.search_result')}}",
						 "paginate": {
     						 "previous": "{{__('ui.previous')}}",
							  "next":"{{__('ui.next')}}"
   							 }
       					 }
				});
		});
	
	</script>

@endsection()