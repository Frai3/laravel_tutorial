@extends('layouts.index')

@section('content')
    <br />
    <form action="{{ url('pegawai') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('pegawai._form')
    </form>
@endsection