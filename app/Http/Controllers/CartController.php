<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addCart(Request $req){
        $cart = Cart::where('user_id', Auth::user()->id)->first();

        $cartDetails = CartDetail::where('cart_id', $cart->id)->get();
        $transactions = Transaction::where('user_id', Auth::user()->id)->get();

        foreach($transactions as $trans){
            if($trans->game_id == $req->game_id){
                return redirect()->back()->with(['warning' => 'You have bought this game']);
            }
        }
       
        foreach($cartDetails as $cd){
            if($cd->game_id == $req->game_id){
                return redirect()->back()->with(['warning' => 'Game has been added']);
            }
        }

        $cartDetail = new CartDetail();
        $cartDetail->cart_id = $cart->id;
        $cartDetail->game_id = $req->game_id;
        $cartDetail->save();

        return redirect()->back()->with(['alert' => 'Success add Item to cart']);
    }

    public function cart(){
        $cart = Cart::where('user_id', Auth::user()->id)->first();
        $cartDetail = CartDetail::with('game')->where('cart_id', $cart->id)->get();
        // dd($cartDetail);
        $totalPrice = 0;
        $gameInCD = array();
        $x = 0;
        foreach($cartDetail as $cd){ 
            // dd($cd->game);
            $gameInCD[$x] = $cd->game;
            $totalPrice = $totalPrice + $cd->game->price; 
            $x++;
        }
 
        return view('cart', ["cart" => $cart, "totalPrice" => $totalPrice, "games" => $gameInCD]);
    }
    
    public function remove(Request $req){
        $cartDetail = CartDetail::where('game_id', $req->game_id)->delete();
        return $this->cart();
    }
}
