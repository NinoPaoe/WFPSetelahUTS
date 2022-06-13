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

// Route::get('/', function () {
//     return view('mystore');
// });

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('/', 'MedicineController@front_index');

    Route::resource('obat', 'MedicineController');
    Route::resource('kategori_obat', 'CategoryController');
    Route::resource('transactions/', 'TransactionController');
    Route::resource('/suppliers', 'SuppliersController');

    Route::get('medkategori', 'MedicineController@week4')->name('medicines.week4');
    Route::get('/report/listmedicine/{id}', 'CategoryController@showlist')->name('reportShowMedicine');
    Route::get('cart', 'MedicineController@cart');
    Route::get('add-to-cart/{id}', 'MedicineController@addToCart');
    Route::get('/checkout', 'TransactionController@form_submit_front');
    Route::get('/submit_checkout', 'TransactionController@submit_front')->name('submitcheckout');
    Route::get('/cetakpemesanan/{id}', 'TransactionController@print_detail')->name('cetakpesan');

    Route::post('/obat/showInfo','MedicineController@showInfo')->name('obat.showInfo');
    Route::post('/category/showProducts','CategoryController@showProducts')->name('category.showProducts');
    Route::post('/suppliers/getEditForm','SuppliersController@getEditForm')->name('suppliers.getEditForm');
    Route::post('/suppliers/saveData', 'SuppliersController@saveData')->name('supplier.saveData');
    Route::post('/suppliers/getEditForm2','SuppliersController@getEditForm2')->name('suppliers.getEditForm2');
    Route::post('suppliers/saveDataField', 'SuppliersController@saveDataField')->name('suppliers.saveDataField');
    Route::post('suppliers/changeLogo', 'SuppliersController@changeLogo')->name('supplier.changeLogo');

    Route::match(array('GET', 'POST'), 'transactions/showDataAjax/','TransactionController@showAjax')->name('transaction.showAjax');
});
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');