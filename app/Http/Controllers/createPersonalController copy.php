<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\createPersonal;
use Auth;
use App\ActivityLog;
use App\Nationality;
use App\EducationQualification;
use Illuminate\Support\Facades\DB;
use App\ProvisionalQualification;
use App\University;
use App\Medical_Degree;
use Illuminate\Support\Facades\Session;
class createPersonalController extends Controller
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
        $personalDetails= createPersonal::all();

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
        $codeArray=createPersonal::select('reg_no')->orderBy('id','desc')->limit(1)->get();
		

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

        return view('admin.setup.personal_registration.create_personal',compact('code_value','nationalities','registration_date','registred_doctor','universities','medical_degrees'));
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
        $codeArray=createPersonal::select('reg_no')->orderBy('id','desc')->limit(1)->get();
		

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
        
        
       
      
         
         $personaldetail = new createPersonal;
         

         $personaldetail->reg_no=$request->reg_no;
         $personaldetail->reg_date=$request->reg_date;
         $personaldetail->name=$request->name;
         $personaldetail->surname=$request->surname;
         $personaldetail->father_name=$request->father_name;
		 $personaldetail->userid=$request->id;

         $personaldetail->nic=$request->nic;

	     $personaldetail->PersonalCellPhone=$request->PersonalCellPhone;
			
			             $personaldetail->PAddress=$request->PAddress;
			             $personaldetail->CAddress=$request->CAddress;
			   
			             $personaldetail->PersonalEmail=$request->PersonalEmail;
				
						$personaldetail->Pbirth=$request->Pbirth;
						$personaldetail->dob=$request->dob;
						$personaldetail->flagTurnOff=$request->flagTurnOff;
					
				        $personaldetail->flagpersonal=1;
					
		
                          $personaldetail->image=$filename;
		 
            
      //  Session::flash('message','Record Successfully Added');
        Session::put('reg_no', $request->reg_no);
        Session::put('user_id', $request->id);

                      //  $name = $request->name;
                      //  $personal_flag = createPersonal::wherename($name)->firstOrFail(); 
    

		//code for restricting users to certain limit
	          $user1=$request->id;
	        
		
              $user=User::find($user1);
       
                        
                        
                      
                            $user->save();
                            $personaldetail->save();
                            Session::flash('message','Record Successfully Saved');
                
                            return redirect('/createEducational');
           	 
                       
              
		
	
  
                                      
                                
   
		 
     
        
        
        
        
        
     
     
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
