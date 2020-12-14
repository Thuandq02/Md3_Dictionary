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

//Route::get('/', function () {
//    return view('test');
//});

Route::get('/dictionary', function () {
    return view('dictionary');
});

Route::post('/dictionary', function (Illuminate\Http\Request $request) {
        $dictionary = [
            "hello" => "xin chao",
            "what" => "cái gì",
            "book" => "sách",
            "pen" => "bút"
        ];
        $searh = $request->input('search');
        $flag = 0;
        foreach ($dictionary as $key => $dictionarys){
            if ($key == $searh){
                echo "From: ".$key."<br>"."Meaning of words: ".$dictionarys;
                echo "<br>";
                $flag = 1;
            }
        }
        if ($flag == 0){
            echo "Did not find the words to look up.";
        }
        return view('dictionary');
});
