<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class   ProductController extends Controller {
    public function index(){
        $product = Product::all();
        $category = Category::all();
        $order = Order::all();
        return view('admin.product.index', compact('product', 'category','order'));
    }

    public function add(){
        $category = Category::all();
        return view('admin.product.create', compact('category'));
    }

    public function insert(Request $request) {
        $product = new Product();
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/product/', $filename);
            $product->image = $filename;
        }

        $product->title = $request->input('title');
        $product->subtitle = $request->input('subtitle');
        $product->pre_description = $request->input('pre_description');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        $product->description = $request->input('description');
        $product->save();

        return redirect('products')->with('status', "Product added successfully!");
    }

    public function edit($id){
        $product = Product::find($id);
        $category = Category::all();
        return view('admin.product.edit', compact('product', 'category'));
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/product/'.$product->image;
            if (Storage::exists($path)) {
                Storage::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/product/', $filename);
            $product->image = $filename;
        }
        $product->title = $request->input('title');
        $product->subtitle = $request->input('subtitle');
        $product->pre_description = $request->input('pre_description');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->update();

        return redirect('products')->with('status', "Product updated successfully!");
    }

    public function destroy($id){
        $product = Product::find($id);
        $path = 'assets/uploads/product/'.$product->image;
        if (Storage::exists($path)){
            Storage::delete($path);
        }
        $product->delete();
        return redirect('products')->with('status', "Product deleted successfully!");
    }

    public function show($id){
        $product = Product::find($id);
        return view('admin.product.show', compact('product'));
    }
}
