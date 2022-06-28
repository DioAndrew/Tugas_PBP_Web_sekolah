<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="logo/logo_fti.png" class="image"> </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                @if (session()->has('login-gagal'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('login-gagal') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <form action="/login" method="POST">
                        @csrf
                        <div class="card2 card border-0 px-4 py-5" style="margin-top: 80px">
                            <div class="row px-3"> <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Email</h6>
                                </label> <input type="email" class="mb-4" type="text" name="email" id="email" placeholder="Masukan Email"> </div>
                            <div class="row px-3 mb-4"> <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label> <input type="password" name="password" id="password" placeholder="Masukan Password"></div>
                            <div class="row mb-3 px-3"> 
                                <button type="submit" class="btn btn-blue text-center">Login</button> 
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
            <div class="bg-dark py-4">
                <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2 text-white">Copyright &copy; Elegan International School 2021</small>
                    <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>