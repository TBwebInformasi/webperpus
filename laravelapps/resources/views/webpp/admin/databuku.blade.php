@extends('webpp.layoutsadmin.masteradmin')
@extends('webpp.layoutsadmin.footeradmin')
@extends('webpp.layoutsadmin.navbaradmin')
@extends('webpp.layoutsadmin.sidebaradmin')

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
                  <th>No</th>
                  <th>Kode Buku</th>
                  <th>Judul Buku</th>
                  <th>Pengarang</th>
                  <th>Penerbit</th>
                  <th>Tahun Terbit</th>
                  <th>Kategori</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
                  @foreach($listBuku as $no => $key)
                    <tr>
                      <td>{{$no+1}}</td>
                      <td>{{ $key->kodebuku }}</td>
                      <td>{{ $key->judulbuku }}</td>
                      <td>{{ $key->namapengarang }}</td>
                      <td>{{ $key->namapenerbit }}</td>
                      <td>{{ $key->tahunpenerbit }}</td>
                      <td>{{ $key->kategori }}</td>
                      <td>
                        <button type="button" class="btn btn-success"> <span class="ion-clipboard"></span> Preview</button>
                        <button  type="button" class="btn btn-primary"> <span class="ion-edit"></span> Ubah</button>
                        <button type="button" class="btn btn-danger">  <span class="ion-trash-a"></span> Hapus</button>
                      </td>
                    </tr>
                @endforeach
              </tbody>
              <ul>
              <a href="{{ route('webpp.create') }}"><button type="button" class="btn btn-success">
              <span class="ion-plus" > Tambah Buku</span></a></button>
              </ul>

              </table>
        </section>

</div>
</div>
</div>
</div>
</div>
@endsection
