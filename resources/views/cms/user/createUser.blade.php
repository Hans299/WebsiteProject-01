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
            <tbody>
                {{-- DIUBAH: Urutan data di setiap baris disesuaikan dengan header baru --}}
                <tr>
                    <td class="fw-medium">John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>Admin</td>
                    <td>
                        <a class="text-danger text-decoration-none" href="#">Edit</a>
                        <a class="text-danger text-decoration-none ms-2" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td class="fw-medium">Jane Smith</td>
                    <td>jane.smith@example.com</td>
                    <td>Editor</td>
                    <td>
                        <a class="text-danger text-decoration-none" href="#">Edit</a>
                        <a class="text-danger text-decoration-none ms-2" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td class="fw-medium">Mike Johnson</td>
                    <td>mike.j@example.com</td>
                    <td>Contributor</td>
                    <td>
                        <a class="text-danger text-decoration-none" href="#">Edit</a>
                        <a class="text-danger text-decoration-none ms-2" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td class="fw-medium">Sarah Brown</td>
                    <td>sarah.b@example.com</td>
                    <td>Editor</td>
                    <td>
                        <a class="text-danger text-decoration-none" href="#">Edit</a>
                        <a class="text-danger text-decoration-none ms-2" href="#">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td class="fw-medium">David Wilson</td>
                    <td>d.wilson@example.com</td>
                    <td>Admin</td>
                    <td>
                        <a class="text-danger text-decoration-none" href="#">Edit</a>
                        <a class="text-danger text-decoration-none ms-2" href="#">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection