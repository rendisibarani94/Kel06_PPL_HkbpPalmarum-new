<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use app\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class jemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['jemaat'] = Http::get('http://127.0.0.1:8070/api/RegistrasiJemaat');


        return view('layouts.formSearch.jemaat', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function details($id)
    {
        $data['jemaat'] = Http::get('http://127.0.0.1:8070/api/RegistrasiJemaat/'.$id);

        return view('layouts.forms.detailJemaat',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $registrasi = DB::select('CALL getRegistrasiJemaat()');
        $pendidikan = DB::select('CALL getPendidikan()');
        $pekerjaan = DB::select('CALL getPekerjaan()');
        $bpendidikan = DB::select('CALL getBidangPendidikan()');
        $keluarga = DB::select('CALL getHubunganKeluarga()');


        return view('layouts.forms.daftarJemaat', compact('registrasi', 'pendidikan', 'pekerjaan', 'bpendidikan', 'keluarga'));
    }

    /**
     * Display the specified resource.
     */
    public function create(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/storeRegistrasiJemaat', [
            'id_registrasi' => $request->id_registrasi,
                'nama_depan' => $request->nama_depan,
                'nama_belakang' => $request->nama_belakang,
                'gelar_depan' => $request->gelar_depan,
                'gelar_belakang' => $request->gelar_belakang,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'id_hub_keluarga' => $request->id_hub_keluarga,
                'id_pendidikan' => $request->id_pendidikan,
                'id_bidang_pendidikan' => $request->id_bidang_pendidikan,
                // 'id_bidang_pendidikan_lain' => $request->id_bidang_pendidikan_lain,
                'id_pekerjaan' => $request->id_pekerjaan,
                'nama_pekerjaan_lain' => $request->nama_pekerjaan_lain,
                'gol_darah' => $request->gol_darah,
                'alamat' => $request->alamat,
                'no_telepon' => $request->no_telepon,
                'keterangan'=> $request->keterangan,
        ]);

        if (!$response) {
        Alert::error('Tambah Jemaat', 'Tambah Jemaat Gagal');
        return back();
        }
        Alert::success('Tambah Jemaat', 'Tambah Jemaat Berhasil');
        return redirect()->route('jemaat');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['registrasi'] = DB::select('CALL getRegistrasiJemaat()');
        $data['pendidikan'] = DB::select('CALL getPendidikan()');
        $data['pekerjaan'] = DB::select('CALL getPekerjaan()');
        $data['bpendidikan'] = DB::select('CALL getBidangPendidikan()');
        $data['keluarga'] = DB::select('CALL getHubunganKeluarga()');

        $data['jemaat']  = Http::get('http://127.0.0.1:8070/api/RegistrasiJemaatEdit/'.$id);


        return view('layouts.forms.updateJemaat',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/updateRegistrasiJemaat', [
            'id_jemaat' => $request->id_jemaat,
            'id_registrasi' => $request->id_registrasi,
                'nama_depan' => $request->nama_depan,
                'nama_belakang' => $request->nama_belakang,
                'gelar_depan' => $request->gelar_depan,
                'gelar_belakang' => $request->gelar_belakang,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'id_hub_keluarga' => $request->id_hub_keluarga,
                'id_pendidikan' => $request->id_pendidikan,
                'id_bidang_pendidikan' => $request->id_bidang_pendidikan,
                // 'id_bidang_pendidikan_lain' => $request->id_bidang_pendidikan_lain,
                'id_pekerjaan' => $request->id_pekerjaan,
                'nama_pekerjaan_lain' => $request->nama_pekerjaan_lain,
                'gol_darah' => $request->gol_darah,
                'alamat' => $request->alamat,
                'no_telepon' => $request->no_telepon,
                'keterangan'=> $request->keterangan,
        ]);

        if (!$response) {
            Alert::error('Update Jemaat', 'Update Jemaat Gagal');

            return back();
        }
        Alert::success('Update Jemaat', 'Update Jemaat Berhasil');

    return redirect()->route('jemaat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Http::get('http://127.0.0.1:8070/api/deleteRegistrasiJemaat/'.$id);

        if($data == null){
        
            Alert::error('Hapus Jemaat', 'Hapus Jemaat Gagal');
            // $failedMessage = Session::get('failed');
            return redirect()->route('jemaat');
        }else{
            Alert::success('Hapus Jemaat', 'Hapus Jemaat Berhasil');
            // $successMessage = Session::get('success');
            return redirect()->route('jemaat');
        }
    }
}
