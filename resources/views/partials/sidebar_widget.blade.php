<div class="sidebar_widget">
    <div class="single_sidebar_wiget search_form_widget">
        <form action="#">
            <div class="form-group">
                <input type="text" class="form-control" placeholder='Search Keyword' onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Search Keyword'" data-cf-modified-2311f11fc50d0ccb8924d0f9-="">
                <div class="btn_1">search</div>
            </div>
        </form>
    </div>
    <div class="single_sidebar_wiget">
        <div class="sidebar_tittle">
            <h3>Categories</h3>
        </div>
        <div class="single_catagory_item category">
            <ul class="list-unstyled">
                @foreach ($categories as $category)
                    <li><a href="category.html">{{ $category->name }}</a> <span>({{ $category->post_count }})</span> </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="single_sidebar_wiget">
        <div class="sidebar_tittle">
            <h3>Popular Feeds</h3>
        </div>
        @foreach ($post_random as $post)
            <div class="single_catagory_post post_2 ">
                <div class="category_post_img">
                <img src=" {{ asset('storage/'.$post->image) }}" width="300" height="143" style="object-fit: cover;" alt="">
                </div>
                <div class="post_text_1 pr_30">
                    <a href="single-blog.html">
                        <h3>{{ $post->title }}</h3>
                    </a>
                    <p>{{ $post->excerpt }}</p>
                    <p>{{ $post->created_at->diffForHumans() }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="single_sidebar_wiget">
        <div class="sidebar_tittle">
            <h3>Share this post</h3>
        </div>
        <div class="social_share_icon tags">
            <ul class="list-unstyled">
                <li><a href="#"><i class="ti-facebook"></i></a></li>
                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                <li><a href="#"><i class="ti-pinterest"></i></a></li>
                <li><a href="#"><i class="ti-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>