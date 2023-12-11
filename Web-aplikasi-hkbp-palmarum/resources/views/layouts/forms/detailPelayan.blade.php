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
                <h3 class="card-title" id="textHeader">Detail Data Pelayan Gereja</h3>
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
                    @foreach ($pelayan['data'] as $item)
                    <tr>
                      <td>Nama Pelayan</td>
                      <td>{{ $item['nama_lengkap'] }}</td>
                    </tr>
                    <tr>
                      <td>Tahbisan</td>
                      <td>{{$item['tanggal_tahbisan']}}</td>
                    </tr>
                    <tr>
                      <td>Jabatan</td>
                      <td>{{ $item['jabatan'] }}</td>
                    </tr>
                    <tr>
                      <td>Akhir Jawatan</td>
                      <td>{{ $item['tanggal_akhir_jawatan'] }}</td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td>{{ $item['status_pelayan'] }}</td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td>{{ $item['alamat'] }}</td>
                    </tr>
                    <tr>
                      <td>Keterangan</td>
                      <td>{{ $item['keterangan'] }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div><br>
              <!-- /.card-body -->
              <div>
                <a class="btn btn-default" href="{{ route('pelayan') }}" id="buttonKembali">Kembali</a>
                <a class="btn btn-warning" href="{{ route('editPelayan',$item['id_pelayan']) }}" id="buttonEdit">Edit</a>
              </div><br><br>
                
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
        </div>
</section>
</div>