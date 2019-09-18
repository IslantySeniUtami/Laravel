@extends('template')

<br>
<br>
<br>
<br>
@section('main')
    <div id="walikelas">
    <br>
    <h2><center>WaliKelas<center></h2>
    <br>

        @if (!empty($walikelas_list))
        <a href="createWaliKelas" class="btn btn-primary">Tambah WaliKelas</a>
        <br>
 
            <table class="table">
                <thead>
                <br>
                    <tr>
                        <th>id</th>
                        <th>Nama Guru</th>
                        <th>Nama Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=0;?>
                    @foreach ($walikelas_list as $walikelas)
                    <tr>
                        <td>{{ $walikelas->id }}</td>
                        <td>{{ ! empty($walikelas->guru->nama_guru) ?
                                $walikelas->guru->nama_guru : '-' }}</td>
                        <td>{{ ! empty($walikelas->kelas->nama_kelas) ?
                                $walikelas->kelas->nama_kelas : '-' }}</td>
                        <td><a class="btn btn-success btn-sm" href="{{ url('walikelas/' .$walikelas->id) }}">Detail</a></td>
                        <td><a class="btn btn-warning btn-sm" href="{{ url('walikelas/' . $walikelas->id . '/edit') }}">Edit</a></td>
                        <td><a class="btn btn-danger btn-sm" href="{{ url('walikelas/' . $walikelas->id . '/deletewali') }}" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</a></td>
                        <?php $i++;?>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <center><h5>Jumlah WaliKelas : {{$i}} </h5></center> 
            @else
            <p>Tidak ada data walikelas.</p>
        @endif
    </div>
@stop
