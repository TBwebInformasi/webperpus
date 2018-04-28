<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>tambah</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="{{ route('mhs.store') }}" method="post" accept-charset="utf-8">
		@method('PUT')
		@csrf
		<table>
			<caption>Tambah DATA</caption>
			<tbody>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>email</td>
					<td>:</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>password</td>
					<td>:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="selesai"></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>