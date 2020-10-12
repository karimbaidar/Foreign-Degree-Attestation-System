@extends('admin-layout.app')


@section('custom_css_links')




<style>

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.button {
    display: block;
}


.button1 {
    background-color: #73879C; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.button1 {
    display: block;
}



/*dashboard top 4 panels css*/
.squarebox h4 {
    font-size: 14px;
    padding: 0;
    margin: 0;
}

.square_box .number {
    font-size: 30px;
    float: left;
    clear: both;
    margin-top: 0;
    text-align: left;
    font-weight: 700;
}

.square_box span {
    font-size: 12px;
    float: left;
}

.no-radius {
    border-radius: 4px;
}

.lightbluebg {
    background: #418bca;
    color: #FFF;
    font-family: Lato, sans-serif;
    margin: 10px 0;
}

.redbg {
    background: #EF6F6C;
    color: #FFF;
    font-family: Lato, sans-serif;
    margin: 10px 0;
}

.goldbg {
    background: #F89A14;
    color: #FFF;
    font-family: Lato, sans-serif;
    margin: 10px 0;
}

.palebluecolorbg {
    background: #00bc8c;
    color: #FFF;
    font-family: Lato, sans-serif;
    margin: 10px 0;
}

.breadcrumb #active a, .breadcrumb a, .breadcrumb a:hover {
    color: #428bca;
    text-decoration: none;
}

.bg-aqua {
    background: #028482
}

img.flag {
    height: 16px;
    width: 28px;
    padding-right: 10px;
}

