<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
            'email' => 'required|email|unique', //unique: //tanya cecenya unique apaan 
            'password' => 'required|min:8',
            'password2' => 'required_with:password|same:password' //pass samainnya bener kek gini 
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
        $newMember->password = $request->password;
        $newMember->save();

        return redirect(); // ke home
    }

    public function login(){
        return view('login');
    }

    public function loginProcess(Request $request){
        $validation = Validator::make($request->all(),
        [
            'email' => 'required|email', 
            'password' => 'required|min:8'
        ]
        );
        //validasiin ke database
        $membData = User::where('email', $request->email)->first(); //data di db
        //kalau gaada
        if($membData->fails()) { // ga tau null di sini tulis apa 
            //gada akunnya
            //kasih alert -> "You don't have an account yet, register now !
        }
        elseif ($membData['password'] != $request->password){
            //incorrect password
        }
        else{ // berhasil login
            // return view('dashboard')->with();
        }
    }
}
