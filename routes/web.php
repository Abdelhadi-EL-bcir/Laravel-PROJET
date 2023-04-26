<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get('/' , [HomeController::class , 'index']);

Route::get('/home' , [HomeController::class , 'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view' , [AdminController::class , 'addDoctorView']);
Route::post('/upload_doctor' , [AdminController::class , 'uploadDoctor']);
Route::post('/appointment' , [HomeController::class , 'appointment']);
Route::get('/my_appointment' , [HomeController::class , 'myAppointment']);
Route::get('/cancel_appointment/{id}' , [HomeController::class , 'cancelAppointment']);
Route::get('/get_appointments' , [AdminController::class , 'getAppointments']);
Route::get('/accepet_appointment/{id}' , [AdminController::class , 'accepetAppointment']);
Route::get('/cancel_appointment/{id}' , [AdminController::class , 'cancelAppointment']);
Route::get('/all_doctor_view' , [AdminController::class , 'getDoctors']);
Route::get('/edit_doctor_view/{id}' , [AdminController::class , 'getDoctor']);
Route::post('/edit_doctor/{id}' , [AdminController::class , 'editDoctor']);
Route::get('/delete_doctor/{id}' , [AdminController::class , 'deleteDoctor']);
Route::post('/upload_new' , [AdminController::class , 'uploadNew']);
