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
            <h1>Update Data Jemaat Sidi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Data Jemaat Sidi</li>
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
                <h3 class="card-title" id="textHeader">Ubah Data Jemaat Sidi</h3>
              </div><br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">

                @foreach ($sidi['data'] as $item)
                <form action="{{ route('updateSidi') }}" method="post">
                  @csrf
                  @method('POST')
                  <input type="hidden" name="id_registrasi_sidi" value="{{ $item['id_registrasi_sidi'] }}">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Lengkap<span style="color: red;">*</span></label>
                        <input type="text" required class="form-control" name="nama_lengkap" value="{{ $item['nama_lengkap'] }}" placeholder="Nama Lengkap" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nats Sidi<span style="color: red;">*</span></label>
                        <input type="text" required class="form-control" name="nats_sidi" value="{{ $item['nats_sidi'] }}" placeholder="Alamat" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Ayah<span style="color: red;">*</span></label>
                        <input type="text" required class="form-control" name="nama_ayah" value="{{ $item['nama_ayah'] }}" placeholder="Nama Ayah" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Asal Gereja<span style="color: red;">*</span></label>
                        <input type="text" required class="form-control" name="nama_gereja_non_HKBP" value="{{ $item['nama_gereja_non_HKBP'] }}" placeholder="Asal Gereja" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Ibu<span style="color: red;">*</span></label>
                        <input type="text" required class="form-control" name="nama_ibu" value="{{ $item['nama_ibu'] }}" placeholder="Nama Ibu" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Pendeta<span style="color: red;">*</span></label>
                        <input type="text" required class="form-control" name="nama_pendeta_sidi" value="{{ $item['nama_pendeta_sidi'] }}" placeholder="Nama Pendeta" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Tanggal Lahir<span style="color: red;">*</span></label>
                        <input type="date" required class="form-control" name="tanggal_lahir" value="{{ $item['tanggal_lahir'] }}" placeholder="Tanggal Lahir" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Sidi<span style="color: red;">*</span></label>
                        <input type="date" required class="form-control" name="tanggal_sidi" value="{{ $item['tanggal_sidi'] }}" placeholder="File Baptis" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Tempat Lahir<span style="color: red;">*</span></label>
                        <input type="text" required class="form-control" name="tempat_lahir" value="{{ $item['tempat_lahir'] }}" placeholder="Tempat Lahir" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" value="{{ $item['keterangan'] }}" placeholder="Keterangan" required>
                      </div>
                    </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{ route('sidi') }}" class="btn btn-outline-dark btn-lg ml-3 float-right">Cancel</a>
                  <button type="submit" class="btn btn-warning btn-lg float-right">Update</button>
                </div>
              </form>
              @endforeach
            </div>
            <!-- /.card -->