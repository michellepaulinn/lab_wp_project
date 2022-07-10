<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
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
        $token = $newMember->createToken('API Token')->accessToken;

        //make cart for every new member
        $member_id = $newMember->id;
        $cart = new Cart();
        $cart->user_id = $member_id;
        $cart->save();

        return response(['data' => $newMember, 'access_token' => $token], 200);
        //return redirect('/login'); // ke home
    }

    public function loginProcess(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $remember_me = $request->has('rememberMe') ? true : false;
 
        if (Auth::attempt($credentials, $remember_me)) {
            //$request->session()->regenerate();
            $token = auth()->user()->createToken('API Token')->accessToken;
            return response(['data' => auth()->user(), 'access_token' => $token], 200);
            // return redirect()->intended('/');
        }
 
        return response(['error' => 'Invalid Credentials'], 403);
        // return back()->with([
        //     'danger' => 'The provided credentials do not match our records.',
        // ]);
    }

    public function getSuccessTransaction(){ //for API
        $transactions = Transaction::where('user_id', Auth::user()->id)->get();
        return response(['data' => $transactions]);
    }
}
