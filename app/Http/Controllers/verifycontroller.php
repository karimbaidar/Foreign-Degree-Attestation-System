<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\User;

class verifycontroller extends Controller
{
    public function verify($token)
	
	{
		try
		{
			 User::where('token',$token)->firstOrFail()->update(['token' => null]);
		 
		}
		catch(ModelNotFoundException $e)
		{
			return response(view('error.expired'), 404);
		}
		
		 
		 
		 return redirect() -> route('home') -> with('success','Account verified');
		
	
	
	}
}
