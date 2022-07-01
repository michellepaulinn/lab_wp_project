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

        // dd($hot);
        $featured = Game::take(5)->get();
        //add logic for Hot games (select raw)
        // $hot = Game::all();
        return view('welcome', ["featured"=>$featured, "hot"=>$hot]);
    }
}
