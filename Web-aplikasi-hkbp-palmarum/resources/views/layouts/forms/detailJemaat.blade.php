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
                <h3 class="card-title" id="textHeader">Detail Data Jemaat</h3>
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
                    @foreach ($jemaat['data'] as $item)
                      
                    <tr>
                      <td>Nama</td>
                      <td>{{ $item ['nama_lengkap'] }}</td>
                    </tr>
                    <tr>
                      <td>Tempat Tanggal Lahir</td>
                      <td>{{ $item ['tempat_lahir'] }} / {{ $item ['tanggal_lahir'] }}</td>
                    </tr>
                    <tr>
                      <td>Jenis Kelamin</td>
                      <td>{{ $item ['jenis_kelamin'] }}</td>
                    </tr>
                    <tr>
                      <td>Status Keluarga</td>
                      <td>{{ $item ['status_keluarga'] }}</td>
                    </tr>
                    <tr>
                      <td>Pendidikan</td>
                      <td>{{ $item ['pendidikan'] }}</td>
                    </tr>
                    <tr>
                      <td>Pekerjaan</td>
                      <td>{{ $item ['pekerjaan'] }}</td>
                    </tr>
                    <tr>
                      <td>Golongan Darah</td>
                      <td>{{ $item ['gol_darah'] }}</td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td>{{ $item ['alamat'] }}</td>
                    </tr>
                    <tr>
                      <td>No Telepon</td>
                      <td>{{ $item ['no_telepon'] }}</td>
                    </tr>
                    <tr>
                      <td>Keterangan</td>
                      <td>{{ $item ['keterangan'] }}</td>
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
                <a class="btn btn-default" href="{{ route('jemaat') }}" id="buttonKembali">Kembali</a>
                <a href="{{ route('editJemaat',$item['id_jemaat']) }}" class="btn btn-warning" id="buttonEdit">Edit</a>
              </div><br><br>
                
            </div>
            <!-- /.card -->
          </div>
        </div>