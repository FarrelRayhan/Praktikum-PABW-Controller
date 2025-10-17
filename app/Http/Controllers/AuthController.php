<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('Login');
    }

    // Memproses data login
    public function login(Request $request)
    {
        // Validasi agar username dan password tidak kosong
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Daftar user lokal (bisa diganti nanti dengan database)
        $users = [
            ['username' => 'admin', 'password' => '12345'],
            ['username' => 'farrel', 'password' => '123'],
            ['username' => 'user', 'password' => 'user123'],
        ];

        // Ambil input dari form
        $inputUsername = $request->username;
        $inputPassword = $request->password;

        // Cek kecocokan username & password
        foreach ($users as $user) {
            if ($user['username'] === $inputUsername && $user['password'] === $inputPassword) {
                // Jika cocok, arahkan ke dashboard
                return view('Dashboard', ['username' => $inputUsername]);
            }
        }

        // Jika tidak cocok
        return redirect()
            ->route('login.show')
            ->with('error', 'Username atau password salah!');
    }
}
