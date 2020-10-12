@extends('layouts.app')


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

<form class="form-horizontal">


  <div class="row" style="margin-top:50px">
    <div class="col-md-1 col-sm-2 col-xs-12">

    </div>
    <div class="col-md-10 col-sm-12 col-xs-12">
      <div class="x_panel" >
        <div class="x_title">
            <a href="/doctor" ><i class="fa fa-arrow-left"></i> {{__('ui.back')}}</a>
            <a id="printOrder" href=""  class="btn btn-default  pull-right"><i class="fa fa-print"></i> {{__('ui.print')}}</a>
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
                            <img src="{{Storage::url('public/documents/'.$registred_doctor->image)}}" style="width:220px;height:220px;" /></td>
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

    <div class="col-md-6 col-sm-12 col-xs-12">
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
                        <td>{{$doctor_lists->degree}}</td>
                      </tr>
                      <tr>
                        <th>From Date</th>
                        <td>{{$doctor_lists->from_date}}</td>
                      </tr>
                      <tr>
                        <th>To Date</th>
                        <td>{{$doctor_lists->to_date}}</td>
                      </tr>
                      <tr>
                        <th>Univeristy</th>
                        <td>{{$doctor_lists->university}}</td>
                      </tr>
                      <tr>
                        <th>Address</th>
                        <td>{{$doctor_lists->address}}</td>
                      </tr>
                      <tr>
                        <th>Contacts</th>
                        <td>{{$doctor_lists->contact}}</td>
                      </tr>
                      <tr>
                        <th>files</th>
                        <td><a href="{{Storage::url('public/documents/'.$doctor_lists->file_name)}}">{{$doctor_lists->file_name}}</a></td>
                      </tr>
                      
                      
                      
                     
                      
                    </thead>
                    <tbody>
                      
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
  <div class="col-md-1 col-sm-2 col-xs-12">

    

  </div>
  </div>


      

  </form>


  @endsection()

  


