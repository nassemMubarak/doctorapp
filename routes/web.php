<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\RoleUserController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ProfilesController;
use App\Http\Controllers\Admin\AppointmentsController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\AppointmentsController as Appointments;
use App\Http\Controllers\Web\ContactsController as Contacts;
use App\Http\Controllers\Web\ProfileController as Profile;
use App\Http\Controllers\Web\PagesController;
use App\Http\Controllers\Web\DoctorsController;
use App\Http\Controllers\Web\MessagesController;
use App\Http\Controllers\Web\NewsController as News;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function(){
    return view('web.auth.login');
})->name('login');




Route::middleware('auth:web')->group(function () {
    // Route::middleware('auth:web')->middleware('verified')->group(function () {
    Route::get('profile', [Profile::class, 'index'])->name('profile');
    Route::put('profile/{profile}', [Profile::class, 'update'])->name('profile.update');
    Route::post('profile/updatePassword', [Profile::class, 'updatePassword'])->name('profile.password.update');

    Route::get('/home', [HomeController::class,'index'])->name('index');
    Route::resource('appointments', Appointments::class);
    Route::resource('contacts', Contacts::class);
    Route::resource('doctors', DoctorsController::class);
    Route::resource('news', News::class);
    Route::resource('messages', MessagesController::class);
    Route::get('services', [PagesController::class, 'services'])->name('services');
    Route::get('checkup', [PagesController::class, 'checkup'])->name('checkup');
    Route::get('cardiogram', [PagesController::class, 'cardiogram'])->name('cardiogram');
    Route::get('DAN-testing', [PagesController::class, 'dan_testing'])->name('DAN-testing');
    Route::get('blood-bank', [PagesController::class, 'BloodBank'])->name('blood-bank');
    Route::get('dermatology', [PagesController::class, 'dermatology'])->name('dermatology');
    Route::get('orthopedic', [PagesController::class, 'orthopedic'])->name('orthopedic');
    Route::get('about', [PagesController::class, 'about'])->name('about');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';



Route::middleware('auth:admin')->prefix('admin')->as('admin.')->group(function () {

    Route::get('/', function () {
        return view('admin.layouts.starter');
    })->name('index');

    Route::resource('profiles', ProfilesController::class);
    Route::get('profiles/password/view', [ProfilesController::class, 'viewPass'])->name('profiles.password');
    Route::put('profiles/password/{admin}', [ProfilesController::class, 'updatePass'])->name('profiles.password.update');
    Route::resource('users', UsersController::class);
    Route::resource('admins', AdminsController::class);
    Route::resource('news', NewsController::class);
    Route::resource('appointments', AppointmentsController::class);
    Route::resource('contacts', ContactsController::class);
    Route::resource('messages', MessageController::class);
    Route::resource('roles', RolesController::class);
    Route::resource('roleUser', RoleUserController::class);
});


Route::post('appointments/doctor', [Appointments::class, 'doctor'])->name('doctor.id');


