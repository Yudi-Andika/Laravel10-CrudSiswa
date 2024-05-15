<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('siswa');
// });

// Route::get('/siswa', function () {
//     return view('siswa'); // Assuming 'welcome.blade.php' is your home view
// });
// Route::get('/guru', function () {
//     return view('guru'); // Assuming 'welcome.blade.php' is your home view
// });
Route::resource('/posts', \App\Http\Controllers\PostController::class);
// Route::get('/siswa', 'PagesController@siswa');
// Route::get('/guru', 'PagesController@guru');