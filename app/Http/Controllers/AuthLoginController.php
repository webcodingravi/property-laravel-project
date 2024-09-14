<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthLoginController extends Controller
{
   public function register() {
      return view('Frontend.Register.register');
   }

   public function login() {
    return view('Frontend.Login.login');

   }
}
