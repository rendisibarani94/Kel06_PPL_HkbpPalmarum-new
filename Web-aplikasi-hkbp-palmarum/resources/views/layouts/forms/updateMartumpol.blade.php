@include('layouts.forms.header')
@include('layouts.forms.navbar')
@include('layouts.forms.sidebar')
@include('layouts.forms.footer')

    <!-- Content Header (Page header) -->
    <div class="content-wrapper"><br><br>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Data Martumpol</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Data Martumpol</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- general form elements disabled -->
        <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header" style="height:6rem>
                <h3 class="card-title" id="textHeader">Update Data Martumpol</h3>
              </div>
              <div class="card-body p-0">
                <div class="bs-stepper">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#logins-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Data Awal</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Mempelai Laki-laki</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information2-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information2-part" id="information2-part-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Mempelai Perempuan</span>
                      </button>
                    </div>
                  </div>
                  <div class="bs-stepper-content">
                    @foreach ($martumpol['data'] as $item)
                    
                    <form action="{{ route('updateMartumpol') }}" method="POST">
                    @csrf
                      <!-- your steps content here -->
                      <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                        <input type="hidden" name="id_registrasi_nikah" value="{{ $item['id_registrasi_nikah'] }}">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-6">
                              <!-- text input -->
                              <div class="form-group">
                                <label>ID Gereja Martumpol</label>
                                <select class="form-control" name="id_gereja_martumpol" autocomplete="off">
                                  <option class="form-control" value="">Pilih Gereja</option>
                                  @if($gereja != null)
                                  @foreach($gereja as $barang)
                                      <option  class="form-control" value="{{ $barang->id_gereja }}">{{ $barang->nama_gereja }}</option>
                                  @endforeach
                                  @endif
                                </select>
                                {{-- <input type="text" class="form-control" name="id_gereja_martumpol" value="{{ $item['id_gereja_martumpol'] }}" placeholder="ID Gereja Martumpol"> --}}
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>ID Gereja Pemberkatan</label>
                                <select class="form-control" name="id_gereja_pemberkatan" autocomplete="off">
                                  <option class="form-control" value="">Pilih Gereja</option>
                                  @if($gereja != null)
                                  @foreach($gereja as $barang)
                                      <option  class="form-control" value="{{ $barang->id_gereja }}">{{ $barang->nama_gereja }}</option>
                                  @endforeach
                                  @endif
                                </select>
                                {{-- <input type="text" class="form-control" name="id_gereja_pemberkatan" value="{{ $item['id_gereja_pemberkatan'] }}" placeholder="ID Gereja Pemberkatan"> --}}
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <!-- text input -->
                              <div class="form-group">
                                <label>Tanggal Martumpol<span style="color: red;">*</span></label>
                                <input type="date" required autocomplete="off" class="form-control" name="tgl_martumpol" value="{{ $item['tgl_martumpol'] }}" placeholder="Tanggal Martumpol">
                              </div>
                            </div>
                            <div class="col-sm-6">
                             
                              <div class="form-group">
                                <label>Tanggal Pemberkatan<span style="color: red;">*</span></label>
                                <input type="date" required autocomplete="off" class="form-control" name="tgl_pemberkatan" value="{{ $item['tgl_pemberkatan'] }}" placeholder="Tanggal Pemberkatan">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <!-- text input -->
                              <div class="form-group">
                                <label>Tanggal Warta Martumpol<span style="color: red;">*</span></label>
                                <input type="date" required autocomplete="off" class="form-control" name="tgl_warta_martumpol" value="{{ $item['tgl_warta_martumpol'] }}" placeholder="Tanggal Warta Martumpol">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Tanggal Warta Pemberkatan<span style="color: red;">*</span></label>
                                <input type="date" required autocomplete="off" class="form-control" name="tgl_warta_pemberkatan" value="{{ $item['tgl_warta_pemberkatan'] }}" placeholder="Tanggal Warta Pemberkatan">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <!-- textarea -->
                              <div class="form-group">
                                <label>Nama Gereja Martumpol<span style="color: red;">*</span></label>
                                <input type="text" required autocomplete="off" class="form-control" name="nama_gereja_martumpol" value="{{ $item['nama_gereja_martumpol'] }}" placeholder="Nama Gereja Martumpol">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Nama Gereja Pemberkatan<span style="color: red;">*</span></label>
                                <input type="text" required autocomplete="off" class="form-control" name="nama_gereja_pemberkatan" value="{{ $item['nama_gereja_pemberkatan'] }}" placeholder="Nama Gereja Pemberkatan">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <!-- textarea -->
                              <div class="form-group">
                                <label>Nomor Surat Martumpol<span style="color: red;">*</span></label>
                                <input type="text" required autocomplete="off" class="form-control" name="nomor_surat_martumpol" value="{{ $item['nomor_surat_martumpol'] }}" placeholder="Nomor Surat Martumpol">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Nomor Surat Pemberkatan<span style="color: red;">*</span></label>
                                <input type="text" required autocomplete="off" class="form-control" name="nomor_surat_pemberkatan" value="{{ $item['nomor_surat_pemberkatan'] }}" placeholder="Nomor Surat Pemberkatan">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <!-- textarea -->
                              <div class="form-group">
                                <label>Nama Pendeta Martumpol<span style="color: red;">*</span></label>
                                <input type="text"required autocomplete="off" class="form-control" name="nama_pendeta_martumpol" value="{{ $item['nama_pendeta_martumpol'] }}" placeholder="Nama Pendeta Martumpol">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Nama Pendeta Pemberkatan<span style="color: red;">*</span></label>
                                <input type="text" required autocomplete="off" class="form-control" name="nama_pendeta_pemberkatan" value="{{ $item['nama_pendeta_pemberkatan'] }}" placeholder="Nama Pendeta Pemberkatan">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" autocomplete="off" class="form-control" name="keterangan" value="{{ $item['keterangan'] }}" placeholder="Tanggal Pemberkatan">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              
                            </div>
                          </div>
                        </div>
                        <a class="btn btn-primary" onclick="stepper.next()">Next</a>
                        <a class="btn btn-default float-right border" href="{{ route('martumpol') }}" id="buttonKembali">Kembali</a>
                      </div>
                      <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Lengkap<span style="color: red;">*</span></label>
                          <input type="text" required autocomplete="off" class="form-control" name="nama_lengkap_laki" value="{{ $item['nama_lengkap_laki'] }}" id="exampleInputText" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">ID Jemaat</label>
                          <select class="form-control" name="id_jemaat_laki" autocomplete="off">
                            <option class="form-control" value="">Pilih Jemaat</option>
                            @if($jemaat != null)
                            @foreach($jemaat as $barang)
                                <option  class="form-control" value="{{ $barang->id_jemaat }}">{{ $barang->nama_lengkap }}</option>
                            @endforeach
                            @endif
                          </select>
                          {{-- <input type="text" class="form-control" name="id_jemaat_laki" value="{{ $item['id_jemaat_laki'] }}" id="exampleInputText" placeholder="ID Jemaat"> --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">ID Gereja</label>
                          <select class="form-control" name="id_gereja_laki" autocomplete="off">
                            <option class="form-control" value="">Pilih Gereja</option>
                            @if($gereja != null)
                            @foreach($gereja as $barang)
                                <option  class="form-control" value="{{ $barang->id_gereja }}">{{ $barang->nama_gereja }}</option>
                            @endforeach
                            @endif
                          </select>
                          {{-- <input type="text" class="form-control" name="id_gereja_laki" value="{{ $item['id_gereja_laki'] }}" id="exampleInputText" placeholder="ID Gereja"> --}}
                        </div> 
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nama Gereja<span style="color: red;">*</span></label>
                          <input type="text" required autocomplete="off" class="form-control" name="nama_gereja_laki" value="{{ $item['nama_gereja_laki'] }}" id="exampleInputText" placeholder="ID Gereja">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nama Ayah<span style="color: red;">*</span></label>
                          <input type="text" required autocomplete="off" class="form-control" name="nama_ayah_laki" value="{{ $item['nama_ayah_laki'] }}" id="exampleInputText" placeholder="Nama Ayah">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nama Ibu<span style="color: red;">*</span></label>
                          <input type="text" required autocomplete="off" class="form-control" name="nama_ibu_laki" value="{{ $item['nama_ibu_laki'] }}" id="exampleInputText" placeholder="Nama Ibu">
                        </div>
                        <a class="btn btn-primary" onclick="stepper.previous()">Previous</a>
                        <a class="btn btn-primary" onclick="stepper.next()">Next</a>
                        <a class="btn btn-default float-right border" href="{{ route('martumpol') }}" id="buttonKembali">Kembali</a>
                      </div>
                      <div id="information2-part" class="content" role="tabpanel" aria-labelledby="information2-part-trigger">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Nama Lengkap<span style="color: red;">*</span></label>
                          <input type="text" required autocomplete="off" class="form-control" name="nama_lengkap_perempuan" value="{{ $item['nama_lengkap_perempuan'] }}" id="exampleInputText" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">ID Jemaat</label>
                          <select class="form-control" name="id_jemaat_perempuan" autocomplete="off">
                            <option class="form-control" value="">Pilih Jemaat</option>
                            @if($jemaat != null)
                            @foreach($jemaat as $barang)
                                <option  class="form-control" value="{{ $barang->id_jemaat }}">{{ $barang->nama_lengkap }}</option>
                            @endforeach
                            @endif
                          </select>
                          {{-- <input type="text" class="form-control" name="id_jemaat_perempuan" value="{{ $item['id_jemaat_perempuan'] }}" id="exampleInputText" placeholder="ID Jemaat"> --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">ID Gereja</label>
                          <select class="form-control" name="id_gereja_perempuan" autocomplete="off">
                            <option class="form-control" value="">Pilih Gereja</option>
                            @if($gereja != null)
                            @foreach($gereja as $barang)
                                <option  class="form-control" value="{{ $barang->id_gereja }}">{{ $barang->nama_gereja }}</option>
                            @endforeach
                            @endif
                          </select>
                          {{-- <input type="text" class="form-control" name="id_gereja_perempuan" value="{{ $item['id_gereja_perempuan'] }}" id="exampleInputText" placeholder="ID Gereja"> --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nama Gereja<span style="color: red;">*</span></label>
                          <input type="text" required autocomplete="off" class="form-control" name="nama_gereja_perempuan" value="{{ $item['nama_gereja_perempuan'] }}" id="exampleInputText" placeholder="ID Gereja">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nama Ayah<span style="color: red;">*</span></label>
                          <input type="text" required autocomplete="off" class="form-control" name="nama_ayah_perempuan" value="{{ $item['nama_ayah_perempuan'] }}" id="exampleInputText" placeholder="Nama Ayah">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nama Ibu<span style="color: red;">*</span></label>
                          <input type="text" required autocomplete="off" class="form-control" name="nama_ibu_perempuan" value="{{ $item['nama_ibu_perempuan'] }}" id="exampleInputText" placeholder="Nama Ibu">
                        </div>
                 
                      <div>
                        <a class="btn btn-primary" onclick="stepper.previous()">Previous</a>
                        <button type="submit" class="btn btn-warning btn-md">Edit</button>
                        <a class="btn btn-default float-right border" href="{{ route('martumpol') }}" id="buttonKembali">Kembali</a>
  
                      </div>
                      </div>
                    </div>
                     <!-- here -->
                    </form>
                    @endforeach
                     <!-- here -->
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for more examples and information about the plugin.
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        </section>
    </div>
            <!-- /.card -->