<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardController;
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
        'foo' => 'bar',
        ]);
    });
Route::get('/about', function () {
    return Inertia::render('About', [
        'foo' => 'bar',
        ]);
    });
Route::get('/contact', function () {
    return Inertia::render('Contact', [
        'foo' => 'bar',
        ]);
    });



Route::get('dashboard',[DashboardController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
