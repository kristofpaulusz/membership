<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\TypeController;
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

Route::get('/', function () {
    return view('welcome');
});

// Clubs
// Route::get('/api/clubs', ClubController::class, 'index');
// Route::get('/api/types', [TypeController::class, 'index']);

// Route::get('/api/types/{type_id}', [TypeController::class, 'show']);

// Route::post('/api/types',  [TypeController::class, 'store']);

// Route::put('/api/types/{type_id}', [TypeController::class, 'update']);

// Route::delete('/api/types/{type_id}', [TypeController::class, 'destroy']);

// Route::get('/type/list', [TypeController::class, 'listView']);

// Route::get('/type/new', [TypeController::class, 'listNew']);

// Route::get('/type/delete', [TypeController::class, 'listDel']);

// Route::get('/type/modify', [TypeController::class, 'listDel']);
