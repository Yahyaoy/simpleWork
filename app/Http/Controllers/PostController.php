<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Post;
class PostController extends Controller
{
    public function show($slug){
//        $post = DB::table('post')->where('slug',$slug)->first();
        $post = Post::where('slug',$slug)->firstOrFail();
//        if(!$post){
//            abort(404);
//        }
        return view('post',['p' => $post]);
}








//    public function show($slug){
//        $pname = \DB::table('post')->where('slug',$slug)->first();
////        dd($pname->body);
//
////        $posts = [
////        'yahya'=>'yahya khalid',
////        'mutaz'=>'mutaz saleh'
////    ];
////    if(!array_key_exists($pname,$posts)){
////        abort(404,"Sorry, the post is not found..");
////    }
//        return view('post', ['pname' => $pname]);
////return view('post', ['pname' => $posts[$pname]]);
//}
}

