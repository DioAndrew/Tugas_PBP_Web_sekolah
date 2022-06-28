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
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
        @yield('navbar')
        @yield('content')
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Elegan International High School 2021</p></div>
            <div class="container px-4"><p class="m-0 text-center text-white">Partners :</p></div>
            <div class="container px-4">
                <p class="m-0 text-center text-white">
                    <i class="fab fa-aws fa-2x text-white mx-2"></i>
                    <i class="fab fa-microsoft fa-2x text-white mx-2"></i>
                    <i class="fab fa-google fa-2x text-white mx-2"></i>
                    <i class="fab fa-apple fa-2x text-white mx-2"></i>
                </p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
