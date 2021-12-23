<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;

class UsersController extends Controller
{

    public function getMeProfile()
    {
        $username = 'teste';
        return view('users', compact('username'));
    }

    public function getProfile(string $username)
    {
        return view('users', compact('username'));
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
