@extends('layouts.master')
@section('title')
    Home
@endsection

@section('content')
<h1>SanberBook</h1>
    <h2>Social Media Developer Santai Berkualitas</h2>
    <p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>
    <h2>Benefit join di SanberBook</h2>
    <ul>
        <li>Mendapatkan motivasi dari sesama developer</li>
        <li>Sharing knowledge dari para mastah Sanber</li>
        <li>Dibuat oleh calon web developer terbaik</li>
    </ul>
    <h2>Cara Bergabung ke SanberBook</h2>
    <ol>
        <li>Mengunjungi Website ini</li>
        <li>Mendaftar di Form <a href="{{ route('register') }}">Form Sign Up</a></li>
        <li>Selesai!</li>
    </ol>
@endsection
<!--
<!DOCTYPE html>
<html>
<head>
    <title>Home - SanberBook</title>
</head>
<body>
    <h1>SanberBook</h1>
    <h2>Social Media Developer Santai Berkualitas</h2>
    <p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>
    <h2>Benefit join di SanberBook</h2>
    <ul>
        <li>Mendapatkan motivasi dari sesama developer</li>
        <li>Sharing knowledge dari para mastah Sanber</li>
        <li>Dibuat oleh calon web developer terbaik</li>
    </ul>
    <h2>Cara Bergabung ke SanberBook</h2>
    <ol>
        <li>Mengunjungi Website ini</li>
        <li>Mendaftar di Form <a href="{{ route('register') }}">Form Sign Up</a></li>
        <li>Selesai!</li>
    </ol>
</body>
</html>
!-->
