<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EducationQualification;
use App\ProvisionalQualification;
use App\University;
use App\PersonalDetail;
use App\Medical_Degree;
class education_qualificationController extends Controller
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
        $universities=University::all();
        $medical_degrees=Medical_Degree::all();
        $codeArray=PersonalDetail::select('reg_no')->orderBy('reg_no','desc')->limit(1)->get();

         $code_value='';
         //To check wether there is any location created or not 
         if(count($codeArray)<=0){
             $code_value="R001";
         }else{
             $code_value= $codeArray[0]->reg_no;
             // $last_digit=substr($reg_no,2,strlen($reg_no)); 
             // $code_value= 'R00'.(string)($last_digit+1);
         }

        return view('admin.setup.education_qualification.create',compact('code_value','universities','medical_degrees'));
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
        $this->validate($request,[
            
			 'degree'=>'required',
             'from_date'=>'required',
             'to_date'=>'required',
             'university'=>'required',
             'contact'=>'required',
             'address'=>'required',  
             'file_name'=>'required',
            
            
            
             

         ]);


      


        $counter=0;
       
        for($i=0;$i<count($request->degree);$i++){
        
          if($request->degree[$i]==null){
              
               $counter+=1;
               if($counter>=count($request->degree)){
                   Session::flash('product_message','Please fill out the product name');
                   return redirect()->back();
               }
          }
          
          else{

            if($request->degree[$i]){

            $filename=null;
                if($request->hasFile('file_name')){
                    $filename[$i]=$request->file_name[$i]->getClientOriginalName();
                    $request->file_name[$i]->storeAs('public\documents',$filename[$i]);
                }
      

                $education_qualification=new EducationQualification;
                
                //$education_qualification->file_name[$i]=$filename;
                
                $education_qualification->reg_no=$request->reg_no;
				$education_qualification->status=$request->status;
                $education_qualification->degree=$request->degree[$i];
             
    
                // //To find unit measurement id , in order to insert it's id in orders table
                // $unit_measurement=Unit_Measurement::where('name',$request->unit_measurement[$i])->get();
    
                // $unit_measurement_id= $unit_measurement[0]->id;
    
                // $rst->unit_id=$unit_measurement_id;
                $education_qualification->from_date=$request->from_date[$i];
               
                $education_qualification->to_date=$request->to_date[$i];
                $education_qualification->university=$request->university[$i];
                $education_qualification->address=$request->address[$i];
    
                $education_qualification->contact=$request->contact[$i];
               // $education_qualification->file_name[$i]=$filename;
                $education_qualification->file_name=$filename[$i];
                
                
              
    
                $education_qualification->save();
    
               

            }


          


        
          
            
          }
        
      }

      //Session::flash('message',__('messages.product_recieve_message'));
      
     return redirect('/login');
      
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
