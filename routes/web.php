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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/managments', [Managments::class, 'index']);
Route::get('/managments/add', [Managments::class, 'add']);
Route::post('/managments/save_new', [Managments::class, 'save_new']);
Route::get('/managments/info/{id}', [Managments::class, 'info']);
Route::get('/managments/edit/{id}', [Managments::class, 'edit']);
Route::post('/managments/save_edit', [Managments::class, 'save_eidt']);
Route::get('/managments/delete/{id}', [Managments::class, 'dele' ]);

Route::get('/departments', [Departments::class, 'index']);
Route::get('/departments/add', [Departments::class, 'add']);
Route::post('/departments/save', [Departments::class, 'save']);
