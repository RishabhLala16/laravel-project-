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
/*
Route::get('/', function () {
    
    $name = request('name');
    return $name;
    

    return view('test', [
        'name' => $name
    ]);
});

Route::get('/welcome',function(){
    return view('welcome');
});

Route::get('/',function(){
    return view('welcome');
});


 Route::get('/posts/{post}', function ($post) {

    $posts =[
        'my-first-post' => 'Hello,this is my first blog post',
        'my-second-post' => 'Hello,this is my second blog post'
    ];

    if(! array_key_exists($post, $posts)){
        abort(404,'Sorry, that post was not found.');
    }

    return view('post',[
        'post' => $posts[$post]
    ]);
});

*/

Route::get('/posts/{post}', 'PostsController@show');
