@extends('webpp.layout.master')
@extends('webpp.layout.header')
@extends('webpp.layout.navbar')
@extends('webpp.layout.footer')
@extends('webpp.layout.controlSidebr')

@section('tittle','Daftarkan Mahasiswa')

@section('content')
<!-- general form elements -->
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Tambah data</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form  action="{{ route('webpp.store') }}" method="post"  >
		@csrf
		<div class="box-body">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Kode Buku</label>
					<input type="text" class="form-control" id="kodebuku" name="kodebuku" placeholder="Enter Name">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">judulbuku</label>
					<input type="text" class="form-control" id="judulbuku" name="judulbuku" placeholder="Enter Nim">
				</div>
				{{-- <div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Jenis Kelamin </label> <br>
							<select name="Jk_mahasiswa" class="form-control" >
								<option selected="selected" value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>
					</div>
				</div> --}}
				<div class="form-group">
					<label for="exampleInputEmail1">namapenerbit</label>
					<input type="text" class="form-control" id="namapenerbit" name="namapenerbit" placeholder="Enter Nim">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">tahunpenerbit</label>
					<input type="text" class="form-control" id="exampleInputEmail1" name="tahunpenerbit" placeholder="Enter Nim">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">kategori</label>
					<input type="text" class="form-control" id="kategori" name="kategori" placeholder="Enter Nim">
				</div>
{{-- 				<div class="form-group">
					<label for="exampleInputFile">Masukkan Foto</label>
					<input type="file" name="" id="exampleInputFile">
				</div> --}}
			</div>
		</div>
		<!-- /.box-body -->
		<div class="box-footer">
			<a href="{{ url('webpp') }}" class="btn btn-flat">Cancel</a>
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
</div>

<!-- /.box -->

@endsection
