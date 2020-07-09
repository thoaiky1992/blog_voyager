@extends('layouts.app')
@section('content')
<section class="breadcrumb breadcrumb_bg align-items-center">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-sm-6">
                <div class="breadcrumb_tittle text-left">
                    <h2>Liên Hệ</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="breadcrumb_content text-right">
                    <p><a href="/" style="color: #FFF;">Home</a><span>/</span>Liên hệ</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-section section_padding" style="padding-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Liên hệ</h2>
            </div>
            @if (session('success'))
                <div class="col-12" id="alert-contact">
                    <span style="width: 100%;height: 60px;padding: 20px;background-color: #fc4600;display: block; margin-bottom: 20px;color:#FFF;transition: 0.5s">
                        {{ session('success') }}
                    </span>
                </div>
            @endif
            <script>
                window.onload = function(){
                    let div_alert = document.querySelector('#alert-contact');
                    setTimeout(() => {
                        div_alert.style.display = 'none';
                    }, 3000);
                }
            </script>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{ route('create_contact') }}" method="post" method="POST" id="contactForm" novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea required class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder='Nhập nội dung ...' data-cf-modified-379502d86628d2c93034bfe9-=""></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input required class="form-control" name="name" id="name" type="text"  placeholder='Tên' data-cf-modified-379502d86628d2c93034bfe9-="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input required class="form-control" name="email" id="email" type="email"  placeholder='Email' data-cf-modified-379502d86628d2c93034bfe9-="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input required class="form-control" name="subject" id="subject" type="text"  placeholder='Tiêu đề' data-cf-modified-379502d86628d2c93034bfe9-="">
                            </div>
                        </div>
                    </div>
                    <div class="load_btn">
                        <button type="submit" style="border:0;outline: none;border-color:unset;background-color: unset;padding:0;"><a class="btn_1">Gửi </a></button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Trung chánh , nguyễn ảnh thủ , Hóc môn</h3>
                        <p>TP.HCM</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>077 769 4436</h3>
                        <p>thứ 2 đến thứ 7 từ 9h to 18h</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3><a class="__cf_email__" data-cfemail="43303633332c313703202c2f2c312f2a216d202c2e">[thoaiky1992@gmail.com]</a></h3>
                        <p>Gửi mail cho tôi bất cứ lúc nào !</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection