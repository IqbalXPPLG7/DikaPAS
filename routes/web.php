<?php

use App\Http\Controllers\DBPhoto;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route untuk halaman login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Route untuk menangani login (POST)
Route::post('/login', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');
    
    // Validasi username dan password
    if ($username === 'admin' && $password === '12345') {
        // Menyimpan status login ke dalam session
        session(['logged_in' => true]);

        // Mengirim respons JSON jika login berhasil
        return response()->json(['success' => true]);
    } else {
        // Mengirim respons JSON jika login gagal
        return response()->json(['success' => false, 'message' => 'Invalid username or password']);
    }
});


// Rute untuk halaman landing yang hanya bisa diakses jika sudah login
Route::get('/landing', [DBPhoto::class, 'index'])->name('landing');
