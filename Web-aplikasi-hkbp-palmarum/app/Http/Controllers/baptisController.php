<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use app\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class baptisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['baptis'] = Http::get('http://127.0.0.1:8070/api/baptis');

        return view('layouts.formSearch.baptis',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function details($id)
    {
        $data['baptis'] = Http::get('http://127.0.0.1:8070/api/baptis/'.$id);

        return view('layouts.forms.detailBaptis',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $pendeta = DB::select('CALL getPendeta()');
        // $data['pendeta'] = ApiFormatter::createApi('200', 'Success', $pendeta);

        return view('layouts.forms.daftarBaptis', compact('pendeta'));
    }
    public function edit($id)
    {
        $data['pendeta'] = DB::select('CALL getPendeta()');
        $data['baptis']  = Http::get('http://127.0.0.1:8070/api/baptisEdit/'.$id);
        return view('layouts.forms.updateBaptis',$data);
    }

    /**
     * Display the specified resource.
     */
    public function create(Request $request)
    {

        $response = Http::post('http://127.0.0.1:8070/api/storeBaptis', [
            'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'nama_lengkap' => $request->nama_lengkap,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'tanggal_baptis' => $request->tanggal_baptis,
                'jenis_kelamin' => $request->jenis_kelamin,
                'id_pendeta' => $request->id_pendeta,
                'keterangan' => $request->keterangan,
        ]);

        if (!$response) {
            Alert::error('Tambah Baptis', 'Tambah Baptis Gagal');
            return back();
        }
            Alert::success('Tambah Baptis', 'Tambah Baptis Berhasil');
            return redirect()->route('baptis');
    }

    /**
     * Show the form for editing the specified resource.
     */
  

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $response = Http::post('http://127.0.0.1:8070/api/updateBaptis', [
                'id_registrasi_baptis' => $request->id_registrasi_baptis,
                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'nama_lengkap' => $request->nama_lengkap,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
                'tanggal_baptis' => $request->tanggal_baptis,
                'jenis_kelamin' => $request->jenis_kelamin,
                'id_pendeta' => $request->id_pendeta,
                'keterangan' => $request->keterangan,
        ]);

        if (!$response) {
            Alert::error('Update Baptis', 'Update Baptis Gagal');
            return back();
        }
            Alert::success('Update Baptis', 'Update Baptis Berhasil');
            return redirect()->route('baptis');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Http::get('http://127.0.0.1:8070/api/deleteBaptis/'.$id);

        if($data == null){
            // $failedMessage = Session::get('failed');
            
            Alert::error('Hapus Baptis', 'Hapus Baptis Gagal');
            return redirect()->route('baptis');
        }else{
            // $successMessage = Session::get('success');
            Alert::success('Hapus Baptis', 'Hapus Baptis Berhasil');
            return redirect()->route('baptis');
        }
    }
}
