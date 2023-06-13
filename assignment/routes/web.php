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

// Task: 1:
// Answer include in pdf

// Task: 2:
Route::get('/', [AssignmentController::class, 'ExcerptDes']);

// Task: 3:
Route::get('/uniqetitle', [AssignmentController::class, 'DistinctTitle']);

// Task: 4:
Route::get('/firstrecord', [AssignmentController::class, 'FirstRecord']);

// Task: 5:
Route::get('/posts-des', [AssignmentController::class, 'DesFromPost']);

// Task: 6:
// Answer include in pdf

// Task: 7:
Route::get('/posts-title', [AssignmentController::class, 'PostTitle']);

// Task: 8:
Route::get('/insert-new', [AssignmentController::class, 'InsertNew']);

// Task: 9:
Route::get('/updatedata', [AssignmentController::class, 'UpdateData']);

// Task: 10:
Route::get('/deletedata', [AssignmentController::class, 'DeleteData']);

// Task: 11:
// Answer include in pdf

// Task: 12:
// Answer include in pdf

// Task: 13:
// Answer include in pdf

// Task: 14:
Route::get('/minsread', [AssignmentController::class, 'MinutesRead']);

// Task: 15:
Route::get('/incrementreadtime', [AssignmentController::class, 'IncReadTime']);
