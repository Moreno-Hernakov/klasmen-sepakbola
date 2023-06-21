@extends('dashboard.layouts.main')
@section('title', 'History')
@section('container')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>History</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{ route('history.index') }}">History</a></div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">History</h2>
                <div class="card">
                    <div class="card-header">
                        <h4>Tabel History</h4>
                        <div class="card-header-action">
                            <a href="{{ route('history.create') }}" class="btn btn-primary">Tambah History</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Club</th>
                                        <th>main</th>
                                        <th>Menang</th>
                                        <th>Seri</th>
                                        <th>kalah</th>
                                        <th>Goal Menang</th>
                                        <th>Goal Kalah</th>
                                        <th>Point</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historys as $History)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $History->club->nama }}</td>
                                            <td>{{ $History->ma }}</td>
                                            <td>{{ $History->me }}</td>
                                            <td>{{ $History->s }}</td>
                                            <td>{{ $History->k }}</td>
                                            <td>{{ $History->gk }}</td>
                                            <td>{{ $History->gm }}</td>
                                            <td>{{ $History->point }}</td>
                                            <td class="text-center"><a href="{{ route('history.edit', $History) }}"
                                                    class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                <form action="{{ route('history.destroy', $History) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        onclick="return confirm('Anda yakin ingin menghapus History ini ?')"
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
