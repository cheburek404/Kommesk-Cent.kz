<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $featured_products = Product::all();
        $category = Category::all();
        return view('user.home', compact('featured_products', 'category'));
    }

    /*public function cat(){
        $category = Category::all();
        return view('user.home', compact('category'));
    }*/
}
