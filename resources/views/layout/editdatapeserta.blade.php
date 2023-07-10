@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Pengguna</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Data Pengguna</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/peserta/update/'.$peserta->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_pengguna" class="col-sm-2 col-form-label">Nama Pengguna</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_pengguna" placeholder="Nama Pengguna" value="{{ $peserta->nama_pengguna}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin" value="{{ $peserta->jenis_kelamin}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="usia" class="col-sm-2 col-form-label">Usia</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="usia" placeholder="Usia" value="{{ $peserta->usia}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $peserta->email}}" required>
                    </div>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection