<?php
use App\Http\Controllers\UsersController;
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
//     return view('welcome');
// });  
Route::get('/', [UsersController::class, 'index'])->name('index');
Route::post('/store', [UsersController::class, 'store_data'])->name('store');
//Route::get('/user_edit/{id}', [UsersController::class, 'updateUserdata']);
Route::post('/user_delete/{id}', [UsersController::class, 'delUserdata'])->name('user_delete');



