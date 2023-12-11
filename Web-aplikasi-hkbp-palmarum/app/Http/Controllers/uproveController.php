<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use app\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class uproveController extends Controller
{

    public function baptis()
    {
        $baptis['baptiss'] = Http::get('http://127.0.0.1:8070/api/baptis')->collect();

        $data = array_merge($baptis);

        return view('layouts.formSearch.uproveBaptis', $data);
    }

    public function userUproveBaptis()
    {
        $user = Auth::user();

        $response = Http::get('http://127.0.0.1:8070/api/userBaptis');

        $baptis['userBaptiss'] = $response->collect()->where('id_user', $user->id);

        $data = array_merge($baptis);

        return view('layouts.user_2.user_uprove_baptis', $data);
    }


    public function uproveBaptis1($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uproveBaptis1/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Uprove Baptis', 'Uprove Baptis Berhasil');
                return redirect()->route('aksesUproveBaptis');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function uproveBaptis2($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uproveBaptis2/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Tolak Uprove Baptis', 'Tolak Uprove Baptis Berhasil');
                return redirect()->route('aksesUproveBaptis');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function prvJemaat()
    {
        $jemaat['prvJemaats'] = Http::get('http://127.0.0.1:8070/api/prvJemaat')->collect();

        $data = array_merge($jemaat);

        return view('layouts.formSearch.uproveJemaat', $data);
    }

    public function userUproveJemaat()
    {
        $user = Auth::user();

        $response = Http::get('http://127.0.0.1:8070/api/userPrvJemaat');

        $jemaat['userJemaats'] = $response->collect()->where('id_user', $user->id);

        $data = array_merge($jemaat);

        return view('layouts.user_2.user_uprove_jemaat', $data);
    }

    public function uproveJemaat1($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uproveJemaat1/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Uprove Jemaat', 'Uprove Jemaat Berhasil');
                return redirect()->route('aksesUproveJemaat');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function uproveJemaat2($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uproveJemaat2/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Tolak Uprove Jemaat', 'Tolak Uprove Jemaat Berhasil');
                return redirect()->route('aksesUproveJemaat');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function martumpol()
    {
        $martumpol['martumpols'] = Http::get('http://127.0.0.1:8070/api/martumpol')->collect();

        $data = array_merge($martumpol);

        return view('layouts.formSearch.uproveMartumpol', $data);
    }

    public function userUproveMartumpol()
    {
        $user = Auth::user();

        $response = Http::get('http://127.0.0.1:8070/api/userMartumpol');

        $martumpol['userMartumpols'] = $response->collect()->where('id_user', $user->id);

        $data = array_merge($martumpol);

        return view('layouts.user_2.user_uprove_martumpol', $data);
    }

    public function uproveMartumpol1($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uproveMartumpol1/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Uprove Martumpol', 'Uprove Martumpol Berhasil');
                return redirect()->route('aksesUproveMartumpol');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function uproveMartumpol2($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uproveMartumpol2/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Tolak Uprove Martumpol', 'Tolak Uprove Martumpol Berhasil');
                return redirect()->route('aksesUproveMartumpol');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function pernikahan()
    {
        $nikah['nikahs'] = Http::get('http://127.0.0.1:8070/api/nikah')->collect();

        $data = array_merge($nikah);

        return view('layouts.formSearch.uprovePernikahan', $data);
    }

    public function userUprovePernikahan()
    {
        $user = Auth::user();

        $response = Http::get('http://127.0.0.1:8070/api/userNikah');

        $nikah['userNikahs'] = $response->collect()->where('id_user', $user->id);

        $data = array_merge($nikah);

        return view('layouts.user_2.user_uprove_nikah', $data);
    }

    public function uprovePernikahan1($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uproveNikah1/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Uprove Pernikahan', 'Uprove Pernikahan Berhasil');
                return redirect()->route('aksesUprovePernikahan');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function uprovePernikahan2($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uproveNikah2/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Tolak Uprove Pernikahan', 'Tolak Uprove Pernikahan Berhasil');
                return redirect()->route('aksesUprovePernikahan');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function pindah()
    {
        $pindah['pindahs'] = Http::get('http://127.0.0.1:8070/api/pindah')->collect();

        $data = array_merge($pindah);

        return view('layouts.formSearch.uprovePindah', $data);
    }

    public function userUprovePindah()
    {
        $user = Auth::user();

        $response = Http::get('http://127.0.0.1:8070/api/userPindah');

        $pindah['userPindahs'] = $response->collect()->where('id_user', $user->id);

        $data = array_merge($pindah);

        return view('layouts.user_2.user_uprove_pindah', $data);
    }

    public function uprovePindah1($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uprovePindah1/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Uprove Jemaat Pindah', 'Uprove Jemaat Pindah Berhasil');
                return redirect()->route('aksesUprovePindah');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function uprovePindah2($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uprovePindah2/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Tolak Uprove Jemaat Pindah', 'Tolak Uprove Jemaat Pindah Berhasil');
                return redirect()->route('aksesUprovePindah');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function sidi()
    {
        $sidi['sidis'] = Http::get('http://127.0.0.1:8070/api/sidi')->collect();

        $data = array_merge($sidi);

        return view('layouts.formSearch.uproveSidi', $data);
    }

    public function userUproveSidi()
    {
        $user = Auth::user();

        $response = Http::get('http://127.0.0.1:8070/api/userSidi');

        $sidi['userSidis'] = $response->collect()->where('id_user', $user->id);

        $data = array_merge($sidi);

        return view('layouts.user_2.user_uprove_sidi', $data);
    }

    public function uproveSidi1($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uproveSidi1/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Uprove Sidi', 'Uprove Sidi Berhasil');
                return redirect()->route('aksesUproveSidi');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function uproveSidi2($id)
    {
        try {
            $response = Http::put('http://127.0.0.1:8070/api/uproveSidi2/'.$id);
            $statusCode = $response->status();

            if ($statusCode === 200) {
                Alert::success('Tolak Uprove Sidi', 'Tolak Uprove Sidi Berhasil');
                return redirect()->route('aksesUproveSidi');
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }
}
