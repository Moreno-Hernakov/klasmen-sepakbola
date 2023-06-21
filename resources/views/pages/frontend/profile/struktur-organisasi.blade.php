@extends('layouts.frontend.layout')

@section('title')
<title>Struktur Organisasi</title>
@endsection

@section('content')
<div class="container-xxl feature my-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s">
                <h1 class="display-5 mb-4">Struktur Organisasi</h1>
            </div>
            <div class="col-lg-12 d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid" src="{{ asset('assets/images/struktur.png') }}" alt="">
                
            </div>
        </div>
    </div>
</div>
@endsection
