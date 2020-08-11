<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * @param array $middleware
     */
    public function __construct()
    {
//        $this->middleware('my.auth')->only('productPage'); //->untuk contoh penggunaan middleware lewat controller
    }

    function productPage(){
        $products = Product::all();
        $auth = Auth::check();
        $current_user = Auth::user();
        if($current_user != null)
            $role = $current_user->role;
        else $role = null;
        return view('products', ['products'=>$products, 'auth' => $auth, 'role' => $role]);
    }

    function homePage(){
        $auth = Auth::check();
        $products = Product::all();
        $recommended = [];
        $indexes = [];
        for ($i=0; $i<3; $i++){
            do{
                $r = rand(0, count($products)-1);
            }while(in_array($r, $indexes));
            array_push($indexes, $r);
            array_push($recommended, $products[$r]);
        }
        $current_user = Auth::user();
        if($current_user != null)
            $role = $current_user->role;
        else $role = null;
        return view('home', ['auth' => $auth, 'recommended'=>$recommended, 'role' => $role]);
    }
}
