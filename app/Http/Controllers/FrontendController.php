<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller {
    public function viewcategory($category=0){
        $lastProducts = Product::latest();
        $categories = Category::get();

        if($category){
            $lastProducts->where('category',$category);
        }
        return view('user.home',[
            'featured_products'=>$lastProducts->get(),
            'category'=>$categories
        ]);
    }

    public function productview($id){
        $product = Product::find($id);
        return view('user/show', compact('product'));
    }

    public function orderproduct($id){
        $product = Product::find($id);
        $order = Order::all();
        return view('user/order', compact('product', 'order'));
    }
}
