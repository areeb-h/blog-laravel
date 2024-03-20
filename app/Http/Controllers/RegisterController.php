<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function create(): View|Application
    {
        return view('register.create');
    }

    public function store(UserRegisterRequest $request): Application|Redirector|RedirectResponse
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created');
    }
}
