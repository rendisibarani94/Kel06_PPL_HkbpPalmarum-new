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
                <h3 class="card-title" id="textHeader">Detail Data Keluarga</h3>
              </div><br><br>
              <!-- /.card-header -->
              <div class="card-body">
                <h4>Nama Keluarga</h4>
                <table class="table table-bordered">
                    <tr>
                        <td>
                            Nama Keluarga
                        </td>
                    </tr>
                </table>
                <br>
                <h4>Anggota Keluarga</h4>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama</th>
                      <th>Status</th>
                      <th>Keterangan</th>
                      <th colspan="2"><center>Action</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Update software</td>
                      <td></td>
                      <td></td>
                      <td>
                        <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                      </td>
                      <td>
                        <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Clean database</td>
                      <td></td>
                      <td></td>
                      <td>
                        <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                      </td>
                      <td>
                        <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Cron job running</td>
                      <td></td>
                      <td></td>
                      <td>
                        <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                      </td>
                      <td>
                        <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Fix and squish bugs</td>
                      <td></td>
                      <td></td>
                      <td>
                        <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                      </td>
                      <td>
                        <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div><br>
              <!-- /.card-body -->
              <div>
                <button class="btn btn-default" id="buttonKembali">Kembali</button>
              </div><br><br>
                
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
        </div>
</section>
</div>