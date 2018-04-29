@extends('webtb.layout_operator.master')
@extends('webtb.layout_operator.navbar')
@extends('webtb.layout_operator.header')
@section('tittle','ini index')

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
<!-- 	<tbody>
		<tr>
			<td>data</td>
		</tr>
	</tbody> -->
</table>
@stop