<?php

namespace App\Http\Controllers;
use App\PersonalDetail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Mail;
use Auth;
use App\ActivityLog;
use DB;
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


     public function show_check_list($id)
    { 
	
		$info=PersonalDetail::where('id',$id)->get();
       



       

        return view('admin.setup.checklist2.create',compact('id','doctor'));
	
	
	
        
        

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
        //$reg_no = Input::get ( 'reg_no' );
        $registration_date=date("Y-m-d h:m:s");
		//$date->date("Y-m-d", false, false);
        $id=$request->reg_no;
        
        $personaldetail=PersonalDetail::find($id);
       
        
		$personaldetail->approvechecklist='The application has been forwarded to Higher Attestation Evaluation committee by Technical Committee';
		$activity = new ActivityLog;
		$activity->description = "Passed Records of ".$personaldetail->name." at ".$registration_date." to Higher Attestation Evaluation Committee ";
		$activity->user=Auth::user()->firstName;
		
		$activity->save();
        $personaldetail->timeDuration=$registration_date;
        $personaldetail->save();
         
        Session::flash('message',"اسناد به کمیسون عالی ارزیابی اسناد ارسال شد");
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
