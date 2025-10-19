{{-- Memberitahu Blade untuk menggunakan layout / tema dari app.blade.php --}}
@extends('layouts.app')

{{-- Mengatur <title> di tab browser --}}
@section('title', $berita->Judul)


{{-- Ini adalah bagian konten utama --}}
@section('content')

    <div class="container" style="max-width: 1280px;">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                
                <article class="py-5">
                    
                    {{-- 1. JUDUL BERITA --}}
                    <h1 class="fw-bold mb-3" style="font-size: 2.75rem; line-height: 1.2;">
                        {{ $berita->Judul }}
                    </h1>
                
                    {{-- 2. FOTO (GAMBAR) --}}
                    <figure class="mb-4">
                        <img src="{{ asset('uploads/img/' . $berita->gambar) }}" 
                             class="img-fluid rounded-3 shadow-sm" 
                             alt="{{ $berita->Judul }}"
                             style="width: 100%;">
                    </figure>

                    {{-- 3. ISI BERITA --}}
                    <div class="article-body" style="font-size: 1.15rem; line-height: 1.7;">
                        {{-- 
                          PENTING: Menggunakan {!! ... !!} agar HTML 
                          dari editor (seperti <p>, <b>) bisa tampil.
                        --}}
                        {!! $berita->isi !!}
                    </div>

                </article>

            </div>
        </div>
    </div>
@endsection