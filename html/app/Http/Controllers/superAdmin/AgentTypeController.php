<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AgentType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Session;

class AgentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agenttypes=AgentType::all();
        return view('superAdmin.all_agent_type',compact('agenttypes'));
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
       $validator = Validator::make($request->all(), [
            'Name' => 'required|alpha',
            'Icon' => 'required|image|mimes:png|dimensions:min_width=50,min_height=50|dimensions:max_width=70,max_height=70',
            
        ]);
 
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $agenttype=new AgentType;

        if(Input::file('Icon')!=null)
        {
        if (Input::file('Icon')->isValid()) 
        {
            $destinationPath = public_path('uploads');
            $extension = Input::file('Icon')->getClientOriginalExtension();
            $fileName = uniqid().'.'.$extension;
            Input::file('Icon')->move($destinationPath, $fileName);
        }
        $agenttype->Icon=$fileName;
        }
        $agenttype->Name=$request->Name;
        $agenttype->save();
        Session::flash('status', 'Admin was successfully created');
        return redirect()->back();
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
        $agenttype=AgentType::find($id);
        $agenttype->delete();
        return $id;
    }
}
