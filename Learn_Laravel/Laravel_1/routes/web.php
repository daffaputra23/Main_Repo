<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\EventListener\RouterListener;

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

Route::get('/', function () {
    return view('layout.main');
});


// Route::get('/blog', function () {

//     return view('blog', [
//         "dataModel" => Post::all(),
//     ]);
// });

// Route::get('viewPost/{slug}', function ($slug){
   

//     return view('viewPost', [
//         "data" => Post::find($slug),
//     ]);


//     Route::controller('viewPost/{slug}', 'UserController');
// });

Route::get('/blog',[PostController::class, 'index']);
Route::get('/viewPost{slug}', [PostController::class, 'find']);