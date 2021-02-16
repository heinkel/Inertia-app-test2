<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;


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
    return Inertia::render('Welcome', [
        'foo' => 'welcome',
        ]);
    });
Route::get('/about', function () {
    return Inertia::render('About', [
        'foo' => 'about',
        ]);
    });
Route::get('/contact', function () {
    return Inertia::render('Contact', [
        'foo' => 'contact',
        ]);
    });
Route::get('/i', function () {
    return Inertia::render('Dashboard/Index', [
        'lname' => 'dash',
        ]);
    });
Route::get('/users', function () {
    return Inertia::render('Users/Index', [
        'lname' => 'usr',
        ]);
    });


//Route::redirect('/', '/users', 301);
//Route::get('dashboard',[DashboardController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/users','UsersController@Index')->name('users.index');

//Route::get('/users',[App\Http\Controllers\UsersController::class, 'index']);

//Route::get('users',[UsersController::class, 'index']);
