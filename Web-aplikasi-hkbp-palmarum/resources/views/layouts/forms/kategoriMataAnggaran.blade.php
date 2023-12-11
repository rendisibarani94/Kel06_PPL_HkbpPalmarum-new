@include('layouts.formSearch.navbar')
@include('layouts.formSearch.header')
@include('layouts.formSearch.sidebar')
@include('layouts.formSearch.footer')


{{-- done --}}
<div class="content-wrapper">

<div class="col">
<div class="card card-primary">
  <div class="card-header">
    <h2 style="font-weight: bold;">Kategori Mata Anggaran</h2>
  </div>
   
    <div class="card-body">
      <!-- Date -->
      <div class="form-group">
        
        <label>Induk Kategori  Anggaran :</label>
        <input type="UANG" class="form-control" placeholder="masukkan induk kategori anggaran">
        <label>Kode Kategori Anggaran :</label>
        <input type="UANG" class="form-control" placeholder="Masukkan id kategori anggaran">
        <label>Nama Kategori Anggaran :</label>
        <input type="UANG" class="form-control" placeholder="Masukkan nama kategori anggaran">
        <label>Keterangan :</label>
        <input type="UANG" class="form-control" placeholder="Masukkan Keterangan">
     
    </div>
    <div class="row">
      <div class="col-12">      
        <button type="button" class="btn btn-default float-right"> Edit</button>
        <button type="button" class="btn btn-success float-right" style="margin-right: 5px;">Create</button>
      </div>
    </div>
</div>