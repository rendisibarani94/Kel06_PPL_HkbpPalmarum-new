@include('layouts.formSearch.navbar')
@include('layouts.formSearch.header')
@include('layouts.formSearch.sidebar')
@include('layouts.formSearch.footer')


{{-- done --}}
<div class="content-wrapper">

<div class="col">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Persembahan Jemaat</h3>
    </div>

    <div class="card-body">
      <!-- Date -->
      <div class="form-group">
        
       
 
        <div class="d-flex justify-content-between align-items-center row">
          <label>No Transaksi :</label>
          <input type="UANG" class="form-control" placeholder="masukkan id transaksi">
          <label>Mata Anggaran :</label>
          <input type="UANG" class="form-control" placeholder="Masukkan mata uang">
          <label>Jumlah :</label>
          <input type="UANG" class="form-control" placeholder="Masukkan jumlah yang ada">
          <label>Sentralisasi</label>
          <input type="UANG" class="form-control" placeholder="Masukkan sentralisasi">
          <label for="example-select">Tahun Anggaran</label><br>
                  <select class="form-control" id="example-select">
                    <option value="1">2023</option>
                    <option value="2">2022</option>
                    <option value="3">2021</option>
                    <option value="4">2020</option>
                    <option value="5">2019</option>
                    <option value="6">2018</option>
                    <option value="7">2017</option>
                    <option value="8">2016</option>
                    <option value="9">2016</option>
                    <option value="10">2015</option>
                    <option value="11">2014</option>
                    <option value="12">2013</option>
                    <option value="13">2012</option>
                    <option value="14">2011</option>
                    <option value="15">2010</option>     
                  </select>
          <label>Jumlah Gereja</label>
          <input type="UANG" class="form-control" placeholder="Masukkan jumlah gereja">
          <label>Persembahan Tahun</label>
          <input type="UANG" class="form-control" placeholder="Masukkan persembahan tahun">
          <label>Bulan Awal</label>
          <input type="UANG" class="form-control" placeholder="Masukkan bulan awal">
          <label for="Card">Tanggal Transaksi</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>           
                        </div> 
                        <label for="Card">Tanggal Warta</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>           
                        </div>                         

          <label>Bulan  Akhir:</label>
          <input type="UANG" class="form-control" placeholder="Bulan akhir">
          <label>Keterangan :</label>
          <input type="UANG" class="form-control" placeholder="Masukkan keterangan">
       

          
          
        </div>
        <div class="row">
            <div class="card-body">
 <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID Transaksi</th>
                <th>ID Mata Anggaran</th>
                <th>Jumlah Sentralisasi</th>
                <th>Jumlah Gereja</th>
                <th>Persembahan Tahun</th>
                <th>Bulan Awal</th>
                <th>Bulan Akhir</th>
                <th>Keterangan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Trident</td>
                <td>Trident</td>                           
                <td>Trident</td>
                <td>Trident</td>                           
                <td>Trident</td>
                <td>Trident</td>                           
                <td>Trident</td>
                <td>
                  <button class="btn btn-primary"><i><img src="icon/search2.png" alt="" class="iconbutton"></i></button>
                  <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                  <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                </td>
              </tr>
              <!-- Tambahkan baris lainnya sesuai kebutuhan -->
            </tbody>
          </table>
            </div>
            
        </div>
       
      
      <div class="row">
        <div class="col-12">      
          <button type="button" class="btn btn-default float-right"> Edit</button>
          <button type="button" class="btn btn-success float-right" style="margin-right: 5px;">Create</button>
        </div>
      </div>
      </div>

   
      </div>