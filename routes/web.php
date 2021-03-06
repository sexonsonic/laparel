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

    Route::get('data-musik',function(){
        $post = App\Music::all()->take(3);
        return $post;
    });

    Route::get('data-musik/select',function(){
        $post = App\Music::select('kode_lagu','judul_lagu','penyanyi')->first();
        return $post;
    });

    Route::get('data-musik/tambah/{kode_lagu}/{judul_lagu}/{penyanyi}/{penulis}/{album}/{genre}/{tgl_rilis}',
    function($kode_lagu, $judul_lagu, $penyanyi, $penulis, $album, $genre, $tgl_rilis){
        $post = new App\Music;
        $post->kode_lagu = $kode_lagu;
        $post->judul_lagu = $judul_lagu;
        $post->penyanyi = $penyanyi;
        $post->penulis = $penulis;
        $post->album = $album;
        $post->genre = $genre;
        $post->tgl_rilis = $tgl_rilis;
        $post->save();
        return $post;
    });

    Route::get('tambah/{a?}/{b?}','LatihanController@tambah');
    Route::get('kurang/{a?}/{b?}','LatihanController@kurang');
    Route::get('bagi/{a?}/{b?}','LatihanController@bagi');
    Route::get('kali/{a?}/{b?}','LatihanController@kali');

    Route::get('data-1','LatihanController@loop');
    Route::get('data-gaji','LatihanController@gaji');

    // ROUTE DARI TABUNGAN
    Route::get('tabungan','TabunganController@index');
    Route::get('tabungan/{id}','TabunganController@show');
    Route::get('tabungan-tambah/{nis}/{nama}/{kelas}/{jml}','TabunganController@store');
    Route::get('tabungan-edit/{id}/{nis}/{nama}/{kelas}/{jml}','TabunganController@update');
    Route::get('tabungan-delete/{id}','TabunganController@delete');

    // ROUTE DARI COSTUMER
    Route::get('costumer','CostumerController@index');
    Route::get('costumer/{id}','CostumerController@show');
    Route::get('costumer-tambah/{code_costumer}/{name}/{email}/{country}/{city}/{address}/{contact_number}','CostumerController@store');
    Route::get('costumer-edit/{id}/{code_costumer}/{name}/{email}/{country}/{city}/{address}/{contact_number}','CostumerController@update');
    Route::get('costumer-delete/{id}','CostumerController@delete');

    // Passing Data Practice
    Route::get('pass','PracticeController@pass');
    Route::get('pass1','PracticeController@pass1');
    Route::get('pass-tabungan','PracticeController@pass2');
    Route::get('pass-tabungan1/{id?}','PracticeController@pass3');

    // Passing Data Film
    Route::get('film-semua','FilmController@iya');
    Route::get('film-satu/{id?}','FilmController@iyaiya');

