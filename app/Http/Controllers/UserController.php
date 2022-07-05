<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(){
        return view('register');
    }

    public function registerProcess(Request $request){
        $validation = $request->validate(
        [
            'name' => 'required',
            'email' => 'required|email:dns|unique:users,email', 
            'password' => 'required|min:8|confirmed',
        ]
        );

        //kalau validasi gagal
        // if($validation->fails()){
        //     return redirect()->back()->withErrors($validation);
        // }

        // save ke database
        $newMember = new User();
        $newMember->name = $request->name;
        $newMember->email = $request->email;
        //hash password
        $newMember->password = bcrypt($request->password);

        $newMember->role = "Member";
        $newMember->save();
        $member_id = $newMember->id;

        //make cart for every new member
        $cart = new Cart();
        $cart->user_id = $member_id;
        $cart->save();

        return redirect('/login'); // ke home
    }

    public function login(){
        return view('login');
    }

    public function loginProcess(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $remember_me = $request->has('rememberMe') ? true : false;
 
        if (Auth::attempt($credentials, $remember_me)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->with([
            'danger' => 'The provided credentials do not match our records.',
        ]);


    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
    

}
