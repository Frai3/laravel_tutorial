@extends('layouts.index')

@section('content')
    <br />
    <form action="{{ url('pegawai') }}" method="POST">
        @csrf
        Nama : <input type="text" name="nama"><br />
        Tanggal Lahir : <input type="date" name="tanggal_lahir"><br />
        Gelar : <input type="text" name="gelar"><br />
        NIP : <input type="text" name="nip"><br />
        <button type="submit">SIMPAN</button>
    </form>
@endsection