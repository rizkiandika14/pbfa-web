<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    //
    public function index()
    {
        $title = 'Login - Page';
        return view('login/login', compact('title'));
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'is_active' => 'Y'])) {
            return redirect('home')->with('toast_success', 'Berhasil Login!');;
        } elseif (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'is_active' => 'N'])) {
            return redirect('login')->with('errors', 'Akun Tidak Aktif!<br>Silahkan hubungi admin<br><a href="https://api.whatsapp.com/send?phone=+628157644967"><i class="fab fa-whatsapp"></i></a>');;
        }
        return redirect('login')->with('errors', 'Username atau Password Salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function register()
    {
        $title = 'Register - Page';
        return view('login/register', compact('title'));
    }

    public function postregister(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|min:5|max:255',
            'telepon' => 'required|min:9',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['level'] = 'anggota';
        $validatedData['is_active'] = 'N';
        $validatedData['image'] = 'default.png';
        User::create($validatedData);

        return redirect('login')->with('success', 'Berhasil Registrasi<br>Tunggu Aktivasi Akun!');
    }
}
