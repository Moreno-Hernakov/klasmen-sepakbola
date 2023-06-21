@extends('layouts.frontend.layout')

@section('title')
<title>Tentang Kami</title>
@endsection

@section('content')
<div class="container-xxl feature py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.1s">
                <h1 class="display-5 mb-4" style="color: #355EFC">Semua Tentang PCN</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <img src="{{ asset('/assets/images/alihdaya_logo.jpg') }}" class="wow fadeInUp img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-md-12">
                <h1 class="mb-2 wow fadeInUp" data-wow-delay="0.2s">Profile Perusahaan</h1>
                <p class="mb-2 wow fadeInUp" data-wow-delay="0.2s" style="text-align: justify">PT. Paguntaka Cahaya
                    Nusantara atau yang disingkat PT. PCN adalah anak perusahaan PT PLN Tarakan (PLN Group) merupakan
                    Perusahaan Alih Daya yang bidang usaha utamanya menangani pengelola tenaga kerja pada Bidang
                    Pengoperasian & Pemeliharaan Pembangkit, Pengoperasian & Pemeliharaan Transmisi dan Distribusi
                    Tenaga Listrik serta jenis usaha ketenagalistrikan lainnya mancakup jasa pendukung guna mendukung
                    penugasan PT PLN Tarakan.</p>
                <div style="background-color: whitesmoke">
                    <div class="row mb-2 wow fadeInUp pt-3" data-wow-delay="0.2s" style="background-color: whitesmoke">
                        <div class="col-1 flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                            <i class="fa fa-arrow-right" style="color: white"></i>
                        </div>
                        <div class="col-11">
                            <h3>Pendirian Perusahaan</h3>
                            <p style="text-align: justify">Berdasarkan Akte Notaris No. 08,tanggal 08 Desember 2017
                                disahkan oleh KEMENKUMHAM tanggal 11 Desember 2017</p>
                        </div>
                    </div>
                    <div class="row mb-2 wow fadeInUp pb-3" data-wow-delay="0.2s" style="background-color: whitesmoke">
                        <div class="col-1 flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                            <i class="fa fa-arrow-right" style="color: white"></i>
                        </div>
                        <div class="col-11">
                            <p style="text-align: justify">Peraturan Direksi PT PLN (Persero) nomor 0030.P/DIR/2017
                                tanggal 18 April 2017 tentang perubahan atas Peraturan Direksi PT PLN (Persero) nomor
                                0734.K/DIR/2013 tentang pengamanan layanan operasi dan pemeliharaan untuk bidang
                                transmisi dan distribusi tenaga listrik.</p>
                        </div>
                    </div>
                </div>
                <p class="mb-2 wow fadeInUp" data-wow-delay="0.2s" style="text-align: justify">PT. Paguntaka Cahaya
                    Nusantara atau PT. PCN sendiri saat ini sudah menginjak usia yang ke 4 tahun dan telah melebarkan
                    sayap bisnisnya hingga dapat mengelola sekitar 85 Projeck Tenik dan 45 Projek Non Teknik serta
                    memiliki 13 Kantor Cabang di seluruh Indonesia Timur.</p>
            </div>
        </div>
    </div>
</div>
@endsection
