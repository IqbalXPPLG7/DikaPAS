<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DBPhoto extends Controller
{
    public function index()
    {
        // Memeriksa apakah pengguna sudah login (dengan menggunakan session)
        if (!session('logged_in')) {
            return redirect('/login');
        }

        // Jika sudah login, lanjutkan dengan mengambil data produk
        $products = Product::with('idProduct')->limit(9)->get();

        // Mengembalikan data ke view
        return view('landing', compact('products'));
    }
}
