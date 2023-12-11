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
            <h1>Pendaftaran Jemaat RPP</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Pendaftaran Jemaat RPP</li>
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
                <h3 class="card-title" id="textHeader">Tambah Jemaat RPP</h3>
              </div><br>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('createRpp') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Jemaat</label>
                    <select class="form-control" name="id_jemaat" required autocomplete="off">
                      <option class="form-control" value="">Pilih Jemaat</option>
                      @if($jemaat != null)
                      @foreach($jemaat as $item)
                          <option  class="form-control" value="{{ $item->id_jemaat }}">{{ $item->nama_lengkap }}</option>
                      @endforeach
                      @endif
                    </select>
                    {{-- <input type="text" class="form-control" name="id_jemaat" id="exampleInputEmail1" placeholder="ID Jemaat" required> --}}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis RPP</label>
                    <select class="form-control" name="id_jenis_rpp" required autocomplete="off">
                      <option class="form-control" value="">Pilih Jenis RPP</option>
                      @if($rpp != null)
                      @foreach($rpp as $item)
                          <option  class="form-control" value="{{ $item->id_jenis_rpp }}">{{ $item->jenis_rpp }}</option>
                      @endforeach
                      @endif
                    </select>
                    {{-- <input type="text" class="form-control" name="id_jenis_rpp" id="exampleInputPassword1" placeholder="Jenis RPP" required> --}}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Warta RPP</label>
                    <input type="date" required autocomplete="off" class="form-control" name="tgl_warta_rpp" id="exampleInputEmail1" placeholder="Tanggal Warta RPP" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" autocomplete="off" class="form-control" name="keterangan" id="exampleInputEmail1" placeholder="Keterangan" required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a class="btn btn-outline-dark btn-lg ml-3 float-right" href="{{ route('rpp') }}">Cancel</a>
                  <button type="submit" class="btn btn-success btn-lg float-right">Create</button>
                </div>
              </form>
            </div>
            <!-- /.card -->