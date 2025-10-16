@extends('cms.cms_Index')

@section('title', 'Dashboard - News Portal Admin')

@section('content')

   <div class="col-lg">
    <div class="vstack gap-4">

        {{-- Menampilkan pesan sukses setelah update --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Kartu Profil Pengguna --}}
        <div class="card shadow-sm">
            <div class="card-body d-flex flex-column align-items-center text-center p-4">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAiuJSA5UbAZuJ0OFqhlnej7BYI8YDOy6OJxREq3xDpiazXpjNESc_svbEtZPm2nRiacTvcgHHlWr5RDxUDqcc7EC2zOJXUeIN-klHvdzVv0PiblqgbEXvyO2x9bHg79LBJ3nXoi1krH5p49xBK5OzwiXIESDDcUrskTxazVDCPrpXd_jc1mCZjmvPtt3V-SsX2IDTbycYYt7H5LPMJr_IlsM_wyPG1Fv3NGs6GwteCskLzdpx0uY7CjuLQfOQGJSRb8iiIWZI7JD0" alt="User avatar" class="rounded-circle mb-3" style="width: 128px; height: 128px;">
                <h3 class="card-title fw-bold">{{ Auth::user()->name }}</h3>
                <p class="card-text text-muted">{{ Auth::user()->role->Nama_Role }}</p>
                
                {{-- Tombol ini akan mengarah ke method edit() --}}
                <a href="{{ route('supervisor.user.edit', Auth::user()->id) }}" class="btn btn-secondary w-100 mt-2 fw-bold">
                    Edit Profile
                </a>
            </div>
        </div>

        {{-- Kartu Informasi Tambahan --}}
        <div class="card shadow-sm">
            <div class="card-header bg-transparent">
                <h4 class="h6 mb-0 fw-bold">User Information</h4>
            </div>
            <div class="card-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="text-muted">Email</span>
                        <span>{{ Auth::user()->email }}</span>
                    </li>
                    {{-- Informasi lainnya --}}
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection