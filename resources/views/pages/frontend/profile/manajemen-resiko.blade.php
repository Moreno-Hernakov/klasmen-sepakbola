@extends('layouts.frontend.layout')

@section('title')
<title>Manajemen Resiko</title>
@endsection

@section('content')
<div class="container-xxl feature my-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s">
                <h1 class="display-5 mb-4">Manajemen <span style="color: #355EFC"> Resiko </span> </h1>
            </div>
            <div class="col-lg-12 d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <h1>Tata Nilai Manejemen Risiko</h1>
                <p style="text-align: justify">Guna mencapai Visi 2024, PT PCN memahami bahwa dinamika ketidakpastian di masa mendatang penuh dengan
                    peluang dan risiko yang harus direspon/ditanggapi secara cermat, tepat, dan prudent berlandaskan
                    praktik Governance, Risk Management, and Compliance (GRC) yang andal. Sebagai arah dan sikap Bersama
                    yang mencerminkan cara menilai risiko pada setiap aktivitas organisasi yang akan berpengaruh pada
                    penerapan komponen manajemen risiko, maka ditetapkan Tata Nilai Manajemen Risiko di dalam Statement
                    of Corporate Intent (SCI) Nomor 006.P/DIR/2022 tentang Penerapan Manajemen Risiko Terintegrasi PT
                    PCN.</p>
                <p style="text-align: justify">Tata nilai manajemen risiko yang menjadi landasan perilaku seluruh insan PT PCN dalam mewujudkan
                    praktik manajemen risiko di dalam pelaksanaan tugas dan tanggung jawabnya masing-masing dan dalam
                    mendukung bisnis dan operasi yang dijalankan perusahaan sesuai dengan 18 panduan perilaku AKHLAK
                    adalah</p>
                <img class="img-fluid" src="{{ asset('assets/images/manrisk.png') }}" alt="">
                <div class="d-flex justify-content-start">
                    <button class="btn btn-primary">Download Document</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
