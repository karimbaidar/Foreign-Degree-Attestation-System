<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;
use Illuminate\Support\Facades\Session;
class universityController extends Controller
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
         //$universities=University::all()->sortByDesc('id');
         $universities= University::paginate(1000);
        return view('admin.setup.university.list',compact('universities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Creating an automatic code for new location
        $codeArray=University::select('code')->orderBy('id','desc')->limit(1)->get();
       
       
      

        return view('admin.setup.university.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'code'=>'required',
            'name'=>'required',
            'type'=>'required',
			'Blacklisted'=>'required|unique:universities'
  ];

	 
		 $customMessages = [
        'required' => 'The :attribute field can not be blank.',
		'reg_no.unique' => 'This Registration Number is already available, please use different',
		];
		
        $this->validate($request, $rules, $customMessages);

        
		
		$university=new University;
        
       
        

       $university->code=$request->code;
       $university->name=$request->name;
       $university->type=$request->type;
       $university->Blacklisted=$request->Blacklisted;
       
	   $university->save();

        Session::flash('message',__('messages.create_message'));

        return redirect('/university');
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
        $university=University::find($id);
        return view("admin.setup.university.edit",compact('university'));
    
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
        $this->validate($request,[
            'code'=>'required',
            'name'=>'required',
            'type'=>'required'
            ]);



        $university=University::find($id);
        
       
        

       $university->code=$request->code;
       $university->name=$request->name;
       $university->type=$request->type;
	   $university->Blacklisted=$request->Blacklisted;
        
        $university->save();

        Session::flash('message',__('messages.create_message'));

        return redirect('/university');
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
