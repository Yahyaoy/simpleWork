<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('conversations','App\Http\Controllers\ConversationsController@index');
Route::get('conversations/{conversation}','App\Http\Controllers\ConversationsController@show');
\Illuminate\Support\Facades\Auth::routes();



//Route::get('/', function () {
//    return view('welcome');
//});
//Route::post('test/1',function (){
//   return 'test post request';
//});


//Route::get('/contact','App\Http\Controllers\ContactController@show');
//Route::post('/contact','App\Http\Controllers\ContactController@store');



//Route::get('/about',function (){
////    $article = App\Models\Article::take(2)->get();
//    $article = App\Models\Article::latest('id')->take(3)->get();
////    $article = App\Models\Article::all();
////    return $article;
//    return view('about',['articles'=> $article]);
//});
//Route::get('/article/{id}','App\Http\Controllers\ArticalController@show');
//
//Route::get('/yahya', function () {
//    return ['foo' => 'ahmed'];
//});
//
//Route::get('/abod', function () {
//    $name = request('name');
//    return view('build', ['name' => $name]);
//});

//Route::get('/post/{po}',function ($po){
//    $posts=['first'=> 'hello first',
//        'second'=> 'hello second']
//    ;
//    if(!array_key_exists($po,$posts)){
//        abort(404,'Sorry, that post was not found.');
//    }
//    return view('product' ,[
//        'po'=>$posts[$po]
//    ]);
//});


//Route::get('/post/{pname}',function($pname){
//    $posts = [
//        'yahya'=>'yahya khalid',
//        'mutaz'=>'mutaz saleh'
//    ];
//    if(!array_key_exists($pname,$posts)){
//        abort(404,"Sorry, the post is not found..");
//    }
//    return view('post',['pname'=>$posts[$pname]]);
//});


//Route::get('/hello/{id}','App\Http\Controllers\PostController@show');
