@extends('layouts.main')

@section('content')
    <div class="text-center">
        <h1 class="display-5 mb-4">{{ $judul ?? 'Halaman Home' }}</h1>
        <p class="lead mb-4">Selamat datang di halaman Home. Ini adalah halaman sederhana yang menggunakan layout bersama (`layouts.main`).</p>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-transparent border-0 text-white">
                    <img src="{{ asset('images/halaman home.png') }}" class="img-fluid rounded shadow-lg" alt="home image">
                </div>
            </div>
        </div>
    </div>
@endsection
