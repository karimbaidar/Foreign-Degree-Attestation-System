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
class ReportsController extends Controller
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
	

     return view('admin.reports.timebasedreport.timebase',compact('doctor_lists','activityLogFile'));
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
		

	
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
       
 
 
         

		
	
         
     
     return redirect('/');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
