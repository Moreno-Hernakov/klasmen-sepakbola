@extends('layouts.frontend.layout')

@section('title')
<title>Gallery</title>
@endsection

@section('content')
<div class="container-xxl feature my-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s">
                <h1 class="display-5 mb-4"><span style="color: #355EFC"> Gallery </span> </h1>
            </div>
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('assets/images/abc.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">ABC</h5>
                      <p class="card-text text-center">ABC</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
