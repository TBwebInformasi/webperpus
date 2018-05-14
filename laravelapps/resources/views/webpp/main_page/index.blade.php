@extends('webpp.layout.master')
@extends('webpp.layout.header')
@extends('webpp.layout.navbar')
@extends('webpp.layout.footer')
@extends('webpp.layout.controlSidebr')

@section('tittle','List Mahasiswa')


@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">List Mahasiswa</h3>
        </div>
        <div class=" box-header">
          <a href="{{ route('webpp.create') }}" class="btn btn-primary">+ Tambah data</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          @if(!empty($listBuku))
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Nim Mahasiswa</th>
                <th>Jenis Kelamin Mahasiswa</th>
                <th>No hp Mahasiswa</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($listBuku as $no => $key)
              <tr>
                <th>{{ $no+1 }}</th>
                <td>{{ $key->kodebuku }}</td>
                <td>{{ $key->judulbuku }}</td>
                <td>{{ $key->namapenerbit }}</td>
                <td>{{ $key->tahunpenerbit }}</td>
                <td>{{ $key->kategori }}</td>
                <td>  
                  <table>
                    <tbody>
                      <tr>
                        <td><a href="{{ route('webpp.show',$key->id) }}" class="btn btn-primary">preview</a></td>
                        <td><a href="{{ route('webpp.edit',$key->id) }}" class="btn btn-warning">edit</a></td>
                        <td><form action="{{ action('bukuController@destroy',$key->id) }}" method="post">
                          @csrf
                          <input type="hidden" name="_method" value="DELETE">
                          <button type="submit" class="btn btn-danger">delete</button>
                        </form> </td>
                      </tr>
                    </tbody>
                  </table></td>
                </tr>
                @endforeach
                @else
                <p>data tidak ada</p>
                @endif
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->


  @stop