<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalDetail;
use App\ProvisionalQualification;
use App\EducationQualification;
use App\Nationality;
use App\Medical_Degree;
use App\University;
use Auth;
use App\ActivityLog;	
use App\User;
use Spatie\Activitylog\Models\Activity;
use App\Profession;
use App\update_general;



use Illuminate\Support\Facades\Session;
class RejectionController extends Controller
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
    public function index()
	
    {
		
		
    $doctor_lists=PersonalDetail::all()->sortByDesc('id');
	$activityLogFile=ActivityLog::all();
	

     return view('admin.setup.Rejection.list',compact('doctor_lists','activityLogFile'));
    }

    public function doctor_details($reg_no){
        //$doctor_details=array();
        $doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();
        $generals=ProvisionalQualification::where('reg_no',$reg_no)->get();
        //$education=array();
        $education=EducationQualification::where('reg_no',$reg_no)->get();

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

        $general_info=array();

        $general_info=null;
        for($i=0;$i<count($generals);$i++){
            if($i==0){
                 $general_info=$generals[$i];
                 $general_info[$i]=$generals[$i];
            }else{
                 $general_info[$i]=$generals[$i];
            }
           
        }

        $education_qualification=array();
        $education_qualification=null;

        for($i=0;$i<count($education);$i++){
            if($i==0){
                 $education_qualification=$education[$i];
                 $education_qualification=$education[$i];
            }else{
                 $education_qualification=$education[$i];
            }
           
        }

        return view('admin.setup.admin_doctor.details',compact('registred_doctor','general_info','education'));

    }
     public function print_certificate($reg_no)
    { 
        $doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();
        $generals=ProvisionalQualification::where('reg_no',$reg_no)->get();
        $education=EducationQualification::where('reg_no',$reg_no)->get();

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

        $general_info=array();

        $general_info=null;
        for($i=0;$i<count($generals);$i++){
            if($i==0){
                 $general_info=$generals[$i];
                 $general_info[$i]=$generals[$i];
            }else{
                 $general_info[$i]=$generals[$i];
            }
           
        }

        $education_qualification=array();
        $education_qualification=null;

        for($i=0;$i<count($education);$i++){
            if($i==0){
                 $education_qualification=$education[$i];
                 $education_qualification=$education[$i];
            }else{
                 $education_qualification=$education[$i];
            }
           
        }

        return view('admin.reports.printcertificate.certificate',compact('registred_doctor','general_info','education_qualification'));
    }
	
	     public function print_certificate1($reg_no)
    { 
        $doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();
        $generals=ProvisionalQualification::where('reg_no',$reg_no)->get();
        $education=EducationQualification::where('reg_no',$reg_no)->get();

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

        $general_info=array();

        $general_info=null;
        for($i=0;$i<count($generals);$i++){
            if($i==0){
                 $general_info=$generals[$i];
                 $general_info[$i]=$generals[$i];
            }else{
                 $general_info[$i]=$generals[$i];
            }
           
        }

        $education_qualification=array();
        $education_qualification=null;

        for($i=0;$i<count($education);$i++){
            if($i==0){
                 $education_qualification=$education[$i];
                 $education_qualification=$education[$i];
            }else{
                 $education_qualification=$education[$i];
            }
           
        }

        return view('admin.reports.printcertificate.certificate1',compact('registred_doctor','general_info','education_qualification'));
    }

    public function notify(){

        $notification = PersonalDetail::select('rejection')->where('userid',Auth::user()->id)->get();

        $note=null;

        for($i=0;$i<count($notification);$i++){
            if($i==0){
                 $note=$notification[$i];
                 $note=$notification[$i];
            }else{
                 $note=$notification[$i];
            }
           
        }

        return view('admin.setup.admin_doctor.notification',compact('note'));
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
    public function edit($id)
    {
		

		
        $doctor_info=PersonalDetail::find($id);
        $nationalities=Nationality::all();
        $education_info=EducationQualification::find($id);
        $medical_degrees=Medical_Degree::all();
        $universities=University::all();
		$university_info=ProvisionalQualification::find($id);
        $professions=Profession::all();
		
		
		
        return view('admin.setup.admin_doctor.edit',compact('doctor_info','nationalities','education_info','medical_degrees','universities','university_info','professions'));
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
        $this->validate($request,[
             //'reg_no'=>'required',
             // 'reg_date'=>'required',
             // 'name'=>'required',
             // 'surname'=>'required',
             // 'father_name'=>'required',
             // 'g_fathername'=>'required',
             // 'gender'=>'required',
             // 'nationality'=>'required',
             // 'nic'=>'required',
             // 'passport_no'=>'required',
             // 'visa_issue_date'=>'required',
             // 'visa_exp_date'=>'required',
             // 'issue_place'=>'required',
             // 'issue_date'=>'required',
             // 'dob'=>'required',
             // 'pob'=>'required',
              //'image'=>'required | mimes:jpeg,jpg,png',

             // 'email_address'=>'required',
             // 'cell'=>'required',
             // 'present_address'=>'required',
             // 'permenant_address'=>'required',

         ]);
 
 
 
         

		 
		 
		 
		 
        

         $personaldetail =PersonalDetail::find($id);

         $personaldetail->reg_no=$request->reg_no;
         //$personaldetail->reg_date=$request->reg_date;
         $personaldetail->name=$request->name;
         $personaldetail->surname=$request->surname;
         $personaldetail->father_name=$request->father_name;

         $personaldetail->g_fathername=$request->g_fathername;
        // $personaldetail->gender=$request->gender;
         $personaldetail->nationality=$request->nationality;
         $personaldetail->nic=$request->nic;

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
			
        
      
     
         
         $personaldetail->save();


         //Education Qualification


       
       
        
      

                $education_qualification=EducationQualification::find($id);
                
                
                
                $education_qualification->reg_no=$request->reg_no;
                $education_qualification->degree=$request->degree;
                
    
                
                $education_qualification->from_date=$request->from_date;
               
                $education_qualification->to_date=$request->to_date;
                $education_qualification->university=$request->university;
                $education_qualification->address=$request->address;
    
                $education_qualification->contact=$request->contact;
               
			    $filename=null;
                if($request->hasFile('file_name')){
                    $filename[0]=$request->file_name[0]->getClientOriginalName();
                    $request->file_name[0]->storeAs('public\documents',$filename[0]);
					 $education_qualification->file_name=$filename[0];
                }
			   
			   
               
                
                
              
    
                $education_qualification->save();
    
               
               //General Updation

         $update_general = update_general::find($id);
         $update_general->reg_no=$request->reg_no;
         $update_general->profession=$request->profession;
         $update_general->medical_degree=$request->medical_degree;
         $update_general->faculty=$request->faculty_name;
         $update_general->university_type=$request->university_type;
         $update_general->university_name=$request->university_name;

         $update_general->u_from_date=$request->u_from_date;
         $update_general->u_to_date=$request->u_to_date;
         //$update_general->year_of_passing=$request->year_of_passing;
         //$update_general->flag='Provisional Qulification';
         $update_general->save();
            

		$activity = new ActivityLog;
		$activity->description = "Updated Records of ".$personaldetail->name;
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
		
		

        $edu=EducationQualification::find($id);
        $edu->delete();

        $gen=update_general::find($id);
		
		
		

        $gen->delete();
		
		$activity = new ActivityLog;
		$activity->description = "Deleted record".$doctor->name;
		$activity->user=Auth::user()->firstName;
		
		$activity->save();
		

        Session::flash('message','Record Deleted Successfuly');
        return redirect('/admin_doctor');
    }
}
