@extends('layouts.app')
@section('title', 'Aadmin Dashboard')

@section('content')

<h1>User Dashboard</h1>
<p>Selamat datang,{{Auth::user()->username}}!</p>
    <ul>
        <li><a href="#">Cari Buku</a></li>
        <li><a href="#">Riwayat Peminjaman</a></li>
    </ul>
@endsection