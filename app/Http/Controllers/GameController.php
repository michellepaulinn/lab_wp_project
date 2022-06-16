<?php

namespace App\Http\Controllers;

use App\Models\Msgame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GameController extends Controller
{
       
    //create + store
    public function create(){
        return view('insert');
    }
    public function store(Request $request){
        $validation = Validator::make($request->all(),
        [
            'title' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'thumbnail' => 'required|mimes:jpg,png,jpeg',
            //validasi slides (blm : min 3 images nya gmn )
            'slides' => 'required|mimes:jpg,png,svg,jpeg',
            'description' => 'required|min:10'
        ]
        );
        //save ke database
    }
    //view-update + update
    public function viewUpdate(){
        
    }
    public function update(){

    }
    public function search(Request $req){
        $games = Msgame::where('gameName', 'LIKE', "%$req->keyword%")->paginate(15);
        return view('games',[
            "games" => $games,
        ]);
    }

    public function detail($id ){
        $game = Msgame::find($id);
        return view('gameDetails', [
            "game" => $game
        ]);
    //  passing games reccomendation
    //  passing reviews
    //  passing sliders
    //  passing category ?
    }
    
    // $albums = Album::where('name', 'LIKE', "%$req->keyword%")->paginate(4);
    // // $albums = Album::where('name', 'LIKE', "%$req->keyword%")->simplePaginate(5);
    // return view('albums', [
    //     "albums" => $albums,
    // ]);
}
