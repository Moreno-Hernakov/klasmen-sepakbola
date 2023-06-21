@extends('layouts.frontend.layout')

@section('title')
<title>Tata Nilai</title>
@endsection

@section('content')
<div class="container-xxl feature my-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s">
                <h1 class="display-5 mb-4">Tata Nilai </h1>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <ul>
                    <li>
                        <img src="{{ asset('assets/images/1.png') }}" alt="">
                        <div>
                            <h5>AMANAH</h5>
                            <p style="text-align: justify;">Memegang teguh kepercayaan yang diberikan.</p>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('assets/images/2.png') }}" alt="">
                        <div>
                            <h5>KOMPETEN</h5>
                            <p style="text-align: justify;">Terus belajar dan mengembangkan kapabilitas.</p>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('assets/images/3.png') }}" alt="">
                        <div>
                            <h5>HARMONIS</h5>
                            <p style="text-align: justify;">Saling peduli dan menghargai perbedaan.</p>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('assets/images/4.png') }}" alt="">
                        <div>
                            <h5 style="color: #009BAB">LOYAL</h5>
                            <p style="text-align: justify;">Berdedikasi dan mengutamakan kepentingan bangsa dan negara.
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('assets/images/5.png') }}" alt="">
                        <div>
                            <h5 style="color: #009BAB">ADAPTIF</h5>
                            <p style="text-align: justify;">Terus berinovasi dan antusias dalam menggerakkan apapun
                                menghadapi perubahan.</p>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('assets/images/6.png') }}" alt="">
                        <div>
                            <h5 style="color: #009BAB">KOLABORATIF</h5>
                            <p style="text-align: justify;">Membangun kerjasama yang sinergis.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
