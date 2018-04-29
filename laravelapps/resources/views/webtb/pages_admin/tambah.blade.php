@extends('webtb.layouts.master')
@extends('webtb.layouts.navbar')
@extends('webtb.layouts.header')
@section('tittle','ini tambah')

@section('content')
<form action="{{ route('perpus.store') }}" method="POST" accept-charset="utf-8">
	@csrf
	<table border="1">
		<caption>TAMBAH DATA</caption>
		<tbody>
			<tr>
				<td>kode buku</td>
				<td>:</td>
				<td><input type="text" name="kode_buku" placeholder=""></td>
			</tr>
			<tr>
				<td>judul buku</td>
				<td>:</td>
				<td><input type="text" name="judul_buku"  placeholder=""></td>
			</tr>
			<tr>
				<td>nama penerbit</td>
				<td>:</td>
				<td><input type="text" name="namapenerbit_buku"  placeholder=""></td>
			</tr>
			<tr>
				<td>tahun  penerbit buku</td>
				<td>:</td>
				<td><input type="text" name="tahunpenerbit_buku"  placeholder=""></td>
			</tr>
			<tr>
				<td>halaman buku</td>
				<td>:</td>
				<td><input type="text" name="halaman_buku"  placeholder=""></td>
			</tr>
			<tr>
				<td>kategori</td>
				<td>:</td>
				<td><input type="text" name="kategori"  placeholder=""></td>
			</tr>
			<tr>
				<td>status</td>
				<td>:</td>
				<td><input type="text" name="status"  placeholder=""></td>
			</tr>
			<tr>
				<td>tanggal pinjam buku</td>
				<td>:</td>
				<td><input type="date" name="tanggalpinjam_buku"  placeholder=""></td>
			</tr>
			<tr>
				<td>tanggal kembali buku</td>
				<td>:</td>
				<td><input type="date" name="tanggalkembali_buku" value="" placeholder=""></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</tbody>
	</table>
</form>


@stop