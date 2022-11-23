@extends('layouts.index')

@section('content')
    <br />
    <a class="btn btn-success" href="{{ url('pegawai/create') }}">Tambah</a>
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>NIP</th>
            <th>Gelar</th>
            <th colspan="2">Aksi</th>
        </tr>
        @foreach($datas as $key=>$value)
            <tr>
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