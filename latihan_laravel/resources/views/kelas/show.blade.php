[10:13, 9/18/2019] Gabrielle'27: @extends('template')

@section('main')
<div id="kelas">
    <h2 align="center">Detail Kelas</h2>
<table class="table table-striped">
<tr>
      <th>ID Kelas</th>
      <td>{{ $kelas->id }}</td>
    </tr>
  <tr>
      <th>Nama</th>
      <td>{{ $kelas->nama_kelas }}</td>
    </tr>
</table>
<button type="button" class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/kelas'">Kembali</button>
</div>
@stop