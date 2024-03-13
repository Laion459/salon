<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomePageController;
use App\Http\Controllers\UserSalonController;


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

//Route::get('/',[HomePageController::class,'home'])->name('homePage.salon');

//Route::get('/history', [HomePageController::class, 'history'])->name('homePage.history');



Route::get('/', [HomePageController::class, 'home'])->name('home');
Route::get('/history', [HomePageController::class, 'history'])->name('history');
Route::get('/contacts', [HomePageController::class, 'contacts'])->name('contacts');


Route::get('/services', [HomePageController::class, 'cortes'])->name('services.cortes');
Route::get('/services/coloracao', [HomePageController::class, 'coloracao'])->name('services.coloracao');
Route::get('/services/tonalizacao', [HomePageController::class, 'tonalizacao'])->name('services.tonalizacao');
Route::get('/services/reflexo', [HomePageController::class, 'reflexo'])->name('services.reflexo');
Route::get('/services/escova', [HomePageController::class, 'escova'])->name('services.escova');
Route::get('/services/hidratacao', [HomePageController::class, 'hidratacao'])->name('services.hidratacao');
Route::get('/services/depilacao', [HomePageController::class, 'depilacao'])->name('services.depilacao');
Route::get('/services/manicure', [HomePageController::class, 'manicure'])->name('services.manicure');
Route::get('/services/maquiagem', [HomePageController::class, 'maquiagem'])->name('services.maquiagem');
Route::get('/services/sobrancelhas', [HomePageController::class, 'sobrancelhas'])->name('services.sobrancelhas');
Route::get('/services/massagem', [HomePageController::class, 'massagem'])->name('services.massagem');


Route::get('/cadastro', [UserSalonController::class, 'showRegistrationForm'])->name('cadastro');
Route::post('/cadastro', [UserSalonController::class, 'register'])->name('cadastro.submit');
Route::post('/register', [UserSalonController::class, 'register'])->name('register');


