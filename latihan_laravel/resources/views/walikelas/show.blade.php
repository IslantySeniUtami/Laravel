@extends('template')

@section('main')
<div id="walikelas">
    <h2 align="center">Detail Walikelas</h2>
<table class="table table-striped">
  <tr>
  <br>
  <br>
      <th>ID</th>
      <td>{{ $walikelas->id }}</td>
    </tr>
    <tr>
      <th>Nama Guru</th>
      <td>{{ $walikelas->guru->nama_guru }}</td>
    </tr>
    <tr>
      <th>Kelas</th>
      <td>{{ $walikelas->kelas->nama_kelas }}</td>
    </tr>
</table>
<button type="button" class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/walikelas'">Kembali</button>
</div>
@stop