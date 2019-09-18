@extends('template')

<br>
<br>
<br>
<br>
@section('main')
    <div id="guru">
    <br>
    <h2><center>Guru<center></h2>
    <br>

        @if (!empty($guru_list))
        <a href="{{ url('createGuru') }}" class="btn btn-primary">Tambah Guru</a>
        <br>
        
            <table class="table">
                <thead>
                <br>
                    <tr>
                        <th>NIP</th>
                        <th>Nama Guru</th>
                        <th>Tgl Lahir</th>
                        <th>JK</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=0;?>
                    @foreach ($guru_list as $guru)
                    <tr>
                        <td>{{ $guru->nip }}</td>
                        <td>{{ $guru->nama_guru }}</td>
                        <td>{{ $guru->tanggal_lahir }}</td>
                        <td>{{ $guru->jenis_kelamin }}</td>
                        <td><a class="btn btn-success btn-sm" href="{{ url('guru/' .$guru->id) }}">Detail</a></td>
                        <td><a class="btn btn-warning btn-sm" href="{{ url('guru/' . $guru->id . '/edit') }}">Edit</a></td>
                        <td><a class="btn btn-danger btn-sm" href="{{ url( 'guru/' .$guru->id . '/deleteGuru') }}" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</a></td>
                        <?php $i++;?>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <center><h5>Jumlah Guru : {{$i}} </h5></center>
                    @else
            <p>Tidak ada data guru.</p>
        @endif
    </div>
@stop

