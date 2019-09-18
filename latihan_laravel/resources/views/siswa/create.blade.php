@extends('template')

<br>
<br>
<br>
<br>
<br>

@section('main')
    <div id="siswa">
        <h2>Tambah Siswa</h2>

        <form action="{{ url('siswa') }}" method="post">
            @csrf 
            <div class="form-group">
                <label for="nisn" class="cotrol-label">NISN</label>
                <input name="nisn" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nama_siswa" class="control-label">Nama</label>
                    <input name="nama_siswa" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
                        <input name="tanggal_lahir" type="date" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" checked>
                                <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" checked>
                                    <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label>
                                    </div>

                                    <div class="form-group">
                                        <label for="id_kelas" class="control-label text-secondary">Nama Kelas:</label>
                                        <select required class="form-control col-md-4 col-form-label text-center" type="type" name="id_kelas">
                                        @foreach ($kelas as $kelas)
                                        <option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
                                        @endforeach
                                        </select>
                                        </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/siswa'">Kembali</button>

    </form>
</div>
@stop                     