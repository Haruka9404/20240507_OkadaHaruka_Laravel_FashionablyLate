<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;
use App\Http\Requests\AuthorRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.admin');
    }

    public function register(Request $request)
    {
        $form = $request->all();
        User::create($form);
        return view('login');
    }

    public function admin()
    {
        return view('auth/admin');
    }

    public function index()
    {
        return view('admin');
    }

}
