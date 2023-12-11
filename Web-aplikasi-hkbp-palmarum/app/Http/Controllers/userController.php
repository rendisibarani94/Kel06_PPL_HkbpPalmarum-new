<?php

namespace App\Http\Controllers;
// use Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
// use Alert;


class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jemaat['jemaats'] = Http::get('http://127.0.0.1:8070/api/jemaat')->collect();

        $data = array_merge($jemaat);

        return view('layouts.user_2.user_pendaftaran_martumpol', $data);
    }

    public function daftarMartumpol(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/daftarMartumpol', [
            'nama_gereja_laki' => $request->get('nama_gereja_laki'),
            'id_jemaat_laki' => $request->get('id_jemaat_laki'),
            'nama_ayah_laki' => $request->get('nama_ayah_laki'),
            'nama_ibu_laki' => $request->get('nama_ibu_laki'),
            'nama_gereja_perempuan' => $request->get('nama_gereja_perempuan'),
            'id_jemaat_perempuan' => $request->get('id_jemaat_perempuan'),
            'nama_ayah_perempuan' => $request->get('nama_ayah_perempuan'),
            'nama_ibu_perempuan' => $request->get('nama_ibu_perempuan'),
            'keterangan' => $request->get('keterangan'),
            'id_user' => $request->get('id_user'),
            // 'alamat' => $request->get('alamat'),
        ]);
    
        Alert::success('Martumpol', 'Registrasi Berhasil');
        
        if ($response->failed()) {
            Alert::error('Martumpol', 'Registrasi Gagal');
            return back()->withErrors(['message' => 'error when create Baptis data']);
        }
    
        return redirect()->route('martumpolUser');
    }

    public function index2()
    {
        return view('layouts.user_2.user_pendaftaran_baptis');
    }

    public function daftarBaptis(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/daftarBaptis', [
            'nama_lengkap' => $request->get('nama_lengkap'),
            'nama_ayah' => $request->get('nama_ayah'),
            'nama_ibu' => $request->get('nama_ibu'),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'alamat' => $request->get('alamat'),
            'keterangan' => $request->get('keterangan'),
            'id_user' => $request->get('id_user'),
        ]);

        if ($response->failed()) {
            Alert::error('Baptis', 'Registrasi Gagal');
            return back()->withErrors(['message' => 'error when create Baptis data']);
        }
        Alert::success('Baptis', 'Registrasi Berhasil');
        return redirect()->route('baptisUser');
    }

    public function index3()
    {
        return view('layouts.user_2.user_pendaftaran_jemaat');
    }

    public function daftarJemaat(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/daftarJemaat', [
            'nama_depan' => $request->get('nama_depan'),
            'nama_belakang' => $request->get('nama_belakang'),
            'gelar_depan' => $request->get('gelar_depan'),
            'gelar_belakang' => $request->get('gelar_belakang'),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
            'gol_darah' => $request->get('gol_darah'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'id_hub_keluarga' => $request->get('id_hub_keluarga'),
            // 'id_status_pernikahan' => $request->get('id_status_pernikahan'),
            'id_pendidikan' => $request->get('id_pendidikan'),
            'id_bidang_pendidikan' => $request->get('id_bidang_pendidikan'),
            'id_pekerjaan' => $request->get('id_pekerjaan'),
            'nama_pekerjaan_lain' => $request->get('nama_pekerjaan_lain'),
            'no_telepon' => $request->get('no_telepon'),
            'alamat' => $request->get('alamat'),
            'keterangan' => $request->get('keterangan'),
            'id_user' => $request->get('id_user'),
        ]);
    
        if ($response->failed()) {
            Alert::error('Baptis', 'Registrasi Gagal');
            return back()->withErrors(['message' => 'error when create Baptis data']);
        }
    
        Alert::success('Baptis', 'Registrasi Berhasil');
        return redirect()->route('jemaatUser');
    }

    public function index4()
    {
        $jemaat['jemaats'] = Http::get('http://127.0.0.1:8070/api/jemaat')->collect();

        $data = array_merge($jemaat);

        return view('layouts.user_2.user_pendaftaran_pernikahan', $data);
    }

    public function daftarNikah(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/daftarNikah', [
            'tgl_martumpol' => $request->get('tgl_martumpol'),
            'nama_gereja_martumpol' => $request->get('nama_gereja_martumpol'),
            'tgl_pemberkatan' => $request->get('tgl_pemberkatan'),
            'nama_gereja_pemberkatan' => $request->get('nama_gereja_pemberkatan'),
            'nama_gereja_laki' => $request->get('nama_gereja_laki'),
            'nama_lengkap_laki' => $request->get('nama_lengkap_laki'),
            'nama_lengkap_perempuan' => $request->get('nama_lengkap_perempuan'),
            'nama_ayah_laki' => $request->get('nama_ayah_laki'),
            'nama_ibu_laki' => $request->get('nama_ibu_laki'),
            'nama_gereja_perempuan' => $request->get('nama_gereja_perempuan'),
            'nama_ayah_perempuan' => $request->get('nama_ayah_perempuan'),
            'nama_ibu_perempuan' => $request->get('nama_ibu_perempuan'),
            'keterangan' => $request->get('keterangan'),
            'id_user' => $request->get('id_user'),
        ]);

        Alert::success('Nikah', 'Registrasi Berhasil');
    
        if ($response->failed()) {
            Alert::error('Nikah', 'Registrasi Gagal');
            return back()->withErrors(['message' => 'error when create Baptis data']);
        }
    
        return redirect()->route('nikahUser');
    }

    public function index5()
    {
        $namKeluarga['namKeluargas'] = Http::get('http://127.0.0.1:8070/api/namKeluarga')->collect();
        $jemaat['jemaats'] = Http::get('http://127.0.0.1:8070/api/jemaat')->collect();

        $data = array_merge($namKeluarga, $jemaat);

        return view('layouts.user_2.user_pindah', $namKeluarga, $data);
    }

    public function daftarPindah(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/daftarPindah', [
            'id_registrasi' => $request->get('id_registrasi'),
            'id_jemaat' => $request->get('id_jemaat'),
            'tgl_pindah' => $request->get('tgl_pindah'),
            'nama_gereja' => $request->get('nama_gereja'),
            'keterangan' => $request->get('keterangan'),
            'id_user' => $request->get('id_user'),
        ]);

        Alert::success('Jemaat Pindah', 'Registrasi Berhasil');
    
        if ($response->failed()) {
            Alert::error('Jemaat Pindah', 'Registrasi Gagal');
            return back()->withErrors(['message' => 'error when create Baptis data']);
        }
    
        return redirect()->route('pindahUser');
    }

    public function index6()
    {
        $gereja['gerejas'] = Http::get('http://127.0.0.1:8070/api/gereja')->collect();
        $keluarga['keluargas'] = Http::get('http://127.0.0.1:8070/api/keluarga')->collect();

        $data = array_merge($gereja, $keluarga);

        return view('layouts.user_2.user_pendaftaran_naik_sidi', $data);
    }

    public function daftarSidi(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/daftarSidi', [
            'nama_lengkap' => $request->get('nama_lengkap'),
            'nama_ayah' => $request->get('nama_ayah'),
            'nama_ibu' => $request->get('nama_ibu'),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
            'id_gereja_sidi' => $request->get('id_gereja_sidi'),
            'nama_gereja_non_hkbp' => $request->get('nama_gereja_non_hkbp'),
            'id_hub_keluarga' => $request->get('id_hub_keluarga'),
            'keterangan' => $request->get('keterangan'),
            'id_user' => $request->get('id_user'),
            // 'alamat' => $request->get('alamat'),
        ]);

        Alert::success('Sidi', 'Registrasi Berhasil');
    
        if ($response->failed()) {
            Alert::error('Sidi', 'Registrasi Gagal');
            return back()->withErrors(['message' => 'error when create Baptis data']);
        }
    
        return redirect()->route('sidiUser');
    }

    public function index7()
    {
        $pelayan['pelayans'] = Http::get('http://127.0.0.1:8070/api/pelayan')->collect();
        $jadwal['jadwals'] = Http::get('http://127.0.0.1:8070/api/jadwal')->collect();
        $kegiatan['kegiatans'] = Http::get('http://127.0.0.1:8070/api/kegiatan')->collect();
        $pemasukan['pemasukans'] = Http::get('http://127.0.0.1:8070/api/pemasukan')->collect();
        $pengeluaran['pengeluarans'] = Http::get('http://127.0.0.1:8070/api/pengeluaran')->collect();

        $data = array_merge($pelayan, $jadwal, $kegiatan, $pemasukan, $pengeluaran);

        return view('layouts.user_2.userHome', $data);
    }
    /**
     * Show the form for creating a new resource.
     */

     public function keluarga()
     {
        $keluarga['keluargas'] = Http::get('http://127.0.0.1:8070/api/keluarga')->collect();
        $pendidikan['pendidikans'] = Http::get('http://127.0.0.1:8070/api/pendidikan')->collect();
        $bidangPendidikan['bidangPendidikans'] = Http::get('http://127.0.0.1:8070/api/BidangPendidikan')->collect();
        $pekerjaan['pekerjaans'] = Http::get('http://127.0.0.1:8070/api/pekerjaan')->collect();

        $data = array_merge($keluarga, $pendidikan, $bidangPendidikan, $pekerjaan);

        return view('layouts.user_2.user_pendaftaran_jemaat', $data);
     }
}
