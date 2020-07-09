<header class="main_menu" id="menu-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="/"> <img src="{{ asset('img/logo.png') }}" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse main-menu-item justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            {{ menu('main','partials.main_menu') }}

                            {{-- <li class="nav-item active">
                                <a class="nav-link" href="index-2.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="archive.html">Archive</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="category.html"> Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                    <a class="dropdown-item" href="elements.html">elements</a>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="header_social_icon d-none d-lg-block">
                        <ul>
                            <li><a href="https://www.facebook.com/ky.smile.5/" target="_blank" class="d-none d-lg-block"><i class="ti-facebook"></i></a></li>
                            <li><a href="https://google.com" target="_blank" class="d-none d-lg-block"><i class="ti-google"></i></a></li>
                            <li><a class="d-none d-lg-block" target="_blank"><i class="ti-github"></i></a></li>
                            <li><a class="d-none d-lg-block" target="_blank"><i class="ti-skype"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>