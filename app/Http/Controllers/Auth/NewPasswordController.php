<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
<<<<<<< HEAD
=======
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
>>>>>>> b5cb0f84ca7c230544c7b3bd4b0ebc1a7c96a886

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     *
     * @param  \Illuminate\Http\Request  $request
<<<<<<< HEAD
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('auth.reset-password', ['request' => $request]);
=======
     * @return \Inertia\Response
     */
    public function create(Request $request)
    {
        return Inertia::render('Auth/ResetPassword', [
            'email' => $request->email,
            'token' => $request->route('token'),
        ]);
>>>>>>> b5cb0f84ca7c230544c7b3bd4b0ebc1a7c96a886
    }

    /**
     * Handle an incoming new password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
<<<<<<< HEAD
            'token' => ['required'],
            'email' => ['required', 'email'],
=======
            'token' => 'required',
            'email' => 'required|email',
>>>>>>> b5cb0f84ca7c230544c7b3bd4b0ebc1a7c96a886
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
<<<<<<< HEAD
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
=======
        if ($status == Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', __($status));
        }

        throw ValidationException::withMessages([
            'email' => [trans($status)],
        ]);
>>>>>>> b5cb0f84ca7c230544c7b3bd4b0ebc1a7c96a886
    }
}
