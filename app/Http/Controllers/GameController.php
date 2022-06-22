<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Msgame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GameController extends Controller
{
    //home
    public function dashboard(){
        //add logic for featured games (select raw)
        $featured = Game::all();
        //add logic for Hot games (select raw)
        $hot = Game::all();
        return view('welcome', ["featured"=>$featured, "hot"=>$hot]);
    }
    //manageGame
    public function manageGame(){
        return view('manageGame');
    }

    //create + store
    public function addGame(){
        return view('addGame');
    }

    public function addProcess(Request $request){
        $validation = Validator::make($request->all(),
        [
            'title' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'thumbnail' => 'required|mimes:jpg,png,jpeg',
            //validasi slides (blm : min 3 images nya gmn )
            'slides' => 'required|mimes:jpg,png,svg,jpeg',
            'description' => 'required|min:10'
        ],[
                'required' => ':attribute wajib diisi',
                'min'     => ':attribute minimal berisi :min karakter',
                'max'     => ':attribute maksimal berisi :max karakter',
                'email'   => ':harus diisi dengan alamat email yang valid',
                'in'      => ':attribute yang dipilih tidak valid'       
        ]);

        //save ke database
        
        $games = new Game();
        $games->gameName = $request->gameName;
        $games->category_id = $request->category_id;
        $games->price = $request->price;
        $games->gameThumbnail = $request->gameThumbnail;
        $games->description = $request->description;
        $games->save();
    }
    
    //view-update + update
    public function updateGame(){
        return view('updateGame');
    }

    public function updateProcess(Request $req){

    }

    public function search(Request $req){
        $games = Game::where('gameName', 'LIKE', "%$req->keyword%")->paginate(15);
        return view('games',[
            "games" => $games,
        ]);
    }

    public function detail($id){
        $game = Game::find($id);
        return view('gameDetails', [
            "game" => $game
        ]);
    //  passing games reccomendation
    //  passing reviews
    //  passing sliders
    //  passing category ?
    }
    
    public function removeGame($id){
        
    }
}
