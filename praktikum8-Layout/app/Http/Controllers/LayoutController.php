<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function admin()
    {
        return view('layouts.admin');
    }

    public function user()
    {
        return view('layouts.user');
    }
}
