@extends('layouts.mobil')

@section('content')
<div class="content-wrapper">

    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 align-items-center">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Mobil</h1>
                    <a class="btn btn-primary mt-2" href="{{ url('admin/tambah-mobil') }}">
                        <i class="fas fa-plus"></i> Tambah Mobil
                    </a>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Mobil</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">Daftar Mobil</h3>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Harga / Hari</th>
                                <th>Transmisi</th>
                                <th>BBM</th>
                                <th>Warna</th>
                                <th>Kapasitas</th>
                                <th>Driver</th>
                                <th>BBM Include</th>
                                <th width="120">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($cars as $c)
                                <tr>
                                    <td>
                                        @if ($c->image)
                                            <img src="{{ asset('storage/' . $c->image) }}"
                                                 width="80"
                                                 class="img-thumbnail">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>

                                    <td>{{ $c->name }}</td>

                                    <td>
                                        Rp {{ number_format($c->price, 0, ',', '.') }}
                                    </td>

                                    <td class="text-capitalize">
                                        {{ $c->transmission }}
                                    </td>

                                    <td>
                                        {{ $c->fuel ?? '-' }}
                                    </td>

                                    <td>
                                        {{ $c->color ?? '-' }}
                                    </td>

                                    <td>
                                        {{ $c->capacity }} Orang
                                    </td>

                                    <td>
                                        <span class="badge badge-{{ $c->driver ? 'success' : 'secondary' }}">
                                            {{ $c->driver ? 'Ya' : 'Tidak' }}
                                        </span>
                                    </td>

                                    <td>
                                        <span class="badge badge-{{ $c->bbm ? 'success' : 'secondary' }}">
                                            {{ $c->bbm ? 'Ya' : 'Tidak' }}
                                        </span>
                                    </td>

                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('admin/edit-mobil', $c->id) }}"
                                               class="btn btn-sm btn-warning">
                                                Edit
                                            </a>

                                            <form action="{{ url('admin/hapus-mobil', $c->id) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Yakin hapus mobil ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center text-muted">
                                        Data mobil belum tersedia
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection