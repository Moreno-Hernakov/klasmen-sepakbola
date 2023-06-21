@extends('dashboard.layouts.main')
@section('title', 'Tambah User | FMS')
@section('container')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('users.index') }}">User</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('users.create') }}">Tambah User</a></div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Tambah User Baru</h2>
                <div class="card">
                    <div class="card-header">
                        <h4>Masukkan Data User</h4>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" method="POST" action="{{ route('users.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="hak_akses">Hak Akses</label>
                                <select name="hak_akses" id="hak_akses" class="form-control @error('hak_akses') is-invalid @enderror">
                                    <option hidden selected disabled value>Pilih Hak Akses</option>
                                        <option value="administrator">Administrator</option>
                                        <option value="admin_unit">Admin Unit</option>
                                        <option value="petugas">Petugas</option>
                                </select>
                                @error('hak_akses')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="user_id">User ID</label>
                                <input type="number" class="form-control @error('user_id') is-invalid @enderror"
                                    id="user_id" name="user_id" value="{{ old('user_id') }}" required>
                                @error('user_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    id="username" name="username" value="{{ old('username') }}" required>
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" value="{{ old('password') }}" required>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="card-footer text-right">
                                <a href="{{ route('users.index') }}" class="btn btn-danger mr-2">Kembali</a>
                                <button class="btn btn-primary" type="submit">Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
        </section>
    </div>
@endsection

