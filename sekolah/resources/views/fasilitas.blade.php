@extends('layout.main')
@section('title')
    <title>Fasilitas</title>
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


<section id="lapangan_bola">
   <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="card text-white bg-primary" style="max-width: 37rem;">
                    <div class="card-header"><h2>Lapangan Bola</h2></div>
                    <div class="card-body">
                      <p class="card-text" style="font-size: 18px;">Lapangan bola yang panjangnya 120 meter dan lebar 90 meter dan menggunkan rumput jenis Zoysia Mattrella
                        Rumput ini merupakan jenis rumput yang paling baik untuk digunakan sebagai rumput lapangan sepakbola dan memiliki warna hijau yang paling pekat diantara dua jenis lain.
                        untuk menunjang segala aktivitas siswa sehingga mendapatakan potensinya dalam bidang atletik
                     </p>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner" style="height: 300px;width: 300;">
                      <div class="carousel-item active">
                        <img src="fasilitas/lapangan_bola/lapangan_bola1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="fasilitas/lapangan_bola/lapangan_bola2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="fasilitas/lapangan_bola/lapangan_bola3.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="fasilitas/lapangan_bola/lapangan_bola4.jpg" class="d-block w-100" alt="...">
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
            </div>
        </div>
  </div>
</section>
<hr>

