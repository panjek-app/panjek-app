<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel stores yang baru kamu buat
        $stores = DB::table('stores')->get();
        
        // Menampilkan ke file halamanFood.blade.php
        return view('halamanFood', compact('stores'));
    }
}
