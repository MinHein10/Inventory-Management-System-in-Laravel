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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UserController',['except'=>['show','create','store']]);
});



Route::get('/testing',function(){
    return view('aaa');
});


//  Dashboard
// Route::get('/dashboard','Admin\DashboardController@index')->name('admin.dashboard');
// Route::get('/dashboard',function(){
//     return view('adminpanel/template/dashboard');
// })->name('admin.dashboard');




// User Management
Route::get('/usermanagement',function(){
    return view('adminpanel/template/usermanagement');
})->name('admin.usermanagement');


Route::resource('/categories','Admin\CategoryController');

Route::resource('/products','Admin\ProductController');

Route::resource('/supplier','Admin\SupplierController');

Route::resource('/customer','Admin\CustomerController');

Route::resource('/stockin','Admin\PurchaseController');

// Unfinished Work

// Route::get('/stockout',function(){
//     return view('stockout/index');
// })->name('stockout.show');

Route::resource('/stockout','Admin\SaleController');

// Route::get('/customer',function(){
//     return view('customer/index');
// })->name('customer.show');


// Unfinished Work



Route::get('/blog',function(){
    return view('blog/index');
})->name('admin.blog');

Route::get('/dynamic_pdf/pdf','Admin\PDFController@pdf');

Route::get('/dynamic_excel/excel', 'ExcelController@export');

// Route::get('/get-product','Admin\DefaultController@getProduct')->name('default.getproduct');
Route::get('/get-category','Admin\DefaultController@getCategory')->name('get-category');
Route::get('/get-stock','Admin\DefaultController@getStock')->name('check-product-stock');
Route::get('/get-price','Admin\DefaultController@getPrice')->name('check-product-price');

Route::get('/contactpage',function(){
    return view('contact/index');
})->name('contactpage');

Route::get('/portfolio',function(){
    return view('portfolio/index');
})->name('portfoliopage');

Route::get('/profile',function(){
    return view('profile/index');
})->name('profilepage');
