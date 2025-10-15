@extends('cms.cms_index')

@section('content')
<div class="card border-0 shadow-sm">
    {{-- CARD HEADER --}}
    <div class="card-header bg-white">
        <h3 class="fs-5 fw-semibold mb-0">Edit Article</h3>
    </div>

    {{-- CARD BODY --}}
    <div class="card-body">
        {{-- Tampilkan error validasi jika ada --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- FORM --}}
        <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') {{-- WAJIB: Memberitahu Laravel ini adalah request UPDATE --}}

            {{-- Input Judul --}}
            <div class="mb-3">
                <label for="judul" class="form-label fw-semibold">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ $berita->judul }}" required>
            </div>

            {{-- Input Isi --}}
            <div class="mb-3">
                <label for="isi" class="form-label fw-semibold">Isi</label>
                <textarea name="isi" id="isi" class="form-control" rows="5" required>{{ $berita->isi }}</textarea>
            </div>

            {{-- Input Gambar --}}
            <div class="mb-3">
                <label for="gambar" class="form-label fw-semibold">Gambar (Kosongkan jika tidak ingin diubah)</label>
                <br>
                {{-- Tampilkan gambar yang ada saat ini --}}
                <img src="{{ asset('storage/img/' . $berita->gambar) }}" width="200" class="img-thumbnail mt-2 mb-3">
                <input type="file" name="gambar" id="gambar" class="form-control">
            </div>
            
            {{-- Tombol Aksi --}}
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Update Article</button>
                <a href="{{ route('berita.create') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection