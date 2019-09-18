<!DOCTYPE html>
<html>
<head>
	<title>Laporan PDF Siswa</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Siswa</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>NISN</th>
				<th>Nama</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Kelas</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($siswa as $s)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$s->nisn}}</td>
				<td>{{$s->nama_siswa}}</td>
				<td>{{$s->tanggal_lahir}}</td>
				<td>{{ $s->jenis_kelamin }}</td>
				<td>{{$s->kelas->nama_kelas}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>