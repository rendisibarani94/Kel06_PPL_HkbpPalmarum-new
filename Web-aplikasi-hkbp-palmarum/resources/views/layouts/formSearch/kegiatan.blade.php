@include('layouts.formSearch.navbar')
@include('layouts.formSearch.header')
@include('layouts.formSearch.sidebar')
@include('sweetalert::alert')
@include('layouts.formSearch.footer')

<!-- Main content -->
<div class="content-wrapper"><br><br>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header" style="height:6rem;">
                <h3 class="card-title" id="textHeader">Daftar Kegiatan Gereja</h3>
              </div><br>
              <div>
                <a type="submit" href="{{ route('daftarKegiatan') }}" class="btn btn-success float-right" id="buttonHeader">Tambah Kegiatan</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th width="120px"><center>Aksi</center></th>
                  </tr>
                  </thead>
                  <tbody>
                    @if($kegiatan['data'] != null)
                      @foreach ( $kegiatan['data'] as $item )
                        
                  <tr>
                    <td>{{ $item['nama_jenis_kegiatan'] }} / {{ $item['tanggal_kegiatan'] }}</td>
                    <td>
                      <a class="btn btn-primary" href="{{ route('detailKegiatan',$item['id_jenis_kegiatan']) }}" data-toggle="tooltip" data-placement="top" title="detail"><i><img src="/icon/search2.png" alt="" class="iconbutton"></i></a>
                      <a class="btn btn-warning" href="{{ route('editKegiatan', $item['id_jenis_kegiatan']) }}" data-toggle="tooltip" data-placement="top" title="edit"><i class="bi bi-pencil-square"></i></a>
                      <a class="btn btn-danger" href="{{ route('deleteKegiatan', $item['id_jenis_kegiatan']) }}" data-toggle="tooltip" data-placement="top" title="hapus"><i class="bi bi-trash3-fill"></i></a>
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