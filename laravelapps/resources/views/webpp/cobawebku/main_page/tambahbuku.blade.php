@extends('webpp.cobawebku.template.footeradmin')
@extends('webpp.cobawebku.template.navbaradmin')
@extends('webpp.cobawebku.template.sidebaradmin')
@extends('webpp.cobawebku.template.masteradmin')
@section('tittle','tambahbuku')
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
            <form role="form">
            <div class="card-body">
              <div class="row">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul Buku</label>
                  <div class="input-group mb-10">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ion-compose"></i></span>
                    </div>
                    <input type="email" class="form-control" id="judulbuku" placeholder="Judul Buku">
                  </div>

                  <label for="exampleInputEmail1">Kategori</label>
                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ion-compose"></i></span>
                    </div>
                    <input type="email" class="form-control" id="kategori" placeholder="Kategori">
                  </div>

                  <label for="exampleInputEmail1">Pengarang</label>
                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ion-person"></i></span>
                    </div>
                    <input type="email" class="form-control" id="pengarang" placeholder="Pengarang">
                  </div>

                  <label for="exampleInputEmail1">Penerbit</label>
                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ion-compose"></i></span>
                    </div>
                    <input type="email" class="form-control" id="penerbit" placeholder="Penerbit">
                  </div>

                   <label for="exampleInputEmail1">Tahun</label>
                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ion-calendar"></i></span>
                    </div>
                    <input type="email" class="form-control" id="tahun" placeholder="Tahun">
                  </div>

                   <label for="exampleInputEmail1">Status</label>
                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ion-compose"></i></span>
                    </div>
                    <input type="email" class="form-control" id="status" placeholder="Status">
                  </div>
                  <label>Tanggal Pinjam</label>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-calendar"></i>
                        </span>
                      </div>
                      <input type="date" class="form-control float-right" id="tglpinjam">
                    </div>
                    <label>Tanggal Pengmbalian</label>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-calendar"></i>
                        </span>
                      </div>
                      <input type="date" class="form-control float-right" id="tglkembali">
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
