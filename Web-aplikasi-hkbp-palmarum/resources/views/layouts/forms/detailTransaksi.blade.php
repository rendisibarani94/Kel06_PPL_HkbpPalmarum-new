@include('layouts.formSearch.navbar')
@include('layouts.formSearch.header')
@include('layouts.formSearch.sidebar')
@include('layouts.formSearch.footer')

<div class="content-wrapper">

<div class="col">
<div class="card card-primary">
  <div class="card-header">
    <h2 style="font-weight: bold;">Detail Transaksi</h2>
  </div>
   
    <div class="card-body">
      <!-- Date -->
      <div class="form-group">
        
        <label>ID Transaksi:</label>
        <input type="UANG" class="form-control" placeholder="masukkan id transaksi"><br>
        <label>ID Mata Anggaran :</label>
        <input type="UANG" class="form-control" placeholder="Masukkan id mata anggaran"><br>
        <label>Jumlah Sentralisasi :</label>
        <input type="UANG" class="form-control" placeholder="Masukkan jumlah sentralisasi"><br>
        <label>Jumlah Gereja :</label>
        <input type="UANG" class="form-control" placeholder="Masukkan jumlah gereja"><br>
        <label>Persembahan Tahunan</label>
        <input type="UANG" class="form-control" placeholder="Masukkan persembahan tahunan"><br>
        <label>Bulan Awal :</label>
        <input type="UANG" class="form-control" placeholder="Bulan awal">  <br>
        <label>Bulan Akhir :</label>
        <input type="UANG" class="form-control" placeholder="Bulan Akhir"> <br> 
        <label>Keterangan :</label>
        <input type="UANG" class="form-control" placeholder="Masukkan Keterangan">  <br>
    </div>
    <div class="row">
      <div class="col-12">      
        <button type="button" class="btn btn-default float-right"> Edit</button>
        <button type="button" class="btn btn-success float-right" style="margin-right: 5px;">Create</button>
      </div>
    </div>

</div>