<?php

namespace App\Http\Controllers;
use App\PersonalDetail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Mail;
use Auth;
//require_once 'C:\xampp\htdocs\AMC 18-04-18\AMC 26-04-18\INSEJAAM_old_2\INSEJAAM - August 3 2018 - Copy\public\jDateTime-master/jdatetime.class.php';
use DB;
use Illuminate\Support\Facades\Session;

use App\TechnicalComments;
use App\ActivityLog;
use App\AttestationComments;

class checklistController5 extends Controller
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
       

        return view('admin.setup.checklist5.create',compact('id','doctor'));
	
     

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
        $registration_date=date("Y-m-d H:i:s");
        $id=$request->reg_no;
        
        $personaldetail=PersonalDetail::find($id);
        $reg_no = $personaldetail->reg_no;

        $technicalcommittee = TechnicalComments::wherereg_no($reg_no)->firstOrFail();
        //$technicalcommittee=TechnicalComments::find($id);
        $attestationcomments = AttestationComments::wherereg_no($reg_no)->firstOrFail();
        //$attestationcomments=AttestationComments::find($id);
       

        //$technicalcommittee->flagattestation = 0;
        //$attestationcomments->flagattestation = 0;
        
        if($request->has('attestation')){
            $attestationcomments->adminapproval = 1;


            $activity = new ActivityLog;
            $activity->description = "Gave permission to Attestation Department to edit information of a student named as".$personaldetail->name." ";
            $activity->user=Auth::user()->lastName;
            
            $activity->save();
            $attestationcomments->save();

            Session::flash('message',"پروسه تکمیل شد");
            
        }elseif($request->has('technical')){
            $technicalcommittee->adminapproval = 1;



            $activity = new ActivityLog;
            $activity->description = "Gave permission to Attestation Department to edit information of a student named as ".$personaldetail->name." " ;
            $activity->user=Auth::user()->lastName;
            
            $activity->save();

            $technicalcommittee->save();


            Session::flash('message',"پروسه تکمیل شد");

        }elseif($request->has('technical') && $request->has('attestation')){
            $technicalcommittee->adminapproval = 1;

            $attestationcomments->adminapproval = 1;


            $activity = new ActivityLog;
            $activity->description = "Gave permission to Attestation Department and Technical Committee to edit information of a student named as".$personaldetail->name." ";
            $activity->user=Auth::user()->lastName;
            
            $activity->save();
            $attestationcomments->save();
            
            $technicalcommittee->save();


            Session::flash('message',"پروسه تکمیل شد");

        }
        else
        {
            Session::flash('message',"پروسه تکمیل نه شد");

        }





         
        
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
