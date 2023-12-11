<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RPPController;
use App\Http\Controllers\PelayanController;
use App\Http\Controllers\userController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\IbadahController;
use App\Http\Controllers\BaptisController;
use App\Http\Controllers\SidiController;
use App\Http\Controllers\JemaatPindahController;
use App\Http\Controllers\RegistrasiJemaatController;
use App\Http\Controllers\PernikahanController;
use App\Http\Controllers\RegistrasiPernikahanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); 

Route::get('/rpp', [RPPController::class, 'viewAllRpp']);
Route::get('rpp/{id}', [RPPController::class, 'viewRPPById']);
Route::get('rppEdit/{id}', [RPPController::class, 'viewEditRPP']);
Route::delete('/deleteRpp/{id}', [RPPController::class, 'deleteRPP']);
Route::post('/storeRpp', [RPPController::class, 'addRPP']);
Route::put('/updateRpp', [RPPController::class, 'updateRPP']);


Route::get('/pelayanGereja', [PelayanController::class, 'viewAllPelayan']);
Route::delete('/deletePelayanGereja/{id}', [PelayanController::class, 'deletePelayan']);
Route::get('pelayanGereja/{id}', [PelayanController::class, 'viewPelayanById']);
Route::post('/storePelayanGereja', [PelayanController::class, 'addPelayan']);
Route::put('/updatePelayanGereja', [PelayanController::class, 'updatePelayan']);

Route::get('/kegiatan', [KegiatanController::class, 'viewAllKegiatan']);
Route::get('/kegiatan/{id}', [KegiatanController::class, 'viewKegiatanById']);
Route::get('/kegiatanEdit/{id}', [KegiatanController::class, 'viewEditKegiatan']);
Route::delete('/deleteKegiatan/{id}', [KegiatanController::class, 'deleteKegiatan']);
Route::post('/storeKegiatan', [KegiatanController::class, 'addKegiatan']);
Route::post('/updateKegiatan', [KegiatanController::class, 'updateKegiatan']);


Route::get('/ibadah', [IbadahController::class, 'viewAllIbadah']);
Route::get('ibadah/{id}', [IbadahController::class, 'viewIbadahyId']);
Route::get('ibadahEdit/{id}', [IbadahController::class, 'viewEditIbadah']);
Route::delete('/deleteIbadah/{id}', [IbadahController::class, 'deleteIbadah']);
Route::post('/storeIbadah', [IbadahController::class, 'addIbadah']);
Route::post('/updateIbadah', [IbadahController::class, 'updateIbadah']);

Route::get('/baptis', [BaptisController::class, 'viewAllBaptis']);
Route::get('baptis/{id}', [BaptisController::class, 'viewBaptisById']);
Route::get('baptisEdit/{id}', [BaptisController::class, 'viewEditBaptis']);
Route::delete('/deleteBaptis/{id}', [BaptisController::class, 'deleteBaptis']);
Route::post('/storeBaptis', [BaptisController::class, 'addBaptis']);
Route::post('/updateBaptis', [BaptisController::class, 'updateBaptis']);

Route::get('/sidi', [SidiController::class, 'viewAllSidi']);
Route::get('sidi/{id}', [SidiController::class, 'viewSidiById']);
Route::get('sidiEdit/{id}', [SidiController::class, 'viewEditSidi']);
Route::delete('/deleteSidi/{id}', [SidiController::class, 'deleteSidi']);
Route::post('/storeSidi', [SidiController::class, 'addSidi']);
Route::post('/updateSidi', [SidiController::class, 'updateSidi']);

Route::get('/jemaatPindah', [JemaatPindahController::class, 'viewAllJemaatPindah']);
Route::get('jemaatPindah/{id}', [JemaatPindahController::class, 'viewJemaatPindahById']);
Route::get('jemaatPindahEdit/{id}', [JemaatPindahController::class, 'viewEditJemaatPindah']);
Route::delete('/deleteJemaatPindah/{id}', [JemaatPindahController::class, 'deleteJemaatPindah']);
Route::post('/storeJemaatPindah', [JemaatPindahController::class, 'addJemaatPindah']);
Route::post('/updateJemaatPindah', [JemaatPindahController::class, 'updateJemaatPindah']);

Route::get('/RegistrasiJemaat', [RegistrasiJemaatController::class, 'viewAllRegistrasiJemaat']);
Route::get('RegistrasiJemaat/{id}', [RegistrasiJemaatController::class, 'viewRegistrasiJemaatById']);
Route::get('RegistrasiJemaatEdit/{id}', [RegistrasiJemaatController::class, 'viewEditRegistrasiJemaat']);
Route::delete('/deleteRegistrasiJemaat/{id}', [RegistrasiJemaatController::class, 'deleteRegistrasiJemaat']);
Route::post('/storeRegistrasiJemaat', [RegistrasiJemaatController::class, 'addRegistrasiJemaat']);
Route::post('/updateRegistrasiJemaat', [RegistrasiJemaatController::class, 'updateRegistrasiJemaat']);

Route::get('/nikah', [PernikahanController::class, 'viewAllNikah']);
Route::get('nikah/{id}', [PernikahanController::class, 'viewNikahById']);
Route::get('nikahEdit/{id}', [PernikahanController::class, 'viewEditNikah']);
Route::delete('/deleteNikah/{id}', [PernikahanController::class, 'deleteNikah']);
Route::post('/storeNikah', [PernikahanController::class, 'addNikah']);
Route::post('/updateNikah', [PernikahanController::class, 'updateNikah']);

Route::get('/RegistrasiPernikahan', [RegistrasiPernikahanController::class, 'viewAllRegistrasiPernikahan']);
Route::get('RegistrasiPernikahan/{id}', [RegistrasiPernikahanController::class, 'viewRegistrasiPernikahanById']);
Route::get('RegistrasiPernikahanEdit/{id}', [RegistrasiPernikahanController::class, 'viewEditRegistrasiPernikahan']);
Route::delete('/deleteRegistrasiPernikahan/{id}', [RegistrasiPernikahanController::class, 'deleteRegistrasiPernikahan']);
Route::post('/storeRegistrasiPernikahan', [RegistrasiPernikahanController::class, 'addRegistrasiPernikahan']);
Route::post('/updateRegistrasiPernikahan', [RegistrasiPernikahanController::class, 'updateRegistrasiPernikahan']);

Route::post('/daftarBaptis', [userController::class, 'daftarBaptis']);
Route::post('/daftarSidi', [userController::class, 'daftarSidi']);
Route::post('/daftarJemaat', [userController::class, 'daftarJemaat']);
Route::post('/daftarNikah', [userController::class, 'daftarNikah']);
Route::post('/daftarMartumpol', [userController::class, 'daftarMartumpol']);
Route::post('/daftarPindah', [userController::class, 'daftarPindah']);
Route::get('/keluarga', [userController::class, 'keluarga']);
Route::get('/pendidikan', [userController::class, 'pendidikan']);
Route::get('/BidangPendidikan', [userController::class, 'BidangPendidikan']);
Route::get('/pekerjaan', [userController::class, 'pekerjaan']);
Route::get('/jemaat', [userController::class, 'jemaat']);
Route::get('/namKeluarga', [userController::class, 'namKeluarga']);
Route::get('/gereja', [userController::class, 'gereja']);
Route::get('/pelayan', [userController::class, 'pelayan']);
Route::get('/jadwal', [userController::class, 'jadwal']);

