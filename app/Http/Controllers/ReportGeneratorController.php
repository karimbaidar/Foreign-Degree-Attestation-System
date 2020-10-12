<?php

namespace App\Http\Controllers;
use App\PersonalDetail;
use App\University;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Medical_Degree;
use User;

use Mail;
use DB;
use Illuminate\Support\Facades\Session;

class ReportGeneratorController extends Controller
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
    public function index(Request $request)
    {
		
	
		
		// This is working, but I have disabled it as I don't need validation right now.
		/*
		
		$rules = [
        
			'fromDate'    => 'required|date',
			'toDate'      => 'required|date|after:from_date',
			
			
        ];

		$customMessages = [
        'required' => 'The :attribute field can not be blank.',
		'toDate.after' => 'The -To Date- must be greater than -From Date-',
		];
		
        $this->validate($request, $rules, $customMessages);
		
		*/
		
		
		
		
		 $fromDate = $request->fromDate;
		 $toDate=$request->toDate;
		 $shamsiFromDate = $request->from_date;
		 $shamsiToDate = $request->to_date;
		
		

		$universities = $request->university;
		$edocument=$request->EDocument;
		$scholarship=$request->typeScholarship;
		$typeEdu = $request->typeEducation;
		$ELevel = $request->EducationLevel;
		$country=$request->issueingCountry;
	

		 
		//$fromDate = "2018-04-21";
		//$toDate   = "2018-04-22";

		/*$reservations = PersonalDetail::whereRaw("created_at >= ? AND created_at <= ?", 
		array($fromDate, $toDate))->get();*/
		//array($fromDate." 05:52:53", $toDate." 04:38:36")
	
		$reservationsMale = PersonalDetail::whereRaw("
		
		
		created_at >= ? AND created_at <= ? AND status = ? OR degree = ? OR issueingCountry = ?
		OR
		(shamsi >= ? AND shamsi <= ? AND status = ? AND degree = ?)
		
		
		
		", 
		
		
		
		
		array(
		
		$fromDate, $toDate , 'Approved', $ELevel, $country,
		$shamsiFromDate, $shamsiToDate , 'Approved', $ELevel
		
		))->count();
		
	
	
	
	
	
	
		$reservationsdegree = PersonalDetail::whereRaw("
		 created_at >= ? AND created_at <= ? AND status = ? AND university = ? AND issueingCountry = ? AND degree = ? 
		 OR 
		(created_at >= ? AND created_at <= ? AND status = ?  AND degree = ? OR created_at >= ? AND created_at <= ? AND status = ?  AND issueingCountry = ? 
		  OR
		shamsi >= ? AND shamsi <= ? AND status = ? AND university = ? AND issueingCountry = ? AND degree = ?
		
		
		
		
		)
		
	
		", 
		array($fromDate, $toDate, 'Approved', $universities,$country,$ELevel, 
		      $fromDate, $toDate, 'Approved', $ELevel,
			  $fromDate, $toDate, 'Approved', $country, 
			  $shamsiFromDate, $shamsiToDate, 'Approved', $universities,$country,$ELevel 
			  ))->count();
		
		
		
		$reservationsOriginal = PersonalDetail::whereRaw("
		
		created_at >= ? AND created_at <= ? AND status = ? AND EDocument = ?
		
		OR
		
		(shamsi >= ? AND shamsi <= ? AND status = ? AND EDocument = ?)
		
		", 
		
		
		array($fromDate, $toDate, 'Approved',$edocument,
		$shamsiFromDate, $shamsiToDate, 'Approved', $edocument
		
		))->count();
		
		$reservationsTemporary = PersonalDetail::whereRaw("created_at >= ? AND created_at <= ? AND status = ? AND EDocument = ?
		OR
		
		(shamsi >= ? AND shamsi <= ? AND status = ? AND EDocument = ?)
		
		", 
		array($fromDate, $toDate, 'Approved',$edocument,
		$shamsiFromDate, $shamsiToDate, 'Approved', $edocument
		
		
		))->count();
		
		$reservationsScholarship = PersonalDetail::whereRaw("created_at >= ? AND created_at <= ? AND status = ? AND typeScholarship = ?
		
		OR
		
		(shamsi >= ? AND shamsi <= ? AND status = ? AND typeScholarship = ?)
		", 
		array($fromDate, $toDate, 'Approved',$scholarship,
		$shamsiFromDate, $shamsiToDate, 'Approved', $scholarship
		
		))->count();
		
		$reservationsEduType = PersonalDetail::whereRaw("created_at >= ? AND created_at <= ? AND status = ? AND typeEducation = ?
		OR
		
		(shamsi >= ? AND shamsi <= ? AND status = ? AND typeEducation = ?)
		
		", 
		array($fromDate, $toDate, 'Approved',$typeEdu,
		$shamsiFromDate, $shamsiToDate, 'Approved', $typeEdu
		
		
		))->count();
		
		$reservationsFemale = PersonalDetail::whereRaw("created_at >= ? AND created_at <= ? AND status = ?", 
		array($fromDate, $toDate, 'Rejected',$universities, $edocument,$scholarship,$typeEdu,$ELevel))->count();
		
		$reservationsApproved = PersonalDetail::whereRaw("created_at >= ? AND created_at <= ? AND status = ?", 
		array($fromDate, $toDate, 'Pending',$universities, $edocument,$scholarship,$typeEdu,$ELevel))->count();
	
		$reservationsRejected = PersonalDetail::whereRaw("created_at >= ? AND created_at <= ? AND rejectionFlag = ?", 
		array($fromDate, $toDate, 1,$universities, $edocument,$scholarship,$typeEdu,$ELevel))->count();
	
		
	
	
		 //return view('admin.setup.ReportGenerator.list',compact('reservations'));
		 return view('admin.reports.printcertificate.certificate2',compact('reservationsMale','reservationsFemale','reservationsApproved',
		 'reservationsRejected','universities','edocument','scholarship','typeEdu','ELevel','fromDate','toDate','country','reservationsdegree','reservationsOriginal'
		 ,'reservationsTemporary','reservationsScholarship','reservationsEduType','shamsiFromDate','shamsiToDate'
		 ));
		

   
		
		
		
    }


	
	
	
	
    public function print_certificate2()
    { 
        $doctor_details=PersonalDetail::all();
        
    

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

        

        return view('admin.reports.printcertificate.certificate2',compact('registred_doctor'));
    }

	

    public function print_certificate3()
    { 
        $doctor_details=PersonalDetail::all();
        
    

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

        

        return view('admin.reports.printcertificate.certificate3',compact('registred_doctor'));
    }
	
	 public function print_certificate4()
    { 
        $doctor_details=PersonalDetail::all();
        
    

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

        

        return view('admin.reports.printcertificate.certificate4',compact('registred_doctor'));
    }
    
    
    public function print_certificate5()
    { 
       
       
        //$doctor_details=PersonalDetail::all();
        $techincal_comments = TechnicalComments::all();
        $attestation_comments = AttestationComments::all();
    

        $registred_doctor=array();
        $registred_doctor=null;


        for($i=0;$i<count($techincal_comments);$i++){
            if($i==0){
                 $registred_doctor=$techincal_comments[$i];
                 $registred_doctor[$i]=$techincal_comments[$i];
            }else{
                 $registred_doctor[$i]=$techincal_comments[$i];
            }
           
        }
        
        $registred_doctor1=array();
        $registred_doctor1=null;


        for($i=0;$i<count($attestation_comments);$i++){
            if($i==0){
                 $registred_doctor1=$attestation_comments[$i];
                 $registred_doctor1[$i]=$attestation_comments[$i];
            }else{
                 $registred_doctor1[$i]=$attestation_comments[$i];
            }
           
        }

        

        return view('admin.reports.printcertificate.certificate5',compact('registred_doctor','registred_doctor1'));
    }

	

    public function update_status()
    {
        $universities=University::all();
		$medical_degrees=Medical_Degree::all();
		 return view('admin.setup.ReportGenerator.create',compact('universities','medical_degrees'));
			
	
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
