<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CRUD mhs</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table border="1">
		<caption>SHOW DATA</caption>
		<thead>
			<tr>
				<th>no</th>
				<th>nama</th>
				<th>email</th>
				<th>Create AT</th>
				<th>action</th>
			</tr>

		</thead>
		<tbody>
			@foreach ($data_mahasiswa as $key)
			<tr>
				<td>{{ $key->id }}</td>
				<td>{{ $key->name_mahasiswa }}</td>
				<td>{{ $key->email_mahasiswa }}</td>
				<td></td>
				<td><a href="#" class="bootstrap">edit</a> <a href="#">hapus</a></td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
</body>
</html>