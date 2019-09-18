@extends('template')

<br>
<br>
<br>
<br>
<br>

@section('main')
    <div id="guru">
        <h2>Tambah Kelas</h2>

        <form action="{{ url('kelas') }}" method="post">
            @csrf 
            <div class="form-group">
              <label for="nama_kelas" class="cotrol-label">Kelas</label>
              <input name="nama_kelas" type="text" class="form-control">
            </div>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@stop                     