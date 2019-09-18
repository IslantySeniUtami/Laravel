@extends('template')
 <br>
 <br>
 <br>
 <br>

@section('main')
    <div id="siswa">
        <h2>Detail Siswa</h2>

        <table class="table table-striped">
        <tr>
            <center><img src="{{ asset('img/'.$siswa->avatar) }}" alt="avatar" class="rounded" width="200px"> </center>
            </tr>
            <br>
            <tr>
                <th>NISN</th>
                <td>{{ $siswa->nisn }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $siswa->nama_siswa }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $siswa->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $siswa->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>{{ ! empty($siswa->kelas->nama_kelas) ?
                                $siswa->kelas->nama_kelas : '-' }}</td>
            </tr>
        </table>
        <button type="button" class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/siswa'">Kembali</button>
    </div>
@stop