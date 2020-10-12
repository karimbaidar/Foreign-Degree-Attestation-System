<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
     .loader{
    border: 4px solid #f3f3f3; /* Light grey */
    border-top: 4px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 100px;
    height: 100px;
    position:fixed;
    
    top:40%;
    left:50%;
    
   -webkit-animation: spin 1s linear infinite;
    animation: spin 1s linear infinite;
}

.bgOverLay{
    position:fixed;
    width:100%;
    height:2000px
    ;background:#fff;
    z-index:100;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}
    

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

    
    
    
    </style>
</head>
<body>
    
   
<div class="bgOverLay">
<div class="loader">


  

</div>
</div>


<div class="printable" >

         
              <div class="x_title text-center" style="padding:5px">
                                                        <img src="{{URL::asset('images/logo.png')}}" style="width:100px;height:100px;border-radius:50%"></img>
                                                        <table border="2px solid" width="100%" style="margin-top: 5px;">
                                                          <tr>
                                                         <td><b>    <center>د لوړو زده کړو وزارتد افغانستان اسلامی حمهوریت</center></br></b></br></br></td>
                                                           <center> <td><b>   <center>ISLAMIC REPUBLIC OF AFGHANISTAN </br>Ministry of Higher Education</center></b></br></br></td>
                                                           <center> <td><b>   <center>جمهوری اسلامی افغانستان</br>وزارت تحصیلات عالی افغانستان</center></b></br></br></td>
                                                          </tr>
                                                          
                                                        </table>
                                                       
                                                    </div>


                                                        
														
													<div align="right">
    <table border = "1" width = "100%">
     
        <caption><h4>مشخصات شخصی</h4></caption>         
         <tr>
            <td>نام</td><td>
                
            
                    {{$registred_doctor2->name}}
            
            </td>
         </tr>
         
         <tr>
            <td>ولد</td><td>     {{$registred_doctor2->father_name}}             </td>
         </tr>
           <tr>
            <td>تخلص</td><td>         {{$registred_doctor2->surname}}           </td>
         </tr>
           <tr>
            <td>سویه تحصیلی</td><td>       {{$registred_doctor2->EducationLevel}}             </td>
         </tr>
           <tr>
            <td>پروتوکول</td><td>         {{$registred_doctor2->EducationLevel}}           </td>
         </tr>
           <tr>
            <td>نمبر تذکره</td><td>         {{$registred_doctor2->nic}}           </td>
         </tr>
            <tr>
            <td>نمبر پاسپورت</td><td>       {{$registred_doctor2->nic}}             </td>
         </tr>
          <tr>
            <td>سال شروع و ختم</td><td>         {{$registred_doctor2->AYear}}           </td>
         </tr>
          <tr>
            <td>ایمیل ادرس</td><td>                {{$registred_doctor2->PersonalEmail}}    </td>
         </tr>
          <tr>
            <td>نمبر تماس</td><td>         {{$registred_doctor2->PersonalCellPhone}}           </td>
         </tr>
          <tr>
            <td>نوع سند</td><td>         
            
              @if($registred_doctor2->EDocument == 1)
                                سند اصلی (دیپلوم)
								  
								  @elseif($registred_doctor2->EDocument == 2)
								   سند موقتی (سرتیفیکیت)
								 
								  @endif
            
            
                </td>
         </tr> <tr>
            <td>مدت تحصیل</td><td>               {{$registred_doctor2->StudyDuration}}     </td>
         </tr>
          <tr>
            <td>نوعیت تحصیل</td><td>       
            
              @if($registred_doctor2->typeEducation== 1)
                                   حضوری   
								  @elseif($registred_doctor2->typeEducation == 2)
								   نیمه حضوری
                                  @elseif($registred_doctor2->typeEducation == 3)
								  غیر حضوری  
								  
								  @endif()
            
            
                    </td>
         </tr>
           <tr>
            <td>نوع بورس</td><td>         
            
             @if($registred_doctor2->typeScholarship == 1)
                               {{__('ui-list.Government')}}
								  @elseif($registred_doctor2->typeScholarship == 2)
								   {{__('ui-list.Private')}}
								  @endif()
            
            </td>
         </tr>
         
        
     
     </table>
     
      <table border = "1" width = "100%">
     
          <caption><h4>اعضای کمیسیون</h4></caption>
         
         <tr>
            <td>نمبر دیپلوم</td><td>      {{$registred_doctor1->DiplomaNumber}}              </td>
         </tr>
         
         <tr>
            <td>پوهنتون </td><td>        {{$registred_doctor1->University}}            </td>
         </tr>
           <tr>
            <td>رشته تحصیلی</td><td>           {{$registred_doctor1->EducationField}}         </td>
         </tr>
           <tr>
            <td>پروتوکول</td><td>          {{$registred_doctor1->Protocol}}          </td>
         </tr>
           <tr>
            <td>کمنت </td><td>               {{$registred_doctor1->nondocument}}     </td>
         </tr>
           <tr>
            <td>نوعیت تحصیل</td><td>      
            
                                 @if($registred_doctor1->EducationLevel== 1)
                                   حضوری   
								  @elseif($registred_doctor1->EducationLevel == 2)
								   نیمه حضوری
                                  @elseif($registred_doctor1->EducationLevel == 3)
								  غیر حضوری  
								  
								  @endif()
            
            
                    </td>
         </tr>
           <tr>
            <td>تیزس  </td><td>              
            
              @if($registred_doctor1->Thesis== 1)
                                  با تیزس 
								  @elseif($registred_doctor1->Thesis == 2)
								   بدون تیزس 
                                  @elseif($registred_doctor1->Thesis == 3)
								  پروژه تحقیقی 
								  
								  @endif()
            
           </td>
         </tr>
            <tr>
            <td>نوع تایید</td><td>         
            
            @if($registred_doctor1->AttestationType== 1)
                                  تایید موقت  
								  @elseif($registred_doctor1->AttestationType == 2)
								    تایید دایم
                               
								  
								  @endif()
            
            
                  </td>
         </tr>
            <tr>
            <td>نوع اسناد</td><td>       
            
             @if($registred_doctor1->DocType== 1)
                                  دیپلوم  
								  @elseif($registred_doctor1->DocType == 2)
								    سرتیفکت 
                               
								  
								  @endif()
            
                  </td>
         </tr>
          <tr>
            <td>تایید / رد</td><td>        
              @if($registred_doctor2->Rejection)
             {{$registred_doctor2->Rejection}}   
			 @else
				در حال بررسی				     
                               
								  
		     @endif()
            
            
               </td>
         </tr>
     
     </table>
     
      <table border = "1" width = "100%">
     
         <caption><h4>بخش تخنیکی</h4></caption>
         
         <tr>
            <td>پیام</td><td>           {{$registred_doctor->nondocument}}          </td>
         </tr>
         
         <tr>
            <td>صفحه</td><td>             {{$registred_doctor->page}}        </td>
         </tr>
           <tr>
            <td>جلد</td><td>                {{$registred_doctor->jild}}     </td>
         </tr>
           <tr>
            <td>سویه تحصیلی </td><td>               {{$registred_doctor->EducationType}}      </td>
         </tr>
           <tr>
            <td>موقت</td><td>            
            
                                  @if($registred_doctor->Temporary== "on")
                                  
                                  بلی
                                 
								  @else
								  
								  نخیر
                              
								  
								  @endif()
            
            
               </td>
         </tr>
           <tr>
            <td>دایم</td><td>      
            
            @if($registred_doctor->Permanent== "on")
                                  
                                  بلی
                                 
								  @else
								  
								  نخیر
                              
								  
								  @endif()
            
              </td>
         </tr>
          <tr>
            <td>ایمیل </td><td>              
            
              @if($registred_doctor->Email== "on")
                                  
                                  بلی
                                 
								  @else
								  
								  نخیر
                              
								  
								  @endif()
            
                </td>
         </tr>
          
        
     
     </table>
</div>
                                                        


          
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            
        







       






                        
                  <hr>
                 
                  
                  
                      
                  
                  
      
      
     


</div>


     

 



    <script src="{{URL::asset('js/jquery-1.11.0.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.PrintArea.js')}}"></script>

<script>
  
    $(document).ready(function(){
      
       
      
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = { mode : mode, popClose : close};
        $("div.printable").printArea( options );  

       
     },1000,function(){
       $('.bgOverLay').removeClass('bgOverLay');
       $('.loader').removeClass('loader');
     });
    

</script>


</body>
</html>





