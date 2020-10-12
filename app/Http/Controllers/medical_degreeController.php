<?php

namespace App\Http\Controllers;

use App\Medical_Degree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class medical_degreeController extends Controller
{
    /*
    public function __construct()
    {
    $this->middleware(['locale','auth']);
    $this->middleware(['revalidate','auth']);
    }
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medical_degrees = Medical_Degree::all();
        //return response()->json($medical_degrees);
        return view('admin.setup.medical_degree.list',compact('medical_degrees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Creating an automatic code for new location
        $codeArray = Medical_Degree::select('code')->orderBy('id', 'desc')->limit(1)->get();

        $code_value = '';

        //To check wether there is any location created or not
        if (count($codeArray) <= 0) {
            $code_value = "M001";
        } else {
            $code = $codeArray[0]->code;
            $last_digit = substr($code, 3, strlen($code));
            $code_value = 'M00' . (string) ($last_digit + 1);
        }

        return view('admin.setup.medical_degree.create', compact('code_value'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required',
            'degree' => 'required',
        ]);

        $medical_degree = new Medical_Degree;

        $medical_degree->code = $request->code;
        $medical_degree->degree = $request->degree;

        $medical_degree->save();

        Session::flash('message', __('messages.create_message'));

        return redirect('/medical_degree');
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
        $medical_degree = Medical_Degree::find($id);
        return view("admin.setup.medical_degree.edit", compact('medical_degree'));
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
        $this->validate($request, [
            'code' => 'required',
            'degree' => 'required',
        ]);

        $medical_degree = Medical_Degree::find($id);

        $medical_degree->code = $request->code;
        $medical_degree->degree = $request->degree;

        $medical_degree->save();

        Session::flash('message', __('messages.create_message'));

        return redirect('/medical_degree');
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
