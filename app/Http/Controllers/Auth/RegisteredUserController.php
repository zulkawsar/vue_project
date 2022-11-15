<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
<<<<<<< HEAD
=======
use Inertia\Inertia;
>>>>>>> b5cb0f84ca7c230544c7b3bd4b0ebc1a7c96a886

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
<<<<<<< HEAD
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
=======
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Auth/Register');
>>>>>>> b5cb0f84ca7c230544c7b3bd4b0ebc1a7c96a886
    }

    /**
     * Handle an incoming registration request.
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
=======
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:'.User::class,
>>>>>>> b5cb0f84ca7c230544c7b3bd4b0ebc1a7c96a886
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
