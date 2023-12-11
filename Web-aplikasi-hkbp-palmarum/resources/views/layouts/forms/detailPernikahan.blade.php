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
                <h3 class="card-title" id="textHeader">Detail Data Pernikahan</h3>
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
                    @if($nikah['data'] != null)
                      
                    @foreach ($nikah['data'] as $item)

                    <tr>
                      <td>Pasangan</td>
                      <td>{{ $item['pasangan'] }}</td>
                    </tr>
                    <tr>
                      <td>Tanggal Pernikahan</td>
                      <td>{{ $item['tgl_pernikahan'] }}</td>
                    </tr>
                    <tr>
                      <td>Nats Pernikahan</td>
                      <td>{{ $item['nats_pernikahan'] }}</td>
                    </tr>
                    <tr>
                      <td>Gereja Pernikahan</td>
                      <td>{{ $item['nama_gereja_non_HKBP'] }}</td>
                    </tr>
                    <tr>
                      <td>Pendeta yang Memberkati</td>
                      <td>{{ $item['nama_pendeta'] }}</td>
                    </tr>
                    <tr>
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
                <a class="btn btn-default" href="{{ route('pernikahan') }}" id="buttonKembali">Kembali</a>
                <a href="{{ route('editPernikahan', $item['id_pernikahan']) }}"><button class="btn btn-warning" id="buttonEdit">Edit</button></a>
              </div><br><br>
                
            </div>
            <!-- /.card -->
          </div>
        </div>