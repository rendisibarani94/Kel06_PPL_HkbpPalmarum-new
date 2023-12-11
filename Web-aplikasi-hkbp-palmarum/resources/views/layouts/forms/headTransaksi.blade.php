@include('layouts.formSearch.navbar')
@include('layouts.formSearch.header')
@include('layouts.formSearch.sidebar')
@include('layouts.formSearch.footer')


{{-- done --}}
<div class="content-wrapper">

<div class="col">
<div class="card card-primary">
  <div class="card-header">
    <h2 style="font-weight: bold;">Head Transaksi</h2>
  </div>

    <div class="card-body">
      <!-- Date -->
      <div class="form-group">
        
       
 
        <div class="d-flex justify-content-between align-items-center row">
          <label>ID Transaksi :</label><br> <br>
          <input type="UANG" class="form-control" placeholder="masukkan id transaksi"><br>
          <label>Jenis Transaksi :</label> <br>
          <input type="UANG" class="form-control" placeholder="Masukkan jenis transaksi"><br>
          <label>Nomor Transaksi :</label> <br>
          <input type="UANG" class="form-control" placeholder="Masukkan nomor transaksi"><br>  
          <label for="Card">Tanggal Transaksi</label> <br>
             <div class="input-group date" id="reservationdate" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
             </div>           
             </div> <br>
          <label>Tahun Anggaran :</label> <br>
          <input type="UANG" class="form-control" placeholder="Masukkan nama mata anggaran"><br>
          <label for="Card">Tanggal Transaksi</label> <br>
          <div class="input-group date" id="reservationdate" data-target-input="nearest">
             <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                 <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                 <div class="input-group-text"><i class="fa fa-calendar"></i></div>
         </div>           
         </div> <br>
          <label>IS Jemaat :</label> <br>
          <input type="UANG" class="form-control" placeholder="Masukkan is jemaat"> <br> 
          <label>ID Jemmat :</label> <br>
          <input type="UANG" class="form-control" placeholder="Masukkan id jemaat"><br> 
          
        
         <div class="row">
            <div class="card-body">
                <label for="example-select">Tahun Anggaran</label>
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
                </div>
          </div> <br>
        
          
        </div>
      
      
      <div class="row">
        <div class="col-12">      
          <button type="button" class="btn btn-default float-right"> Edit</button>
          <button type="button" class="btn btn-success float-right" style="margin-right: 5px;">Create</button>
        </div>
      </div>
      </div>

   
      </div>