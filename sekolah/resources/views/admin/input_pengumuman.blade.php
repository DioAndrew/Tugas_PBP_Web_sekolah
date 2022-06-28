@extends('layout.main_admin')
@section('title')
    <title>Input Pengumuman</title>
@endsection
@section('content')
<form method="POST" action="/input-pengumuman" enctype="multipart/form-data">
    @csrf
    <section id="tambah-data-guru">
        <div class="container px-4 bg-light">
            <h2 style="text-align: center;">Input Pengumuman</h2>
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <div class="form-group my-4">
                        <label for=""><b>Judul</b></label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="form-group my-4">
                        <label for=""><b>Isi Pengumuman</b></label>
                        <textarea class="form-control" id="isi" name="isi" rows="4"></textarea>
                      </div>
                    <button type="submit" class="btn btn-success mb-4">Umumkan</button>
                    <a href="daftar-pengumuman"><button type="button" class="btn btn-danger mb-4">Batalkan</button></a>
                </div>
            </div>
        </div>
    </section>
    
  </form>
@endsection