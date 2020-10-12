<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\createEducational;
use App\createPersonal;
use Auth;
use App\ActivityLog;
use App\Nationality;
use App\EducationQualification;
use App\ProvisionalQualification;
use App\University;
use App\Medical_Degree;
use Illuminate\Support\Facades\Session;
class createEducationalController extends Controller
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

       
             $value_2 = 2;
                        
             Session::put('EducationController', $value_2);
                        
        

        $nationalities=Nationality::all(); 
        $personalDetails= createEducational::all();

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
        $codeArray=createEducational::select('reg_no')->orderBy('id','desc')->limit(1)->get();
		

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

        return view('admin.setup.personal_registration.create_education',compact('code_value','nationalities','registration_date','registred_doctor','universities','medical_degrees'));
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

        return view('admin.setup.personal_registration.create_eductional',compact('code_value','nationalities','registration_date','registred_doctor','universities','medical_degrees'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		
	

       
      
         
         $personaldetail = new createEducational;
         

		 $personaldetail->userid=$request->id;

         $personaldetail->issueingCountry=$request->issueingCountry;
         $personaldetail->DiplomaNumber=$request->DiplomaNumber;
         $personaldetail->TranscriptNumber=$request->TranscriptNumber;
       
		 
		 $personaldetail->typeEducation=$request->typeEducation;
		 $personaldetail->EDocument=$request->EDocument;
		 $personaldetail->Grade=$request->Grade;
		 $personaldetail->GPA=$request->GPA;
		
		
		 $personaldetail->typeScholarship=$request->typeScholarship;
	//	  $personaldetail->UniID=$request->UniID;
		   $personaldetail->RollNum=$request->RollNum;
		 
			 $personaldetail->StudyDuration=$request->StudyDuration;

			    $personaldetail->FEducation=$request->FEducation;
	
				  $personaldetail->EducationLevel=$request->EducationLevel;
					
				
						$personaldetail->GYear=$request->GYear;
						$personaldetail->AYear=$request->AYear;
                        $personaldetail->details=$request->details;
			
                    
							$personaldetail->thesistitle=$request->thesistitle;
							$personaldetail->flageducational = 1;
						
					     $reg_number = Session::get('reg_no');
					     $user_id = Session::get('user_id');
					     
					     Session::put('reg_noEducation', $reg_number);
					     Session::put('user_idEducation', $user_id);
						 $personaldetail->reg_no=$reg_number;
		                
                    
        
		 
		
   
               
                  
                      //  $issueingCountry = $request->issueingCountry;
                    //    $educational_flag = createEducational::whereissueingcountry($issueingCountry)->firstOrFail(); 
                        
                    //$personaldetail_reg = createPersonal::wherereg_no($request->reg_no)->firstOrFail();
                        
                  
                            $personaldetail->save();
                    		$personaldetail->flagTurnOff = 1;
                    		Session::flash('message','Record Successfully Saved');
                            return redirect('/createUniversityDetails');
                            
                
                
              
			 

        
 
    
     
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
