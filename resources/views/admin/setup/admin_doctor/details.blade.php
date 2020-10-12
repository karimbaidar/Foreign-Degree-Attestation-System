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
              <h3 class="text-center" >{{__('ui-list.studentinformation')}}</h3>
          </div>
        
          <div class="clearfix"></div>
        </div>
        <div class="x_content">   

            
         <table class="table   table-bordered table-condensed table-hover table-striped" style="position:inline">
                    <thead>
                      <tr>
                        <th style="text-align:center;" class="btn-primary">{{__('ui-list.no')}}</th>      
                        
                        
                        <td class="btn-primary">{{$registred_doctor->reg_no}}</td>
                        <td rowspan="8">
                 
                           <!-- <img src="{{ asset('storage/app/public/images/'.$registred_doctor->image)}}" style="width:220px;height:220px;" />-->
							<img src=" {{ asset('storage/documents/'.$registred_doctor->image) }}" style="width:220px;height:220px;" />
             
                        </td>
                      </tr>
                      <tr>
                        <th width="40%">{{__('ui-list.name')}}</th>
                        <td width="50%">{{$registred_doctor->name}}</td>
                      </tr>
                      <tr>
                        <th>{{__('ui-list.surname')}}</th>
                        <td>{{$registred_doctor->surname}}</td>
                      </tr>
                      <tr>
                        <th>{{__('ui-list.fatherName')}}</th>
                        <td>{{$registred_doctor->father_name}}</td>
                      </tr>
                      <tr>
                        <th>{{__('ui-list.issueingCountry')}}</th>
                        <td>{{$registred_doctor->issueingCountry}}</td>
                      </tr>
                      <tr>
                        <th>{{__('ui-list.diplomaNumber')}}</th>
                        <td>{{$registred_doctor->DiplomaNumber}}</td>
                      </tr>
                      <tr>
                        <th>{{__('ui-list.nic')}}</th>
                        <td>{{$registred_doctor->nic}}</td>
                      </tr>
                      <tr>
                        <th>{{__('ui-list.transcriptNumber')}}</th>
                        <td>{{$registred_doctor->TranscriptNumber}}</td>
                      </tr>
                      
                     
                      
                      <tr>
                        <th>{{__('ui-list.Grade')}}</th>
                        <td>{{$registred_doctor->Grade}}</td>
                      </tr>
                      <tr>
                        <th>{{__('ui-list.GPA')}}</th>
                        <td>{{$registred_doctor->GPA}}</td>
                      </tr>
                      
                       <tr>
                        <th>{{__('ui-list.typeofEducation')}}</th>
                       @if($registred_doctor->typeEducation == 1)
                        <td>{{__('ui-list.regular')}}</td>
                        @elseif($registred_doctor->typeEducation == 2)
						<td>{{__('ui-list.NotRegular')}}</td>
						@elseif($registred_doctor->typeEducation == 3)
						<td>{{__('ui-list.partiallyRegular')}}</td>
						@endif
                       
                      </tr>
    

          <tr>
                        <th>{{__('ui-list.universityID')}}</th>
                        <td>{{$registred_doctor->UniID}}</td>
          </tr>
					  
          <tr>
                        <th>{{__('ui-list.rollNum')}}</th>
                        <td>{{$registred_doctor->RollNum}}</td>
          </tr>

          <tr>
                        <th>{{__('ui-list.personalPhone')}}</th>
                        <td>{{$registred_doctor->PersonalCellPhone}}</td>
          </tr>

          <tr>
                        <th>{{__('ui-list.studyDuration')}}</th>
                        <td>{{$registred_doctor->StudyDuration}}</td>
          </tr>
					  
          <tr>
                        <th>{{__('ui-list.PAddress')}}</th>
                        <td>{{$registred_doctor->PAddress}}</td>
          </tr>

          <tr>
                        <th>{{__('ui-list.CAddress')}}</th>
                        <td>{{$registred_doctor->CAddress}}</td>
          </tr>

          <tr>
		  
                        <th>{{__('ui-list.fieldofEducation')}}</th>
						
						
                        <td>{{$registred_doctor->FEducation}}</td>
          </tr>
		  
		  <tr>
		  
                        <th>{{__('ui-list.typeofscholarship')}}</th>
					
						@if($registred_doctor->typeScholarship == 1)
                        <td>{{__('ui-list.Government')}}</td>
						@elseif($registred_doctor->typeScholarship == 2)
						<td>{{__('ui-list.Private')}}</td>
						
						@endif
          </tr>
		  
		   <tr>
		  
                        <th>{{__('ui-list.EducationalDocument')}}</th>
						
						@if($registred_doctor->typeEducation == 1)
                        <td>{{__('ui-list.original')}}</td>
						@elseif($registred_doctor->typeEducation == 2)
						<td>{{__('ui-list.temporary')}}</td>
						
						@endif
          </tr>

          <tr>
                        <th>{{__('ui-list.email')}}</th>
                        <td>{{$registred_doctor->PersonalEmail}}</td>
          </tr>

         
          <tr>
                        <th>{{__('ui-list.pob')}}</th>
                        <td>{{$registred_doctor->Pbirth}}</td>
          </tr>

          <tr>
                        <th>{{__('ui-list.dob')}}</th>
                        <td>{{$registred_doctor->dob}}</td>
          </tr>

          <tr>
                        <th>{{__('ui-list.AYear')}}</th>
                        <td>{{$registred_doctor->AYear}}</td>
          </tr>
          <tr>
                        <th>{{__('ui-list.GYear')}}</th>
                        <td>{{$registred_doctor->GYear}}</td>
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
              <h3 class="text-center" >{{__('ui-list.educationalqualification')}}</h3>
          </div>
        
          <div class="clearfix"></div>
        </div>
        <div class="x_content">   


                  <table class="table   table-bordered table-condensed table-hover table-striped" style="position:inline">
                    <thead>
                      
                      <tr style="background: rgba(38, 185, 154, 0.88);color:white">
                        <th style="text-align:left">{{__('ui-list.degree')}}</th>  
                        <th>{{__('ui-list.FromDate')}}</th>
                        <th>{{__('ui-list.ToDate')}}</th>
                        <th>{{__('ui-list.university')}}</th>
                        <th>{{__('ui-list.address')}}</th>
                        <th>{{__('ui-list.contact')}}</th>
                        <th>{{__('ui-list.files')}}</th>
                      </tr>
                      
                      
                    </thead>
                    <tbody>
                 
                      <tr>
                        <td>{{$registred_doctor->degree}}</td>  
                        <td>{{$registred_doctor->from_date}}</td>
                        <td>{{$registred_doctor->to_date}}</td>
                        <td>{{$registred_doctor->university}}</td>
                        <td>{{$registred_doctor->PersonalPhon2}}</td>
                        <td>{{$registred_doctor->PersonalEmail2}}</td>
               
                        <td>
                            
                            <!--<a href="{{ asset('storage/app/public/images/'.$registred_doctor->file_name)}}" target="_blank">{{$registred_doctor->file_name}}</a>-->
                             <a href=" {{ asset('storage/documents/'.$registred_doctor->file_name) }}" target="_blank">{{$registred_doctor->file_name}}</a>
                            
                        
                        </td>
                      </tr>
                    
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


