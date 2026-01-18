@extends('layouts.index')

@section('page-title', 'Dashboard')

@section('content')
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <!-- Info Boxes -->
            <div class="row">

                <!-- Destinations -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3></h3>
                            <p>Destinasi Wisata</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <a href="{{ url('admin/data-destinasi') }}" class="small-box-footer">
                            Kelola <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Packages -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3></h3>
                            <p>Paket Wisata</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-box"></i>
                        </div>
                        <a href="{{ url('admin/data-paket') }}" class="small-box-footer">
                            Kelola <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Cars -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3></h3>
                            <p>Data Mobil</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <a href="{{ url('admin/data-mobil') }}" class="small-box-footer">
                            Kelola <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Active Packages -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3></h3>
                            <p>Paket Aktif</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <a href="{{ url('admin/data-paket') }}" class="small-box-footer">
                            Lihat <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Quick Action -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Quick Action</h3>
                        </div>
                        <div class="card-body">
                            <a href="{{ url('admin/data-destinasi/create') }}" class="btn btn-info mr-2">
                                <i class="fas fa-plus"></i> Tambah Destinasi
                            </a>
                            <a href="{{ url('admin/data-paket/create') }}" class="btn btn-success mr-2">
                                <i class="fas fa-plus"></i> Tambah Paket
                            </a>
                            <a href="{{ url('admin/data-mobil/create') }}" class="btn btn-warning">
                                <i class="fas fa-plus"></i> Tambah Mobil
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection