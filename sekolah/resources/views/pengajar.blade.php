@extends('layout.main')
@section('title')
    <title>Pengajar</title>
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
        <div class="row mt-5">
            @foreach ($data as $dt)
                <div class="col">
                    <div class="card my-3 bg-info" style="width: 18rem;">
                        <img src="{{ $dt->foto }}" class="card-img-top" alt="..." style="height: 250px;width:auto;">
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-primary">NIP : {{ $dt->nip }}</li>
                        <li class="list-group-item bg-primary">Nama : {{ $dt->nama }}</li>
                        <li class="list-group-item bg-primary">Mata Pelajaran : {{ $dt->mapel }}</li>
                        <li class="list-group-item bg-primary">Jabatan : {{ $dt->jabatan }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
