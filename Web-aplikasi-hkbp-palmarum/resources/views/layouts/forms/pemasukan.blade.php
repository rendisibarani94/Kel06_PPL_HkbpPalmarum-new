
@include('layouts.formSearch.navbar')
@include('layouts.formSearch.header')
@include('layouts.formSearch.sidebar')
@include('layouts.formSearch.footer')




<div class="content-wrapper"><br><br>

    <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card card-primary">
                  <div class="card-header" style="height:6rem;">
                    <h3 class="card-title" id="textHeader">Pemasukan</h3>
                  </div><br>
                  <div class="col">
                <div class="row">
                  <div class="card-body">
                      <label for="example-select">Kategori Pemasukan</label>
                        <select class="form-control" id="example-select">
                            <option value="1">Persembahan Mingguan</option>
                            <option value="2">Ucapan Syukur</option>
                            <option value="3">Persembahan Keluarga</option>
                            <option value="4">Sumbangan</option>
                            <option value="5">Pembangunan</option>
                            <option value="6">Pengembangan Pelayanan</option>
                            <option value="7">Lelang</option>
                        </select>
                      </div>
                </div> 
                  <div class="card-footer">
                      <button type="cancel" class="btn btn-success">  Cari </button>
                  </div>
              </div>  
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <thead>
                    
                            <tr>
                              <th>No</th>
                              <th>Kategori Pemasukan</th>
                              <th width="120px"><center>Aksi</center></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td>1</td>
                              <td>Trident</td>
                              <td>
                                <button class="btn btn-primary"><i><img src="icon/search2.png" alt="" class="iconbutton"></i></button>
                                <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                              </td>                    
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Trident</td>
                              <td>
                                <button class="btn btn-primary"><i><img src="icon/search2.png" alt="" class="iconbutton"></i></button>
                                <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                              </td>                    
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Trident</td>
                              <td>
                                <button class="btn btn-primary"><i><img src="icon/search2.png" alt="" class="iconbutton"></i></button>
                                <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                              </td>                    
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Trident</td>
                              <td>
                                <button class="btn btn-primary"><i><img src="icon/search2.png" alt="" class="iconbutton"></i></button>
                                <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                              </td>                    
                            </tr>
                            <tr> 
                              <tr>
                              <td>5</td>
                              <td>Trident</td>
                              <td>
                                <button class="btn btn-primary"><i><img src="icon/search2.png" alt="" class="iconbutton"></i></button>
                                <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                              </td>                    
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>Trident</td>
                              <td>
                                <button class="btn btn-primary"><i><img src="icon/search2.png" alt="" class="iconbutton"></i></button>
                                <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                              </td>                    
                            </tr>
                            <tr>
                              <tr>
                                  <td>7</td>
                                  <td>Trident</td>
                                  <td>
                                    <button class="btn btn-primary"><i><img src="icon/search2.png" alt="" class="iconbutton"></i></button>
                                    <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                                  </td>                    
                                </tr>
                                <tr>
                                  <tr>
                                      <td>8</td>
                                      <td>Trident</td>
                                      <td>
                                        <button class="btn btn-primary"><i><img src="icon/search2.png" alt="" class="iconbutton"></i></button>
                                        <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                                      </td>                    
                                    </tr>
                                    <tr>
                              <tr>
                                  <td>9</td>
                                  <td>Trident</td>
                                  <td>
                                      <button class="btn btn-primary"><i><img src="icon/search2.png" alt="" class="iconbutton"></i></button>
                                      <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                                      <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                                  </td>                    
                                  </tr>
                                  <tr>
                            <tr>
                            </tbody>
                      </thead>
                    
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