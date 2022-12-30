@extends('layouts.app')

@section('content')
<section class="banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12 copywriting">
                        <p class="story">
                            SELAMAT DATANG DI PPDB ONLINE
                        </p>
                        <h1 class="header">
                            <span class="text-orange">YAYASAN PENDIDIKAN</span> CENDANA RIAU
                        </h1>
                        <p class="cta">
                            <a href="{{ route('login') }}" class="btn btn-master btn-primary">
                                Daftar Siswa Baru
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-6 col-12 text-center">
                        <a href="#">
                            <img src="{{ asset('images/banner.png') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="benefits">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    OUR SUPER BENEFITS
                </p>
                <h2 class="primary-header">
                    Learn Faster & Better
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('images/ic_globe.png') }}" class="icon" alt="">
                    <h3 class="title">
                        ENVIRONMENT
                    </h3>
                    <p class="support">
                        LINGKUNGAN SEKOLAH AMAN DAN NYAMAN & SARANA PRASARANA YANG LENGKAP
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('images/ic_globe-1.png') }}" class="icon" alt="">
                    <h3 class="title">
                        TEACHER
                    </h3>
                    <p class="support">
                        GURU BERKUALITAS DAN BERSERTIFIKAT
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('images/ic_globe-2.png') }}" class="icon" alt="">
                    <h3 class="title">
                        EXTRACURRICULAR
                    </h3>
                    <p class="support">
                        ANEKA RAGAM EKSTRAKURIKULER
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('images/ic_globe-3.png') }}" class="icon" alt="">
                    <h3 class="title">
                        FUTURE
                    </h3>
                    <p class="support">
                        BEKERJASAMA DENGAN PTN DAN PTS FAVORIT DI INDONESIA
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="steps">
    <div class="container">
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('images/daftar.png') }}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                    Pendaftaran
                </p>
                <p class="support">
                    Lakukan pendaftaran secara online dengan mengisi form pendaftaran beserta bukti bayar pendaftaran yang telah disediakan di website.
                </p>
            </div>
        </div>
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-left copywriting pl-150">
                <p class="story">
                    Konfirmasi
                </p>
                <p class="support">
                    Konfirmasi dari kami akan segera datang melalui E-mail resmi kami yang berisi informasi konfirmasi pembayaran PPDB.
                </p>
            </div>
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('images/konfirmasi.png') }}" class="cover" alt="">
            </div>

        </div>
        <div class="row item-step">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('images/pembayaran.png') }}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                    Pembayaran
                </p>
                <p class="support">
                    Lakukan Pembayaran dengan masuk ke halaman dashboard dan mengklik tombol “bayar disini”
                </p>
            </div>
        </div>
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-left copywriting pl-150">
                <p class="story">
                    Melengkapi Data
                </p>
                <p class="support">
                    Ketika berhasil login, lakukan pembayaran sekaligus dengan melengkapi data personal melalui form yang tersedia
                </p>
            </div>
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('images/melengkapi data.png') }}" class="cover" alt="">
            </div>

        </div>
    </div>
</section>

<section class="pricing">
    <div class="container">
        <div class="row pb-70">
            <div class="col-lg-5 col-12 header-wrap copywriting">
                <p class="story">
                    GOOD INVESTMENT
                </p>
                <h2 class="primary-header text-white">
                    Mulai Perjalananmu!
                </h2>
                <p class="support">
                    Ayo daftar ke Yayasan Pendidikan Cendana Riau!
                </p>
            </div>
            <div class="col-lg-7 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="table-pricing paket-gila">
                            <p class="story text-center">
                                Biaya Pendaftaran
                            </p>
                            <h1 class="price text-center">
                                Rp.150K
                            </h1>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Guru Berkualitas
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Fasilitas Lengkap
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Pendidikan Terjamin
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Final Project Certificate
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Future Best University
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Future Job Opportinity
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Seragam Terbaru
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    FUTURE
                                </p>
                                <div class="clear"></div>
                            </div>
                            <p>
                                <a href="{{ route('checkout.create', 'pendaftaran') }}" class="btn btn-master btn-primary w-100 mt-3">
                                    Daftar Sekarang
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="table-pricing paket-biasa">
                            <p class="story text-center">
                                Sumbangan Penyelenggaraan Pendidikan (SPP)
                            </p>
                            <h1 class="price text-center">
                                Rp.450k
                            </h1>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Fasilitas Terjaga
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Final Project Certificate
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Pendidikan Terjamin
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Future University Opportinity
                                </p>
                                <div class="clear"></div>
                            </div>
                            <p>
                                <a href="{{ route('checkout.create', 'spp') }}" class="btn btn-master btn-secondary w-100 mt-3">
                                    Bayar Sekarang
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    SUCCESS STUDENTS
                </p>
                <h2 class="primary-header">
                    We Really Love Yayasan Pendidikan Cendana Riau
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="row copyright">
                    <div class="col-lg-12 col-12">
                        <p>
                            All Rights Reserved. Copyright Yayasan Pendidikan Cendana Riau.
                        </p>
                        <p>
                            Kontak Kami!
                            <br>Kompleks Enau, PT. Pertamina Hulu Rokan Rumbai, Kota Pekanbaru Provinsi Riau - Indonesia
                            <br>(0761) 559020, 559021
                            <br>0761 - 559045
                            <br>ypcriau@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
