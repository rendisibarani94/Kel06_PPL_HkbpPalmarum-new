<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use app\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class pernikahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['nikah'] = Http::get('http://127.0.0.1:8070/api/nikah');


        return view('layouts.formSearch.pernikahan',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function details($id)
    {
        $data['nikah'] = Http::get('http://127.0.0.1:8070/api/nikah/'.$id);

        return view('layouts.forms.detailPernikahan',$data);
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $nikahan = DB::select('CALL getRegistrasiNikah()');
        $gereja = DB::select('CALL getGereja()');
        


        return view('layouts.forms.daftarPernikahan', compact('nikahan', 'gereja'));
    }

    /**
     * Display the specified resource.
     */
    public function create(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/storeNikah', [
            'id_registrasi_pernikahan' => $request->id_registrasi_pernikahan,
            'tgl_pernikahan' => $request->tgl_pernikahan,
            'nats_pernikahan' => $request->nats_pernikahan,
            'id_gereja_nikah' => $request->id_gereja_nikah,
            'nama_gereja_non_HKBP' =>$request->nama_gereja_non_HKBP,
            'nama_pendeta' => $request->nama_pendeta,
            'keterangan' => $request->keterangan,
        ]);
        if (!$response) {
            Alert::error('Tambah pernikhan', 'Tambah pernikhan Gagal');
            return back();
        // return redirect()->route('rpp');
        }
        
            Alert::success('Tambah pernikhan', 'Tambah pernikhan Berhasil');
            return redirect()->route('pernikahan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['nikahan'] = DB::select('CALL getRegistrasiNikah()');
        $data['gereja'] = DB::select('CALL getGereja()');
        $data['nikah'] = Http::get('http://127.0.0.1:8070/api/nikahEdit/'.$id);

        return view('layouts.forms.updatePernikahan', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/updateNikah', [
            'id_pernikahan' => $request->id_pernikahan,
            'id_registrasi_pernikahan' => $request->id_registrasi_pernikahan,
            'tgl_pernikahan' => $request->tgl_pernikahan,
            'nats_pernikahan' => $request->nats_pernikahan,
            'id_gereja_nikah' => $request->id_gereja_nikah,
            'nama_gereja_non_HKBP' =>$request->nama_gereja_non_HKBP,
            'nama_pendeta' => $request->nama_pendeta,
            'keterangan' => $request->keterangan,
        ]);
        if (!$response) {
            Alert::error('Update pernikhan', 'Update pernikhan Gagal');
            return back();
        // return redirect()->route('rpp');
        }
        
            Alert::success('Update pernikhan', 'Update pernikhan Berhasil');
            return redirect()->route('pernikahan');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Http::get('http://127.0.0.1:8070/api/deleteNikah/'.$id);

        if($data == null){
            Alert::error('Hapus Pernikahan', 'Hapus Pernikahan Gagal');
            // $failedMessage = Session::get('failed');
            return redirect()->route('pernikahan');
        }else{
            Alert::success('Hapus Pernikahan', 'Hapus Pernikahan Berhasil');
            // $successMessage = Session::get('success');
            return redirect()->route('pernikahan');
        }
    }
}
