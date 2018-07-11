<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\AgentType;
use App\DispatchRoom;
use App\DispatcherAgent;
use Session;
use phpseclib\Net\SSH2;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recording_command($id){

        $cmd0= "cd /var/www/RecordingSDK/samples/cpp";
        $room1="police_"+$id+"1";
        $room2="police_"+$id+"2";
        $room3="police_"+$id+"3";
        //$cmd11 = "nohup ./recorder_local --appId c7adb7f97a594d9fac501654c7bf281c --uid 0 --channel police_3_3 --appliteDir /var/www/html/RecordingSDK/bin --recordFileRootDir /var/www/html/PanicRecordings  &";
        $cmd11 = "nohup ./recorder_local --appId c7adb7f97a594d9fac501654c7bf281c --uid 0 --channel "+$room1+" --appliteDir /var/www/html/RecordingSDK/bin --recordFileRootDir /var/www/panic2.greenvoo.us/html/public/Records  &> /var/www/nohup1.out&";
        $cmd12 = "nohup ./recorder_local --appId c7adb7f97a594d9fac501654c7bf281c --uid 0 --channel "+$room2+" --appliteDir /var/www/html/RecordingSDK/bin --recordFileRootDir /var/www/panic2.greenvoo.us/html/public/Records  &> /var/www/nohup2.out&";
        $cmd13 = "nohup ./recorder_local --appId c7adb7f97a594d9fac501654c7bf281c --uid 0 --channel "+$room3+" --appliteDir /var/www/html/RecordingSDK/bin --recordFileRootDir /var/www/panic2.greenvoo.us/html/public/Records  &> /var/www/nohup3.out&";
        $cmd2="echo $! >/var/www/html/pid.file";

    $script1= $cmd0 . PHP_EOL
        . $cmd11 .PHP_EOL
        . $cmd2 ;

        $script2= $cmd0 . PHP_EOL
        . $cmd12 .PHP_EOL
        . $cmd2 ;
        $script3= $cmd0 . PHP_EOL
        . $cmd13 .PHP_EOL
        . $cmd2 ;




    $ssh = new SSH2('127.0.0.1');

        if (!$ssh->login('root', '7vjO074Nha')) {
            exit('Login Failed');
        } else{


            $ssh->exec($script1);
            $ssh->exec($script2);
            $ssh->exec($script3);

        }


    }
    public function index()
    {
        $typeAgent=AgentType::all();
        return view('admin.profil_create',compact('typeAgent'));
    }
    public function indexDispatcher()
    {
        return view('admin.profil_create_dispatcher');
    }

    public function indexProfil()
    {
        $user=User::find(Auth::id());
        $dispatcher=DispatcherAgent::where('idAgent','=',Auth::id())->first();
        return view('admin.profil',compact('user','dispatcher'));
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

    
    
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'picture' => 'image|mimes:jpg,jpeg,png|max:12000',
            
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
        $user->picture=$fileName;
        }
        $user->name=$request->name;
        $user->FirstName=$request->FirstName;
        $user->LastName=$request->LastName;
        $user->email=$request->email;
        $user->Phone=$request->Phone;
        $user->Company=Auth::user()->Company;
        $user->TimeZone=$request->TimeZone;
        $user->About=$request->About;
        $user->Hobbies=$request->Hobbies;
        $user->Address=$request->Address;
        $user->role=$request->role;
        $user->IdTypeAgent=$request->IdTypeAgent;
        $user->DispatcherType=$request->DispatcherType;
        $user->password=bcrypt($request->password);
        $user->IdAdmin=Auth::user()->id;
        $user->save();
        if($user->role=="Dispatcher"){
        for($i=1;$i<4;$i++){
            $dispatchroom= new DispatchRoom;
            $dispatchroom->id_dispatcher=$user->id;
            $dispatchroom->room=$i;
            $dispatchroom->save();
        }
        //
        $idd=$user->id;
        $id=(string)$idd;
            $cmd0= "cd /var/www/RecordingSDK/samples/cpp";
        $room1="police_".$id."_1";
        $room2="police_".$id."_2";
        $room3="police_".$id."_3";

        /*/recorder_local --appId c7adb7f97a594d9fac501654c7bf281c --uid 0 --channel police_47_1 --appliteDir /var/www/RecordingSDK/bin  --recordFileRootDir /var/www/panic2.greenvoo.us/html/public/Records*/
        //$cmd11 = "nohup ./recorder_local --appId c7adb7f97a594d9fac501654c7bf281c --uid 0 --channel police_3_3 --appliteDir /var/www/html/RecordingSDK/bin --recordFileRootDir /var/www/html/PanicRecordings  &";
        $cmd11 = "nohup ./recorder_local --appId c7adb7f97a594d9fac501654c7bf281c --uid 0 --channel ".$room1." --appliteDir /var/www/RecordingSDK/bin  --recordFileRootDir /var/www/panic2.greenvoo.us/html/public/Records  &";
        $cmd12 = "nohup ./recorder_local --appId c7adb7f97a594d9fac501654c7bf281c --uid 0 --channel ".$room2." --appliteDir /var/www/RecordingSDK/bin  --recordFileRootDir /var/www/panic2.greenvoo.us/html/public/Records  &";
        $cmd13 = "nohup ./recorder_local --appId c7adb7f97a594d9fac501654c7bf281c --uid 0 --channel ".$room3." --appliteDir /var/www/RecordingSDK/bin  --recordFileRootDir /var/www/panic2.greenvoo.us/html/public/Records  &";
        $cmd2="echo $! >/var/www/html/pid.file";

    $script1= $cmd0 . PHP_EOL
        . $cmd11 .PHP_EOL
        . $cmd2 ;

        $script2= $cmd0 . PHP_EOL
        . $cmd12 .PHP_EOL
        . $cmd2 ;
        $script3= $cmd0 . PHP_EOL
        . $cmd13 .PHP_EOL
        . $cmd2 ;




    $ssh = new SSH2('127.0.0.1');

        if (!$ssh->login('root', '7vjO074Nha')) {
            exit('Login Failed');
        } else{


            $ssh->exec($script1);
            $ssh->exec($script2);
            $ssh->exec($script3);

        }




        //
    }
        Session::flash('status', 'Profil was successfully created');
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
       return view('admin.profil_edit',compact('user'));
    }

    public function showYourProfil()
    {
       $id=Auth::id();
       $user=User::find($id);
       return view('admin.profil_edit',compact('user'));
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
            'picture' => 'image|mimes:jpg,jpeg,png|max:12000',
        ]);
        }
        else{
            $validator = Validator::make($request->all(), [
            'password' => 'string|min:6|confirmed',
            'picture' => 'image|mimes:jpg,jpeg,png|max:12000',
        ]);

        }
        }
        else{
            if($request->password==null){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'picture' => 'image|mimes:jpg,jpeg,png|max:12000',
        ]);
        }
        else{
            $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'string|min:6|confirmed',
            'picture' => 'image|mimes:jpg,jpeg,png|max:12000',
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
        $user->picture=$fileName;
    }
        
        $user->name=$request->name;
        $user->FirstName=$request->FirstName;
        $user->LastName=$request->LastName;
        $user->email=$request->email;
        $user->Phone=$request->Phone;
        $user->TimeZone=$request->TimeZone;
        $user->About=$request->About;
        $user->Hobbies=$request->Hobbies;
        $user->Address=$request->Address;
        if($request->password!=null){$user->password=bcrypt($request->password);}
        $user->save();
        Session::flash('status', 'Profil was successfully updated');
        return redirect()->back();
      
    }

