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


class ibadahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data['ibadah'] = Http::get('http://127.0.0.1:8070/api/ibadah');
        return view('layouts.formSearch.ibadah',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function details($id)
    {
        $data['ibadah'] = Http::get('http://127.0.0.1:8070/api/ibadah/'.$id);

        return view('layouts.forms.detailIbadah',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $minggu = DB::select('CALL getNamaMinggu()');
        $pendeta = DB::select('CALL getPendeta()');


        return view('layouts.forms.daftarIbadah',compact('minggu', 'pendeta'));
    }

    /**
     * Display the specified resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'id_jenis_minggu' => 'required',
            'tgl_ibadah' => 'required',
            'waktu_mulai' => 'required',
            'id_melayani' => 'required',
            'jumlah_pelayan' => 'required',
            'keterangan' => 'required',
            'nyanyian_1' => 'required',
            'votum' => 'required',
            'nyanyian_2' => 'required',
            'hukum_taurat' => 'required',
            'nyanyian_3' => 'required',
            'pengakuan_dosa' => 'required',
            'nyanyian_4' => 'required',
            'epistel' => 'required',
            'nyanyian_5' => 'required',
            'pengakuan_iman' => 'required',
            'nyanyian_6' => 'required',
            'khotbah' => 'required',
            'nyanyian_7' => 'required',
            'doa_penutup' => 'required',
        ]);

        $id_jenis_minggu = $request->input('id_jenis_minggu');
        $tgl_ibadah = $request->input('tgl_ibadah');
        $waktu_mulai = $request->input('waktu_mulai');
        $id_melayani = $request->input('id_melayani');
        $jumlah_pelayan = $request->input('jumlah_pelayan');
        $keterangan = $request->input('keterangan');
        $nyanyian_1 = $request->input('nyanyian_1');
        $votum = $request->input('votum');
        $nyanyian_2 = $request->input('nyanyian_2');
        $hukum_taurat = $request->input('hukum_taurat');
        $nyanyian_3 = $request->input('nyanyian_3');
        $pengakuan_dosa = $request->input('pengakuan_dosa');
        $nyanyian_4 = $request->input('nyanyian_4');
        $epistel = $request->input('epistel');
        $nyanyian_5 = $request->input('nyanyian_5');
        $pengakuan_iman = $request->input('pengakuan_iman');
        $nyanyian_6 = $request->input('nyanyian_6');
        $khotbah = $request->input('khotbah');
        $nyanyian_7 = $request->input('nyanyian_7');
        $doa_penutup = $request->input('doa_penutup');

        $response = Http::post('http://127.0.0.1:8070/api/storeIbadah', [
            'id_jenis_minggu' => $id_jenis_minggu,
            'tgl_ibadah' => $tgl_ibadah,
            'waktu_mulai' => $waktu_mulai,
            'id_melayani' => $id_melayani,
            'jumlah_pelayan' => $jumlah_pelayan,
            'keterangan' => $keterangan,
            'nyanyian_1' => $nyanyian_1,
            'votum' => $votum,
            'nyanyian_2' => $nyanyian_2,
            'hukum_taurat' => $hukum_taurat,
            'nyanyian_3' => $nyanyian_3,
            'pengakuan_dosa' => $pengakuan_dosa,
            'nyanyian_4' => $nyanyian_4,
            'epistel' => $epistel,
            'nyanyian_5' => $nyanyian_5,
            'pengakuan_iman' => $pengakuan_iman,
            'nyanyian_6' => $nyanyian_6,
            'khotbah' => $khotbah,
            'nyanyian_7' => $nyanyian_7,
            'doa_penutup' => $doa_penutup
        ]);

        if (!$response) {
        Alert::error('Tambah Daftar Ibadah', 'Tambah Daftar Ibadah Gagal');

            return back();
        }
        Alert::success('Tambah Daftar Ibadah', 'Tambah Daftar Ibadah Berhasil');

    return redirect()->route('ibadah');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['minggu'] = DB::select('CALL getNamaMinggu()');
        $data['pendeta'] = DB::select('CALL getPendeta()');
        $data['ibadah']  = Http::get('http://127.0.0.1:8070/api/ibadahEdit/'.$id);

        return view('layouts.forms.updateIbadah',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'id_jadwal_ibadah' => 'required',
            'id_jenis_minggu' => 'required',
            'tgl_ibadah' => 'required',
            'waktu_mulai' => 'required',
            'id_melayani' => 'required',
            'jumlah_pelayan' => 'required',
            'keterangan' => 'required',
            'nyanyian_1' => 'required',
            'votum' => 'required',
            'nyanyian_2' => 'required',
            'hukum_taurat' => 'required',
            'nyanyian_3' => 'required',
            'pengakuan_dosa' => 'required',
            'nyanyian_4' => 'required',
            'epistel' => 'required',
            'nyanyian_5' => 'required',
            'pengakuan_iman' => 'required',
            'nyanyian_6' => 'required',
            'khotbah' => 'required',
            'nyanyian_7' => 'required',
            'doa_penutup' => 'required',
        ]);

        $id_jadwal_ibadah = $request->input('id_jadwal_ibadah');
        $id_jenis_minggu = $request->input('id_jenis_minggu');
        $tgl_ibadah = $request->input('tgl_ibadah');
        $waktu_mulai = $request->input('waktu_mulai');
        $id_melayani = $request->input('id_melayani');
        $jumlah_pelayan = $request->input('jumlah_pelayan');
        $keterangan = $request->input('keterangan');
        $nyanyian_1 = $request->input('nyanyian_1');
        $votum = $request->input('votum');
        $nyanyian_2 = $request->input('nyanyian_2');
        $hukum_taurat = $request->input('hukum_taurat');
        $nyanyian_3 = $request->input('nyanyian_3');
        $pengakuan_dosa = $request->input('pengakuan_dosa');
        $nyanyian_4 = $request->input('nyanyian_4');
        $epistel = $request->input('epistel');
        $nyanyian_5 = $request->input('nyanyian_5');
        $pengakuan_iman = $request->input('pengakuan_iman');
        $nyanyian_6 = $request->input('nyanyian_6');
        $khotbah = $request->input('khotbah');
        $nyanyian_7 = $request->input('nyanyian_7');
        $doa_penutup = $request->input('doa_penutup');

        $response = Http::post('http://127.0.0.1:8070/api/updateIbadah', [
            'id_jadwal_ibadah' => $id_jadwal_ibadah,
            'id_jenis_minggu' => $id_jenis_minggu,
            'tgl_ibadah' => $tgl_ibadah,
            'waktu_mulai' => $waktu_mulai,
            'id_melayani' => $id_melayani,
            'jumlah_pelayan' => $jumlah_pelayan,
            'keterangan' => $keterangan,
            'nyanyian_1' => $nyanyian_1,
            'votum' => $votum,
            'nyanyian_2' => $nyanyian_2,
            'hukum_taurat' => $hukum_taurat,
            'nyanyian_3' => $nyanyian_3,
            'pengakuan_dosa' => $pengakuan_dosa,
            'nyanyian_4' => $nyanyian_4,
            'epistel' => $epistel,
            'nyanyian_5' => $nyanyian_5,
            'pengakuan_iman' => $pengakuan_iman,
            'nyanyian_6' => $nyanyian_6,
            'khotbah' => $khotbah,
            'nyanyian_7' => $nyanyian_7,
            'doa_penutup' => $doa_penutup
        ]);

        if (!$response) {
        Alert::error('Update Daftar Ibadah', 'Update Daftar Ibadah Gagal');

            return back();
        }
        Alert::success('Update Daftar Ibadah', 'Update Daftar Ibadah Berhasil');

    return redirect()->route('ibadah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data['ibadah'] = Http::get('http://127.0.0.1:8070/api/deleteIbadah/'.$id);
        if($data == null){
        Alert::error('Hapus Jadwal Ibadah', 'Hapus Jadwal Ibadah Gagal');
            // $failedMessage = Session::get('failed');
            return redirect()->route('ibadah');
        }else{
            Alert::success('Hapus Jadwal Ibadah', 'Hapus Jadwal Ibadah Berhasil');
            // $successMessage = Session::get('success');
            return redirect()->route('ibadah');
        }
    }
}
