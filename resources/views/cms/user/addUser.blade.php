@extends('cms.cms_index')
@section('content')
<div class="card border-0 shadow-sm">
    <div class="card-header bg-white">
        <h3 class="fs-5 fw-semibold mb-0">Add New User</h3>
        <p class="text-muted fs-7 mb-0">Fill the form below to add a new user to the system.</p>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops! Ada yang salah dengan input Anda.</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="card-body">
        {{-- Arahkan action ke route yang menangani proses penyimpanan user --}}
        <form action="{{ route('supervisor.user.store') }}" method="POST">
            {{-- Token CSRF wajib untuk keamanan di Laravel --}}
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label fw-medium">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-medium">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label fw-medium">Role</label>
                <select class="form-select" id="role" name="role_id" required>
                    <option selected disabled value="">Choose a role...</option>
                    <option value="1">supervisor</option>
                    <option value="2">admin</option>
                    <option value="3">user</option>
                </select>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="password" class="form-label fw-medium">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label fw-medium">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm new password" required>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-danger">
                    <span class="material-symbols-outlined fs-6 me-1">save</span>
                    Save User
                </button>
                {{-- Arahkan href ke halaman daftar user --}}
                <a href="#" class="btn btn-secondary ms-2">Cancel</a>
            </div>

        </form>
    </div>
</div>
@endsection