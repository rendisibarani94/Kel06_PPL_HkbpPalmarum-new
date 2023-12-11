@include('layouts.formSearch.navbar')
@include('layouts.formSearch.header')
@include('layouts.formSearch.sidebar')
@include('layouts.formSearch.footer')

<div class="content-wrapper">

<div class="col">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Pemasukan</h3>
    </div>
    <div class="">
        <div class="card-body">
            <label for="example-select">Kategori </label>
              <select class="form-control" id="example-select">
                  <option value="1">Pemasukan Lelang</option>
                  <option value="2">Pemasukan Pengembangan Pelayanan</option>
                  <option value="3">Pemasukan Uang Pembangunan</option>
                  <option value="4">Pemasukan Sumbangan</option>
                  <option value="5">Pemasukan Persembahan Keluarga</option>
                  <option value="6">Pemasukan Ucapan Syukur</option>
                  <option value="7">Pemasukan Persembahan Mingguan</option>
              </select>
            </div>
      </div> 
    <div class="card-body">
      <!-- Date -->
      <div class="form-group">
        
        <label>ID Jemaat:</label>
        <input type="UANG" class="form-control" placeholder="Rp.">
        <label>Lingkungan:</label>
        <input type="UANG" class="form-control" placeholder="Rp.">
        <label>Tanggal:</label>
          <div class="input-group date" id="reservationdate" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>           
        </div> 
        <div class="form-group">
            <label>Kata Sumbangan:</label>
            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
          </div>
        <label for="">Pembagian Persembahan:</label>
        <div class="d-flex justify-content-between align-items-center">
        
        <div class="card-body">
          <label for="Card">Huria:</label>
          <div class="row">         
            <div class="col-4">
              <input type="text" class="form-control" placeholder="Rp.">
            </div>
         </div>
         <label for="Card">Punguan Ama:</label>
         <div class="row">
           <div class="col-4">
              <input type="text" class="form-control" placeholder="Rp.">
            </div>
         </div>
         <label for="Card">Pembangunan:</label>
         <div class="row">
           <div class="col-4">
              <input type="text" class="form-control" placeholder="Rp.">
            </div>
         </div>
         <label for="Card">Remaja Naposo Bulung:</label>
         <div class="row">
           <div class="col-4">
              <input type="text" class="form-control" placeholder="Rp.">
            </div>
         </div>
         <label for="Card">Penatua:</label>
         <div class="row">
           <div class="col-4">
              <input type="text" class="form-control" placeholder="Rp.">
            </div>
         </div>
         <label for="Card">Punguan Ina:</label>
         <div class="row">
           <div class="col-4">
              <input type="text" class="form-control" placeholder="Rp.">
            </div>
         </div>
           </div>
          
        </div>
        <label>Total Pemasukan:</label>
        <input type="UANG" class="form-control" placeholder="Rp.">
        <label>Bentuk Pemasukan:</label>
        <div class="row">
          <div class="col-lg-6">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <input type="checkbox" >
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Transfer">
            </div>
            <!-- /input-group -->
          </div>
          <!-- /.col-lg-6 -->
          <div class="col-lg-6">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><input type="checkbox"></span>
              </div>
              <input type="text" class="form-control" placeholder="Cash">
            </div>
            <!-- /input-group -->
          </div>
          <!-- /.col-lg-6 -->
        </div>
        <label>ID_Bank:</label>
        <input type="UANG" class="form-control" placeholder="Rp.">
      </div>   
      
      
      <div class="row">
        <div class="col-12">      
          <button type="button" class="btn btn-warning float-right"> Edit
          </button>
          <button type="button" class="btn btn-default float-right" style="margin-right: 5px;">
            Cancel
          </button>
        </div>
      </div>
      </div>

   
      </div>