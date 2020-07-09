@extends('layouts.app')
@push('meta')
    <meta property="og:url"                content="{{ URL::to('/post/'.$post->slug) }}" />
    <meta property="og:title"              content="{{ $post->title }}" />
    <meta property="og:description"        content="{{ $post->excerpt }}" />
    <meta property="og:image"              content="{{ asset('storage/'.$post->image) }}" />
@endpush
@section('content')
<section class="breadcrumb breadcrumb_bg align-items-center" style="background-image: url({{ asset('img/banner_detail.jpg') }})">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-sm-6">
                <div class="breadcrumb_tittle text-left">
                    <h2>Chi tiết bài viết</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="breadcrumb_content text-right" >
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
                            <li><a href="#"><i class="far fa-comments"></i> {{ date_format($post->created_at,'d/m/Y H:i:s') }} </a></li>
                        </ul>
                        {!! $post->body !!}
                    </div>
                </div>
                <div class="comments-area">
                    <h4>{{ $post->comments_count }} bình luận</h4>
                    @foreach ($post->comments as $cmt)
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="{{ asset('img/comment/sad.jpg') }}" alt="">
                                    </div>
                                    <div class="desc">
                                        <p class="comment">{{ $cmt->content }}</p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a><b style="color:black;">{{ $cmt->name }}</b></a>
                                                </h5>
                                                <p class="date">{{ $cmt->created_at->diffForHumans() }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="comment-form">
                    <h4>Bình luận</h4>
                    <form class="form-contact comment_form" action="{{ route('create_comment') }}" id="commentForm" method="POST">
                        @csrf
                        <input type="hidden" name="slug" value="{{ $post->slug }}">
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea required class="form-control w-100" name="content" id="comment" cols="30" rows="9" placeholder="Nội dung bình luận ..."></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input required class="form-control" name="name" id="name" type="text" placeholder="Tên">
                                </div>
                            </div>
                        </div>
                        <div class="load_btn">
                            <button type="submit" style="border:0;outline: none;border-color:unset;background-color: unset;padding:0;"> <a class="btn_1">G?i</a></button>
                            
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
