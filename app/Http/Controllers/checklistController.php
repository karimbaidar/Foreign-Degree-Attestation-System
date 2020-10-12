<?php

namespace App\Http\Controllers;
use App\PersonalDetail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use User;
use App\ActivityLog;
use Auth;
use Mail;
use DB;
use Illuminate\Support\Facades\Session;
require_once  '/home/karimbaidar1/public_html/afghanistanmedicalcouncil.com/public/jDateTime-master/jdatetime.class.php';
//$date = new jDateTime(true, true, 'Asia/Tehran');

class checklistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	public function __construct()
    {
        $this->middleware(['locale','auth']);
		$this->middleware(['revalidate','auth']);
    }
	 
    public function index()
    {
		
        return view('admin.setup.admin_doctor.list');
    }


     public function show_check_list($id)
    { 
       
   	    $info=PersonalDetail::where('id',$id)->get();
        $doctor=null;


        for($i=0;$i<count($info);$i++){
            if($i==0){
                 $doctor=$info[$i];
                 $doctor[$i]=$info[$i];
            }else{
                 $doctor[$i]=$info[$i];
            }
           
        }


        return view('admin.setup.checklist.create',compact('id','doctor'));
    }
	public function show_check_list1($id)
    { 
       // $doctor_details=PersonalDetail::where('id',$id)->get();
        

        return view('admin.setup.checklist.create1',compact('id'));
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

         $id=$request->reg_no;
        
        //$personaldetail=PersonalDetail::find($id);
       
  //       $personaldetail->status='Approved';
		// $personaldetail->pass='No';
  //       $personaldetail->save();
         
  //       Session::flash('message','Doctor has been Approved');




            
        $this->validate($request,[
            
        ]);
        
        
        $personaldetail=PersonalDetail::find($id);
    

           if($request->id_varification){
            $personaldetail->id_varification=1;

            if($request->police_varification){
                 $personaldetail->police_varification=1;
            }

            if($request->document_varification){
                $personaldetail->document_varification=1;
            }
            if( $request->bank_varification){
               $personaldetail->bank_varification=1; 
            }
            if($request->test_varification){
                $personaldetail->test_examination=1;
            }
            
            if($request->fit_to_work){
               $personaldetail->fit_to_work=1;
            }
            if($request->declaration){
              $personaldetail->diclaration=1;  
            }
            if($request->approval){
              $personaldetail->approval=1;  
            }
            if($request->rejection){

                $personaldetail->rejection=$request->rejection;
				$personaldetail->rejectionFlag=1;
				$personaldetail->status="Rejected";
            }
			
			 if($request->nondocument){

                $personaldetail->nondocument=$request->nondocument;
				$personaldetail->nondocumentFlag=1;
				$personaldetail->status="Pending";
            }
			
			
	//	$date->date("Y-m-d", false, false);
	//	$registration_date=date("Y-m-d h:m:s");
            if($personaldetail->document_varification==1 && $personaldetail->bank_varification==1 && $personaldetail->test_examination==1  && $personaldetail->fit_to_work==1 && $personaldetail->diclaration==1 && $personaldetail->approval==1){

                $personaldetail->status='Approved';
                $personaldetail->pass='The Application is now forwarded to Technical Committee from Documents Evaluation Comittee';
				
               // $personaldetail->timeDuration=$registration_date;
                $personaldetail->rejection='Approved';
				
				if($personaldetail->status='Approved')
				{
					Session::flash('message','Student has been Verified Successfully');
				}
				else if($personaldetail->pass='The Application is now forwarded to Technical Committee from Documents Evaluation Comittee')
				{
					Session::flash('message','Student is Passed to Verifier Committee');
				}
				else if($personaldetail->rejection='Approved')
				{
					Session::flash('message',__('ui-list.rejectedstatushasbeenpassed'));
				}
				
                
            }

            
            
        }
        //  else {
        //     $personaldetail->id_varification=0;
        //     $personaldetail->police_varification=0;
        //     $personaldetail->document_varification=0;
        //     $personaldetail->bank_varification=0;
        //     $personaldetail->test_examination=0;
        //     $personaldetail->guarantee_varification=0;
        //     $personaldetail->fit_to_work=0;
        //     $personaldetail->diclaration=0;
        //     $personaldetail->approval=0;
        // }
        
        
	
		 
        
		 
         
		 //$personaldetail->userid=$request->id;
		 
		
		
		 
        
        $personaldetail->save();

        //Session::flash('message','Varification Saved Successfully');
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
