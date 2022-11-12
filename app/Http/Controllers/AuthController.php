<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function login()
    {
        return view('website-pages.login.index');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt([
            'email' => $request->post('email'),
            'password' => $request->post('password'),
        ])) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Your email and password doesn`t match',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function profile()
    {
        $user = Auth::user();

        return view('dashboard.pages.profile.form', ['sectionData' => [
            'name' => $user->name,
        ]]);
    }

    public function profileAction(Request $request)
    {
        $user = Auth::user();

        $user_model = User::find($user->id);

        $request->validate([
            'name' => ['required'],
            'repeat_password' => [Rule::in($request->post('new_password'))],
        ]);

        $user_model->name = $request->post('name');

        $new_password = $request->post('new_password');

        if ($new_password) {
            $user_model->password = Hash::make($new_password);
            $this->logout($request);
        }

        $user_model->save();

        return back();
    }
}
