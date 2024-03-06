<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\jobController as job;

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
Route::get('/', [job::class,'addJob']);
Route::get('/add', [job::class,'addJob']);
Route::post('/add_job', [job::class,'add_job'])->name('add_job');
Route::get('/showquestions', [job::class,'showquestions'])->name('showquestions');
Route::post('/add_job', [job::class,'add_job'])->name('add_job');
Route::post('/countscore', [job::class,'countscore'])->name('countscore');
Route::get('/thankyou', [job::class,'thankyou'])->name('thankyou');



