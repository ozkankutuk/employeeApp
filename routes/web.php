<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get( '/', function () {
    return view( 'welcome' );
} );

Auth::routes();

Route::group( [ 'prefix' => 'dashboard', 'middleware' => 'auth' ], function () {
    Route::get( '', [ HomeController::class, 'index' ] )->name( 'home' );
    Route::get( 'employees', [ EmployeeController::class, 'index' ] )->name( 'employees.index' );
} );
