@extends('layout.main_admin')
@section('title')
    <title>Input Data Pengajar</title>
@endsection
@section('content')
<form method="POST" action="/tambah-data" enctype="multipart/form-data">
    @csrf
    <section id="tambah-data-guru">
        <div class="container px-4 bg-light">
            <div class="row gx-4 justify-content-center">
                <h2 style="text-align: center;">Input Data Pengajar</h2>
                <div class="col-lg-8">
                    <div class="form-group my-4">
                        <label for=""><b> Nomor Identitas Pegawai (NIP)</b></label>
                        <input type="text" class="form-control" id="nip" name="nip">
                    </div> 
                    <div class="form-group my-4">
                        <label for=""><b>Nama</b></label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="">Mata Pelajaran</label>
                        <select class="form-control" id="mapel" name="mapel">
                            <option value="Matematika">Matematika</option>
                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                            <option value="Bahasa German">Bahasa German</option>
                            <option value="Bahasa Perancis">Bahasa Perancis</option>
                            <option value="Pendidikan Agama Kristen">Pendidikan Agama Kristen</option>
                            <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
                            <option value="Pendidikan Agama Katolik">Pendidikan Agama Katolik</option>
                            <option value="Pendidikan Agama Buddha">Pendidikan Agama Buddha</option>
                            <option value="Pendidikan Kewarganegaraan">Pendidikan Kewarganegaraan</option>
                            <option value="Seni Budaya">Seni Budaya</option>
                            <option value="Penjas">Penjas</option>
                            <option value="Biologi">Biologi</option>
                            <option value="Kimia">Kimia</option>
                            <option value="Coding">Coding</option>
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Sejarah">Sejarah</option>
                            <option value="Geografi">Geografi</option>
                            <option value="Tidak Mengajar">Tidak mengajar</option>
                        </select>
                      </div>
                    <div class="form-group my-4" >
                        <label for=""><b>Jabatan</b></label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                    <div class="my-4">
                        <label for="formFileSm" class="form-label"><b>Foto</b></label>
                        <input class="form-control form-control-sm" id="foto" type="file" name="foto">
                    </div>
                    <button type="submit" class="btn btn-success mb-4">Tambah</button>
                    <a href="/data-guru"><button type="button" class="btn btn-danger mb-4">Batalkan</button></a>
                </div>
            </div>
        </div>
    </section>
    
  </form>
@endsection