<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    //
    public function index(){
$FETCH=DB::select('select * from posts');
$update=DB::table('posts')->insert(["title"=>"new titlr","body"=>"this is a new body"]);
dd($update);
// print_r(json_decode(json_encode($FETCH),true));
        return view("posts.index",["fetch"=>$FETCH]);
    }
}
