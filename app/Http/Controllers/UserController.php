<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(){
        return view('register');
    }

    public function registerProcess(Request $request){
        $validation = Validator::make($request->all(),
        [
            'name' => 'required',
            'email' => 'required|email:dns|unique:users,email', //unique: //tanya cecenya unique apaan 
            'password' => 'required|min:8|confirmed',
            // 'password2' => 'required_with:password|same:password' //pass samainnya bener kek gini 
        ]
        );

        //kalau validasi gagal
        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }

        // save ke database
        $newMember = new User();
        $newMember->name = $request->name;
        $newMember->email = $request->email;
        //hash password
        $newMember->password = bcrypt($request->password);

        $newMember->role = "Member";
        $newMember->save();

        return redirect('/'); // ke home
    }

    public function login(){
        return view('login');
    }

    public function loginProcess(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->withErrors([
            'errors' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
    

}
