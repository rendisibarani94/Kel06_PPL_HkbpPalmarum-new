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
                <h3 class="card-title" id="textHeader">Daftar Pelayan Gereja</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 250px;" id="searchHeader">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div><br>
              <div>
                <button type="submit" class="btn btn-success float-right" id="buttonHeader">Tambah Pelayan</button>
              </div><br>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th width="1300px">Nama</th>
                      <th><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>John Doe</td>
                      <td>
                        <div>
                          <button class="btn btn-primary"><i><img src="icon/search2.png" alt="" class="iconbutton"></i></button>
                          <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                          <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Alexander Pierce</td>
                      <td>
                        <div>
                          <button class="btn btn-primary"><i><img src="icon/search2.png" alt="" class="iconbutton"></i></button>
                          <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                          <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Bob Doe</td>
                      <td>
                        <div>
                          <button class="btn btn-primary"><i><img src="icon/search2.png" alt="" class="iconbutton"></i></button>
                          <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                          <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Mike Doe</td>
                      <td>
                        <div>
                          <button class="btn btn-primary"><i><img src="icon/search2.png" alt="" class="iconbutton"></i></button>
                          <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                          <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>