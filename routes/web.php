<?php

use Illuminate\Foundation\Application;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route::inertia('/', 'login');
Route::get('/', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create']);


Route::middleware(['auth', 'admin'])->group(function () {

    // view ke user account
    Route::get('user-account', function () {
        return view('user-account');
    })->name('user-account');
    Route::get('insert-issue', function () {
        return view('insert-issue');
    })->name('insert-issue');
    Route::get('handle-issue', function () {
        return view('handle-issue');
    })->name('handle-issue');

    Route::get('insert-incoming', function () {
        return view('insert-incoming');
    })->name('insert-incoming');
    Route::get('insert-pr', function () {
        return view('insert-pr');
    })->name('insert-pr');
    Route::get('insert-po', function () {
        return view('insert-po');
    })->name('insert-po');

    Route::get('insert-pp', function () {
        return view('insert-pp');
    })->name('insert-pp');

    // });
});

Route::middleware('auth')->group(
    function () {
        Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard.index');
        Route::get('search-issue', function () {
            return view('search-issue');
        })->name('search-issue');
        Route::get('trace-item', function () {
            return view('trace-item');
        })->name('trace-item');
        Route::get('resume', function () {
            return view('resume');
        })->name('resume');
    }
);

Route::middleware('auth', 'user1')->group(
    function () {
        Route::get('insert-issue', function () {
            return view('insert-issue');
        })->name('insert-issue');
        Route::get('insert-incoming', function () {
            return view('insert-incoming');
        })->name('insert-incoming');
        Route::get('insert-pr', function () {
            return view('insert-pr');
        })->name('insert-pr');
        Route::get('insert-po', function () {
            return view('insert-po');
        })->name('insert-po');
        Route::get('insert-pp', function () {
            return view('insert-pp');
        })->name('insert-pp');
    }
);

Route::middleware('auth', 'user2')->group(
    function () {
        Route::get('handle-issue', function () {
            return view('handle-issue');
        })->name('handle-issue');
    }
);
require __DIR__ . '/auth.php';
