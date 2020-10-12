<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\EducationQualification;
use App\Nationality;
use App\User;
use Auth;
use Hash;
use App\University;
use App\Profession;
use DB;
use App\PersonalDetail;
use App\ProvisionalQualification;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['locale','auth']);
		$this->middleware(['revalidate','auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




        $notification = PersonalDetail::select('rejection')->where('userid',Auth::user()->id)->get();
		
		$notification1 = PersonalDetail::select('nondocument')->where('userid',Auth::user()->id)->get();
			$notification3 = PersonalDetail::select('nondocumentflag')->where('userid',Auth::user()->id)->get();
		
        
		$note=null;
		
		$note1=null;
       
	    for($i=0;$i<count($notification);$i++){
            if($i==0){
                 $note=$notification[$i];
                 $note=$notification[$i];
            }else{
                 $note=$notification[$i];
            }
           
        }
		
		for($i=0;$i<count($notification1);$i++){
            if($i==0){
                 $note1=$notification1[$i];
                 $note1=$notification1[$i];
            }else{
                 $note1=$notification1[$i];
            }
           
        }

        $note3=null;
		
		
       
	    for($i=0;$i<count($notification3);$i++){
            if($i==0){
                 $note3=$notification3[$i];
                 $note3=$notification3[$i];
            }else{
                 $note3=$notification3[$i];
            }
           
        }








        
        $total_doctors=PersonalDetail::select('id')->count();
        $total_doctors1 = PersonalDetail::all();
		
		$total_unis=University::select('id')->count();
       
        $total_users=User::select('id')->count();
		
		//$qualification = EducationQualification::all();
		

       // $total_mbbs=DB::table('generals')->where('medical_degree','MBBS')->count();
		
		$total_afgnationality=DB::table('nationality')->where('nationality','Afghan')->count();
		//$total_surgent=DB::table('professions')->where('profession','Surgent')->count();

       // $total_md=DB::table('generals')->where('medical_degree','MD')->count();
        //$total_full_registered=DB::table('generals')->where('flag','Full Registration')->count();
        //$total_post_graduate_doctor=DB::table('generals')->where('flag','Post Graduate Registration')->count();
       // $total_non_practitioner_doctor=DB::table('generals')->where('flag','Non Practitioner Registration')->count();
       // $total_provisional_doctor=DB::table('generals')->where('flag','Provisional Qulification')->count();
		
	
		$useridnotification = PersonalDetail::where('userid',Auth::user()->id)->get();
		
		$registred_doctor1=null;


        for($i=0;$i<count($useridnotification);$i++){
            if($i==0){
                 $registred_doctor1=$useridnotification[$i];
                 $registred_doctor1[$i]=$useridnotification[$i];
            }else{
                 $registred_doctor1[$i]=$useridnotification[$i];
            }
           
        }
		
		 // $notifications = PersonalDetail::where('status','Approved')->get();
        // $total_notifications = PersonalDetail::where('status','Approved')->count();
       
       
	   $total_rejected=DB::table('personal_details')->where('rejectionFlag','1')->count();
	   
	   $total_approved=DB::table('personal_details')->where('status','Approved')->count();
	   $total_pending=DB::table('personal_details')->where('status','Pending')->count();
	   
      // return response()->json($total_unis);
        return view('home',compact('total_doctors','total_doctors1','total_users','total_unis','registred_doctor1','total_rejected','total_approved','total_pending','note','note1','note3'));
        
    }
	
	
	public function chart()
      {
		
		$total_rejected=DB::table('personal_details')->where('rejectionFlag','1')->count();
	   
	    $total_approved=DB::table('personal_details')->where('status','Approved')->count();
	    $total_pending=DB::table('personal_details')->where('status','Pending')->count();
	   

	   return view('home',compact('total_rejected','total_approved','total_pending'));
        
      }
	
	
	
    public function notification()
    {
        $notifications = PersonalDetail::where('status','Approved')->get();
        $total_notifications = PersonalDetail::where('status','Approved')->count();
        return view('admin_includes.navbar',compact('notifications','total_notifications'));
    }

	
	//change password functionality
	public function showChangePasswordForm(){
        return view('auth.changepassword');
    }
 
 public function changePassword(Request $request){
 
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
 
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
 
        $validatedData = $this->validate($request,[
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
 
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
 
      //  return redirect()->back()->with("success","Password changed successfully !");
		return redirect('/home');
 
    }
	
	

	  
	  
	
public function Pending()
    { 
        
        

        
        $registred_doctor=PersonalDetail::all();


        for($i=0;$i<count($doctor_details);$i++){
            if($i==0){
                 $registred_doctor=$doctor_details[$i];
                 $registred_doctor[$i]=$doctor_details[$i];
            }else{
                 $registred_doctor[$i]=$doctor_details[$i];
            }
           
        }

       

       

        return view('admin.setup.Pending',compact('registred_doctor'));
    }
	



  }
