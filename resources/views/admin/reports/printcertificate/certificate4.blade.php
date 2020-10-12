<html>
<head>
<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

    


 <style>
 .borderexample
{
border-style:solid;
border-color:black;
}

   


    
    </style>


</head>
<body direction="rtl">
    
       @if(Auth::user()->id == $registred_doctor->userid)

<div class="printable" >
&nbsp;
<table style="height: 248px;" width="914">
<tbody>
<tr>
<div align="right">(PHD) فورم ۲ ارزیابی سند تحصیلی مقطع ماستری و دکتورا </div>
<td class="borderexample" rowspan="3" width="115">
<p style="text-align: center;">	<img src="{{URL::to('/storage/app/public/documents/'.$registred_doctor->image)}}" style="width:220px;height:220px;" /></p>
</td class="borderexample">
<td class="borderexample" style="text-align: center;" rowspan="3" width="260"><strong>وزارت تحصیلات عالی</strong>

<strong>معینیت علمی </strong>

<strong>ریاست عمومی انسجام اموراکادمیک</strong>

<strong>آمریت ارزیابی </strong><strong>اسناد</strong><strong> تحصیلی برون مرز</strong></td class="borderexample">
<td class="borderexample" style="text-align: center;" colspan="2" width="107">نمبر ثبت پروتوکل</td class="borderexample">
<td class="borderexample" style="text-align: center;" width="67">نمبر ثبت دفتر</td class="borderexample">
<td class="borderexample" style="text-align: center;" width="95">نمبر تکت تسلیمی</td class="borderexample">
<td class="borderexample" style="text-align: center;" width="80">تاریخ مراجعه</td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: center;" width="53"> جلد</td class="borderexample">
<td class="borderexample" style="text-align: center;" width="54">صفحه</td class="borderexample">
<td class="borderexample" style="text-align: center;" rowspan="2" width="67"></td class="borderexample">
<td class="borderexample" rowspan="2" width="95">
<p style="text-align: center;"></p>
</td class="borderexample">
<td class="borderexample" rowspan="2" width="80"></td class="borderexample">
</tr>
<tr>
<td class="borderexample" width="53"></td class="borderexample">
<td class="borderexample" width="54"></td class="borderexample">
</tr>
</tbody>
</table>
<strong>قسمت الف: توسط درخواست کننده تکمیل گردد.</strong>
<table style="height: 1330px;" width="914" >
<tbody>
<tr>
<td class="borderexample" colspan="17" width="680">
<p style="text-align: right;">معلومات متقاضی :         شخص فارغ التحصیل  □                      نماینده فارغ  التحصیل □</p>
</td class="borderexample">
<td class="borderexample" rowspan="8" width="44"><strong>معلومات درخواست دهنده</strong></td class="borderexample">

</tr>
<tr>
<td class="borderexample" style="text-align: right;" colspan="17" width="680"><strong>شهرت فارغ التحصیل</strong>  ▼</td class="borderexample">

</tr>
<tr>
<td class="borderexample" style="text-align: right;" width="68">محل تولد</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" width="65">تاریخ تولد</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="3" width="78">نمبرپاسپورت</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" width="125">نمبرتذکره</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" width="94">تخلص</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="4" width="102">اسم پدر</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="3" width="148">اسم</td class="borderexample">

</tr>
<tr>
<td class="borderexample" width="68"><div align="right">{{$registred_doctor->Pbirth}}</div></td class="borderexample">
<td class="borderexample" colspan="2" width="65"><div align="right">{{$registred_doctor->dob}}</div></td class="borderexample">
<td class="borderexample" colspan="3" width="78"><div align="right">{{$registred_doctor->nic}}</div></td class="borderexample">
<td class="borderexample" colspan="2" width="125"><div align="right">{{$registred_doctor->nic}}</div></td class="borderexample">
<td class="borderexample" colspan="2" width="94"><div align="right">{{$registred_doctor->surname}}</div></td class="borderexample">
<td class="borderexample" colspan="4" width="102"><div align="right">{{$registred_doctor->father_name}}</div></td class="borderexample">
<td class="borderexample" colspan="3" width="148"><div align="right">{{$registred_doctor->name}}</div></td class="borderexample">

