<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    public function index(){
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    public function add(){
        return view('admin.category.create');
    }

    public function insert(Request $request){
        $category = new Category();
        $category->name_of_category = $request->input('name_of_category');
        $category->save();

        return redirect('categories')->with('status', "Category added successfully!");
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->name_of_category = $request->input('name_of_category');
        $category->update();

        return redirect('categories')->with('status', "Category updated successfully!");
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('categories')->with('status', "Category deleted successfully!");
    }

    public function deletePopup($id){
        $category = Category::find($id);
        return view('admin.category.delete', compact('category'));
    }
}
