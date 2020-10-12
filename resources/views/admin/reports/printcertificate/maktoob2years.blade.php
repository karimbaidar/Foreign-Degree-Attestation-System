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
<P ALIGN=CENTER STYLE="margin-bottom: 0in; line-height: 115%"><FONT FACE="Arial, serif"><FONT SIZE=5 STYLE="font-size: 20pt"><B>(</B></FONT></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><FONT SIZE=5 STYLE="font-size: 20pt"><SPAN LANG="fa-IR"><B>تائید
سندتحصیلی </B></SPAN></FONT></FONT></SPAN></FONT><FONT FACE="Arial, serif"><FONT SIZE=5 STYLE="font-size: 20pt"><B><SPAN STYLE="background: #ffff00">...</SPAN></B></FONT></FONT><FONT FACE="Arial, serif"><FONT SIZE=5 STYLE="font-size: 20pt"><B>)</B></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 115%"><BR>
</P>
            <P ALIGN=JUSTIFY STYLE="text-indent: 0.5in; margin-bottom: 0in; line-height: 150%">
<FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>سند
شماره </B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">(</SPAN></B></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">037819</SPAN></B></FONT><FONT FACE="Arial, serif"><B>)
</B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>تحصیلی
که از طرف </B></FONT><FONT FACE="B Nazanin"><B>پوهنتون
</B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B> {{$registred_doctor2->university}}</B></FONT></SPAN><FONT FACE="B Nazanin"><B>
 کشور </B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B> {{$registred_doctor2->issueingCountry}}</B></FONT></SPAN><FONT FACE="B Nazanin"><B>
 به نام محترم </B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B> {{$registred_doctor2->name}}</B></SPAN></FONT></SPAN><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B>
