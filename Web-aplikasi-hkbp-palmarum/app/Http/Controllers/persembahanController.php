<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class persembahanController extends Controller
{
    public function index()
    {
        return view('layouts.forms.persembahanIbadah');
    }

    public function index2()
    {
        return view('layouts.forms.persembahanJemaat');
    }

}
