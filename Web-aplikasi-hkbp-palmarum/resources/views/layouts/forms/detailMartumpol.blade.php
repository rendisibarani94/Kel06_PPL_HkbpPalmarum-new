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
                <h3 class="card-title" id="textHeader">Detail Data Martumpol</h3>
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
                    @foreach ($martumpol['data'] as $item)
                    <tr>
                      <td>Nama Mempelai Laki-Laki</td>
                      <td>{{ $item['nama_lengkap_laki'] }}</td>
                    </tr>
                    <tr>
                      <td>Gereja</td>
                      <td>{{ $item['nama_gereja_laki'] }}</td>
                    </tr>
                    <tr>
                      <td>Nama Ayah Mempelai Laki-Laki</td>
                      <td>{{ $item['nama_ayah_laki'] }}</td>
                    </tr>
                    <tr>
                      <td>Nama Ibu Mempelai Laki-Laki</td>
                      <td>{{ $item['nama_ibu_laki'] }}</td>
                    </tr>
                        <td><br></td>
                        <td><br></td>
                    </tr>
                    <tr>
                      <td>Nama Mempelai Perempuan</td>
                      <td>{{ $item['nama_lengkap_perempuan'] }}</td>
                    </tr>
                    <tr>
                      <td>Gereja</td>
                      <td>{{ $item['nama_gereja_perempuan'] }}</td>
                    </tr>
                    <tr>
                      <td>Nama Ayah Mempelai Perempuan</td>
                      <td>{{ $item['nama_ayah_perempuan'] }}</td>
                    </tr>
                    <tr>
                      <td>Nama Ibu Mempelai Perempuan</td>
                      <td>{{ $item['nama_ibu_perempuan'] }}</td>
                    </tr>
                    </tr>
                        <td><br></td>
                        <td><br></td>
                    </tr>
                    <tr>
                      <td>Gereja Martumpol</td>
                      <td>{{ $item['nama_gereja_martumpol'] }}</td>
                    </tr>
                    <tr>
                      <td>Tanggal Martumpol</td>
                      <td>{{ $item['tgl_martumpol'] }}</td>
                    </tr>
                    <tr>
                      <td>Tanggal Warta Martumpol</td>
                      <td>{{ $item['tgl_warta_martumpol'] }}</td>
                    </tr>
                    <tr>
                      <td>Nama Pendeta Martumpol</td>
                      <td>{{ $item['nama_pendeta_martumpol'] }}</td>
                    </tr>
                    <tr>
                      <td>Gereja Pemberkatan</td>
                      <td>{{ $item['nama_gereja_pemberkatan'] }}</td>
                    </tr>
                    <tr>
                      <td>Tanggal Pemberkatan</td>
                      <td>{{ $item['tgl_pemberkatan'] }}</td>
                    </tr>
                    <tr>
                      <td>Tanggal Warta Pemberkatan</td>
                      <td>{{ $item['tgl_warta_pemberkatan'] }}</td>
                    </tr>
                    <tr>
                      <td>Nama Pendeta Pemberkatan</td>
                      <td>{{ $item['nama_pendeta_pemberkatan'] }}</td>
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
                <a class="btn btn-default" href="{{ route('martumpol') }}" id="buttonKembali">Kembali</a>
                <a href="{{ route('editMartumpol',$item['id_registrasi_nikah']) }}"><button class="btn btn-warning" id="buttonEdit">Edit</button></a>
              </div><br><br>
                
            </div>
            <!-- /.card -->
          </div>
        </div>