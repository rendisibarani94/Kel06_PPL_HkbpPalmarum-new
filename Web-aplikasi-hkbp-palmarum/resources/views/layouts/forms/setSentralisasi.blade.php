@include('layouts.forms.header')
@include('layouts.forms.navbar')
@include('layouts.forms.sidebar')
@include('layouts.forms.footer')

<br>  
<div class="content-wrapper"> 
  <div class="col">
    <div class="card card-primary">
      <div class="card-header">
        <h2 style="font-weight: bold;">Set Sentralisasi</h2>
      </div>
     
      <form action="{{ route('tambahSentralisasi') }}" method="POST">
        @csrf

        <div class="card-body">
          <!-- Date -->
          <div class="form-group">    
            <label>Persentase Sentralisasi:</label>
            <input type="text" name="persentasi_sentralisasi" class="form-control" placeholder="Masukkan persentase sentralisasi">
            <br>
            <label>Keterangan:</label>
            <input type="text" name="keterangan" class="form-control" placeholder="Masukkan keterangan">
            <br>  
          </div><br><br><br>
          
          <div class="row">
            <div class="col-12">      
              <button type="button" href="" class="btn btn-default float-right">Edit</button>
              <button type="submit" class="btn btn-success float-right" style="margin-right: 5px;">Create</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
