@include('layouts.forms.header')
@include('layouts.forms.navbar')
@include('layouts.forms.sidebar')
@include('layouts.forms.footer')

<div class="content-wrapper">
<form>
  <div class="card">
    <div class="row">
        <div class="card-body">
          <div class="col-md-6">
              <div class="form-group">
                <label for="textField">Kategori Pemasukan</label>
                <input type="textField" class="form-control" id="textfield" placeholder="Kategori Pemasukan">
              </div>
              <div class="form-group">
                <label for="exampleInputTextField1">Deskripsi</label>
                <input type="TextField" class="form-control" id="exampleInputTextField1" placeholder="Deskripsi">
              </div>
            </div>
        </div>
    </div>
    </div>

    <div class="card-footer">
      <button type="cancel" class="btn btn-warning">  Edit </button>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-danger">Cancel</button>
      </div>
  </form>
