@extends('layouts.mobil')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Mobil</h1>
            <a class="btn btn-primary" href="{{ url('admin/tambah-mobil') }}">Tambah Mobil</a>
          </div><!-- /.col -->
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Mobil</li>
              
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Mobil</h3>
          
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Foto</th>
                      <th>Nama Mobil</th>
                      <th>Harga</th>
                      <th>Transmisi</th>
                      <th>Bahan Bakar</th>
                      <th>Warna</th>
                      <th>Kapasitas</th>
                      <th>Driver</th>
                      <th>BBM</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  @foreach($car as $c)
                  <tbody>
                    <tr>
                      <td>{{ $c->image }}</td>
                      <td>{{ $c->name }}</td>
                      <td>{{ $c->price }}</td>
                      <td>{{ $c->transmission }}</td>
                      <td>{{ $c->fuel }}</td>
                      <td>{{ $c->color }}</td>
                      <td>{{ $c->capacity }}</td>
                      <td>{{ $c->driver == 1 ? 'Ya' : 'Tidak' }}</td>
                      <td>{{ $c->bbm == 1 ? 'Ya' : 'Tidak' }}</td>
                      <th class="text-center">
                        <a href="{{ url('admin/edit-mobil', $c->id) }}">
                          Edit
                      </a>
                      <a href="#">
                        <i class="mdi mdi-close text-danger"></i>
                      </a>
                  </th>
                    </tr>
                    
                  </tbody>
                  @endforeach
                </table>
              </div>
              <!-- /.card-body -->
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