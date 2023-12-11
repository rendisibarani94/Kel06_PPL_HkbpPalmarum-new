<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class anggaranController extends Controller
{
    public function index()
    {
        return view('layouts.forms.kategoriMataAnggaran');
    }

    public function index2()
    {
        return view('layouts.forms.detailKategoriMataAnggaran');
    }
    public function index3()
    {
        return view('layouts.forms.mataAnggaran');
    }
    public function index4()
    {
        return view('layouts.forms.detailMataAnggaran');
    }
}