</tr>
<tr>
<td class="borderexample" colspan="8" width="336">E-mail:{{$registred_doctor->PersonalEmail}}</td class="borderexample">
<td class="borderexample" colspan="9" width="344">
<p style="text-align: right;">{{$registred_doctor->PersonalCellPhone}}: شماره تماس متقاضی</p>
</td class="borderexample">

</tr>
<tr>
<td class="borderexample" style="text-align: right;" colspan="7" width="284"><strong>محل زیست </strong>▼</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="10" width="397"><strong>اداره معرفی کننده جهت ارزیابی اسناد</strong>▼</td class="borderexample">

</tr>
<tr>
<td class="borderexample" style="text-align: right;" colspan="4" width="151">سکونت فعلی</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="3" width="133">سکونت اصل</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" width="102">غیررسمی □</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="4" width="102">نمبر/تاریخ مکتوب</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="4" width="192">نام مرجع:</td class="borderexample">

</tr>
<tr>
<td class="borderexample" colspan="4" width="151"><div align="right">{{$registred_doctor->CAddress}}</div></td class="borderexample">
<td class="borderexample" colspan="3" width="133"><div align="right">{{$registred_doctor->PAddress}}</div></td class="borderexample">
<td class="borderexample" colspan="2" width="102"></td class="borderexample">
<td class="borderexample" colspan="4" width="102"></td class="borderexample">
<td class="borderexample" colspan="4" width="192"></td class="borderexample">

</tr>
<tr>
<td class="borderexample" colspan="7" width="284">
<p style="text-align: right;">دوره تحصیلی</p>
▼</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" width="102">اسم موسسه تحصیلی ▼</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="3" width="78">کشور اعطا کننده  ▼</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="4" width="100">رشته تحصیلی ▼</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="90">سویه تحصیلی</td class="borderexample">
<td class="borderexample" style="text-align: right;" rowspan="9" width="44"><strong>معلومات تحصیلی</strong></td class="borderexample">

</tr>
<tr>
<td class="borderexample" style="text-align: right;" colspan="2" rowspan="2" width="85">مدت زمان تحصیل</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="3" rowspan="2" width="115">تاریخ فراغت</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" rowspan="2" width="84">تاریخ شروع تحصیل</td class="borderexample">

<td  class="borderexample" colspan="2" rowspan="2" width="102"><div align="right">{{$registred_doctor->university}}</div></td class="borderexample">
<td class="borderexample" colspan="3" rowspan="2" width="78"><div align="right">{{$registred_doctor->issueingCountry}}</div></td class="borderexample">
<td class="borderexample" colspan="3" rowspan="2" width="126"><div align="right">{{$registred_doctor->FEducation}}</div></td class="borderexample">
<td class="borderexample" colspan="2" rowspan="2" width="90"><div align="right">{{$registred_doctor->EducationLevel}}</div></td class="borderexample">

</tr>
<tr>


</tr>
<tr>
<td class="borderexample" colspan="2" width="85"><div align="right">{{$registred_doctor->StudyDuration}}</div></td class="borderexample">
<td class="borderexample" colspan="3" width="115"><div align="right">{{$registred_doctor->GYear}}</div></td class="borderexample">
<td class="borderexample" colspan="2" width="84"><div align="right">{{$registred_doctor->AYear}}</div></td class="borderexample">
<td class="borderexample" colspan="10" width="84"><div align="right">{{$registred_doctor->thesistitle}} <b>: عنوان تیزس </b></div></td class="borderexample">


</tr>
<tr>
<td class="borderexample" colspan="2" width="85">Roll Number</td class="borderexample">
<td class="borderexample" colspan="3" width="115">ID Number</td class="borderexample">
<td class="borderexample" style="text-align: left;" colspan="2" width="84">Degree No</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="4" width="153"><strong>نوع سند</strong></td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="3" width="96"><strong>نوع بورس</strong></td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="3" width="148"><strong>نوع تحصیل</strong></td class="borderexample">

</tr>
<tr>
<td class="borderexample" colspan="2" width="85">{{$registred_doctor->RollNum}}</td class="borderexample">
<td class="borderexample" colspan="3" width="115">{{$registred_doctor->UniID}}</td class="borderexample">
<td class="borderexample" colspan="2" width="84">{{$registred_doctor->DiplomaNumber}}</td class="borderexample">
<td class="borderexample" colspan="4" width="153"><div align="right">
@if($registred_doctor->EDocument == 1)
{{__('ui-list.original')}} 
	
@elseif($registred_doctor->EDocument == 2)
{{__('ui-list.temporary')}} 

@endif
</div></td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="3" width="96"><div align="right">

@if($registred_doctor->typeScholarship == 1)
{{__('ui-list.Government')}} 
	
@elseif($registred_doctor->typeScholarship == 2)
{{__('ui-list.Private')}}

@endif

</div></td class="borderexample">
<td class="borderexample" colspan="3" width="148"><div align="right">
@if($registred_doctor->typeEducation == 1 )
{{__('ui-list.regular')}} 
@elseif($registred_doctor->typeEducation == 2)
{{__('ui-list.partiallyRegular')}} 
@elseif($registred_doctor->typeEducation == 3)
{{__('ui-list.NotRegular')}}
@endif
</div></td class="borderexample">

</tr>
<tr>
<td class="borderexample" style="text-align: right;" colspan="17" width="680"><strong>ایمیل آدرس و نمبرتلیفون موسسه تحصیلی</strong></td class="borderexample">

</tr>
<tr>
<td class="borderexample" colspan="17" width="680">University E-mail:{{$registred_doctor->PersonalEmail}}</td class="borderexample">
</tr>
<tr>
<td class="borderexample" colspan="17" width="680">U.Tel:{{$registred_doctor->PersonalCellPhone}}</td class="borderexample">

</tr>
<tr>
<td class="borderexample" colspan="17" width="680">
<p style="text-align: right;"><strong>اینجانب که شهرتم در فوق ذکر است به مسئولیت بعدی تصدیق می‌دارم که معلومات ارایه شده در فوق مبنی بر نوعیت اسناد تحصیلی‌ام درست وحقیقی می‌باشد و در صورت اشتباه بودن معلومات ارائه شده، مسئولیت به عهده خودم می‌باشد.    </strong></p>
<p style="text-align: right;"><strong>تاریخ</strong><strong> : </strong><strong>.........................         امضاء</strong><strong>:.....</strong><strong>...................                   شصت دارنده سند (                    )</strong></p>
</td class="borderexample">
<td class="borderexample" width="44"><strong>تعهد نامه فارغ التحصیل</strong></td class="borderexample">

</tr>

</tbody>
</table>
<strong>قسمت ب: فیصله کمیسیون عالی ارزیابی اسناد تحصیلی خارج مرز </strong>
<table style="height: 702px;" width="914" >
<tbody>
<tr>
<td class="borderexample" colspan="4" width="725">
<p style="text-align: right; direction:rtl;"><strong><u>جلسه مورخ:        /        / 1396</u></strong></p>


<p style="text-align: right; direction:rtl;">

دیپلوم تحصیلی شماره ({{$registred_doctor->DiplomaNumber}}) صادر شده از پوهنتون ({{$registred_doctor->university}})
 کشور ({{$registred_doctor->issueingCountry}})، به سویه لیسانس، با دورۀ تحصیلی (سه ساله □ / چهار ساله □ / پنج ساله □) در
 رشته  ({{$registred_doctor->FEducation}})به نام محترم ({{$registred_doctor->name}})فــرزند ({{$registred_doctor->father_name}})دارنده نذکره/پاسپورت نمــــــــــــــبر({{$registred_doctor->nic}})که در سال({{$registred_doctor->AYear}})شامل
 و در سال({{$registred_doctor->GYear}})موفقانه با GPA({{$registred_doctor->GPA}})  به
 grade ({{$registred_doctor->Grade}}) فارغ التحصیل شده است، بر اساس ملاحظه دیپلوم تعلیمی یک دوره قبل (12 □ 14 □) با 
نوعیت تحصیل ({{$registred_doctor->typeEducation}}) بر اساس (                                                                            )، ثبت پرپروتوکـول شماره (           ) ارزیابی و (                  ) است.


</p>




<p style="text-align: right;"><strong>نتیجه نهایی کمیسیون ارزیابی :           تائید </strong><strong>□</strong><strong>          رد </strong><strong>□       </strong></p>
</td class="borderexample">
</tr>
<tr>
<td class="borderexample" colspan="4" width="725">
<p style="text-align: right;"><strong><u>ملاحظات:</u></strong></p>
<p style="text-align: right; direction:rtl;"><strong> ..........................................................................................................................................................................(1</strong></p>
<p style="text-align: right; direction:rtl;"><strong>..............................................................................................................................................................................</strong></p>
<p style="text-align: right; direction:rtl;"><strong>.... ........................................................................................................................................................................</strong></p>
</td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: right;" colspan="4" width="725"><strong>شهرت و امضای ارزیابی کنندگان علمی و اکادمیک کمیسیون عالی ارزیابی اسناد تحصیلی خارج مرز</strong></td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: right;" width="233">امضا</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="208">وظیفه</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="236">نام</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">شماره</td class="borderexample">
</tr>
<tr>
<td class="borderexample" width="233"></td class="borderexample">
<td class="borderexample" width="208"></td class="borderexample">
<td class="borderexample" width="236"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">1</td class="borderexample">
</tr>
<tr>
<td class="borderexample" width="233"></td class="borderexample">
<td class="borderexample" width="208"></td class="borderexample">
<td class="borderexample" width="236"></td class="borderexample">
<td class="borderexample" width="47">2</td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: right;" width="233"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="208"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="236"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">3</td class="borderexample">
</tr>
</tbody>
</table>
<strong> قسمت ج: نظر نهایی رئیس و معاون کمیسیون عالی ارزیابی اسناد تحصیلی خارج مرز</strong>
<table width="914" >
<tbody>
<tr>
<td class="borderexample" colspan="4" width="725">
<p style="text-align: right;"><strong><u>مورخ:         /        /1396</u></strong></p>
<strong> </strong>
<p style="text-align: right;"><strong>ملاحظات</strong></p>
</td class="borderexample">
</tr>
<tr>
<td class="borderexample" colspan="4" width="725"><strong>
<div align="right">
 ..........................................................................................................................................................................</strong>

<strong>..............................................................................................................................................................................</strong>

<strong>.... ........................................................................................................................................................................</strong></td class="borderexample">
</div>
</tr>
<tr>
<td class="borderexample" style="text-align: right;" width="188"><strong>امضا</strong></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="210"><strong>وظیفه</strong></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="260"><strong>شهرت مکمل</strong></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="66"><strong>شماره</strong></td class="borderexample">
</tr>
<tr>
<td class="borderexample" width="188"><strong> </strong>

<strong> </strong></td class="borderexample">
<td class="borderexample" width="210"><strong> </strong></td class="borderexample">
<td class="borderexample" width="260">&nbsp;

&nbsp;</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="66">1</td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: right;" width="188">&nbsp;

&nbsp;</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="210"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="260">&nbsp;

&nbsp;</td class="borderexample">
<td class="borderexample" width="66">
<p style="text-align: right;">2</p>
&nbsp;</td class="borderexample">
</tr>
</tbody>
</table>
&nbsp;
<p style="text-align:  right;"><strong>&nbsp;&nbsp;&nbsp;&nbsp;قسمت د: نظر کمیته تخنیکی&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
</strong></p>

<table width="914" >
<tbody>
<tr>
<td class="borderexample" colspan="5" width="725">
<p style="text-align: right;"><strong><u>مورخ:    /     /   139  </u></strong></p>
<p style="text-align: right;"><strong>1. تمام تعداد (        ) ورق اسناد ضمیمه این فورم به شمول اسناد تعلیمی (12</strong><strong>□</strong><strong> / 14</strong><strong>□</strong><strong>) و تحصیلی لیسانس به نام محـــــترم (                          ) فـــــــــرزند (                     ) بوده، صحت است. 2. اسناد تحصیلی و تعلیمی موصوف از طریق مراجع ذیربط طی مراحل قانونی گردیده صحت است. 3. نوعیت تحصیل آن مطابق (حضوری </strong><strong>□ </strong><strong>نیمه حضوری </strong><strong>□ </strong><strong>غیر حضوری </strong><strong>□ </strong><strong>)</strong> <strong>بوده صحت است. </strong></p>
<strong> </strong>
<p style="text-align: right;"><strong>نتجه نهایی : تأیید </strong><strong>□                   </strong><strong>رد </strong><strong>□</strong></p>
</td class="borderexample">
</tr>
<tr>
<td class="borderexample" colspan="4" width="725">
<p style="text-align: right;"><strong>ملاحظات:</strong> <strong>ملاحظات: </strong></p>
<p style="text-align: left;"><strong><div align="right">..........................................................................................................................................................................(1</strong></p>
<strong>..............................................................................................................................................................................</strong>

<strong>.... ........................................................................................................................................................................</strong></td class="borderexample">
</div>
</tr>
<tr>
<td class="borderexample" style="text-align: right;" colspan="4" width="725"><strong>شهرت و امضای ارزیابی کنندگان تخنیکی</strong></td class="borderexample">

</tr>
<tr>
<td class="borderexample" style="text-align: right;" width="167">امضا</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="284">وظیفه</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="227">شهرت</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">شماره</td class="borderexample">

</tr>
<tr>
<td class="borderexample" width="167"></td class="borderexample">
<td class="borderexample" width="284"></td class="borderexample">
<td class="borderexample" width="227"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">1</td class="borderexample">

</tr>
<tr>
<td class="borderexample" width="167"></td class="borderexample">
<td class="borderexample" width="284"></td class="borderexample">
<td class="borderexample" width="227"></td class="borderexample">
<td class="borderexample" width="47">             2</td class="borderexample">

</tr>
<tr>
<td class="borderexample" style="text-align: right;" width="167"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="284"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="227"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">3</td class="borderexample">

</tr>
</tbody>
</table>
&nbsp;
<table style="height: 677px;" width="914" >
<tbody>
<tr>
<td class="borderexample" style="text-align: right;" colspan="3" width="728"><strong>قسمت چ : نظر آمریت ارزیابی اسناد تحصیلی خارج مرز</strong></td class="borderexample">
</tr>
<tr>
<td class="borderexample" colspan="3" width="728">
<p style="text-align: right;"><strong>مورخ :             /         /1396</strong></p>
<p style="text-align: right;"><strong>ضمیمه فورم هذا به تعداد (         ) ورق سند اصل و (         ) ورق سند کاپی، مطابق به چک لست ضمیمه (صفحه 4م) این فورم که به منظور ارزیابی، از جانب متقاضی فوق الذکر ارائه شده، توسط آمریت ارزیابی اسناد تحصیلی خارج مرز ثبت، ترتیب و تنظیم گردیده، صحت است.</strong></p>
<strong> </strong>
<p style="text-align: right;"><strong>نتجه نهایی : تأیید </strong><strong>□                   </strong><strong>رد </strong><strong>□</strong></p>
</td class="borderexample">
</tr>
<tr>
<td class="borderexample" colspan="3" width="728">
<p style="text-align: right;"><strong>ملاحظات: </strong></p>
<strong><div align="right">..........................................................................................................................................................................(1</strong>

<strong>.............................................................................................................................................................................</strong>

<strong>.... .........................................................................................................................................................................</strong>
</div>
</td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: right;" colspan="3" width="728"><strong>نام و امضای مسئولین آمریت ارزیابی</strong></td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: right;" width="223">آمر ارزیابی اسناد تحصیلی خارج مرز</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="277">مدیر عمومی ارزیابی اسناد تحصیلی خارج مرز</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="227">کارشناس ارزیابی اسناد تحصیلی خارج مرز</td class="borderexample">
</tr>
<tr>
<td class="borderexample" width="223"></td class="borderexample">
<td class="borderexample" width="277"></td class="borderexample">
<td class="borderexample" width="227"></td class="borderexample">
</tr>
</tbody>
</table>
<p style="text-align: right;"></p>
<p style="text-align: right;"><strong><u>شرايط ارزيابي اسناد تحصیلی</u></strong></p>

<div align="right">
 	اسناد تحصیلی(دیپلوم و ترانسکرپت نمرات) مورد ارزیابی باید اصل باشد، فوتوكاپي مدار اعتبار نمی‌باشد.
 	اسناد بايد طي مراحل</strong><strong> قانونی</strong><strong> شده باشد</strong><strong> که شامل مراحل</strong><strong> ذيل مي‌شود:</strong>

 	<li><strong>مهر، امضا وتصديق موسسه تحصيلي مربوطه و وزارت تحصيلات عالي كشور اعطا کننده اسناد.</strong></li>
 	<li><strong>تصدیق وزارت خارجه کشور اعطا کننده اسناد.</strong></li>
 	<li><strong>تائيد نمايندگي سياسي افغانستان(سفارت يا قونسلگري افغانستان) در كشور صادر كننده اسناد تحصيلي </strong></li>
 	<li><strong>تائيد رياست قونسلي وزارت امورخارجه ازمهر نمايندگي افغانستان درخارج از كشور.</strong></li>


 	<li><strong>اسناد تحصیلی بايد داراي ترانسكرپت نمرات باشد.</strong></li>
 	<li><strong>سند فراغت بايد داراي تسلسل رشتوي واكادميك باشد.</strong></li>
 	<li><strong>در موقع ارائه سند فراغت تذكره هويت دارنده آن حتمی است.</strong></li>
 	<li><strong>وجود تيزس براي دوره‌های ماستری و دکتورا حتمی می‌باشد و ماستری‌های بدون تیزس در روند ارزیابی مستند گردد.</strong></li>
 	<li><strong>پرداخت </strong><strong>حق الخدمت سند تحصیلی</strong><strong> مورد ارزیابی</strong> <strong>[</strong><strong>دوره دکتورا(۱۰۰۰)افغانی</strong><strong>، ماستری (800)افغانی ولیسانس (600)افغانی].</strong></li>
 	<li><strong>غرض ارزيابي اسناد فراغت تحصيلي دست داشته ، داشتن سند اسناد تحصيلي فراغت يك دوره قبلي ضروري ميباشد.</strong></li>
 	<li><strong>تكميل فورم ارزيابي ضروري مي‌باشد.</strong></li>
 	<li><strong>فارغ التحصیل مکلف است تا سند تائید کننده نوع تحصیل (حضوری ، نیمه حضوری غیر حضوری) را ارائه نماید. درصورت عدم ارائه چین سند، فارغ التحصیل مکلف است تا ادرس فعال و موثق مرجع تحصیلی را ارائه نماید.</strong></li>

<p style="text-align: right;"><strong>نوت: هرگاه تزویر سند تحصیلی توسط کمیسیون تشخیص گردد دارنده سند غرض تعقیب عدلی به مراجع مربوطه معرفی میگردد. </strong></p>
<p style="text-align: right;"><strong>  شصت دارنده سند (                                       )</strong><strong>                                                                                                                                  </strong></p>
<p style="text-align: right;"><strong>چک لست تسلیم گیری اسناد تحصیلی لازم و ضروری برای ارزیابی. </strong></p>
</div>
<table style="height: 1598px;" width="914" >
<tbody>
<tr>
<td class="borderexample" style="text-align: right;" colspan="7" width="640"><strong>این بخش توسط مأمور پذیرش خانه پری و امضا می گردد.</strong></td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: right;" width="83"><strong>ملاحظات</strong></td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="5" width="511"><strong>لیسانس</strong></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">شماره</td class="borderexample">
</tr>
<tr>
<td class="borderexample" colspan="2" width="83"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="123">کاپی</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" width="129">اصل</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="258">اصل دیپلوم تحصیلی</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">1</td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: right;" colspan="2" width="83"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="123">کاپی</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" width="129">اصل</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="258">اصل ترانسکریپ نمرات</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">2</td class="borderexample">
</tr>
<tr>
<td class="borderexample" colspan="2" width="83"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="123">کاپی</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" width="129">اصل</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="258">شهادتنامه صنف دوازدهم/چهاردهم ویا هرسند دیگریکه به اساس شامل دوره لیسانس شده است.</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">3</td class="borderexample">
</tr>
<tr>
<td class="borderexample" colspan="2" width="83"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="123">کاپی</td class="borderexample">
<td class="borderexample" colspan="2" width="129">
<p style="text-align: right;">اصل</p>
</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="258">تذکره تابعیت</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">4</td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: right;" colspan="2" width="83"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="123">کاپی</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" width="129">اصل</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="258">پاسپورت تحصیلی ویا کارت اقامت /  RP</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">5</td class="borderexample">
</tr>
<tr>
<td class="borderexample" colspan="2" width="83"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="123">کاپی</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" width="129">اصل</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="258">کارت پوهنتون</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">6</td class="borderexample">
</tr>
<tr>
<td class="borderexample" colspan="2" width="83"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="123">کاپی</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" width="129">اصل</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="258">تکمیل نمودن فورم ارزیابی توسط شخص فارغ.</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">7</td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: right;" colspan="2" width="83"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="123">کاپی</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" width="129">اصل</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="258">فورم م25</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">8</td class="borderexample">
</tr>
<tr>
<td class="borderexample" colspan="2" width="83"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="123">کاپی</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" width="129">اصل</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="258">مکتوب/استعلام تصدیق بورس رسمی</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">9</td class="borderexample">
</tr>
<tr>
<td class="borderexample" colspan="2" width="83"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="123">کاپی</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" width="129">اصل</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="258">ایمیل تصدیق نوعیت و فراغت از تحصیل</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">10</td class="borderexample">
</tr>
<tr>
<td class="borderexample" colspan="2" width="83"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="123">کاپی</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" width="129">اصل</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="258"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">11</td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: right;" colspan="2" width="83"></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="123">کاپی</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" width="129">اصل</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="258">&nbsp;

&nbsp;</td class="borderexample">
<td class="borderexample" style="text-align: right;" width="47">12</td class="borderexample">
</tr>
<tr>
<td class="borderexample" colspan="2" width="83"></td class="borderexample">
<td class="borderexample" width="123"></td class="borderexample">
<td class="borderexample" colspan="2" width="129"></td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="2" width="305">مجموع</td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: right;" colspan="7" width="640">به تعداد مجموعی (            ) سند اصلی سویه لیسانس و (            ) کاپی را از متقاضی فوق الذکر تسلیم گردیدم.</td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: right;" colspan="7" width="640">نام و امضای مسئول پذیرش</td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: right;" colspan="4" width="332">امضا</td class="borderexample">
<td class="borderexample" style="text-align: right;" colspan="3" width="308">شهرت</td class="borderexample">
</tr>
<tr>
<td class="borderexample" colspan="4" width="332"></td class="borderexample">
<td class="borderexample" colspan="3" width="308"></td class="borderexample">
</tr>
<tr>

</tr>
</tbody>
</table>
<p style="text-align: right;"><strong>مجموع اسناد ضمیمه این فورم</strong></p>

<table style="height: 299px;" width="914" >
<tbody>
<tr>
<td class="borderexample" style="text-align: right;" width="319"><strong>مجموع اوراق کاپی</strong></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="319"><strong>مجموع اوراق اصل</strong></td class="borderexample">
</tr>
<tr>
<td class="borderexample" width="319"><strong> </strong></td class="borderexample">
<td class="borderexample" width="319"><strong> </strong></td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: right;" width="319"><strong>امضای مامور پذیرش </strong></td class="borderexample">
<td class="borderexample" style="text-align: right;" width="319"><strong> </strong></td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: right;" width="319"><strong>امضای مدیر عمومی تنظیم سوابق</strong></td class="borderexample">
<td class="borderexample" width="319"><strong> </strong></td class="borderexample">
</tr>
<tr>
<td class="borderexample" style="text-align: right;" width="319"><strong>امضای آمر ارزیابی اسناد تحصیلی خارج مرز</strong></td class="borderexample">
<td class="borderexample" width="319"><strong> </strong></td class="borderexample">
</tr>
</tbody>
</table>
<p style="text-align: right;"><strong>این فورم به طور رایگان در دسترس متقاضیان قرار میگیرد.</strong></p>

</div>

    <script src="{{URL::asset('js/jquery-1.11.0.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
  
<script src="{{URL::asset('js/jquery.PrintArea.js')}}"></script>
<!--
<script>
  
    $(document).ready(function(){
      
       
      
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = { mode : mode, popClose : close};
        $("div.printable").printArea( options );  

       
     },1000,function(){
      
     });
    

</script>
-->
@else
<center>You are not allowed</center>
@endif

</body>
</html>