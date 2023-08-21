<?php

use App\Http\Controllers\HomeController;
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

// Route::group(['middleware' => 'auth'], function () {
    // view ke dashboard
    Route::get('/', [HomeController::class, 'home']);
        Route::get('dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        // view ke user account
        Route::get('user-account', function () {
            return view('user-account');
        })->name('user-account');

        // view ke register pos
        Route::get('insert-issue', function () {
            return view('insert-issue');
        })->name('insert-issue');

        // view ke register line op
        Route::get('handle-issue', function () {
            return view('handle-issue');
        })->name('handle-issue');

         // view ke register op
         Route::get('search-issue', function () {
            return view('search-issue');
        })->name('search-issue');

        // view ke register tool
        Route::get('insert-incoming', function () {
            return view('insert-incoming');
        })->name('insert-incoming');

        // view ke register holder
        Route::get('insert-pr', function () {
            return view('insert-pr');
        })->name('insert-pr');

        // view ke register item
        Route::get('insert-po', function () {
            return view('insert-po');
        })->name('insert-po');

        // view ke resume dashboard
        Route::get('resume', function () {
            return view('resume');
        })->name('resume');

        // view ke register standard
        Route::get('insert-pp', function () {
            return view('insert-pp');
        })->name('insert-pp');
        // view ke trace item
        Route::get('trace-item', function () {
            return view('trace-item');
        })->name('trace-item');
// });