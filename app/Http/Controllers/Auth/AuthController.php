<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use Authenticatable;

    public function showOwnerLoginForm()
    {
        return view('auth.login', ['url' => 'owner']);
    }

    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }

    public function showPenggunaLoginForm()
    {
        return view('auth.login', ['url' => 'pengguna']);
    }

    protected function ownerLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'owner'], $request->remember)) {
            return redirect()->intended('/owner/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'))->withErrors(['email' => 'Invalid credentials']);
    }

    protected function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin'], $request->remember)) {
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'))->withErrors(['email' => 'Invalid credentials']);
    }

    protected function penggunaLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'pengguna'], $request->remember)) {
            return redirect()->intended('/pengguna/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'))->withErrors(['email' => 'Invalid credentials']);
    }
}
