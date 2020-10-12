@extends('admin-layout.app',['title'=>'Create Location'])
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
 			<div class="col-md-2 col-sm-12 col-xs-12">
 			</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2 style="padding-bottom:5px">Generate Report Based on Specific Date</h2>
							
							<div class="clearfix"></div>
						</div>
					<div class="x_content">
							<br />
						<form  action="{{'/report_generate/'}}" method="post" class="form-horizontal form-label-left">
				
							{{ csrf_field() }}

							<fieldset>



									<div class="col-md-5 col-sm-6 col-xs-12">
                            <!-- Text input-->
									<div class="form-group{{ $errors->has('fromDate') ? ' has-error' : '' }}">
									<label class="col-md-5 control-label" for="order_date">From Date:</label>  
									<div class="col-md-7">
									<input id="fromDate"  tabindex="13"  name="fromDate"  type="Date" value="" class="form-control input-md">
									<small class="text-danger">{{ $errors->first('fromDate') }}</small>
									</div>
									</div>
									</div>
									
							<div class="col-md-5 col-sm-6 col-xs-12">
                           
						   <!-- Text input-->
								<div class="form-group{{ $errors->has('toDate') ? ' has-error' : '' }}">
									<label class="col-md-5 control-label" for="order_date">To Date:</label>  
								<div class="col-md-7">
								<input id="toDate"  tabindex="13"  name="toDate"  type="Date" value="" onblur ="compare();" class="form-control input-md">
                              <small class="text-danger">{{ $errors->first('toDate') }}</small>
								
									<p id="p1"></p>
								</div>
								</div>
							</div>


							
							
							
					<div class="col-md-5 col-sm-6 col-xs-12">		
					<div class="form-group{{ $errors->has('from_date') ? ' has-error' : '' }}">
					<label class="col-md-5 control-label" for="order_date">Hijri-Shamsi : From Date:</label>  
								<div class="col-md-7">
                        <td><input type="text" name="from_date" tabindex = "29"  placeholder="YYYY-MM-DD" name="from_date" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])"  title="The date format should be Day/Month/Year" class=" form-control"/> <span></span> 
						<br/><small class="text-danger">{{ $errors->first('from_date') }}</small>
						</td>
						
						</div>
					</div>
					</div>
					
					
										<div class="col-md-5 col-sm-6 col-xs-12">
						<div class="form-group{{ $errors->has('to_date') ? ' has-error' : '' }}">
						<label class="col-md-5 control-label" for="order_date">Hijri-Shamsi : To Date:</label>  
								<div class="col-md-7">
						<td><input type="text" name="to_date" tabindex = "30"  placeholder="YYYY-MM-DD" name="from_date" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])"  title="The date format should be Day/Month/Year" class="form-control"/>
						<br/><small class="text-danger">{{ $errors->first('to_date') }} </small>
						
						</td>
						
						</div>
					</div>
					</div>
							
				<div class="col-md-5 col-sm-6 col-xs-12">
				<label class="col-md-5 control-label" for="order_date">University:</label>  
				<div class="col-md-7">
					<select  name="university" tabindex="31"   class="form-control product" >
                          <option value="" >{{__('ui-list.selectuniversity')}}</option>
                          @foreach($universities as $university)
						  
							@if($university->Blacklisted == "Yes")
								<option disabled value="{{$university->name}}" >{{$university->name}} - Blacklisted</option>
						    @else
						    <option value="{{$university->name}}" >{{$university->name}}</option>
                         
							@endif
						  
						  
						  @endforeach()
                         
                      </select>
					 </div>
						</div>
								
			<div class="col-md-5 col-sm-6 col-xs-12">
				   <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
				    <label class="col-md-5 control-label" for="order_date">{{__('ui-list.issueingCountry')}}</label>  
					 <div class="col-md-7">
					 <select name="issueingCountry"  tabindex="27"   class="form-control product" >
                          <option value="" >{{__('ui-list.selectCountry')}}</option>
                          @foreach($medical_degrees as $medical_degree)
                          <option value="{{$medical_degree->degree}}" >{{$medical_degree->degree}}</option>
                          @endforeach()
                        </select>
					</div>
				 </div>
			</div>				
		<div class="col-md-5 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date">Degree</label>  
                          <div class="col-md-7">
                          <select id="EducationLevel" tabindex="15"  name="EducationLevel" class="form-control" >
                                  <option value="">{{__('ui-list.selectType')}}</option>
                                  
                                  <option value="Bachelor">Bachelor</option>
								  <option value="Master">Master</option>
                                  <option value="PHD">PHD</option>
                          </select>
                              
                          </div>
                          </div>


           		 </div>			
				 
				 <div class="col-md-5 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date">{{__('ui-list.EducationalDocument')}}</label>  
                          <div class="col-md-7">
                          <select  id="EDocument" tabindex="17"  name="EDocument" class="form-control" >
                                  <option value="">{{__('ui-list.selectType')}}</option>
                                  
                                  <option value="1">Original Document</option>
								  <option value="2">Temporary Certificate</option>
                                
                          </select>
                              
                          </div>
                          </div>


           		 </div>
				 
				  <div class="col-md-5 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date">{{__('ui-list.typeofscholarship')}}:</label>  
                          <div class="col-md-7">
                          <select id="typeScholarship" tabindex="16"  name="typeScholarship" class="form-control" >
                                  <option value="">{{__('ui-list.selectType')}}</option>
                                  
                                  <option value="1">Government Scholarship</option>
                                  <option value="2">Private</option>
                          </select>
                              
                          </div>
                          </div>


           		 </div>
				 
				 <div class="col-md-5 col-sm-6 col-xs-12">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date">{{__('ui-list.typeofEducation')}}</label>  
                          <div class="col-md-7">
                          <select id="typeEducation" tabindex="15"  name="typeEducation" class="form-control" >
                                  <option value="">{{__('ui-list.selectType')}}</option>
                                  
                                  <option value="1">Regular</option>
								  <option value="2">Distance</option>
                                  <option value="3">Semi-Distance</option>
                          </select>
                              
                          </div>
                          </div>


           		 </div>
								
                <div class="form-group">
                     <div class="text-center">
                          
					             	
                          <button type="submit" id="btn" class="btn btn-success">Generate</button>
						  
						  
                          <!--<button type="submit" class="btn btn-info">Save</button>-->

                        </div>
                </div>
					</fieldset>
					</form>
					</div>
				</div>
						        

	  

			</div>
@stop	

<div class="col-md-2 col-sm-12 col-xs-12">
 			</div>
			
			
@section('scripts')

<script>

function compare()
{
    var fDate,lDate;
    fDate = Date.parse(document.getElementById("fromDate").value);
    lDate = Date.parse(document.getElementById("toDate").value);

    if(lDate >= fDate) {
       $('#btn').prop('disabled', false);
        return true;
    }
   document.getElementById("p1").innerHTML = "Click on the empty area to enable Generate button, after selecting the appropriate To Date.";
	alert("To Date should be greater than From Date");
	$('#btn').prop('disabled', true);
    return false;
}


</script>


@endsection


