<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\createUniversityDetails;
use Auth;
use App\ActivityLog;
use App\Nationality;
use App\EducationQualification;
use App\ProvisionalQualification;
use App\University;
use App\Medical_Degree;
use Illuminate\Support\Facades\Session;
class createUniversityDetailsController extends Controller
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

       


        $nationalities=Nationality::all(); 
        $personalDetails= createUniversityDetails::all();

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
        $codeArray=createUniversityDetails::select('reg_no')->orderBy('id','desc')->limit(1)->get();
		

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

        return view('admin.setup.personal_registration.create_universityDetails',compact('code_value','nationalities','registration_date','registred_doctor','universities','medical_degrees'));
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

        return view('admin.setup.personal_registration.createUniversityDetails',compact('code_value','nationalities','registration_date','registred_doctor','universities','medical_degrees'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		 

	

       
         $filename1=null;
         if($request->hasFile('file_name')){
             $filename1=$request->file_name->getClientOriginalName();
             $request->file_name->storeAs('public\documents',$filename1);
         }
		 
       
      
         
         $personaldetail = new createUniversityDetails;
         

       
		 $personaldetail->userid=$request->id;

       
	   
                        
                        $reg_number = Session::get('reg_no');
                        $user_id = Session::get('user_idEducation');
                        
                        $personaldetail->reg_no=$reg_number;
                        
                        Session::put('reg_noUniversity',  $personaldetail->reg_no);
                        Session::put('user_idUniversity', $user_id);

                        $personaldetail->from_date=$request->from_date;
                        $personaldetail->to_date=$request->to_date;
                        $personaldetail->university=$request->university;
                        $personaldetail->PersonalPhon2=$request->PersonalPhon2;
						$personaldetail->PersonalEmail2=$request->PersonalEmail2;
                        //educational qualification
                        $personaldetail->degree=$request->degree;
                        $personaldetail->flaguniversity=1;
                       
                       
                       
                        $personaldetail->file_name=$filename1;
					
				
		
		
        
  
	    $user1=$request->id;
		
        $user=User::find($user1);
       
	                  //Bachelor Registration - Allowed only 2 times
	                 //  $degree = $request->degree;
                    //   $university_flag = createUniversityDetails::wheredegree($degree)->firstOrFail(); 
                     /* if($personaldetail->flaguniversity = 1) 
                        {
                           	Session::flash('message','You cant save furthermore');
                           	 return redirect('/home');
                        }
                        else
                        {*/
                                   
                           $user->save();
                        	$personaldetail->save();
                             Session::flash('message','Record Successfully Saved');
          
                    	
                    		  return redirect('/personal_detail');
     
                        
                    		
		
			 
    
     

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
