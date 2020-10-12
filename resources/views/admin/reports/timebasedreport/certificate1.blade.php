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

<div class="bgOverLay">
<div class="loader">


  

</div>
</div>


<div class="printable" >

         
              <table border="1px solid" width="100%" style="margin-top: 5px; font-size:18px; text-align:center; direction:ltr">

                                                <tr>

                                                  <td colspan="3"> <img src="{{URL::asset('images/afghanistan_logo.png')}}" style="width:100px;height:100px;border-radius:50%" class="pull-left"></img>
                                                    <img src="{{URL::asset('images/afghanistan_logo.png')}}" style="width:100px;height:100px;border-radius:50%" class="pull-right"></img>
          </div></td>
                                                </tr>
                                                          <tr>
                                                             <td></br><b>جمهوری اسلامی افغانستان</br>شورای طبی افغانستان</b></br></br></br></br></td>
                                                           
                                                            <td></br><b>ISLAMIC REPUBLIC OF AFGHANISTAN </br>AFGHANISTAN MEDICAL COUNCIL</b></br></br></br></br></td>
                                                            <td></br><b>د افغانستان اسلامی حمهوریت</br>د افغانستان طبی شورا</b></br></br></br></br></td>
                                                          </tr>

                                                          
                                                        </table>


                                                        

                                                        <table width="100%" style="margin-top: 60px; direction:ltr; font-size:18px; text-align:center">
                                                          <tr>
                                                              <td><b>REGISTRATION NO</b></td>
                                                              <td><b>REGISTRATION DATE</b></td>
                                                              <td></td>
                                                          </tr>
                                                          <tr>
                                                              <td>{{$registred_doctor->reg_no}}</td>
                                                              <td>{{$registred_doctor->reg_date}}</td>
                                                              <td></td>
                                                          </tr>
                                                          

                                                        </table>

                                                        <table width="100%" style="margin-top: 70px; direction:ltr; font-size:18px; text-align:center">
                                                          
                                                          <tr>
                                                              <td><b>NAME</b></td>
                                                              <td><b>SURNAME</b></td>
                                                              <td><b>DEGREE</b></td>
                                                          </tr>
                                                          <tr>
                                                              <td>{{$registred_doctor->name}}</td>
                                                              <td>{{$registred_doctor->surname}}</td>
                                                              <td>{{$education_qualification->degree}}</td>
                                                          </tr>


                                                        </table>

                                                        </table>

                                                        


          
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





