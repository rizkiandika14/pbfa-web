<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $title = 'Profile - Page';
        return view('login/login', compact('title'));
    }
}
