@extends('cms.cms_index')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bolder">Add New Article</h1>
                <p class="lead text-muted">Fill in the details to add a new article to the portal.</p>
            </div>

            {{-- Ganti '#' dengan action route yang sesuai, misalnya `route('articles.store')` --}}
            <form action="#" method="POST">
                @csrf {{-- Token keamanan Laravel --}}
                
                {{-- Field Judul --}}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter article title" required>
                    <label for="title">Title</label>
                </div>

                {{-- Field Penulis --}}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="author" name="author" placeholder="Enter author's name" required>
                    <label for="author">Author</label>
                </div>

                {{-- Field Kategori --}}
                 <div class="form-floating mb-4">
                    <select class="form-select" id="category" name="category_id" aria-label="Article category select">
                        <option selected>Select a category</option>
                        <option value="1">Technology</option>
                        <option value="2">Politics</option>
                        <option value="3">Sports</option>
                    </select>
                    <label for="category">Category</label>
                </div>

                {{-- Field Status --}}
                <div class="mb-4">
                    <p class="mb-2 fw-medium">Status</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="statusPublished" value="published" checked>
                        <label class="form-check-label" for="statusPublished">Published</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="statusDraft" value="draft">
                        <label class="form-check-label" for="statusDraft">Draft</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="statusArchived" value="archived">
                        <label class="form-check-label" for="statusArchived">Archived</label>
                    </div>
                </div>

                {{-- Tombol Aksi --}}
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-secondary fw-bold px-4">Cancel</button>
                    <button type="submit" class="btn btn-primary fw-bold px-4">Submit</button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection