<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('addCategory');
    }
    
    public function addProcess(Request $request){
        
    }
    
    public function manageCategory(){
        $category = Category::all();
        return view('manageCategory', ["category"=>$category]);
    }
    
    public function updateCategory(){
        return view('updateCategory');
    }

    public function updateProcess(Request $request){

    }
    
}
