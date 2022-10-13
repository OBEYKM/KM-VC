<?php

use App\Http\Controllers\HomepageController;
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

Route::get('/', [HomepageController::class,"index"])->name("homepage");

Route::get("/homepage",[HomepageController::class,"index"]);

Route::get('/services',[HomepageController::class,"services"])->name("service");

Route::get("/contact",[HomepageController::class,"contact"])->name("contact");

Route::get("/about",[HomepageController::class,"about"])->name("about");
