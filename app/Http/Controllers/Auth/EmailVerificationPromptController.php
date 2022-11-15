<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use Inertia\Inertia;
>>>>>>> b5cb0f84ca7c230544c7b3bd4b0ebc1a7c96a886

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(RouteServiceProvider::HOME)
<<<<<<< HEAD
                    : view('auth.verify-email');
=======
                    : Inertia::render('Auth/VerifyEmail', ['status' => session('status')]);
>>>>>>> b5cb0f84ca7c230544c7b3bd4b0ebc1a7c96a886
    }
}
