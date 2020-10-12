@extends('admin-layout.app')


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

<form class="form-horizontal">


  <div class="row" style="margin-top:20px">
    <!-- <div class="col-md-1 col-sm-2 col-xs-12">

    </div> -->
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" >
        <div class="x_title">
            <a href="/admin_doctor" ><i class="fa fa-arrow-left"></i> {{__('ui.back')}}</a>
            <!--<a id="printButton" href="{{'printcertificate/'.$registred_doctor->reg_no.'/certificate'}}"  class="btn btn-primary  pull-right"><i class="fa fa-print"></i> {{__('ui.print')}}</a>-->
          <div class="text-center">
              <h3 class="text-center" >Doctor Details</h3>
          </div>
        
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            
        
<div class="row">


  <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" >
        <div class="x_title btn-info">
            <a href="/doctor" ></i></a>
            <a id="printOrder" href="#"></a>
          <div class="text-center">
              <h3 class="text-center" >Personal Details</h3>
          </div>
        
          <div class="clearfix"></div>
        </div>
        <div class="x_content">   

            
         <table class="table   table-bordered table-condensed table-hover table-striped" style="position:inline">
                    <thead>
                      <tr>
                        <th style="text-align:left;" class="btn-primary">#No</th>      
                        <td class="btn-primary">{{$registred_doctor->reg_no}}</td>
                        <td rowspan="8">
                            <img src="{{Storage::url('public/documents/'.$registred_doctor->image)}}" style="width:220px;height:220px;" />
                            <!-- <a href="{{Storage::url('public/documents/'.$registred_doctor->image)}}" target="_blank">{{$registred_doctor->image}}</a> -->
                        </td>
                      </tr>
                      <tr>
                        <th width="40%">Name</th>
                        <td width="50%">{{$registred_doctor->name}}</td>
                      </tr>
                      <tr>
                        <th>Surname</th>
                        <td>{{$registred_doctor->surname}}</td>
                      </tr>
                      <tr>
                        <th>Father Name</th>
                        <td>{{$registred_doctor->father_name}}</td>
                      </tr>
                      <tr>
                        <th>Grand Father Name</th>
                        <td>{{$registred_doctor->g_fathername}}</td>
                      </tr>
                      <tr>
                        <th>Nationality</th>
                        <td>{{$registred_doctor->nationality}}</td>
                      </tr>
                      <tr>
                        <th>NIC</th>
                        <td>{{$registred_doctor->nic}}</td>
                      </tr>
                      <tr>
                        <th>Gender</th>
                        <td>{{$registred_doctor->gender}}</td>
                      </tr>
                      
                      <tr>
                        <th width="40%">Nationality</th>
                        <td width="50%">{{$registred_doctor->nationality}}</td>
                      </tr>
                      <tr>
                        <th>Passport Number</th>
                        <td>{{$registred_doctor->passport_no}}</td>
                      </tr>
                      <tr>
                        <th>VISA Issue Date</th>
                        <td>{{$registred_doctor->visa_issue_date}}</td>
                      </tr>
                      <tr>
                        <th>VISA Expiry Date</th>
                        <td>{{$registred_doctor->visa_exp_date}}</td>
                      </tr>
                      <tr>
                        <th>Issuing Place</th>
                        <td>{{$registred_doctor->issue_place}}</td>
                      </tr>
                      <tr>
                        <th>Issuing Date</th>
                        <td>{{$registred_doctor->issue_date}}</td>
                      </tr>
                      <tr>
                        <th>Date of Birth</th>
                        <td>{{$registred_doctor->dob}}</td>
                      </tr>
                      <tr>
                        <th>Place of Birth</th>
                        <td>{{$registred_doctor->pob}}</td>
                      </tr>
					  <tr>
                        <th>Email Address</th>
                        <td>{{$registred_doctor->email_address}}</td>
                      </tr>
                      <tr>
                        <th>Cell Phone</th>
                        <td>{{$registred_doctor->cell}}</td>
                      </tr>
                     <tr>
                        <th>Present Address</th>
                        <td>{{$registred_doctor->present_address}}</td>
                      </tr>
					  <tr>
                        <th>Permanent Address</th>
                        <td>{{$registred_doctor->permenant_address}}</td>
                      </tr>
                      
					 
					  
					  
                    </thead>
                    <tbody>

                     
                      

                      

                      

    

                      

                     
                       
                    
                    
                      
                    </tbody>
                  </table>





        </div>
    </div>
  </div>

  
       
</div>

