<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //home
    public function dashboard(){
        $hot = Game::selectRaw('games.id, games.gameName, games.category_id, games.price, games.gameThumbnail, games.description, count(transactions.id) AS qty')
             ->join('transactions', 'transactions.game_id','=','games.id')
             ->whereRaw('purchased_at between date_sub(now(), INTERVAL 1 WEEK) and now()')
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
