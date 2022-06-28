@extends('layout.main')
@section('title')
<title>Profil</title>
@endsection
@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <div class="container px-4">
      <a class="navbar-brand" href="#page-top">Elegan International High School</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="/profil">Profil</a></li>
              <li class="nav-item"><a class="nav-link" href="/fasilitas">Fasilitas</a></li>
              <li class="nav-item"><a class="nav-link" href="/pengajar">Pengajar</a></li>
              <li class="nav-item"><a class="nav-link" href="/pengumuman">Pengumuman</a></li>
          </ul>
      </div>
  </div>
</nav>
@endsection
@section('content')
<div class="container">
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
@endsection

