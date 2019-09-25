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
    // return view('welcome');
    echo "selamat datang karin";
});

Route::get('/satu', function () {
    // return view('welcome');
    echo "one";
});

Route::get('/dua', function () {
    // return view('welcome');
    echo "two";
});Route::get('/dua', function () {
    // return view('welcome');
    echo "two";
});

Route::get('/tiga', function () {
    // return view('welcome');
    echo "three";
});

Route::get('/empat', function () {
    // return view('welcome');
    echo "four";
});

Route::get('/lima', function () {
    // return view('welcome');
    echo "five";
});

Route::get('/enam', function () {
    // return view('welcome');
    echo "six";
});

Route::get('/tujuh', function () {
    // return view('welcome');
    echo "seven";
});

Route::get('/delapan', function () {
    // return view('welcome');
    echo "eight";
});

Route::get('/sembilan', function () {
    // return view('welcome');
    echo "nine";
});

Route::get('/sepuluh', function () {
    // return view('welcome');
    echo "ten";
});

// 1. echo langsung nested
Route::get('/sepuluh', function () {
    // return view('welcome');
    echo "ten";
});



// memanggil controller
Route::get('/usang','usang@index');
/* file controllernya namanya UsangController
  nama url usang
  index nama functionnya
*/
Route::get('/jeruk','usang@godog');

Route::get('/terong','kentang@sandal');

//2. memanggil view
Route::get('/template', function () {
    return view('template');
});

//Route::get('/','kontrak@index');

Route::get('/CleaningService', 'cleaning@tables');

Route::resource('/kontak', 'Kontak');

Route::get('/', function(){
    return view('index');
  });
  Route::get('login','Login@index');
  Route::post('login/cek','Login@cek');
  Route::get('/logout','login@logout');
  Route::get('/dash','Dashboard@index');

Route::resource('/kabupaten', 'Kabupaten');

Route::resource('/penjualan', 'Penjualan');

Route::resource('/barang', 'Barang');

Route::resource('/pembelian', 'Pembelian');
