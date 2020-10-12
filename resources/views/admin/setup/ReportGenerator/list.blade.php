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
				
					<div class="x_title">
							<h2 style="padding-bottom:5px">Time Base Report</h2>
							<div class="clearfix"></div>
					</div>

				
			
			<div class="x_content">
			
			<table  id="myTable" class="table table-condensed table-hover table-striped" border="1px solid">
				<thead>
					<tr>			
						<th>Reg No</th>
						<th>Name</th>
						<th>Nationaligy</th>
						<th>Email Address</th>
						<th>Passed</th>
						<th>Status</th>
						<th></th>
						
					</tr>
				</thead>
				<tbody>
			
			
			
		
					
			</div>
				
				@foreach($reservations as $reservation)
					<tr>
					
						<td> {{$reservation->reg_no}}</td>
						<td> {{$reservation->name}}</td>
						<td> {{$reservation->nationality}}</td>
						<td> {{$reservation->email_address}}</td>
						<td> {{$reservation->pass}}</td>
						<td> <font color="green"><b>{{$reservation->status}}</b></font></td>
						<td> 
		
					</tr>
					
				@endforeach()
							
				</tbody>
			</table>
					
		    <a style="border-left:2px solid grey" class="btn btn-primary" href="{{'/reportgenerate/'}}"><i class="fa fa-check"></i>Back</a> 
			<!-- <center><a id="printButton" href="{{'/certificate2'}}"  class="btn btn-primary  pull-right"><i class="fa fa-print"></i> Print</a></center>-->
					<center><a id="printButton" href="{{'/'.$reservation->reg_no.'/certificate2'}}"  class="btn btn-primary  pull-right"><i class="fa fa-print"></i> Print Certificate</a></center>
			
		
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




