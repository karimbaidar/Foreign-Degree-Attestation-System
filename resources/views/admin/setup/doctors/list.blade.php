@extends('layouts.app',['title'=>'Order List'])

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


	<div class="row" style="margin-top:40px">
		<div class="col-md-1 col-sm-4 col-xs-12">
		</div>
		<div class="col-md-10 col-sm-12 col-xs-12">
			
			<div class="x_panel">
				
				
				
				
				
				<div class="x_title text-center" style="padding:5px">
                                                        <img src="{{url('/images/logo.png')}}" width="150px" height="150px" alt="">
                                                        <table border="2px solid" width="100%" style="margin-top: 5px;">
                                                          <tr>
                                                            <td><b>جمهوری اسلامی افغانستان</br>د اففانستان اسلامی جمهوریت</b></br></br></td>
                                                            <td><b>ISLAMIC REPUBLIC OF AFGHANISTAN </br>Ministry of Higher Education</b></br></br></td>
                                                            <td><b>د لوړو زده کړو وزارت</br>وزارت تحصیلات عالی افغانستان</b></br></br></td>
                                                          </tr>
                                                          
                                                        </table>
                                                        <!-- <div style="border: 1px solid; height: 40px; width: 40%; margin: 10px auto; background-color: lightgray; display: inline-block"><h5><b>FRONT END</b></br></h5></div> -->

                                                        <div class="clearfix"></div>
                                                    </div>
				
				
				
				
				
				
				
				
				
				
				
					<center><h3 style="padding-bottom:5px"><b>Students' Status Verification Directory</b></h3></center>
					

					<div class="clearfix"></div>

			

				<div class="x_content">
						
			
<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>
<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p> <br/>
    <h4> <b>Verified Students' Details are as follow: </b></h4><br/>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Registration Number</th>
                <th>Name</th>
				<th>Email</th>
				<th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->reg_no}}</td>
				<td>{{$user->name}}</td>
                <td>{{$user->father_name}}</td>
				<td><font color="darkgreen"><b>{{$user->status}}</b></font></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

@if(isset($message))
	
<center><h3><font color="red">Sorry ! We didn't find any of the record with your specified query, Please try again... </font></h3></center>
        
     

@endif


					</div>
				</div>
			</div>
		</div>

		<center>	 <a href="/login" ><font size="3px"><i class="fa fa-arrow-left"></i> {{__('ui.back')}} </a> </font>	</center>

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