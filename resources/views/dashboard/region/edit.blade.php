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
                <h2 class="section-title">Edit club</h2>
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Data club</h4>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" method="POST" action="{{ route('club.update', $club->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="nama">Nama club</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    id="nama" name="nama" value="{{ old('nama', $club->nama) }}" required>
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="kota">kota club</label>
                                <input type="text" class="form-control @error('kota') is-invalid @enderror"
                                    id="kota" name="kota" value="{{ old('kota', $club->kota) }}" required>
                                @error('kota')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('club.index') }}" class="btn btn-danger mr-2">Kembali</a>
                                <button class="btn btn-primary" type="submit">Edit Data</button>
                            </div>
                        </form>
                    </div>
                </div>
        </section>
    </div>
@endsection

@push('after-style')
    <link rel="stylesheet" href="{{ asset('Admin/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/modules/jquery-selectric/selectric.css') }}">
@endpush

@push('after-script')
    <script src="{{ asset('Admin/modules/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('Admin/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('Admin/js/page/forms-advanced-forms.js') }}"></script>
@endpush
