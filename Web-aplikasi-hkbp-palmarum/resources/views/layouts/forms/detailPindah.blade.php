@include('layouts.forms.header')
@include('layouts.forms.navbar')
@include('layouts.forms.sidebar')
@include('layouts.forms.footer')

<div class="content-wrapper"><br><br>
  <section class="content">
      <div class="container-fluid">
          <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header" style="height:6rem;">
                <h3 class="card-title" id="textHeader">Detail Data Jemaat Pindah</h3>
              </div><br><br>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Bio Data</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pindah['data'] as $item)

                    <tr>
                      <td>ID Registrasi Pindah</td>
                      <td>{{ $item['id_head_reg_pindah'] }}</td>
                    </tr>
                    <tr>
                      <td>No Surat Pindah</td>
                      <td>{{ $item['no_surat_pindah'] }}</td>
                    </tr>
                    <tr>
                      <td>ID Registrasi Jemaat</td>
                      <td>{{ $item['id_registrasi'] }}</td>
                    </tr>
                    <tr>
                      <td>ID Jemaat</td>
                      <td>{{ $item['id_jemaat'] }}</td>
                    </tr>
                    <tr>
                      <td>Nama Jemaat</td>
                      <td>{{ $item['nama_lengkap'] }}</td>
                    </tr>
                    <tr>
                      <td>ID Gereja Tujuan</td>
                      <td>{{ $item['id_gereja_tujuan'] }}</td>
                    </tr>
                    <tr>
                    <tr>
                      <td>Nama Gereja</td>
                      <td>{{ $item['nama_gereja'] }}</td>
                    </tr>
                    <tr>
                      <td>Tanggal Pindah</td>
                      <td>{{ $item['tgl_pindah'] }}</td>
                    </tr>
                    <tr>
                      <td>Tanggal Warta</td>
                      <td>{{ $item['tgl_warta'] }}</td>
                    </tr>
                    <tr>
                      <td>Keterangan</td>
                      <td>{{ $item['keterangan'] }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div><br>
              <!-- /.card-body -->
              <div>
                <a class="btn btn-default" href="{{ route('pindah') }}" id="buttonKembali">Kembali</a>
                <a class="btn btn-warning" href="{{ route('editPindah', $item['id_head_reg_pindah']) }}" id="buttonEdit">Edit</a>
              </div><br><br>
                
            </div>
            <!-- /.card -->
          </div>
        </div>