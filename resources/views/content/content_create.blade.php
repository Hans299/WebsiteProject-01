@extends('cms.cms_index')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops! Ada beberapa masalah dengan input Anda.</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bolder">Add New Article</h1>
                <p class="lead text-muted">Fill in the details to add a new article to the portal.</p>
            </div>

            {{-- Ganti '#' dengan action route yang sesuai, misalnya `route('articles.store')` --}}
            <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf {{-- Token keamanan Laravel --}}
                
                {{-- Field Judul --}}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="title" name="judul" placeholder="Enter article title" required>
                    <label for="title">Title</label>
                </div>
                
                {{-- Field isi  nama harus sesuai--}}
                 <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Tulis artikel di sini" id="article" name="isi" style="height: 150px" required></textarea> 
                    <label for="article">Article</label>
                </div>

                {{-- Field Gambar --}}
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Image</label>
                    <input class="form-control" type="file" id="formFile" name="gambar" accept="image/*">
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-secondary fw-bold px-4">Cancel</button>
                    <button type="submit" class="btn btn-primary fw-bold px-4">Submit</button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection