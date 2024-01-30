<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view("auth.register");
    }

    public function store(RegisterRequest $request, User $user)
    {
        $validatedData = $request->validated();


        $user->fill($validatedData);

        $user->save();

        auth()->login($user);
        return redirect("/")
            ->with("success", "You have Created you account successfully");
    }
}
