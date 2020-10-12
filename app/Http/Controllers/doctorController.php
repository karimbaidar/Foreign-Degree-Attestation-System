<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalDetail;
use App\ProvisionalQualification;

class doctorController extends Controller
{
	
	
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $doctor_lists=PersonalDetail::all();
       
        return view('admin.setup.doctors.list',compact('doctor_lists'));
    }


    public function doctor_details($reg_no){
        //$doctor_details=array();
        $doctor_details=PersonalDetail::where('reg_no',$reg_no)->get();
        $generals=ProvisionalQualification::where('reg_no',$reg_no)->get();
      

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

       

        return view('admin.setup.doctors.details',compact('registred_doctor','general_info'));

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
