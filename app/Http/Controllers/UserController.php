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
        //hash passwordnya

        // $newMember->password = Hash::make($request->password);
        $newMember->password = bcrypt($request->password);
        // $newMember->password = $request->password;
        $newMember->save();

        return redirect('/'); // ke home
    }

    public function login(){
        return view('login');
    }

    // public function loginProcess(Request $request){
    //     $validation = Validator::make($request->all(),
    //     [
    //         'email' => 'required|email', 
    //         'password' => 'required|min:8'
    //     ]
    //     );
    //     if($validation->fails()){
    //         return redirect()->back()->withErrors($validation);
    //     }
    //     //validasiin ke database
    //     $membData = User::where('email', $request->email)->first(); //data di db
    //     //kalau gaada
    //     if(! $membData) { // ga tau null di sini tulis apa 
    //         return redirect()->back()->withErrors("You don't have an account yet");
    //     }
    //     else{
    //         // $pass = Hash::make($request->password);
    //         $pass = $request->password;
    //         if (! Hash::check($pass, $membData->password)){
    //             return redirect()->back()->withErrors('Password Mismatch');
    //         }
    //         else{ 
    //             return redirect('/');
    //         }
    //     }
        
    // }

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
    

}
