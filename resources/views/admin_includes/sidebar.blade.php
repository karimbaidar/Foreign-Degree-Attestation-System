    <!--Left side bar-->
        <div
           @if(App::getLocale()=='en')
                   class="col-md-3 left_col"
              @elseif(App::getLocale()=='fa' || App::getLocale()=='ps')
                  class="col-md-3 right_col "
              @endif
         >
          <div @if(App::getLocale()=='en')
                  class="left_col scroll-view"
              @elseif(App::getLocale()=='fa' || App::getLocale()=='ps')
                  class="right_col scroll-view"
              @endif
          >
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{'/home'}}" class="site_title"> <span>
                @if(App::getLocale()=='en')
                      MOHE
                @elseif(App::getLocale()=='fa')
                     

                @endif
             
               </span></a>

            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
              
              </div>
              <div class="profile_info">
                <span>
                @if(App::getLocale()=='en')
                Welcome,<br> {{Auth::user()->firstName. ' '.Auth::user()->lastName}}

                @elseif(App::getLocale()=='fa')
                  خوش آمدید <br>
                  @if(Auth::check())
                   {{Auth::user()->firstName}}
                  @endif
                @endif
                </span>
                <h2>
                 
                </h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu " >
              <div class="menu_section">
               
                <ul class="nav side-menu">
				<!--<li><a href="http://localhost:8001/chat" target="_blank" ><i class="fa fa-home"></i> {{__('ui-list.livechat')}} </a></li>-->
				  
					
					@if(Auth::user()->lastName != "Balakarzai")

					@if(Auth::user()->status==0 && Auth::user()->submitted == 0)
             
			
					<li><a href="{{'/home'}}"><i class="fa fa-home"></i> {{__('ui-list.dashboard')}} </a></li>
					
                                
					
					<li><a href="{{'/admin_doctor'}}"><i class="fa  fa-edit" aria-hidden="true"></i>{{__('ui-list.preview')}}<span class="fa fa-chevron-down"></span></a></li>
                  	<li><a href="{{'/logout'}}"><i class="fa  fa-edit" aria-hidden="true"></i>Logout<span class="fa fa-chevron-down"></span></a></li>
                    <li>
                        <a href="/changePassword">
                        {{__('ui-list.changepassword')}} 
                        </a></li>
					<li>
                    
                   
				
					 <!--<li><a href="faq-template-master/index.html" target="_blank" ><i class="fa fa-home"></i> {{__('ui-list.faq')}} </a></li>-->
						<!--<li><a href="video/fdas.mp4" target="_blank" ><i class="fa fa-home"></i>{{__('ui-list.registrationvideo')}} </a></li>-->
					
				
					
				
					@endif
					@if(Auth::user()->lastName== "Attestation" || Auth::user()->lastName== "TechnicalCommittee" || Auth::user()->lastName=="HA" || Auth::user()->lastName=="Balakarzai"|| Auth::user()->lastName=="CommissionDirector" && auth()->user()->verified())
						
               <!--   <li><a href="{{'/home'}}"><i class="fa fa-home"></i> {{__('ui-list.home')}} </a></li>-->
                 
                  
				  
                <!--  <li><a><i class="fa  fa-edit" aria-hidden="true"></i>Student's List<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                                
                                 
                                <li>
                                    <a href="{{'/admin_doctor'}}">Students</a>
                                </li>

                               
                    </ul>
                  </li>-->
				   <li><a href="https://whois.icann.org/en" target="_blank" ><i class="fa fa-home"></i> {{__('ui-list.emaildomain')}} </a></li>
				 
				  <li><a href="http://whed.net/home.php" target="_blank" ><i class="fa fa-home"></i> {{__('ui-list.accrediteduniversities')}} </a></li>
					
				  @elseif(Auth::user()->lastName == "Government" && Auth::user()->status == 0)
				  <li><a><i class="fa  fa-edit" aria-hidden="true"></i>Student's List<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                                
                                 
                                <li>
                                    <a href="{{'/admin_doctor'}}">Students</a>
                                </li>

                               
                    </ul>
                  </li>
				  
				  <li><a href="https://whois.icann.org/en" target="_blank" ><i class="fa fa-home"></i> {{__('ui-list.emaildomain')}} </a></li>
				  <li><a href="http://whed.net/home.php" target="_blank" ><i class="fa fa-home"></i> {{__('ui-list.accrediteduniversities')}} </a></li>
					
				  @elseif(Auth::user()->status == 0 && auth()->user()->verified())
				   
					<!--
					
						<li><a><i class="fa  fa-edit" aria-hidden="true"></i>Forms Downloads<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                                
                                 
                                <li>
						
                                    <a href="{{Storage::url('public/documents/Bachelor.docx')}}">Bachelor's Form</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                </li>
								  <li>
                                    <a href="{{Storage::url('public/documents/Bachelor.docx')}}">Master's Form</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                </li>
								

                               
                    </ul>
					 
                  </li>
				  
				  -->

				  @endif
				 	@if(Auth::user()->status==3)
						
					
					<li><a href="{{'/home'}}"><i class="fa fa-home"></i> Dashboard </a></li>
                
                    <li><a href="/changePassword">
{{__('ui-list.changepassword')}} 
</a></li>

                    <li>
                    <a  id="logout"><i class="fa fa-sign-out pull-right"></i>
                    @if(App::getLocale()=='en') 
                      Log Out
                    @elseif(App::getLocale()=='fa')
                        خروج 
                    @endif()

                     </a>
                      </li>
                    <form id="logout_form" method="post" action="{{route('logout')}}">
                      {{csrf_field()}}
                    </form>
                    
                   
                    
                  
				<li><a><i class="fa  fa-edit" aria-hidden="true"></i>Account Setup<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                                
                                 
                                <li>
                                    <a href="{{'register'}}">Create Account</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                </li>
								

                               
                    </ul>
                  </li>
				  
				   
                  
                  <li><a><i class="fa  fa-edit" aria-hidden="true"></i> {{__('ui-list.setup')}}<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                             <!--   <li>
                                 <a href="{{'/nationality'}}">Nationality</a>
                                </li>-->
                                 
                                <li>
                                    <a href="{{'/medical_degree'}}">Countries</a>
                                </li>
                                
                               <!--  <li>
                                    <a href="{{'/university'}}">Universities</a>
                                </li>
                               <li>
                                    <a href="{{'/hospital'}}">Hospital</a>
                                </li>
                                <li>
                                    <a href="{{'/profession'}}">Profession</a>
                                </li>-->

                                 
                             </ul>
                  </li>
				  
				  
				<!-- <li><a><i class="fa  fa-edit" aria-hidden="true"></i>Student's List<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                                
                                 
                                <li>
                                    <a href="{{'/admin_doctor'}}">Students</a>
                                </li>

                               
                    </ul>
                  </li>
				  -->
				  
				   <li><a href="{{'/logs'}}"><i class="fa fa-home"></i>  {{__('ui-list.track_activities')}}  </a></li>
				   
                 
				<li><a href="{{'/reportgenerate'}}"><i class="fa fa-home"></i> {{__('ui-list.Generate_Reports')}} </a></li>
					@endif
                 
					 @if(Auth::user()->lastName=="Attestation" || Auth::user()->lastName=="TechnicalCommittee" || Auth::user()->lastName=="HA" || Auth::user()->lastName=="Balakarzai" && auth()->user()->verified())
						 
					  
                 
				 <!--   <li><a href="{{'/reportgenerate'}}"><i class="fa fa-home"></i> {{__('ui-list.Generate_Reports')}}  </a></li>-->
					
					<li><a><i class="fa  fa-edit" aria-hidden="true"></i> {{__('ui-list.setup')}}<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                             <!--   <li>
                                 <a href="{{'/nationality'}}">Nationality</a>
                                </li>-->
                                 
                                <li>
                                    <a href="{{'/medical_degree'}}">Countries</a>
                                </li>
                                
                                <li>
                                    <a href="{{'/university'}}">Universities</a>
                                </li>
                               <!-- <li>
                                    <a href="{{'/hospital'}}">Hospital</a>
                                </li>
                                <li>
                                    <a href="{{'/profession'}}">Profession</a>
                                </li>-->

                                 
                             </ul>
                  </li>
				  
					
					
					 
					 @endif
				  
				@elseif(Auth::user()->lastName == "Balakarzai" && Auth::user()->status == 0)
					
			<!--		<li><a href="{{'/reportgenerate'}}"><i class="fa fa-home"></i> {{__('ui-list.Generate_Reports')}}  </a></li>-->
					
					<li><a href="{{'/logs'}}"><i class="fa fa-home"></i>  {{__('ui-list.track_activities')}}  </a></li>
						<li><a href="{{'/logout'}}"><i class="fa  fa-edit" aria-hidden="true"></i>Logout<span class="fa fa-chevron-down"></span></a></li>
                    <li>
                        <a href="/changePassword">
                        {{__('ui-list.changepassword')}} 
                        </a></li>
					<li>
                    
					
					<!-- <li><a><i class="fa  fa-edit" aria-hidden="true"></i>Student's List<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                                
                                 
                                <li>
                                    <a href="{{'/admin_doctor'}}">Students</a>
                                </li>

                               
                    </ul>
                  </li>-->
					
					
					@endif
				  
                  
                </ul>
              </div>
            </div>

              <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" >
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" >
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{'/'}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
            <!-- /sidebar menu -->
          </div>
        </div>

        <!--End left side bar-->



