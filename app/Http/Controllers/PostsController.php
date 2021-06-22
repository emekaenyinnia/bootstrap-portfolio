<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PostsController extends Controller
{
 
    public function index(){

$id = 89;
     $posts = DB::table('posts')->where('id', $id)->delete();
       dd($posts);

    //    $from = DB::table('posts')->where('id', ' = ',  2)->delete();
    //        dd($from);
        // return view('posts/index')->with('posts', $posts) ;
    }
}
