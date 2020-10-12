  @extends('layouts.app')

  
	
	  
	




  @section('custom_css_links')

  <style>
    table td,table th{
      text-align:center;
    }

     @if(App::getLocale()=='fa')
			 label{
				 text-align:left !important;
			 }
	   @endif()
  </style>



  @endsection()
  @section('page-content')

<form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{'/product_recieve'}}">

{{csrf_field()}}
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel  panel-default" >
        <div class="x_title">
          <div class="text-center">
              <h3 class="text-center" style="display:inline" >{{__('ui.product_recieving_form')}}</h3>
               <a href="{{'/product_recieve'}}" class="btn btn-default pull-left " ><i class="fa fa-arrow-left"></i> {{__('ui.back')}}</a>
          </div>
        
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
       
          <div class="x_panel">
              <div class="x_title">
                  <h4>{{__('ui.master_form')}}</h4>
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">
                 
                  <fieldset>

                  <div class="row">
                    <div class="col-md-4">
                         <div class="form-group {{$errors->has('code')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="code">{{__('ui.code')}}</label>  
                          <div class="col-md-7">
                          <input id="code" readonly name="code" type="text" value="{{$code_value}}" class="form-control input-md">   
                          </div>
                          </div>
                    </div>

                     <div class="col-md-4">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('receive_date')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="order_date">{{__('ui.recieve_date')}}</label>  
                          <div class="col-md-7">
                          <input id="receive_date"  readonly name="receive_date"  type="text" value="{{$receive_date}}" class="form-control input-md">
                              
                          </div>
                          </div>
                      </div>
                       

                       

                      
                  </div>

                  <div class="row">

                   <div class="col-md-4">
                         <div class="form-group{{$errors->has('class_id')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="textinput">{{__('ui.class')}}</label>  
                          <div class="col-md-7">
                           <select id="class_id" name="class_id" class="form-control" >
                                  <option value=""></option>
                                  @foreach($classes as $class)
                                  <option value="{{$class->id}}">{{$class->name}}</option>
                                  @endforeach()
                                
                          </select>
                          </div>
                          </div>
                       </div>

                     <div class="col-md-4">
                         <div class="form-group{{$errors->has('status_id')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="textinput">{{__('ui.status')}}</label>  
                          <div class="col-md-7">
                           <select id="status_id" name="status_id" class="form-control" >
                                  <option value=""></option>
                                  @foreach($status as $st)
                                  <option value="{{$st->id}}">{{$st->status}}</option>
                                  @endforeach()
                                
                          </select>
                          </div>
                          </div>
                       </div>

                  
                  </div>

                
                     
                     

                     

                    
                      
                
                      

                    <div class="row">

                     <div class="col-md-4">
                           <!-- Text input-->
                          <div class="form-group{{$errors->has('company_id')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="textinput">{{__('ui.against')}}</label>  
                          <div class="col-md-7">
                           <select id="order_type"  class="form-control">
                                  <option value="1" selected>
                                  @if(App::isLocale('en'))
                                  Direct
                                  @elseif(App::isLocale('fa'))
                                    مستقیم

                                  @endif()
                                  </option>
                                 
                                  <option value="2">
                                   @if(App::isLocale('en'))
                                   Product  Order 
                                  @elseif(App::isLocale('fa'))
                                    فرمایش جنس
                                  @endif()
                                  </option>
                          </select>
                          </div>
                          </div>
                       </div>
                      
                       <div class="col-md-4">
                          <div class="form-group{{$errors->has('order_id')?'has-error':''}}">
                          <label class="col-md-5  control-label" for="textinput">{{__('ui.order_number')}}</label>  
                          <div class="col-md-7">
                           <select id="order_id" disabled  name="order_id" class="form-control">
                                  <option value=""></option>
                                  @foreach($orders as $order)
                                  <option value="{{$order->id}}">{{$order->code}}</option>
                                  @endforeach()
                                
                          </select>
                          </div>
                          </div>
                       </div>

                         <div class="col-md-4">
                         <div class="form-group{{$errors->has('company_id')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="textinput">{{__('ui.company')}}</label>  
                          <div class="col-md-7">
                           <select id="company_id" name="company_id" class="form-control" disabled value="{{old('company_id')}}">
                                  <option value=""></option>
                                  @foreach($companies as $company)
                                  <option value="{{$company->id}}">{{$company->name}}</option>
                                  @endforeach()
                                
                          </select>
                          </div>
                          </div>
                       </div>




                       
                   </div>
                    
                      <div class="row">
                      <div class="col-md-4">
                           <!-- Text input-->
                          <div class="form-group {{$errors->has('boardHead')?'has_error':''}}">
                          <label class="col-md-5 control-label" for="boardHead">{{__('ui.board_head')}}</label>  
                          <div class="col-md-7">
                          <input id="boardHead" value="{{old('boardHead')}}"  required name="boardHead" type="text"  class="form-control input-md">   
                          </div>
                          </div>
                       </div>
                      <div class="col-md-4">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('firstMember')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="firstMember"> {{__('ui.first_member')}}</label>  
                          <div class="col-md-7">
                          <input id="firstMember" value="{{old('firstMember')}}" required  name="firstMember" " type="text" placeholder="" class="form-control input-md">
                              
                          </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                            <!-- Text input-->
                          <div class="form-group{{$errors->has('secondMember')?'has-error':''}}">
                          <label class="col-md-5 control-label" for="secondMember">{{__('ui.second_member')}}</label>  
                          <div class="col-md-7">
                          <input id="secondMember" value="{{old('secondMember')}}"  required  name="secondMember"  type="text" placeholder="" class="form-control input-md">
                              
                          </div>
                          </div>
                      </div>

                       
                      
                  </div>
                      <div class="row">

                        
              
                          <div class="col-md-4">
                           <!-- Text input-->
                              <div class="form-group">
                              <label class="col-md-5 control-label" for="textinput" >{{__('ui.comment')}}</label>  
                              
                              <div class="col-md-7">
                                  <textarea class="form-control" id="textarea" cols="30" name="comment" >{{old('comment')}}</textarea>
                              </div>
                              </div>
                             
                        
                       </div>
                       <div class="col-md-4">
                            <div class="form-group">
                              <label class="col-md-5 control-label" for="textinput" >{{__('ui.attachment')}}</label>  
                              
                              <div class="col-md-7">
                                  <input type="file"  id="file_name"  name="file_name"/>
                              </div>
                              </div>
                       </div>
                    
                      
                     
                   </div>
               

                


      

                  </fieldset>
                  

              
              </div>
          </div>
      
      
      </div>

  </div> 
  <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
              <div class="x_title">
                  <h4>{{__('ui.details_form')}}</h4>

                 @if(Session::has('product_message'))
                  <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Error!</strong> {{Session::get('product_message')}}
                  </div>
                 @endif()
                 
              </div>
              <div class="x_content">
              <div class="table-responsive">
            <table class="table  table-bordered table-condensed table-hover table-striped">
              <thead>
                <tr style="background:lavender;">
                  <th >{{__('ui.number')}}</th> 
      
                  <th  > {{__('ui.name')}}</th>
                      
                  <th>{{__('ui.model')}} </th>
                   <th >{{__('ui.brand')}}</th>  
                   <th >{{__('ui.unit_measurement')}}</th>   
                 <th >{{__('ui.location')}}</th> 
                  
                  <th >{{__('ui.quantity')}}</th>
                  <th >{{__('ui.price')}} </th>
                

                </tr>
              </thead>
              <tbody>


                  @for($i=0;$i<=3;$i++) 

                    @if($i==3)

                        <tr class="table_rows" style="display:none">

                      <td style="vertical-align: middle;text-align: center;">{{$i+1}}</td>
                        
                     
                      <td style="width:20%">
                      <select name="product_id[]"    class="form-control product" >
                          <option ></option>
                         
                      </select></td>
                        <td style="width:15%"><input type="text" readonly   class=" form-control brand "/> </td>
                        <td style="width:15%"><input type="text" readonly class="form-control model"/></td>
                      
                       
                      <td>
                        <input type="text" readonly class="form-control unit" name="unit_measurement[]">
                      </td>
                      <td style="width:15%">
                      <select name="location_id[]"     class="form-control" >
                          <option ></option>
                          @foreach($locations as $location)
                            <option value="{{$location->id}}">{{$location->name}}</option>
                          @endforeach()
                      </select></td>
                      <td><input type="text" class="form-control quantity" name="quantity[]"/> </td>
                       <td><input type="text" class="form-control quantity" name="price[]"/> </td>

                     

                    </tr>




                    @else
                    <tr class="table_rows">

                      <td style="vertical-align: middle;text-align: center;">{{$i+1}}</td>
                      
                     
                      <td style="width:20%">
                      <select name="product_id[]"    class="form-control product" >
                          <option ></option>
                         
                      </select></td>
                    

                       <td style="width:15%"><input type="text" readonly   class=" form-control brand "/> </td>
                      <td style="width:15%"><input type="text" readonly class="form-control model"/></td>
                       
                      <td>
                        <input type="text" readonly class="form-control unit" name="unit_measurement[]">
                      </td>
                       <td style="width:15%">
                      <select name="location_id[]"     class="form-control" >
                          <option ></option>
                          @foreach($locations as $location)
                            <option value="{{$location->id}}">{{$location->name}}</option>
                          @endforeach()
                      </select></td>
                      <td><input type="text" class="form-control quantity" name="quantity[]"/> </td>
                       <td><input type="text" class="form-control quantity" name="price[]"/> </td>

                     

                    </tr>

                    @endif()

              

                 @endfor()  

                  
                 
              
              
                
              </tbody>
            </table>

              </div>
     
     <button type="button" id="addNewRow" style="width:5%" 
             @if(App::isLocale('en'))
             class="btn btn-default pull-left "
             @elseif(App::isLocale('fa'))
             class="btn btn-default pull-right "
             @endif()
              ><i class="fa fa-plus"></i></button>
               
              <input type="submit"  

                @if(App::isLocale('en'))
              class="btn btn-primary pull-right "
              @elseif(App::isLocale('fa'))
              class="btn btn-primary pull-left "
              @endif()
               value="{{__('ui.save')}}" style="width:15%"/>
            
            


              </div>
          </div>
      
      
      </div>

  </div>

        </div>

      </div>

    </div>
  </div>

 

  </form>


  @endsection()

  @section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){


        $('#class_id').on('change',classTypeChanged);
        $('.product').on('change',productChanged);
        $('#order_type').on('change',orderTypeChanged);

        function classTypeChanged(){
            $class_id=$('#class_id').val();
            if(!$class_id){
              return;
            }else{
              $.ajax({
                method:'get',
                url:'/product_recieve/create/'+$class_id,
                success:function(data){
                   var result=JSON.parse(data);
                   var products=$('.product');
                   products.empty();
                   products.append('<option></option>');
                   for(i=0;i<result.length;i++){
                      products.append('<option value='+result[i].id+'>'+result[i].name+'</option>');
                   }
                }
              });
            }
        }

        //This is going to handle order type 
        //If order_type is direct it will disable the order_id select element 
        //And also the company_id select element
       


        function orderTypeChanged(){
             var currentItemSelectedValue=$(this).val();
            if(currentItemSelectedValue==2){
                $('#order_id').prop({disabled:''});
                $('#company_id').prop({disabled:''});
            }else{
              $('#order_id').prop({disabled:'disabled'});
              $('#company_id').prop({disabled:'disabled'});
              $('#company_id option[value=""]').prop({selected:'selected'});
              $('#order_id option[value=""]').prop({selected:'selected'});
            }
        }


        
         var numberTracker=3;

        
         $('#addNewRow').on('click',addRowButtonClicked);

          function addRowButtonClicked(){
               numberTracker+=1;
               $('.table_rows:nth-child(4)').clone(true,true).appendTo('tbody');
               $('.table_rows:last-child').css({display:'table-row'});
               $('.table_rows:last-child td:nth-child(1)').html(numberTracker);
          }


      //To find product and add change listener event to it
      //In order to detect the current selected product index 
     function productChanged(){

        var parent= $(this).parent().parent();
        product_id=$(this).val();
       

        if(!product_id){
  
           return;
     
        }else{
          parent.attr({class:'selected_parent'});
           $.ajax({
           method:'get',
           url:'/show_selected_product_brand_and_model_and_unit/'+product_id,
           success:function(data){
            
    

            
      
            var brand= $('.selected_parent td:nth-child(3) input');
             var model=$('.selected_parent td:nth-child(4) input');
             var unit=$('.selected_parent td:nth-child(5) input');
             //This json data contains both product and unit_measurement
             //for selected product 
             var dataObj=JSON.parse(data);
      
    
              model.val(dataObj.model);
              brand.val(dataObj.brand);
              unit.val(dataObj.unit_measurement.name);
              parent.removeAttr('class');

           },
           error:function(err){
             alert("Something went wrong");
           }
         });  
     }

    }
     


    });



  
   

    </script>


  @endsection()
