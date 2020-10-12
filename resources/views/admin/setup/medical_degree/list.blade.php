@extends('admin-layout.app',['title'=>'Locations list'])



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

		<div class="col-md-1 col-sm-12 col-xs-12">

		</div>

		<div class="col-md-10 col-sm-12 col-xs-12">
			<div class="x_panel">
				<a href="{{url('/medical_degree/create')}}"
				@if(App::isLocale('en'))
				 class="btn btn-success btn-default pull-right"
				@elseif(App::isLocale('fa'))
				 class="btn btn-success btn-default pull-left"
				@endif
				 >    <i class="fa fa-plus"></i>{{__('ui.add')}} </a> 
					<div class="x_title">
							<h2 style="padding-bottom:5px">List of Countries</h2>
							<div class="clearfix"></div>
					</div>

		
			
			<div class="x_content">
					<table id="myTable" class="table table-striped table-bordered  nowrap" cellspacing="0" width="100%">
				<thead>
					<tr>
						
						<th>{{__('ui.code')}} </th>
						<th>Country</th>
						<th></th>
						
	
					</tr>
				</thead>
				<tbody>
				@foreach($medical_degrees as $medical_degree)
					<tr>
						<td> {{$medical_degree->code}}</td>
						<td> {{$medical_degree->degree}}</td>
						
						
						

						<td class="text-center">
							  <form action="{{'/medical_degree/'.$medical_degree->id}}" method="post">
							{{csrf_field()}}
							{{method_field('delete')}}
								<div class=" " role="group">
									<a class="btn btn-primary" href="{{'/medical_degree/'.$medical_degree->id.'/edit'}}"><i class="fa fa-edit"></i>{{__('ui.edit')}}</a>
									<!--<input type="submit" class="btn btn-danger delete-btn" value="{{__('ui.delete')}}"/>-->
								</div>
							</form>  
						</td>
					</tr>

				@endforeach()    
				
					  
				</tbody>
			</table>
			</div>

		

		    
		
		</div>
		<div class="col-md-1 col-sm-12 col-xs-12">
			
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




