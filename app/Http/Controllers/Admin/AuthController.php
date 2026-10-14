<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;


class AuthController extends Controller
{
    public function showLoginForm(): View{
        return view('admin.auth.login');
    }
    public function login(Request $request):RedirectResponse
    {
          $credentials = $request->validate([
            'email'=>['required' , 'email'],
            'passwoard'=>['required','string'],
          ]);
    }
}
