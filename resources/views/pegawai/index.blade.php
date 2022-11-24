@extends('layouts.index')

@section('content')
    <br />
    @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif

    <a class="btn btn-success" href="{{ url('pegawai/create') }}">Tambah</a>
    <br /><br />

    <form action="{{ url('pegawai') }}" method="GET">
        <input type="text" name="keyword" value="{{ $keyword }}"/>
        <button type="submit">Search</button>
    </form>

    <br />
    <table class="table table-bordered">
        <tr>
            <th>Foto Profil</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>NIP</th>
            <th>Gelar</th>
            <th colspan="2">Aksi</th>
        </tr>
        @foreach($datas as $key=>$value)
            <tr>
                <td>
                    <img src="{{ asset('foto/'.$value->foto_profile) }}" alt="" width="250px">
                </td>
                <td>{{$value->nama}}</td>
                <td>{{$value->tanggal_lahir}}</td>
                <td>{{$value->nip}}</td>
                <td>{{$value->gelar}}</td>
                <td>
                    <a class="btn btn-warning" href="{{ url('pegawai/'.$value->id.'/edit') }}">Update</a>
                </td>
                <td>
                    <form action="{{ url('pegawai/'.$value->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection