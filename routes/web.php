<?php

use Illuminate\Routing\Route as RoutingRoute;
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
//     return view('welcome');
// });

Route::get("foo",function(){
    return "Hello World";
});

// Route::get("user/{id}", function($id){
//     return "User ".$id;
// });

Route::get("user/{name?}", function($name="John"){
    return $name;
});

Route::get("foo1", function(){
    return "Foo1";
})->name("namaroute");

// Route::get("greeting",function(){
//     return view("welcome",['name'=>'Samantha']);
// });

Route::get('catalog', function () {
    return view('catalog');
});

Route::get('catalog/medicines', function ($medicine = 'Medicine') {
    return view('medicines', ['medicine' => $medicine]);
});

Route::get('catalog/medicines/{id?}', function ($id) {

    return view('detail', ['id' => $id]);
});

Route::get('catalog/med_equip', function ($medequip = 'Medical Equipment') {
    return view('medequip', ['medequip' => $medequip]);
});

Route::get('catalog/med_equip/{id?}', function ($id) {
    return view('detailmedquip', ['id' => $id]);
});

Route::resource('obat','MedicineController');
Route::resource('kategori_obat','CategoryController');
Route::resource('buyer','BuyerController');

Route::get('/report/listmedicine/{id}','CategoryController@showlist')->name('reportShowMedicine');
Route::get('/transaksi','TransactionController@index');
Route::get('/transaksi/showAjax','TransactionController@showAjax')->name('transaction.showAjax');
Route::get('/menu','MedicineController@index');

Route::get('/','MedicineController@front_index');
Route::get('cart','MedicineController@cart');
Route::get('add-to-cart/{id}','MedicineController@addToCart');
