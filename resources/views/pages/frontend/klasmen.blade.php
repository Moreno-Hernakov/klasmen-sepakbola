@extends('layouts/frontend/layout')

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container card" style="margin-top: 8%">
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($historys as $History)
                                <tr class="text-center">
                                    <td >{{ $loop->iteration }}</td>
                                    <td>{{ $History->club->nama }}</td>
                                    <td>{{ $History->ma }}</td>
                                    <td>{{ $History->me }}</td>
                                    <td>{{ $History->s }}</td>
                                    <td>{{ $History->k }}</td>
                                    <td>{{ $History->gk }}</td>
                                    <td>{{ $History->gm }}</td>
                                    <td>{{ $History->point }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

   

@endsection