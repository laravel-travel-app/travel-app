@extends('layouts.paket-wisata')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Paket Wisata</h1>
            <a class="btn btn-primary" href="{{ url('admin/create-paket') }}">Tambah Paket Wisata</a>
          </div><!-- /.col -->
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Data Paket Wisata</li>
              
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
                <h3 class="card-title">Data Paket Wisata</h3>
          
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
                      <th>Nama Paket Wisata</th>
                      <th>Harga</th>
                      <th>Include</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  @foreach($package as $row)
                  <tbody>
                    <tr>
                      <td><img src="{{ asset('img/'.$row->image) }}" style="height: 50px;width:100px;"></td>
                      <td>{{ $row->package_name }}</td>
                      <td>{{ $row->price }}</td>
                      <td>{{ $row->desc }}
                        
                      </td>
                      <th>
                        <a href="{{ url('admin/edit', $row->id) }}">
                          Edit |
                      </a>
                      <a href="{{ url('admin/hapus', $row->id) }}">
                          Hapus
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