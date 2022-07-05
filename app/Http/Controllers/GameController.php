<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Game;
use App\Models\GameSlider;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class GameController extends Controller
{
    public function manageGame(){
        $games = Game::paginate(10);
        return view('manageGame',["games"=>$games]);
    }

    //create + store
    public function addGame(){
        $category = Category::all();
        return view('addGame',["category"=>$category]);
    }

    public function addProcess(Request $request){
        $validation = Validator::make($request->all(),
        [
            'title' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'thumbnail' => 'required|mimes:jpg,png,jpeg',
            'slider' => 'required|min:3',
            'slider.*'=>'mimes:jpg,png,svg,jpeg',
            'description' => 'required|min:10'
        ],[
                'required' => ':attribute must be filled',
                'slider.min' => 'slider must contains minimal 3 files',
                'min'     => ':attribute must contains minimal :min characters',
                'max'     => ':attribute must contain max :max character',
                'email'   => ':attribute must be filled with valid email address',
                'mimes'   => 'file type is not supported'       
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }
        //save ke database
        
        $thumbnail = $request->file('thumbnail');
        $thumbnailName = $thumbnail->getClientOriginalName();
        
        
        $games = new Game();
        $games->gameName = $request->title;
        $games->category_id = $request->category;
        $games->price = $request->price;
        $games->gameThumbnail = $thumbnailName;
        $games->description = $request->description;

        $request->thumbnail->move(public_path('thumbnails'), $thumbnailName);

        $games->save();
        // dd($request->slider);
        foreach($request->slider as $slide){
            // $slideImage = $slide->file('slider');
            $slideName = $slide->getClientOriginalName();
            $gameSlider = new GameSlider();
            $gameSlider->game_id = $games->id;
            $gameSlider->sliderImage = $slideName;
            $slide->move(public_path('sliders'), $slideName);
            $gameSlider->save();
        }

        return redirect('/game/manage');
    }
    
    //view-update + update
    public function updateGame($id){
        $game = Game::find($id);
        $category = Category::all();
        return view('updateGame', ['game'=>$game, 'category'=>$category]);
    }

    public function updateProcess($id, Request $request){
        $validation = Validator::make($request->all(),
        [
            'title' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'thumbnail' => 'required|mimes:jpg,png,jpeg',
            'slider' => 'required|min:3',
            'slider.*'=>'mimes:jpg,png,svg,jpeg',
            'description' => 'required|min:10'
        ],[
                'required' => ':attribute must be filled',
                'slider.min' => 'slider must contains minimal 3 files',
                'min'     => ':attribute must contains minimal :min characters',
                'max'     => ':attribute must contain max :max character',
                'email'   => ':attribute must be filled with valid email address',
                'mimes'   => 'file type is not supported'       
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }
        //save ke database
        
        $thumbnail = $request->file('thumbnail');
        $thumbnailName = $thumbnail->getClientOriginalName();
        
        
        $games = Game::findOrFail($id);
        $games->gameName = $request->title;
        $games->category_id = $request->category;
        $games->price = $request->price;
        $games->gameThumbnail = $thumbnailName;
        $games->description = $request->description;

        $request->thumbnail->move(public_path('thumbnails'), $thumbnailName);

        $games->save();
        // dd($request->slider);
        foreach($request->slider as $slide){
            // $slideImage = $slide->file('slider');
            $slideName = $slide->getClientOriginalName();
            $gameSlider = new GameSlider();
            $gameSlider->game_id = $games->id;
            $gameSlider->sliderImage = $slideName;
            $slide->move(public_path('sliders'), $slideName);
            $gameSlider->save();
        }

        return redirect('/game/manage');
    }

    

    public function search(Request $req){
        $games = Game::where('gameName', 'LIKE', "%$req->keyword%")->paginate(5);
        
        return view('games',[
            "games" => $games,
        ]);
    }

    public function detail($id){
        $game = Game::find($id);
        $morelikethis = Game::where([
            ['category_id', '=', $game->category_id],
            ['id', '!=', $id]])
            ->get()->take(3);
        $sliders = $game->gameSliders;
        $review = $game->reviews;
        $pos = $review->where('recommended', true)->count();
        $neg = $review->where('recommended', false)->count();
        // dd($sliders);
        return view('gameDetails', [
            "game" => $game,
            "gameSliders" => $sliders,
            "reviews" => $review,
            "more" =>$morelikethis,
            "pos" => $pos,
            "neg" => $neg
        ]);
    }
    
    public function removeGame($id){
        $rem= Game::find($id)->delete();
        return redirect('/game/manage');
    }
}
