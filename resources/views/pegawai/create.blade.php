@extends('layouts.index')

@section('content')
    <br />
    <form action="{{ url('pegawai') }}" method="POST">
        @csrf
        @include('pegawai._form')
    </form>
@endsection