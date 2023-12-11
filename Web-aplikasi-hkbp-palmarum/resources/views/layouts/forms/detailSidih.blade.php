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
                <h3 class="card-title" id="textHeader">Detail Data Jemaat Sidi</h3>
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
                    @if($sidi['data'] != null)
                    @foreach ( $sidi['data'] as $item)
                    <tr>
                      <td>Nama Lengkap</td>
                      <td>{{ $item['nama_lengkap'] }}</td>
                    </tr>
                    <tr>
                      <td>Nama Ayah</td>
                      <td>{{ $item['nama_ayah'] }}</td>
                    </tr>
                    <tr>
                      <td>Nama Ibu</td>
                      <td>{{ $item['nama_ibu'] }}</td>
                    </tr>
                    <tr>
                      <td>Tempat Lahir</td>
                      <td>{{ $item['tempat_lahir'] }}</td>
                    </tr>
                    <tr>
                      <td>Tanggal Lahir</td>
                      <td>{{ $item['tanggal_lahir'] }}</td>
                    </tr>
                    <tr>
                      <td>Asal Gereja</td>
                      <td>{{ $item['nama_gereja_non_hkbp'] }}</td>
                    </tr>
                    <tr>
                      <td>Nats Sidi</td>
                      <td>{{ $item['nats_sidi'] }}</td>
                    </tr>
                    <tr>
                      <td>Tanggal Sidi</td>
                      <td>{{ $item['tanggal_sidi'] }}</td>
                    </tr>
                    <tr>
                      <td>Nama Pendeta Sidi</td>
                      <td>{{ $item['nama_pendeta_sidi'] }}</td>
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
                    @endif

                  </tbody>
                </table>
              </div><br>
              <!-- /.card-body -->
              <div>
                <a class="btn btn-default" href="{{ route('sidi') }}" id="buttonKembali">Kembali</a>
                <a class="btn btn-warning" href="{{ route('editSidi', $item['id_registrasi_sidi']) }}" id="buttonEdit">Edit</a>
              </div><br><br>
                
            </div>
            <!-- /.card -->
          </div>
        </div>