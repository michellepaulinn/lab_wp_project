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
        $newTransaction = new Transaction();
        $newTransaction->user_id = auth()->user()->id;
        $newTransaction->date = now();
        $newTransaction->save();

        foreach($cart->cartDetails as $cd){
            $td = new TransactionDetail();
            $td->transaction_id = $newTransaction->id;
            $td->game_id = $cd->game->id;
            $td->save();
        }

        dd($newTransaction->transactionDetails);
    }
    
}
