<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addCart(Request $req){
        $cart = Cart::where('user_id', Auth::user()->id)->first();

        $cartDetails = CartDetail::where('cart_id', $cart->id)->get();
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
        foreach($cartDetail as $cd){ 
            // dd($cd->game);
            $totalPrice = $totalPrice + $cd->game->price; 
        }

        $gameInCD = array();
        for($x = 0; $x < count($cartDetail); $x++){
            $gameInCD[$x] = $cd->game;
        }
 
        return view('cart', ["cart" => $cart, "totalPrice" => $totalPrice, "games" => $gameInCD]);
    }
    
    public function remove(Request $req){
        $cartDetail = CartDetail::where('game_id', $req->game_id)->delete();
        return $this->cart();
    }
}
