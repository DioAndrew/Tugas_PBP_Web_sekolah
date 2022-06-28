<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        @yield('title')
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="fontawesome-5/css/all.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <style>
         .card:hover
        {
            background: #8F00FF !important;
            color: white;
            transition: all .5s ease-in-out;
            animation: gradient 3s infinite;
        }
        .nav-item:hover
        {
            border-bottom: solid whitesmoke;
        }
    </style>
    <body id="page-top" style="background-image: url('background/background1.jpg');background-size: cover;">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand">Elegan International School</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/data-guru">Data Guru</a></li>
                        <li class="nav-item"><a class="nav-link" href="/daftar-pengumuman">Daftar Pengumuman</a></li>
                        <li class="nav-item"><a class="nav-link" href="/registrasi">Input Admin</a></li>
                        <li class="dropdown" style="border-left: 1px solid white;margin-left:45px;">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu mx-3" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Elegan International School 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
