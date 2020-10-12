<?php

namespace App\Http\Controllers;
use App\PersonalDetail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\ActivityLog;
use User;
use Mail;


use Illuminate\Database\Eloquent\Model;

use DB;
use Illuminate\Support\Facades\Session;




class LogsController extends Controller
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
        /*******Code Related To Logs**********/
		$activityLogFile=ActivityLog::all();
        return view('admin.setup.admin_doctor.logs',compact('activityLogFile'));



    }


     public function show_check_list($id)
    { 
       
   	    
    }
	public function show_check_list1()
    { 
       
    }

     public function send_email()
    { 
       
    }

    public function update_status()
    {
       
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
