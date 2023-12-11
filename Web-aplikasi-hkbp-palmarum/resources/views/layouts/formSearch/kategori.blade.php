@include('layouts.formSearch.navbar')
@include('layouts.formSearch.header')
@include('layouts.formSearch.sidebar')
@include('layouts.formSearch.footer')

<form>
    <div class="card-body">
      <div class="form-group">
        <label for="textField">Kategori Pengeluaran</label>
        <input type="textField" class="form-control" id="textfield" placeholder="Kategori Pengeluaran">
      </div>
      <div class="form-group">
        <label for="exampleInputTextField1">Deskripsi</label>
        <input type="TextField" class="form-control" id="exampleInputTextField1" placeholder="Deskripsi">
      </div>
    </div>


    <div class="card-footer">
      <button type="cancel" class="btn btn-primary">Cancel</button>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </form>