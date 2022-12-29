<?php



namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    

    private static $dataBlog = [
        ["title" => "Ini Daffa Dari Model",
        "slug" => "postinganPertama",
        "author" => "Dafa",
        "desc" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod consequatur cumque iste maiores et, tempore mollitia error aperiam asperiores doloribus quidem dolorem, esse laborum recusandae velit dolore explicabo similique quo?"
    ],
        [
        "title" => "Kei Ini dari model",
        "slug" => "postinganKedua",
        "author" => "EL",
        "desc" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod consequatur cumque iste maiores et, tempore mollitia error aperiam asperiores doloribus quidem dolorem, esse laborum recusandae velit dolore explicabo similique quo?"
        ],
    ];



    public static function all(){

        return collect(static::$dataBlog);
        // $data = static::$dataBlog;

        // return $data;

    }

    // kalau :: di isiin di controller dan diisi langsung ke variabel gabisa 
    // cuman pake variabel. Ini hanya berfungsi de fungsi model.

    public static function find($slug){

        $allData = static::all();

        return $allData->firstWhere('slug', $slug);
    }

    
    // public static function find($slug){

    //     $dataTulis = self::$dataBlog;

    //         $detail = [];

    //     foreach($dataTulis as $data){
    //         if($data["slug"] === $slug){
    //             $detail = $data;
    //             // ini berarti ngerubah di $detail dengan 1 data yang uda diseleksi
    //             // if
    //         } 
        
    //     }
    //     return $detail;
    // }

        // ini tidak menggunakan collection
}
