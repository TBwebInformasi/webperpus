<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hasil</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/d.css">
     </head>

  <body>

    <nav>
    <ul>
        <li><a href="alamatnya">Cari Buku</a></li>
        <li><a href="{{ url('/coba2')}}">List Buku</a>
            <ul>
            </ul>
        </li>
        <li><a href="alamatnya" onClick="return confirm ('Yakin?')">Home</a></li>
    </ul>
</nav>

	<table class="table1">
		<tr>
			<td>
			LEGENDA DANAU TOBA </td>
		</tr>
		<tr>
			<td>Kode Buku :</td>
		</tr>
		<tr>
			<td>Penerbit :</td>
		</tr>
		<tr>
			<td>Penulis :</td>
		</tr>
		<tr>
			<td>Kategori :</td>
		</tr>
		<tr>
			<td>Tahun :</td>
		</tr>
		<tr>
			<td>Lokasi Rak Buku :</td>
		</tr>
		<tr>
			<td>Status :</td>
		</tr>
	</table>	

  </body>

</html>