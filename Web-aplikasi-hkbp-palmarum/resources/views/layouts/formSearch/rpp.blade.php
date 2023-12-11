@include('layouts.formSearch.navbar')
@include('layouts.formSearch.header')
@include('layouts.formSearch.sidebar')
@include('layouts.formSearch.footer')
@include('sweetalert::alert')

<!-- Main content -->
<div class="content-wrapper"><br><br>
<section class="content">
      <div class="container-fluid">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('failed'))
        <div class="alert alert-danger">
            {{ session('failed') }}
        </div>
    @endif

        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header" style="height:6rem;">
                <h3 class="card-title" id="textHeader">Daftar Jemaat Yang Terkena RPP</h3>
              </div><br>
              <div>
                <a  class="btn btn-success float-right" href="{{ route('daftarRpp') }}" id="buttonHeader">Tambah Jemaat Kena RPP</a>
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
                    @if($rpp['data'] != null)
                      
                    @foreach ( $rpp['data'] as $item)
                  <tr>
                    <td>{{$item['nama_lengkap'] }}</td>
                    <td>
                          <a class="btn btn-primary" href=" {{ route('detailRpp', $item['id_rpp']) }}" ><i><img src="/icon/search2.png" alt="" class="iconbutton"></i></a>
                          <a class="btn btn-warning" href="{{ route('editRpp',$item['id_rpp']) }}"><i class="bi bi-pencil-square"></i></a>
                          <a type="submit" class="btn btn-danger" href="{{ route('deleteRpp', $item['id_rpp']) }}"><i class="bi bi-trash3-fill"></i></a>
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