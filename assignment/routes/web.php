<?php

use App\Http\Controllers\AssignmentController;
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

// Task: 2:
Route::get('/', [AssignmentController::class, 'ExcerptDes']);

// Task: 3:
Route::get('/uniqetitle', [AssignmentController::class, 'DistinctTitle']);

// Task: 4:
Route::get('/firstrecord', [AssignmentController::class, 'FirstRecord']);

// Task: 5:
Route::get('/posts-des', [AssignmentController::class, 'DesFromPost']);
