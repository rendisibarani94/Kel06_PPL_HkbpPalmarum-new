@include('layouts.forms.header')
@include('layouts.forms.navbar')
@include('layouts.forms.sidebar')
@include('layouts.forms.footer')

<br>  
<div class="content-wrapper"> 
  <div class="col">
    <div class="card card-primary">
      <div class="card-header">
        <h2 style="font-weight: bold;">Edit Sentralisasi</h2>
      </div>
      
      <form action="{{ route('updateSentralisasi', $data->id_sentralisasi) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <!-- <input type="hidden" name="id_sentralisasi" value="{{ $data->id_sentralisasi }}"> -->
          <!-- Date -->
          <div class="form-group">
          <input type="hidden" name="id_sentralisasi" class="form-control" value="{{ $data->id_sentralisasi }}">    
            <label>Persentase Sentralisasi:</label>
            <input type="text" name="persentasi_sentralisasi" class="form-control" value="{{ $data->persentasi_sentralisasi }}" placeholder="Masukkan persentase sentralisasi">
            <br>
            <label>Keterangan:</label>
            <input type="text" name="keterangan" class="form-control" value="{{ $data->keterangan }}" placeholder="Masukkan keterangan">
            <br>  
          </div><br><br><br>
          
          <div class="row">
            <div class="col-12">      
              <button type="button" href="" class="btn btn-default float-right">Edit</button>
              <button type="submit" class="btn btn-success float-right" style="margin-right: 5px;">Update</button>
            </div>
          </div>
        </div>
      </form>
    
    </div>
  </div>
</div>
