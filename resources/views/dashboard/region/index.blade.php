@extends('dashboard.layouts.main')
@section('title', 'Club')
@section('container')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Club</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('club.index') }}">Club</a></div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Club</h2>
                <div class="card">
                    <div class="card-header">
                        <h4>Tabel Club</h4>
                        <div class="card-header-action">
                            <a href="{{ route('club.create') }}" class="btn btn-primary">Tambah Club</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr class="text-center">
                                        <th width="20%">No</th>
                                        <th>Nama</th>
                                        <th>Kota</th>
                                        <th width="20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clubs as $index => $val)
                                        <tr>
                                            <td class="text-center">{{ ++$index }}</td>
                                            <td class="text-center">{{$val->nama}}</td>
                                            <td class="text-center">{{$val->kota}}</td>
                                            <td class="text-center">
                                                <a href="{{ route('club.edit', $val->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('club.destroy', $val->id) }}" method="POST"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit"
                                                        onclick="return confirm('Anda yakin ingin menghapus Club ini ?')"
                                                        class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('after-style')
    <link rel="stylesheet" href="{{ asset('Admin/modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('Admin/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">
@endpush

@push('after-script')
    <!-- JS Libraies -->
    <script src="{{ asset('Admin/modules/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('Admin/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('Admin/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('Admin/modules/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('Admin/js/page/modules-datatables.js') }}"></script>
@endpush
