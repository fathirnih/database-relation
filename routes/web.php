<?php

use Illuminate\Support\Facades\Route;

use App\Models\Siswa;

Route::get('/', function () {
    $siswas = Siswa::with('ekskuls')->get();
    return view('index', compact('siswas'));
});

