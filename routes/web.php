<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;



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

Route::get('/',[PageController::class,'homePage'])->name('home');

Route::get('/packages',[PageController::class,'packagesPage'])->middleware('auth')->name('packages');
Route::get('/collection',[PageController::class,'collectionPage'])->middleware('auth')->name('collection');


Route::get('/login',[AuthController::class,'index'])->name('login');


Route::post('/login',[AuthController::class,'login'])->name('login.submit');
Route::get('/logout',[AuthController::class,'logout'])->middleware('auth')->name('logout');
Route::get('/register',[AuthController::class,'attendees'])->name('attendees');
Route::post('/register',[AuthController::class,'register'])->name('register');
