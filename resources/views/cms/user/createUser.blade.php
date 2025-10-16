@extends('cms.cms_index')
@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-header bg-white d-flex justify-content-between align-items-center">
        {{-- DIUBAH: Judul disesuaikan dengan isi tabel --}}
        <h3 class="fs-5 fw-semibold mb-0">User Management</h3>
        {{-- DIUBAH: Tombol dan link disesuaikan --}}
        <a href="/supervisor/user/create" class="btn btn-danger btn-sm">
            <span class="material-symbols-outlined fs-6 me-1">add</span>
            Add New User
        </a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-nowrap mb-0">
            <thead class="table-light">
                {{-- DIUBAH: Urutan dan nama kolom header diubah --}}
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            @foreach ($userData as $user)
            <tbody>
                {{-- DIUBAH: Urutan data di setiap baris disesuaikan dengan header baru --}}
                <tr>
                    <td class="fw-medium">{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->Nama_Role }}</td>
                    <td>
                        {{-- TOMBOL EDIT (yang sudah benar) --}}
                        <a href="{{ route('supervisor.user.edit', $user->id) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        {{-- FORM DELETE (pastikan ini satu-satunya cara memanggil route destroy) --}}
                        <form action="{{ route('supervisor.user.destroy', $user->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            
                            <button type="submit" class="btn btn-danger btn-sm" 
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection