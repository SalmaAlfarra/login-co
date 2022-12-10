<?php

use App\Http\Controllers\AcquaintanceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerPaymentMechanismsController;
use App\Http\Controllers\MaterialStatusController;
use App\Http\Controllers\PatronController;
use App\Http\Controllers\PoliceOfficeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\WorkController;
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

Route::get('/infofileupload', [CustomerController::class, 'infoexcelfile'])->name('customer.infofileupload');
Route::post('/infoexcel', [CustomerController::class, 'infouploadexcel'])->name('customer.infoexcel');

Route::get('/salaryfileupload', [SalaryController::class, 'salaryexcelfile'])->name('customer.salaryfileupload');
Route::post('/salaryexcel', [SalaryController::class, 'salaryuploadexcel'])->name('customer.salaryexcel');

Route::get('/materialstatusfileupload', [MaterialStatusController::class, 'materialstatusexcelfile'])->name('customer.materialstatusfileupload');
Route::post('/materialstatusexcel', [MaterialStatusController::class, 'materialstatusuploadexcel'])->name('customer.materialstatusexcel');

Route::get('/workfileupload', [WorkController::class, 'workexcelfile'])->name('customer.workfileupload');
Route::post('/workexcel', [WorkController::class, 'workuploadexcel'])->name('customer.workexcel');

Route::get('/fileupload', [CustomerController::class, 'fileupload'])->name('customer.fileupload');

Route::get('/paymentfileupload', [CustomerPaymentMechanismsController::class, 'paymentexcelfile'])->name('customer.paymentfileupload');
Route::post('/paymentexcel', [CustomerPaymentMechanismsController::class, 'paymentuploadexcel'])->name('customer.paymentexcel');

Route::get('/acquaintancefileupload', [AcquaintanceController::class, 'acquaintanceexcelfile'])->name('customer.acquaintancefileupload');
Route::post('/acquaintanceexcel', [AcquaintanceController::class, 'acquaintanceuploadexcel'])->name('customer.acquaintanceexcel');

Route::get('/patronfileupload', [PatronController::class, 'patronexcelfile'])->name('customer.patronfileupload');
Route::post('/patronexcel', [PatronController::class, 'patronuploadexcel'])->name('customer.patronexcel');


Route::get('/customer-profile', function () {
    return view('customer.customer-profile');
});

Route::get('/dashboard', function () {
return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


require __DIR__.'/auth.php';



// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/test', function () {
dd('test');
})->name('test');