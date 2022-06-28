@extends('layout.main_admin')
@section('title')
    <title>Input Data Pengajar</title>
@endsection
@section('content')
<form method="POST" action="/registrasi">
    @csrf
    <section id="tambah-data-guru">
        <div class="container px-4 bg-light">
            <div class="row gx-4 justify-content-center">
                <h2 style="text-align: center;">Registrasi Admin</h2>
                <div class="col-lg-8">
                    <div class="form-group my-4">
                        <label for=""><b>Nama</b></label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group my-4" >
                        <label for=""><b>Email</b></label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group my-4" >
                        <label for=""><b>Password</b></label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-success mb-4">Tambah</button>
                </div>
            </div>
        </div>
    </section>
  </form>
@endsection