.has-error .form-control {
    border-color: #EF6F6C;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}

.has-error .control-label {
    color: #EF6F6C;
}
.error{
    color:#ef6f6c;
}
.error span{
    color: #ef6f6c;
}
.has-success .form-control {
    border-color: #00bc8c;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}

.has-success .control-label {
    color: #00bc8c;
}

.has-warning .form-control {
    border-color: #F89A14;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
}

.has-warning .control-label {
    color: #F89A14;
}

.panel-heading small {
    line-height: 23px;
    font-size: 12px;
}

.orange_small_squarebox {
    width: 4px;
    height: 0;
    border: 5px solid #F89A14;
    overflow: hidden;
}

.ccc_border {
    border: 1px solid #ccc;
    padding: 1px;
}

.panel-title .ccc_border {
    margin-top: 20px;
}

.panel-border {
    border: 1px solid #ddd;
}

.panel-border .panel-heading {
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
}

.white-text {
    color: #fff;
    opacity: 0.7;
}

/* this is for alligining livicon and tab title in same lineheight */
.page-sidebar-menu .livicon {
    float: left;
    margin-top: -2px;
    margin-right: 10px;
}

.list1 {
    border-bottom: 1px solid #ccc;
    display: inline-block;
    width: 100%;
    padding: 2px 5px 1px 3px !important;
    background: #fff;
    float: left;
}

.todoitemjs {
    padding-top: 3px;
}

.text-col {
    color: #fff !important;
}

.btn-success.active.focus,.btn-success.active:focus,.btn-success.active:hover,.btn-success:active.focus,.btn-success:active:focus,.btn-success:active:hover,.btn-success.active,.btn-success:active,.btn-success.focus, .btn-success:focus{
    color: #fff;
    background-color: #1bc398  ;
    border-color: #1bc398  ;
}
.btn-primary.active.focus,.btn-primary.active:focus,.btn-primary.active:hover,.btn-primary:active.focus,.btn-primary:active:focus,.btn-primary:active:hover,.btn-primary.active,.btn-primary:active,.btn-primary.focus, .btn-primary:focus{
    color: #fff;
    background-color: #468DCA  ;
    border-color: #468DCA;
}
.btn-info.active.focus,.btn-info.active:focus,.btn-info.active:hover,.btn-info:active.focus,.btn-info:active:focus,.btn-info:active:hover,.btn-info.active,.btn-info:active,.btn-info.focus, .btn-info:focus{
    color: #fff;
    background-color: #67C5ff  ;
    border-color: #67C5ff  ;
}
.btn-warning.active.focus,.btn-warning.active:focus,.btn-warning.active:hover,.btn-warning:active.focus,.btn-warning:active:focus,.btn-warning:active:hover,.btn-warning.active,.btn-warning:active,.btn-warning.focus, .btn-warning:focus{
    color: #fff;
    background-color: #EA921F  ;
    border-color: #EA921F  ;
}
.btn-danger.active.focus,.btn-danger.active:focus,.btn-danger.active:hover,.btn-danger:active.focus,.btn-danger:active:focus,.btn-danger:active:hover,.btn-danger.active,.btn-danger:active,.btn-danger.focus, .btn-danger:focus{
    color: #fff;
    background-color: #E6553B  ;
    border-color: #E6553B  ;
}

.btn-default:hover,.btn-default:active {
    color: #fff;
    background-color: #A9B6B1 !important;
    border-color: #A9B6B1 !important;

}

.text-primary {
    color: #428BCA;
}

.text-success {
    color: #01BC8C;
}

.text-warning {
    color: #F89A14;
}

.text-danger {
    color: #f56954;
}






</style>



@endsection()


@section('page-content')

<div class="text-center">
                  <form class="" action="{{url('/locale')}}" id="locale_form" method="post">
                      {{csrf_field()}}

<center>              
<table><tr>
<td>
<button class="button1" id="locale"   name="locale"   value="en" {{App::getLocale()=='en'?'selected':''}}  >{{__('ui.english')}}</button>
</td>
<td>
<button class="button1" id="locale"   name="locale"   value="fa" {{App::getLocale()=='fa'?'selected':''}}  >{{__('ui.dari')}}</button>
</td>
<td>
<button class="button1" id="locale"   name="locale"   value="ps" {{App::getLocale()=='ps'?'selected':''}}  >{{__('ui.pashtu')}}</button>
</td>
</tr>
</table>
</center>
                </form>
</div> 

	<div class="row tile_count btn-success">
	<div class='hide-it'> <center><font size="3px" color="white"><b> {{auth()->user()->verified()? __('ui-list.verificationmessage3'): __('ui-list.verificationmessage4')}}</b></font></center></div>
  	</div>
	@if(Auth::user()->status==3)
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            
            <section class="content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="lightbluebg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 text-right">
                                            <span>Views Today</span>
                                            <div class="number" id="myTargetElement1"></div>
                                        </div>
                                        <i class="livicon  pull-right" data-name="eye-open" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Registered Graduates</small>
                                            <h4 id="myTargetElement1.1">  <a style="border-left:2px solid grey" class="btn btn-primary" href="{{'/admin_doctor'}}">{{$total_doctors}}</a> 
            </h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Total Universities</small>
                                            <h4 id="myTargetElement1.2">  	  <a style="border-left:2px solid grey" class="btn btn-primary" href="{{'/university'}}">{{$total_unis}}</a> 
           </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInUpBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="redbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Today's Sales</span>
                                            <div class="number" id="myTargetElement2"></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="piggybank" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Total Pending</small>
                                            <h4 id="myTargetElement2.1"> <a style="border-left:2px solid grey" class="btn btn-primary" href="{{'/pending'}}">{{$total_pending}}</a> 
           </h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Total Approved</small>
                                            <h4 id="myTargetElement2.2"> <a style="border-left:2px solid grey" class="btn btn-primary" href="{{'/approval'}}">{{$total_approved}}</a> 
           </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 margin_10 animated fadeInDownBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="goldbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Subscribers</span>
                                            <div class="number" id="myTargetElement3"></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="archive-add" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Total Rejected</small>
                                            <h4 id="myTargetElement3.1"> <a style="border-left:2px solid grey" class="btn btn-primary" href="{{'/rejection'}}">{{$total_rejected}}</a> 
            </h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Registered Users</small>
                                            <h4 id="myTargetElement3.2"><a style="border-left:2px solid grey"  class="btn btn-primary" href="{{'/usertable'}}">{{$total_users}} </a> 								
          </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="palebluecolorbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Registered Users</span>
                                            <div class="number" id="myTargetElement4"></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="users" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Total Bachelor</small>
                                            <h4 id="myTargetElement4.1"><a style="border-left:2px solid grey"  class="btn btn-primary" href="{{'/usertable'}}">{{$total_users}} </a></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Total Master/PHD</small>
                                            <h4 id="myTargetElement4.2"><a style="border-left:2px solid grey"  class="btn btn-primary" href="{{'/usertable'}}">{{$total_users}} </a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row-->
                <div class="row ">
                    <div class="col-md-8 col-sm-6">
                        <div class="panel panel-border">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="dashboard" data-size="20" data-loop="true" data-c="#F89A14" data-hc="#F89A14"></i> Realtime Server Load
                                    <small>- Load on the Server</small>
                                </h3>
                            </div>
                            <div class="panel-body">
                               <canvas id="canvas" height="180px" width="900px"></canvas>
                            </div>
                        </div>
						
						 <div class="panel panel-border">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="dashboard" data-size="20" data-loop="true" data-c="#F89A14" data-hc="#F89A14"></i> Realtime Server Load
                                    <small>- Load on the Server</small>
                                </h3>
                            </div>
                            <div class="panel-body">
                               <canvas id="canvas1" height="180px" width="900px"></canvas>
                            </div>
                        </div>
                    </div>
					
					
                    <div class="col-md-4 col-sm-6">
                        <div class="panel blue_gradiant_bg">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Server Stats
                                    <small class="white-text">- Monthly Report</small>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    
                                        
                                           
                                        <canvas id="canvas2" height="180px" width="200px"></canvas>
													
	
                                       
                                   
                                </div>
                            </div>

                        </div>
						
                        <!-- BEGIN Percentage monitor -->
                        <div class="panel green_gradiante_bg ">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="spinner-six" data-size="16" data-loop="false" data-c="#fff" data-hc="white"></i> Result vs Target
                                </h3>
                            </div>
                            <div class="panel-body nopadmar">
                                   <canvas id="canvas3" height="180px" width="200px"></canvas>
													
	
                                <!-- /.row -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
						
						
                        <!-- END BEGIN Percentage monitor-->
                    </div>
                </div>
                <div class="clearfix"></div>
               
                <div class="clearfix"></div>
                
            </section>
        </aside>
        <!-- right-side -->
    </div>
	
	
	
	
			
			
			
			
           
  </div>


      


   <!--      Students By Registration Type            -->

  
            

   </div>




            @elseif(Auth::user()->status == 0 && auth()->user()->verified())
			<center><h1>{{__('ui-list.a1')}} </h2> <br/>
				
					      @if(Auth::user()->status == 0 && Auth::user()->lastName != 'Balakarzai' && Auth::user()->lastName != 'Attestation'
						  && Auth::user()->lastName != 'TechnicalCommittee'
						  && Auth::user()->lastName != 'HA'
						  && Auth::user()->lastName != 'CommissionDirector'
						 
						  )
						  
						  
						  
							  					 
												 <button class="button"><a href="{{'/personal_detail'}}" ><font color="white"> {{__('ui-list.bachelorAttestation')}}</font></a></button>
											
												<br/><br/>
											
												<button class="button"><a href="{{'/personal_detailMaster'}}" ><font color="white"> {{__('ui-list.MasterAttestation')}}</font></a></button>
							
													
												<br/><br/>
												
											
												<button class="button"><a href="{{'/personal_detailPHD'}}" ><font color="white">{{__('ui-list.PHDAttestation')}} </font></a></button>
												
												
												
											
											
               @else

						   <a href="{{'#'}}"><font size="2px" color="white" ><h3>{{__('ui-list.printpreview')}}   
						   
						    @if(App::getLocale()=='en')
							<!-- <img src="{{Storage::url('public/documents/download.png')}}" width="100px" height="50px">--> 
						    @elseif(App::getLocale()=='fa' || App::getLocale()=='ps')
							<!-- <img src="{{Storage::url('public/documents/right.png')}}" width="100px" height="50px"> -->
						  
							@endif
						   
						   </b> </h3></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
						   
						
													
												
											
												
												
										
												
												
          
							
						  @endif
         
          

        </center>
			
           

			@endif
     

	
	
 


          

		

            

            

@endsection

@section('scripts')
  <script type="text/javascript" src="{{URL::asset('vendors/Chart.js/dist/Chart.bundle.min.js')}}"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
  
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="//js.pusher.com/3.1/pusher.min.js"></script>
   
    <script type="text/javascript">
      var notificationsWrapper   = $('.dropdown-notifications');
      var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
      var notificationsCountElem = notificationsToggle.find('i[data-count]');
      var notificationsCount     = parseInt(notificationsCountElem.data('count'));
      var notifications          = notificationsWrapper.find('ul.dropdown-menu');

      if (notificationsCount <= 0) {
        notificationsWrapper.hide();
      }

      // Enable pusher logging - don't include this in production
      // Pusher.logToConsole = true;

      var pusher = new Pusher('3efb026894fc9a13546a', {
        encrypted: true
      });

      // Subscribe to the channel we specified in our Laravel Event
      var channel = pusher.subscribe('status-liked');

      // Bind a function to a Event (the full Laravel class)
      channel.bind('App\\Events\\StatusLiked', function(data) {
        var existingNotifications = notifications.html();
        var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
        var newNotificationHtml = `
          <li class="notification active">
              <div class="media">
                <div class="media-left">
                  <div class="media-object">
                    <img src="https://api.adorable.io/avatars/71/`+avatar+`.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                  </div>
                </div>
                <div class="media-body">
                  <strong class="notification-title">`+data.message+`</strong>
                  <!--p class="notification-desc">Extra description can go here</p-->
                  <div class="notification-meta">
                    <small class="timestamp">about a minute ago</small>
                  </div>
                </div>
              </div>
          </li>
        `;
        notifications.html(newNotificationHtml + existingNotifications);

        notificationsCount += 1;
        notificationsCountElem.attr('data-count', notificationsCount);
        notificationsWrapper.find('.notif-count').text(notificationsCount);
        notificationsWrapper.show();
      });
    </script>
  
  
  
  
  
  
  
  
  
  
  
  
  
   <script>
        var url = "{{url('/chart')}}";
       
           // var ctx = document.getElementById("canvas").getContext('2d');
               
			   
			   //get the pie chart canvas
    
    
	var Rejected = {{$total_rejected}};
    var Pending = {{$total_pending}};
    var Approved = {{$total_approved}};
	
	
	var ctx1 = document.getElementById("canvas").getContext('2d');
    //pie chart data
    var data1 = {
        labels: ["Total Pending", "Total Approved", "Total Rejected"],
        datasets: [
            {
                label: "Students Statistics",
                data: [Rejected, Pending, Approved],
                backgroundColor: [
                    "#DEB887",
                    "#A9A9A9",
                    "#DC143C"
                    
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B"
                    
                ],
                borderWidth: [1, 1, 1]
            }
        ]
    };

   

    //options
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Students Statistics",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };

    //create Chart class object
    var chart1 = new Chart(ctx1, {
        type: "doughnut",
        data: data1,
        options: options
    });

  
			   
			   

  
  
   
	
	var ctx2 = document.getElementById("canvas1").getContext('2d');
    //pie chart data
    var data2 = {
        labels: ["Rejected", "Approved", "Pending"],
        datasets: [
            {
                label: "Students Statistics",
                data: [Rejected, Approved, Pending],
                backgroundColor: [
                    "#DEB887",
                    "#A9A9A9",
                    "#DC143C"
                    
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B"
                    
                ],
                borderWidth: [1, 1, 1]
            }
        ]
    };

   

    //options
    var options1 = {
        responsive: true,
        title: {
            display: true,
            position: "bottom",
            text: "Demographics",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };

    //create Chart class object
    var chart1 = new Chart(ctx2, {
        type: "bar",
        data: data2,
        options: options1
    });

  
  
  
  
	var ctx3 = document.getElementById("canvas2").getContext('2d');
    //pie chart data
    var data3 = {
        labels: ["Rejected", "Approved", "Pending"],
        datasets: [
            {
                label: "Students Statistics",
                data: [Rejected, Approved, Pending],
                backgroundColor: [
                    "#DEB887",
                    "#A9A9A9",
                    "#DC143C"
                    
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B"
                    
                ],
                borderWidth: [1, 1, 1]
            }
        ]
    };

   

    //options
    var options2 = {
        responsive: true,
        title: {
            display: true,
            position: "bottom",
            text: "Demographics",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };

    //create Chart class object
    var chart2 = new Chart(ctx3, {
        type: "pie",
        data: data3,
        options: options2
    });

			   
		


	  
	var ctx4 = document.getElementById("canvas3").getContext('2d');
    //pie chart data
    var data4 = {
        labels: ["Rejected", "Approved", "Pending"],
        datasets: [
            {
                label: "Students Statistics",
                data: [Rejected, Approved, Pending],
                backgroundColor: [
                    "#DEB887",
                    "#A9A9A9",
                    "#DC143C"
                    
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B"
                    
                ],
                borderWidth: [1, 1, 1]
            }
        ]
    };

   

    //options
    var options3 = {
        responsive: true,
        title: {
            display: true,
            position: "bottom",
            text: "Demographics",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
			
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };

    //create Chart class object
    var chart3 = new Chart(ctx4, {
        type: "line",
        data: data4,
        options: options3
    });
		
			   
        </script>
  
  
  
  
  
  
  
  
  
  
  
  <script>
  
  $(function() {
// setTimeout() function will be fired after page is loaded
// it will wait for 5 sec. and then will fire
// $("#successMessage").hide() function
    
    $(".hide-it").hide(10000);

});
  
  
  </script>

  
  
 
  
  


@endsection


