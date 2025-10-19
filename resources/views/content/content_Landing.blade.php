{{-- resources/views/home.blade.php --}}

@extends('layouts.app')

@section('title', 'NewsPortal - Home')

@section('content')
<div class="container-fluid" style="max-width: 1280px;">
    <div class="px-2 px-md-4 py-4">

        {{-- Hero Section --}}
        <div class="rounded-3 d-flex flex-column justify-content-end p-4 p-md-5 text-white bg-dark bg-cover" 
             style="min-height: 480px; background-image: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.6)), url('https://lh3.googleusercontent.com/aida-public/AB6AXuAjzUQ68UbQsHP3gk4fCkl9shxzNR16A1XRFqE2JE13RQhDU6fsedAImpAYgMnwN8r-5IPEc25T-ZMrPA96hY3-Fp-k1XRq8LWSVvu0uG__JO6nQpntFJw6ZK6MBs5YEWtVV0nRJ6tgHTLgZixY_Fh5l4rO4oOalGrSGkdrKfXpoctwt0EuqafIkksu3FXjmE-Du9wooawr0RL6vohmRfq8C4Mt9fBuiogCaV8llVhbxxcYeJUqD1RhEP8ArvxfqxmsPRRfoH7C44g');">
            <div class="col-md-8 col-lg-6">
                <h1 class="display-5 fw-bolder">Global Summit Addresses Climate Change Crisis</h1>
                <p class="lead my-3">World leaders gather to negotiate new environmental policies amidst growing public pressure.</p>
                <a href="#" class="btn btn-primary btn-lg fw-bold">Read More</a>
            </div>
        </div>

        {{-- Trending Section --}}
        <section class="mt-5">
            <h2 class="fw-bold h4 mb-3">News </h2>
            
            {{-- 
            HANYA PERLU SATU div 'horizontal-scroll'. 
            Saya sudah hapus yang duplikat.
            --}}
            <div class="horizontal-scroll overflow-x-auto">
                <div class="d-flex flex-nowrap pb-3" style="gap: 1.5rem;">

                    {{-- Memulai perulangan untuk setiap berita --}}
                    @foreach ($beritaTrending as $berita)
                        
                        <div class="card shadow-sm" style="min-width: 280px; flex-shrink: 0;">
                            
                            {{-- 1. BAGIAN GAMBAR (SEBAGAI LINK) --}}
                            <a href="{{-- GANTI DENGAN URL DETAIL BERITA --}}">
                                <img src="{{ asset('uploads/img/' . $berita->gambar) }}" 
                                    class="card-img-top" 
                                    alt="{{ $berita->Judul }}"
                                    style="height: 160px; object-fit: cover;">
                            </a>
                            
                            {{-- 2. BAGIAN BADAN CARD (UNTUK TEKS/JUDUL) --}}
                            <div class="card-body">
                                
                                {{-- 3. BAGIAN JUDUL (SEBAGAI LINK) --}}
                                <h5 class="card-title fw-medium">
                                    <a href="{{ route('berita.show', $berita->id) }}" class="text-decoration-none text-dark">
                                        
                                        {{-- INI YANG MENAMPILKAN JUDUL (SUDAH BENAR) --}}
                                        {{  $berita->Judul }}

                                    </a>
                                </h5>
                            </div>

                        </div>

                    @endforeach

                </div>
            </div>
            {{-- 
            SAYA SUDAH HAPUS '</div>' EKSTRA YANG SEBELUMNYA ADA DI SINI 
            --}}
        </section>
@endsection