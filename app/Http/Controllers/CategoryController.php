<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('addCategory');
    }
    
    public function addProcess(Request $request){
        $validation = Validator::make($request->all(),[
            'category' => 'required|unique:categories,categoryName'
        ]);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }
        $newCategory = new Category();
        $newCategory->categoryName = $request->category;
        $newCategory->save();

        return redirect('/category/manage');

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

    public function deleteCategory($id){
        Category::destroy($id);
        return redirect()->back();
    }
    
}
