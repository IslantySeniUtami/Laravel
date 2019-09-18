@extends('template')

<br>
<br>
<br>
<br>
@section('main')
    <div id="kelas">
    <br>
    <h2><center>Kelas<center></h2>
    <br>

        @if (!empty($kelas_list))
        <a href="{{ url('create') }}" class="btn btn-primary">Tambah Kelas</a>
        <br>
 
            <table class="table">
                <thead>
                <br>
                    <tr>
                        <th>id</th>
                        <th>Nama Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=0;?>
                    @foreach ($kelas_list as $kelas)
                    <tr>
                        <td>{{ $kelas->id }}</td>
                        <td>{{ $kelas->nama_kelas }}</td>
                        <td><a class="btn btn-success btn-sm" href="{{ url('kelas/' .$kelas->id) }}">Detail</a></td>
                        <td><a class="btn btn-warning btn-sm" href="{{ url('kelas/' . $kelas->id . '/edit') }}">Edit</a></td>
                        <td><a class="btn btn-danger btn-sm" href="{{ url('kelas/' . $kelas->id . '/delete') }}" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</a></td>
                        <?php $i++;?>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <center><h5>Jumlah Kelas : {{$i}} </h5></center>
                    @else
            <p>Tidak ada data kelas.</p>
        @endif
    </div>
@stop
