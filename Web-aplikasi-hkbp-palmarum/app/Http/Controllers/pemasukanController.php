<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.forms.pemasukan');
    }

    public function index2()
    {
        return view('layouts.forms.pemasukanLelang');
    }

    public function index3()
    {
        return view('layouts.forms.pemasukanLelang2');
    }

    public function index4()
    {
        return view('layouts.forms.pemasukanPembangunan');
    }

    public function index5()
    {
        return view('layouts.forms.pemasukanPengembanganPelayanan');
    }

    public function index6()
    {
        return view('layouts.forms.pemasukanPengembanganPelayanan2');
    }

    public function index7()
    {
        return view('layouts.forms.pemasukanPersembahan');
    }

    public function index8()
    {
        return view('layouts.forms.pemasukanPersembahan2');
    }

    public function index9()
    {
        return view('layouts.forms.pemasukanPersembahanKeluarga2');
    }

    public function index10()
    {
        return view('layouts.forms.pemasukanSumbangan');
    }

    public function index11()
    {
        return view('layouts.forms.pemasukanSumbangan2');
    }

    public function index12()
    {
        return view('layouts.forms.pemasukanPembangunan2');
    }

    public function index13()
    {
        return view('layouts.forms.pemasukanUcapanSyukur');
    }

    public function index14()
    {
        return view('layouts.forms.pemasukanUcapanSyukur2');
    }

    public function index15()
    {
        return view('layouts.forms.kategoriPemasukan');
    }

    public function index16()
    {
        return view('layouts.forms.kategoriPemasukan2');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
