<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        return view('nilai'); // Menampilkan template Blade
    }

    public function hitungNilai(Request $request)
    {
        return "<h2 style='color: green; text-align: center;'>Nilai berhasil dihitung! ✅</h2>";
    }
}
