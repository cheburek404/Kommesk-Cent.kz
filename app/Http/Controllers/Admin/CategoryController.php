<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    public function index(){
        return view('admin.category.index');
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
}
