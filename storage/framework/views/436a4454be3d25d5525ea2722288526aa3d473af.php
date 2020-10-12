<!-- For Refreshing the page upon pressing back button -->
<?php
header("Cache-Control: no-store, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
echo time();
?>


<?php $__env->startSection('custom_css_links'); ?>
    <style>
        <?php if(App::isLocale('fa')): ?>
        label{
            text-align:left !important;
            
        }
        <?php endif; ?>
    </style>
    
    <style>
        
        @import  url(https://fonts.googleapis.com/css?family=Raleway:100,600,400);


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
.submit{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  width:100px;
  height:40px;
  background-color:#006400;
  border:2px solid #006400;
  border-radius:10px;
  color:#FFFFFF;
  font-size:17px;
  cursor:pointer !important;
  outline:none;
  margin-top:20px;

}

.submit1{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  width:200px;
  height:30px;
  
 
 
  color:#FFFFFF;
  font-size:17px;
  cursor:pointer !important;
  outline:none;
  margin-top:20px;
    margin-left:40px;
}
.submit2{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  width:200px;
  height:30px;
  

  color:#FFFFFF;
  font-size:17px;
  cursor:pointer !important;
  outline:none;
  margin-top:10px;
margin-left:40px;
}


.submit:hover{
  background-color:#222222;
}


.loading{
  font-size:0;
  width:30px;
  height:30px;
    margin-top:20px;
  margin-left:40px;
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


.loading1{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:20px;
    margin-left:40px;
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


.loading1{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:10px;
margin-left:40px;
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



@keyframes  rotateAnimation {
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



    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-content'); ?>
<center>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2"><br/><br/>
            <div class="panel panel-default">
                <div class="panel-heading text-center" style="font-size:20px" ><?php echo e(__('ui-list.registeryouraccount')); ?></div>
				<?php if(session('error')): ?>
					<div class="alert alert-danger"><?php echo e(session('error')); ?></div>
				<?php endif; ?>
                <div class="panel-body">

                					<?php if($user = Auth::user() && Auth::user()->status == 0 || $user = Auth::user() && Auth::user()->lastName == "TechnicalCommittee" || $user = Auth::user() && Auth::user()->lastName == "HA" || $user = Auth::user() && Auth::user()->lastName == "CommissionDirector" || $user = Auth::user() && Auth::user()->lastName == "Balakarzai" || $user = Auth::user() &&  Auth::user()->lastName == "Attestation" || $user = Auth::user() && Auth::user()->status == 0 && Auth::user()->lastName != "Attestation" && Auth::user()->lastName != "TechnicalCommittee" && Auth::user()->lastName != "HA" && Auth::user()->lastName != "CommissionDirector" && Auth::user()->lastName != "Balakarzai"&& Auth::user()->lastName != "Administrator"): ?>
                                        
                                    
                                	<h1>Sorry, please logout from your account first</h1>
						
                                    <?php else: ?> 


                    <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>

						
                        <div class="form-group<?php echo e($errors->has('firstName') ? ' has-error' : ''); ?>">
                            <label for="firstName" class="col-md-4 control-label"><?php echo e(__('ui-list.name')); ?></label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control" name="firstName" value="<?php echo e(old('firstName')); ?>" required autofocus>

                                <?php if($errors->has('firstName')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('firstName')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

						
						<?php if($user = Auth::user()): ?>
							<?php if(Auth::user()->lastName == "Administrator" && Auth::user()->status == 3): ?>
								
						 
							
							
							
						<div class="form-group<?php echo e($errors->has('lastName') ? ' has-error' : ''); ?>">
                            <label for="firstName" class="col-md-4 control-label">Role Setup</label>

                            <div class="col-md-6">
                              <select id="lastName" tabindex="6" required name="lastName" class="form-control" >
                                  <option value="0">Select Role</option>
                                  
                                  <option value="Attestation">Attestation Department</option>
								  <option value="TechnicalCommittee">Technical Committee</option>
								  <option value="HA">H.A commission</option>
								  <option value="CommissionDirector">Commission Director</option>
                                 
                          </select>
									
                                <?php if($errors->has('lastName')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('lastName')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						<?php endif; ?>
						<?php else: ?>
							<div class="form-group<?php echo e($errors->has('lastName') ? ' has-error' : ''); ?>">
                            <label for="firstName" class="col-md-4 control-label"><?php echo e(__('ui-list.lastName')); ?></label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control" name="lastName"  value="<?php echo e(old('lastName')); ?>" required autofocus>
									
                                <?php if($errors->has('lastName')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('lastName')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						<?php endif; ?>
                        
						
                      
                      
                          

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label"><?php echo e(__('ui.email')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>
                                <input type="hidden" id="refresh" value="no">
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label"><?php echo e(__('ui.password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label"><?php echo e(__('ui.confirm_password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <br>
                        
         
                        <div class="form-group">
                            <div class="col-md-5"></div>
                            <div class="text-center">
                                <button type="submit" id="submit" class="submit" >
                                    <?php echo e(__('ui.register')); ?>

                                </button>
								
                            </div>
							
                        </div>
                   =
                    </form>

                    <?php endif; ?>

					<a href="/login" ><i class="fa fa-arrow-left"></i> <?php echo e(__('ui.back')); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
</center>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>



   <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
   
   
   <script>
       
$(document).ready(function(e) {
    var $input = $('#refresh');

    $input.val() == 'yes' ? location.reload(true) : $input.val('yes');
});
       
   </script>
   
   
   
   <script>
       
  $(document).ready(function() {
  $(".submit").click(function() {
    $(".submit").addClass("loading");
    setTimeout(function() {
      $(".submit").addClass("hide-loading");
      // For failed icon just replace ".done" with ".failed"
      $(".done").addClass("finish");
    }, 9000);
    setTimeout(function() {
      $(".submit").removeClass("loading");
      $(".submit").removeClass("hide-loading");
   
      $(".done").removeClass("finish");
      $(".failed").removeClass("finish");
      
    }, 9000);
  })
});
       
       
       
   </script>
   
   <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>