</B></SPAN></FONT><FONT FACE="B Nazanin"><B>فرزند </B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B> {{$registred_doctor2->father_name}}</B></FONT></SPAN><FONT FACE="B Nazanin"><B>
دارنده تذکره شماره </B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">( {{$registred_doctor2->nic}}</SPAN></B></FONT><FONT FACE="Arial, serif"><B>)
</B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>صادر
گردیده در جلــسه مورخ </B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">30/11/1397</SPAN></B></FONT><FONT FACE="Arial, serif"><B>
</B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>کمیسیون
عالی ارزیابی اسناد تحصیلی وزارت تحصیلات
عالی مورد بررســی قرار گرفــــته و فیصله
ذیل که درج پروتوکــــول شماره </B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">( {{$registred_doctor1->Protocol}}</SPAN></B></FONT><FONT FACE="Arial, serif"><B>)
</B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>صفحه
</B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">( {{$registred_doctor->jild}}</SPAN></B></FONT><FONT FACE="Arial, serif"><B>)
</B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>جلد</B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>(</B></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00"> {{$registred_doctor->jild}}</SPAN></B></FONT><FONT FACE="Arial, serif"><B>)
</B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>کـــــــتاب
تصاویـــــب میباشد، به عمل آمد</B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>:</B></FONT></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 0.5in; margin-bottom: 0in; line-height: 150%">
<FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>محترم
</B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B> {{$registred_doctor2->name}}</B></SPAN></FONT></SPAN><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B>
</B></SPAN></FONT><FONT FACE="B Nazanin"><B>فرزند </B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B> {{$registred_doctor2->father_name}}</B></FONT></SPAN><FONT FACE="B Nazanin"><B>
که از طریق </B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B>شخصی</B></FONT></SPAN><FONT FACE="B Nazanin"><B>
تحصیلات خویش را به شکل </B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B>حضوری</B></FONT></SPAN><FONT FACE="B Nazanin"><B>
به سویه </B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B>لیسانس</B></FONT></SPAN><FONT FACE="B Nazanin"><B>
در رشته </B></FONT><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B>
</B></SPAN></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B>اقتصاد</B></SPAN></FONT></SPAN><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B>
 </B></SPAN></FONT><FONT FACE="B Nazanin"><B>از  طرف </B></FONT><FONT FACE="B Nazanin"><B>پوهنتون
</B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B> {{$registred_doctor2->university}}</B></FONT></SPAN><FONT FACE="B Nazanin"><B>
</B></FONT><FONT FACE="B Nazanin"><B>کشور </B></FONT><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B> {{$registred_doctor2->issueingCountry}}
</B></SPAN></FONT><FONT FACE="B Nazanin"><B>به اتمام رسانیده،
به اعتبار طی مراحل قانونی آن در وزارت
محترم امور خارجه بعد از طی مراحل قانونی
تائید است</B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>.
</B></FONT>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 0.5in; margin-bottom: 0in; line-height: 150%">
<FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>همچنان
باید خاطر نشان کرد که موصوف از سال </B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">(
  {{$registred_doctor2->AYear}} </SPAN></B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B>الی
</B></FONT></SPAN></SPAN></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00"> {{$registred_doctor2->GYear}}</SPAN></B></FONT><FONT FACE="Arial, serif"><B>)
</B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>دوره
تحصیل </B></FONT><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B>دوساله</B></FONT></SPAN><FONT FACE="B Nazanin"><B>
مطابق سیستم تحصیلات عالی پاکستان به
سویه  لیسانس را تکمیل و سپس </B></FONT><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B>از</B></SPAN></FONT><FONT FACE="B Nazanin"><B>
سال </B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">(2016
</SPAN></B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><SPAN STYLE="background: #ffff00"><FONT FACE="B Nazanin"><B>الی</B></FONT></SPAN></SPAN></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffff00">2017</SPAN></B></FONT><FONT FACE="Arial, serif"><B>)
</B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>دوره
تحصیل دو ساله  ماستری را مطابق سیستم
تحصیلات عالی  {{$registred_doctor2->issueingCountry}} تکمیل نموده است</B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>.
</B></FONT><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>بناً
مجموع دوره لیسانس و ماستری وی چهار سال
شده و مطابق سیستم تحصیلات افغانستان و
نورم های اکادمیک بین المللی از جمله
تکمیل تحصیل کریدت های معیاری  دوره
لیسانس، به سویه </B></FONT><FONT FACE="B Nazanin"><FONT SIZE=5><B>لیسانس</B></FONT></FONT><FONT FACE="B Nazanin"><B>
ارزیابی و تائیدگردید</B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>.
</B></FONT>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 0.5in; margin-bottom: 0in; line-height: 150%">
<FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>لذا
موصوف می تواند طبق قوانین و مقرارت وزارت
تحصیلات عالی افغانستان، از امتیازات
سند خویش مستفید شود</B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>.</B></FONT></P>
<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 150%"><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><B>فیصله
کمیسیون جهت اگاهی و اجراات اصولی و قانونی
به شما نگاشته شد</B></FONT></SPAN></FONT><FONT FACE="Arial, serif"><B>.
</B></FONT>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 0.5in; margin-bottom: 0in; line-height: 150%">
<BR>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 0.5in; margin-bottom: 0in; line-height: 150%">
<BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B>با
احترام</B></SPAN></FONT></SPAN></FONT></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><FONT SIZE=4><SPAN LANG="fa-IR"><B>پوهاند
حاجی محمد نعیمی</B></SPAN></FONT></FONT></SPAN></FONT></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><FONT SIZE=4><SPAN LANG="fa-IR"><B>رئیس
ارزیابی و معادلت اسناد تحصیلی بیرون
مرزی</B></SPAN></FONT></FONT></SPAN></FONT></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><FONT SIZE=4><SPAN LANG="fa-IR"><B>عبدالحفیظ
حسینی</B></SPAN></FONT></FONT></SPAN></FONT></P>
<P STYLE="margin-bottom: 0in"><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><FONT SIZE=4><SPAN LANG="fa-IR"><B>آمر
ارزیابی اسناد تحصیلی بیرون مرزی</B></SPAN></FONT></FONT></SPAN></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 150%"><FONT FACE="Angsana New"><SPAN LANG="ar-SA"><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B>کاپی
</B></SPAN></FONT><FONT FACE="B Nazanin"><SPAN LANG="ps-AF"><B>به</B></SPAN></FONT><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B>
</B></SPAN></FONT><FONT FACE="B Nazanin"><SPAN LANG="ps-AF"><B>ریاست
محترم</B></SPAN></FONT><FONT FACE="B Nazanin"><SPAN LANG="fa-IR"><B>
</B></SPAN></FONT><FONT FACE="B Nazanin"><B>عمومی قوای بشری
و تنظیم روابط کار</B></FONT></SPAN></FONT></P>
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





