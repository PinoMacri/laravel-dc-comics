<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComicsController;
use App\Models\Comic;

Route::get("/",[HomeController::class,"index"])->name("home");


Route::get("/COMICS",[ComicsController::class,"index"])->name("comics.index");
Route::get("/comics/create",[ComicsController::class,"create"])->name("comics.create");
Route::get("/comics/{id}",[ComicsController::class,"show"])->name("comics.show");
Route::post("/comics",[ComicsController::class, "store"])->name("comics.store");