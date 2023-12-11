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
            <h1>Pendaftaran Jadwal Ibadah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pendaftaran Jadwal Ibadah</li>
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
                <h3 class="card-title" id="textHeader">Tambah Jadwal Ibadah</h3>
              </div><br>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('createIbadah') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Jenis Minggu<span style="color: red;">*</span></label>
                    <select class="form-control" name="id_jenis_minggu" autocomplete="off" required>
                      <option class="form-control" value="">Pilih Jenis Minggu</option>
                      @if($minggu != null)
                      @foreach($minggu as $item)
                          <option  class="form-control" value="{{ $item->id_jenis_minggu }}">{{ $item->nama_jenis_minggu }}</option>
                      @endforeach
                      @endif
                  </select>
                    {{-- <input type="text" class="form-control" name="id_jenis_minggu" id="exampleInputEmail1" placeholder="Nama Minggu"> --}}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Ibadah<span style="color: red;">*</span></label>
                    <input type="date" autocomplete="off" required class="form-control" name="tgl_ibadah" id="exampleInputEmail1" placeholder="Waktu Ibadah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Waktu Ibadah<span style="color: red;">*</span></label>
                    <input type="time" autocomplete="off" required class="form-control" name="waktu_mulai" id="exampleInputEmail1" placeholder="Waktu Ibadah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pelayan Ibadah<span style="color: red;">*</span></label>
                    <select class="form-control" name="id_melayani" autocomplete="off" required>
                      <option class="form-control" value="">Pilih Pendeta</option>
                      @if($pendeta != null)
                      @foreach($pendeta as $item)
                          <option  class="form-control" value="{{ $item->id_pelayan }}">Pendeta {{ $item->nama_lengkap }}</option>
                      @endforeach
                      @endif
                  </select>
                    {{-- <input type="text" class="form-control" name="id_melayani" id="exampleInputEmail1" placeholder="Pelayan Ibadah"> --}}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Pelayan<span style="color: red;">*</span></label>
                    <input type="number" autocomplete="off" required class="form-control" name="jumlah_pelayan" id="exampleInputEmail1" placeholder="Jumlah pelayan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" autocomplete="off" class="form-control" name="keterangan" id="exampleInputEmail1" placeholder="Keterangan Lain">
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nyanyian 1<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="nyanyian_1" id="exampleInputEmail1" placeholder="Nyanyian 1">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Votum<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="votum" id="exampleInputEmail1" placeholder="Votum">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nyanyian 2<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="nyanyian_2" id="exampleInputEmail1" placeholder="Nyanyian 2">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Hukum Taurat<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="hukum_taurat" id="exampleInputEmail1" placeholder="Hukum Taurat">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nyanyian 3<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="nyanyian_3" id="exampleInputEmail1" placeholder="Nyanyian 3">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Pengakuan Dosa<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="pengakuan_dosa" id="exampleInputEmail1" placeholder="Pengakuan Dosa">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nyanyian 4<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="nyanyian_4" id="exampleInputEmail1" placeholder="Nyanyian 4">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Epistel<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="epistel" id="exampleInputEmail1" placeholder="Epistel">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nyanyian 5<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="nyanyian_5" id="exampleInputEmail1" placeholder="Nyanyian 5">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Pengakuan Iman<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="pengakuan_iman" id="exampleInputEmail1" placeholder="Pengakuan Iman">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nyanyian 6<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="nyanyian_6" id="exampleInputEmail1" placeholder="Keterangan Lain">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Khotbah<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="khotbah" id="exampleInputEmail1" placeholder="Khotbah">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nyanyian 7<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="nyanyian_7" id="exampleInputEmail1" placeholder="Nyanyian 7">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Doa Penutup<span style="color: red;">*</span></label>
                        <input type="text" autocomplete="off" required class="form-control" name="doa_penutup" id="exampleInputEmail1" placeholder="Doa Penutup">
                      </div>
                    </div>
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <a class="btn btn-outline-dark btn-lg ml-3 float-right" href="{{ route('ibadah') }}">Cancel</a>
                  <button type="submit" class="btn btn-success btn-lg float-right">Create</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
