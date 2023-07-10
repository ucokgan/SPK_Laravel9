@extends('layout.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pengguna</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pengguna</h3>
              </div>
               <!-- FORM PENCARIAN -->
             <!--<div class="pb-3">
              <form class="d-flex" action="{{ url('Peserta') }}" method="get">
                    <input class="form-control me-1" type="search" name="kunci" value="{{
                        Request::get('kunci') }}" placeholder="masukan kata kunci"
                        aria-label="Search">
                        <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>-->
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('peserta/add') }}" class="btn-sm btn-success">+ Tambah Data Pengguna</a>
                <br/><br/>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Usia</th>
                    <th>Email</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($users as $peserta)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $peserta->nama_pengguna }}</td>
                    <td>{{ $peserta->jenis_kelamin }}</td>
                    <td>{{ $peserta->usia }}</td>
                    <td>{{ $peserta->email }}</td>
                    <td>
                      <a href="{{ url('peserta/edit/'.$peserta->id) }}" class="btn-xs btn-primary">Edit</a>
                      <a href="{{ url('peserta/delete/'.$peserta->id) }}" class="btn-xs btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  @endsection
