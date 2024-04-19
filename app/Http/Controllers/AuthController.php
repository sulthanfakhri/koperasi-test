<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role->nama_role == 'superadmin') {
                return redirect()->route('admin.index');
            } elseif ($user->role->nama_role == 'anggota') {
                return redirect()->route('anggota.index');
            }
        }
        return view('dashboard.auth.login');
    }

    public function loginDo(Request $request)
    {
        request()->validate([
            'npp' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('npp', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->role->nama_role == 'superadmin') {
                $request->session()->flash('error', 'Selamat Datang di Dashboard Admin');
                return redirect()->route('admin.index');
            } elseif ($user->role->nama_role == 'anggota') {
                return redirect()->route('anggota.index');
            }
            return redirect()->route('login');
        }
        $request->session()->flash('error', 'Username atau password salah');
        return redirect()->route('login');
    }

    public function logoutDo(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
