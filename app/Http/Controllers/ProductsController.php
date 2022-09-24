<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
 {
    //
public function index(){
    $users="hello user";
    $sss="thi is testing laravel";
    $products=array("samsung","iphone","orange","soda");
    // return view("products.products",compact('users',"sss"));
    return view("products.products")->with('products',$products);
}

public function details ($id){

return view('products.details',compact('id'));
}

}
