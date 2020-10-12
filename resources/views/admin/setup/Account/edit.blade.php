@extends('admin-layout.app',['title'=>'Update Location'])
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


	

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
					<div class="x_title">
							<h2 style="padding-bottom:5px">Edit Doctor Information</h2>
							<div class="clearfix"></div>
					</div>

					<div class="x_content">
		<form  action="{{'/admin_doctor/'.$doctor_info->id}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data" files="true">

			<div class="panel-body">
				
				{{ csrf_field() }}
                {{method_field('put')}}

	       <fieldset>


					<div class="row" style="margin-top:20px">
    <!-- <div class="col-md-1 col-sm-2 col-xs-12">

    </div> -->
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" >
        <div class="x_title">
            <a href="/admin_doctor" ><i class="fa fa-arrow-left"></i> {{__('ui.back')}}</a>
            <!--<a id="printButton" href="{{'printcertificate/'.$doctor_info->reg_no.'/certificate'}}"  class="btn btn-primary  pull-right"><i class="fa fa-print"></i> {{__('ui.print')}}</a>-->
          
        
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

            
         <table class="table   table-bordered table-condensed" style="position:inline;">
                    <thead>
                      <tr>
                        <td  class="btn-primary">Registration Number #</td>      
                        <td class="btn-primary"><input id="reg_no" name="reg_no"  tabindex="2" readonly type="text" value="{{$doctor_info->reg_no}}" class="form-control input-md"></td>
                      
					  <td rowspan="4" style="text-align:center">
                            <img src="{{Storage::url('public/documents/'.$doctor_info->image)}}" id="imgDisplayarea"  style="width:200px;height:200px;" />
                            
                        </td>
                      </tr>
                      <tr>
                        <td width="40%">Name</td>
                        <td width="50%"><input id="name" name="name" autofocus tabindex="1" required type="text" value="{{$doctor_info->name}}" class="form-control input-md"></td>
                      </tr>
                      <tr>
                        <th>Surname</th>
                        <td><input id="surname" name="surname" tabindex="3" required  type="text" value="{{$doctor_info->surname}}" class="form-control input-md"></td>
                      </tr>
                      <tr>
                        <th>Father Name</th>
                        <td><input id="father_name" tabindex="4" required name="father_name"  type="text" value="{{$doctor_info->father_name}}" class="form-control input-md"></td>
                      </tr>
                      <tr>
                        <th>Grand Father Name</th>
                        <td><input id="g_fathername" tabindex="5" required  name="g_fathername"  type="text" value="{{$doctor_info->g_fathername}}" class="form-control input-md"></td>
                      		 {{$doctor_info->image}}
                      	<td><input value="{{$doctor_info->image}}"   onchange="document.getElementById('imgDisplayarea').src=window.URL.createObjectURL(this.files[0])" id="image"    name="image"  type="file" /></td>
							
					 </tr>
                      <tr>
                        <th>Nationality</th>
                        <td>

                        	<select id="nationality" tabindex="7" required name="nationality" class="form-control" >
                                  <option value="{{$doctor_info->nationality}}" selected>{{$doctor_info->nationality}}</option>
                                  
                                  @foreach($nationalities as $nationality)
                                    <option value="{{$nationality->nationality}}">{{$nationality->nationality}}</option>
                                  @endforeach()
                                  
                          </select> 

                        </td>
                        
                      </tr>
                      <tr>
                        <th>NIC</th>
                        <td><input id="nic" name="nic" tabindex="8" required type="text" value="{{$doctor_info->nic}}" class="form-control input-md"></td>
                      	
                      </tr>
                      <tr>
                        <th>Gender</th>
                        <td>

                        	<select id="gender" tabindex="6" required name="gender" class="form-control" >
                                  <option value="{{$doctor_info->gender}}" selected>{{$doctor_info->gender}}</option>
                                  
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                          </select>

                        </td>
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
                      <tr style="display:none">
                      	<td class="btn-primary"><input id="reg_no" name="reg_no"  tabindex="2" readonly type="text" value="{{$education_info->reg_no}}" class="form-control input-md"></td>
                      </tr>

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
                      
                      <tr>
                        <td width="10%">

                        <select name="degree"   class="form-control product" >
                          <option value="{{$education_info->degree}}" selected >{{$education_info->degree}}</option>
                          @foreach($medical_degrees as $medical_degree)
                          <option value="{{$medical_degree->degree}}" >{{$medical_degree->degree}}</option>
                          @endforeach()
                          
                         
                      </select>
                  	</td>
                       
                        <td><input type="date"  name="from_date" value="{{$education_info->from_date}}" class="form-control"/></td>
                        <td><input type="date"  name="to_date" value="{{$education_info->to_date}}" class="form-control"/></td>
                        <td><select name="university"    class="form-control product" >
                          <option value="{{$education_info->university}}" >{{$education_info->university}}</option>
                          @foreach($universities as $university)
                          <option value="{{$university->name}}" >{{$university->name}}</option>
                          @endforeach()
                         
                      </select></td>
                        <td><input type="text" class="form-control" value="{{$education_info->address}}"  name="address"/> </td>
                        <td><input type="text" class="form-control" value="{{$education_info->contact}}" name="contact"/> </td>
                       <td><u><a href="{{Storage::url('public/documents/'.$education_info->file_name)}}" style="color:blue" target="_blank">{{$education_info->file_name}}</a>
						<input type="file" class="form-control quantity"  name="file_name[]"/>
					   </u></td>
						<td> </td>
					  </tr>
                     
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
                    <!--  <tr style="background: rgba(38, 185, 154, 0.88);color:white">
                        <th style="text-align:left">#No</th>      
                        <td>{{$university_info->reg_no}}</td>
                      </tr>
					 -->
                      <tr>
                        <th>Profession</th>
		                    <td><select id="profession" tabindex="1" required name="profession"   class="form-control input-md">   
		                      <option value="{{$university_info->profession}}" selected>{{$university_info->profession}}</option>
		                      @foreach($professions as $profession)
		                      <option value="{{$profession->profession}}">{{$profession->profession}}</option>

		                      @endforeach()
		                      

		                  <select>
		                  </td>
                      </tr>
                      <tr>
                        <th>Medical Degree</th>
                        <td>
                        	<select id="medical_degree" tabindex="2" required name="medical_degree"   class="form-control input-md">   
		                      <option value="{{$university_info->medical_degree}}" selected>{{$university_info->medical_degree}}</option>
		                      
		                      @foreach($medical_degrees as $medical_degree)
		                      <option value="{{$medical_degree->degree}}">{{$medical_degree->degree}}</option>

		                      @endforeach()
                      
                  			<select>
                        </td>
                      </tr>
                      <tr>
                        <th>Faculty</th>
                        <td><input id="faculty_name"  name="faculty_name"  tabindex="" type="text" value="{{$university_info->faculty}}" class="form-control input-md"></td>
                      </tr>
                      <tr>
                        <th>University Type</th>
                        <td>
                        	<select id="university_type" tabindex="4" required  name="university_type"   class="form-control input-md">   
		                      <option value="{{$university_info->university_type}}">{{$university_info->university_type}}</option>
		                      <option value="Government">Govenment</option>
		                      <option value="Private">Private</option>
		                      <option value="Foreign">Foreign</option>
                  			<select>
                        </td>
                      </tr>
                      <tr>
                        <th>University Name</th>
                        <td>
                        	<select id="university_name" tabindex="5" required  name="university_name"   class="form-control input-md">   
		                      <option value="{{$university_info->university_name}}">{{$university_info->university_name}}</option>
		                      @foreach($universities as $university)
		                      <option value="{{$university->name}}">{{$university->name}}</option>

		                      @endforeach()
                        
                      

                  			<select>
                        </td>
                      </tr>
                      <tr>
                        <th>From Date</th>
                        <td><input id="u_from_date" tabindex="6" required name="u_from_date" type="date" value="{{$university_info->u_from_date}}" class="form-control input-md"></td>
                      </tr>
                      <tr>
                        <th>To Date</th>
                        <td><input id="u_to_date" tabindex="6" required name="u_to_date" type="date" value="{{$university_info->u_to_date}}" class="form-control input-md"></td>
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

					

					</fieldset>
						        

	        

			</div>

			<div class=" text-center">
				
				<div class="form-group">
					
	            <input type="submit" class="btn btn-primary" value="{{__('ui.save')}}">
	            <a href="/admin_doctor" class="btn btn-danger">{{__('ui.cancel')}}</a>
	         </div>

			</div>


		</form>
					</div>
			</div>
		</div>
	</div>
		
	

		

	


	
	



@stop