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
Route::get('/departments/info/{id}', [Departments::class, 'info']);
Route::get('/departments/edit/{id}', [Departments::class, 'edit' ]);
Route::post('/departments/update/{id}', [Departments::class, 'update']);
Route::get('/departments/delete/{id}', [Departments::class, 'delete']);

Route::get('/orderTypes', [OrderTypes::class, 'index']);
Route::get('/OrderTypes/add', [OrderTypes::class, 'add']);
Route::post('/OrderTypes/save', [OrderTypes::class, 'save']);
Route::get('/OrderTypes/info/{id}', [OrderTypes::class, 'info']);
Route::get('/OrderTypes/edit/{id}', [OrderTypes::class, 'edit' ]);
Route::post('/OrderTypes/update/{id}', [OrderTypes::class, 'update']);
Route::get('/OrderTypes/delete/{id}', [OrderTypes::class, 'delete']);

Route::get('/employees', [Employees::class, 'index']);
Route::get('/employees/add', [Employees::class, 'add']);
Route::post('/employees/save', [Employees::class, 'save']);

Route::get('/orders', [Orders::class, 'index']);
Route::get('/orders/add', [Orders::class, 'add']);
Route::post('/Orders/save', [Orders::class, 'save']);

Route::get('/rejected', [RejectedOrders::class, 'index']);
Route::get('/rejected/add', [RejectedOrders::class, 'add']);
Route::post('/rejected/save', [RejectedOrders::class, 'save']);
