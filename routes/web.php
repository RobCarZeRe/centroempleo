<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;  
use App\Http\Controllers\AnuncioController;  
use App\Http\Controllers\UserManagementController;   
use App\Mail\EnviarCorreo;



            

Route::get('/', function () {return redirect('/dashboard');})->middleware('auth');
	Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');

	
	

Route::group(['middleware' => 'auth'], function () {

	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::get('/user-management', [UserManagementController::class, 'index'])->name('user-management'); //creado por mi
	Route::get('/Anuncio', [AnuncioController::class, 'show'])->name('Anuncio'); //creado por mi
	Route::get('/send-email', [HomeController::class, 'sendEmail'])->name('send.Email'); //creado por mi para email


	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');

	Route::post('/Anuncio', [AnuncioController::class, 'create'])->name('anuncio.create');//creado por mi
	
	Route::post('/Anuncio', [AnuncioController::class, 'store'])->name('anuncio.store');//creado por mi

	Route::get('/ListaAnuncio', [AnuncioController::class, 'ListarAnuncio'])->name('lista.anuncio'); // para ver anuncios


	Route::post('/send-email', [HomeController::class, 'sendEmail'])->name('enviar-correo');//creado para email

	
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static'); 
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static'); 

	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');



});

