@extends('dashboard.layouts.main')
@section('title', 'Edit Area | FMS')
@section('container')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Area</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('areas.index') }}">Area</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('areas.create') }}">Edit Area</a></div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Edit Area</h2>
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Data Area</h4>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" method="POST"
                            action="{{ route('areas.update', $area) }}">
                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="kd_region">Region</label>
                                <select name="kd_region" id="kd_region" class="form-control @error('kd_region') is-invalid @enderror">
                                    <option hidden selected disabled value>Pilih Region</option>
                                    @foreach ($regions as $nama_region => $id)
                                        <option value="{{ $id }}" @selected(old('kd_region', $area->regions->kd_region) == $id)>{{ $nama_region }}</option>
                                    @endforeach
                                </select>
                                @error('kd_region')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama_area">Nama Area</label>
                                <input type="text" class="form-control @error('nama_area') is-invalid @enderror"
                                    id="nama_area" name="nama_area" value="{{ old('nama_area', $area->nama_area) }}" required>
                                @error('nama_area')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('areas.index') }}" class="btn btn-danger mr-2">Kembali</a>
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
