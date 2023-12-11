@include('layouts.forms.header')
@include('layouts.forms.navbar')
@include('layouts.forms.sidebar')
@include('layouts.forms.footer')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Data Jemaat Sidi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Data Jemaat Sidi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="height:6rem">
                <h3 class="card-title" id="textHeader">Ubah Data Pernikahan Mempelai Perempuan</h3>
              </div><br>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Pernikahan</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Tanggal Pernikahan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Ayah</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Ayah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Akta Kelahiran</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Akta Kelahiran">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Suart Sidi</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Suart Sidi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="/updatePernikahanLaki"><button class="btn btn-outline-dark btn-lg ml-3 float-right">back</button></a>
                  <button type="submit" class="btn btn-warning btn-lg float-right">Ubah</button>
                </div>
              </form>
            </div>
            <!-- /.card -->