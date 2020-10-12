<?php

namespace App\Http\Controllers;
use App\PersonalDetail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Auth;
use Mail;
use App\ActivityLog;
use DB;
use App\TechnicalComments;
use App\AttestationComments;

//require_once 'C:\xampp\htdocs\AMC 18-04-18\AMC 26-04-18\INSEJAAM_old_2\INSEJAAM - August 3 2018 - Copy\public\jDateTime-master/jdatetime.class.php';

use Illuminate\Support\Facades\Session;
class checklistController3 extends Controller
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


     public function show_check_list($id)
    { 
	
		 
        //$reg_no = Crypt::decrypt($id);
	    
	    $technicalcomments=TechnicalComments::where('id',$id)->get();
	    
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
        
        
	    $attestationcomments=AttestationComments::where('id',$id)->get();
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
	 
	    
        
        

		$info=PersonalDetail::where('id',$id)->get();
	
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

       
		$info=PersonalDetail::where('id',$id)->get();
       


        return view('admin.setup.checklist3.create',compact('id','doctor','reg_no','doctor','registred_doctor','technicalcomments_register','attestationcomments_register'));
	

	
	
	
        
        

    }
	
     public function send_email()
    { 
       Mail::send(['text'=>'mail'],['name','Karim'],function($message){

        $message->to('karimbaidar@gmail.com','Baidar')->subject('test email');
        $message->from('karimbaidar@gmail.com','Baidar');

       });
    }

    public function update_status(Request $request)
    {
        //$reg_no = Input::get ( 'reg_no' );
        $registration_date=date("Y-m-d h:m:s");
        $id=$request->reg_no;
        
        $personaldetail=PersonalDetail::find($id);
     //  $date->date("Y-m-d", false, false);
        
		$personaldetail->approvechecklist1='The Application has been forwarded to Commission Director by H.A Evaluation committee .';
		$activity = new ActivityLog;
		$activity->description = " Passed Records of ".$personaldetail->name." at ".$registration_date." to Commission Director ";
		$activity->user=Auth::user()->firstName;
		
		$activity->save();
        $personaldetail->timeDuration=$registration_date;
        $personaldetail->save();
         
        Session::flash('message',"اسناد به رئیس کمیسون ارسال شد");
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
