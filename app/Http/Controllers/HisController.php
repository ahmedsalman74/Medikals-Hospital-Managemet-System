<?php

namespace App\Http\Controllers;
use App\Models\appointment;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class HisController extends Controller
{

    public function tem(){
        return view('tem');

    }
    public function error(){
        return view('error');

    }
    public function usererror(){
        return view('usererror');

    }

    public function index(){
        return view('index');
    }


    public function doctors(){
        return view('doctors');
    }

    public function first(){
        return view('first');
    }

    public function service(){
        return view('service');
    }
    public function appcreate(){
        return view('appcreate');
    }
    public function print(){
        return view('print');
    }

    // public function login(){
    //     return view('login');

    // }

    public function checklogin(Request $request){
        //validation
        $request-> validate([

            'Email'=>'required | email ',
            'Password'=>'required ',

        ]);
        //search for email
        $email=$request->Email;
        $password=$request->Password;
        $result=DB::select('select * from users where email = ?',[$email]);
        if(!$result){
            return back()-> with('error','This e-mail is not found')->withInput();

        }
        $user=$result[0];
        //check password
        if(!Hash::check($password ,$user->password)){


            return back()->with('error','Incorrect password')->withInput();
        }


        session()->regenerate();
        session([
            'loggedIn'=>true,
            'userId'=>$user->id,
            'user'=>$user

        ]);



        if ($user->role == '1') {//1 for admin 

            return redirect('/admin');
        } else if($user->role == '0'){
        //appointment
        return redirect('/appointment');}

    }
    // public function viewregister(){
    //     return view(' register');
    // }

    public function register(request $request){
        $request-> validate([
            'name'=>'required |max:50',
            'Email' => 'required|email|unique:users',
            'Password'=>'required|min:8|unique:users',
            'phone' =>'required | min:8|max:11',
            'address'=>'required |max:70'


        ]);
              // store data base
              $name =$request ->name ;
              $email=$request->Email;
              $phone=$request->phone;
              $address=$request->address;
              $password=$request->Password;
              $passwordEnc=Hash::make($password);
              DB::insert('insert into users(name , email ,password ,phone,address) values(?, ?, ?, ?,?)',[$name ,$email, $passwordEnc,$phone, $address]);


              // make user as logged in

              $userId=DB::getPdo()->lastInsertId();
              $result=DB::select('select id, name ,email,address,role  from users where id =?',[$userId]);
              $user=null;
              if($result){
                  $user =$result[0];
              }
              if($user == null){
                return back()->with(['error' => 'Unexpected error happened during registration'])->withInput();
            }
              session([

                  'loggedIn'=>true,
                  'userId'=>$userId,
                  'user'=>$user,
                  

              ]);



          return redirect('/')//->with//(['success_message' => 'Your account was successfuly created'])
          ;
    }






    public function profile($id)
    {

        $user = User::find($id);
        $user_id=User::where('id', $id)->value('id');

        $apps=appointment::where('userid', $user_id)->orderby('id','desc')->get();


        $app_id=appointment::where('userid', $id)->value('id');


        return view('profile',compact('user','apps','app_id'));
    }




    public function store(Request $request){


        $result = DB::insert('insert into appointments(docid,userid,pname,phone,date) values(?,?,?,?,?)', [$request->DocID,$request->PID,$request->Pname,$request->phone,$request->date]);


        return redirect('/show');
}




public function logout(){
   session()->invalidate();
   return redirect('/login');
}




    public function show()
    {
        //
        $aps = appointment::get()->last();
        $doc_id=$aps->docid;
        $doc_name=Doctor:: where('id', $doc_id)->value('name');
        return view('show',compact('aps','doc_name'));
    }










    public function appointment(){


        $specialtysData['data'] = Service::orderby("name")
           ->select('id','name','price')
           ->get();


        return view('appointment')->with("specialtysData",$specialtysData);
    }


    public function getDoctors($serviceid=0){


        $docData['data'] = Doctor::orderby("name")
        ->select('id','name')
        ->where('serid',$serviceid)
        ->get();
        return response()->json($docData);


    }




    public function destroy()
    {
        appointment::get()->last()->delete();
          return redirect('appointment');
    }



    public function update($id){

        $user = user::find($id);
        return view('update',compact('user'));
    }


    public function saveupdate($id, Request $request){

        user::find($id)->update
        ([ 'name'=> $request->name,
        'phone'=> $request->phone,
        'email'=> $request->email,
        'address'=> $request->address


        ]);

        session('user')->name=$request->name;



        return redirect()->route('index', session('user')->id);


    }



}








