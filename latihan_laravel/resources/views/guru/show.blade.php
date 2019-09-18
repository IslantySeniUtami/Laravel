@extends('template')
 <br>
 <br>
 <br>
 <br>

@section('main')
    <div id="guru">
        <h2>Detail Guru</h2>

        <table class="table table-striped">
        <tr>
        <center><img src="{{ asset('img/'.$guru->avatar) }}" alt="avatar" class="rounded" width="150px"> </center>
            </tr>
            <tr>
                <th>NIP</th>
                <td>{{ $guru->nip }}</td>
            </tr>
            <tr>
                <th>Nama Guru</th>
                <td>{{ $guru->nama_guru }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $guru->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $guru->jenis_kelamin }}</td>
            </tr>
        </table>
        <button type="button" class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/guru'">Kembali</button>
    </div>
@stop