@extends('dashboard.layouts.main')
@section('title', 'Edit User | FMS')
@section('container')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>User</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/dashboard">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('users.index') }}">User</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('users.create') }}">Edit User</a></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Edit User</h2>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Data User</h4>
                </div>
                <div class="card-body">
                    <form class="needs-validation" method="POST"
                    action="{{ route('users.update', $user) }}">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="_method" value="PATCH">

                    <div class="form-group">
                        <label for="hak_akses">Hak Akses</label>
                        <select name="hak_akses" id="hak_akses" class="form-control @error('hak_akses') is-invalid @enderror">
                            <option hidden selected disabled value>Pilih Hak Akses</option>
                            <option value="administrator" @selected($user->hak_akses == 'administrator')>Administrator</option>
                            <option value="admin_unit" @selected($user->hak_akses == 'admin_unit')>Admin Unit</option>
                            <option value="petugas" @selected($user->hak_akses == 'petugas')>Petugas</option>
                        </select>
                        @error('hak_akses')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="user_id">User ID</label>
                        <input type="text" class="form-control @error('user_id') is-invalid @enderror"
                        id="user_id" name="user_id" value="{{ old('user_id', $user->user_id) }}" required>
                        @error('user_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="name" class="form-control @error('name') is-invalid @enderror"
                        id="name" name="name" value="{{ old('name', $user->name) }}" required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                        id="username" name="username" value="{{ old('username', $user->username) }}" required>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" name="email" value="{{ old('email', $user->email) }}" required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password Baru (optional)</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                        id="password" name="password" value="{{ old('password') }}">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="card-footer text-right">
                        <a href="{{ route('users.index') }}" class="btn btn-danger mr-2">Kembali</a>
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
