<?php

use App\Http\Controllers\second_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("add", function () {
    return view('demo');
});
Route::post("add", [second_controller::class, 'store']);

Route::get('plays', [second_controller::class, 'index']);
 // FOR FETCH
Route::get("editdata/{id}", function () {
    return view('edit');
});
// FOR FETCH

Route::get('editdata/{id}', [second_controller::class, 'edit']);
// FOR DELETE
Route::get('deletedata/{id}', [second_controller::class, 'destroy']);
// FOR DELETE

// FOR UPDAE
Route::post('editdata/{id}', [second_controller::class, 'update']);
// FOR UPDAE

