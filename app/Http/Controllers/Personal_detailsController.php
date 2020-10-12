<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PersonalDetail;
use Auth;
use App\ActivityLog;
use App\Nationality;

use DB;
use App\createPersonal;
use App\createEducational;
use App\createUniversityDetails;

use App\EducationQualification;
use App\ProvisionalQualification;
use App\University;
use App\Medical_Degree;
use Illuminate\Support\Facades\Session;
class Personal_detailsController extends Controller
{
	
	public function __construct()
    {
        $this->middleware(['locale','auth']);
		$this->middleware(['revalidate','auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {   

       $reg_noUniversity = Session::get('reg_no');
       $user_idPersonal = Session::get('user_idUniversity');
        
       $createPersonal=createPersonal::all(); 
       $createEducational=createEducational::all(); 
       $createUniversityDetails=createUniversityDetails::all(); 
       
         $createPersonal_regNo= createPersonal::where('reg_no',$reg_noUniversity)->get();
         
         $createEducational_regNo=createEducational::where('reg_no',$reg_noUniversity)->get();
         $createUniversityDetails_regNo=createUniversityDetails::where('reg_no',$reg_noUniversity)->get();
       
       
       
       $personalCreate_reg_no=array(); 
       $personalCreate_reg_no=null;


        for($i=0;$i<count($createPersonal_regNo);$i++){
            if($i==0){
                 $personalCreate_reg_no=$createPersonal_regNo[$i];
                 $personalCreate_reg_no[$i]=$createPersonal_regNo[$i];
            }else{
                 $personalCreate_reg_no[$i]=$createPersonal_regNo[$i];
            }
           
        }
        
        $EducationalCreate_reg_no=array(); 
        $EducationalCreate_reg_no=null;


        for($i=0;$i<count($createEducational_regNo);$i++){
            if($i==0){
                 $EducationalCreate_reg_no=$createEducational_regNo[$i];
                 $EducationalCreate_reg_no[$i]=$createEducational_regNo[$i];
            }else{
                 $EducationalCreate_reg_no[$i]=$createEducational_regNo[$i];
            }
           
        }
        
        $UniversityCreate=array(); 
       $UniversityCreate=null;


        for($i=0;$i<count($createUniversityDetails_regNo);$i++){
            if($i==0){
                 $UniversityCreate=$createUniversityDetails_regNo[$i];
                 $UniversityCreate[$i]=$createUniversityDetails_regNo[$i];
            }else{
                 $UniversityCreate[$i]=$createUniversityDetails_regNo[$i];
            }
           
        }
       
       
       
       
       $personalCreate=array(); 
       $personalCreate=null;


        for($i=0;$i<count($createPersonal);$i++){
            if($i==0){
                 $personalCreate=$createPersonal[$i];
                 $personalCreate[$i]=$createPersonal[$i];
            }else{
                 $personalCreate[$i]=$createPersonal[$i];
            }
           
        }


        $nationalities=Nationality::all(); 
        $personalDetails= PersonalDetail::all();

        $registred_doctor=array(); 
        $registred_doctor=null;


        for($i=0;$i<count($personalDetails);$i++){
            if($i==0){
                 $registred_doctor=$personalDetails[$i];
                 $registred_doctor[$i]=$personalDetails[$i];
            }else{
                 $registred_doctor[$i]=$personalDetails[$i];
            }
           
        }


        $universities=University::all();
        $medical_degrees=Medical_Degree::all();
        
        
        $codeArray=PersonalDetail::select('reg_no')->orderBy('id','desc')->limit(1)->get();
        
        
      
		

        $registration_date=date("Y-m-d H:i");
        
         $code_value='';
         //To check wether there is any doctor registered or not 
         if(count($codeArray)<=0){
             $code_value="MOHE-R001";
         }else{
             $reg_no= $codeArray[0]->reg_no;
             $last_digit=substr($reg_no,6,strlen($reg_no)); 
             $code_value= 'MOHE-R00'.(string)($last_digit+1);
         }


  
                    return view('admin.setup.personal_registration.create',compact('user_idPersonal','personalCreate_reg_no','EducationalCreate_reg_no','UniversityCreate','createUniversityDetails_regNo','code_value','nationalities','registration_date','registred_doctor','universities','medical_degrees','personalCreate','createEducational','createUniversityDetails'));
 
        
        
   }

   
   public function create()
   
   {
	   
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createMaster(Request $req)
    {
         $nationalities=Nationality::all(); 
        $personalDetails= PersonalDetail::all();

        $registred_doctor=array(); 
        $registred_doctor=null;


        for($i=0;$i<count($personalDetails);$i++){
            if($i==0){
                 $registred_doctor=$personalDetails[$i];
                 $registred_doctor[$i]=$personalDetails[$i];
            }else{
                 $registred_doctor[$i]=$personalDetails[$i];
            }
           
        }


        $universities=University::all();
        $medical_degrees=Medical_Degree::all();
        
        $codeArray=PersonalDetail::select('reg_no')->orderBy('id','desc')->limit(1)->get();
		

        $registration_date=date("Y-m-d H:i");
        
         $code_value='';
         //To check wether there is any doctor registered or not 
         if(count($codeArray)<=0){
             $code_value="MOHE-R001";
         }else{
             $reg_no= $codeArray[0]->reg_no;
             $last_digit=substr($reg_no,6,strlen($reg_no)); 
             $code_value= 'MOHE-R00'.(string)($last_digit+1);
         }

        return view('admin.setup.personal_registration.createMaster',compact('code_value','nationalities','registration_date','registred_doctor','universities','medical_degrees','doctor_details','disableButton'));

    }
	
	 public function createPHD(Request $req)
    {
         $nationalities=Nationality::all(); 
        $personalDetails= PersonalDetail::all();

        $registred_doctor=array(); 
        $registred_doctor=null;


        for($i=0;$i<count($personalDetails);$i++){
            if($i==0){
                 $registred_doctor=$personalDetails[$i];
                 $registred_doctor[$i]=$personalDetails[$i];
            }else{
                 $registred_doctor[$i]=$personalDetails[$i];
            }
           
        }


        $universities=University::all();
        $medical_degrees=Medical_Degree::all();
        $codeArray=PersonalDetail::select('reg_no')->orderBy('id','desc')->limit(1)->get();
		

        $registration_date=date("Y-m-d H:i");
        
         $code_value='';
         //To check wether there is any doctor registered or not 
         if(count($codeArray)<=0){
             $code_value="MOHE-R001";
         }else{
             $reg_no= $codeArray[0]->reg_no;
             $last_digit=substr($reg_no,6,strlen($reg_no)); 
             $code_value= 'MOHE-R00'.(string)($last_digit+1);
         }

        return view('admin.setup.personal_registration.createPHD',compact('code_value','nationalities','registration_date','registred_doctor','universities','medical_degrees'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $filename=null;

        if($request->hasFile('image')){
        $filename=$request->image->getClientOriginalName();
        $request->image->storeAs('public\documents',$filename);
    
     }   

     
     $filename1=null;
     if($request->hasFile('file_name')){
         $filename1=$request->file_name->getClientOriginalName();
         $request->file_name->storeAs('public\documents',$filename1);
     }
    
		
         $personaldetail = new PersonalDetail;
         

         $personaldetail->reg_no=$request->reg_no;
         $personaldetail->reg_date=$request->reg_date;
         $personaldetail->name=$request->name;
         $personaldetail->surname=$request->surname;
         $personaldetail->father_name=$request->father_name;
		 $personaldetail->userid=$request->id;

         $personaldetail->issueingCountry=$request->issueingCountry;
         $personaldetail->DiplomaNumber=$request->DiplomaNumber;
         $personaldetail->TranscriptNumber=$request->TranscriptNumber;
         $personaldetail->nic=$request->nic;
		 
		 $personaldetail->typeEducation=$request->typeEducation;
		 $personaldetail->EDocument=$request->EDocument;
		 $personaldetail->Grade=$request->Grade;
		 $personaldetail->GPA=$request->GPA;
		
		
		 $personaldetail->typeScholarship=$request->typeScholarship;
		  $personaldetail->UniID=$request->UniID;
		   $personaldetail->RollNum=$request->RollNum;
		    $personaldetail->PersonalCellPhone=$request->PersonalCellPhone;
			 $personaldetail->StudyDuration=$request->StudyDuration;
			  $personaldetail->PAddress=$request->PAddress;
			   $personaldetail->CAddress=$request->CAddress;
			    $personaldetail->FEducation=$request->FEducation;
				 $personaldetail->PersonalEmail=$request->PersonalEmail;
		
						$personaldetail->Pbirth=$request->Pbirth;
						$personaldetail->dob=$request->dob;
						$personaldetail->GYear=$request->GYear;
						$personaldetail->AYear=$request->AYear;
                        $personaldetail->details=$request->details;
						$personaldetail->PersonalPhon2=$request->PersonalPhon2;
						$personaldetail->PersonalEmail2=$request->PersonalEmail2;
                        //educational qualification

                        
                        $personaldetail->degree=$request->degree;
                        $personaldetail->from_date=$request->from_date;
                        $personaldetail->to_date=$request->to_date;
                        $personaldetail->university=$request->university;
                        $personaldetail->address=$request->address;
                        $personaldetail->contact=$request->contact;
                        $personaldetail->file_name=$filename1;
                        $personaldetail->image=$filename;
						//$personaldetail->shamsi=$request->shamsi;
						$personaldetail->thesistitle=$request->thesistitle;
						$personaldetail->flag=1;
	
						 $personaldetail->pass='The Application is with Documents Evaluation Committee for Review';
						
		
                      
		 
		              
			             $name = $request->name;
			             $issueingcountry = $request->issueingCountry;
			             $degree = $request->degree;
			             
			             
			  
			            
			             
			         
			             
        
		             
		                
			             
		                

		//code for restricting users to certain limit
	    $user1=$request->id;
		
        $user=User::find($user1);
        

	    //Bachelor Registration - Allowed only 2 times
	   
        if($user->flag==0 && $personaldetail->degree=="Bachelor")
        {
        $user->flag=1;
        
        }
		elseif($user->flagMaster==0 && $personaldetail->degree=="Master")
        {
        $user->flagMaster=1;
        
        }
		elseif($user->flagPHD==0 && $personaldetail->degree=="PHD")
        {
        $user->flagPHD=1;
        
        }

        elseif($user->flag==1 && $personaldetail->degree=="Bachelor")
        {
            $user->flag=2;
        }
		 elseif($user->flagMaster==1 && $personaldetail->degree=="Master")
        {
            $user->flagMaster=2;
        }
		 elseif($user->flagPHD==1 && $personaldetail->degree=="PHD")
        {
            $user->flagPHD=2;
        }
		
		
		elseif($user->flag==2 && $personaldetail->degree=="Bachelor")
		{
			 $user->flag=3;
		}
		 elseif($user->flagMaster==2 && $personaldetail->degree=="Master")
        {
            $user->flagMaster=3;
        }
		 elseif($user->flagPHD==2 && $personaldetail->degree=="PHD")
        {
            $user->flagPHD=3;
        }
       
		
       

        if($user->flag==3 && $personaldetail->degree=="Bachelor")
         {
            
            Session::flash('message','You cant register furthermore for Bachelor Registration');
         }
		 elseif($user->flagMaster==3 && $personaldetail->degree=="Master")
         {
            
            Session::flash('message','You cant register furthermore for Master Registration');
         }
		 elseif($user->flagPHD==3 && $personaldetail->degree=="PHD")
         {
            
            Session::flash('message','You cant register furthermore for PHD Registration');
         }
		 elseif( $user->flag==2 && $personaldetail->degree=="Bachelor" || $user->flag==1 && $personaldetail->degree=="Bachelor")
		 
		 {
			 
				$personaldetail->save();	 
		 }
		 elseif( $user->flagMaster==2 && $personaldetail->degree=="Master" || $user->flagMaster==1 && $personaldetail->degree=="Master")
		 
		 {
			 
				$personaldetail->save();	 
		 }
		  elseif( $user->flagPHD==2 && $personaldetail->degree=="PHD" || $user->flagPHD==1 && $personaldetail->degree=="PHD")
		 
		 {
			    
				$personaldetail->save();	 
		 }
		 
     $personal_detailflag = PersonalDetail::wherename($name)->firstOrFail();

/*	 if($personal_detailflag->flag  ==  1)
	 {
	       Session::flash('message','Record not Saved ');
	 }
	 else
	 {*/
	     	 $user->save();
	         $personaldetail->save();
	         return redirect('/admin_doctor');
	 //}

         
   
     
    
     
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
    public function edit($id)
    {
        





    }
	
	

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
