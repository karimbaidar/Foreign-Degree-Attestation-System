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

	

		<div class="col-md-10 col-sm-12 col-xs-12">
			<div class="x_panel">
			 
					<div class="x_title">
							<h2 style="padding-bottom:5px">List of Users</h2>
							<div class="clearfix"></div>
					</div>

		
			
			<div class="x_content">
					<table id="myTable" class="table table-striped table-bordered  nowrap" cellspacing="0" width="100%">
				<thead>
					<tr>
						
						<th>ID</th>
						<th>Email</th>
						<th>First Name</th>
						<th>Role/Last Name</th>
						<th>Created At</th>
					
	
					</tr>
				</thead>
				<tbody>
					     @foreach($usertables as $university)
					<tr>
						<td> {{$university->id}}</td>
						<td> {{$university->email}}</td>
						<td> {{$university->firstName}}</td>
						<td> {{$university->lastName}}</td>
						
						<td> {{$university->created_at}}</td>
						

						
					</tr>

						@endforeach()    
				
					  
				</tbody>
			</table>
			</div>

		

		    
		
		</div>
		
	
	</div>


@stop


@section('scripts')


    <script src="{{URL::asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
	
    <script src="{{URL::asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
   
   
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




