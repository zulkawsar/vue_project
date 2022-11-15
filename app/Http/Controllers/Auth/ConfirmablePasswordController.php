<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
<<<<<<< HEAD
=======
use Inertia\Inertia;
>>>>>>> b5cb0f84ca7c230544c7b3bd4b0ebc1a7c96a886

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     *
<<<<<<< HEAD
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('auth.confirm-password');
=======
     * @return \Inertia\Response
     */
    public function show()
    {
        return Inertia::render('Auth/ConfirmPassword');
>>>>>>> b5cb0f84ca7c230544c7b3bd4b0ebc1a7c96a886
    }

    /**
     * Confirm the user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function store(Request $request)
    {
        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
