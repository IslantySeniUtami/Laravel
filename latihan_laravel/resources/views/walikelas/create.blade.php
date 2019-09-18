@extends('template')

@section('main')
<div id="WaliKelas">
<br>
    <h2>Tambah WaliKelas</h2>
    <br>
    <form action="{{ url('walikelas') }}" method="post">
        {{ csrf_field () }}
        <div class="form-check">
        <br>
            <label for="id_guru" class="control-label">Nama Guru</label>
           
                <select class="custom-select" name="id_guru" class="form-control">
                    <option selected>Nama Wali...</option>
                    @foreach($guru_list as $guru)         
                    <option value="{{ $guru->id }}">{{$guru->nama_guru}}</option>
                    @endforeach
                </select>
            </div>
        <div class="form-check">
            <label for="id_kelas" class="control-label">Nama Kelas</label>
                <select class="custom-select" name="id_kelas" class="form-control">
                    <option selected>Kelas...</option>
                    @foreach($kelas_list as $kelas)
                    <option value="{{ $kelas->id }}">{{$kelas->nama_kelas}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@stop
        