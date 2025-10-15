@extends('cms.cms_index')
@section('content')
<div class="card border-0 shadow-sm">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h3 class="fs-5 fw-semibold mb-0">Recent Articles</h3>
            <a href="{{ route('berita.create') }}" class="btn btn-danger btn-sm">
                <span class="material-symbols-outlined fs-6 me-1">add</span>
                Add New Article
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-nowrap mb-0">
    <thead class="table-light">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">ISI</th>
            <th scope="col">Image</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($berita as $item)
        <tr>
            <td class="fw-medium">{{ $item->Judul }}</td>
            <td>{{ Str::limit($item->isi) }}</td>
            <td>
                {{-- Gunakan asset() helper untuk membuat URL yang benar --}}
                <img src="{{ asset('storage/img/' . $item->gambar) }}" alt="{{ $item->judul }}" width="100">
            </td>

            {{-- Tampilkan Status dengan dropdown --}}
            <td>
                {{-- Logika untuk menentukan status mana yang terpilih --}}
                <select class="form-select form-select-sm" name="status">
                    <option value="publish" {{ $item->status == 'publish' ? 'selected' : '' }}>Publish</option>
                    <option value="pending" {{ $item->status == 'pending' ? 'selected' : '' }}>Pending</option>
                </select>
            </td>

            {{-- Tombol Aksi (Edit & Delete) --}}
            <td>
                {{-- Tombol Edit mengarah ke route 'articles.edit' dengan ID item --}}
                <a class="text-danger text-decoration-none" href="{{ route('berita.edit', $item->id) }}">Edit</a>

                {{-- Tombol Delete harus di dalam form untuk keamanan --}}
                <form action="{{ route('berita.destroy', $item->id) }}" method="POST" class="d-inline ms-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link text-danger text-decoration-none p-0" onclick="return confirm('Anda yakin ingin menghapus berita ini?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
        </div>
    </div>
@endsection