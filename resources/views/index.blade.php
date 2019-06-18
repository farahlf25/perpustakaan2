@extends('layout')
@section('title')
    Beranda
@endsection
@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            Perpustakaan - Farah
        </div>
        <div class="card-body">
            <a href="{{ action('BookController@create') }}" class="btn btn-primary">Input Pegawai Baru</a>
            <br/>
            <br/>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Pengarang</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($buku as $buku)
                    <tr>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->penerbit }}</td>
                        <td>{{ $buku->tahun_terbit }}</td>
                        <td>{{ $buku->pengarang }}</td>
                        <td>
                            <a href="{{ action('BookController@update') }}">Edit </a>
                            <a href="{{ action('BookController@destroy', $buku->id) }}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection