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
    

    </style>
</head>
<body>


<div class="bgOverLay">
<div class="loader">


  

</div>
</div>



<div class="printable" >


    <h6 style="float:left;margin-left:2cm;margin-bottom:10px">ملاحظه شد </h6>



    <h4 style="margin:10px;display:inline-table;margin-left:2.5cm">فورم (8)</h4>
    <div class="" style="display:inline-table;">
        <h6 style="display:inline-table;margin-right:2.5cm">مضبط معاینه تشریح و تسلیمی عینیات</h6> 
        <h6 style="display:inline-table;margin-right:1cm;">  تاریخ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1396/ 10/10   </h6> 
        <h6 style="display:inline-table;margin-right:1cm">امضا</h6>


    </div>


    <table class="table table-bordered" style="margin-top:10px;">

        <tr>
        <td style="height:2.2cm;text-align: center;vertical-align: middle;">نوع عینیات </td>
        <td style="height:2cm;width:10%;text-align: center;vertical-align: middle;">بکدام ادراه</td>
        <td style="height:2cm;text-align: center;vertical-align: middle;">ذریعه کدام واسطه </td>
        <td style="width:10%;height:2cm;text-align: center;vertical-align: middle;">از کجا آمده</td>
        <td style="width:10%;height:2cm;text-align: center;vertical-align: middle;padding:0"><p style="border-bottom:1px solid rgba(10,10,10,0.1);padding-bottom:5px">به اساس کدام سند</p>
        <p>نمبر و تاریخ</p>
        </td>
        <td style="height:2cm;text-align: center;vertical-align: middle;">توسط کدام هییت معاینه میگردد</td>
        <td style="height:2cm;text-align: center;vertical-align: middle;">در معاینایت حکمی و خارجی عینیات چه دیده شده است</td>
        </tr>


        <tr>
            <td style="height:1.8cm"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="width:30%">
                <p style="padding:0px;margin:0px;font-size: 12px">ريس هيت :- {{$recieved_product->approval_head}}</p>
                <p style="padding:0px;margin:0px;font-size: 12px">عضو:- {{$recieved_product->approval_one}}</p>
                <p style="padding:0px;margin:0px;font-size: 12px">عضو :- {{$recieved_product->approval_two}}</p>
            </td>
            <td style="width:40%">
                 <p style="padding:0px;margin:0px;font-size: 12px">چگونگی وضعیت خارجی بارنامه ها</p>
                <p style="padding:0px;margin:0px;font-size: 12px">تعداد بارنامه ها</p>
                <p style="padding:0px;margin:0px;font-size: 12px">وضعیت سرغچ و امثال آنها</p>
            </td>


        </tr>

        <tr>
            <td colspan="7">&nbsp;&nbsp;&nbsp;&nbsp;در اثنای تشریح و تسلیمی وضع تعداد عینیات قرار ذیل  : </td>
        </tr>

        <tr>

            <div style="display: inline-table;">
                
            </div>
            <table class="table table-bordered table-condensed" style="padding-top:0px" >
                <tr>
                <td style="vertical-align: middle;text-align: center">شماره </td>
                <td style="vertical-align: middle;width:20%;text-align: center">نام و نوع کلتور عینیات </td>
                <td style="vertical-align: middle;text-align: center">واحد قیاسی </td>
                <td style="vertical-align: middle;text-align: center">کتگوری</td>
                <td style="vertical-align: middle;text-align: center">موجودیت آن نظر به اسناد</td>
                <td style="vertical-align: middle;text-align: center">موجودکه فعلا معاینه شد </td>
                <td style="vertical-align: middle;text-align: center">کمبود از اثر</td>
                <td style="vertical-align: middle;width:30%;padding:0px;margin:0px">
                <p style="vertical-align: middle;text-align: center;border-bottom: 1px solid rgba(10,10,10,0.1)">این مضبط بحال چند نقل ترتیب شده</p>
                <p style="padding-right:2px;font-size: 11px">نقل های فوق یکجا فرستاده شده </p>
                 </td>
                </tr>
                 

                 @if(count($recieved_products)<8)
                    @for($i=0;$i<10;$i++)


                            <tr>
                            
                                <td>{{$i+1}}</td>
                            

                                    @if($i>=count($recieved_products))
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    @else
                                        <td>{{$recieved_products[$i]->product->name}}</td>
                                        <td>{{$recieved_products[$i]->product->unit_measurement->name}}</td>
                                        <td>{{$recieved_products[$i]->status->status}}</td>
                                        <td>{{$recieved_products[$i]->quantity}}</td>
                                        <td></td>
                                        <td></td>

                                    @endif

                            
                            

                                @if($i<=4)
                                <td @if($i==4)
                                        rowspan="100"

                                    @endif
                                >
                                    @if($i==0)
                                        <p style="font-size: 12px">ضمایم</p>
                                    
                                    @elseif($i==2)
                                        <p></p>

                                    @elseif($i==1)
                                        <p style="font-size: 12px">ملاحظات</p>

                                    @elseif($i==3)
                                        <p style="font-size: 12px">تاریخ ترتیب</p>

                                    @elseif ($i==4)
                                        <p style="padding:0px">رییس هییت </p>
                                        <p style="margin-bottom:10px">امضا :  </p>

                                        <p>عضو &nbsp; &nbsp; امضا : </p>
                                        <p>عضو &nbsp; &nbsp;امضا : </p>

                                        
                                    @endif 


                                </td>

                                @endif
                            
                            
                                

                            

                            </tr>
                    @endfor()

                @else
                    @for($i=0;$i<count($recieved_products);$i++)

                          <tr>
                            
                                <td>{{$i+1}}</td>
                            

                                 
                                    <td>{{$recieved_products[$i]->product->name}}</td>
                                    <td>{{$recieved_products[$i]->product->unit_measurement->name}}</td>
                                    <td>{{$recieved_products[$i]->status->status}}</td>
                                    <td>{{$recieved_products[$i]->quantity}}</td>
                                    <td></td>
                                    <td></td>

                                   

                            
                            

                                @if($i<=4)
                                <td @if($i==4)
                                        rowspan="100"

                                    @endif
                                >
                                    @if($i==0)
                                        <p style="font-size: 12px">ضمایم</p>
                                    
                                    @elseif($i==2)
                                        <p></p>

                                    @elseif($i==1)
                                        <p style="font-size: 12px">ملاحظات</p>

                                    @elseif($i==3)
                                        <p style="font-size: 12px">تاریخ ترتیب</p>

                                    @elseif ($i==4)
                                        <p style="padding:0px">رییس هییت </p>
                                        <p style="margin-bottom:10px">امضا :  </p>

                                        <p>عضو &nbsp; &nbsp; امضا : </p>
                                        <p>عضو &nbsp; &nbsp;امضا : </p>

                                        
                                    @endif 


                                </td>

                                @endif
                            
                            
                                

                            

                            </tr>



                    @endfor


                @endif

            </table>

        </tr>



    </table>


    


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





