<?php

use Illuminate\Support\Facades\Route;

use App\Models\Siswa;

use App\Http\Controllers\SiswaController;
Route::get('/', [SiswaController::class, 'index']);


