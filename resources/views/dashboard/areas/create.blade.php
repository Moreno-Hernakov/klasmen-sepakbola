@extends('dashboard.layouts.main')
@section('title', 'history')
@section('container')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>History</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('history.index') }}">History</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('history.create') }}">Tambah History</a></div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Tambah History Baru</h2>
                <div class="card">
                    <div class="card-header">
                        <h4>Masukkan Data History</h4>
                    </div>
                    {{-- foreach($errors->all() as $error)
                    <h3>{{$error}}</h3>
                    @endforeach --}}
                    {{-- <h2>{{ $exception->getMessage() }}</h2> --}}
                    <div class="card-body">
                        <form class="needs-validation" method="POST" action="{{ route('history.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="col">
                                    <label for="kd_region">club1</label>
                                    <select name="club1" id="club1" class="form-control @error('club1') is-invalid @enderror">
                                        <option hidden selected disabled value>Pilih Region</option>
                                        @foreach ($clubs as $club)
                                            <option value="{{ $club->id }}" @selected(old('club1'))>{{ $club->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('club1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="score1">score1</label>
                                    <input type="text" class="form-control @error('score1') is-invalid @enderror"
                                        id="score1" name="score1" value="{{ old('score1') }}">
                                    @error('score1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="club2">club2</label>
                                    <select name="club2" id="club2" class="form-control @error('club2') is-invalid @enderror">
                                        <option hidden selected disabled value>Pilih Region</option>
                                        @foreach ($clubs as $club)
                                            <option value="{{ $club->id }}" @selected(old('club2'))>{{ $club->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('club2')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="score2">score2</label>
                                    <input type="text" class="form-control @error('score2') is-invalid @enderror"
                                        id="score2" name="score2" value="{{ old('score2') }}">
                                    @error('score2')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('history.index') }}" class="btn btn-danger mr-2">Kembali</a>
                                <button class="btn btn-primary" type="submit">Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
        </section>
    </div>
@endsection
