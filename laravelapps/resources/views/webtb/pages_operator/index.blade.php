@extends('webtb.layout_operator.master')
@extends('webtb.layout_operator.navbar')
@extends('webtb.layout_operator.header')
@section('tittle','DAFTAR BUKU')

@section('content')
<table border="1">
	<caption>DAFTAR BUKU</caption>
	<thead>
		<tr>
			<th>Id</th>
			<th>Kode Buku</th>
			<th>Judul Buku
			<th>Nama Penerbit</th>
			<th>Tahun Penerbit</th>
			<th>Jumlah Halaman</th>
			<th>Kategori</th>
			<th>Status</th>
		</tr>
	</thead>
<tbody>
		@foreach ($data_perpus2 as $key)
		<tr>
			<td>{{ $key->id }}</td>
			<td>{{ $key->kode_buku }}</td>
			<td>{{ $key->judul_buku }}</td>
			<td>{{ $key->namapenerbit_buku }}</td>
			<td>{{ $key->tahunpenerbit_buku }}</td>
			<td>{{ $key->halaman_buku }}</td>
			<td>{{ $key->kategori }}</td>
			<td>{{ $key->status }}</td>
			<td>{{ $key->tanggalpinjam_buku }}</td>
			<td>{{ $key->tanggalkembali_buku }}</td>
			<td><a href="#">edit</a> <a href="#">hapus</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@stop