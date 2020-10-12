<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalDetail;

class notificationController extends Controller
{
	public function __construct()
    {
        $this->middleware(['locale','auth']);
		$this->middleware(['revalidate','auth']);
    }
	
    public function notification()
    {
        $notifications = PersonalDetail::where('status','Approved')->get();
        $total_notifications = PersonalDetail::where('status','Approved')->count();
        return view('admin_includes.navbar',compact('notifications','total_notifications'));
    }
}
