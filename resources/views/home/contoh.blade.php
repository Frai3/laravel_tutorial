@extends('layouts.index')

@section('content')
    <p>Input form dibawah</p>
    <form action="{{ url('home/contoh') }}" method="POST">
        @csrf
        <input type="text" name="nama">
        <button type="submit">SUBMIT</button>
    </form>
@endsection