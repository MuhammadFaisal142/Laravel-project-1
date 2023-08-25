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

// Route::get('/welcome', function () {
//     return view('welcome');
// }); 

// Route::get('/post', function () {
// return "<h1>HELLO FASISAL</h1>" ;  
// });

// Route::view('post', '/post');  

// Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null,string $commentid = null) {
// // return  view('post'); 
// if($id){
//     return "<h1>Post Id : ". $id . "</h1>" ."<h2>comment Id : ". $commentid. "</h2>";
// }else{

// }
// return "<h1>Post Id Not Found</h1>" ; 
// });

// Route::get('/post/{id}', function (string $id) {
//     // return  view('post'); 
//     if($id){
//         return "<h1>Post Id : ". $id . "</h1>";
//     }else{
    
//     }
//     return "<h1>Post Id Not Found</h1>" ; 
//     })->whereAlphaNumeric('id');//->whereAlpha('id');//>whereNumber('id');


// Route::prefix('page')->group(function(){
    Route::get('/home',function(){
        return view('welcome');
    });
    Route::get('/post',function(){
        return view('post');
    });
    Route::get('/about',function(){
        return view('about');
    });
    
    Route::get('/contectus',function(){
        return view('contect');
    });
    Route::get('/Calculate_blade',function(){
        return view('calculate');
    });
    Route::get('/masterlayout',function(){
        return view('masterlayouts');
    });
    Route::get('/test',function(){
        return view('test');
    });
    // });
    Route::fallback(function(){
        return "<h1>File Not found check URL </h1>";
    });     



// Route::get('/page/welcome',function(){
//     return view('welcome');
// });
// Route::get('/page/post',function(){
//     return view('post');
// });
// Route::get('/page/about',function(){
//     return view('about');
// });

// Route::get('/page/contectus',function(){
//     return view('contect');
// });


Route::get('/users',function(){
    $name="Faisal saith";
    return view('users',[
        'user'=> $name ,
        'city'=> "lahore",
    'area'=> '<script>alert("Hello area ")</script>' ]);

});


use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;

Route::get('/controller',function(){
    return view('welcome_controller');
});
Route::get('/controllers/{id}',[PageController::class,'show']);

Route::get('/testing',TestingController::class);