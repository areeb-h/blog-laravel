<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Nette\Schema\ValidationException;

class SessionsController extends Controller
{
    public function create(): View|Application|Factory
    {
        return view('sessions.login');
    }

    public function store()
    {
        // validate the request
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (auth()->attempt($attributes)) {
            return redirect('/')->with('success', 'Welcome Back!');
        }

        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified'
        ]);

//        return back()
//            ->withInput()
//            ->withErrors(['email' => 'Your provided credentials could not be verified']);

        // attempt to authenticate and log in the user
        // based on the provided credentials

        // redirect with a success flash message
    }

    public function destroy(): Application|Redirector|RedirectResponse
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
