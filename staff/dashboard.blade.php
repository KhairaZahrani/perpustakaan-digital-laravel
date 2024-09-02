@extends('layouts.app')
@section('title', 'Aadmin Dashboard')

@section('content')

<h1>Staff Dashboard</h1>
<p>Selamat datang,{{Auth::user()->username}}!</p>
    <ul>
        <li><a href="#">Pendataan Buku</a></li>
        <li><a href="#">Peminjaman</a></li>
    </ul>
@endsection