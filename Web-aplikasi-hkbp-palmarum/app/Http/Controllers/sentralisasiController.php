<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class sentralisasiController extends Controller
{
    public function index()
    {
        return view('layouts.forms.setSentralisasi');
    }

    public function index2()
    {
        // Get the sentralisasis data from the API
        $sentralisasi['sentralisasis'] = Http::get('http://127.0.0.1:8070/api/setSentralisasi')->collect();

        $data = array_merge($sentralisasi);

        return view('layouts.forms.detailSentralisasi', $data);
    }

    public function create(Request $req)    
    {
        // Validate the request data
        // $req->validate([
        //     'persentasi_sentralisasi' => 'required',
        //     'keterangan' => 'required',
        // ]);

        // Get the input values
        // $persentasi_sentralisasi = $req->input('persentasi_sentralisasi');
        // $keterangan = $req->input('keterangan');

        // Send a POST request to create the sentralisasi
        $res = Http::post('http://127.0.0.1:8070/api/storeSentralisasi', [
            'persentasi_sentralisasi' => $req->get('persentasi_sentralisasi'),
            'keterangan' => $req->get('keterangan'),
        ]);

        // Check if the request was successful
        if (!$res->failed()) {
            return back()->withErrors(['message' => 'Error when creating RPP']);
        }

        return redirect()->route('detailSentralisasi');
    }

    public function edit($id)
{
    // Get the sentralisasis data from the API
    $sentralisasi = Http::get('http://127.0.0.1:8070/api/setSentralisasi/'.$id)->collect();
    // dd();

    return view('layouts.forms.editSentralisasi', ['data' => json_decode($sentralisasi)->data[0] ]);
}


    public function update(Request $req, $id)    
    {
        // dd($req->all());
        // Send a PUT request to update the sentralisasi
        $res = Http::put('http://127.0.0.1:8070/api/ubahSentralisasi/'.$id, [
            'persentasi_sentralisasi' => $req->input('persentasi_sentralisasi'),
            'keterangan' => $req->input('keterangan'),
        ]);

        // dd($res);
        
        // Check if the request was successful
        if (!$res->failed()) {
            return back()->withErrors(['message' => 'Error when updating sentralisasi']);
        }

        return redirect()->route('detailSentralisasi');
    }

    public function destroy($id){
        // Session::flash('success', 'Your data has been successfully deleted.');
        // Session::flash('failed', 'Your data was failed to delete.');
        // Send a DELETE request to delete the sentralisasi
        $data = Http::delete('http://127.0.0.1:8070/api/setSentralisasi/'.$id);

        if($data['code'] == "400"){
            $failedMessage = Session::get('failed');
            return redirect()->route('detailSentralisasi', compact('failedMessage'));
        }else{
            $successMessage = Session::get('success');
            return redirect()->route('detailSentralisasi',compact('successMessage'));
        }
    }
}
