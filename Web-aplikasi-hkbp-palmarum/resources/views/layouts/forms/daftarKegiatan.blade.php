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
            <h1>Pendaftaran Kegiatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pendaftaran Kegiatan</li>
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
                <h3 class="card-title" id="textHeader">Tambah Kegiatan</h3>
              </div><br>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('createKegiatan') }}" method="POST">
                @csrf
                @method('POST')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kegiatan<span style="color: red;">*</span></label>
                    <input type="text" required autocomplete="off" class="form-control" name="nama_jenis_kegiatan" id="exampleInputEmail1" placeholder="Nama Kegiatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Kegiatan<span style="color: red;">*</span></label>
                    <input type="date" required autocomplete="off" class="form-control" name="tanggal_kegiatan" id="exampleInputPassword1" placeholder="Jenis Kegiatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Waktu Kegiatan<span style="color: red;">*</span></label>
                    <input type="time" required autocomplete="off" class="form-control" name="waktu_kegiatan" id="exampleInputEmail1" placeholder="Jadwal Kegiatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi Kegiatan<span style="color: red;">*</span></label>
                    <input type="text" required autocomplete="off" class="form-control" name="lokasi_kegiatan" id="exampleInputEmail1" placeholder="Lokasi Kegiatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" required autocomplete="off" class="form-control" name="keterangan" id="exampleInputEmail1" placeholder="Keterangan">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{ route('kegiatan') }}" class="btn btn-outline-dark btn-lg ml-3 float-right">Cancel</a>
                  <button type="submit" class="btn btn-success btn-lg float-right">Create</button>
                </div>
              </form>
            </div>
            <!-- /.card -->