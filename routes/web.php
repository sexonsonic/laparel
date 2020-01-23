<?php

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
    return view('welcome');
});

Route::get('/tni/{nama?}/{bb?}/{umur?}', function ($nama=null, $bb=null, $umur=null){
    $yx = "Silahkan isi datanya terlebih dahulu";

    if (isset($nama)) {
        $yx = "<br>Nama anda ".$nama;
    } if (isset ($bb)) {
            $yx .= "<br>Berat badan anda ".$bb;
        if ($bb > 76) {
            $yx .= " : Anda harus turunkan berat badan anda";
        } else if($bb >= 65 && $bb <= 75){
            $yx .= " : Berat badan anda termasuk berat yang ideal";
        } else if ($bb >= 50 && $bb <= 65){
            $yx .= " : Anda harus menaikkan berat badan anda";
        } else if ($bb < 50){
            $yx .= " : Maaf, sepertinya anda kekurangan nutrisi";
        }

    } if (isset($umur)) {
            $yx .= "<br>Umur anda ".$umur;
        if ($umur >= 30 && $umur <= 40) {
            $yx .= " : Jabatan sebagai Perwira";
        } else if ($umur >= 40 && $umur <= 50) {
            $yx .= " : Jabatan sebagai Laksamana";
        } else if ($umur >= 50 && $umur <= 60) {
            $yx .= " : Jabatan sebagai Jenderal";
        }

    }

    return $yx;

});

    Route::get('testmodel',function(){
        $post = App\Post::all();
        return $post;
    });
