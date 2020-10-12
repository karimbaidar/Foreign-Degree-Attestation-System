@extends('admin-layout.app',['title'=>'Order List'])

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


	<div class="row" style="margin-top:20px">
		<!-- <div class="col-md-1 col-sm-4 col-xs-12">
		</div> -->
		<div class="col-md-12 col-sm-12 col-xs-12">
			
			<div class="x_panel">
				<div class="x_title">
					<h2 style="padding-bottom:5px">Rejected Students List</h2>
					
					
					
					

					<div class="clearfix"></div>

				</div>

				
			
					
					
					
			
					
					
					
					
					
					
					
					
					
				
				<div class="x_content">
				
				
				
				
				
				
				
					<div class="table-responsive">
			
					
				
					<table  id="myTable" class="table table-condensed table-hover table-striped" border="1px solid">
				<thead>
					<tr>			
						<th>Reg No</th>
						<th>Name</th>
						<th>Nationality</th>
						<th>Email Address</th>
						
						<th>Status</th>
					
						
					</tr>
				</thead>
				<tbody>
					
					
					@foreach($doctor_lists as $doctor_list)
						@if($doctor_list->rejectionFlag==1)
					<tr>
					
						<td> {{$doctor_list->reg_no}}</td>
						<td> {{$doctor_list->name}}</td>
						<td> {{$doctor_list->nationality}}</td>
						<td> {{$doctor_list->email_address}}</td>
					
						
						<td> <font color="red"><b>{{$doctor_list->status}}</b></font></td>
						
						
						
						
						
						
					</tr>
					
					
				
					@endif
					@endforeach()
					
						
			
			
						
					
					
					
					
					
					
					
					
					
					
					
				</tbody>
			</table>
					
					
		
			
			  
			
			
			
			
			

					</div>
					
					
					
				
					
					
					
					
					
				</div>
			</div>
		</div>

		<!-- <div class="col-md-1 col-sm-4 col-xs-12">
		</div> -->

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