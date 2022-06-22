<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart(Request $req){

    }
    public function cart(){
        $games = Game::all();
        return view('cart', ['games'=>$games]);
    }
    public function remove(Request $req){
        
    }
}
