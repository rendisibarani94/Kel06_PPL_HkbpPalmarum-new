<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//admin

Route::prefix('admin')->middleware(['isAdmin', 'auth'])->group(function(){
    
    Route::get('/', [App\Http\Controllers\dashbordController::class, 'index'])->name('dashbord');

    Route::get('/pelayan', [App\Http\Controllers\pelayanController::class, 'index'])->name('pelayan');
    Route::get('/daftarPelayan', [App\Http\Controllers\pelayanController::class, 'store'])->name('daftarPelayan');
    Route::post('/createPelayan', [App\Http\Controllers\pelayanController::class, 'create'])->name('createPelayan');
    Route::put('/updatePelayan', [App\Http\Controllers\pelayanController::class, 'update'])->name('updatePelayan');
    Route::get('/editPelayan/{id}', [App\Http\Controllers\pelayanController::class, 'edit'])->name('editPelayan');
    Route::get('/detailPelayan/{id}', [App\Http\Controllers\pelayanController::class, 'showDetails'])->name('detailPelayan');
    Route::get('/deletePelayan/{id}', [App\Http\Controllers\pelayanController::class, 'destroy'])->name('deletePelayan');


    Route::get('/sidi', [App\Http\Controllers\sidiController::class, 'index'])->name('sidi');
    Route::get('/daftarSidi', [App\Http\Controllers\sidiController::class, 'store'])->name('daftarSidi');
    Route::post('/createSidi', [App\Http\Controllers\sidiController::class, 'create'])->name('createSidi');
    Route::post('/updateSidi', [App\Http\Controllers\sidiController::class, 'update'])->name('updateSidi');
    Route::get('/detailSidi/{id}', [App\Http\Controllers\sidiController::class, 'details'])->name('detailSidi');
    Route::get('/editSidi/{id}', [App\Http\Controllers\sidiController::class, 'edit'])->name('editSidi');
    Route::get('/deleteSidi/{id}', [App\Http\Controllers\sidiController::class, 'destroy'])->name('deleteSidi');

    Route::get('/rpp', [App\Http\Controllers\rppController::class, 'index'])->name('rpp');
    Route::get('/daftarRpp', [App\Http\Controllers\rppController::class, 'store'])->name('daftarRpp');
    Route::post('/createRpp', [App\Http\Controllers\rppController::class, 'create'])->name('createRpp');
    Route::get('/editRpp/{id}', [App\Http\Controllers\rppController::class, 'edit'])->name('editRpp');
    Route::put('/updateRpp', [App\Http\Controllers\rppController::class, 'update'])->name('updateRpp');
    Route::get('/detailRpp/{id}', [App\Http\Controllers\rppController::class, 'showDetails'])->name('detailRpp');
    Route::get('/deleteRpp/{id}', [App\Http\Controllers\rppController::class, 'destroy'])->name('deleteRpp');

    Route::get('/ibadah', [App\Http\Controllers\ibadahController::class, 'index'])->name('ibadah');
    Route::get('/daftarIbadah', [App\Http\Controllers\ibadahController::class, 'store'])->name('daftarIbadah');
    Route::get('/editIbadah/{id}', [App\Http\Controllers\ibadahController::class, 'edit'])->name('editIbadah');
    Route::post('/createIbadah', [App\Http\Controllers\ibadahController::class, 'create'])->name('createIbadah');
    Route::get('/detailIbadah/{id}', [App\Http\Controllers\ibadahController::class, 'details'])->name('detailIbadah');
    Route::get('/deleteIbadah/{id}', [App\Http\Controllers\ibadahController::class, 'destroy'])->name('deleteIbadah');
    Route::post('/updateIbadah', [App\Http\Controllers\ibadahController::class, 'update'])->name('updateIbadah');

    Route::get('/baptis', [App\Http\Controllers\baptisController::class, 'index'])->name('baptis');
    Route::get('/daftarBaptis', [App\Http\Controllers\baptisController::class, 'store'])->name('daftarBaptis');
    Route::post('/updateBaptis', [App\Http\Controllers\baptisController::class, 'update'])->name('updateBaptis');
    Route::get('/detailBaptis/{id}', [App\Http\Controllers\baptisController::class, 'details'])->name('detailBaptis');
    Route::post('/createBaptis', [App\Http\Controllers\baptisController::class, 'create'])->name('createBaptis');
    Route::get('/deleteBaptis/{id}', [App\Http\Controllers\baptisController::class, 'destroy'])->name('deleteBaptis');
    Route::get('/editBaptis/{id}', [App\Http\Controllers\baptisController::class, 'edit'])->name('editBaptis');


    Route::get('/jemaat', [App\Http\Controllers\jemaatController::class, 'index'])->name('jemaat');
    Route::get('/daftarJemaat', [App\Http\Controllers\jemaatController::class, 'store'])->name('daftarJemaat');
    Route::post('/createJemaat', [App\Http\Controllers\jemaatController::class, 'create'])->name('createJemaat');
    Route::post('/updateJemaat', [App\Http\Controllers\jemaatController::class, 'update'])->name('updateJemaat');
    Route::get('/editJemaat/{id}', [App\Http\Controllers\jemaatController::class, 'edit'])->name('editJemaat');
    Route::get('/detailJemaat/{id}', [App\Http\Controllers\jemaatController::class, 'details'])->name('detailJemaat');
    Route::get('/deleteJemaat/{id}', [App\Http\Controllers\jemaatController::class, 'destroy'])->name('deleteJemaat');
   
    

    Route::get('/kegiatan', [App\Http\Controllers\kegiatanController::class, 'index'])->name('kegiatan');
    Route::post('/createKegiatan', [App\Http\Controllers\kegiatanController::class, 'create'])->name('createKegiatan');
    Route::get('/daftarKegiatan', [App\Http\Controllers\kegiatanController::class, 'store'])->name('daftarKegiatan');
    Route::get('/editKegiatan/{id}', [App\Http\Controllers\kegiatanController::class, 'edit'])->name('editKegiatan');
    Route::post('/updateKegiatan', [App\Http\Controllers\kegiatanController::class, 'update'])->name('updateKegiatan');
    Route::get('/detailKegiatan/{id}', [App\Http\Controllers\kegiatanController::class, 'details'])->name('detailKegiatan');
    Route::get('/deleteKegiatan/{id}', [App\Http\Controllers\kegiatanController::class, 'destroy'])->name('deleteKegiatan');


    Route::get('/pernikahan', [App\Http\Controllers\pernikahanController::class, 'index'])->name('pernikahan');
    Route::get('/daftarPernikahan', [App\Http\Controllers\pernikahanController::class, 'store'])->name('daftarPernikahan');
    Route::post('/updatePernikahan', [App\Http\Controllers\pernikahanController::class, 'update'])->name('updatePernikahan');
    Route::post('/createPernikahan', [App\Http\Controllers\pernikahanController::class, 'create'])->name('createPernikahan');
    Route::get('/editPernikahan/{id}', [App\Http\Controllers\pernikahanController::class, 'edit'])->name('editPernikahan');
    Route::get('/detailPernikahan/{id}', [App\Http\Controllers\pernikahanController::class, 'details'])->name('detailPernikahan');
    Route::get('/deletePernikahan/{id}', [App\Http\Controllers\pernikahanController::class, 'destroy'])->name('deletePernikahan');

    Route::get('/pindah', [App\Http\Controllers\pindahController::class, 'index'])->name('pindah');
    Route::get('/daftarPindah', [App\Http\Controllers\pindahController::class, 'store'])->name('daftarPindah');
    Route::post('/updatePindah', [App\Http\Controllers\pindahController::class, 'update'])->name('updatePindah');
    Route::post('/createPindah', [App\Http\Controllers\pindahController::class, 'create'])->name('createPindah');
    Route::get('/editPindah/{id}', [App\Http\Controllers\pindahController::class, 'edit'])->name('editPindah');
    Route::get('/deletePindah/{id}', [App\Http\Controllers\pindahController::class, 'destroy'])->name('deletePindah');
    Route::get('/detailPindah/{id}', [App\Http\Controllers\pindahController::class, 'details'])->name('detailPindah');

    Route::get('/martumpol', [App\Http\Controllers\martumpolController::class, 'index'])->name('martumpol');
    Route::get('/daftarMartumpol', [App\Http\Controllers\martumpolController::class, 'store'])->name('daftarMartumpol');
    Route::post('/createMartumpol', [App\Http\Controllers\martumpolController::class, 'create'])->name('createMartumpol');
    Route::post('/updateMartumpol', [App\Http\Controllers\martumpolController::class, 'update'])->name('updateMartumpol');
    Route::get('/editMartumpol/{id}', [App\Http\Controllers\martumpolController::class, 'edit'])->name('editMartumpol');
    Route::get('/detailMartumpol/{id}', [App\Http\Controllers\martumpolController::class, 'detail'])->name('detailMartumpol');
    Route::get('/deleteMartumpol/{id}', [App\Http\Controllers\martumpolController::class, 'destroy'])->name('deleteMartumpol');


    // Route::get('/keluarga', [App\Http\Controllers\keluargaController::class, 'index'])->name('keluarga');
    // Route::get('/daftarKeluarga', [App\Http\Controllers\keluargaController::class, 'store'])->name('daftarKeluarga');
    // Route::get('/updateKeluarga', [App\Http\Controllers\keluargaController::class, 'edit'])->name('updateKeluarga');
    // Route::get('/detailKeluarga', [App\Http\Controllers\keluargaController::class, 'create'])->name('detailKeluarga');

    


    Route::get('/pemasukan', [App\Http\Controllers\pemasukanController::class, 'index'])->name('pemasukan');

    //Lelang
    Route::get('/pemasukanLelang', [App\Http\Controllers\pemasukanController::class, 'index2'])->name('pemasukanLelang');
    Route::get('/pemasukanLelang2', [App\Http\Controllers\pemasukanController::class, 'index3'])->name('pemasukanLelang2');

    //pembangunan
    Route::get('/pemasukanPembangunan', [App\Http\Controllers\pemasukanController::class, 'index4'])->name('pemasukanPembangunan');

    //pengembangan
    Route::get('/pemasukanPengembanganPelayanan', [App\Http\Controllers\pemasukanController::class, 'index5'])->name('pemasukanPengembanganPelayanan');
    Route::get('/pemasukanPengembanganPelayanan2', [App\Http\Controllers\pemasukanController::class, 'index6'])->name('pemasukanPengembanganPelayanan2');

    //
    Route::get('/pemasukanPersembahan', [App\Http\Controllers\pemasukanController::class, 'index7'])->name('pemasukanPersembahan');
    Route::get('/pemasukanPersembahan2', [App\Http\Controllers\pemasukanController::class, 'index8'])->name('pemasukanPersembahan2');
    
    Route::get('/pemasukanPersembahanKeluarga2', [App\Http\Controllers\pemasukanController::class, 'index9'])->name('pemasukanPersembahanKeluarga2');
    Route::get('/pemasukanSumbangan', [App\Http\Controllers\pemasukanController::class, 'index10'])->name('pemasukanSumbangan');
    Route::get('/pemasukanSumbangan2', [App\Http\Controllers\pemasukanController::class, 'index11'])->name('pemasukanSumbangan2');
    Route::get('/pemasukanPembangunan2', [App\Http\Controllers\pemasukanController::class, 'index12'])->name('pemasukanPembangunan2');
    Route::get('/pemasukanUcapanSyukur', [App\Http\Controllers\pemasukanController::class, 'index13'])->name('pemasukanUcapanSyukur');
    Route::get('/pemasukanUcapanSyukur2', [App\Http\Controllers\pemasukanController::class, 'index14'])->name('pemasukanUcapanSyukur2');
    Route::get('/kategoriPemasukan', [App\Http\Controllers\pemasukanController::class, 'index15'])->name('kategoriPemasukan');
    Route::get('/kategoriPemasukan2', [App\Http\Controllers\pemasukanController::class, 'index16'])->name('kategoriPemasukan2');

    Route::get('/pengeluaran', [App\Http\Controllers\pengeluaranController::class, 'index'])->name('pengeluaran');
    Route::get('/pengeluaranKegiatan', [App\Http\Controllers\pengeluaranController::class, 'index2'])->name('pengeluaranKegiatan');
    Route::get('/pengeluaranOpsional', [App\Http\Controllers\pengeluaranController::class, 'index3'])->name('pengeluaranOpsional');
    Route::get('/pengeluaranPembangunan', [App\Http\Controllers\pengeluaranController::class, 'index4'])->name('pengeluaranPembangunan');
    Route::get('/kategoriPengeluaran', [App\Http\Controllers\pengeluaranController::class, 'index5'])->name('kategoriPengeluaran');
    Route::get('/kategoriPengeluaran2', [App\Http\Controllers\pengeluaranController::class, 'index6'])->name('kategoriPengeluaran2');



    // SENTRALISASI
    Route::get('/setSentralisasi', [App\Http\Controllers\sentralisasiController::class, 'index'])->name('setSentralisasi');
    Route::post('/tambahSentralisasi', [App\Http\Controllers\sentralisasiController::class, 'create'])->name('tambahSentralisasi');
    Route::get('/detailSentralisasi', [App\Http\Controllers\sentralisasiController::class, 'index2'])->name('detailSentralisasi');
    Route::get('/deleteSentralisasi/{id}', [App\Http\Controllers\sentralisasiController::class, 'destroy'])->name('deleteSentralisasi');
    Route::put('/updateSentralisasi/{id}', [App\Http\Controllers\sentralisasiController::class, 'update'])->name('updateSentralisasi');
    Route::get('/editSentralisasi/{id}', [App\Http\Controllers\sentralisasiController::class, 'edit'])->name('editSentralisasi');
    // Route::get('/editSentralisasi/{id}', [App\Http\Controllers\sentralisasiController::class, 'edit'])->name('editSentralisasi');

    // Route::get('editSentralisasi/{id}', 'sentralisasiController@edit')->name('editSentralisasi');



    
    // Route::match(['get', 'post'], '/setSentralisasi', [App\Http\Controllers\sentralisasiController::class, 'index'])->name('setSentralisasi');
    // Route::match(['get', 'post'], '/detailSentralisasi', [App\Http\Controllers\sentralisasiController::class, 'index2'])->name('detailSentralisasi');



    Route::get('/kategoriAnggaran', [App\Http\Controllers\anggaranController::class, 'index'])->name('kategoriMataAnggaran');
    Route::get('/detailKategoriAnggaran', [App\Http\Controllers\anggaranController::class, 'index2'])->name('detailKategoriMataAnggaran');
    Route::get('/matsAnggaran', [App\Http\Controllers\anggaranController::class, 'index3'])->name('mataAnggaran');
    Route::get('/detailMataAnggaran', [App\Http\Controllers\anggaranController::class, 'index4'])->name('detailMataAnggaran');

    Route::get('/headTransaksi', [App\Http\Controllers\transaksiController::class, 'index'])->name('headTransaksi');
    Route::get('/detailHeadTransaksi', [App\Http\Controllers\transaksiController::class, 'index2'])->name('detailHeadTransaksi');
    Route::get('/detailTransaksi', [App\Http\Controllers\transaksiController::class, 'index3'])->name('detailTransaksi');
    Route::get('/headTransaksiDetail', [App\Http\Controllers\transaksiController::class, 'index4'])->name('headTransaksiDetail');

    Route::get('/persembahanIbadah', [App\Http\Controllers\persembahanController::class, 'index'])->name('persembahanIbadah');
    Route::get('/persembahanJemaat', [App\Http\Controllers\persembahanController::class, 'index'])->name('persembahanJemaat');



    //perbaikan
    Route::get('/detailPernikahanLaki', function () {
        return view('layouts.forms.detailPernikahanLaki');
    });
    Route::get('/detailPernikahanPerempuan', function () {
        return view('layouts.forms.detailPernikahanPerempuan');
    });
    // Route::get('/detailSentralisasi' , function () {
    //     return view('layouts.forms.detailSentralisasi');
    // });




    Route::get('/uproveBaptis', [App\Http\Controllers\uproveController::class, 'baptis'])->name('aksesUproveBaptis');
    Route::get('/fixUproveBaptis1/{id}', [App\Http\Controllers\uproveController::class, 'uproveBaptis1'])->name('UproveBaptis1');
    Route::get('/fixUproveBaptis2/{id}', [App\Http\Controllers\uproveController::class, 'uproveBaptis2'])->name('UproveBaptis2');

    Route::get('/uproveJemaat', [App\Http\Controllers\uproveController::class, 'prvJemaat'])->name('aksesUproveJemaat');
    Route::get('/fixUproveJemaat1/{id}', [App\Http\Controllers\uproveController::class, 'uproveJemaat1'])->name('UproveJemaat1');
    Route::get('/fixUproveJemaat2/{id}', [App\Http\Controllers\uproveController::class, 'uproveJemaat2'])->name('UproveJemaat2');

    Route::get('/uprovePindah', [App\Http\Controllers\uproveController::class, 'pindah'])->name('aksesUprovePindah');
    Route::get('/fixUprovePindah1/{id}', [App\Http\Controllers\uproveController::class, 'uprovePindah1'])->name('UprovePindah1');
    Route::get('/fixUprovePindah2/{id}', [App\Http\Controllers\uproveController::class, 'uprovePindah2'])->name('UprovePindah2');

    Route::get('/uproveMartumpol', [App\Http\Controllers\uproveController::class, 'martumpol'])->name('aksesUproveMartumpol');
    Route::get('/fixUproveMartumpol1/{id}', [App\Http\Controllers\uproveController::class, 'uproveMartumpol1'])->name('UproveMartumpol1');
    Route::get('/fixUproveMartumpol2/{id}', [App\Http\Controllers\uproveController::class, 'uproveMartumpol2'])->name('UproveMartumpol2');

    Route::get('/uprovePernikahan', [App\Http\Controllers\uproveController::class, 'pernikahan'])->name('aksesUprovePernikahan');
    Route::get('/fixUprovePernikahan1/{id}', [App\Http\Controllers\uproveController::class, 'uprovePernikahan1'])->name('UprovePernikahan1');
    Route::get('/fixUprovePernikahan2/{id}', [App\Http\Controllers\uproveController::class, 'uprovePernikahan2'])->name('UprovePernikahan2');

    Route::get('/uproveSidi', [App\Http\Controllers\uproveController::class, 'sidi'])->name('aksesUproveSidi');
    Route::get('/fixUproveSidi1/{id}', [App\Http\Controllers\uproveController::class, 'uproveSidi1'])->name('UproveSidi1');    
    Route::get('/fixUproveSidi2/{id}', [App\Http\Controllers\uproveController::class, 'uproveSidi2'])->name('UproveSidi2');    
});

