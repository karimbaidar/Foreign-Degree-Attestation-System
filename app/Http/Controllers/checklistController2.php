<?php

namespace App\Http\Controllers;
use App\PersonalDetail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Mail;
use Auth;
use App\ActivityLog;
use App\TechnicalComments;
use App\AttestationComments;
use DB;
use \Crypt;
//require_once 'C:\xampp\htdocs\AMC 18-04-18\AMC 26-04-18\INSEJAAM_old_2\INSEJAAM - August 3 2018 - Copy\public\jDateTime-master/jdatetime.class.php';

use Illuminate\Support\Facades\Session;
class checklistController2 extends Controller
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


       

        return view('admin.setup.checklist2.create',compact('reg_no','doctor','registred_doctor','technicalcomments_register','attestationcomments_register'));
	
	
	
        
        

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
        

            $technicalcomments_edit_1 =  TechnicalComments::where('reg_no', $request->reg_no)->first();
            
            if (!$technicalcomments_edit_1) 
            {
        	// Attestation Comments Section
	    	$technicalcomments = new TechnicalComments;
	    	$technicalcomments->page = $request->page;
	    	$technicalcomments->jild = $request->jild;
	    	$technicalcomments->EducationType = $request->EducationType;
	    	$technicalcomments->Temporary = $request->Temporary;
	    	$technicalcomments->Permanent = $request->Permanent;
	    	$technicalcomments->Email = $request->Email;
            $technicalcomments->nondocument = $request->nondocument;
            $technicalcomments->reg_no = $request->reg_no;
            $technicalcomments->flagattestation = 1;
	        $technicalcomments->save();
           }
	   
            $technicaledit = TechnicalComments::wherereg_no($request->reg_no)->firstOrFail();
         
            if ($technicaledit->adminapproval == 1) 
            {
               
               $technicaledit->page = $request->page;
               $technicaledit->jild = $request->jild;
               $technicaledit->EducationType = $request->EducationType;
               $technicaledit->Temporary = $request->Temporary;
               $technicaledit->Permanent = $request->Permanent;
               $technicaledit->Email = $request->Email;
               $technicaledit->nondocument = $request->nondocument;
               $technicaledit->flagattestation = 1;
               $technicaledit->adminapproval = 2;
               $technicaledit->save();


            }
        
        
       	$registration_date=date("Y-m-d h:m:s");

        $reg_no=$request->reg_no;
        
        $personaldetail = PersonalDetail::wherereg_no($reg_no)->firstOrFail();
        
        //this is for saving the value in the TEmporary column of Personal_details table for evaluation in list
        $personaldetail->Temporary =  $request->Temporary;
        
          if($request->role == "approval")
                 {
                     	$personaldetail->approvechecklist='The application has been forwarded to Higher Attestation Evaluation committee by Technical Committee';
                        $personaldetail->rejection='Approved';
                         Session::flash('message',"اسناد به کمیسون عالی ارزیابی اسناد ارسال شد");
                 }
		
               

		 if($request->role == "message"){

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
		$activity->description = "Passed Records of ".$personaldetail->name." at ".$registration_date." to Higher Attestation Evaluation Committee ";
		$activity->user=Auth::user()->firstName;
		
		$activity->save();
        
        $personaldetail->timeDuration=$registration_date;
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
        //
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
