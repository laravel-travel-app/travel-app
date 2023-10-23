@extends('layouts.mobil')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Mobil</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Mobil</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Mobil</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('admin/post') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputFile">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Mobil</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Mobil">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga Mobil</label>
                    <input type="text" class="form-control" name="price" id="exampleInputPassword1" placeholder="Enter Harga">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Transmisi</label>
                    <input type="text" class="form-control" name="transmission" id="exampleInputPassword1" placeholder="Enter Transmisi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Bahan Bakar</label>
                    <input type="text" class="form-control" name="fuel" id="exampleInputPassword1" placeholder="Enter Bahan Bakar">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Warna Mobil</label>
                    <input type="text" class="form-control" name="color" id="exampleInputPassword1" placeholder="Enter Warna">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kapasitas</label>
                    <input type="text" class="form-control" name="capacity" id="exampleInputPassword1" placeholder="Enter Kapasitas">
                  </div>
                  
                  <div class="form-check">
                    
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="driver">
                    <label class="form-check-label" for="exampleCheck1">Driver</label>
                  </div>
                  <div class="form-check">
                    
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="bbm">
                    <label class="form-check-label" for="exampleCheck1">BBM</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

@endsection