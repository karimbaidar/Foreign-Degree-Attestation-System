<?php $__env->startSection('custom_css_links'); ?>

   <!-- Datatables related files  -->
    <link href="<?php echo e(URL::asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')); ?>" rel="stylesheet">
  <style>
    table th,table td{
      text-align:center;
    }
    #myTable_filter label{
      float:left;
    }
  </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-content'); ?>




<form class="form-horizontal">


  <div class="row" style="margin-top:20px">
    <!-- <div class="col-md-1 col-sm-2 col-xs-12">

    </div> -->
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" >
        <div class="x_title">
            <a href="/admin_doctor" ><i class="fa fa-arrow-left"></i> <?php echo e(__('ui.back')); ?></a>
        
        
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            
        
<div class="row">


  <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" >
        <div class="x_title btn-info">
            <a href="/doctor" ></i></a>
            <a id="printOrder" href="#"></a>
          <div class="text-center">
              <h3 class="text-center" ><?php echo e(__('ui-list.studentinformation')); ?></h3>
          </div>
        
          <div class="clearfix"></div>
        </div>
        <div class="x_content">   

            
         <table class="table   table-bordered table-condensed table-hover table-striped" style="position:inline">
                    <thead>
                      <tr>
                        <th style="text-align:center;" class="btn-primary"><?php echo e(__('ui-list.no')); ?></th>      
                        
                        
                        <td class="btn-primary"><?php echo e($registred_doctor->reg_no); ?></td>
                        <td rowspan="8">
                 
                           <!-- <img src="<?php echo e(asset('storage/app/public/images/'.$registred_doctor->image)); ?>" style="width:220px;height:220px;" />-->
							<img src=" <?php echo e(asset('storage/documents/'.$registred_doctor->image)); ?>" style="width:220px;height:220px;" />
             
                        </td>
                      </tr>
                      <tr>
                        <th width="40%"><?php echo e(__('ui-list.name')); ?></th>
                        <td width="50%"><?php echo e($registred_doctor->name); ?></td>
                      </tr>
                      <tr>
                        <th><?php echo e(__('ui-list.surname')); ?></th>
                        <td><?php echo e($registred_doctor->surname); ?></td>
                      </tr>
                      <tr>
                        <th><?php echo e(__('ui-list.fatherName')); ?></th>
                        <td><?php echo e($registred_doctor->father_name); ?></td>
                      </tr>
                      <tr>
                        <th><?php echo e(__('ui-list.issueingCountry')); ?></th>
                        <td><?php echo e($registred_doctor->issueingCountry); ?></td>
                      </tr>
                      <tr>
                        <th><?php echo e(__('ui-list.diplomaNumber')); ?></th>
                        <td><?php echo e($registred_doctor->DiplomaNumber); ?></td>
                      </tr>
                      <tr>
                        <th><?php echo e(__('ui-list.nic')); ?></th>
                        <td><?php echo e($registred_doctor->nic); ?></td>
                      </tr>
                      <tr>
                        <th><?php echo e(__('ui-list.transcriptNumber')); ?></th>
                        <td><?php echo e($registred_doctor->TranscriptNumber); ?></td>
                      </tr>
                      
                     
                      
                      <tr>
                        <th><?php echo e(__('ui-list.Grade')); ?></th>
                        <td><?php echo e($registred_doctor->Grade); ?></td>
                      </tr>
                      <tr>
                        <th><?php echo e(__('ui-list.GPA')); ?></th>
                        <td><?php echo e($registred_doctor->GPA); ?></td>
                      </tr>
                      
                       <tr>
                        <th><?php echo e(__('ui-list.typeofEducation')); ?></th>
                       <?php if($registred_doctor->typeEducation == 1): ?>
                        <td><?php echo e(__('ui-list.regular')); ?></td>
                        <?php elseif($registred_doctor->typeEducation == 2): ?>
						<td><?php echo e(__('ui-list.NotRegular')); ?></td>
						<?php elseif($registred_doctor->typeEducation == 3): ?>
						<td><?php echo e(__('ui-list.partiallyRegular')); ?></td>
						<?php endif; ?>
                       
                      </tr>
    

          <tr>
                        <th><?php echo e(__('ui-list.universityID')); ?></th>
                        <td><?php echo e($registred_doctor->UniID); ?></td>
          </tr>
					  
          <tr>
                        <th><?php echo e(__('ui-list.rollNum')); ?></th>
                        <td><?php echo e($registred_doctor->RollNum); ?></td>
          </tr>

          <tr>
                        <th><?php echo e(__('ui-list.personalPhone')); ?></th>
                        <td><?php echo e($registred_doctor->PersonalCellPhone); ?></td>
          </tr>

          <tr>
                        <th><?php echo e(__('ui-list.studyDuration')); ?></th>
                        <td><?php echo e($registred_doctor->StudyDuration); ?></td>
          </tr>
					  
          <tr>
                        <th><?php echo e(__('ui-list.PAddress')); ?></th>
                        <td><?php echo e($registred_doctor->PAddress); ?></td>
          </tr>

          <tr>
                        <th><?php echo e(__('ui-list.CAddress')); ?></th>
                        <td><?php echo e($registred_doctor->CAddress); ?></td>
          </tr>

          <tr>
		  
                        <th><?php echo e(__('ui-list.fieldofEducation')); ?></th>
						
						
                        <td><?php echo e($registred_doctor->FEducation); ?></td>
          </tr>
		  
		  <tr>
		  
                        <th><?php echo e(__('ui-list.typeofscholarship')); ?></th>
					
						<?php if($registred_doctor->typeScholarship == 1): ?>
                        <td><?php echo e(__('ui-list.Government')); ?></td>
						<?php elseif($registred_doctor->typeScholarship == 2): ?>
						<td><?php echo e(__('ui-list.Private')); ?></td>
						
						<?php endif; ?>
          </tr>
		  
		   <tr>
		  
                        <th><?php echo e(__('ui-list.EducationalDocument')); ?></th>
						
						<?php if($registred_doctor->typeEducation == 1): ?>
                        <td><?php echo e(__('ui-list.original')); ?></td>
						<?php elseif($registred_doctor->typeEducation == 2): ?>
						<td><?php echo e(__('ui-list.temporary')); ?></td>
						
						<?php endif; ?>
          </tr>

          <tr>
                        <th><?php echo e(__('ui-list.email')); ?></th>
                        <td><?php echo e($registred_doctor->PersonalEmail); ?></td>
          </tr>

         
          <tr>
                        <th><?php echo e(__('ui-list.pob')); ?></th>
                        <td><?php echo e($registred_doctor->Pbirth); ?></td>
          </tr>

          <tr>
                        <th><?php echo e(__('ui-list.dob')); ?></th>
                        <td><?php echo e($registred_doctor->dob); ?></td>
          </tr>

          <tr>
                        <th><?php echo e(__('ui-list.AYear')); ?></th>
                        <td><?php echo e($registred_doctor->AYear); ?></td>
          </tr>
          <tr>
                        <th><?php echo e(__('ui-list.GYear')); ?></th>
                        <td><?php echo e($registred_doctor->GYear); ?></td>
          </tr>



          
                    </thead>
                    <tbody>

                     
                      

                      

                      

    

                      

                     
                       
                    
                    
                      
                    </tbody>
                  </table>





        </div>
    </div>
  </div>

  
       