public function updateYourProfil(Request $request)
    {

        $id=Auth::id();
        
        $fileName = 'null';
        $user= User::find($id);
        if($user->email==$request->email){
        $validator = Validator::make($request->all(), [
            'picture' => 'image|mimes:jpg,jpeg,png|max:12000',
        ]);
        }
        else{
             $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'picture' => 'image|mimes:jpg,jpeg,png|max:12000',
        ]);
        }
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    if(Input::file('picture')!=null)
    {
        if (Input::file('picture')->isValid()) 
        {
            $destinationPath = public_path('uploads');
            $extension = Input::file('picture')->getClientOriginalExtension();
            $fileName = uniqid().'.'.$extension;
            Input::file('picture')->move($destinationPath, $fileName);
        }
        $user->picture=$fileName;
    }
        
        $user->name=$request->name;
        $user->FirstName=$request->FirstName;
        $user->LastName=$request->LastName;
        $user->email=$request->email;
        $user->Phone=$request->Phone;
        $user->TimeZone=$request->TimeZone;
        $user->About=$request->About;
        $user->Hobbies=$request->Hobbies;
        $user->Address=$request->Address;
        if($request->password!=null){$user->password=bcrypt($request->password);}
        $user->save();
        Session::flash('status', 'Profil was successfully updated');
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
       $user = User::find($id);
        $useraffect= DispatcherAgent::where('idAgent','=',$id);
        $user->delete();
        $useraffect->delete();
        return $user->id;
    }
    
}
