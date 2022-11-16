<?php

use App\Http\Controllers\AcquaintanceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PatronController;
use App\Http\Controllers\PoliceOfficeController;
use App\Http\Controllers\ProductController;
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


Route::get('/home', function () {
    return view('report.home');
});
Route::resource('customer', CustomerController::class);

Route::resource('category', CategoryController::class);

Route::resource('court', CourtController::class);

Route::resource('police-office', PoliceOfficeController::class);

Route::resource('acquaintance', AcquaintanceController::class);

Route::resource('product', ProductController::class);

Route::resource('patron', PatronController::class);


Route::get('/account', function () {
    return view('account.create')->name('account');
});

Route::get('/delegate', function () {
    return view('delegate.create')->name('delegate');
});

Route::get('/supplier', function () {
    return view('supplier.create')->name('supplier');
});

Route::get('/legal-procedurs', function () {
    return view('legal-procedurs.create');
});
Route::get('/order', function () {
    return view('order.create');
});
Route::get('/issue', function () {
    return view('issue.create');
});
Route::get('/warranty', function () {
    return view('warranty.create');
});
Route::get('/creditcard', function () {
    return view('creditcard.create');
});
Route::get('/appointment', function () {
    return view('appointment.create');
});
Route::get('/archives', function () {
    return view('archives.create');
});
Route::get('/folder', function () {
    return view('folder.create');
});
Route::get('/media', function () {
    return view('media.create');
});
Route::get('/plane', function () {
    return view('plane.create');
});
Route::get('/fileupload', [CustomerController::class, 'excelfile'])->name('customer.fileupload');
Route::post('/excel', [CustomerController::class, 'uploadexcel'])->name('customer.excel');