<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <style>


@font-face {
  font-family: B Nazanin;
  src:url('fonts/B Nazanin.ttf') format('truetype');
  font-weight: normal;
  font-style: normal;
}


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
              
              <img src="{{URL::asset('images/header1.jpg')}}"></img>
                                                   
                                                       
              </div>


                                                        
														
													<div>
    <table  width = "100%">
  
         <tr>
            <td >

            <P STYLE="margin-bottom: 0in; line-height: 150%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 150%"><FONT FACE="Arial, serif"><FONT SIZE=5 STYLE="font-size: 20pt"><B>(</B></FONT></FONT><FONT FACE="Arial, serif"><FONT SIZE=5 STYLE="font-size: 20pt"><B>
</B></FONT></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><FONT SIZE=5 STYLE="font-size: 20pt"><B>تائید
سند تحصیلی </B></FONT></FONT></SPAN></FONT><FONT FACE="Arial, serif"><FONT SIZE=5 STYLE="font-size: 20pt"><B><SPAN STYLE="background: #ffff00">{{  $registred_doctor2->EduationLevel == 3 ? ' حضوری' :  'غیر حضوری'  }}</SPAN></B></FONT></FONT><FONT FACE="Arial, serif"><FONT SIZE=5 STYLE="font-size: 20pt"><B>)</B></FONT></FONT></P>
<P ALIGN=JUSTIFY STYLE=" margin-bottom: 0in; line-height: 115%"><br/>
<FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>سند
شماره </B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>(</B></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">{{$registred_doctor1->DiplomaNumber}}</SPAN></B></FONT><FONT FACE="Arial, serif"><B>)</B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>تحصیلی
که از طرف پوهنتون </B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B>
{{$registred_doctor2->university}}</B></SPAN></FONT></SPAN><FONT FACE="B Nazanin"><B> کشور
</B></FONT><FONT COLOR="#c00000"><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B>{{$registred_doctor2->issueingCountry}}</B></SPAN></FONT></SPAN></FONT><FONT FACE="B Nazanin"><B>
به نام محترم </B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B>{{$registred_doctor2->name}}</B></SPAN></FONT></SPAN><FONT FACE="B Nazanin"><B>
فرزند</B></FONT><FONT COLOR="#c00000"><FONT FACE="B Nazanin"><B>
</B></FONT></FONT><FONT COLOR="#c00000"><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B>
{{$registred_doctor2->father_name}}</B></FONT></SPAN></FONT><FONT COLOR="#c00000"><FONT FACE="B Nazanin"><B>
</B></FONT></FONT><FONT FACE="B Nazanin"><B>دارنده تذکره
شماره </B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>(</B></FONT><FONT COLOR="#c00000"><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">{{$registred_doctor2->nic}}</SPAN></B></FONT></FONT><FONT FACE="Arial, serif"><B>)
</B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>صادر
گردیده در جلــسه مورخ </B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">23</SPAN></B></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">/4/1399</SPAN></B></FONT><FONT FACE="Arial, serif"><B>
</B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>کمیسیون
عالی ارزیابی اسناد تحصیلی وزارت تحصیلات
عالی مورد بررســی قرار گرفــــته و فیصله
ذیل که درج پروتوکــــول شماره </B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>(</B></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">{{$registred_doctor1->Protocol}}</SPAN></B></FONT><FONT FACE="Arial, serif"><B>)
</B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>صفحه
</B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">({{$registred_doctor2->page}})</SPAN></B></FONT><FONT FACE="Arial, serif"><B>
</B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>جلد
</B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">({{$registred_doctor2->jild}})</SPAN></B></FONT><FONT FACE="Arial, serif"><B>
</B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>کـــــــتاب
تصاویـــــب میباشد، به عمل آمد</B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>:</B></FONT></P>
<P ALIGN=JUSTIFY STYLE=" margin-bottom: 0in; line-height: 115%"><br/>
<FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>محترم
</B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B>{{$registred_doctor2->name}}</B></FONT></SPAN><FONT FACE="B Nazanin"><B>
فرزند </B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B>
{{$registred_doctor2->father_name}}</B></FONT></SPAN><FONT FACE="B Nazanin"><B> که از طریق
</B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B>شخصی</B></FONT></SPAN><FONT FACE="B Nazanin"><B>
تحصیلات خویش را به شکل </B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B>{{  $registred_doctor2->EduationLevel == 3 ? ' حضوری' :  'غیر حضوری'  }}</B></FONT></SPAN><FONT FACE="B Nazanin"><B>
به سویه </B></FONT><FONT COLOR="#c00000"><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B>ماستری
بدون تیزس</B></FONT></SPAN></FONT><FONT COLOR="#c00000"><FONT FACE="B Nazanin"><B>
</B></FONT></FONT><FONT FACE="B Nazanin"><B>در رشته </B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B>{{$registred_doctor2->FEducation}}
عامه</B></FONT></SPAN><FONT FACE="B Nazanin"><B>  از پوهنتون
</B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B>
{{$registred_doctor2->university}}</B></FONT></SPAN><FONT FACE="B Nazanin"><B> کشور
</B></FONT><FONT COLOR="#c00000"><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B>{{$registred_doctor2->issueingCountry}}</B></SPAN></FONT></SPAN></FONT><FONT FACE="B Nazanin"><B>
به اتمام رسانیده، به اعتبار طی مراحل
قانونی آن در وزارت امورخارجه بعد از سپری
نمودن امتحان تحریری در وزارت تحصیلات
عالی به شکل موفقانه و طی مراحل قانونی
تائید است</B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>.</B></FONT></P>
<br/>
<P ALIGN=JUSTIFY STYLE=" margin-bottom: 0in; line-height: 115%">
<FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>همچنان
باید خاطر نشان کرد که موصوف در سال </B></FONT></SPAN></FONT><FONT COLOR="#c00000"><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">{{$registred_doctor2->AYear}}</SPAN></B></FONT></FONT><FONT COLOR="#c00000"><FONT FACE="Arial, serif"><B>
</B></FONT></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>شامل
دوره تحصیل غیرحضوری گردیده و در سال </B></FONT></SPAN></FONT><FONT COLOR="#c00000"><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">{{$registred_doctor2->GYear}}</SPAN></B></FONT></FONT><FONT COLOR="#c00000"><FONT FACE="Arial, serif"><B>
 </B></FONT></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>فارغ
شده است</B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>. </B></FONT>
</P>
<P ALIGN=JUSTIFY STYLE=" margin-bottom: 0in; line-height: 115%">
<FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>لذا
موصوف می تواند طبق قوانین و مقرارت وزارت
تحصیلات عالی افغانستان، از امتیازات
سند خویش مستفید شود</B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>.</B></FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 115%"><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>بناً
فیصله کمیسیون جهت اگاهی و اجراات  قانونی
نگاشته شد</B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>.
</B></FONT>
</P>
<br/>
<P ALIGN=JUSTIFY STYLE=" margin-bottom: 0in; line-height: 115%">
<FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>قابل
تذکر است که مطابق بند </B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>2
</B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>ماده
دوازدهم مقرره ارزیابی اسنادتحصیلی خارج
مرز، ﺣﺎﯾﺰ ﺍﺳـﻨﺎﺩ ﺗﺤـﺼﯿﻠﯽ غیرحضوری
و نیمه حضوری ﺩﺭ ﮐـﺎﺩﺭ ﻋﻠﻤـﯽ  ﻣﺆﺳﺴﮥ
ﺗﺤـﺼﯿﻼﺕ ﻋـﺎﻟﯽ ﭘﺬﯾﺮﻓﺘـﻪ  ﻧﻤﯽ
ﺷﻮﺩ</B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>.</B></FONT></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT COLOR="#000000"><FONT FACE="B Nazanin"><FONT SIZE=4><SPAN LANG="fa-IR"><B>با
احترام</B></SPAN></FONT></FONT></FONT></SPAN></FONT></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><FONT SIZE=4><SPAN LANG="fa-IR"><B>پوهاند
حاجی محمد نعیمی</B></SPAN></FONT></FONT></SPAN></FONT></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><FONT SIZE=4><SPAN LANG="fa-IR"><B>رئیس
ارزیابی و معادلت اسنادتحصیلی بیرون مرزی</B></SPAN></FONT></FONT></SPAN></FONT></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><FONT SIZE=4><SPAN LANG="fa-IR">عبدالحفیظ
حسینی</SPAN></FONT></FONT></SPAN></FONT></P>
<P STYLE="margin-bottom: 0in"><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><FONT SIZE=4><SPAN LANG="fa-IR">آمر
ارزیابی اسناد تحصیلی بیرون مرزی</SPAN></FONT></FONT></SPAN></FONT></P>
<P STYLE="margin-bottom: 0in"><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B>کاپی</B></SPAN></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>:
</B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B>به
ریاست محترم عمومی قوای بشری و تنظیم
روابط کار</B></SPAN></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>.</B></FONT></P>
<DIV TYPE=FOOTER>
	<P STYLE="margin-bottom: 0in"><BR>
	</P>
	<P STYLE="margin-bottom: 0in; border-top: none; border-bottom: 1px solid #00000a; border-left: none; border-right: none; padding: 0in">
	<SPAN DIR="LTR" STYLE="float: left; width: 7.43in; height: 0.37in; border: none; padding: 0.05in 0.1in; background: #ffffff">
		<P ALIGN=RIGHT STYLE="margin-bottom: 0in"><FONT FACE="Times New Roman"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><FONT SIZE=2 STYLE="font-size: 9pt">ادرس</FONT></FONT></SPAN></FONT><FONT SIZE=2 STYLE="font-size: 9pt">:
		 </FONT><FONT FACE="Times New Roman"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><FONT SIZE=2 STYLE="font-size: 9pt">کارته
		چهار </FONT></FONT></SPAN></FONT><FONT SIZE=2 STYLE="font-size: 9pt">.
		</FONT><FONT FACE="Times New Roman"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><FONT SIZE=2 STYLE="font-size: 9pt">کابل
		</FONT></FONT></SPAN></FONT><FONT SIZE=2 STYLE="font-size: 9pt">.
		</FONT><FONT FACE="Times New Roman"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><FONT SIZE=2 STYLE="font-size: 9pt">افغانستان
		                                                                   
		                                                                   
		                      تلفون</FONT></FONT></SPAN></FONT><FONT SIZE=2 STYLE="font-size: 9pt">:
		0202503829</FONT></P>
		<P ALIGN=RIGHT STYLE="margin-bottom: 0in"><BR>
		</P>
		<P STYLE="margin-bottom: 0in"><BR>
		</P>
	</SPAN><BR>
	</P>

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





