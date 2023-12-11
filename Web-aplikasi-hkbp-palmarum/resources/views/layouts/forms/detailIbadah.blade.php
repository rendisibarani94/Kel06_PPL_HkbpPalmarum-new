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
                <h3 class="card-title" id="textHeader">Detail Jadwal Ibadah</h3>
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
                    @foreach ($ibadah['data'] as $item)

                    <tr>
                      <td>Nama Jenis Minggu</td>
                      <td>{{ $item['nama_jenis_minggu'] }}</td>
                    </tr>
                    <tr>
                      <td>Tanggal Ibadah</td>
                      <td>{{ $item['tgl_ibadah'] }}</td>
                    </tr>
                    <tr>
                      <td>Pelayan Ibadah</td>
                      <td>{{ $item['nama_pendeta'] }}</td>
                    </tr>
                    <tr>
                      <td>Jumlah Pelayan</td>
                      <td>{{ $item['jumlah_pelayan'] }}</td>
                    </tr>
                    <tr>
                      <td>Waktu Mulai Ibadah</td>
                      <td>{{ $item['waktu_mulai'] }}</td>
                    </tr>
                    <tr>
                      <td>Nyanyian-1</td>
                      <td>{{ $item['nyanyian_1'] }}</td>
                    </tr>
                    <tr>
                      <td>Votum</td>
                      <td>{{ $item['votum'] }}-</td>
                    </tr>
                    <tr>
                      <td>Nyanyian-2</td>
                      <td>{{ $item['nyanyian_2'] }}</td>
                    </tr>
                    <tr>
                      <td>Hukum Taurat</td>
                      <td>{{ $item['hukum_taurat'] }}-</td>
                    </tr>
                    <tr>
                      <td>Nyanyian-3</td>
                      <td>{{ $item['nyanyian_3'] }}</td>
                    </tr>
                    <tr>
                      <td>Pengakuan Dosa</td>
                      <td>{{ $item['pengakuan_dosa'] }}</td>
                    </tr>
                    <tr>
                      <td>Nyanyian-4</td>
                      <td>{{ $item['nyanyian_4'] }}</td>
                    </tr>
                    <tr>
                      <td>Epistel</td>
                      <td>{{ $item['epistel'] }}</td>
                    </tr>
                    <tr>
                      <td>Nyanyian-5</td>
                      <td>{{ $item['nyanyian_5'] }}</td>
                    </tr>
                    <tr>
                      <td>Pengakuan Iman</td>
                      <td>{{ $item['pengakuan_iman'] }}</td>
                    </tr>
                    <tr>
                      <td>Nyanyian-6</td>
                      <td>{{ $item['nyanyian_6'] }}-</td>
                    </tr>
                    <tr>
                      <td>Khotbah</td>
                      <td>{{ $item['khotbah'] }}</td>
                    </tr>
                    <tr>
                      <td>Nyanyian-7</td>
                      <td>{{ $item['nyanyian_7'] }}</td>
                    </tr>
                    <tr>
                      <td>Doa Penutup</td>
                      <td>{{ $item['doa_penutup'] }}</td>
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
                <a class="btn btn-default" href="{{ route('ibadah') }}" id="buttonKembali">Kembali</a>
                <a class="btn btn-warning" href="{{ route('editIbadah',$item['id_jadwal_ibadah']) }}" id="buttonEdit">Edit</a>
              </div><br><br>
                
            </div>
            <!-- /.card -->
          </div>
        </div>