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
            return back()->with(['warning' => 'This category already exists!']);
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
    
    public function updateCategory($id){
        $ctg = Category::find($id);
        return view('updateCategory', ['ctg'=>$ctg]);
    }

    public function updateProcess($id, Request $request){
        $validation = Validator::make($request->all(),[
            'category' => 'required|unique:categories,categoryName'
        ]);
        $ctg = Category::where('categoryName', $request->category)->firstOrFail();

        if($validation->fails() && $ctg->id != $id){
            return back()->with(['warning' => 'This category already exists!']);
        }
        $category = Category::find($id);
        $category->categoryName = $request->category;
        $category->save();

        return redirect('/category/manage');
    }

    public function deleteCategory($id){
        Category::destroy($id);
        return redirect()->back();
    }
    
}
