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
    
    </style>
</head>
<body>
@if(Auth::user()->lastName == "CommissionDirector")
<div class="bgOverLay">
<div class="loader">


  

</div>
</div>


<div class="printable" >

         
 <center>    
<div class="x_title text-center" style="padding:5px">
                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
														
														<table  width="100%" 	>
                                                          <tr>
														  
                                                            <td><img src="{{URL::asset('images/afghanistan_logo.png')}}" style="width:100px;height:100px;border-radius:40%"></img>
															</td>
                                                            <td align="center"><b>
															<b>جمهوری اسلامی افغانستان</br>وزارت تحصیلات عالی</b>
															<br/>
															<b>د افغانستان اسلامی حمهوریت</br>د لوړو زده کړو وزارت</b>
															</br>
															<b>ISLAMIC REPUBLIC OF AFGHANISTAN </br>MINISTRY OF HIGHER EDUCATION</b>
															</br>
															</td>
															
															<td><img src="{{URL::asset('images/images.jpg')}}" style="width:100px;height:100px;border-radius:50%"></img>
															</td>
															
                                                          </tr>
                                                          
                                                        </table>
       
                                                        <div class="clearfix"></div>
                                                    </div> 
<table border="2px solid" style="margin-top: 5px;">
<tbody border="1px">
<tr style="height: 35px;">
<td style="height: 35px;" colspan="4" width="481">
<p>مشخصات دارنده سند</p>
</td>
</tr>
<tr style="height: 35px;">
<td style="height: 35px;" width="115">
<p>نام</p>

</td>

<td style="height: 35px;" width="114">
<p>تخلص</p>
</td>
<td style="height: 35px;" width="120">
<p>نام پدر</p>
</td>
<td style="height: 35px;" width="132">
<p>نمبر تذکره /پاسپورت</p>
</td>
</tr>
<tr style="height: 35px;">
<td style="height: 35px;" width="115">
<p>{{$registred_doctor->name}}</p>
</td>
<td style="height: 35px;" width="114">
<p>{{$registred_doctor->surname}}</p>
</td>
<td style="height: 35px;" width="120">
<p>{{$registred_doctor->father_name}}</p>
</td>
<td style="height: 35px;" width="132">
<p>{{$registred_doctor->nic}}</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>مشخصات دیپلوم و ترانسکرپت</p>
<table border="2px solid" style="margin-top: 5px;">
<tbody>
<tr>
<td width="83">
<p>نمپردیپلوم</p>
</td>
<td width="96">
<p>نمبر ترانسکرپت</p>
</td>
<td width="96">
<p>کشور و پوهنتون صادر کننده سند</p>
</td>
<td width="120">
<p>سویه ونوعیت تحصیل</p>
</td>
<td width="90">
<p>دوره تحصیل</p>
</td>
</tr>
<tr>
<td width="83">
<p>{{$registred_doctor->g_diploma}}</p>
</td>
<td width="96">
<p>{{$registred_doctor->g_transcript}}</p>
</td>
<td width="96">
<p>{{$education_qualification->university}} - {{$registred_doctor->g_fathername}}</p>
</td>
<td width="120">
<p>  {{$education_qualification->degree}} - ماستری با تیزس</p>
</td>
<td width="90">
<p>از {{$education_qualification->from_date}} - تا {{$education_qualification->to_date}}</p>
</td>
</tr>
<tr>
<td width="83">
<p>Grade</p>
</td>
<td colspan="2" width="192">
<p>Gpa</p>
</td>
<td colspan="2" width="210">
<p>نوع سند تحصیلی</p>
</td>
</tr>
<tr>
<td width="83">
<p>+A</p>
</td>
<td colspan="2" width="192">
<p>{{$registred_doctor->g_gpa}}</p>
</td>
<td colspan="2" width="210">
<p>{{$registred_doctor->g_type}}</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>فیصله کمیسیون</p>
<table border="2px solid" style="margin-top: 5px;">
<tbody>
<tr>
<td width="486">
<p> سند فوق الذکر به تاریخ {{$registred_doctor->reg_date}}  درج پروتوکول شماره {{$registred_doctor->reg_no}} کمیسیون عالی ارزیابی اسناد تحصیلی خارج مرز ارزیابی و به سویه .............................. تأیید و اعتبار بخشیده شد. </p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<table border="2px solid" style="margin-top: 5px;">
<tbody>
<tr>
<td width="258">
<p>امضای رئیس کمیسیون عالی ارزیابی اسناد تحصیلی خارج مرز</p>
</td>
<td width="228">
<p>امضای رئیس عمومی انسجام امور اکادمیک</p>
</td>
</tr>
<tr>
<td width="258">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</td>
<td width="228">
<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>

</center>
                                                        

                                                       



          
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
@else
<center>You are not allowed</center>
@endif
</body>
</html>





