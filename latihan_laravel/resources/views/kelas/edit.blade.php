@extends('template')

@section('main')
    <div id="kelas">
        <h2>Edit Kelas</h2>
        <br>
        <br>
        <form action="{{ url('kelas/' . $kelas->id. '/updatekelas') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field () }} 
            <div class="form-group">
                <label for="id" class="control-label">ID Kelas</label>
                <input name="id" type="text" class="form-control" value="{{ $kelas->id }}">
            </div>

            <div class="form-group">
                <label for="nama_kelas" class="control-label">Nama Kelas</label>
                <input name="nama_kelas" type="text" class="form-control" value="{{ $kelas->nama_kelas }}">
            </div>
           
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/siswa'">Kembali</button>
    </form>
</div>
@stop