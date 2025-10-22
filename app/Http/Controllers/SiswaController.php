<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        // Ambil semua siswa dengan relasi ekskul
        $siswas = Siswa::with('ekskuls')->get();

        // Kirim ke view
        return view('index', compact('siswas'));
    }
}