</div>

<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" >
        <div class="x_title btn-info">
            <a href="/doctor" ></i></a>
            <a id="printOrder" href="#"></a>
          <div class="text-center">
              <h3 class="text-center" ><?php echo e(__('ui-list.educationalqualification')); ?></h3>
          </div>
        
          <div class="clearfix"></div>
        </div>
        <div class="x_content">   


                  <table class="table   table-bordered table-condensed table-hover table-striped" style="position:inline">
                    <thead>
                      
                      <tr style="background: rgba(38, 185, 154, 0.88);color:white">
                        <th style="text-align:left"><?php echo e(__('ui-list.degree')); ?></th>  
                        <th><?php echo e(__('ui-list.FromDate')); ?></th>
                        <th><?php echo e(__('ui-list.ToDate')); ?></th>
                        <th><?php echo e(__('ui-list.university')); ?></th>
                        <th><?php echo e(__('ui-list.address')); ?></th>
                        <th><?php echo e(__('ui-list.contact')); ?></th>
                        <th><?php echo e(__('ui-list.files')); ?></th>
                      </tr>
                      
                      
                    </thead>
                    <tbody>
                 
                      <tr>
                        <td><?php echo e($registred_doctor->degree); ?></td>  
                        <td><?php echo e($registred_doctor->from_date); ?></td>
                        <td><?php echo e($registred_doctor->to_date); ?></td>
                        <td><?php echo e($registred_doctor->university); ?></td>
                        <td><?php echo e($registred_doctor->PersonalPhon2); ?></td>
                        <td><?php echo e($registred_doctor->PersonalEmail2); ?></td>
               
                        <td>
                            
                            <!--<a href="<?php echo e(asset('storage/app/public/images/'.$registred_doctor->file_name)); ?>" target="_blank"><?php echo e($registred_doctor->file_name); ?></a>-->
                             <a href=" <?php echo e(asset('storage/documents/'.$registred_doctor->file_name)); ?>" target="_blank"><?php echo e($registred_doctor->file_name); ?></a>
                            
                        
                        </td>
                      </tr>
                    
                    </tbody>
                  </table>
        </div>
    </div>
  </div>


 
       
</div>

  </div>






       






                        
                  <hr>
                 
                  
                  
                      
                  
                  
      
      
      </div>

  </div> 
  </div>
  <!-- <div class="col-md-1 col-sm-2 col-xs-12">

    

  </div> -->
  </div>


      

  </form>

  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('scripts'); ?>


  <script src="<?php echo e(URL::asset('vendors/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
  
    <script src="<?php echo e(URL::asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')); ?>"></script>
  <script>
    $(document).ready(function(){
      $('#myTable').DataTable({
          "language": {
            "lengthMenu": "<?php echo e(__('ui.show')); ?> _MENU_ <?php echo e(__('ui.entry')); ?>",
            "zeroRecords": "<?php echo e(__('ui.empty_info')); ?>",
            "info": "",
            "search":"<?php echo e(__('ui.search')); ?>",
            "infoEmpty": "<?php echo e(__('ui.search_result')); ?>",
             "paginate": {
                 "previous": "<?php echo e(__('ui.previous')); ?>",
                "next":"<?php echo e(__('ui.next')); ?>"
                 }
                 }
        });
    });


    $('#printButton').on('click',function(){
                product_name=$('.p_name').text();
                category_name=$('.c_name').text();
                unit_measurement=$('.u_name').text();
                quantity=$('.q').text();
               $.ajax({
                   type:'GET',
                   url:'/print_product_report/'+product_name+'/'+category_name+'/'+unit_measurement+'/'+quantity,
                   success:function(response){
                       window.location.href=response;
                   }
               });
            });
  
  </script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin-layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>