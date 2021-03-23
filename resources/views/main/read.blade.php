@extends('dashboard.masterdashboard')
@section('main.read')
<a href="/create" class="btn btn-info">
  Tambah
 </a>
 <hr>
<div class="animated FadeIn">
  <table class="table table-bordered">
    <thead>
      <tr class="text-center">
        <th>No.</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Fakultas</th>
        <th>Angkatan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($mahasiswa as $item)
        <tr class="text-center">
          <td>{{ $loop->iteration}}</td>
          <td>{{ $item->nama}}</td>
          <td>{{ $item->prodi}}</td>
          <td>{{ $item->fakultas}}</td>
          <td>{{ $item->angkatan}}</td>
          <td class="text-center">
            <a href="/edit/{{$item->id}}" class="btn btn-danger">
              Edit
             </a>
             <a href="/delete/{{ $item->id }}" class="btn btn-warning">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>   
@endsection

