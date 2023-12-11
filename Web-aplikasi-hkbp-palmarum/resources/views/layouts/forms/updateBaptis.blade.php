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
            <h1>Update Data Jemaat Baptis</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Data Jemaat Baptis</li>
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
                <h3 class="card-title" id="textHeader">Ubah Data Jemaat Baptis</h3>
              </div><br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                @foreach ($baptis['data'] as $item)
                <form action="{{ route('updateBaptis') }}" method="post">
                  @csrf
                  @method('POST')
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <input type="hidden" name="id_registrasi_baptis" value="{{ $item['id_registrasi_baptis'] }}">
                      
                      <div class="form-group">
                        <label>Nama Lengkap<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control"  name="nama_lengkap" value="{{ $item['nama_lengkap'] }}" placeholder="Nama Lengkap">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Alamat<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="alamat" value="{{ $item['alamat'] }}" placeholder="Alamat">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jenis Kelamin<span style="color: red;">*</span></label><br>
                        <input type="text" autocomplete="off" required class="form-control" name="jenis_kelamin" value="{{ $item['jenis_kelamin'] }}" placeholder="Jenis-Kelamin">
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Baptis<span style="color: red;">*</span></label>
                        <input type="date" autocomplete="off" required class="form-control" name="tanggal_baptis" value="{{ $item['tanggal_baptis'] }}" placeholder="Tanggal Baptis">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Ayah<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="nama_ayah" value="{{ $item['nama_ayah'] }}" placeholder="Nama Ayah">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Ibu<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="nama_ibu" value="{{ $item['nama_ibu'] }}" placeholder="Asal Gereja">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Tempat Lahir<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="tempat_lahir" value="{{ $item['tempat_lahir'] }}" placeholder="Nama Ibu">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Lahir<span style="color: red;">*</span></label>
                        <input type="date" autocomplete="off" required class="form-control" name="tanggal_lahir" value="{{ $item['tanggal_lahir'] }}" placeholder="Nama Pendeta">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>ID Pendeta<span style="color: red;">*</span></label>
                        <select name="id_pendeta" class="form-control" required autocomplete="off">
                          <option value="">Pilih Pendeta</option>
                          @if($pendeta != null)
                          @foreach($pendeta as $barang)
                              <option class="form-control" value="{{ $barang->id_pelayan }}">Pendeta {{ $barang->nama_lengkap }}</option>
                          @endforeach
                          @endif
                      </select>
                        {{-- <input type="text" class="form-control" name="id_pendeta" value="{{ $item['id_pendeta'] }}" placeholder="Tempat Lahir"> --}}
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" autocomplete="off" required class="form-control" name="keterangan" value="{{ $item['keterangan'] }}" placeholder="keterangan">
                      </div>
                    </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{ route('baptis') }}" class="btn btn-outline-dark btn-lg ml-3 float-right">Cancel</a>
                  <button type="submit" class="btn btn-warning btn-lg float-right">Edit</button>
                </div>
              </form>
              @endforeach
            </div>
            <!-- /.card -->