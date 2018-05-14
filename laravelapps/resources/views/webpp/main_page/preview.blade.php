@extends('webpp.layout.master')
@extends('webpp.layout.header')
@extends('webpp.layout.navbar')
@extends('webpp.layout.footer')
@extends('webpp.layout.controlSidebr')

@section('tittle','Mahasiswa')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
{{--   <h1>
    Blank page
    <small>it all starts here</small>
  </h1> --}}
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
      <h3 class="box-title"></h3>

          {{-- <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
            </div> --}}
          </div>
          <div class="box-body">
            <section class="content">
              <!-- Profile Image -->
              <div class="col-md-3 ">


                <div>
                  <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="" alt="User profile picture">

                    <h3 class="profile-username text-center">{{ $data->Nama_mahasiswa }}</h3>

                    <p class="text-muted text-center">{{ $data->Nim_mahasiswa }}</p>

                    <ul class="list-group">
                      <li class="list-group-item">
                        <b>Nama</b> <a class="pull-right">{{ $data->Nama_mahasiswa }}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Nim</b> <a class="pull-right">{{ $data->Nim_mahasiswa }}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Jenis kelamin</b> <a class="pull-right">{{ $data->Jk_mahasiswa }}</a>
                      </li>
                      <li class="list-group-item">
                        <b>No hp</b> <a class="pull-right">{{ $data->Nohp_mahasiswa }}</a>
                      </li>
                    </ul>
                    <table align="center">
                      <tbody>
                        <tr>
                          <td><a href="{{ url('modul5') }}" class="btn btn-primary"><b>Back</b></a></td>
                          <td><a href="{{ action('Modul5Controller@edit',$data->id) }}" class="btn btn-warning"><b>Edit</b></a></td>
                          <td><form action="{{ action('Modul5Controller@destroy',$data->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger"><b>delete</b></button>
                          </form></td>
                        </tr>
                      </tbody>
                    </table>



                  </div>
                  <!-- /.box-body -->
                </div>
              </section>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">

            </div>
            <!-- /.box-footer-->
          </div>
          <!-- /.box -->
        </div>
      </section>
      <!-- /.content -->
      @endsection
