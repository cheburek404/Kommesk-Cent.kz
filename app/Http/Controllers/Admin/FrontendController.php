<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller {
    public function index(){
        $products_count = Product::all()->count();
        $categories_count = Category::all()->count();
        return view('admin.home', compact('products_count', 'categories_count'));
    }
}
