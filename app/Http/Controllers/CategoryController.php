<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('addCategory');
    }
    
    public function addProcess(Request $request){
        
    }
    
    public function manageCategory(){
        return view('manageCategory');
    }
    
    public function updateCategory(){
        return view('updateCategory');
    }

    public function updateProcess(Request $request){

    }
    
}
