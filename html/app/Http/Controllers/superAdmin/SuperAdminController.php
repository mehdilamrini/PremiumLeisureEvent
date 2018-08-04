<?php

namespace App\Http\Controllers\superAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\DispatcherAgent;
use Session;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins=User::where('role','Admin')->get();
        return view('superAdmin.alladmins',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superAdmin.create_admin');
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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'picture' => 'required|image|mimes:jpg,jpeg,png|max:12000|dimensions:max_width=151,max_height=71|dimensions:min_width=150,min_height=70',
            'apkfile' => 'required|max:50000',
        ]);
 
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user=new User;
        
        if(Input::file('picture')!=null)
        {
        if (Input::file('picture')->isValid()) 
        {
            $destinationPath = public_path('uploads');
            $extension = Input::file('picture')->getClientOriginalExtension();
            $fileName = uniqid().'.'.$extension;
            Input::file('picture')->move($destinationPath, $fileName);
        }
        $user->AdminLogo=$fileName;
        }
        if(Input::file('apkfile')!=null)
        {
            
        if (Input::file('apkfile')->isValid()) 
        {
            $destinationPath = public_path('uploads/apk');
            $extension = Input::file('apkfile')->getClientOriginalExtension();
            $fileName1 = uniqid().'.'.$extension;
            Input::file('apkfile')->move($destinationPath, $fileName1);
        }
        else{
            return 0;
        }
        $user->ApkLogo=$fileName1;
        }
        $user->name=$request->name;
        $user->FirstName=$request->FirstName;
        $user->LastName=$request->LastName;
        $user->email=$request->email;
        $user->Phone=$request->Phone;
        $user->Company=$request->Company;
        $user->TimeZone=$request->TimeZone;
        $user->About=$request->About;
        $user->Hobbies=$request->Hobbies;
        $user->Address=$request->Address;
        $user->role=$request->role;
        $user->TypeSchool=$request->TypeSchool;
        $user->Code=$request->Code;
        $user->password=bcrypt($request->password);
        $user->save();
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
        $user=User::find($id);
        return view('superAdmin.admin_edit',compact('user'));

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
        $user= User::find($id);
        if($user->email==$request->email){
            if($request->password==null){
        $validator = Validator::make($request->all(), [
            'picture' => 'image|mimes:jpg,jpeg,png|max:12000|dimensions:max_width=151,max_height=71|dimensions:min_width=150,min_height=70',
            'apkfile' => 'max:50000',
        ]);
        }
        else{
            $validator = Validator::make($request->all(), [
            'password' => 'string|min:6|confirmed',
            'picture' => 'image|mimes:jpg,jpeg,png|max:12000|dimensions:max_width=151,max_height=71|dimensions:min_width=150,min_height=70',
            'apkfile' => 'max:50000',
        ]);

        }
        }
        else{
            if($request->password==null){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'picture' => 'image|mimes:jpg,jpeg,png|max:12000|dimensions:max_width=151,max_height=71|dimensions:min_width=150,min_height=70',
            'apkfile' => 'max:50000',
        ]);
        }
        else{
            $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'string|min:6|confirmed',
            'picture' => 'image|mimes:jpg,jpeg,png|max:12000|dimensions:max_width=151,max_height=71|dimensions:min_width=150,min_height=70',
            'apkfile' => 'max:50000',
        ]);

        }
             
        }
 
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        $fileName = 'null';
        
    if(Input::file('picture')!=null)
    {
        if (Input::file('picture')->isValid()) 
        {
            $destinationPath = public_path('uploads');
            $extension = Input::file('picture')->getClientOriginalExtension();
            $fileName = uniqid().'.'.$extension;
            Input::file('picture')->move($destinationPath, $fileName);
        }
        $user->AdminLogo=$fileName;
    }
        
        $user->name=$request->name;
        $user->FirstName=$request->FirstName;
        $user->LastName=$request->LastName;
        $user->email=$request->email;
        $user->Phone=$request->Phone;
        $user->Company=$request->Company;
        $user->TimeZone=$request->TimeZone;
        $user->About=$request->About;
        $user->Hobbies=$request->Hobbies;
        $user->Address=$request->Address;
        if($request->password!=null){$user->password=bcrypt($request->password);}
        $user->save();
        Session::flash('status', 'Admin was successfully updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = User::find($id);
        $admin->delete();
        return $admin->id;
    }

    public function listagent($id)
    {   $x=1;
        $agents=User::where('IdAdmin',$id)->where('role','Agent')->get();
        if(count($agents)==0){
            $x=0;
        }
        return view('superAdmin.list_agent_admin',compact('agents','x'));
    }
    public function listdispatcher($id)
    {
        $x=1;

        $agents=User::where('IdAdmin',$id)->where('role','Dispatcher')->get();
        if(count($agents)==0){
            $x=2;
        }
        return view('superAdmin.list_agent_admin',compact('agents','x'));
    }

}
