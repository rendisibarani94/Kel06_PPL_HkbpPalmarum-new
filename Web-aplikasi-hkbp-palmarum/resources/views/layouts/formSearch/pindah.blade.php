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
                <h3 class="card-title" id="textHeader">Daftar Jemaat Pindah</h3>
              </div><br>
              <div>
                <a href="{{ route('daftarPindah') }}" class="btn btn-success float-right" id="buttonHeader">Tambah Jemaat Pindah</a>
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
                     @if($pindah['data'] != null)
                      
                    @foreach ( $pindah['data'] as $item)
                  <tr>
                    <td>{{ $item['nama_lengkap'] }}</td>
                    <td>
                      <a class="btn btn-primary" href="{{ route('detailPindah', $item['id_head_reg_pindah']) }}" data-toggle="tooltip" data-placement="top" title="detail"><i><img src="/icon/search2.png" alt="" class="iconbutton"></i></a>
                      <a class="btn btn-warning" href="{{ route('editPindah', $item['id_head_reg_pindah']) }}" data-toggle="tooltip" data-placement="top" title="edit"><i class="bi bi-pencil-square"></i></a>
                      <a class="btn btn-danger" href="{{ route('deletePindah', $item['id_head_reg_pindah']) }}" data-toggle="tooltip" data-placement="top" title="hapus"><i class="bi bi-trash3-fill"></i></a>
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