@extends('layout')
@section('title')
    Tambah
@endsection
@section('content')
<br><br>
<h1>Tambah Buku</h1>
<br>
<form method="post" action="{{ action('BookController@store') }}">

    {{ csrf_field() }}

    <div class="form-group">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" placeholder="Nama Buku ...">

        @if($errors->has('judul'))
            <div class="text-danger">
                {{ $errors->first('judul')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>Penerbit</label>
        <textarea name="penerbit" class="form-control" placeholder="Nama Penerbit ..."></textarea>

            @if($errors->has('penerbit'))
            <div class="text-danger">
                {{ $errors->first('penerbit')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>Tahun Terbit</label>
        <textarea name="tahun_terbit" class="form-control" placeholder="Tahunnya ..."></textarea>

            @if($errors->has('tahun_terbit'))
            <div class="text-danger">
                {{ $errors->first('tahun_terbit')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <label>Pengarang</label>
        <textarea name="pengarang" class="form-control" placeholder="Nama Pengarang ..."></textarea>

            @if($errors->has('pengarang'))
            <div class="text-danger">
                {{ $errors->first('pengarang')}}
            </div>
        @endif

    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Simpan">
    </div>

</form>
@endsection