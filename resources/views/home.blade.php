@extends('layouts.app')

@section('content')
<section class="banner_post">
    <div class="container-fluid">
        <div class="row justify-content-between">
            @foreach ($post_random as $post)
            <div class="banner_post_1 banner_post_bg_1" style="background-image: url( storage/{{ $post->image }}) ; background-size: 100% 700px;">
                <div class="banner_post_iner text-center">
                    <a href="single-blog.html">
                        <h2>{{ $post->title }}</h2>
                    </a>
                    <p>{{ $post->excerpt }}</p>
                    <p>{{ $post->created_at->diffForHumans() }}</p>
                </div>
            </div>
            @endforeach
            
            {{-- <div class="banner_post_1 banner_post_bg_2">
                <div class="banner_post_iner text-center">
                    <a href="category.html">
                        <h5> Fashion / Life style</h5>
                    </a>
                    <a href="single-blog.html">
                        <h2>All said replenish years void
                            kind say void 
                        </h2>
                    </a>
                    <p>Posted on April 15, 2019</p>
                </div>
            </div>
            <div class="banner_post_1 banner_post_bg_3">
                <div class="banner_post_iner text-center">
                    <a href="category.html">
                        <h5> Fashion / Life style</h5>
                    </a>
                    <a href="single-blog.html">
                        <h2>All said replenish years void
                            kind say void 
                        </h2>
                    </a>
                    <p>Posted on April 15, 2019</p>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<div class="subscribe_form padding_top margin_top">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="subscribe_form_iner">
                    <form>
                        <div class="form-row align-items-center justify-content-center">
                            <div class="col-md-12 col-lg-3">
                                <h3>Subscribe
                                    Our Newsletter
                                </h3>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <input type="text" class="form-control" placeholder="Your name">
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <input type="text" class="form-control" placeholder="Your email">
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <a href="#" class="btn_1">Subscribe</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="all_post section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach ($posts as $key => $post)
                        @if ($key == 0)
                            <div class="col-lg-12">
                                <div class="single_post post_1 feature_post">
                                    <a href="/post/{{ $post->slug }}">
                                        <div class="single_post_img">
                                            {{-- <img src="img/post/post_12.png"  alt=""> --}}
                                            <img src="{{ asset('storage/'.$post->image) }}" width="750" height="430" style="object-fit: cover" alt="">
                                        </div>
                                        <div class="single_post_text text-center">
                                            {{-- <a href="category.html">
                                                <h5> Fashion / Life style</h5>
                                            </a> --}}
                                            
                                                <h2>{{ $post->title }}</h2>
                                            
                                            <p>{{ $post->excerpt }}</p>
                                            <p>{{ $post->created_at->diffForHumans() }}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @else 
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_post post_1">
                                    <a href="/post/{{ $post->slug }}">
                                        <div class="single_post_img">
                                            <img src="{{ asset('storage/'.$post->image) }}" alt="">
                                        </div>
                                        <div class="single_post_text text-center">
                                            {{-- <a href="category.html">
                                                <h5> {{ $post->title }}</h5>
                                            </a> --}}
                                            
                                                <h2>{{ $post->title }}</h2>
                                            
                                            <p>{{ $post->excerpt }}</p>
                                            <p>{{ $post->created_at->diffForHumans() }}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="page_pageniation">
                    <nav aria-label="Page navigation example">
                        {{-- <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul> --}}
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                @include('partials.sidebar_widget',['categories' => $categories])
            </div>
        </div>
    </div>
</section>
<section class="social_connect_part">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="social_connect">
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="img/insta/instagram_1.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="img/insta/instagram_2.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="img/insta/instagram_3.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="img/insta/instagram_4.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="img/insta/instagram_5.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="img/insta/instagram_6.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
