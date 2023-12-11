@include('layouts.forms.header')
@include('layouts.forms.navbar')
@include('layouts.forms.sidebar')
@include('layouts.forms.footer')

<!-- general form elements disabled -->
        <div class="content-wrapper"><br><br>
        <section class="content">
            <div class="card card-primary">
              <div class="card-header" style="height:6rem;">
                <h3 class="card-title" id="textHeader">Update Data Jemaat Pindah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @foreach ($pindah['data'] as $item)
                  
                <form action="{{ route('updatePindah') }}" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <input type="hidden" name="id_head_reg_pindah" value="{{ $item['id_head_reg_pindah'] }}">
                        <label>ID Registrasi Jemaat<span style="color: red;">*</span></label>
                        <select class="form-control" name="id_registrasi" required autocomplete="off">
                          <option class="form-control" value="">Pilih Registrasi Jemaat</option>
                          @if($registrasi != null)
                          @foreach($registrasi as $barang)
                              <option  class="form-control" value="{{ $barang->id_registrasi }}">Keluarga {{ $barang->nama_keluarga }}</option>
                          @endforeach
                          @endif
                        </select>
                        {{-- <input type="text" class="form-control" name="id_registrasi" value="{{ $item['id_registrasi'] }}" placeholder="ID Registrasi Jemaat"> --}}
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>ID Jemaat<span style="color: red;">*</span></label>
                        <select class="form-control" name="id_registrasi" required autocomplete="off">
                          <option class="form-control" value="">Pilih Jemaat</option>
                          @if($jemaat != null)
                          @foreach($jemaat as $barang)
                              <option  class="form-control" value="{{ $barang->id_jemaat }}">{{ $barang->nama_lengkap }}</option>
                          @endforeach
                          @endif
                        </select>
                        {{-- <input type="text" class="form-control" name="id_jemaat" value="{{ $item['id_jemaat'] }}" placeholder="ID Jemaat"> --}}
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>No Surat Pindah<span style="color: red;">*</span></label>
                        <input type="text" required autocomplete="off" class="form-control" name="no_surat_pindah" value="{{ $item['no_surat_pindah'] }}" placeholder="No Surat Pindah">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>ID Gereja Tujuan</label>
                        <select class="form-control" name="id_gereja_tujuan" autocomplete="off">
                          <option class="form-control" value="">Pilih Gereja</option>
                          @if($gereja != null)
                          @foreach($gereja as $barang)
                              <option  class="form-control" value="{{ $barang->id_gereja }}">{{ $barang->nama_gereja }}</option>
                          @endforeach
                          @endif
                        </select>
                        {{-- <input type="text" class="form-control" name="id_gereja_tujuan" value="{{ $item['id_gereja_tujuan'] }}" placeholder="ID Gereja Tujuan"> --}}
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tanggal Pindah<span style="color: red;">*</span></label>
                        <input type="date" required autocomplete="off" class="form-control" name="tgl_pindah" value="{{ $item['tgl_pindah'] }}" placeholder="Tanggal Pindah">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Gereja<span style="color: red;">*</span></label>
                        <input type="text" required autocomplete="off" class="form-control" name="nama_gereja" value="{{ $item['nama_gereja'] }}" placeholder="Nama Gereja Non-HKBP">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" autocomplete="off" name="keterangan"  rows="3" placeholder="keterangan">{{ $item['keterangan'] }}</textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Warta<span style="color: red;">*</span></label>
                        <input type="date" required class="form-control" name="tgl_warta" value="{{ $item['tgl_warta'] }}" placeholder="Tanggal Warta">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <a href="{{ route('pindah') }}" class="btn btn-outline-dark btn-lg ml-3 float-right">Cancel</a>
                    <button type="submit" class="btn btn-warning btn-lg float-right">Edit</button>
                    </div>
                </form>
                
                @endforeach
              </div>
              <!-- /.card-body -->
            </div>
        </section>
    </div>
            <!-- /.card -->