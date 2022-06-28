@extends('layout.main_admin')
@section('title')
    <title>Daftar Pengumuman</title>
@endsection
@section('content')
<div class="container">
    <div class="row" style="margin-top: 100px">
        <a href="/input-pengumuman"><button type="button" class="btn btn-success pull-right">Input Baru</button></a><br><br>
        @foreach ($data as $dt)
            <div class="col">
                <div class="card mb-5" style="width: 33rem;">
                    <i class="fas fa-bullhorn fa-5x bg-primary text-white text-center py-3 "></i>
                    <div class="card-body">
                        <h5 class="card-title">{{ $dt->judul }}</h5>
                        <p class="card-text">{{ $dt->isi }}</p>
                        <p class="card-text"><small class="text-muted">{{ $dt->created_at }}</small></p>
                        <div class="d-flex flex-row-reverse">
                                <button class="badge bg-transparent border-0"><a href="/data-pengumuman/edit/{{ $dt->id }}"><i class="fas fa-edit fa-lg" style="color: blue"></i></a></button>
                                <form action="/data-pengumuman/hapus/{{ $dt->id }}" method="POST" onsubmit="return confirm('Hapus data ini?')">
                                  @method('DELETE')
                                  @csrf
                                  <button type="submit" class="badge bg-transparent border-0"><i class="fas fa-trash fa-lg" style="color: red"></i></button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection