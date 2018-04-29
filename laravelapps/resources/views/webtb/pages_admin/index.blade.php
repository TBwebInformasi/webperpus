@extends('webtb.layouts.master')
@extends('webtb.layouts.navbar')
@extends('webtb.layouts.header')
@section('tittle','ini index')

@section('content')



<table border="1">
	<caption>coba data</caption>
	<thead>
		<tr>
			<th>no</th>
			<th>kode buku</th>
			<th>judul buku</th>
			<th>nama penerbit</th>
			<th>nama penerbit buku</th>
			<th>halaman buku</th>
			<th>kategori</th>
			<th>status</th>
			<th>tanggal pinjam buku</th>
			<th>tanggal kembali buku</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($data_perpus as $key)
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