//  user user user user
Route::get('/aksesMartumpolUser', [App\Http\Controllers\userController::class, 'index'])->name('martumpolUser');
Route::post('/daftarMartumpolUser', [App\Http\Controllers\userController::class, 'daftarMartumpol'])->name('registrasiMartumpol')->middleware('auth');
Route::get('/aksesBaptisUser', [App\Http\Controllers\userController::class, 'index2'])->name('baptisUser');
Route::post('/daftarBaptisUser', [App\Http\Controllers\userController::class, 'daftarBaptis'])->name('registrasiBaptis')->middleware('auth');
Route::get('/aksesJemaatUser', [App\Http\Controllers\userController::class, 'keluarga'])->name('jemaatUser');
Route::post('/daftarJemaatUser', [App\Http\Controllers\userController::class, 'daftarJemaat'])->name('registrasiJemaat')->middleware('auth');
Route::get('/aksesNikahUser', [App\Http\Controllers\userController::class, 'index4'])->name('nikahUser');
Route::post('/daftarNikahUser', [App\Http\Controllers\userController::class, 'daftarNikah'])->name('registrasiNikah')->middleware('auth');
Route::get('/aksesPindahUser', [App\Http\Controllers\userController::class, 'index5'])->name('pindahUser');
Route::post('/daftarPindahUser', [App\Http\Controllers\userController::class, 'daftarPindah'])->name('registrasiPindah')->middleware('auth');
Route::get('/aksesSidiUser', [App\Http\Controllers\userController::class, 'index6'])->name('sidiUser');
Route::post('/daftarSidiUser', [App\Http\Controllers\userController::class, 'daftarSidi'])->name('registrasiSidi')->middleware('auth');
Route::get('/', [App\Http\Controllers\userController::class, 'index7'])->name('homeUser');

Route::get('/userUproveBaptis', [App\Http\Controllers\uproveController::class, 'userUproveBaptis'])->name('userUproveBaptis')->middleware('auth');
Route::get('/userUproveJemaat', [App\Http\Controllers\uproveController::class, 'userUproveJemaat'])->name('userUproveJemaat')->middleware('auth');
Route::get('/userUproveMartumpol', [App\Http\Controllers\uproveController::class, 'userUproveMartumpol'])->name('userUproveMartumpol')->middleware('auth');
Route::get('/userUprovePernikahan', [App\Http\Controllers\uproveController::class, 'userUprovePernikahan'])->name('userUprovePernikahan')->middleware('auth');
Route::get('/userUprovePindah', [App\Http\Controllers\uproveController::class, 'userUprovePindah'])->name('userUprovePindah')->middleware('auth');
Route::get('/userUproveSidi', [App\Http\Controllers\uproveController::class, 'userUproveSidi'])->name('userUproveSidi')->middleware('auth');

Route::get('/detailPernikahanPerempuan', function () {
    return view('layouts.forms.detailPernikahanPerempuan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\userController::class, 'index7'])->name('home');

