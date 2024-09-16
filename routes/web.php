<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;

Route::get('/hello', function () {
    return view('test.hello');
});


Route::resource('employees', EmployeeController::class);
