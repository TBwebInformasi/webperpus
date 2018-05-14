@extends('webpp.layoutsadmin.masteradmin')
@extends('webpp.layoutsadmin.footeradmin')
@extends('webpp.layoutsadmin.navbaradmin')
@extends('webpp.layoutsadmin.sidebaradmin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">XXX</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Buku </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Tambah Buku</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <div class="col-md-6">
          <form role="form" action="{{ route('webpp.store') }}" method="post">
            @csrf
          <div class="card-body">
            <div class="row">
              <div class="form-group">
                <label for="exampleInputEmail1">Kode Buku</label>
                <div class="input-group mb-10">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ion-compose"></i></span>
                  </div>
                  <input type="text" class="form-control" name="kodebuku" id="kodebuku" placeholder="Kode Buku">
                </div>

                <label for="exampleInputEmail1">Judul Buku</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ion-compose"></i></span>
                  </div>
                  <input type="text" class="form-control" name="judulbuku" id="judulbuku" placeholder="Judul Buku">
                </div>

                <label for="exampleInputEmail1">Pengarang</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ion-person"></i></span>
                  </div>
                  <input type="text" class="form-control" name="namapengarang" id="namapengarang" placeholder="Pengarang">
                </div>

                <label for="exampleInputEmail1">Penerbit</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ion-compose"></i></span>
                  </div>
                  <input type="text" class="form-control" name="namapenerbit" id="namapenerbit" placeholder="Penerbit">
                </div>

                 <label for="exampleInputEmail1">Tahun Terbit</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ion-calendar"></i></span>
                  </div>
                  <input type="text" class="form-control" name="tahunpenerbit" id="tahunpenerbit" placeholder="Tahun">
                </div>

                 <label for="exampleInputEmail1">Kategori</label>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ion-compose"></i></span>
                  </div>
                  <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori">
                </div>


                  </div>


        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

    </form>
      </div>
        <!-- /.row (main row) -->
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection
