@include('layouts.formSearch.navbar')
@include('layouts.formSearch.header')
@include('layouts.formSearch.sidebar')
@include('layouts.formSearch.footer')
@include('sweetalert::alert')

<!-- Main content -->
<div class="content-wrapper"><br><br>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header" style="height:6rem;">
                <h3 class="card-title" id="textHeader">Daftar Jemaat Sidi</h3>
              </div><br>
              <div>
                <a href="{{ route('daftarSidi') }}" class="btn btn-success float-right" id="buttonHeader">Tambah Sidi</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th><center>Tanggal Sidi </center></th>
                    <th width="120px"><center>Aksi</center></th>
                  </tr>
                  </thead>
                  <tbody>
                    @if($rpp['data'] != null)
                    @foreach ( $rpp['data'] as $item)
                  <tr>
                    <td>{{ $item['nama_lengkap'] }}</td>
                    <td><center>{{ $item['tanggal_sidi'] }}</center></td>
                    <td>
                      <a class="btn btn-primary" href="{{ route('detailSidi',$item['id_registrasi_sidi']) }}" data-toggle="tooltip" data-placement="top" title="detail"><i><img src="/icon/search2.png" alt="" class="iconbutton"></i></a>
                      <a class="btn btn-warning" href="{{ route('editSidi',$item['id_registrasi_sidi']) }}" data-toggle="tooltip" data-placement="top" title="edit"><i class="bi bi-pencil-square"></i></a>
                      <a class="btn btn-danger" href="{{ route('deleteSidi',$item['id_registrasi_sidi']) }}" data-toggle="tooltip" data-placement="top" title="hapus"><i class="bi bi-trash3-fill"></i></a>
                    </td>                    
                  </tr>
                  @endforeach
                  @endif
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->