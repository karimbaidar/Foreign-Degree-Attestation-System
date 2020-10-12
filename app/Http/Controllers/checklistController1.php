<?php

namespace App\Http\Controllers;
//use jdatetime;
use App\PersonalDetail;
use App\AttestationComments;
//require_once 'C:\xampp\htdocs\AMC 18-04-18\AMC 26-04-18\INSEJAAM_old_2\INSEJAAM - August 3 2018 - Copy\public\jDateTime-master/jdatetime.class.php';
//use App\jdatetime;
	 
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Mail;
use DB;
use Auth;
use App\ActivityLog;
use App\TechnicalComments;
use \Crypt;


use Illuminate\Support\Facades\Session;
class checklistController1 extends Controller
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
        return view('admin.setup.admin_doctor.list');
    }


     public function show_check_list($reg_no)
    { 
	  
	    $reg_no = Crypt::decrypt($reg_no);
	    
	    $technicalcomments=TechnicalComments::where('reg_no',$reg_no)->get();
	    
	    $technicalcomments_register=array();
        $technicalcomments_register=null;


        for($i=0;$i<count($technicalcomments);$i++){
            if($i==0){
                 $technicalcomments_register=$technicalcomments[$i];
                 $technicalcomments_register[$i]=$technicalcomments[$i];
            }else{
                 $technicalcomments_register[$i]=$technicalcomments[$i];
            }
           
        }
        
        
	    $attestationcomments=AttestationComments::where('reg_no',$reg_no)->get();
	    $attestationcomments_register=array();
        $attestationcomments_register=null;

        for($i=0;$i<count($attestationcomments);$i++){
            if($i==0){
                 $attestationcomments_register=$attestationcomments[$i];
                 $attestationcomments_register[$i]=$attestationcomments[$i];
            }else{
                 $attestationcomments_register[$i]=$attestationcomments[$i];
            }
           
        }
	 
	    
        
        

		$info=PersonalDetail::where('reg_no',$reg_no)->get();
	
		$doctor_lists=PersonalDetail::all()->sortByDesc('reg_no');
		
		$registred_doctor=array();
        
        $registred_doctor=null;


        for($i=0;$i<count($doctor_lists);$i++){
            if($i==0){
                 $registred_doctor=$doctor_lists[$i];
                 $registred_doctor[$i]=$doctor_lists[$i];
            }else{
                 $registred_doctor[$i]=$doctor_lists[$i];
            }
           
        }

		
        $doctor=null;


        for($i=0;$i<count($info);$i++){
            if($i==0){
                 $doctor=$info[$i];
                 $doctor[$i]=$info[$i];
            }else{
                 $doctor[$i]=$info[$i];
            }
           
        }


       

        return view('admin.setup.checklist1.create',compact('reg_no','doctor','registred_doctor','technicalcomments_register','attestationcomments_register'));
	
	   

    }
	
     public function send_email()
    { 
       Mail::send(['text'=>'mail'],['name','Sediqullah'],function($message){

        $message->to('sediqullah.sadiq55@gmail.com','Ahmad khan')->subject('test email');
        $message->from('sediqullah.sadiq55@gmail.com','Ahmad khan');

       });
    }

    public function update_status(Request $request)
    {
    
       
        
         
          
            $attestationcomments_edit_1 =  AttestationComments::where('reg_no', $request->reg_no)->first();
            

            if (!$attestationcomments_edit_1) 
            {
                $attestationcomments = new AttestationComments;
                $attestationcomments->DiplomaNumber = $request->DiplomaNumber;
                $attestationcomments->Protocol = $request->Protocol;
                $attestationcomments->AttestationType = $request->AttestationType;
                $attestationcomments->University = $request->University;
                $attestationcomments->EducationLevel = $request->EducationLevel;
                $attestationcomments->DocType = $request->DocType;
                $attestationcomments->EducationField = $request->EducationField;
                $attestationcomments->Thesis = $request->Thesis;
                $attestationcomments->nondocument = $request->nondocument;
                $attestationcomments->reg_no = $request->reg_no;
                $attestationcomments->flagattestation = 1;
                $attestationcomments->save();
            
            }
               
        
         
            $attestationcomments_edit = AttestationComments::wherereg_no($request->reg_no)->firstOrFail();

            if ($attestationcomments_edit->adminapproval == 1) 
            {
                $attestationcomments_edit->DiplomaNumber = $request->DiplomaNumber;
                $attestationcomments_edit->Protocol = $request->Protocol;
                $attestationcomments_edit->AttestationType = $request->AttestationType;
                $attestationcomments_edit->University = $request->University;
                $attestationcomments_edit->EducationLevel = $request->EducationLevel;
                $attestationcomments_edit->DocType = $request->DocType;
                $attestationcomments_edit->EducationField = $request->EducationField;
                $attestationcomments_edit->Thesis = $request->Thesis;
                $attestationcomments_edit->nondocument = $request->nondocument;
                $attestationcomments_edit->reg_no = $request->reg_no;
                $attestationcomments_edit->flagattestation = 1;
                $attestationcomments_edit->adminapproval = 2;
                $attestationcomments_edit->save();
           
            }

          
         
                $registration_date=date("Y-m-d h:m:s");

                $reg_no=$request->reg_no;
                $personaldetail = PersonalDetail::wherereg_no($reg_no)->firstOrFail();
                $attestationcomments_edit = AttestationComments::wherereg_no($request->reg_no)->firstOrFail();
       
        
                if($request->role == "approval")
                {
                       $personaldetail->pass='The Application has been forwarded to Technical Committee by Documents Attestation Evaluation department.';
                       $personaldetail->rejection='Approved';
                       Session::flash('message','اسناد به کمیته تخنیکی ارسال شد');
                }
       
               if($request->role == "rejection")
               {

                       $personaldetail->rejection=$request->rejection;
                       $personaldetail->rejectionFlag=1;
                       $personaldetail->status="Rejected";
                        Session::flash('message','اسناد محصل از طرف اعضای کمیسون رد شد');
               }
           
               if($request->role == "message")
               {

                       $personaldetail->nondocument=$request->nondocument;
                       $personaldetail->nondocumentFlag=1;
                       $personaldetail->status="Pending";
                       
                       
                       
                           $data['email'] =$request->nondocument;
                           $data['name'] = $personaldetail->name;
                    
                    
                       
                       
                         Mail::send('emails.mail',$data,function($message) use ($personaldetail) {
                          
                         $message->to($personaldetail->PersonalEmail,$personaldetail->name)->subject('Regarding Your Educational Documents');
                         $message->from('karimbaidar@gmail.com','Ministry of Higher Education');

                         });
                       
                       
                       Session::flash('message','پیام به محصل مربوطه ارسال شد ');
               }
           
           
       

           $activity = new ActivityLog;
           $activity->description = "Passed Records of ".$personaldetail->name." at ".$registration_date." to Technical Committee ";
           $activity->user=Auth::user()->firstName;
           $activity->save();
           $personaldetail->save();
    
        return redirect('/admin_doctor');
	 
      
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
        //
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
