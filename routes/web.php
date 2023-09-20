<?php

use Illuminate\Support\Facades\Route;

// import controller
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;

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
  return redirect('/landing');
});

Route::get('/landing', [LandingController::class, 'index']);
Route::get('/landing/profile', [ProfileController::class, 'index']);

/*
*
* Method : GET,POST,PUT/PATCH,DELETE
* URL : <bebas>
* Controller : [<nama controller>,<nama fungsi di dalam controller>]
*
*/

// cara lain
// Route::resource('landing', LandingController::class);
// Fungsi yang terbaca : index,edit,create,update,destroy,show,store
