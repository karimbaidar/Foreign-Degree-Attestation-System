<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalDetail;
use App\ProvisionalQualification;
use App\EducationQualification;
use App\Nationality;
use App\Medical_Degree;
use App\TechnicalComments;
use App\AttestationComments;
use App\University;
use Auth;
use App\ActivityLog;	
use App\User;
use Spatie\Activitylog\Models\Activity;
use App\Profession;
use App\update_general;
use Excel;
use DB;
use \Crypt;



use Illuminate\Support\Facades\Session;
class admin_doctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 public function __construct()
    {
        $this->middleware(['locale','auth']);
		$this->middleware(['revalidate','auth']);
    }
    public function index()
	
    {
		
	$reg_number = Session::get('reg_no_doctor');
    $doctor_lists=PersonalDetail::all()->sortByDesc('id');
    $attest=AttestationComments::all()->sortByDesc('id');
    
	$techincal_comments=TechnicalComments::where('reg_no',$reg_number)->get();

   $techincal_comments_register=array();
   $techincal_comments_register=null;


   for($i=0;$i<count($techincal_comments);$i++){
	   if($i==0){
			$techincal_comments_register=$techincal_comments[$i];
			$techincal_comments_register[$i]=$techincal_comments[$i];
	   }else{
			$techincal_comments_register[$i]=$techincal_comments[$i];
	   }
	  
   }
    


     return view('admin.setup.admin_doctor.list',compact('doctor_lists','activityLogFile','attest','technicalcomments','techincal_comments_register'));
    }

	


	
    public function doctor_details($reg_no){
        
        //$doctor_details=array();
        //$doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();
        
        //Encrytping and Decrypting the reg_no for security purpose
        
         $reg_no = Crypt::decrypt($reg_no);

        // $reg_no = Auth::findOrFail($Decrypt_id);
        
        $doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();

        $registred_doctor=array();
        
        $registred_doctor=null;

        for($i=0;$i<count($doctor_details);$i++){
            if($i==0){
                 $registred_doctor=$doctor_details[$i];
                 $registred_doctor[$i]=$doctor_details[$i];
            }else{
                 $registred_doctor[$i]=$doctor_details[$i];
            }
           
		}
		



	   $techincal_comments=TechnicalComments::where('reg_no',$reg_no)->get();
        
	   $attestation_comments=AttestationComments::where('reg_no',$reg_no)->get();
	   

	   $techincal_comments_register=array();
	   $techincal_comments_register=null;


	   for($i=0;$i<count($techincal_comments);$i++){
		   if($i==0){
				$techincal_comments_register=$techincal_comments[$i];
				$techincal_comments_register[$i]=$techincal_comments[$i];
		   }else{
				$techincal_comments_register[$i]=$techincal_comments[$i];
		   }
		  
	   }
	   
	   $attestation_comments_register=array();
	   $attestation_comments_register=null;


	   for($i=0;$i<count($attestation_comments);$i++){
		   if($i==0){
				$attestation_comments_register=$attestation_comments[$i];
				$attestation_comments_register[$i]=$attestation_comments[$i];
		   }else{
				$attestation_comments_register[$i]=$attestation_comments[$i];
		   }
		  
	   }






        return view('admin.setup.admin_doctor.details',compact('registred_doctor','attestation_comments_register','techincal_comments_register'));

    }
     public function print_certificate($reg_no)
    { 
        $doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();
 
        $registred_doctor=array();
        

        
        $registred_doctor=null;


        for($i=0;$i<count($doctor_details);$i++){
            if($i==0){
                 $registred_doctor=$doctor_details[$i];
                 $registred_doctor[$i]=$doctor_details[$i];
            }else{
                 $registred_doctor[$i]=$doctor_details[$i];
            }
           
        }


        return view('admin.reports.printcertificate.certificate',compact('registred_doctor'));
    }
	
	     public function print_certificate1($reg_no)
    { 
        
        $reg_no = Crypt::decrypt($reg_no);
        $doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();
      //  $generals=ProvisionalQualification::where('reg_no',$reg_no)->get();
      //  $education=EducationQualification::where('reg_no',$reg_no)->get();

        $registred_doctor=array();
        

        
        $registred_doctor=null;


        for($i=0;$i<count($doctor_details);$i++){
            if($i==0){
                 $registred_doctor=$doctor_details[$i];
                 $registred_doctor[$i]=$doctor_details[$i];
            }else{
                 $registred_doctor[$i]=$doctor_details[$i];
            }
           
        }

      

     
        return view('admin.reports.printcertificate.certificate1',compact('registred_doctor'));
    }

	   public function print_certificate3($reg_no)
    { 
        $reg_no = Crypt::decrypt($reg_no);
        
        $doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();
     //    $generals=ProvisionalQualification::where('reg_no',$reg_no)->get();
     //   $education=EducationQualification::where('reg_no',$reg_no)->get();

        $registred_doctor=array();
        

        
        $registred_doctor=null;


        for($i=0;$i<count($doctor_details);$i++){
            if($i==0){
                 $registred_doctor=$doctor_details[$i];
                 $registred_doctor[$i]=$doctor_details[$i];
            }else{
                 $registred_doctor[$i]=$doctor_details[$i];
            }
           
        }

      

      

        return view('admin.reports.printcertificate.certificate3',compact('registred_doctor'));
    }

	
	
	 public function print_certificate4($reg_no)
    { 
	
	  // $reg_no = Crypt::decrypt($reg_no);
	$doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();
    //    $generals=ProvisionalQualification::where('reg_no',$reg_no)->get();
 //   $education=EducationQualification::where('reg_no',$reg_no)->get();

        $registred_doctor=array();
        

        
        $registred_doctor=null;


        for($i=0;$i<count($doctor_details);$i++){
            if($i==0){
                 $registred_doctor=$doctor_details[$i];
                 $registred_doctor[$i]=$doctor_details[$i];
            }else{
                 $registred_doctor[$i]=$doctor_details[$i];
            }
           
        }

      

      

        return view('admin.reports.printcertificate.certificate4',compact('registred_doctor'));
	
	}
	
	
	 public function maktoobTemporary($reg_no)
    { 
	
	 
        //$reg_no = Crypt::decrypt($reg_no);
         $techincal_comments=TechnicalComments::where('reg_no',$reg_no)->get();
        
         $attestation_comments=AttestationComments::where('reg_no',$reg_no)->get();
        
         $doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();
 
        $registred_doctor=array();
        $registred_doctor=null;


        for($i=0;$i<count($techincal_comments);$i++){
            if($i==0){
                 $registred_doctor=$techincal_comments[$i];
                 $registred_doctor[$i]=$techincal_comments[$i];
            }else{
                 $registred_doctor[$i]=$techincal_comments[$i];
            }
           
        }
        
        $registred_doctor1=array();
        $registred_doctor1=null;


        for($i=0;$i<count($attestation_comments);$i++){
            if($i==0){
                 $registred_doctor1=$attestation_comments[$i];
                 $registred_doctor1[$i]=$attestation_comments[$i];
            }else{
                 $registred_doctor1[$i]=$attestation_comments[$i];
            }
           
        }


        $registred_doctor2=array();
        $registred_doctor2=null;


        for($i=0;$i<count($doctor_details);$i++){
            if($i==0){
                 $registred_doctor2=$doctor_details[$i];
                 $registred_doctor2[$i]=$doctor_details[$i];
            }else{
                 $registred_doctor2[$i]=$doctor_details[$i];
            }
           
        }
        

        return view('admin.reports.printcertificate.maktoobTemporary',compact('registred_doctor','registred_doctor1','registred_doctor2'));
	
	}
	
		 public function maktoobGherHuzoory($reg_no)
    { 
	
	 
        //$reg_no = Crypt::decrypt($reg_no);
         $techincal_comments=TechnicalComments::where('reg_no',$reg_no)->get();
        
         $attestation_comments=AttestationComments::where('reg_no',$reg_no)->get();
        
         $doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();
       
    
    
    
        

        $registred_doctor=array();
        $registred_doctor=null;


        for($i=0;$i<count($techincal_comments);$i++){
            if($i==0){
                 $registred_doctor=$techincal_comments[$i];
                 $registred_doctor[$i]=$techincal_comments[$i];
            }else{
                 $registred_doctor[$i]=$techincal_comments[$i];
            }
           
        }
        
        $registred_doctor1=array();
        $registred_doctor1=null;


        for($i=0;$i<count($attestation_comments);$i++){
            if($i==0){
                 $registred_doctor1=$attestation_comments[$i];
                 $registred_doctor1[$i]=$attestation_comments[$i];
            }else{
                 $registred_doctor1[$i]=$attestation_comments[$i];
            }
           
        }


        $registred_doctor2=array();
        $registred_doctor2=null;


        for($i=0;$i<count($doctor_details);$i++){
            if($i==0){
                 $registred_doctor2=$doctor_details[$i];
                 $registred_doctor2[$i]=$doctor_details[$i];
            }else{
                 $registred_doctor2[$i]=$doctor_details[$i];
            }
           
        }
        

        return view('admin.reports.printcertificate.gherhuzoori',compact('registred_doctor','registred_doctor1','registred_doctor2'));
	
	}
	
	
	 public function maktoob2years($reg_no)
    { 
	
	 
        //$reg_no = Crypt::decrypt($reg_no);
         $techincal_comments=TechnicalComments::where('reg_no',$reg_no)->get();
        
         $attestation_comments=AttestationComments::where('reg_no',$reg_no)->get();
        
         $doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();
       
    
    
    
        

        $registred_doctor=array();
        $registred_doctor=null;


        for($i=0;$i<count($techincal_comments);$i++){
            if($i==0){
                 $registred_doctor=$techincal_comments[$i];
                 $registred_doctor[$i]=$techincal_comments[$i];
            }else{
                 $registred_doctor[$i]=$techincal_comments[$i];
            }
           
        }
        
        $registred_doctor1=array();
        $registred_doctor1=null;


        for($i=0;$i<count($attestation_comments);$i++){
            if($i==0){
                 $registred_doctor1=$attestation_comments[$i];
                 $registred_doctor1[$i]=$attestation_comments[$i];
            }else{
                 $registred_doctor1[$i]=$attestation_comments[$i];
            }
           
        }


        $registred_doctor2=array();
        $registred_doctor2=null;


        for($i=0;$i<count($doctor_details);$i++){
            if($i==0){
                 $registred_doctor2=$doctor_details[$i];
                 $registred_doctor2[$i]=$doctor_details[$i];
            }else{
                 $registred_doctor2[$i]=$doctor_details[$i];
            }
           
        }
        

        return view('admin.reports.printcertificate.maktoob2years',compact('registred_doctor','registred_doctor1','registred_doctor2'));
	
	}
	

	
	
	 public function print_certificate6($reg_no)
    { 
	
	 
        //$reg_no = Crypt::decrypt($reg_no);
         $techincal_comments=TechnicalComments::where('reg_no',$reg_no)->get();
        
         $attestation_comments=AttestationComments::where('reg_no',$reg_no)->get();
        
         $doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();
       
    
    
    
        

        $registred_doctor=array();
        $registred_doctor=null;


        for($i=0;$i<count($techincal_comments);$i++){
            if($i==0){
                 $registred_doctor=$techincal_comments[$i];
                 $registred_doctor[$i]=$techincal_comments[$i];
            }else{
                 $registred_doctor[$i]=$techincal_comments[$i];
            }
           
        }
        
        $registred_doctor1=array();
        $registred_doctor1=null;


        for($i=0;$i<count($attestation_comments);$i++){
            if($i==0){
                 $registred_doctor1=$attestation_comments[$i];
                 $registred_doctor1[$i]=$attestation_comments[$i];
            }else{
                 $registred_doctor1[$i]=$attestation_comments[$i];
            }
           
        }


        $registred_doctor2=array();
        $registred_doctor2=null;


        for($i=0;$i<count($doctor_details);$i++){
            if($i==0){
                 $registred_doctor2=$doctor_details[$i];
                 $registred_doctor2[$i]=$doctor_details[$i];
            }else{
                 $registred_doctor2[$i]=$doctor_details[$i];
            }
           
        }
        

        return view('admin.reports.printcertificate.certificate5',compact('registred_doctor','registred_doctor1','registred_doctor2'));
	
	}
	
	
	 public function print_certificate5($reg_no)
    { 
        
		
	
		//$data = PersonalDetail::get()->toArray();
		
		
		
		
		return Excel::create('MoHE', function($excel) use ($reg_no) {
			$excel->sheet('mySheet', function($sheet) use ($reg_no)
	        {
				
				
				$data=PersonalDetail::where('reg_no',$reg_no)->get();
		
			    $registred_doctor=array();
        

        
        $registred_doctor=null;


        for($i=0;$i<count($data);$i++){
            if($i==0){
                 $registred_doctor=$data[$i];
                 $registred_doctor[$i]=$data[$i];
            }else{
                 $registred_doctor[$i]=$data[$i];
            }
           
        }
				
				
				
		
				
				
				//$sheet->fromArray($data);
				
				$sheet->setSize('A1', 25, 18);
			    
				$sheet->setSize('A44', 25, 70);
			    	
				$sheet->setSize('E1', 15, 5);
			    $sheet->setSize('F1', 15, 5);
				
				
				
				
				 $sheet->setSize('A48', 25, 300);
					
				$sheet->setSize('G1', 10, 5);
				$sheet->setSize('D11', 15, 0);
				
			    $sheet->setSize('B1', 25, 100);
				
				$sheet->setCellValue('A1', 'عکس');
				$sheet->setCellValue('B1', 'وزارت تحصیلات عالی
معینیت علمی 
ریاست عمومی انسجام اموراکادمیک
آمریت ارزیابی اسناد تحصیلی برون مرز');
				
				
				$sheet->getStyle('B1')->getAlignment()->setWrapText(true);
				
				$sheet->getStyle('A44')->getAlignment()->setWrapText(true);
				$sheet->getStyle('A48')->getAlignment()->setWrapText(true);
				
			$sheet->getStyle('C13')->getAlignment()->setWrapText(true);
				
				
				
				
				

				
				$sheet->getStyle('B1')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				$sheet->getStyle('A13')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				
				$sheet->getStyle('A45')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				
				
				$sheet->getStyle('A46')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				$sheet->getStyle('C46')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				
				$sheet->getStyle('E46')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				
				$sheet->getStyle('A49')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				$sheet->getStyle('A50')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				
				$sheet->getStyle('B51')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				
				$sheet->getStyle('A62')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				$sheet->getStyle('A63')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);	
				$sheet->getStyle('A64')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				
				$sheet->getStyle('D64')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				
				$sheet->getStyle('A66')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				
				$sheet->getStyle('D67')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);	
				
				$sheet->getStyle('A71')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				
				
				$sheet->getStyle('A1')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				$sheet->getStyle('A1')->getAlignment()->applyFromArray(
				array('vertical' => 'center')
				);
				$sheet->getStyle('E11')->getAlignment()->applyFromArray(
				array('vertical' => 'right')
				);
			
			
				
				
				$sheet->mergeCells('C1:D1');
				$sheet->mergeCells('A4:F4');
				$sheet->mergeCells('A5:F5');
				$sheet->mergeCells('A6:F6');
				
				$sheet->mergeCells('C9:E9');
				$sheet->mergeCells('A10:B10');
				
				$sheet->mergeCells('C10:F10');
				$sheet->mergeCells('E11:F11');
				$sheet->mergeCells('A13:B13');
				$sheet->mergeCells('C14:C15');
				$sheet->mergeCells('D14:D15');
				
				$sheet->mergeCells('E14:E15');
				
				$sheet->mergeCells('F14:F15');
				
				$sheet->mergeCells('E16:F16');
				$sheet->mergeCells('E17:F17');
				$sheet->mergeCells('A17:A18:A19');
				$sheet->mergeCells('B17:B18:B19');
				$sheet->mergeCells('C17:C18:C19');
				$sheet->mergeCells('D17:D18:D19');
				$sheet->mergeCells('E17:E18:E19');
				
				$sheet->mergeCells('A20:F20');
				$sheet->mergeCells('E12:F12');
				
				$sheet->mergeCells('B21:F21');
				$sheet->mergeCells('B22:F22');
				$sheet->mergeCells('A23:F23');
				$sheet->mergeCells('A24:F24');
				$sheet->mergeCells('A25:F25');
				$sheet->mergeCells('A26:F26');
				
				$sheet->mergeCells('A27:F27');
				$sheet->mergeCells('A28:B28');
				$sheet->mergeCells('C28:D28');
				$sheet->mergeCells('E28:F28');
				
				$sheet->mergeCells('A29:B29');
				$sheet->mergeCells('C29:D29');
				$sheet->mergeCells('E29:F29');
				
				$sheet->mergeCells('A30:B30');
				$sheet->mergeCells('C30:D30');
				$sheet->mergeCells('E30:F30');
				
				$sheet->mergeCells('A31:B31');
				$sheet->mergeCells('C31:D31');
				
				
				
				
				$sheet->mergeCells('A2:A3');
				$sheet->mergeCells('A2:B2');

				$sheet->mergeCells('B2:B3');
				
				
				$sheet->mergeCells('E2:E3');
				$sheet->mergeCells('F2:F3');
				$sheet->mergeCells('G2:G3');
				
				
				$sheet->mergeCells('E31:F31');
				$sheet->mergeCells('A32:F32');
				$sheet->getStyle('A32')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				$sheet->mergeCells('A33:F33');
				$sheet->getStyle('A33')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
					$sheet->getStyle('A33')->getAlignment()->setWrapText(true);
				
				$sheet->mergeCells('A34:F34');
				$sheet->getStyle('A34')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				$sheet->mergeCells('A35:F35');
				
				$sheet->mergeCells('A36:B36');
				$sheet->mergeCells('C36:D36');
				$sheet->mergeCells('E36:F36');
				
				$sheet->mergeCells('A37:B37');
				$sheet->mergeCells('C37:D37');
				$sheet->mergeCells('E37:F37');
				
				$sheet->mergeCells('A38:B38');
				$sheet->getStyle('A38')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				$sheet->mergeCells('C38:D38');
				$sheet->getStyle('C38')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				$sheet->mergeCells('E38:F38');
				$sheet->getStyle('E38')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				
				$sheet->mergeCells('A39:B39');
				$sheet->mergeCells('C39:D39');
				$sheet->mergeCells('E39:F39');
				
				$sheet->mergeCells('A40:B40');
				$sheet->mergeCells('C40:D40');
				$sheet->mergeCells('E40:F40');
				
				
				$sheet->mergeCells('G4:G12');
				
				$sheet->mergeCells('A41:B41');
				$sheet->mergeCells('C41:D41');
				$sheet->mergeCells('E41:F41');
				$sheet->mergeCells('A42:F42');
				$sheet->getStyle('A42')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				
				$sheet->mergeCells('A43:F43');
				
				$sheet->getStyle('A43')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				
				$sheet->getStyle('A13')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				$sheet->getStyle('A13')->getAlignment()->applyFromArray(
				array('vertical' => 'center')
				);
				
				$sheet->getStyle('A43')->getAlignment()->setWrapText(true);
				$sheet->getStyle('C14')->getAlignment()->setWrapText(true);
				$sheet->getStyle('E14')->getAlignment()->setWrapText(true);
				
				
				
				
				$sheet->mergeCells('A44:F44');
				$sheet->getStyle('A44')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				$sheet->mergeCells('A45:F45');
				$sheet->getStyle('A45')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				$sheet->getStyle('A43')->getAlignment()->setWrapText(true);
				
				
				$sheet->mergeCells('A46:B46');
				$sheet->getStyle('A46')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				
				$sheet->mergeCells('C46:D46');
				$sheet->mergeCells('E46:F46');
				$sheet->getStyle('E46')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				
				$sheet->mergeCells('A47:B47');
				$sheet->mergeCells('C47:D47');
				$sheet->mergeCells('E47:F47');
				
				
				$sheet->mergeCells('A48:F48');
				
				$sheet->getStyle('A48')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				
				$sheet->mergeCells('A49:F49');
				$sheet->getStyle('A49')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				$sheet->mergeCells('A50:F50');
				$sheet->getStyle('A50')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				$sheet->mergeCells('B51:F51');
				$sheet->getStyle('B51')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				
				
				
				
				
				$sheet->mergeCells('B52:C52');
				$sheet->mergeCells('D52:E52');
				
				$sheet->mergeCells('B53:C53');
				$sheet->mergeCells('D53:E53');
			
				$sheet->mergeCells('B54:C54');
				$sheet->mergeCells('D54:E54');
			
				$sheet->mergeCells('B55:C55');
				$sheet->mergeCells('D55:E55');
			
				$sheet->mergeCells('B56:C56');
				$sheet->mergeCells('D56:E56');
			
				$sheet->mergeCells('B57:C57');
				$sheet->mergeCells('D57:E57');
			
				$sheet->mergeCells('B58:C58');
				$sheet->mergeCells('D58:E58');
			
				$sheet->mergeCells('B59:C59');
				$sheet->mergeCells('D59:E59');
			
				$sheet->mergeCells('B60:C60');
				$sheet->mergeCells('D60:E60');
			
				$sheet->mergeCells('B61:C61');
				$sheet->mergeCells('D61:E61');
			
			
				$sheet->mergeCells('A62:F62');
				$sheet->getStyle('A62')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
			
				$sheet->mergeCells('A63:F63');
				$sheet->getStyle('A63')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				$sheet->mergeCells('A64:C64');
				$sheet->getStyle('A64')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				$sheet->mergeCells('D64:G64');
				
				$sheet->getStyle('D64')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				
				
				
				$sheet->mergeCells('G13:G22');
				
				
				
				
				$sheet->mergeCells('A65:C65');
				$sheet->mergeCells('D65:G65');
				
				$sheet->mergeCells('A66:F66');
				$sheet->getStyle('A66')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				
				$sheet->mergeCells('A67:C67');
				$sheet->getStyle('A67')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				$sheet->mergeCells('D67:F67');
				
				$sheet->mergeCells('A68:C68');
				$sheet->mergeCells('D68:F68');
				
				$sheet->mergeCells('A69:C69');
				$sheet->mergeCells('D69:F69');
				
				$sheet->mergeCells('A70:C70');
				$sheet->mergeCells('D70:F70');
				
				$sheet->mergeCells('A19:F19');
				
				
				
				$sheet->mergeCells('A71:F71');
				$sheet->getStyle('A71')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				
				$sheet->getStyle('A20')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				
				
				
				$sheet->setCellValue('C1', 'نمبر ثبت پروتوکل');
				
				$sheet->getStyle('C1')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				);
				$sheet->getStyle('C1')->getAlignment()->applyFromArray(
				array('vertical' => 'center')
				);
				$sheet->getStyle('A23')->getAlignment()->applyFromArray(
				array('vertical' => 'right')
				);
				
				$sheet->setCellValue('E1', 'نمبر ثبت دفتر');
				$sheet->setCellValue('F1', 'نمبر تکت تسلیمی');
				$sheet->setCellValue('G1', 'تاریخ مراجعه');
				
				$sheet->getStyle('E1')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				); 
				$sheet->getStyle('E1')->getAlignment()->applyFromArray(
				array('vertical' => 'center')
				);
				
				$sheet->getStyle('F1')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				); 
				$sheet->getStyle('F1')->getAlignment()->applyFromArray(
				array('vertical' => 'center')
				);
				
				$sheet->getStyle('G1')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				); 
				$sheet->getStyle('G1')->getAlignment()->applyFromArray(
				array('vertical' => 'center')
				);
				
				$sheet->getStyle('A38')->getAlignment()->applyFromArray(
				array('vertical' => 'center')
				);
				$sheet->getStyle('C38')->getAlignment()->applyFromArray(
				array('vertical' => 'center')
				);
				$sheet->getStyle('E38')->getAlignment()->applyFromArray(
				array('vertical' => 'center')
				);
				$sheet->getStyle('A42')->getAlignment()->applyFromArray(
				array('vertical' => 'right')
				);
				
				
				
				
				
				//$sheet->setCellValue('A5', $registred_doctor->name);
				
				$sheet->setCellValue('C2', 'جلد');
				$sheet->setCellValue('D2', 'صفحه');
				$sheet->setCellValue('A4', 'قسمت الف: توسط درخواست کننده تکمیل گردد.');
				$sheet->getStyle('A4')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 
				$sheet->setCellValue('A5', 'معلومات متقاضی :         شخص فارغ التحصیل  □                      نماینده فارغ  التحصیل □');
				$sheet->getStyle('A5')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 
				$sheet->setCellValue('A6', 'شهرت فارغ التحصیل  ▼');
				$sheet->getStyle('A6')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 
				$sheet->setCellValue('A7', 'تاریخ تولد');
				$sheet->setCellValue('B7', 'نمبرپاسپورت');
				$sheet->setCellValue('C7', 'نمبرتذکره');
				$sheet->setCellValue('D7', 'تخلص');
				$sheet->setCellValue('E7', 'اسم پدر');
				$sheet->setCellValue('F7', 'اسم');
				
				$sheet->setCellValue('A9', 'E-mail:');
				$sheet->setCellValue('F9', 'شماره تماس متقاضی:');
				$sheet->getStyle('C9')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 
				
				$sheet->setCellValue('A10', 'محل زیست ▼	');
				$sheet->setCellValue('C10', 'اداره معرفی کننده جهت ارزیابی اسناد▼ ');
				$sheet->getStyle('C10')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				);
				$sheet->getStyle('A10')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 	
				$sheet->getStyle('C10')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 								
				
				
				$sheet->setCellValue('A11', 'سکونت فعلی');
				$sheet->setCellValue('B11', 'سکونت اصل');
				$sheet->setCellValue('C11', 'غیررسمی □');
				$sheet->setCellValue('D11', 'نمبر/تاریخ مکتوب');
				$sheet->setCellValue('E11', 'نام مرجع:');
				
				$sheet->setCellValue('A13', 'دوره تحصیلی ');
				$sheet->setCellValue('C13', 'اسم موسسه تحصیلی ▼');
				$sheet->setCellValue('D13', 'کشور اعطا کننده  ▼');
				$sheet->setCellValue('E13', 'رشته تحصیلی ▼');
				$sheet->setCellValue('F13', 'سویه تحصیلی');
				$sheet->setCellValue('A14', 'تاریخ فراغت');
				$sheet->setCellValue('B14', 'تاریخ شروع تحصیل');
				
				$sheet->setCellValue('A16', 'ID Number');
				$sheet->setCellValue('B16', 'Degree No');
				$sheet->setCellValue('C16', 'نوع سند');
				$sheet->setCellValue('D16', 'نوع بورس');
				$sheet->setCellValue('E16', 'نوع تحصیل');
				
				$sheet->setCellValue('A21', 'University E-mail:');
				$sheet->setCellValue('A22', 'U.Tel:');
				
				 $sheet->setSize('A23', 25, 70);
				
				$sheet->setCellValue('A23', '
				اینجانب که شهرتم در فوق ذکر است به مسئولیت بعدی تصدیق می‌دارم که معلومات ارایه شده در فوق مبنی بر نوعیت اسناد تحصیلی‌ام درست وحقیقی می‌باشد و در صورت اشتباه بودن معلومات ارائه شده، مسئولیت به عهده خودم می‌باشد.    
تاریخ : .........................         امضاء:........................                   شصت دارنده سند (                    )
				
				
				
				');
				
				$sheet->getStyle('A23')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 
				$sheet->getStyle('A33')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 
						
				$sheet->getStyle('D67')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 
				$sheet->getStyle('D68')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 
				$sheet->getStyle('D69')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 
				$sheet->getStyle('D70')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 
			



						
				$sheet->getStyle('A23')->getAlignment()->setWrapText(true);
				$sheet->getStyle('A33')->getAlignment()->setWrapText(true);
				$sheet->getStyle('F54')->getAlignment()->setWrapText(true);
				
				$sheet->getStyle('F55')->getAlignment()->setWrapText(true);
				
				$sheet->getStyle('F56')->getAlignment()->setWrapText(true);
				
				$sheet->getStyle('F57')->getAlignment()->setWrapText(true);
				
				$sheet->getStyle('F58')->getAlignment()->setWrapText(true);
				
				$sheet->getStyle('F59')->getAlignment()->setWrapText(true);

				
				$sheet->getStyle('F60')->getAlignment()->setWrapText(true);
				
				$sheet->getStyle('F61')->getAlignment()->setWrapText(true);
				
					 $sheet->setSize('A25', 25, 160);
					 $sheet->setSize('A33', 25, 110);
				$sheet->setCellValue('A24', 'قسمت ب: فیصله کمیسیون عالی ارزیابی اسناد تحصیلی خارج مرز ');
				$sheet->setCellValue('A25', '
				جلسه مورخ:        /        / 1396
دیپلوم تحصیلی شماره (    '. $registred_doctor->DiplomaNumber.'      ) صادر شده از پوهنتون (  '.$registred_doctor->university.'   ) کشور (  '.$registred_doctor->issueingCountry.' )، به سویه لیسانس، با دورۀ تحصیلی (سه ساله □ / چهار ساله □ / پنج ساله □) در رشته ('.$registred_doctor->FEducation.' ) به نام محترم ( '.$registred_doctor->name.') فــرزند ( '.$registred_doctor->father_name.'   ) دارنده نذکره/پاسپورت نمــــــــــــــبر( '.$registred_doctor->nic.' ) که در سال( '.$registred_doctor->AYear.' ) شامل و در سال('.$registred_doctor->GYear.' ) موفقانه با GPA('.$registred_doctor->GPA.'  )  به grade ( '.$registred_doctor->Grade.' ) فارغ التحصیل شده است، بر اساس ملاحظه دیپلوم تعلیمی یک دوره قبل (12 □ 14 □) با نوعیت تحصیل ('.$registred_doctor->typeEducation.') بر اساس (                                                                            )، ثبت پرپروتوکـول شماره (           ) ارزیابی و (                  ) است.
نتیجه نهایی کمیسیون ارزیابی :           تائید □          رد □       




				
');

				
				
				$sheet->getStyle('A24')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 
				$sheet->getStyle('A25')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 		
				$sheet->getStyle('A25')->getAlignment()->setWrapText(true);
				$sheet->getStyle('G23')->getAlignment()->setWrapText(true);
				
				 $sheet->setSize('A26', 25, 100);
				
				$sheet->setCellValue('A26', 'ملاحظات:
1) ..........................................................................................................................................................................
..............................................................................................................................................................................
.... ........................................................................................................................................................................
');
				
				$sheet->getStyle('A26')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 		
				$sheet->getStyle('A26')->getAlignment()->setWrapText(true);
				
				
				
				
					$sheet->setCellValue('A27', 'شهرت و امضای ارزیابی کنندگان علمی و اکادمیک کمیسیون عالی ارزیابی اسناد تحصیلی خارج مرز');
					
					
					$sheet->getStyle('A27')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 		
				
					$sheet->getStyle('A28')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				); 		
					$sheet->getStyle('C28')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				); 		
					$sheet->getStyle('E28')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				); 		
				
					$sheet->getStyle('E32')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 		
					$sheet->getStyle('E34')->getAlignment()->applyFromArray(
				array('horizontal' => 'right')
				); 		
				
					
					
					
					$sheet->setCellValue('A28', 'امضا');
					$sheet->setCellValue('C28', 'وظیفه');
					$sheet->setCellValue('E28', 'نام');
					$sheet->setCellValue('G28', 'شماره');
					
					$sheet->setCellValue('A32', 'قسمت د: نظر کمیته تخنیکی ');
					
					$sheet->setCellValue('A33', 'مورخ:    /     /   139  
1. تمام تعداد (        ) ورق اسناد ضمیمه این فورم به شمول اسناد تعلیمی (12□ / 14□) و تحصیلی لیسانس به نام محـــــترم (                          ) فـــــــــرزند (                     ) بوده، صحت است. 2. اسناد تحصیلی و تعلیمی موصوف از طریق مراجع ذیربط طی مراحل قانونی گردیده صحت است. 3. نوعیت تحصیل آن مطابق (                                                             حضوری □ نیمه حضوری □ غیر حضوری □ ) بوده صحت است. 

نتجه نهایی : تأیید □                   رد □ ');


					$sheet->setCellValue('A34', 'ملاحظات:
1)..........................................................................................................................................................................
..............................................................................................................................................................................
.... ........................................................................................................................................................................
 ');
 
 
					$sheet->setCellValue('A34', 'شهرت و امضای ارزیابی کنندگان تخنیکی');
					
					$sheet->setCellValue('A38', 'امضا');
					$sheet->setCellValue('C38', 'وظیفه');
					$sheet->setCellValue('E38', 'شهرت');
					$sheet->setCellValue('G38', 'شماره');
					$sheet->setCellValue('A42', 'قسمت چ : نظر آمریت ارزیابی اسناد تحصیلی خارج مرز');
					$sheet->setCellValue('A43', 'مورخ :             /         /1396
ضمیمه فورم هذا به تعداد (         ) ورق سند اصل و (         ) ورق سند کاپی، مطابق به چک لست ضمیمه (صفحه 4م) این فورم که به منظور ارزیابی، از جانب متقاضی فوق الذکر ارائه شده، توسط آمریت ارزیابی اسناد تحصیلی خارج مرز ثبت، ترتیب و تنظیم گردیده، صحت است.

نتجه نهایی : تأیید □                   رد □');

					$sheet->setCellValue('A44', 'ملاحظات: 
1)..........................................................................................................................................................................
.............................................................................................................................................................................
.... .........................................................................................................................................................................');
				
					
				$sheet->setCellValue('A45', 'نام و امضای مسئولین آمریت ارزیابی');
				$sheet->setCellValue('A46', 'آمر ارزیابی اسناد تحصیلی خارج مرز');
				$sheet->setCellValue('C46', 'مدیر عمومی ارزیابی اسناد تحصیلی خارج مرز');
				$sheet->setCellValue('E46', 'کارشناس ارزیابی اسناد تحصیلی خارج مرز ');
				$sheet->setCellValue('A48', 'شرايط ارزيابي اسناد تحصیلی
1.	اسناد تحصیلی(دیپلوم و ترانسکرپت نمرات) مورد ارزیابی باید اصل باشد، فوتوكاپي مدار اعتبار نمی‌باشد.
2.	اسناد بايد طي مراحل قانونی شده باشد که شامل مراحل ذيل مي‌شود:
3.	مهر، امضا وتصديق موسسه تحصيلي مربوطه و وزارت تحصيلات عالي كشور اعطا کننده اسناد.
4.	تصدیق وزارت خارجه کشور اعطا کننده اسناد.
5.	تائيد نمايندگي سياسي افغانستان(سفارت يا قونسلگري افغانستان) در كشور صادر كننده اسناد تحصيلي 
6.	تائيد رياست قونسلي وزارت امورخارجه ازمهر نمايندگي افغانستان درخارج از كشور.
7.	اسناد تحصیلی بايد داراي ترانسكرپت نمرات باشد.
8.	سند فراغت بايد داراي تسلسل رشتوي واكادميك باشد.
9.	در موقع ارائه سند فراغت تذكره هويت دارنده آن حتمی است.
10.	وجود تيزس براي دوره‌های ماستری و دکتورا حتمی می‌باشد و ماستری‌های بدون تیزس در روند ارزیابی مستند گردد.
11.	پرداخت حق الخدمت سند تحصیلی مورد ارزیابی [دوره دکتورا(۱۰۰۰)افغانی، ماستری (800)افغانی ولیسانس (600)افغانی].
12.	غرض ارزيابي اسناد فراغت تحصيلي دست داشته ، داشتن سند اسناد تحصيلي فراغت يك دوره قبلي ضروري ميباشد.
13.	تكميل فورم ارزيابي ضروري مي‌باشد.
14.	فارغ التحصیل مکلف است تا سند تائید کننده نوع تحصیل (حضوری ، نیمه حضوری غیر حضوری) را ارائه نماید. درصورت عدم ارائه چین سند، فارغ التحصیل مکلف است تا ادرس فعال و موثق مرجع تحصیلی را ارائه نماید.

نوت: هرگاه تزویر سند تحصیلی توسط کمیسیون تشخیص گردد دارنده سند غرض تعقیب عدلی به مراجع مربوطه معرفی میگردد. 
 
  شصت دارنده سند (                                       )                                                                                                                                  
');

			$sheet->setCellValue('A49', 'چک لست تسلیم گیری اسناد تحصیلی لازم و ضروری برای ارزیابی. ');
			$sheet->setCellValue('A50', 'این بخش توسط مأمور پذیرش خانه پری و امضا می گردد. ');
			$sheet->setCellValue('A51', 'ملاحظات');
			$sheet->setCellValue('B51', 'لیسانس');
			$sheet->setCellValue('G51', 'شماره');
			
			$sheet->setCellValue('B52', 'کاپی ');
			$sheet->setCellValue('D52', 'اصل');
			$sheet->setCellValue('F52', 'اصل دیپلوم تحصیلی  ');
			$sheet->setCellValue('G52', '1');
			
			$sheet->setCellValue('B53', 'کاپی ');
			$sheet->setCellValue('D53', 'اصل');
			$sheet->setCellValue('F53', 'اصل ترانسکریپ نمرات  ');
			$sheet->setCellValue('G53', '2');
			
			$sheet->setCellValue('B54', 'کاپی ');
			$sheet->setCellValue('D54', 'اصل');
			$sheet->setCellValue('F54', 'شهادتنامه صنف دوازدهم/چهاردهم ویا هرسند دیگریکه به اساس شامل دوره لیسانس شده است.');
			$sheet->setCellValue('G54', '3');
			
			
			$sheet->setCellValue('B55', 'کاپی ');
			$sheet->setCellValue('D55', 'اصل');
			$sheet->setCellValue('F55', 'تذکره تابعیت');
			$sheet->setCellValue('G55', '4');
			
			$sheet->setCellValue('B56', 'کاپی ');
			$sheet->setCellValue('D56', 'اصل');
			$sheet->setCellValue('F56', 'پاسپورت تحصیلی ویا کارت اقامت /  RP');
			$sheet->setCellValue('G56', '5');
			
			
			$sheet->setCellValue('B57', 'کاپی ');
			$sheet->setCellValue('D57', 'اصل');
			$sheet->setCellValue('F57', 'کارت پوهنتون');
			$sheet->setCellValue('G57', '6');
			
			$sheet->setCellValue('B58', 'کاپی ');
			$sheet->setCellValue('D58', 'اصل');
			$sheet->setCellValue('F58', 'تکمیل نمودن فورم ارزیابی توسط شخص فارغ.');
			$sheet->setCellValue('G58', '7');
			
			$sheet->setCellValue('B59', 'کاپی ');
			$sheet->setCellValue('D59', 'اصل');
			$sheet->setCellValue('F59', 'فورم م25');
			$sheet->setCellValue('G59', '8');
			
			
			$sheet->setCellValue('B60', 'کاپی ');
			$sheet->setCellValue('D60', 'اصل');
			$sheet->setCellValue('F60', 'مکتوب/استعلام تصدیق بورس رسمی');
			$sheet->setCellValue('G60', '9');
			
			$sheet->setCellValue('B61', 'کاپی ');
			$sheet->setCellValue('D61', 'اصل');
			$sheet->setCellValue('F61', 'یمیل تصدیق نوعیت و فراغت از تحصیل');
			$sheet->setCellValue('G61', '10');
			
			$sheet->setCellValue('A62', 'به تعداد مجموعی (            ) سند اصلی سویه لیسانس و (            ) کاپی را از متقاضی فوق الذکر تسلیم گردیدم.');
				
			$sheet->setCellValue('A63', 'نام و امضای مسئول پذیرش');
				
				
			$sheet->setCellValue('A64', 'امضا');
			$sheet->setCellValue('D64', 'شهرت');
				
			$sheet->setCellValue('A66', 'مجموع اسناد ضمیمه این فورم');
		
	
	
				$sheet->setCellValue('A67', 'مجموع اوراق اصل');
				
				$sheet->setCellValue('D67', 'مجموع اوراق کاپی');
		
				$sheet->setCellValue('D68', 'امضای مامور پذیرش ');
		
				$sheet->setCellValue('D69', 'امضای مدیر عمومی تنظیم سوابق');
		
				$sheet->setCellValue('D70', 'امضای آمر ارزیابی اسناد تحصیلی خارج مرز');
				$sheet->setCellValue('A71', 'این فورم به طور رایگان در دسترس متقاضیان قرار میگیرد.');
		
				$sheet->setCellValue('G4', 'معلومات درخواست دهنده');
		
				$sheet->setCellValue('G13', 'معلومات تحصیلی');
				
				$sheet->setCellValue('G23', 'تعهد نامه فارغ التحصیل');
				
				$sheet->getStyle("G4")->getAlignment()->setTextRotation(90);
				
				$sheet->getStyle("G13")->getAlignment()->setTextRotation(90);
				
				$sheet->getStyle("G23")->getAlignment()->setTextRotation(90);
				
				
					$sheet->getStyle('G4')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				); 		
				
					$sheet->getStyle('G4')->getAlignment()->applyFromArray(
				array('vertical' => 'center')
				); 	
				
					$sheet->getStyle('G13')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				); 		
					$sheet->getStyle('G13')->getAlignment()->applyFromArray(
				array('vertical' => 'center')
				); 	
				
					$sheet->getStyle('G23')->getAlignment()->applyFromArray(
				array('horizontal' => 'center')
				); 		
					$sheet->getStyle('23')->getAlignment()->applyFromArray(
				array('vertical' => 'center')
				); 	
				
				
				
				//Borders
				
				$range = "A1:G71";
				
				$sheet->setBorder($range, 'thin');
				
				
					$sheet->setCellValue('A20', 'ایمیل آدرس و نمبرتلیفون موسسه تحصیلی');
		
				
				
					//Inserting Data Values
					
					$sheet->setCellValue('F8', $registred_doctor->name);
					$sheet->setCellValue('E8', $registred_doctor->father_name);
					$sheet->setCellValue('D8', $registred_doctor->surname);
					$sheet->setCellValue('C8', $registred_doctor->nic);
					$sheet->setCellValue('B8', $registred_doctor->nic);
					$sheet->setCellValue('D8', $registred_doctor->surname);
					$sheet->setCellValue('A8', $registred_doctor->dob);
						$sheet->setCellValue('B9', $registred_doctor->PersonalEmail);
						$sheet->setCellValue('C9', $registred_doctor->PersonalCellPhone);
						$sheet->setCellValue('B12', $registred_doctor->PAddress);
						$sheet->setCellValue('A12', $registred_doctor->CAddress);
						$sheet->setCellValue('C14', $registred_doctor->university);
						$sheet->setCellValue('D14', $registred_doctor->issueingCountry);
						$sheet->setCellValue('E14', $registred_doctor->FEducation);
						
						if($registred_doctor->EducationLevel == 1)
						{
						$sheet->setCellValue('F14', 'Bachelor');
						}
						elseif($registred_doctor->EducationLevel == 2)
						{
						$sheet->setCellValue('F14', 'Master');
						}
						elseif($registred_doctor->EducationLevel == 3)
						{
						$sheet->setCellValue('F14', 'PHD');
						}
					
						$sheet->setCellValue('A15', $registred_doctor->AYear );
						$sheet->setCellValue('B15', $registred_doctor->GYear );
						$sheet->setCellValue('A17', $registred_doctor->UniID );
						
						
						if($registred_doctor->typeEducation == 1)
						$sheet->setCellValue('C17', 'Regular' );
						elseif($registred_doctor->typeEducation == 2)
						$sheet->setCellValue('C17', 'Distance' );
						elseif($registred_doctor->typeEducation == 3)
						$sheet->setCellValue('C17', 'Semi-Distance' );
					
						if($registred_doctor->typeScholarship == 1)
						$sheet->setCellValue('D17', 'Government Scholarship' );
						elseif($registred_doctor->typeScholarship == 2)
						$sheet->setCellValue('D17', 'Private' );
						
						if($registred_doctor->EducationLevel == 1)
						$sheet->setCellValue('E17', 'Bachelor');
						elseif($registred_doctor->EducationLevel == 2)
						$sheet->setCellValue('E17', 'Master');
						elseif($registred_doctor->EducationLevel == 3)
						$sheet->setCellValue('E17', 'PHD');
						
						$sheet->setCellValue('B21', $registred_doctor->address);
						$sheet->setCellValue('B22', $registred_doctor->contact);
						
						
				
				
				
				
				
	        });
		})->download('xls');
		
		
			

        return view('admin.reports.printcertificate.certificate4');
    }

	
	
	
	public function print_certificate2()
    { 
       

        $registred_doctor=array();
        

        
        $registred_doctor=null;


        for($i=0;$i<count($doctor_details);$i++){
            if($i==0){
                 $registred_doctor=$doctor_details[$i];
                 $registred_doctor[$i]=$doctor_details[$i];
            }else{
                 $registred_doctor[$i]=$doctor_details[$i];
            }
           
        }

      

        

        return view('admin.reports.printcertificate.certificate2',compact('registred_doctor'));
    }

	
	
	
	
	
    public function notify(){

        $notification = PersonalDetail::select('rejection')->where('userid',Auth::user()->id)->get();
		
		$notification1 = PersonalDetail::select('nondocument')->where('userid',Auth::user()->id)->get();
		
	
      
        
		$note=null;
		
		$note1=null;
       
	    for($i=0;$i<count($notification);$i++){
            if($i==0){
                 $note=$notification[$i];
                 $note=$notification[$i];
            }else{
                 $note=$notification[$i];
            }
           
        }
		
		for($i=0;$i<count($notification1);$i++){
            if($i==0){
                 $note1=$notification1[$i];
                 $note1=$notification1[$i];
            }else{
                 $note1=$notification1[$i];
            }
           
        }
        
     
        return view('admin.setup.admin_doctor.notification',compact('note','note1'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_1($reg_no)
    {
		
		
		 //Encrytping and Decrypting the reg_no for security purpose
        
        $reg_no = Crypt::decrypt($reg_no);

	
         //$doctor_details=array();
           // $doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();
           
           $doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();
           
        // $generals=ProvisionalQualification::where('reg_no',$reg_no)->get();
        //$education=array();
        //$education=EducationQualification::where('reg_no',$reg_no)->get();

        $universities=University::all();
        $medical_degrees=Medical_Degree::all();
        $personalDetails = PersonalDetail::all(); 
        
        




        
        $registred_doctor=array(); 
        $registred_doctor=null;


        for($i=0;$i<count($doctor_details);$i++){
            if($i==0){
                 $registred_doctor=$doctor_details[$i];
                 $registred_doctor[$i]=$doctor_details[$i];
            }else{
                 $registred_doctor[$i]=$doctor_details[$i];
            }
           
        }

      

     

        return view('admin.setup.admin_doctor.edit_1',compact('registred_doctor','medical_degrees','universities','personalDetails'));
    }

public function edit($reg_no)
    {
		
		
		
		 //Encrytping and Decrypting the reg_no for security purpose
        
        $reg_no = Crypt::decrypt($reg_no);

		
            //$doctor_details=array();
           // $doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();
              $doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();
            // $generals=ProvisionalQualification::where('reg_no',$reg_no)->get();
            //$education=array();
             //$education=EducationQualification::where('reg_no',$reg_no)->get();

              $universities=University::all();
             $medical_degrees=Medical_Degree::all();

        
        




        
        $registred_doctor=array(); 
        $registred_doctor=null;


        for($i=0;$i<count($doctor_details);$i++){
            if($i==0){
                 $registred_doctor=$doctor_details[$i];
                 $registred_doctor[$i]=$doctor_details[$i];
            }else{
                 $registred_doctor[$i]=$doctor_details[$i];
            }
           
        }

      

     

        return view('admin.setup.admin_doctor.edit',compact('registred_doctor','medical_degrees','universities'));
    }


   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $reg_no)
    {
        
 
 
 
         

		 
        
		 
        
		
		 $personaldetail=PersonalDetail::where('reg_no',$reg_no)->first();
        // $personaldetail =PersonalDetail::find($reg_no);

         $personaldetail->reg_no=$request->reg_no;
         //$personaldetail->reg_date=$request->reg_date;
         $personaldetail->name=$request->name;
         $personaldetail->surname=$request->surname;
         $personaldetail->father_name=$request->father_name;

         $personaldetail->issueingCountry=$request->issueingCountry;
        
         
         
         $personaldetail->DiplomaNumber=$request->DiplomaNumber;
		 $personaldetail->TranscriptNumber=$request->TranscriptNumber;
         $personaldetail->nic=$request->nic;
         $personaldetail->EDocument=$request->EDocument;
         $personaldetail->typeEducation=$request->typeEducation;
         $personaldetail->GPA=$request->GPA;
         $personaldetail->typeScholarship=$request->typeScholarship;
         $personaldetail->UniID=$request->UniID;
         $personaldetail->RollNum=$request->RollNum;
         $personaldetail->PersonalCellPhone=$request->PersonalCellPhone;
         $personaldetail->StudyDuration=$request->StudyDuration;
         $personaldetail->PAddress=$request->PAddress;
         $personaldetail->CAddress=$request->CAddress;
         $personaldetail->FEducation=$request->FEducation;
         $personaldetail->EducationLevel=$request->EducationLevel;
         $personaldetail->Pbirth=$request->Pbirth;
         $personaldetail->dob=$request->dob;
         $personaldetail->GYear=$request->GYear;
         $personaldetail->AYear=$request->AYear;
		$personaldetail->Grade=$request->Grade;
		 
		if(!empty($request->edited))
		{
			$personaldetail->edited=$request->edited;
		}
		elseif(!empty($request->edited1))
		{
			$personaldetail->edited1=$request->edited1;
		}
		
		//$personaldetail->edited=$request->edited;
		//$personaldetail->edited1=$request->edited1;
		
	
		 

         //educational Qualification
         $personaldetail->degree=$request->degree;
         $personaldetail->from_date=$request->from_date;
         $personaldetail->to_date=$request->to_date;
         $personaldetail->university=$request->university;
         $personaldetail->address=$request->address;
         $personaldetail->contact=$request->contact;
         
         
         

         //$personaldetail->passport_no=$request->passport_no;
         //$personaldetail->visa_issue_date=$request->visa_issue_date;
         //$personaldetail->visa_exp_date=$request->visa_exp_date;
         //$personaldetail->issue_place=$request->issue_place;

         //$personaldetail->issue_date=$request->issue_date;
         //$personaldetail->dob=$request->dob;
         //$personaldetail->pob=$request->pob;
         
           $filename=null;

            if($request->hasFile('image'))
			{
            $filename=$request->image->getClientOriginalName();
            $request->image->storeAs('public\documents',$filename);
			$personaldetail->image=$filename;
			}   
            
           
            $filename1=null;
             if($request->hasFile('file_name')){
             $filename1=$request->file_name->getClientOriginalName();
             $request->file_name->storeAs('public\documents',$filename1);
             $personaldetail->file_name=$filename1;
      
            }


           
      
     
         
         $personaldetail->save();


         //Education Qualification


       
       
        
      
    
               
               //General Updation

         
         $registration_date=date("Y-m-d h:m:s");

		$activity = new ActivityLog;
		$activity->description = "Updated Records of ".$personaldetail->name." at ".$registration_date;
		$activity->user=Auth::user()->firstName;
		
		$activity->save();
            


         
        Session::flash('message','Record Updated Successfuly');
	
         
     
     return redirect('/admin_doctor');
    }


   

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor=PersonalDetail::find($id);

		
		
        $doctor->delete();
		
		

       // $edu=EducationQualification::find($id);
        $edu->delete();

       // $gen=update_general::find($id);
		
		
		

        $gen->delete();
		$registration_date=date("Y-m-d h:m:s");
		$activity = new ActivityLog;
		$activity->description = "Deleted record ".$doctor->name." at ".$registration_date;
		$activity->user=Auth::user()->firstName;
		
		$activity->save();
		

        Session::flash('message','Record Deleted Successfuly');
        return redirect('/admin_doctor');
    }
}
