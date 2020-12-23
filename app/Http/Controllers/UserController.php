<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function show()
    {
        return view('auth/register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validate(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  Request $request
     * @return User
     */
    protected function create(Request $request)
    {

        $userData = [];

        $userData['name'] = $request->get('name');
        $userData['email'] = $request->get('email');
        $userData['password'] = $request->get('password');

        $this->validate($userData, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create($userData);

        auth()->login($user);

        return redirect()->to('home');
    }
}
