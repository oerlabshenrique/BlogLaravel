<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\App;
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


Route::get("user/{user}", [UserController::class, "show"])->name("user.show");


Route::get("/", function () {
    return view('welcome');
})->name("home");


/*
Route::get('/users/{paramA}/{paramB}', function ($paramA, $paramB) {
    return $paramA . "-" . $paramB;
    //return view('welcome');
});
*/