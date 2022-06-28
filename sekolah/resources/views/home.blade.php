@extends('layout.main')
@section('title')
<title>Home</title>
@endsection
@section('content')
<header class="bg-primary text-white" style="border-bottom: 7px solid yellow">
    <div class="container px-2 text-center">
        <div class="row">
            <div class="col mt-5">
                <img src="logo/logo_fti.png" class="rounded-circle" alt="..." style="height: 300px;width:300px;">
            </div>
            <div class="col mt-5" style="border-left: 2px solid white">
                <h1 class="fw-bolder text-start mt-5">Selamat Datang Di Website Elegan International School</h1>
            </div>
        </div>
    </div>
</header>
<section id="card-menu">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
                <div class="card text-white bg-success mx-2 my-2 py-5" style="max-width: 18rem;">
                    <div class="mx-auto"><i class="fas fa-school fa-5x"></i></div>
                    <div class="card-body mx-auto mt-3">
                      <h5 class="card-title">PROFIL</h5>
                      <a href="/profil" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card text-white bg-primary mx-2 my-2 py-5" style="max-width: 18rem;">
                    <div class="mx-auto"><i class="fas fa-swimmer fa-5x"></i></div>
                    <div class="card-body mx-auto mt-3">
                      <h5 class="card-title">FASILITAS</h5>
                      <a href="/fasilitas" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card text-white bg-danger mx-2 my-2 py-5" style="max-width: 18rem;">
                    <div class="mx-auto"><i class="fas fa-chalkboard-teacher fa-5x"></i></div>
                    <div class="card-body mx-auto mt-3">
                      <h5 class="card-title">PENGAJAR</h5>
                      <a href="/pengajar" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card text-white bg-warning mx-2 my-2 py-5" style="max-width: 18rem;">
                    <div class="mx-auto"><i class="fas fa-bullhorn fa-5x"></i></div>
                    <div class="card-body mx-auto mt-3">
                      <h5 class="card-title">PENGUMUMAN</h5>
                      <a href="/pengumuman" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light" id="pengumuman">
<div class="container">
    <h2>Pengumuman Terbaru</h2>
    <div class="row" style="margin-top: 100px">
        @foreach ($data as $dt)
            <div class="col">
                <div class="card mb-5" style="width: 33rem;">
                    <i class="fas fa-bullhorn fa-5x bg-primary text-white text-center py-3 "></i>
                    <div class="card-body">
                        <h5 class="card-title">{{ $dt->judul }}</h5>
                        <p class="card-text">{{ $dt->isi }}</p>
                        <p class="card-text"><small class="text-muted">{{ $dt->created_at }}</small></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</section>


<section class="bg-info" id="contact">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <h2>Contact us</h2>
                <i class="fas fa-phone fa-2x text-white"> +628 9977899</i><br><br>
                <i class="far fa-envelope fa-2x text-white"> EleganSchool@gmail.com</i><br><br>
                <i class="fas fa-map-marker-alt fa-2x text-white"> Jl. Dr. O. Notohamidjojo No.1 - 10, Blotongan, Kec. Sidorejo, Kota Salatiga, Jawa Tengah 50715</i><br><br>
                <i class="fab fa-instagram fa-2x text-white"> @EleganSchoolint</i><br><br>
                <i class="fab fa-facebook-square fa-2x text-white"> EleganSchoolint</i><br><br>

            </div>
        </div>
    </div>
</section>
@endsection
