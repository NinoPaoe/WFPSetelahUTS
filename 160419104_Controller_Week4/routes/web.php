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

Route::get('/', function () {
    return view('mystore');
});

Route::get('wfp/{kelas?}', function($kelas = ""){
    if ($kelas == "") {
        return "Tidak ada kelas";
    }
    else if ($kelas != "C" && $kelas != "c") {
        return "Bukan kelas saya.";
    }
    else{
        return "WFP kelas ". $kelas;
    }
});

Route::view('/welcome', 'welcome');

Route::get('nino', function () {
    return "Hello WFP C";
});

Route::get('greeting', function(){
    return view ('welcome', ['name' => 'Nino']);
});

Route::get('/catalog', function(){
    return "<a href='http://localhost:8000/catalog/medicines'>medicines</a><br><br><a href='http://localhost:8000/catalog/med_equip'>medical equipment</a>";
});

Route::get('catalog/{type}', function($type){
    if ($type == "medicines") {
        return view ('product', ['folder' => 'med']);
    }
    else if ($type == "med_equip") {
        return view ('product', ['folder' => 'med_equip']);
    }
});

Route::get('catalog/medicines/{name}', function($name){
    if ($name == "antasida") {
        return view ('detailProduct', ['id' => 'med1']);
    }
    else if ($name == "lincophar") {
        return view ('detailProduct', ['id' => 'med2']);
    }
    else if ($name == "paracetamol") {
        return view ('detailProduct', ['id' => 'med3']);
    }
});

Route::get('catalog/medical_equipments/{name}', function($name){
    if ($name == "tensimeter") {
        return view ('detailProduct', ['id' => 'equip1']);
    }
    else if ($name == "thermometer") {
        return view ('detailProduct', ['id' => 'equip2']);
    }
});

Route::resource('obat', 'MedicineController');
Route::resource('kategori_obat', 'CategoryController');
Route::get('medkategori', 'MedicineController@week4')->name('medicines.week4');