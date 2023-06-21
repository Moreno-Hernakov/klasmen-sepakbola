@extends('layouts.frontend.layout')

@section('title')
<title>Visi Misi</title>
@endsection

@section('content')
<div class="container-xxl feature my-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s">
                <h1 class="display-5 mb-4">Visi Misi <span style="color: #355EFC"> Perusahaan
                </span> </h1>
            </div>
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <ul class="timeline">
                    <li class="timeline-item mb-5">
                      <h5 class="fw-bold">Visi</h5>
                      {{-- <p class="text-muted mb-2 fw-bold">11 March 2020</p> --}}
                      <p class="text-muted">
                        Menjadi Perusahaan Penyedia Jasa Tenaga Kerja Bidang Ketenaga Listrikan dan Jasa Lainnya yang Terpercaya di Indonesia.
                      </p>
                    </li>
                
                    <li class="timeline-item mb-5">
                      <h5 class="fw-bold">Misi</h5>
                      <p class="text-muted">
                        <ul>
                            <li>
                                Menjalankan bisnis penyedia jasa tenaga kerja secara profesional, transparan dan akuntable.
                            </li>
                            <li>
                                Mendukung program dan usaha PLN Tarakan selaku holding corporate dalam melayani pelanggan atau mitra dengan tingkat pelayanan yang prima.
                            </li>
                            <li>
                                Menciptakan lapangan kerja dan menjadi wadah penyedia tenaga ahli operasi dan pemeliharaan bidang ketenagalistrikan yang handal serta profesional.
                            </li>
                        </ul>
                      </p>
                    </li>
                  </ul>
            </div>
        </div>
    </div>
</div>
@endsection
