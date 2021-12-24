<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;

class UsersController extends Controller
{

    public function getMeProfile()
    {
        $username = 'teste';
        $args = ['a', 'b', 1, 2, 3];
        return view('users', compact(['username', 'args']));
    }

    public function getProfile(string $username)
    {
        $args = ['a' => 'abc', 'b', 1, 2, 3];
        $whilezada = true;
        $chaters = ['bot-1', 'bot-2', 'bot-3', 'bot-4', 'bot-5', 'bot-6', 'bot-7', 'bot-8'];
        return view('users', compact(['username', 'args', 'whilezada', 'chaters']));
    }

    public function test(TestRequest $request)
    {
        /* return response()->json(['name' => 'teste de retorno json'], 201);
        return redirect(route('user-profile', ['username' => 'Uriel David'])); */

        /* $this->validate($request, [
            'name' => 'required|exists:users',
            'age' => 'required|numeric|unique:users.age'
        ]);
        dd($request->all()); */
    }
}
