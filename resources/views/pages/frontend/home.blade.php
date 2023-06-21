@extends('layouts/frontend/layout')

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('img/bola.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-white">
                                    <h1 class="text-white d-inline-block fw-bold py-1 animated slideInDown">
                                        bolakubet.com
                                    </h1>
                                    <h5 class="mb-4 animated slideInDown text-white">
                                        bolakubet.com adalah sebuah website penyedia tampilan klasmen terbaik sepanjang sejarah
                                    </h5>
                                    <a href="{{ route('klasmen') }}" class="btn btn-warning py-3 px-5 animated slideInDown">Lihat Klasmen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

@endsection