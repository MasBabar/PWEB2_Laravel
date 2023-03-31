<?php
/** Admiko routes. This file will be overwritten on page import. Don't add your code here! **/

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;

/**Noresi**/
Route::post("noresi/admiko_reorder", [NoresiController::class,"admiko_reorder"])->name("noresi.admiko_reorder");
Route::delete("noresi/destroy", [NoresiController::class,"destroy"])->name("noresi.delete");
Route::resource("noresi", NoresiController::class)->parameters(["noresi" => "noresi"]);
