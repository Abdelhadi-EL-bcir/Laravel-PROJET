<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\NewsController;

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


Route::post('/appointment' , [HomeController::class , 'appointment']);
Route::get('/my_appointment' , [HomeController::class , 'myAppointment']);
Route::post('/send_message' , [HomeController::class , 'sendMessage']);
Route::get('/about' , [HomeController::class , 'about']);
Route::get('/contact' , [HomeController::class , 'contact']);
Route::get('/doctors' , [HomeController::class , 'doctors']);


Route::get('/get_users' , [AdminController::class , 'getUsers']);
Route::get('/delete_user/{id}' , [AdminController::class , 'deleteUser']);
Route::get('/get_my_patients/{id}' , [AdminController::class , 'getMyPatients']);
Route::get('/dcontact' , [AdminController::class , 'dcontact']);


Route::get('/messges_page' , [MessageController::class , 'getMessges']);
Route::get('/respond_msg/{id}' , [MessageController::class , 'respondMsg']);
Route::get('/delete_msg/{id}' , [MessageController::class , 'deleteMsg']);
Route::post('/send_msg' , [MessageController::class , 'sendMsg']);


Route::get('/cancel_appointment/{id}' , [AppointmentController::class , 'cancelAppointment']);
Route::post('/check_appointment' , [AppointmentController::class , 'checkAppointment'])->name('check_appointment');
Route::get('/get_appointments' , [AppointmentController::class , 'getAppointments']);
Route::get('/get_appointments_Accepted' , [AppointmentController::class , 'getAppointmentsAccepted']);
Route::get('/get_appointments_Canceled' , [AppointmentController::class , 'getAppointmentsCanceled']);
Route::get('/accepet_appointment/{id}' , [AppointmentController::class , 'accepetAppointment']);
Route::get('/cancel_appointment/{id}' , [AppointmentController::class , 'cancelAppointment']);
Route::get('/delete_appointment/{id}' , [AppointmentController::class , 'deleteAppointment']);


Route::get('/all_doctor_view' , [DoctorController::class , 'getDoctors']);
Route::get('/edit_doctor_view/{id}' , [DoctorController::class , 'getDoctor']);
Route::get('/get_doctor_page/{id}' , [DoctorController::class , 'getDoctorPage']);
Route::post('/edit_doctor/{id}' , [DoctorController::class , 'editDoctor']);
Route::get('/delete_doctor/{id}' , [DoctorController::class , 'deleteDoctor']);
Route::get('/add_doctor_view' , [DoctorController::class , 'addDoctorView']);
Route::post('/upload_doctor' , [DoctorController::class , 'uploadDoctor']);


Route::get('/news_page' , [NewsController::class , 'newsPage']);
Route::get('/delete_new/{id}' , [NewsController::class , 'deleteNew']);
Route::post('/upload_new' , [NewsController::class , 'uploadNew']);
