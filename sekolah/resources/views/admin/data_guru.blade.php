@extends('layout.main_admin')
@section('title')
    <title>Data Pengajar</title>
@endsection
@section('content')

<div class="container" style="margin-top: 100px">
    <a href="/tambah-data"><button type="button" class="btn btn-success pull-right">Input Baru</button></a><br>
    <form class="d-flex" action="/data-guru" method="GET">
        <div class="input-group mb-3 mt-3" style="width: 55%;">
            <input type="text" class="form-control" name="search" placeholder="Masukan ID atau Nama Pengajar" value="{{ request('search') }}">
            <button class="btn text-white bg-success" type="submit" id="search"><i class="fas fa-search"></i></button>
          </div>
    </form>
    <div class="row">
        <div class="col">
            <table class="table table-bordered bg-light text-center">
                <thead class="thead bg-dark text-white">
                  <tr>
                    <th scope="col">Nip</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Edit / Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                    <tr>
                        <td>{{ $dt->nip }}</td>
                        <td>{{ $dt->nama }}</td>
                        <td>{{ $dt->mapel }}</td>
                        <td>{{ $dt->jabatan }}</td>
                        <td> 
                            <button class="badge bg-transparent border-0"><a href="/data-guru/edit/{{ $dt->id }}"><i class="fas fa-edit fa-lg" style="color: blue"></i></button>
                            <form action="/data-guru/delete/{{ $dt->id }}" method="POST" onsubmit="return confirm('Hapus data ini?')">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="badge bg-transparent border-0"><i class="fas fa-trash fa-lg" style="color: red"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection