@include('layouts.forms.header')
@include('layouts.forms.navbar')
@include('layouts.forms.sidebar')
@include('layouts.forms.footer')

<!-- general form elements disabled -->
        <div class="content-wrapper"><br><br>
        <section class="content">
            <div class="card card-primary">
              <div class="card-header" style="height:6rem;">
                <h3 class="card-title" id="textHeader">Tambah Naik Sidih</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('createSidi') }}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Lengkap<span style="color: red;">*</span></label>
                        <input type="text" required class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nats Sidi<span style="color: red;">*</span></label>
                        <input type="text" required class="form-control" name="nats_sidi" placeholder="Alamat">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Ayah<span style="color: red;">*</span></label>
                        <input type="text" required class="form-control" name="nama_ayah" placeholder="Nama Ayah">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Asal Gereja<span style="color: red;">*</span></label>
                        <input type="text" required class="form-control" name="nama_gereja_non_HKBP" placeholder="Asal Gereja">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Ibu<span style="color: red;">*</span></label>
                        <input type="text" required class="form-control" name="nama_ibu" placeholder="Nama Ibu">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Pendeta<span style="color: red;">*</span></label>
                        <input type="text" required class="form-control" name="nama_pendeta_sidi" placeholder="Nama Pendeta">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Tanggal Lahir<span style="color: red;">*</span></label>
                        <input type="date" required class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Sidi<span style="color: red;">*</span></label>
                        <input type="date" required class="form-control" name="tanggal_sidi" placeholder="File Baptis">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Tempat Lahir<span style="color: red;">*</span></label>
                        <input type="text" required class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
                      </div>
                    </div>
                  </div>
                  
                  <div class="card-footer">
                    <a href="{{ route('sidi') }}" class="btn btn-outline-dark btn-lg ml-3 float-right">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg float-right">Create</button>
                    </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
        </section>
    </div>
            <!-- /.card -->