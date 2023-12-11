<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use app\Helpers\ApiFormatter;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class martumpolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['martumpol'] = Http::get('http://127.0.0.1:8070/api/RegistrasiPernikahan');

        return view('layouts.formSearch.martumpol',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function detail($id)
    {
        $data['martumpol'] = Http::get('http://127.0.0.1:8070/api/RegistrasiPernikahan/'.$id);

        return view('layouts.forms.detailMartumpol',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $jemaat = DB::select('CALL getJemaat()');
        $gereja = DB::select('CALL getGereja()');

        return view('layouts.forms.daftarMartumpol', compact('jemaat', 'gereja'));
    }

    /**
     * Display the specified resource.
     */
    public function create(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/storeRegistrasiPernikahan', [
            'id_gereja_martumpol'=> $request->id_gereja_martumpol,
                'tgl_martumpol'=> $request->tgl_martumpol, 
                'tgl_warta_martumpol'=> $request->tgl_warta_martumpol, 
                'nama_gereja_martumpol'=> $request->nama_gereja_martumpol, 
                'nomor_surat_martumpol'=> $request->nomor_surat_martumpol, 
                'nama_pendeta_martumpol'=> $request->nama_pendeta_martumpol, 
                'id_gereja_pemberkatan'=> $request->id_gereja_pemberkatan, 
                'tgl_pemberkatan'=> $request->tgl_pemberkatan, 
                'tgl_warta_pemberkatan'=> $request->tgl_warta_pemberkatan, 
                'nama_gereja_pemberkatan'=> $request->nama_gereja_pemberkatan, 
                'nomor_surat_pemberkatan'=> $request->nomor_surat_pemberkatan, 
                'nama_pendeta_pemberkatan'=> $request->nama_pendeta_pemberkatan, 
                'keterangan'=> $request->keterangan, 
                'nama_lengkap_laki'=> $request->nama_lengkap_laki, 
                'id_jemaat_laki'=> $request->id_jemaat_laki, 
                'id_gereja_laki'=> $request->id_gereja_laki, 
                'nama_gereja_laki'=> $request->nama_gereja_laki, 
                'nama_ayah_laki'=> $request->nama_ayah_laki, 
                'nama_ibu_laki'=> $request->nama_ibu_laki, 
                'nama_lengkap_perempuan'=> $request->nama_lengkap_perempuan, 
                'id_jemaat_perempuan'=> $request->id_jemaat_perempuan, 
                'id_gereja_perempuan'=> $request->id_gereja_perempuan, 
                'nama_gereja_perempuan'=> $request->nama_gereja_perempuan, 
                'nama_ayah_perempuan'=> $request->nama_ayah_perempuan, 
                'nama_ibu_perempuan'=> $request->nama_ibu_perempuan,
        ]);
        if (!$response) {
            return back();
            Alert::error('Tambah Martumpol', 'Tambah Martumpol Gagal');
            // return redirect()->route('rpp');
        }
        
            Alert::success('Tambah Martumpol', 'Tambah Martumpol Berhasil');
            return redirect()->route('martumpol');
    }

    /**
     * Show the form for editing the specified resource.
     */
        
    public function edit($id)
    {
        $data['jemaat'] = DB::select('CALL getJemaat()');
        $data['gereja'] = DB::select('CALL getGereja()');
        $data['martumpol'] = Http::get('http://127.0.0.1:8070/api/RegistrasiPernikahan/'.$id);
        return view('layouts.forms.updateMartumpol',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/updateRegistrasiPernikahan', [
            'id_registrasi_nikah'=> $request->id_registrasi_nikah,
            'id_gereja_martumpol'=> $request->id_gereja_martumpol,
                'tgl_martumpol'=> $request->tgl_martumpol, 
                'tgl_warta_martumpol'=> $request->tgl_warta_martumpol, 
                'nama_gereja_martumpol'=> $request->nama_gereja_martumpol, 
                'nomor_surat_martumpol'=> $request->nomor_surat_martumpol, 
                'nama_pendeta_martumpol'=> $request->nama_pendeta_martumpol, 
                'id_gereja_pemberkatan'=> $request->id_gereja_pemberkatan, 
                'tgl_pemberkatan'=> $request->tgl_pemberkatan, 
                'tgl_warta_pemberkatan'=> $request->tgl_warta_pemberkatan, 
                'nama_gereja_pemberkatan'=> $request->nama_gereja_pemberkatan, 
                'nomor_surat_pemberkatan'=> $request->nomor_surat_pemberkatan, 
                'nama_pendeta_pemberkatan'=> $request->nama_pendeta_pemberkatan, 
                'keterangan'=> $request->keterangan, 
                'nama_lengkap_laki'=> $request->nama_lengkap_laki, 
                'id_jemaat_laki'=> $request->id_jemaat_laki, 
                'id_gereja_laki'=> $request->id_gereja_laki, 
                'nama_gereja_laki'=> $request->nama_gereja_laki, 
                'nama_ayah_laki'=> $request->nama_ayah_laki, 
                'nama_ibu_laki'=> $request->nama_ibu_laki, 
                'nama_lengkap_perempuan'=> $request->nama_lengkap_perempuan, 
                'id_jemaat_perempuan'=> $request->id_jemaat_perempuan, 
                'id_gereja_perempuan'=> $request->id_gereja_perempuan, 
                'nama_gereja_perempuan'=> $request->nama_gereja_perempuan, 
                'nama_ayah_perempuan'=> $request->nama_ayah_perempuan, 
                'nama_ibu_perempuan'=> $request->nama_ibu_perempuan,
        ]);
        if (!$response) {
            return back();
            Alert::error('Update Martumpol', 'Update Martumpol Gagal');
            // return redirect()->route('rpp');
        }
        
            Alert::success('Update Martumpol', 'Update Martumpol Berhasil');
            return redirect()->route('martumpol');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Http::get('http://127.0.0.1:8070/api/deleteRegistrasiPernikahan/'.$id);

        if($data == null){
            // $failedMessage = Session::get('failed');
            Alert::error('Hapus Martumpol', 'Hapus Martumpol Gagal');
            return redirect()->route('martumpol');
        }else{
            // $successMessage = Session::get('success');
            Alert::success('Hapus Martumpol', 'Hapus Martumpol Berhasil');
            return redirect()->route('martumpol');
        }
    }
}
