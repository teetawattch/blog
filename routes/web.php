<?php
namespace App\Http\Controllers;
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

Route::get('/', [IndexController::class, 'index']);


// //เรียก controller
// Route::get('/user', [UserControll::class, 'index']);
// //route แบบมี parameters
// Route::get('post/{slug}', [PostControll::class, 'show']);
// //name route
// Route::get('user/profile', [UserControll::class, 'show'])->name('profile');
// route('profile');