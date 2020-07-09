@extends('layouts.app')
@section('content')
<section class="breadcrumb breadcrumb_bg align-items-center" style="background-image: url({{ asset('img/banner_detail.jpg') }})">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-sm-6">
                <div class="breadcrumb_tittle text-left">
                    <h2>Bài viết</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="breadcrumb_content text-right" >
                    <p><a href="/" style="color:#FFF;">Home</a><span>/</span>Tìm kiếm</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="all_post section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @if ($posts->count() == 0)
                        <div class="col-12">
                            <h1>không tìm thấy kết quả nào phù hợp ...</h1>
                        </div>
                    @else 
                        @foreach ($posts as $key => $post)
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
                        @endforeach
                    @endif
                    
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
                        @if ($posts->lastPage() > 1)
                            <ul class="pagination justify-content-center">
                                <li class="{{ ($posts->currentPage() == 1) ? ' disabled' : '' }} page-item">
                                    <a class="page-link" href="{{ $posts->url(1) }}">Previous</a>
                                </li>
                                @for ($i = 1; $i <= $posts->lastPage(); $i++)
                                    <li class="{{ ($posts->currentPage() == $i) ? ' active' : '' }} page-item">
                                        <a class="page-link" href="{{ $posts->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="{{ ($posts->currentPage() == $posts->lastPage()) ? ' disabled' : '' }} page-item">
                                    <a class="page-link" href="{{ $posts->url($posts->currentPage()+1) }}" >Next</a>
                                </li>
                            </ul>
                            @endif
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                @include('partials.sidebar_widget',['categories' => $categories])
            </div>
        </div>
    </div>
</section>
@endsection