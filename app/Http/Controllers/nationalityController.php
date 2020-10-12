<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nationality;
use Illuminate\Support\Facades\Session;
class nationalityController extends Controller
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
        $nationalities=Nationality::all()->sortByDesc('id');
        //return response()->json($nationalities);
        return view('admin.setup.nationalities.list',compact('nationalities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Creating an automatic code for new location
        $codeArray=Nationality::select('code')->orderBy('id','desc')->limit(1)->get();
       
        $code_value='';

       
       
        //To check wether there is any location created or not 
        if(count($codeArray)<=0){
            $code_value="N001";
        }else{
            $code= $codeArray[0]->code;
            $last_digit=substr($code,3,strlen($code)); 
            $code_value= 'N00'.(string)($last_digit+1);
        }

      

        return view('admin.setup.nationalities.create',compact('code_value'));
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
            'code'=>'required',
            'nationality'=>'required'
            ]);



        $nationality=new Nationality;
        
       
        

       $nationality->code=$request->code;
       $nationality->nationality=$request->nationality;
        
       $nationality->save();

        Session::flash('message',__('messages.create_message'));

        return redirect('/nationality');
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
        $nationality=Nationality::find($id);
        return view("admin.setup.nationalities.edit",compact('nationality'));
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
            'nationality'=>'required'
            ]);



        $nationality=Nationality::find($id);
        
       
        

       $nationality->code=$request->code;
       $nationality->nationality=$request->nationality;
        
        $nationality->save();

        Session::flash('message',__('messages.create_message'));

        return redirect('/nationality');
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
