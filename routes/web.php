<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HisController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Middleware\PreventBackHistory;

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

Route::get('/', [HisController::class, 'index']);

Route::get('/doctors', [HisController::class, 'doctors']);
Route::get('/service', [HisController::class, 'service']);
Route::get('/first', [HisController::class, 'first']);
Route::get('/appcreate', [HisController::class, 'appcreate']);
Route::get('/print', [HisController::class, 'print']);


//guest

Route::group(['middleware' => 'prevent-back-history'], function () {
    Route::group(['middleware' => 'myguest'], function () {


        Route::get('/login', [HisController::class, 'tem']);
        Route::post('/login', [HisController::class, 'checklogin'])->name('login');

        Route::post('/register', [HisController::class, 'register'])->name('register');
    });
});

Route::group(['middleware' => ['myauth', 'User']], function () {
    //logut
    Route::get('/logout', [HisController::class, 'logout']);
    //authenticated user (logged in user)


    Route::get('/show', [HisController::class, 'show']);
    Route::get('/error', [HisController::class, 'error']);

    Route::delete('/show', [\App\Http\Controllers\HisController::class, 'destroy'])->name('destroy');


    Route::get('/profile/{id}', [\App\Http\Controllers\HisController::class, 'profile'])->name('index');


    Route::post('/appointment', [HisController::class, 'store']);
    Route::get('/appointment', [HisController::class, 'appointment'])->name('appointment');
    Route::get('getDoctors/{id}', [HisController::class, 'getDoctors']);

    Route::get('/profile/update/{id}', [App\Http\Controllers\HisController::class, 'update'])->name('update');
    Route::PUT('/profile/saveupdate/{id}}', [App\Http\Controllers\HisController::class, 'saveupdate'])->name('saveupdate');
});





Route::group(['middleware' =>  'admin'], function () {
    //////////////////////////////////////////admin///////////////////////////////////////////


    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

    Route::get('/logouts', [HisController::class, 'logout']);
    Route::get('/error', [HisController::class, 'error']);


    //admin

    /* 

------------------ HERE the routs of crud operations of USERS --- Doctors --  Appointments --------------------------


 */


    /*-----------------------------------------------------------------------------------------------------------------------------*/
    Route::get('/cruduser', [App\Http\Controllers\Users::class, 'index'])->name('cruduser.index');
    Route::get('/cruduser/delete/{id}', [App\Http\Controllers\Users::class, 'destroy'])->name('Users.destroy');
    Route::get('/cruduser/update/{id}', [App\Http\Controllers\Users::class, 'update'])->name('cruduser.update');
    Route::put('/cruduser/update/{id}', [App\Http\Controllers\Users::class, 'edit'])->name('cruduser.edit');

    /* 

------------------ ------------------------------------- --------------------------


/* 

------------------ HERE the routs of crud operations of  --- Doctors - --------------------------

*/
    Route::get('/doctorss', [App\Http\Controllers\DocController::class, 'index'])->name('doctorss.index');
    Route::get('/doctorss/delete/{id}', [App\Http\Controllers\DocController::class, 'destroy'])->name('doctorss.destroy');
    Route::get('/doctorss/create', [App\Http\Controllers\DocController::class, 'create'])->name('doctorss.create');
    Route::post('/doctorss/submit', [App\Http\Controllers\DocController::class, 'store'])->name('doctorss.submit');
    Route::get('/doctorss/update/{id}', [App\Http\Controllers\DocController::class, 'update'])->name('doctorss.update');
    Route::put('/doctorss/update/{id}', [App\Http\Controllers\DocController::class, 'edit'])->name('doctorss.edit');
    /* 

------------------ HERE the routs of crud operations of  --- appointements - --------------------------

*/
    Route::get('/appointments', [App\Http\Controllers\AppointmentController::class, 'index'])->name('apointments.index');
    Route::get('/appointments/delete/{id}', [App\Http\Controllers\AppointmentController::class, 'destroy'])->name('apointments.destroy');

    Route::get('/appointments/create', [App\Http\Controllers\AppointmentController::class, 'create'])->name('apointments.create');
    Route::post('/appointments/submit', [App\Http\Controllers\AppointmentController::class, 'store'])->name('apointments.submit');
    Route::get('/appointments/print/{id}', [App\Http\Controllers\AppointmentController::class, 'print'])->name('apointments.print');
    Route::get('/appointments/create/doctors/{id}', [App\Http\Controllers\AppointmentController::class, 'getDoctors']);
    /*------------------ HERE the routs of crud operations of  --- appointements - --------------------------

*/
    Route::get('/invoice/table', [App\Http\Controllers\InvoiceController::class, 'index2'])->name('invoice.index');
    Route::get('/invoice', [App\Http\Controllers\InvoiceController::class, 'index'])->name('invoice.create');
    Route::post('/invoice/submit', [App\Http\Controllers\InvoiceController::class, 'store'])->name('invoice.submit');
    Route::get('/invoice/getprice/{id}', [App\Http\Controllers\InvoiceController::class, 'getPrice']);
    Route::get('/invoice/print', [App\Http\Controllers\InvoiceController::class, 'print'])->name('invoice.print');
});
