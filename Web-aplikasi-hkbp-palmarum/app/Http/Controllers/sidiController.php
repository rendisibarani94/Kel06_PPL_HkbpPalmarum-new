<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use app\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;


class sidiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['rpp'] = Http::get('http://127.0.0.1:8070/api/sidi');

        return view('layouts.formSearch.sidi',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function details($id)
    {
        $data['sidi'] = Http::get('http://127.0.0.1:8070/api/sidi/'.$id);

        return view('layouts.forms.detailSidih',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('layouts.forms.daftarSidih');
    }

    /**
     * Display the specified resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nats_sidi' => 'required',
            'nama_ayah' => 'required',
            'nama_gereja_non_HKBP' => 'required',
            'nama_ibu' => 'required',
            'nama_pendeta_sidi' => 'required',
            'tanggal_lahir' => 'required',
            'tanggal_sidi' => 'required',
            'tempat_lahir' => 'required',
            'keterangan' => 'required',
        ]);

        $response = Http::post('http://127.0.0.1:8070/api/storeSidi', [
            'nama_lengkap' => $request->nama_lengkap,
                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'nats_sidi' => $request->nats_sidi,
                'nama_gereja_non_HKBP' => $request->nama_gereja_non_HKBP,
                'nama_pendeta_sidi' => $request->nama_pendeta_sidi,
                'keterangan' => $request->keterangan,
                'tanggal_sidi' => $request->tanggal_sidi
        ]);
        if (!$response) {
        Alert::error('Tambah Sidi', 'Tambah Sidi Gagal');
            return redirect()->back();
        // return redirect()->route('rpp');
        }
        Alert::success('Tambah Sidi', 'Tambah Sidi Berhasil');
        
        return redirect()->route('sidi');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['sidi']  = Http::get('http://127.0.0.1:8070/api/sidiEdit/'.$id);

        return view('layouts.forms.updateSidi',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $response = Http::post('http://127.0.0.1:8070/api/updateSidi', [
                'id_registrasi_sidi' => $request->id_registrasi_sidi,
                'nama_lengkap' => $request->nama_lengkap,
                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'nats_sidi' => $request->nats_sidi,
                'nama_gereja_non_HKBP' => $request->nama_gereja_non_HKBP,
                'nama_pendeta_sidi' => $request->nama_pendeta_sidi,
                'keterangan' => $request->keterangan,
                'tanggal_sidi' => $request->tanggal_sidi
        ]);
        if (!$response) {
        Alert::success('Update Sidi', 'Update Sidi Berhasil');
        
            return redirect()->back();
        // return redirect()->route('rpp');
        }
        Alert::success('Update Sidi', 'Update Sidi Berhasil');
        return redirect()->route('sidi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Http::get('http://127.0.0.1:8070/api/deleteSidi/'.$id);

        if($data == null){
            Alert::error('Hapus Sidi', 'Hapus Sidi Gagal');
            return redirect()->route('sidi');
            // $failedMessage = Session::get('failed');
            // return redirect()->route('daftarSidi', compact('failedMessage'));
        }else{
            Alert::success('Hapus Sidi', 'Hapus Sidi Berhasil');
            return redirect()->route('sidi');

            // $successMessage = Session::get('success');
            // return redirect()->route('sidi',compact('successMessage'));
        }
    }
}
