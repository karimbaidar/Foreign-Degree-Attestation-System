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


  <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="x_panel" >
        <div class="x_title btn-info">
            <a href="/doctor" ></i></a>
            <a id="printOrder" href="#"></a>
          <div class="text-center">
              <h3 class="text-center" >University Details</h3>
          </div>
        
          <div class="clearfix"></div>
        </div>
        <div class="x_content">   


          <table class="table   table-bordered table-condensed table-hover table-striped" style="position:inline">
                    <thead>
                      <tr style="background: rgba(38, 185, 154, 0.88);color:white">
                        <th style="text-align:left">#No</th>      
                        <td>{{$general_info->reg_no}}</td>
                      </tr>
                      <tr>
                        <th>Profession</th>
                        <td>{{$general_info->profession}}</td>
                      </tr>
                      <tr>
                        <th>Medical Degree</th>
                        <td>{{$general_info->medical_degree}}</td>
                      </tr>
                      <tr>
                        <th>Faculty</th>
                        <td>{{$general_info->faculty}}</td>
                      </tr>
                      <tr>
                        <th>University Type</th>
                        <td>{{$general_info->university_type}}</td>
                      </tr>
                      <tr>
                        <th>University Name</th>
                        <td>{{$general_info->university_name}}</td>
                      </tr>
                      <tr>
                        <th>From Date</th>
                        <td>{{$general_info->u_from_date}}</td>
                      </tr>
                      <tr>
                        <th>To Date</th>
                        <td>{{$general_info->u_to_date}}</td>
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


