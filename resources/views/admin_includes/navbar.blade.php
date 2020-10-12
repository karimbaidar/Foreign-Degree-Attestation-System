<style>
    
    .button1 {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}




@import url(https://fonts.googleapis.com/css?family=Raleway:100,600,400);


.text-holder{
  color:#aaaaaa;
  text-align:center;
  padding-top:40px;
}
.button-holder{
  padding-top:100px;
}
.ajax-button{
  position:relative;
  display:inline-block;
  width:100px;
  height:40px;
  left:50%;
  top:50%;
  margin-left:-50px;
  margin-top:-20px;
  text-align:center;
}
.submit_nav1{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

  

 
  outline:none;
  
  
   background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
  
  
  
}

.submit_nav2{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

  

 
  outline:none;
  
  
   background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
  
  
  
}

.submit_nav3{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

  

 
  outline:none;
  
  
   background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  
  
  
  
}


.submit_nav4{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

  


  
  
  
}



.submit_nav1:hover{
  background-color:#222222;
}



.submit_nav2:hover{
  background-color:#222222;
}

.submit_nav3:hover{
  background-color:#222222;
}



.loading_nav1{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:5px;
  border-radius:15px;
  padding:0;
  border:3px solid #006400;
  border-bottom:3px solid rgba(1,1,1,0.0);
  border-left:3px solid rgba(1,1,1,0.0);
  background-color:transparent !important;
  animation-name: rotateAnimation;
  -webkit-animation-name: wk-rotateAnimation;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-delay: 0.2s;
  -webkit-animation-delay: 0.2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}
.loading_nav2{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:5px;
  border-radius:15px;
  padding:0;
  border:3px solid #006400;
  border-bottom:3px solid rgba(1,1,1,0.0);
  border-left:3px solid rgba(1,1,1,0.0);
  background-color:transparent !important;
  animation-name: rotateAnimation;
  -webkit-animation-name: wk-rotateAnimation;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-delay: 0.2s;
  -webkit-animation-delay: 0.2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}
.loading_nav3{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:5px;
  border-radius:15px;
  padding:0;
  border:3px solid #006400;
  border-bottom:3px solid rgba(1,1,1,0.0);
  border-left:3px solid rgba(1,1,1,0.0);
  background-color:transparent !important;
  animation-name: rotateAnimation;
  -webkit-animation-name: wk-rotateAnimation;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-delay: 0.2s;
  -webkit-animation-delay: 0.2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}
.loading_nav4{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:5px;
  border-radius:15px;
  padding:0;
  border:3px solid #006400;
  border-bottom:3px solid rgba(1,1,1,0.0);
  border-left:3px solid rgba(1,1,1,0.0);
  background-color:transparent !important;
  animation-name: rotateAnimation;
  -webkit-animation-name: wk-rotateAnimation;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-delay: 0.2s;
  -webkit-animation-delay: 0.2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}

@keyframes rotateAnimation {
    0%   {transform: rotate(0deg);}
    100% {transform: rotate(360deg);}
}
@-webkit-keyframes wk-rotateAnimation {
    0%   {-webkit-transform: rotate(0deg);}
    100% {-webkit-transform: rotate(360deg);}
}

.fa{
  color:#ffffff;
  font-size:18px !important;
  position:absolute;
  left:50%;
  top:50%;
  margin-left:-9px;
  margin-top:-9px;
  -webkit-transform:scaleX(0) !important;
  transform:scaleX(0) !important;
}

.finish{
  -webkit-transform:scaleX(1) !important;
  transform:scaleX(1) !important;
}
.hide-loading{
  opacity:0;
  -webkit-transform: rotate(0deg) !important;
  transform: rotate(0deg) !important;
  -webkit-transform:scale(0) !important;
  transform:scale(0) !important;
}





    
</style>


 <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
   
   
   
   
   
   <script>
       
  $(document).ready(function() {
  $(".submit_nav1").click(function() {
    $(".submit_nav1").addClass("loading_nav1");
    setTimeout(function() {
      $(".submit_nav1").addClass("hide-loading_nav1");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 9000);
    setTimeout(function() {
      $(".submit_nav1").removeClass("loading_nav1");
      $(".submit_nav1").removeClass("hide-loading_nav1");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 9000);
  })
});
       
       
       
   </script>
   
    <script>
       
  $(document).ready(function() {
  $(".submit_nav2").click(function() {
    $(".submit_nav2").addClass("loading_nav2");
    setTimeout(function() {
      $(".submit_nav1").addClass("hide-loading_nav2");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 9000);
    setTimeout(function() {
      $(".submit_nav2").removeClass("loading_nav2");
      $(".submit_nav2").removeClass("hide-loading_nav2");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 9000);
  })
});
       
       
       
   </script>
   
   
    <script>
       
  $(document).ready(function() {
  $(".submit_nav3").click(function() {
    $(".submit_nav3").addClass("loading_nav3");
    setTimeout(function() {
      $(".submit_nav3").addClass("hide-loading");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 9000);
    setTimeout(function() {
      $(".submit_nav3").removeClass("loading_nav3");
      $(".submit_nav3").removeClass("hide-loading");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 9000);
  })
});
       
       
       
   </script>
   
   
   <script>
       
  $(document).ready(function() {
  $(".submit_nav4").click(function() {
    $(".submit_nav4").addClass("loading_nav4");
    setTimeout(function() {
      $(".submit_nav4").addClass("hide-loading_nav4");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 9000);
    setTimeout(function() {
      $(".submit_nav4").removeClass("loading_nav4");
      $(".submit_nav4").removeClass("hide-loading_nav4");
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
    }, 9000);
  })
});
      
</script>

 <?php 
 
 use App\PersonalDetail;

 ?>

 <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            
               
                
				
				 <?php
					
          $notifications = PersonalDetail::where('status','Pending')->get();
		  $total_notifications_nondocument = DB::table('personal_details')->select('nondocument','rejection')->get();
          $total_notifications = PersonalDetail::where('status','Pending')->count();
		  $total_notifications_nondocument = DB::table('personal_details')->select('nondocument','rejection')->count();
					
					$useridnotification = PersonalDetail::where('userid', Auth::user()->id)->get();
					$registred_doctor=null;


        for($i=0;$i<count($useridnotification);$i++){
            if($i==0){
                 $registred_doctor1=$useridnotification[$i];
                 $registred_doctor1[$i]=$useridnotification[$i];
            }else{
                 $registred_doctor1[$i]=$useridnotification[$i];
            }
           
        }


      ?>
		    	@if(Auth::user()->status == 0 && Auth::user()->lastName != 'Administrator' 
				&& Auth::user()->lastName != 'Attestation' && Auth::user()->lastName != 'TechnicalCommittee' && Auth::user()->lastName != 'HA'
				&& Auth::user()->lastName != 'CommissionDirector' && Auth::user()->lastName != 'Balakarzai'
				)
					
                
                                <a href="notification" class="submit_nav4"> <span class="glyphicon glyphicon-check"><b>{{__('ui-list.notifications')}}</b></span></a>

		
				@endif
				
				 
			<!--
<div class="text-center">
                  <form class="" action="{{url('/locale')}}" id="locale_form" method="post">
                      {{csrf_field()}}
                     
           
<center>              
<table><tr>
<td>
<button class="submit_nav1" id="locale"   name="locale"   value="en" {{App::getLocale()=='en'?'selected':''}}  >{{__('ui.english')}}</button>
</td>
<td>
<button class="submit_nav2" id="locale"   name="locale"   value="fa" {{App::getLocale()=='fa'?'selected':''}}  >{{__('ui.dari')}}</button>
</td>
<td>
<button class="submit_nav3" id="locale"   name="locale"   value="ps" {{App::getLocale()=='ps'?'selected':''}}  >{{__('ui.pashtu')}}</button>
</td>
</tr>
</table>
</center>
                </form>
</div> 
      -->




</ul>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->