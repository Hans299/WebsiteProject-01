{{-- resources/views/home.blade.php --}}

@extends('layouts.app')

@section('title', 'NewsPortal - Home')

@section('content')
<div class="container-fluid" style="max-width: 1280px;">
    <div class="px-2 px-md-4 py-4">

        {{-- Hero Section --}}
        <div class="rounded-3 d-flex flex-column justify-content-end p-4 p-md-5 text-white bg-dark bg-cover" 
             style="min-height: 480px; background-image: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.6)), url('https://lh3.googleusercontent.com/aida-public/AB6AXuAjzUQ68UbQsHP3gk4fCkl9shxzNR16A1XRFqE2JE13RQhDU6fsedAImpAYgMnwN8r-5IPEc25T-ZMrPA96hY3-Fp-k1XRq8LWSVvu0uG__JO6nQpntFJw6ZK6MBs5YEWtVV0nRJ6tgHTLgZixY_Fh5l4rO4oOalGrSGkdrKfXpoctwt0EuqafIkksu3FXjmE-Du9wooawr0RL6vohmRfq8C4Mt9fBuiogCaV8llVhbxxcYeJUqD1RhEP8ArvxfqxmsPRRfoH7C44g');">
            <div class="col-md-8 col-lg-6">
                <h1 class="display-5 fw-bolder">Global Summit Addresses Climate Change Crisis</h1>
                <p class="lead my-3">World leaders gather to negotiate new environmental policies amidst growing public pressure.</p>
                <a href="#" class="btn btn-primary btn-lg fw-bold">Read More</a>
            </div>
        </div>

        {{-- Trending Section --}}
        <section class="mt-5">
            <h2 class="fw-bold h4 mb-3">Trending Now</h2>
            <div class="horizontal-scroll overflow-x-auto">
                <div class="d-flex flex-nowrap pb-3" style="gap: 1.5rem;">
                    {{-- Item 1 --}}
                    <div style="min-width: 280px;">
                        <div class="bg-cover rounded-3 mb-2" style="height: 160px; background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDbciGkn6zGtyiKDp0Ujh1agTPx9JISndlpC3wjT3QaSbS8oJm3FCcSp2nnC-6cEkn3WetOr6De07IdEaZ1ljBgkbIAL3TKVehLo5JL4X4p1M55QnoC7NIhqqnuoCrHGystot5jxNekdACjbkntoTA_47YCcwg2RinhwxjB2KsPxi7KQV1fcf_DpJnpou4aWXET1cMkbqHNY0gsDL9yITg292lOD3jPYh1kI9KFBSgvl02gpQobPsmt7xc9WM7uOoKcs1E8pGs5fhk');"></div>
                        <p class="fw-medium">Market Hits Record Highs Amid Tech Boom</p>
                    </div>
                    {{-- Item 2 --}}
                    <div style="min-width: 280px;">
                        <div class="bg-cover rounded-3 mb-2" style="height: 160px; background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDdOFnyw9nb-jbbkmqMRIv7zDPIODGjoEB8xZMSuogTdsQjastGaf4TEvQ79PzdhtiPsc1fla-fzcLyh4Mswl0hTy501KGgDxgIBrCl7_z23VZNUm5T7QtPjyWRILgmZi-5Bk-E-bHGNqluJmoBMjnBmS9zx6iiXwQT02uFo3fHcwbDp9sSnKnUBZV2t_M7tRG-krvrU6OS7w7eKh70ESC3SAtnVyKmcIGtdccAeuH4HBFNDLM7I09QsR5eGacpl1i2s7HS5mU0N1I');"></div>
                        <p class="fw-medium">Breakthrough in Vaccine Development Announced</p>
                    </div>
                    {{-- Item 3 --}}
                    <div style="min-width: 280px;">
                        <div class="bg-cover rounded-3 mb-2" style="height: 160px; background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCDp5tlCdhDI4IdwSJWiujOYIFuujorrCFwwRZ-FfCog0hqVgpqkXzA5EZ6UC7ELXaBT_K1XVqahHe3dh21zqmtx9VXu4uSDbax5f_rwvow2Ss2im8YMNY9uBaCK0M4ctz9SfDcdXkAjtB-WunjIZc3PI7Xj-dRdfrl9DjBOeKmRW5thrVOhOYB3XllW6ARjL1JDzFuQvoi9ywoLQ0y0fAnKCra7z1N5_HFRl6-GourY-G54njAkodpNJlTzhc-apVOFu_51z-sIEE');"></div>
                        <p class="fw-medium">Underdogs Clinch Championship in Stunning Upset</p>
                    </div>
                    {{-- Item 4 --}}
                    <div style="min-width: 280px;">
                        <div class="bg-cover rounded-3 mb-2" style="height: 160px; background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDCqwBpxcuZ9VFZhoFQCybhe2XiMs1BBbod3m4mbSHoaGaLZq1mbMWzyOzipts5KHhU53tT-GtamIxSPpjpsBpgZKQIC0_Ub3KOC1CHkYxPt-cS6mCb9DGx9cfNSaNUeWROtyN43XFZXqK8RCEn5Pe2ewTGgnOJgfZyRog4SRNGNirH_4VausfssFNM6NVWTj1NE4IaAo_bfOO_5nf7Szlw0b56yXpA6tPRP9wzv9Efe3MrW8QAdw1iIs_rV6zbq8-zsf2XCMJ1a4c');"></div>
                        <p class="fw-medium">The Future of Transportation: Self-Driving Cars</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- World News Section --}}
        <section class="mt-5">
            <h2 class="fw-bold h4 mb-3">World News</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @for ($i = 0; $i < 3; $i++)
                <div class="col">
                    <div class="card h-100 border-0 border-bottom rounded-0 pb-2">
                        <div class="bg-cover rounded-3" style="height: 180px; background-image: url('http://googleusercontent.com/profile/picture/{{10 + $i}}');"></div>
                        <div class="card-body px-0">
                            <h5 class="card-title fw-medium">New Trade Deal Forged in Europe</h5>
                            <p class="card-text text-muted">Leaders finalize an agreement that will impact continental commerce for years to come.</p>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-outline-primary fw-bold px-4">Load More</button>
            </div>
        </section>
        
        {{-- Technology Section --}}
        <section class="mt-5">
            <h2 class="fw-bold h4 mb-3">Technology</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                 @for ($i = 0; $i < 3; $i++)
                <div class="col">
                    <div class="card h-100 border-0 border-bottom rounded-0 pb-2">
                        <div class="bg-cover rounded-3" style="height: 180px; background-image: url('http://googleusercontent.com/profile/picture/{{13 + $i}}');"></div>
                        <div class="card-body px-0">
                            <h5 class="card-title fw-medium">The Rise of Artificial Intelligence</h5>
                            <p class="card-text text-muted">How AI is reshaping industries and what it means for the future of work.</p>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-outline-primary fw-bold px-4">Load More</button>
            </div>
        </section>

    </div>
</div>
@endsection