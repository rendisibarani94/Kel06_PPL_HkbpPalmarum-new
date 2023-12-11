<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transaksiController extends Controller
{
    public function index()
    {
        return view('layouts.forms.headTransaksi');
    }

    public function index2()
    {
        return view('layouts.forms.detailHeadTransaksi');
    }
    public function index3()
    {
        return view('layouts.forms.detailTransaksi');
    }
    public function index4()
    {
        return view('layouts.forms.headTransaksiDetail');
    }
}
