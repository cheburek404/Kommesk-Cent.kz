<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller {
    public function index(){
        $order = Order::all();
        return view('admin.order.index', compact('order'));
    }

    public function add(){
        return view('admin.order.create');
    }

    public function insert(Request $request){
        $order = new Order();
        $order->placeholder_name = $request->input('placeholder_name');
        $order->save();

        return redirect('orders')->with('status', 'Order added successfully!');
    }
}
