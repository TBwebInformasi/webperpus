<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hasil</title>
    <link rel="stylesheet" href="css/nav.css">
     </head>

  <body>

    <nav>
    <ul>
        <li><a href="alamatnya">Cari Buku</a></li>
        <li><a href="{{ url('/coba2')}}">list Buku</a>
            <ul>
            </ul>
        </li>
        <li><a href="alamatnya" onClick="return confirm ('Yakin?')">Home</a></li>
    </ul>
</nav>




	<table border="5">
			<tr>no</tr>
			<tr>kode buku</tr>
			<tr>judul buku</tr>
			<tr>nama penerbit</tr>
			<tr>nama penerbit buku</tr>
			<tr>halaman buku</th>
			<tr>kategori</th>
			<tr>status</th>
			<tr>tanggal pinjam buku</tr>
			<tr>tanggal kembali buku</tr>
			<tr>action</tr>
	</table>	

<script src="{{ asset('awal/vendor/jquery/jquery.min.js')}}"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>