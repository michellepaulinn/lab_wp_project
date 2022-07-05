<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function checkOut($id, Request $req){
        $cart = Cart::find($id);

        if($cart->cartDetails->count() === 0){
            return back()->with('warning', 'You don\'t have any games yet');
        }

        foreach($cart->cartDetails as $cd){
            $trans = new Transaction();
            $trans->user_id = auth()->user()->id;
            $trans->game_id = $cd->game->id;
            $trans->purchased_at = date("Y-m-d");
            $trans->save();
            // $cd->delete();
        }
        $cart->cartDetails()->delete();

        return back()->with('alert', 'Transaction Success!');
    }
    
}
