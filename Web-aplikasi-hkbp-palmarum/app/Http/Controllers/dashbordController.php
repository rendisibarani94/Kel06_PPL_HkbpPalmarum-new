<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashbordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

$results1 = DB::select('CALL getJemaatCount()');
$results2= DB::select('CALL getPelayanCount()');
$results3 = DB::select('CALL getBaptisYear()');
$results4 = DB::select('CALL getSidiYear()');
$results5 = DB::select('CALL getLakiJemaat()');
$results6 = DB::select('CALL getJemaatPerempuan()');
$results7 = DB::select('CALL getKeluarga()');
$results8 = DB::select('CALL getPernikahanYear()');
// $result3 = 
        return view('layouts.formSearch.dashbord')->with(compact(
            'results1',
            'results2',
            'results3',
            'results4',
            'results5',
            'results6',
            'results7',
            'results8'
        ));
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
