@extends('dashboard.layouts.main')
@section('title', 'club')
@section('container')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>club</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('club.index') }}">club</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('club.create') }}">Tambah club</a></div>
                </div>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Masukkan Data club</h4>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" method="POST" action="{{ route('club.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama club</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    id="nama" name="nama" value="{{ old('nama') }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="kota">Nama kota</label>
                                <input type="text" class="form-control @error('kota') is-invalid @enderror"
                                    id="kota" name="kota" value="{{ old('kota') }}">
                                @error('kota')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('club.index') }}" class="btn btn-danger mr-2">Kembali</a>
                                <button class="btn btn-primary" type="submit">Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
        </section>
    </div>
@endsection
