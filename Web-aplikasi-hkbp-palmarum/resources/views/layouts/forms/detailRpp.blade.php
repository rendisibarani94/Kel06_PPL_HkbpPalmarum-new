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
                <h3 class="card-title" id="textHeader">Detail Data Jemaat Terkena RPP</h3>
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
                    @foreach ($rpp['data'] as $item)
                     
                    <tr>
                      <td>Id Jemaat</td>
                      <td>{{ $item['id_jemaat'] }}</td>
                    </tr>
                    <tr>
                      <td>Nama Lengkap</td>
                      <td>{{ $item['nama_lengkap'] }}</td>
                    </tr>
                    <tr>
                      <td>Tanggal Warta</td>
                      <td>{{ $item['tgl_warta_rpp'] }}</td>
                    </tr>
                    <tr>
                      <td>Jenis RPP</td>
                      <td>{{ $item['jenis_rpp'] }}</td>
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
                <a class="btn btn-default" href="{{ route('rpp') }}" id="buttonKembali">Kembali</a>
                <a class="btn btn-warning" href="{{ route('editRpp', $item['id_rpp']) }}" id="buttonEdit">Edit</a>
              </div><br><br>
                
            </div>
            <!-- /.card -->
          </div>
        </div>