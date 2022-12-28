<?php

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

Route::get('/blog', function () {
    $dataBlog =[
        ["title" => "Daffa Putra Pratam",
        "slug" => "postinganPertama",
        "author" => "Dafa",
        "desc" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod consequatur cumque iste maiores et, tempore mollitia error aperiam asperiores doloribus quidem dolorem, esse laborum recusandae velit dolore explicabo similique quo?"
    ],
        [
        "title" => "Keisha",
        "slug" => "postinganKedua",
        "author" => "EL",
        "desc" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod consequatur cumque iste maiores et, tempore mollitia error aperiam asperiores doloribus quidem dolorem, esse laborum recusandae velit dolore explicabo similique quo?"
        ],
    ];
    return view('blog',[
        "dataBlog" => $dataBlog,
    ]);
});

Route::get('viewPost/{slug}', function ($slug){
    $dataBlog =[
        ["title" => "Daffa Putra Pratam",
        "slug" => "postinganPertama",
        "author" => "Dafa",
        "desc" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod consequatur cumque iste maiores et, tempore mollitia error aperiam asperiores doloribus quidem dolorem, esse laborum recusandae velit dolore explicabo similique quo?"
    ],
        [
        "title" => "Keisha",
        "slug" => "postinganKedua",
        "author" => "EL",
        "desc" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod consequatur cumque iste maiores et, tempore mollitia error aperiam asperiores doloribus quidem dolorem, esse laborum recusandae velit dolore explicabo similique quo?"
        ],
    ];

    $detail = [];
    foreach($dataBlog as $data){
        if($data["slug"] === $slug){
            $detail = $data;
            // ini berarti ngerubah di $detail dengan 1 data yang uda diseleksi
            // if
        } 
    }

    return view('viewPost', [
        "data" => $detail
    ]);
});