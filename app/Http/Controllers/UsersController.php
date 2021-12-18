<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\models\User;

class UsersController extends Controller
{

    public function register() {
        return view('admin.register');
    }

    public function store(RegistrationRequest $request) {
        
        // dd($request->validated());
        // $request->validate([
        //     'first_name' => ['required'],
        //     'last_name' => ['required'],
        //     'email' => ['required'],
        //     'password' => ['required'],
        //     'confirm_password' => ['required'],
        // ]);

        dd($request->all());


    }
}
