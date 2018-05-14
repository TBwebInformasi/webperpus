@extends('webpp.cobawebku.template.footeradmin')
@extends('webpp.cobawebku.template.navbaradmin')
@extends('webpp.cobawebku.template.sidebaradmin')
@extends('webpp.cobawebku.template.masteradmin')
{{-- @extends('webpp.cobawebku.template.headeradmin') --}}


@endsection
@section('content')
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Data Buku</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Buku </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <section class="content">

          <!-- Small boxes (Stat box) -->
          <!-- Main row -->
          <div class="row">
            <div class="col-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Judul Buku</th>
                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>
                      <button  type="button" class="btn btn-primary"> <span class="ion-edit"></span> Ubah</button>
                      <button type="button" class="btn btn-danger">  <span class="ion-trash-a"></span> Hapus</button>
                      <button type="button" class="btn btn-success"> <span class="ion-clipboard"></span> Preview</button>
                    </td>
                  </tr>
                </tbody>
                <ul>
                <a href="tambahbuku.html"><button type="button" class="btn btn-success">
                <span class="ion-plus" > Tambah Buku</span></a></button>
                </ul>

              </table>
            </setion>

  </div>
  </div>
  </div>
  </div>
  </div>

@endsection
