<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    
    // ================== CAPTCHA GENERATOR ==================
    private function generateCaptcha($length = 5)
    {
        $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
        return substr(str_shuffle($chars), 0, $length);
    }

    // ================= LOGIN =================
    public function showLogin()
{
    if (!session()->has('captcha')) {
        session([
            'captcha' => substr(
                str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZ23456789'),
                0,
                5
            )
        ]);
    }

    return view('admin.login');
}


    public function processLogin(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
            'captcha'  => 'required'
        ]);

        // ===== CEK LOCK / PENDING =====
        if (Session::has('lock_until') && now()->lessThan(Session::get('lock_until'))) {
            $seconds = now()->diffInSeconds(Session::get('lock_until'));
            return back()->withErrors([
                "Terlalu banyak percobaan login. Coba lagi dalam $seconds detik."
            ]);
        }

        // ===== VALIDASI CAPTCHA =====
        if (strtoupper($request->captcha) !== Session::get('captcha')) {
            Session::put('captcha', $this->generateCaptcha());
            return back()->withErrors(['Captcha salah']);
        }

        // ===== PROSES LOGIN =====
        if (!Auth::attempt($request->only('email', 'password'))) {

            $attempts = Session::get('login_attempts', 0) + 1;
            Session::put('login_attempts', $attempts);

            if ($attempts >= 5) {
                $delay = ($attempts - 4) * 5; // 5s, 10s, 15s...
                Session::put('lock_until', now()->addSeconds($delay));
            }

            Session::put('captcha', $this->generateCaptcha());

            return back()->withErrors(['Email atau password salah']);
        }

        // ===== LOGIN BERHASIL =====
        Session::forget(['login_attempts', 'lock_until', 'captcha']);

        $request->session()->regenerate();

        return redirect()->route('admin.dashboard');
    }

    // ================= REGISTER =================
    public function showRegister()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.login')
            ->with('success', 'Akun berhasil dibuat. Silakan login.');
    }

    // ================= LOGOUT =================
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
