@extends('dashboard.masterdashboard')
@section('main.create')
<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card"> 
      <form action="/save" method="POST">
        @csrf
        <div class="card-body">   
<div class="row">
<div class="col-md-6">
  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" value="" class="form-control">
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
    <label>Prodi</label>
           <input type="text" name="prodi" value="" class="form-control">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label>Fakultas</label>
      <input type="text" name="fakultas" value="" class="form-control">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>Angkatan</label>
             <input type="text" name="angkatan" value="" class="form-control">
      </div>
    </div>
  </div>
<div class="card-footer text-right">
<button class="btn btn-primary mr-1" type="submit">Save</button>
</div>
</form>
</div>
</div>
</div>    
@endsection

