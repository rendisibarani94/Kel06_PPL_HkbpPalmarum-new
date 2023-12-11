@include('layouts.forms.header')
@include('layouts.forms.navbar')
@include('layouts.forms.sidebar')
@include('layouts.forms.footer')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Data Jemaat RPP</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Update Data Jemaat RPP</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="height:6rem">
                <h3 class="card-title" id="textHeader">Ubah Data Jemaat RPP</h3>
              </div><br>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach ($rpp['data'] as $item)
              <form action="{{ route('updateRpp') }}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <input type="hidden" name="id_rpp" value="{{ $item['id_rpp'] }}">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Jemaat</label>
                    <select class="form-control" name="id_jemaat" required autocomplete="off">
                      <option class="form-control" value="">Pilih Jemaat</option>
                      @if($jemaat != null)
                      @foreach($jemaat as $barang)
                          <option  class="form-control" value="{{ $barang->id_jemaat }}">{{ $barang->nama_lengkap }}</option>
                      @endforeach
                      @endif
                    </select>
                    {{-- <input type="text" class="form-control" name="id_jemaat" id="exampleInputEmail1" value="{{ $item['id_jemaat'] }}" placeholder="ID Jemaat"> --}}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis RPP</label>
                    <select class="form-control" name="id_jenis_rpp" required autocomplete="off">
                      <option class="form-control" value="">Pilih Jenis RPP</option>
                      @if($jenis != null)
                      @foreach($jenis as $barang)
                          <option  class="form-control" value="{{ $barang->id_jenis_rpp }}">{{ $barang->jenis_rpp }}</option>
                      @endforeach
                      @endif
                    </select>
                    {{-- <input type="text" class="form-control" name="id_jenis_rpp" id="exampleInputPassword1" value="{{ $item['id_jenis_rpp'] }}" placeholder="Jenis RPP"> --}}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Warta RPP</label>
                    <input type="date" required autocomplete="off" class="form-control" name="tgl_warta_rpp" id="exampleInputEmail1" value="{{ $item['tgl_warta_rpp'] }}" placeholder="Tanggal Warta RPP">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" autocomplete="off" class="form-control" name="keterangan" id="exampleInputEmail1" value="{{ $item['keterangan'] }}" placeholder="Keterangan">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{ route('rpp') }}" class="btn btn-outline-dark btn-lg ml-3 float-right">Cancel</a>
                  <button type="submit" class="btn btn-warning btn-lg float-right">Update</button>
                </div>
              </form>
              @endforeach
            </div>
            <!-- /.card -->