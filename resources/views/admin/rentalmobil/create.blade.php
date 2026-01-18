@extends('layouts.mobil')

@section('content')
<div class="content-wrapper">

    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Mobil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('admin/dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Tambah Mobil</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card card-primary">

                <div class="card-header">
                    <h3 class="card-title">Form Tambah Mobil</h3>
                </div>

                <form action="{{ url('admin/post') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">

                        {{-- Foto --}}
                        <div class="form-group">
                            <label>Foto Mobil</label>
                            <div class="custom-file">
                                <input type="file"
                                       class="custom-file-input @error('image') is-invalid @enderror"
                                       name="image">
                                <label class="custom-file-label">Pilih foto</label>
                                @error('image')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Nama --}}
                        <div class="form-group">
                            <label>Nama Mobil</label>
                            <input type="text"
                                   name="name"
                                   class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name') }}"
                                   placeholder="Contoh: Toyota Avanza">
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Harga --}}
                        <div class="form-group">
                            <label>Harga / Hari</label>
                            <input type="number"
                                   name="price"
                                   class="form-control @error('price') is-invalid @enderror"
                                   value="{{ old('price') }}"
                                   placeholder="Contoh: 350000">
                            @error('price')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Transmisi --}}
                        <div class="form-group">
                            <label>Transmisi</label>
                            <select name="transmission"
                                    class="form-control @error('transmission') is-invalid @enderror">
                                <option value="">-- Pilih Transmisi --</option>
                                <option value="manual" {{ old('transmission') == 'manual' ? 'selected' : '' }}>
                                    Manual
                                </option>
                                <option value="automatic" {{ old('transmission') == 'automatic' ? 'selected' : '' }}>
                                    Automatic
                                </option>
                            </select>
                            @error('transmission')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Bahan Bakar --}}
                        <div class="form-group">
                            <label>Bahan Bakar</label>
                            <select name="fuel" class="form-control">
                                <option value="">-- Pilih BBM --</option>
                                <option value="bensin">Bensin</option>
                                <option value="diesel">Diesel</option>
                                <option value="listrik">Listrik</option>
                            </select>
                        </div>

                        {{-- Warna --}}
                        <div class="form-group">
                            <label>Warna Mobil</label>
                            <input type="text"
                                   name="color"
                                   class="form-control"
                                   value="{{ old('color') }}"
                                   placeholder="Contoh: Hitam">
                        </div>

                        {{-- Kapasitas --}}
                        <div class="form-group">
                            <label>Kapasitas Penumpang</label>
                            <input type="number"
                                   name="capacity"
                                   class="form-control @error('capacity') is-invalid @enderror"
                                   value="{{ old('capacity') }}"
                                   placeholder="Contoh: 7">
                            @error('capacity')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Checkbox --}}
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                       class="custom-control-input"
                                       id="driver"
                                       name="driver"
                                       value="1">
                                <label class="custom-control-label" for="driver">
                                    Termasuk Driver
                                </label>
                            </div>

                            <div class="custom-control custom-checkbox mt-2">
                                <input type="checkbox"
                                       class="custom-control-input"
                                       id="bbm"
                                       name="bbm"
                                       value="1">
                                <label class="custom-control-label" for="bbm">
                                    BBM Termasuk
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                        <a href="{{ url('admin/mobil') }}" class="btn btn-secondary">
                            Kembali
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection