@extends('index')

@section('content')
    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-lg-3">
            <div class="card h-100">
                <div class="card-body">
                    <p class="card-title">Total Articles</p>
                    <p class="h3 fw-bold">1,234</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card h-100">
                <div class="card-body">
                    <p class="card-title">Active Users</p>
                    <p class="h3 fw-bold">5,678</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card h-100">
                <div class="card-body">
                    <p class="card-title">Pending Approval</p>
                    <p class="h3 fw-bold">12</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card h-100">
                <div class="card-body">
                    <p class="card-title">Comments Today</p>
                    <p class="h3 fw-bold">89</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-lg-6">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <p class="card-title">User Growth</p>
                    <p class="h3 fw-bold">5,678</p>
                    <div class="d-flex gap-2 align-items-center">
                        <p class="small text-muted mb-0">Last 30 days</p>
                        <p class="small fw-medium text-success mb-0">+15%</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-end mt-3">
                        <svg class="w-100" fill="none" height="150" preserveAspectRatio="none" viewBox="0 0 475 150" xmlns="http://www.w3.org/2000/svg">
                           <path d="M0 109C18.2692 109 18.2692 21 36.5385 21C54.8077 21 54.8077 41 73.0769 41C91.3462 41 91.3462 93 109.615 93C127.885 93 127.885 33 146.154 33C164.423 33 164.423 101 182.692 101C200.962 101 200.962 61 219.231 61C237.5 61 237.5 45 255.769 45C274.038 45 274.038 121 292.308 121C310.577 121 310.577 149 328.846 149C347.115 149 347.115 1 365.385 1C383.654 1 383.654 81 401.923 81C420.192 81 420.192 129 438.462 129C456.731 129 456.731 25 475 25" stroke="var(--bs-primary)" stroke-linecap="round" stroke-width="3"></path>
                           <path d="M0 109C18.2692 109 18.2692 21 36.5385 21C54.8077 21 54.8077 41 73.0769 41C91.3462 41 91.3462 93 109.615 93C127.885 93 127.885 33 146.154 33C164.423 33 164.423 101 182.692 101C200.962 101 200.962 61 219.231 61C237.5 61 237.5 45 255.769 45C274.038 45 274.038 121 292.308 121C310.577 121 310.577 149 328.846 149C347.115 149 347.115 1 365.385 1C383.654 1 383.654 81 401.923 81C420.192 81 420.192 129 438.462 129C456.731 129 456.731 25 475 25V150H0V109Z" fill="url(#chart-gradient)"></path>
                           <defs>
                              <linearGradient id="chart-gradient" x1="237.5" y1="1" x2="237.5" y2="150" gradientUnits="userSpaceOnUse">
                                 <stop stop-color="var(--bs-primary)" stop-opacity="0.2"></stop>
                                 <stop offset="1" stop-color="var(--bs-primary)" stop-opacity="0"></stop>
                              </linearGradient>
                           </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <p class="card-title">Content Breakdown</p>
                    <p class="h3 fw-bold">1,234</p>
                    <div class="d-flex gap-2 align-items-center">
                        <p class="small text-muted mb-0">All Time</p>
                        <p class="small fw-medium text-success mb-0">+5%</p>
                    </div>
                    <div class="flex-grow-1 row gx-4 pt-4 align-items-end text-center">
                        <div class="col">
                            <div class="w-100 bg-primary-subtle rounded-top" style="height: 128px; position: relative;">
                                <div class="bg-primary" style="position: absolute; bottom: 0; left: 0; right: 0; height: 10%;"></div>
                            </div>
                            <p class="small fw-bold text-muted mt-2">Technology</p>
                        </div>
                        <div class="col">
                            <div class="w-100 bg-primary-subtle rounded-top" style="height: 128px; position: relative;">
                                <div class="bg-primary" style="position: absolute; bottom: 0; left: 0; right: 0; height: 90%;"></div>
                            </div>
                            <p class="small fw-bold text-muted mt-2">Sports</p>
                        </div>
                         <div class="col">
                            <div class="w-100 bg-primary-subtle rounded-top" style="height: 128px; position: relative;">
                                <div class="bg-primary" style="position: absolute; bottom: 0; left: 0; right: 0; height: 20%;"></div>
                            </div>
                            <p class="small fw-bold text-muted mt-2">Politics</p>
                        </div>
                         <div class="col">
                            <div class="w-100 bg-primary-subtle rounded-top" style="height: 128px; position: relative;">
                                <div class="bg-primary" style="position: absolute; bottom: 0; left: 0; right: 0; height: 60%;"></div>
                            </div>
                            <p class="small fw-bold text-muted mt-2">Business</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="h5 mb-0">Recent Articles</h3>
            <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-2">
                <span class="material-symbols-outlined" style="font-size: 1.2rem;">add</span>
                Add New Article
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Category</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-medium">Breaking News: Market Hits Record High</td>
                        <td>John Doe</td>
                        <td><span class="badge text-bg-primary">Business</span></td>
                        <td>Published</td>
                        <td>
                            <a class="text-primary text-decoration-none" href="#">Edit</a>
                            <a class="text-danger text-decoration-none ms-2" href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-medium">The Future of AI in Healthcare</td>
                        <td>Jane Smith</td>
                        <td><span class="badge text-bg-primary">Technology</span></td>
                        <td>Published</td>
                        <td>
                            <a class="text-primary text-decoration-none" href="#">Edit</a>
                            <a class="text-danger text-decoration-none ms-2" href="#">Delete</a>
                        </td>
                    </tr>
                     <tr>
                        <td class="fw-medium">Local Sports Team Wins Championship</td>
                        <td>Mike Johnson</td>
                        <td><span class="badge text-bg-primary">Sports</span></td>
                        <td>Pending</td>
                        <td>
                            <a class="text-primary text-decoration-none" href="#">Edit</a>
                            <a class="text-danger text-decoration-none ms-2" href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-medium">Election Results Are In</td>
                        <td>Sarah Brown</td>
                        <td><span class="badge text-bg-primary">Politics</span></td>
                        <td>Draft</td>
                        <td>
                            <a class="text-primary text-decoration-none" href="#">Edit</a>
                            <a class="text-danger text-decoration-none ms-2" href="#">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-medium">New Innovations in Renewable Energy</td>
                        <td>David Wilson</td>
                        <td><span class="badge text-bg-primary">Technology</span></td>
                        <td>Published</td>
                        <td>
                            <a class="text-primary text-decoration-none" href="#">Edit</a>
                            <a class="text-danger text-decoration-none ms-2" href="#">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection