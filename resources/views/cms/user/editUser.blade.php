{{-- Menggunakan layout utama yang Anda berikan --}}
@extends('cms.cms_index') 

{{-- Memberi judul spesifik untuk halaman ini --}}
@section('title', 'Edit Pengguna -')

@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-header bg-white border-bottom py-3">
        {{-- DIUBAH: Menggunakan $user, bukan $profile --}}
        <h2 class="h5 mb-0 fw-medium">Edit Pengguna: {{ $user->name }}</h2>
    </div>
    <div class="card-body p-4">

        {{-- Menampilkan pesan error validasi jika ada --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops! Ada yang salah dengan input Anda.</strong>
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form mengarah ke route 'update' --}}
        {{-- DIUBAH: Menggunakan $user->id --}}
        <form action="{{ route('supervisor.user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT') {{-- Wajib untuk proses update --}}

            {{-- Input untuk Nama --}}
            <div class="mb-3">
                <label for="name" class="form-label fw-medium">Nama</label>
                <input type="text" 
                       class="form-control @error('name') is-invalid @enderror" 
                       id="name" 
                       name="name" 
                       value="{{ old('name', $user->name) }}" 
                       required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input untuk Email --}}
            <div class="mb-3">
                <label for="email" class="form-label fw-medium">Email</label>
                <input type="email" 
                       class="form-control @error('email') is-invalid @enderror" 
                       id="email" 
                       name="email" 
                       value="{{ old('email', $user->email) }}" 
                       required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <hr class="my-4">

            <p class="text-muted">Kosongkan password jika Anda tidak ingin mengubahnya.</p>

            {{-- Input untuk Password Baru --}}
            <div class="mb-3">
                <label for="password" class="form-label fw-medium">Password Baru</label>
                <input type="password" 
                       class="form-control @error('password') is-invalid @enderror" 
                       id="password" 
                       name="password">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- Input untuk Konfirmasi Password Baru --}}
            <div class="mb-3">
                <label for="password_confirmation" class="form-label fw-medium">Konfirmasi Password Baru</label>
                <input type="password" 
                       class="form-control" 
                       id="password_confirmation" 
                       name="password_confirmation">
            </div>

            {{-- Tombol Aksi --}}
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Update Pengguna</button>
                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Batal</a>
            </div>
        </form>

    </div>
</div>
@endsection