    <!--Left side bar-->
        <div
           <?php if(App::getLocale()=='en'): ?>
                   class="col-md-3 left_col"
              <?php elseif(App::getLocale()=='fa' || App::getLocale()=='ps'): ?>
                  class="col-md-3 right_col "
              <?php endif; ?>
         >
          <div <?php if(App::getLocale()=='en'): ?>
                  class="left_col scroll-view"
              <?php elseif(App::getLocale()=='fa' || App::getLocale()=='ps'): ?>
                  class="right_col scroll-view"
              <?php endif; ?>
          >
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo e('/home'); ?>" class="site_title"> <span>
                <?php if(App::getLocale()=='en'): ?>
                      MOHE
                <?php elseif(App::getLocale()=='fa'): ?>
                     

                <?php endif; ?>
             
               </span></a>

            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
              
              </div>
              <div class="profile_info">
                <span>
                <?php if(App::getLocale()=='en'): ?>
                Welcome,<br> <?php echo e(Auth::user()->firstName. ' '.Auth::user()->lastName); ?>


                <?php elseif(App::getLocale()=='fa'): ?>
                  خوش آمدید <br>
                  <?php if(Auth::check()): ?>
                   <?php echo e(Auth::user()->firstName); ?>

                  <?php endif; ?>
                <?php endif; ?>
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
				<!--<li><a href="http://localhost:8001/chat" target="_blank" ><i class="fa fa-home"></i> <?php echo e(__('ui-list.livechat')); ?> </a></li>-->
				  
					
					<?php if(Auth::user()->lastName != "Balakarzai"): ?>

					<?php if(Auth::user()->status==0 && Auth::user()->submitted == 0): ?>
             
			
					<li><a href="<?php echo e('/home'); ?>"><i class="fa fa-home"></i> <?php echo e(__('ui-list.dashboard')); ?> </a></li>
					
                                
					
					<li><a href="<?php echo e('/admin_doctor'); ?>"><i class="fa  fa-edit" aria-hidden="true"></i><?php echo e(__('ui-list.preview')); ?><span class="fa fa-chevron-down"></span></a></li>
                  	<li><a href="<?php echo e('/logout'); ?>"><i class="fa  fa-edit" aria-hidden="true"></i>Logout<span class="fa fa-chevron-down"></span></a></li>
                    <li>
                        <a href="/changePassword">
                        <?php echo e(__('ui-list.changepassword')); ?> 
                        </a></li>
					<li>
                    
                   
				
					 <!--<li><a href="faq-template-master/index.html" target="_blank" ><i class="fa fa-home"></i> <?php echo e(__('ui-list.faq')); ?> </a></li>-->
						<!--<li><a href="video/fdas.mp4" target="_blank" ><i class="fa fa-home"></i><?php echo e(__('ui-list.registrationvideo')); ?> </a></li>-->
					
				
					
				
					<?php endif; ?>
					<?php if(Auth::user()->lastName== "Attestation" || Auth::user()->lastName== "TechnicalCommittee" || Auth::user()->lastName=="HA" || Auth::user()->lastName=="Balakarzai"|| Auth::user()->lastName=="CommissionDirector" && auth()->user()->verified()): ?>
						
               <!--   <li><a href="<?php echo e('/home'); ?>"><i class="fa fa-home"></i> <?php echo e(__('ui-list.home')); ?> </a></li>-->
                 
                  
				  
                <!--  <li><a><i class="fa  fa-edit" aria-hidden="true"></i>Student's List<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                                
                                 
                                <li>
                                    <a href="<?php echo e('/admin_doctor'); ?>">Students</a>
                                </li>

                               
                    </ul>
                  </li>-->
				   <li><a href="https://whois.icann.org/en" target="_blank" ><i class="fa fa-home"></i> <?php echo e(__('ui-list.emaildomain')); ?> </a></li>
				 
				  <li><a href="http://whed.net/home.php" target="_blank" ><i class="fa fa-home"></i> <?php echo e(__('ui-list.accrediteduniversities')); ?> </a></li>
					
				  <?php elseif(Auth::user()->lastName == "Government" && Auth::user()->status == 0): ?>
				  <li><a><i class="fa  fa-edit" aria-hidden="true"></i>Student's List<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                                
                                 
                                <li>
                                    <a href="<?php echo e('/admin_doctor'); ?>">Students</a>
                                </li>

                               
                    </ul>
                  </li>
				  
				  <li><a href="https://whois.icann.org/en" target="_blank" ><i class="fa fa-home"></i> <?php echo e(__('ui-list.emaildomain')); ?> </a></li>
				  <li><a href="http://whed.net/home.php" target="_blank" ><i class="fa fa-home"></i> <?php echo e(__('ui-list.accrediteduniversities')); ?> </a></li>
					
				  <?php elseif(Auth::user()->status == 0 && auth()->user()->verified()): ?>
				   
					<!--
					
						<li><a><i class="fa  fa-edit" aria-hidden="true"></i>Forms Downloads<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                                
                                 
                                <li>
						
                                    <a href="<?php echo e(Storage::url('public/documents/Bachelor.docx')); ?>">Bachelor's Form</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                </li>
								  <li>
                                    <a href="<?php echo e(Storage::url('public/documents/Bachelor.docx')); ?>">Master's Form</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                </li>
								

                               
                    </ul>
					 
                  </li>
				  
				  -->

				  <?php endif; ?>
				 	<?php if(Auth::user()->status==3): ?>
						
					
					<li><a href="<?php echo e('/home'); ?>"><i class="fa fa-home"></i> Dashboard </a></li>
                
                    <li><a href="/changePassword">
<?php echo e(__('ui-list.changepassword')); ?> 
</a></li>

                    <li>
                    <a  id="logout"><i class="fa fa-sign-out pull-right"></i>
                    <?php if(App::getLocale()=='en'): ?> 
                      Log Out
                    <?php elseif(App::getLocale()=='fa'): ?>
                        خروج 
                    <?php endif; ?>

                     </a>
                      </li>
                    <form id="logout_form" method="post" action="<?php echo e(route('logout')); ?>">
                      <?php echo e(csrf_field()); ?>

                    </form>
                    
                   
                    
                  
				<li><a><i class="fa  fa-edit" aria-hidden="true"></i>Account Setup<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                                
                                 
                                <li>
                                    <a href="<?php echo e('register'); ?>">Create Account</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                </li>
								

                               
                    </ul>
                  </li>
				  
				   
                  
                  <li><a><i class="fa  fa-edit" aria-hidden="true"></i> <?php echo e(__('ui-list.setup')); ?><span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                             <!--   <li>
                                 <a href="<?php echo e('/nationality'); ?>">Nationality</a>
                                </li>-->
                                 
                                <li>
                                    <a href="<?php echo e('/medical_degree'); ?>">Countries</a>
                                </li>
                                
                               <!--  <li>
                                    <a href="<?php echo e('/university'); ?>">Universities</a>
                                </li>
                               <li>
                                    <a href="<?php echo e('/hospital'); ?>">Hospital</a>
                                </li>
                                <li>
                                    <a href="<?php echo e('/profession'); ?>">Profession</a>
                                </li>-->

                                 
                             </ul>
                  </li>
				  
				  
				<!-- <li><a><i class="fa  fa-edit" aria-hidden="true"></i>Student's List<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                                
                                 
                                <li>
                                    <a href="<?php echo e('/admin_doctor'); ?>">Students</a>
                                </li>

                               
                    </ul>
                  </li>
				  -->
				  
				   <li><a href="<?php echo e('/logs'); ?>"><i class="fa fa-home"></i>  <?php echo e(__('ui-list.track_activities')); ?>  </a></li>
				   
                 
				<li><a href="<?php echo e('/reportgenerate'); ?>"><i class="fa fa-home"></i> <?php echo e(__('ui-list.Generate_Reports')); ?> </a></li>
					<?php endif; ?>
                 
					 <?php if(Auth::user()->lastName=="Attestation" || Auth::user()->lastName=="TechnicalCommittee" || Auth::user()->lastName=="HA" || Auth::user()->lastName=="Balakarzai" && auth()->user()->verified()): ?>
						 
					  
                 
				 <!--   <li><a href="<?php echo e('/reportgenerate'); ?>"><i class="fa fa-home"></i> <?php echo e(__('ui-list.Generate_Reports')); ?>  </a></li>-->
					
					<li><a><i class="fa  fa-edit" aria-hidden="true"></i> <?php echo e(__('ui-list.setup')); ?><span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                             <!--   <li>
                                 <a href="<?php echo e('/nationality'); ?>">Nationality</a>
                                </li>-->
                                 
                                <li>
                                    <a href="<?php echo e('/medical_degree'); ?>">Countries</a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo e('/university'); ?>">Universities</a>
                                </li>
                               <!-- <li>
                                    <a href="<?php echo e('/hospital'); ?>">Hospital</a>
                                </li>
                                <li>
                                    <a href="<?php echo e('/profession'); ?>">Profession</a>
                                </li>-->

                                 
                             </ul>
                  </li>
				  
					
					
					 
					 <?php endif; ?>
				  
				<?php elseif(Auth::user()->lastName == "Balakarzai" && Auth::user()->status == 0): ?>
					
			<!--		<li><a href="<?php echo e('/reportgenerate'); ?>"><i class="fa fa-home"></i> <?php echo e(__('ui-list.Generate_Reports')); ?>  </a></li>-->
					
					<li><a href="<?php echo e('/logs'); ?>"><i class="fa fa-home"></i>  <?php echo e(__('ui-list.track_activities')); ?>  </a></li>
						<li><a href="<?php echo e('/logout'); ?>"><i class="fa  fa-edit" aria-hidden="true"></i>Logout<span class="fa fa-chevron-down"></span></a></li>
                    <li>
                        <a href="/changePassword">
                        <?php echo e(__('ui-list.changepassword')); ?> 
                        </a></li>
					<li>
                    
					
					<!-- <li><a><i class="fa  fa-edit" aria-hidden="true"></i>Student's List<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                                
                                 
                                <li>
                                    <a href="<?php echo e('/admin_doctor'); ?>">Students</a>
                                </li>

                               
                    </ul>
                  </li>-->
					
					
					<?php endif; ?>
				  
                  
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo e('/'); ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
            <!-- /sidebar menu -->
          </div>
        </div>

        <!--End left side bar-->



