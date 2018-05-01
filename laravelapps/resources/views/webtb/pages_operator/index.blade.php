@extends('webtb.layout_operator.master')
@extends('webtb.layout_operator.navbar')
@extends('webtb.layout_operator.header')
@section('tittle','DAFTAR BUKU')


@section('content')

<link rel="stylesheet" href="css/a.css">

	<thead>
		<table class="table_zebra">
		<tr>
			<th>Kode Buku</th>
			<th>Judul Buku</th>
			<th>Nama Penerbit</th>
			<th>Kategori</th>
			<th>Tahun</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($data_perpus2 as $key)
		<tr>
			<td>{{ $key->kode_buku }}</td>
			<td>{{ $key->judul_buku }}</td>
			<td>{{ $key->namapenerbit_buku }}</td>
			<td>{{ $key->kategori }}</td>
			<td>{{ $key->tanggalpinjam_buku }}</td>
			<td><a href="coba3"><button type="button">Rivew</a></td> 
		</tr>
		@endforeach
	</tbody>
</table>
@stop