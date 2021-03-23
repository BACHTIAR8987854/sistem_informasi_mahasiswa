@extends('dashboard.masterdashboard')
@section('main.edit')
<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card"> 
      <form action="/update/{{$mahasiswa->id}}" method="POST">
        <input type="hidden" name="_method" value="put">
        @csrf
        @method('put')
        <div class="card-body">   
<div class="row">
<div class="col-md-6">
  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" value="{{$mahasiswa->nama}}" class="form-control">
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
    <label>Prodi</label>
           <input type="text" name="prodi" value="{{$mahasiswa->prodi}}" class="form-control">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label>Fakultas</label>
      <input type="text" name="fakultas" value="{{$mahasiswa->fakultas}}" class="form-control">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>Angkatan</label>
             <input type="text" name="angkatan" value="{{$mahasiswa->angkatan}}" class="form-control">
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
