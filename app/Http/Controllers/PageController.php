<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //home
    public function dashboard(){
        //add logic for featured games (select raw)
        // $table->string('gameName');
        //     $table->foreignId('category_id');
        //     $table->integer('price');
        //     $table->string('gameThumbnail');
        //     $table->longText('description');
        $hot = Game::selectRaw('games.id, games.gameName, games.category_id, games.price, games.gameThumbnail, games.description, count(transaction_details.transaction_id) AS qty')
             ->join('transaction_details', 'transaction_details.game_id','=','games.id')
             ->join('transactions', 'transactions.id','=','transaction_details.transaction_id')
             ->whereRaw('date between date_sub(now(), INTERVAL 1 WEEK) and now()')
             ->groupBy('games.id','games.category_id', 'games.price', 'games.gameThumbnail', 'games.description', 'games.gameName')
             ->orderBy('qty','desc')
             ->take(5)
             ->get();
        $featured = Game::selectRaw('games.id, games.gameName, games.category_id, games.price, games.gameThumbnail, games.description, count(reviews.id) AS rates')
             ->join('reviews', 'reviews.game_id','=','games.id')
             ->whereRaw('reviews.recommended = true')
             ->groupBy('games.id','games.category_id', 'games.price', 'games.gameThumbnail', 'games.description', 'games.gameName')
             ->orderBy('rates','desc')
             ->take(5)
             ->get();
        return view('welcome', ["featured"=>$featured, "hot"=>$hot]);
    }
}
