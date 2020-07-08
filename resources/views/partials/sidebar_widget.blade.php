<div class="sidebar_widget">
    <div class="single_sidebar_wiget search_form_widget">
        <form action="{{ route('search_post') }}" method="GET" id="form_search">
            <div class="form-group">
                <input type="text" name="p" class="form-control" placeholder='tìm kiếm theo tiêu đề bài viết ...'  data-cf-modified-2311f11fc50d0ccb8924d0f9-="">
                <div class="btn_1" id="submit_search">Tìm kiếm</div>
            </div>
        </form>
    </div>
    <script>
        window.onload = function(){
            document.getElementById('submit_search').addEventListener('click',function(){
                let form_search = document.querySelector('#form_search');
                form_search.submit();
            })
        }
    </script>
    <div class="single_sidebar_wiget">
        <div class="sidebar_tittle">
            <h3>Categories</h3>
        </div>
        <div class="single_catagory_item category">
            <ul class="list-unstyled">
                @foreach ($categories as $category)
                    <li><a href="{{ URL::to('/the-loai/'.$category->slug) }}">{{ $category->name }}</a> <span>({{ $category->post_count }})</span> </li>
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
                    <a href="{{ URL::to('/post/'.$post->slug) }}">
                        <img src=" {{ asset('storage/'.$post->image) }}" width="300" height="143" style="object-fit: cover;" alt="">
                    </a>
                </div>
                <div class="post_text_1 pr_30">
                    <a href="{{ URL::to('/post/'.$post->slug) }}">
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
                <li><a href="https://www.facebook.com/ky.smile.5/" target="_blank"><i class="ti-facebook"></i></a></li>
                <li><a href="https://google.com"><i class="ti-google" target="_blank"></i></a></li>
                <li><a ><i class="ti-pinterest"></i></a></li>
                <li><a ><i class="ti-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>