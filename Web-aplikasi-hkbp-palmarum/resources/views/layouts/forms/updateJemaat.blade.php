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
            <h1>Update Data Jemaat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Data Jemaat</li>
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
                <h3 class="card-title" id="textHeader">Ubah Data Jemaat</h3>
              </div><br>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                @foreach ($jemaat['data'] as $item)
                  
                <form action="{{ route('updateJemaat') }}" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <input type="hidden" name="id_jemaat"  value="{{ $item['id_jemaat'] }}">
                      <div class="form-group">
                        <label>Nama Depan<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" class="form-control" name="nama_depan"  value="{{ $item['nama_depan'] }}" placeholder="Nama Depan">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Belakang<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" class="form-control" name="nama_belakang"  value="{{ $item['nama_belakang'] }}" placeholder="Nama Belakang">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Gelar depan</label>
                        <input type="text" autocomplete="off" class="form-control" name="gelar_depan"  value="{{ $item['gelar_depan'] }}" placeholder="Gelar Depan">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Gelar Belakang</label>
                        <input type="text" autocomplete="off" class="form-control" name="gelar_belakang"  value="{{ $item['gelar_belakang'] }}" placeholder="Gelar Belakang">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tempat Lahir<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" class="form-control" name="tempat_lahir"  value="{{ $item['tempat_lahir'] }}" placeholder="Tempat Lahir">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Lahir<span style="color: red;">*</span></label>
                        <input type="date" autocomplete="off" class="form-control" name="tanggal_lahir"  value="{{ $item['tanggal_lahir'] }}" placeholder="Tanggal Lahir">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Nomor Registrasi<span style="color: red;">*</span></label>
                        <select class="form-control" name="id_registrasi" autocomplete="off">
                          <option class="form-control" value="">Pilih Keluarga</option>
                          @if($registrasi != null)
                          @foreach($registrasi as $barang)
                              <option  class="form-control" value="{{ $barang->id_registrasi }}">{{ $barang->nama_keluarga }}</option>
                          @endforeach
                          @endif
                        </select>
                        {{-- <input type="text" class="form-control" name="id_registrasi"  value="{{ $item['id_registrasi'] }}" placeholder="Nomor Registrasi"> --}}
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Golongan Darah</label>
                        <input type="text" autocomplete="off" class="form-control" name="gol_darah"  value="{{ $item['gol_darah'] }}" placeholder="Golongan Darah">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Jenis Kelamin<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" class="form-control" name="jenis_kelamin"  value="{{ $item['jenis_kelamin'] }}" placeholder="Jenis Kelamin">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>No Telepon</label>
                        <input type="number" autocomplete="off" class="form-control" name="no_telepon"  value="{{ $item['no_telepon'] }}" placeholder="No Telepon">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Alamat<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" class="form-control" name="alamat"  value="{{ $item['alamat'] }}" placeholder="Alamat">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Status Keluarga<span style="color: red;">*</span></label>
                        <select class="form-control" name="id_hub_keluarga" autocomplete="off">
                          <option class="form-control" value="">Pilih Status Keluarga</option>
                          @if($keluarga != null)
                          @foreach($keluarga as $barang)
                              <option  class="form-control" value="{{ $barang->id_hub_keluarga }}">{{ $barang->nama_hub_keluarga }}</option>
                          @endforeach
                          @endif
                        </select>
                        {{-- <input type="text" class="form-control" name="id_hub_keluarga"  value="{{ $item['id_hub_keluarga'] }}" placeholder="Status Keluarga"> --}}
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Pekerjaan<span style="color: red;">*</span></label>
                        <select class="form-control" name="id_pekerjaan" autocomplete="off">
                          <option class="form-control" value="">Pilih Pekerjaan</option>
                          @if($pekerjaan != null)
                          @foreach($pekerjaan as $barang)
                              <option  class="form-control" value="{{ $barang->id_pekerjaan }}">{{ $barang->pekerjaan }}</option>
                          @endforeach
                          @endif
                        </select>
                        {{-- <input type="text" class="form-control" name="id_pekerjaan"  value="{{ $item['id_pekerjaan'] }}" placeholder="Pekerjaan"> --}}
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pekerjaan Lainnya</label>
                        <input type="text" autocomplete="off" class="form-control" name="nama_pekerjaan_lain"  value="{{ $item['nama_pekerjaan_lain'] }}" placeholder="Pekerjaan Lainnya">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Bidang Pendidikan<span style="color: red;">*</span></label>
                        <select class="form-control" name="id_bidang_pendidikan" autocomplete="off">
                          <option class="form-control" value="">Pilih Bidang Pendidikan</option>
                          @if($bpendidikan != null)
                          @foreach($bpendidikan as $barang)
                              <option  class="form-control" value="{{ $barang->id_bidang_pendidikan }}">{{ $barang->nama_bidang_pendidikan }}</option>
                          @endforeach
                          @endif
                        </select>
                        {{-- <input type="text" class="form-control" name="id_bidang_pendidikan"  value="{{ $item['id_bidang_pendidikan'] }}" placeholder="Bidang Pendidikan"> --}}
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pendidikan Terakhir<span style="color: red;">*</span></label>
                        <select class="form-control" name="id_pendidikan" autocomplete="off">
                          <option class="form-control" value="">Pilih Pendidikan</option>
                          @if($pendidikan != null)
                          @foreach($pendidikan as $barang)
                              <option  class="form-control" value="{{ $barang->id_pendidikan }}">{{ $barang->pendidikan }}</option>
                          @endforeach
                          @endif
                        </select>
                        {{-- <input type="text" class="form-control" name="id_pendidikan"  value="{{ $item['id_pendidikan'] }}" placeholder="Pendidikan Terakhir"> --}}
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" autocomplete="off" class="form-control" name="keterangan"  value="{{ $item['keterangan'] }}" placeholder="Keterangan">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      
                    </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{ route('jemaat') }}" class="btn btn-outline-dark btn-lg ml-3 float-right">Cancel</a>
                  <button type="submit" class="btn btn-warning btn-lg float-right">Edit</button>
                </div>
              </form>
              @endforeach
            </div>
            <!-- /.card -->