@extends('layouts.frontend.layout')

@section('title')
<title>Profile Direksi</title>
@endsection

@section('content')
<style>
.direk {
    padding-bottom: 400px;
}
</style>
<div class="container-fluid my-5 direk" style="background-color: #F6F9FE">
    <div class="row">
        <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s">
            <h1 class="display-5 mb-4"><span style="color: #355EFC">Profil</span> Direksi</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.2s">
            <div class="align-content-center align-items-center">
                <button type="button" class="btn btn-outline-primary">BOARD OF DIRECTOR</button>
            </div>
            <br>
            <br>
            <div class="align-content-center align-items-center">
                <button type="button" class="btn btn-outline-primary">DEWAN DEPUTY MANAGER</button>
            </div>
        </div>
    </div>
</div>
<div class="container-xxl feature py-5">
</div>
@endsection