<section id="lapangan_voli">
    <div class="container">
         <div class="row">
             <div class="col-5">
                <div id="voli" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#voli" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#voli" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#voli" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" style="height: 300px;width: 300;">
                      <div class="carousel-item active">
                        <img src="fasilitas/lapangan_voli/lapangan_voli1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="fasilitas/lapangan_voli/lapangan_voli2.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="fasilitas/lapangan_voli/lapangan_voli3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#voli" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#voli" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                   </div>
                </div>
             <div class="col-7">
                <div class="card text-white bg-danger" style="max-width: 37rem;">
                    <div class="card-header"><h2>Voli</h2></div>
                    <div class="card-body">
                      <p class="card-text" style="font-size: 18px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat dignissim accumsan. Donec vel tempor neque, at tristique est. Maecenas eu porttitor tellus. Mauris facilisis mauris sit amet condimentum viverra. Vestibulum condimentum molestie feugiat.
                        Aliquam suscipit viverra dui ac venenatis. Nunc accumsan ornare tincidunt.Aenean sodales tincidunt placerat. Phasellus eget pharetra lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In at varius orci.
                        Pellentesque tincidunt felis leo, eu pulvinar purus mollis a. 
                     </p>
                    </div>
                </div>
             </div>
         </div>
   </div>
 </section>
 <hr>

 <section id="lapangan_basket">
    <div class="container">
         <div class="row">
             <div class="col-7">
                 <div class="card text-white bg-success" style="max-width: 37rem;">
                     <div class="card-header"><h2>Lapangan Basket</h2></div>
                     <div class="card-body">
                       <p class="card-text" style="font-size: 18px;">
                        Nam nec maximus tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis lorem quam, interdum quis interdum eu, finibus a elit. 
                        Proin faucibus orci ut gravida suscipit. 
                        Donec id nibh vitae est accumsan dapibus eget et felis. Integer mauris erat, euismod eget ante non, vestibulum 
                        luctus mauris. Aenean augue lectus, luctus tincidunt scelerisque id, tempor nec dolor. Phasellus eleifend posuere orci ut faucibus. Aenean neque risus,
                      </p>
                     </div>
                 </div>
             </div>
             <div class="col-5">
                 <div id="basket" class="carousel slide" data-bs-ride="carousel">
                     <div class="carousel-indicators">
                       <button type="button" data-bs-target="#basket" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                       <button type="button" data-bs-target="#basket" data-bs-slide-to="1" aria-label="Slide 2"></button>
                       <button type="button" data-bs-target="#basket" data-bs-slide-to="2" aria-label="Slide 3"></button>
                     </div>
                     <div class="carousel-inner" style="height: 300px;width: 300;">
                       <div class="carousel-item active">
                         <img src="fasilitas/lapangan_basket/lapangan_basket1.jpg" class="d-block w-100" alt="...">
                       </div>
                       <div class="carousel-item">
                         <img src="fasilitas/lapangan_basket/lapangan_basket2.jpg" class="d-block w-100" alt="...">
                       </div>
                       <div class="carousel-item">
                         <img src="fasilitas/lapangan_basket/lapangan_basket3.jpg" class="d-block w-100" alt="...">
                       </div>
                     </div>
                     <button class="carousel-control-prev" type="button" data-bs-target="#basket" data-bs-slide="prev">
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Previous</span>
                     </button>
                     <button class="carousel-control-next" type="button" data-bs-target="#basket" data-bs-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Next</span>
                     </button>
                   </div>
             </div>
         </div>
   </div>
 </section>
 <hr>

 <section id="kolam_renang">
    <div class="container">
         <div class="row">
             <div class="col-5">
                <div id="kolam" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#kolam" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#kolam" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#kolam" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" style="height: 300px;width: 300;">
                      <div class="carousel-item active">
                        <img src="fasilitas/kolam/kolam1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="fasilitas/kolam/kolam2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="fasilitas/kolam/kolam3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#kolam" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#kolam" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                   </div>
                </div>
             <div class="col-7">
                <div class="card text-white bg-warning" style="max-width: 37rem;">
                    <div class="card-header"><h2>Kolam Renang</h2></div>
                    <div class="card-body">
                      <p class="card-text" style="font-size: 18px;">
                        Nam nec maximus tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis lorem quam, interdum quis interdum eu, finibus a elit. 
                        Proin faucibus orci ut gravida suscipit. Donec id nibh vitae est accumsan dapibus eget et felis. Integer mauris erat, euismod eget ante non, vestibulum luctus mauris. Aenean augue lectus, luctus tincidunt scelerisque id, tempor nec dolor. 
                        Phasellus eleifend posuere orci ut faucibus.
                     </p>
                    </div>
                </div>
             </div>
         </div>
   </div>
 </section>
 <hr>

 <section id="laboratorium_bio">
    <div class="container">
         <div class="row">
             <div class="col-7">
                 <div class="card text-white" style="max-width: 37rem;background-color: #d966ff">
                     <div class="card-header"><h2>Laboratorium</h2></div>
                     <div class="card-body">
                       <p class="card-text" style="font-size: 18px;">
                        Aenean neque risus, tempus et auctor vel, lacinia viverra leo. Curabitur nisi felis, molestie et arcu non, semper viverra lorem. Morbi tincidunt mattis pellentesque. 
                        Vivamus bibendum felis justo, in mattis augue imperdiet a. Praesent turpis eros, congue non aliquet vitae, lobortis sollicitudin leo. 
                        Proin ultrices ipsum non quam vulputate, sit amet feugiat lectus vulputate. Nullam ac lacinia lectus, ut euismod arcu.
                      </p>
                     </div>
                 </div>
             </div>
             <div class="col-5">
                 <div id="laboratorium" class="carousel slide" data-bs-ride="carousel">
                     <div class="carousel-indicators">
                       <button type="button" data-bs-target="#laboratorium" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                       <button type="button" data-bs-target="#laboratorium" data-bs-slide-to="1" aria-label="Slide 2"></button>
                       <button type="button" data-bs-target="#laboratorium" data-bs-slide-to="2" aria-label="Slide 3"></button>
                     </div>
                     <div class="carousel-inner" style="height: 300px;width: 300;">
                       <div class="carousel-item active">
                         <img src="fasilitas/laboratorium/laboratorium.jpg" class="d-block w-100" alt="...">
                       </div>
                       <div class="carousel-item">
                         <img src="fasilitas/laboratorium/laboratorium2.jpg" class="d-block w-100" alt="...">
                       </div>
                       <div class="carousel-item">
                         <img src="fasilitas/laboratorium/laboratorium3.jpg" class="d-block w-100" alt="...">
                       </div>
                     </div>
                     <button class="carousel-control-prev" type="button" data-bs-target="#laboratorium" data-bs-slide="prev">
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Previous</span>
                     </button>
                     <button class="carousel-control-next" type="button" data-bs-target="#laboratorium" data-bs-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Next</span>
                     </button>
                   </div>
             </div>
         </div>
   </div>
 </section>
 <hr>

 <section id="lab-komputer">
    <div class="container">
         <div class="row">
             <div class="col-5">
                <div id="lab_komputer" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#lab_komputer" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#lab_komputer" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#lab_komputer" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" style="height: 300px;width: 300;">
                      <div class="carousel-item active">
                        <img src="fasilitas/lab_komputer/lab_komputer1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="fasilitas/lab_komputer/lab_komputer2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="fasilitas/lab_komputer/lab_komputer3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#lab_komputer" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#lab_komputer" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                   </div>
                </div>
             <div class="col-7">
                <div class="card text-white" style="max-width: 37rem;background-color:#ff8c66">
                    <div class="card-header"><h2>Lab Komputer</h2></div>
                    <div class="card-body">
                      <p class="card-text" style="font-size: 18px;">
                        Nam nec maximus tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis lorem quam, interdum quis interdum eu, finibus a elit. 
                        Proin faucibus orci ut gravida suscipit. Donec id nibh vitae est accumsan dapibus eget et felis. Integer mauris erat, euismod eget ante non, vestibulum luctus mauris. Aenean augue lectus, luctus tincidunt scelerisque id, tempor nec dolor. 
                        Phasellus eleifend posuere orci ut faucibus.
                     </p>
                    </div>
                </div>
             </div>
         </div>
   </div>
 </section>
 
@endsection