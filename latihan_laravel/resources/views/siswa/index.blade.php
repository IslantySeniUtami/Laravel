@extends('template')

<br>
<br>
<br>
<br>
@section('main')
    <div id="siswa">
    <br>
    <h2><center>Siswa<center></h2>
    <br>

        @if (!empty($siswa_list))
        <a href="{{ url('siswa/create') }}" class="btn btn-primary">Tambah Siswa</a>
        <a href="{{ url('siswa/cetak_pdf') }}" class="btn btn-primary" target="_blank">Cetak PDF</a>
        <br>
            <table class="table">
                <thead>
                <br>
                    <tr>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Tgl Lahir</th>
                        <th>JK</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=0;?>
                    @foreach ($siswa_list as $siswa)
                    <tr>
                        <td>{{ $siswa->nisn }}</td>
                        <td><a href="/siswa/{{$siswa->id}}/profile">{{ $siswa->nama_siswa }}</a></td>
                        <td>{{ $siswa->tanggal_lahir }}</td>
                        <td>{{ $siswa->jenis_kelamin }}</td>
                        <td>{{ ! empty($siswa->kelas->nama_kelas) ?
                                $siswa->kelas->nama_kelas : '-' }}</td>
                        <td><a class="btn btn-success btn-sm" href="{{ url('siswa/' .$siswa->id) }}">Detail</a></td>
                        <td><a class="btn btn-warning btn-sm" href="{{ url('siswa/' . $siswa->id . '/edit') }}">Edit</a></td>
                        <td><a class="btn btn-danger btn-sm" href="{{ url('siswa/' . $siswa->id . '/delete') }}" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</a></td>
                        <?php $i++;?>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <center><h5>Jumlah Siswa : {{$i}} </h5></center>
                @else
            <p>Tidak ada data siswa.</p>
        @endif
    </div>
@stop

