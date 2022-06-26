<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User; //to get all data from the database

class HomeController extends Controller
{
     public function login(){
         return view ("login");
    }
    public function registration(){
        return view ("registration");
    }
    public function registeruser(Request $request){
        $request-> validate([
            'mem_id' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|unique:users',
            'username' => 'required',
            'password' => 'required'
         ]);
        $user = new User();
        $user ->mem_id = $request ->mem_id;
        $user ->fname = $request ->fname;
        $user ->lname = $request ->lname;
        $user ->email = $request ->email;
        $user ->username = $request ->username;
        $user ->password =($request ->password);
        $user ->save(); //to save data into the Database

        if($user){
            return back()->with('success', 'You have registered successfully');
        }else{
            return back()->with('Fail', 'Something wrong');
        }
    }

    public function login_user(Request $request){
        $user = User::where('username','=',$request->username)->first();
        $user = User::where('password','=',$request->password)->first();
         if($user){
             $request -> session()->put('loginID', $user->mem_id);
             return redirect('dashboard');
         }else{
             return back()->with('Fail', 'Password do not match');
        }

    }
    public function dashboard()
    {
        return view('dashboard');
    }
    
    public function administrator(){
        $data=User::all();
        return view('administrator', compact('data')); //view all data in database
    }

}
