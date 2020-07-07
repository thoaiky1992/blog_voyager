@extends('layouts.app')
@push('meta')
    <meta property="og:url"                content="{{ URL::to('/post/'.$post->slug) }}" />
    <meta property="og:title"              content="{{ $post->title }}" />
    <meta property="og:description"        content="{{ $post->excerpt }}" />
    <meta property="og:image"              content="{{ asset('storage/'.$post->image) }}" />
@endpush
@section('content')
<section class="breadcrumb breadcrumb_bg align-items-center">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-sm-6">
                <div class="breadcrumb_tittle text-left">
                    <h2>Chi tiết bài viết</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="breadcrumb_content text-right">
                    <p><a href="/" style="color:#FFF;">Home</a><span>/</span>Chi tiết</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog_area single-post-area all_post section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{ asset('storage/'.$post->image) }}" style="height:400px; width:100%;object-fit: cover;" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>{{ $post->title }}</h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="far fa-user"></i>Kỳ Smile</a></li>
                            <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                        </ul>
                        {!! $post->body !!}
                    </div>
                </div>
                <div class="comments-area">
                    <h4>05 Comments</h4>
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/comment/comment_1.png" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                        Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Emilly Blunt</a>
                                            </h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="comment-form">
                    <h4>Bình luận</h4>
                    <form class="form-contact comment_form" action="#" id="commentForm">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea required class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Nội dung bình luận ..."></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input required class="form-control" name="name" id="name" type="text" placeholder="Tên">
                                </div>
                            </div>
                        </div>
                        <div class="load_btn">
                            <button style="border:0;outline: none;border-color:unset;background-color: unset;padding:0;"> <a class="btn_1">SUBMIT </a></button>
                            
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                @include('partials.sidebar_widget',['categories' => $categories])
            </div>
        </div>
    </div>
</section>
@endsection
