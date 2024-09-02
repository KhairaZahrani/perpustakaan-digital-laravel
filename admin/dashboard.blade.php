@extends('layouts.app')
@section('title', 'Aadmin Dashboard')

@section('content')

<h1>Admin Dashboard</h1>
<p>Selamat datang,{{Auth::user()->username}}!</p>
    <ul>
        <li><a href="#">Kelola Pengguna</a></li>
        <li><a href="#">Kelola Buku</a></li>
        <li><a href="#">Generate Laporan</a></li>
    </ul>
@endsection