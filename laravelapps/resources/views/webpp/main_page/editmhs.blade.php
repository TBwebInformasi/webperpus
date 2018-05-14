@extends('webpp.layout.master')
@extends('webpp.layout.header')
@extends('webpp.layout.navbar')
@extends('webpp.layout.footer')
@extends('webpp.layout.controlSidebr')

@section('tittle','Daftarkan Mahasiswa')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Blank page
    <small>it all starts here</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Examples</a></li>
    <li class="active">Blank page</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Title</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
        title="Collapse">
        {{-- <i class="fa fa-minus"></i></button> --}}
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          {{-- <i class="fa fa-times"></i></button> --}}
        </div>
      </div>
      <div class="box-body">
       <form action="{{ route('modul5.update' , $data->id) }}" method="POST" accept-charset="utf-8">
        @method('PATCH')
        @csrf
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Mahasiswa</label>
              <input type="text" class="form-control" {{-- id="exampleInputEmail1" --}} name="Nama_mahasiswa" placeholder="Enter Name" value="{{ $data->Nama_mahasiswa }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nim Mahasiswa</label>
              <input type="text" class="form-control" {{-- id="exampleInputEmail1" --}} name="Nim_mahasiswa" placeholder="Enter Nim" value="{{ $data->Nim_mahasiswa }}">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label >Jenis Kelamin </label> <br>
                  <select name="Jk_mahasiswa" class="form-control " value="{{ $data->Jk_mahasiswa }}">
                    <option selected="selected" value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">No telp/HP</label>
              <input type="text" class="form-control" {{-- id="exampleInputEmail1" --}} name="Nohp_mahasiswa" placeholder="Enter Nim" value="{{ $data->Nohp_mahasiswa }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">gambar</label>
              <input type="text" class="form-control" {{-- id="exampleInputEmail1" --}} name="gmbar_mahasiswa" placeholder="Enter Nim">
            </div>
{{--        <div class="form-group">
          <label for="exampleInputFile">Masukkan Foto</label>
          <input type="file" name="" id="exampleInputFile">
        </div> --}}
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<!-- /.box-body -->
<div class="box-footer">
  
</div>
<!-- /.box-footer-->
</div>
<!-- /.box -->

</section>
<!-- /.content -->
@endsection