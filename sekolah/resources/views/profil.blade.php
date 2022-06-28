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
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="height: 500px;">
      <div class="carousel-item active">
        <img src="sekolah/school1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="sekolah/school3.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="sekolah/school4.jpeg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <h2 class="mx-3 mt-5 mb-3">Sambutan Kepala Sekolah</h2>
  <div class="row">
    <div class="col-md-4">
      <img src="assset/tzuyu.png" class="img-fluid rounded-start mx-5 mt-4" style="height: 300px;width:300px;" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Tzuyu.s.kom.M.cs</h5>
        <p class="card-text">
            It is my great honor to be serving JIS students and the entire Dragon community as your Interim Head of School. I’ve had the pleasure of filling several roles during my many years at JIS: teacher, Elementary School Principal, and Deputy Head of School. But at heart, I am a JIS alumna and a proud JIS parent. 
            <br><br>
            My journey so far as a lifelong learner and international educator grew from the indelible experiences I received from Elegan school. I remember the many enriching lessons and activities, the service projects, the experiential learning both on campus and off and the talented teachers who supported my development as a student many decades ago in the inclusive classrooms of this school. 
            <br><br>
            My passion for the study of neurodiversities and inclusive education took root here with the invaluable service-learning projects that opened my eyes to the needs of others. I am thrilled to have come full circle and back to JIS and Jakarta to be part of this multicultural Dragon family once again.
        </p>
      </div>
    </div>
  </div>

<hr>

<section id="visi_misi">
    <div class="container px-5 ">
        <div class="row gx-4 justify-content-center">
            <div class="card mb-3 bg-danger" style="max-width: 540px; border-radius:40px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="assset/Visi-Icon.gif" class="img-fluid rounded-circle" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-text text-white" style="font-family: monospace;font-size: 20px;">Kita bersemangat, ingin tahu dan kreatif - belajar di Indonesia untuk menjadi yang terbaik bagi dunia.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="container mt-3 px-5 ">
            <div class="row gx-4 justify-content-center">
                <div class="card mb-3 bg-success" style="max-width: 540px; border-radius:40px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="assset/Misi-Icon.gif" class="img-fluid rounded-circle" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <p class="card-text text-white" style="font-family: monospace;font-size: 20px;">Kita akan menginspirasi pembelajaran yang tekun serta menyenangkan dan menjunjung tinggi kesehatan sebagai komunitas pelopor yang inklusif dan kolaboratif.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
</section>
<section class="bg-light" id="sejarah">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <h2>Sejarah Sekolah</h2>
                <img src="sekolah/old_school.jpg" class="img-fluid my-3" alt="">
                <p class="lead"><b>Elegan International school didirkan pada tahun 1973 untuk menjadikan anak-anak indonesisia memiliki penegetahuan yang elegan</b>
                                <br>
                                Pada tahun 1973 didirikan sebuah sekolah kejuruan dengan diterbitkannya SK Mendikbud RI No. 2275/2/1973 tanggal 18 Desember 1973, dengan nama SMPP 28

Pada perkembangan selanjutnya sekolah ini dipandang kurang mendapatkan minat dari warga Banjarmasin, kemudian pada tahun 1982 sekolah ini dirubah menjadi sebuah sekolah menengah umum dengan SK Mendikbud No. 0353/0/1985 tanggal 9 Agustus 1985. menjadi SMA Negeri 7 Banjarmasin .

Pada fase berikutnya pergantian pemerintahan melahirkan suatu sistem baru dalam dunia pendidikan di Indonesia, SMA Negeri 7 Banjarmasin dirubah menjadi SMU dengan dikeluarkannya SK Mendikbud No. 035/0/1997 tanggal 7 Maret 1997, menjadi SMU Negeri 7 Banjarmasin.

Dengan digulirkannya otonomi daerah maka pada tahun 2003 Walikota Banjarmasin Bapak Drs. H. Sopian Arfan mengukuhkan SMU Negeri 7 Banjarmasin sebagai sekolah plus dengan diterbitkanya SK Walikota Banjarmasin No. 83 tanggal 6 Juni 2003 tentang pengukuhan SMU 7 Plus.

Nama SMU dirubah lagi menjadi SMA, sesuai dengan amanat UU No. 20 Tahun 2003 tentang Sistem Pendidikan Nasional sehingga nama SMU Negeri 7 Plus Banjarmasin kembali menjadi SMA Negeri 7 Banjarmasin.

Pada tahun 2007 SMA Negeri 7 Banjarmasin mendapat kepercayaan dari Pemerintah menjadi Sekolah Rintisan Betaraf Internasional.

Pada tahun 2010 SMA Negeri 7 Banjarmasin juga memperoleh sertifikat ISO 9001:2008 dari Lembaga Sertifikasi Sistem Mutu dan berhasil mempertahankan pengakuan kelayakan penyandang sertifikat ISO untuk tahun 2011.

Dengan adanya kebijakan baru KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN, pada tahun 2013 tentang penghapusan RSBI maka SMAN 7 Banjarmasin kembali ke status sekolah biasa.
                </p>
        </div>
    </div>
</section>
@endsection