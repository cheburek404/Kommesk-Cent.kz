<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller {
    public function index(){
        $products_count = Product::all()->count();
        $categories_count = Category::all()->count();
        $users_count = User::all()->count();
        return view('admin.home', compact('products_count', 'categories_count','users_count'));
    }

    public function indexForAccess(){
        $users = User::paginate(5);
        return view('admin.access.index', compact('users'));
    }

    public function searchByEmail(Request $request){
        $search = $request->search;

        $users = User::query()->where('email', 'LIKE', "%{$search}%")->get();

        return view('admin.access.search', compact('users'));
    }

    public function giveAccessForAdmin($id){
        $user = User::find($id);
        return view('admin.access.giveAccess', compact('user'));
    }

    public function changeRole(Request $request, $id){
        $user = User::find($id);
        $user->role_as = $request->input('role_as');
        $user->update();

        return redirect('access')->with('status', 'Role changed successfully!');
    }

}
