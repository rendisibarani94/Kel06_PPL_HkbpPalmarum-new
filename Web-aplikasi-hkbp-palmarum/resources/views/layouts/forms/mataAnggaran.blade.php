@include('layouts.formSearch.navbar')
@include('layouts.formSearch.header')
@include('layouts.formSearch.sidebar')
@include('layouts.formSearch.footer')

{{-- done --}}
<div class="content-wrapper">

<div class="col">
<div class="card card-primary">
  <div class="card-header">
    <h2 style="font-weight: bold;">Mata Anggaran</h2>
  </div>
   
    <div class="card-body">
      <!-- Date -->
      <div class="form-group">
        
        <label>ID Mata Anggaran :</label>
        <input type="UANG" class="form-control" placeholder="masukkan id mata anggaran">
        <label>ID Kategori Anggaran :</label>
        <input type="UANG" class="form-control" placeholder="Masukkan id kategori anggaran">
        <label>Kode Mata Anggaran :</label>
        <input type="UANG" class="form-control" placeholder="Masukkan kode mata anggaran">
        <label>Nama Mata Anggaran :</label>
        <input type="UANG" class="form-control" placeholder="Masukkan nama mata anggaran">
        <label>Jenis Anggaran</label>
        <input type="UANG" class="form-control" placeholder="Masukkan jenis anggaran anggaran">
        <label>ID Sentralisasi :</label>
        <input type="UANG" class="form-control" placeholder="Masukkan id sentralisasi">  
    </div>
    <div class="row">
      <div class="col-12">      
        <button type="button" class="btn btn-default float-right"> Edit</button>
        <button type="button" class="btn btn-success float-right" style="margin-right: 5px;">Create</button>
      </div>
    </div>

</div>