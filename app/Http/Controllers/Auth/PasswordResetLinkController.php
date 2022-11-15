<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
<<<<<<< HEAD
=======
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
>>>>>>> b5cb0f84ca7c230544c7b3bd4b0ebc1a7c96a886

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
<<<<<<< HEAD
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.forgot-password');
=======
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Auth/ForgotPassword', [
            'status' => session('status'),
        ]);
>>>>>>> b5cb0f84ca7c230544c7b3bd4b0ebc1a7c96a886
    }

    /**
     * Handle an incoming password reset link request.
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
            'email' => ['required', 'email'],
=======
            'email' => 'required|email',
>>>>>>> b5cb0f84ca7c230544c7b3bd4b0ebc1a7c96a886
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

<<<<<<< HEAD
        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
=======
        if ($status == Password::RESET_LINK_SENT) {
            return back()->with('status', __($status));
        }

        throw ValidationException::withMessages([
            'email' => [trans($status)],
        ]);
>>>>>>> b5cb0f84ca7c230544c7b3bd4b0ebc1a7c96a886
    }
}
