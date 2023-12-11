@include('layouts.formSearch.navbar')
@include('layouts.formSearch.header')
@include('layouts.formSearch.sidebar')
@include('layouts.formSearch.footer')

<div class="content-wrapper">

<div class="col">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Detail Sentralisasi</h3>
    </div>
   
    <div class="card-body">
      <!-- Date -->
      <div class="form-group">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card card-primary">                   
                    <div class="col">
                      <div class="row">                   
                      </div>                
                    </div>  
                    <!-- /.card-header -->
                    <div class="">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>Presentasi Sentralisasi</th>
                                <th>Keterangan</th>
                          
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($sentralisasis as $data)
                              <tr>
                                <td>{{$data['persentasi_sentralisasi']}}</td>
                                <td>{{$data['keterangan']}}</td>
                                <td>
                                  <a class="btn btn-warning"href="{{route('editSentralisasi', $data['id_sentralisasi'])}}"><i class="bi bi-pencil-square"></i></a>
                                  <a class="btn btn-danger" href="{{route('deleteSentralisasi', $data['id_sentralisasi'])}}"><i class="bi bi-trash3-fill"></i></a>
                                </td>
                              </tr>
                              @endforeach
                              
                              <!-- Tambahkan baris lainnya sesuai kebutuhan -->
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
     
    </div>
    <div class="row">
      <div class="col-12">      
        <button type="button" class="btn btn-default float-right"> Edit</button>
        <button type="button" class="btn btn-success float-right" style="margin-right: 5px;">Create</button>
      </div>
    </div>

</div>