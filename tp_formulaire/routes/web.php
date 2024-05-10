<?php
use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("etudiants/create", [EtudiantController::class ,"create"])->name("etudiants.create");
Route::post("etudiants/store", [EtudiantController::class ,"store"])->name("etudiants.store");


