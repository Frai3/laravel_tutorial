@extends('layouts.index')

@section('content')
    <br />
    <form action="{{ url('pegawai/'.$model->id) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        @include('pegawai._form')
    </form>
@endsection