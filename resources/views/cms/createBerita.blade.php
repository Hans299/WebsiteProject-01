@extends('cms.cms_index')
@section('content')
<div class="card border-0 shadow-sm">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h3 class="fs-5 fw-semibold mb-0">Recent Articles</h3>
            <a href="{{ route('/berita/create') }}" class="btn btn-danger btn-sm">
                <span class="material-symbols-outlined fs-6 me-1">add</span>
                Add New Article
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-nowrap mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-medium">Breaking News: Market Hits Record High</td>
                        <td>John Doe</td>
                        <td><span class="badge text-bg-danger bg-opacity-10 text-danger-emphasis">Business</span></td>
                        <td>Published</td>
                        <td>
                            <a class="text-danger text-decoration-none" href="#">Edit</a>
                            <a class="text-danger text-decoration-none ms-2" href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-medium">The Future of AI in Healthcare</td>
                        <td>Jane Smith</td>
                        <td><span class="badge text-bg-danger bg-opacity-10 text-danger-emphasis">Technology</span></td>
                        <td>Published</td>
                        <td>
                             <a class="text-danger text-decoration-none" href="#">Edit</a>
                            <a class="text-danger text-decoration-none ms-2" href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-medium">Local Sports Team Wins Championship</td>
                        <td>Mike Johnson</td>
                        <td><span class="badge text-bg-danger bg-opacity-10 text-danger-emphasis">Sports</span></td>
                        <td>Pending</td>
                        <td>
                             <a class="text-danger text-decoration-none" href="#">Edit</a>
                            <a class="text-danger text-decoration-none ms-2" href="#">Delete</a>
                        </td>
                    </tr>
                     <tr>
                        <td class="fw-medium">Election Results Are In</td>
                        <td>Sarah Brown</td>
                        <td><span class="badge text-bg-danger bg-opacity-10 text-danger-emphasis">Politics</span></td>
                        <td>Draft</td>
                        <td>
                             <a class="text-danger text-decoration-none" href="#">Edit</a>
                            <a class="text-danger text-decoration-none ms-2" href="#">Delete</a>
                        </td>
                    </tr>
                     <tr>
                        <td class="fw-medium">New Innovations in Renewable Energy</td>
                        <td>David Wilson</td>
                        <td><span class="badge text-bg-danger bg-opacity-10 text-danger-emphasis">Technology</span></td>
                        <td>Published</td>
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