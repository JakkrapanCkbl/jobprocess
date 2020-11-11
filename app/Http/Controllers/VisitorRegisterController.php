<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;


class VisitorRegisterController extends Controller
{
    public function visitorRegister(){
    	$user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'user_type' => request('user_type'),
            'password' => Hash::make(request('password'))
        ]);
        return redirect()->to('login');
    }
}