<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" >
        <div class="x_title btn-info">
            <a href="/doctor" ></i></a>
            <a id="printOrder" href="#"></a>
          <div class="text-center">
              <h3 class="text-center" >Educational Qualification</h3>
          </div>
        
          <div class="clearfix"></div>
        </div>
        <div class="x_content">   


                  <table class="table   table-bordered table-condensed table-hover table-striped" style="position:inline">
                    <thead>
                      
                      <tr style="background: rgba(38, 185, 154, 0.88);color:white">
                        <th style="text-align:left">Degree</th>  
                        <th>From Date</th>
                        <th>To Date</th>
                        <th>Univeristy</th>
                        <th>Address</th>
                        <th>Contacts</th>
                        <th>files</th>
                      </tr>
                      
                      
                    </thead>
                    <tbody>
                      @foreach($education as $qualification)
                      <tr>
                        <td>{{$qualification->degree}}</td>  
                        <td>{{$qualification->from_date}}</td>
                        <td>{{$qualification->to_date}}</td>
                        <td>{{$qualification->university}}</td>
                        <td>{{$qualification->address}}</td>
                        <td>{{$qualification->contact}}</td>
                        <td><a href="{{Storage::url('public/documents/'.$qualification->file_name)}}" target="_blank">{{$qualification->file_name}}</a></td>
                      </tr>
                      @endforeach()
                    </tbody>
                  </table>
        </div>
    </div>
  </div>


  <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" >
        <div class="x_title btn-info">
            <a href="/doctor" ></i></a>
            <a id="printOrder" href="#"></a>
          <div class="text-center">
              <h3 class="text-center" >Registration Details of  {{$general_info->flag}}	</h3>
          </div>
        
          <div class="clearfix"></div>
        </div>
        <div class="x_content">   


          <table class="table   table-bordered table-condensed table-hover table-striped" style="position:inline">
                    <thead>
                      <tr style="background: rgba(38, 185, 154, 0.88);color:white">
                       
   					    <th style="text-align:center">Entity Name</th>      
                        <th style="text-align:center">Entity Value</th>  
						
						<th style="text-align:center">Entity Name</th>      
                        <th style="text-align:center">Entity Value</th>  
						
					    <th style="text-align:center">Entity Name</th>      
                        <th style="text-align:center">Entity Value</th>  
						
					    <th style="text-align:center">Entity Name</th>      
                        <th style="text-align:center">Entity Value</th>  
						
						
                      </tr>
                      <tr>
                        <th>Profession</th>
                        <td>{{$general_info->profession}}</td>
						
						<th>Passing Year</th>
                        <td>{{$general_info->year_of_passing}}</td>
						
						<th>License Number</th>
                        <td>{{$general_info->license_no}}</td>
						
						<th>Training: To Date</th>
                        <td>{{$general_info->t_to_date}}</td>
						
                      </tr>
                      <tr>
                        <th>Medical Degree</th>
                        <td>{{$general_info->medical_degree}}</td>
						
						<th>Type of Qualification</th>
                        <td>{{$general_info->type_of_qualification}}</td>
						
						<th>Date of Issue</th>
                        <td>{{$general_info->date_of_issue}}</td>
						
						<th>Organization Name</th>
                        <td>{{$general_info->organization_name}}</td>
						
                      </tr>
                      <tr>
                        <th>Faculty</th>
                        <td>{{$general_info->faculty}}</td>
						
						 <th>Job Title</th>
                        <td>{{$general_info->job_title}}</td>
						
						 <th>Date of Validity</th>
                        <td>{{$general_info->date_of_validity}}</td>
						
						 <th>Contact</th>
                        <td>{{$general_info->contact}}</td>
                      </tr>
                      <tr>
                        <th>University Type</th>
                        <td>{{$general_info->university_type}}</td>
						
						 <th>Hospital Type</th>
                         <td>{{$general_info->hospital_type}}</td>
						
						 <th>Public Address</th>
                        <td>{{$general_info->public_address}}</td>
				
						
                      </tr>
                      <tr>
                        <th>University Name</th>
                        <td>{{$general_info->university_name}}</td>
						
						<th>Hospital Name</th>
                        <td>{{$general_info->hospital_name}}</td>
						
						<th>Private Address</th>
                        <td>{{$general_info->private_address}}</td>
                      </tr>
                      <tr>
                        <th>From Date</th>
                        <td>{{$general_info->u_from_date}}</td>
						
						 <th>Job: From Date</th>
                        <td>{{$general_info->job_from_date}}</td>
						 <th>Training Type</th>
                        <td>{{$general_info->training_type}}</td>
                      </tr>
                      <tr>
                        <th>To Date</th>
                        <td>{{$general_info->u_to_date}}</td>
						
						<th>Job : To Date</th>
                        <td>{{$general_info->job_to_date}}</td>
						
						
						<th>Training : From Date</th>
                        <td>{{$general_info->t_from_date}}</td>
                      </tr>
					  
					  
                      
                      
                     
                      
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>

        </div>
    </div>
  </div>
       
</div>

  </div>






       






                        
                  <hr>
                 
                  
                  
                      
                  
                  
      
      
      </div>

  </div> 
  </div>
  <!-- <div class="col-md-1 col-sm-2 col-xs-12">

    

  </div> -->
  </div>


      

  </form>


  @endsection()

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


