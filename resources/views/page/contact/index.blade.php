@extends('page.layouts.page')
@section('title', 'Liên hệ')
@section('style')
@stop
@section('seo')
@stop
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('/page/images/bg_1.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('page.home') }}">Trang chủ <i class="fa fa-chevron-right"></i></a></span> <span>Liên hệ <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Liên hệ</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb contact-section mb-4">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <h3 class="mb-2">Địa chỉ</h3>
                        <p> 123 Nhổn, Cầu Giấy, Hà Nội</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <h3 class="mb-2">Số điện thoại liên hệ</h3>
                        <p><a href="tel://1234567920">1234567890</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-paper-plane"></span>
                        </div>
                        <h3 class="mb-2">Địa chỉ email</h3>
                        <p><a href="mailto:info@yoursite.com">admin@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-fw fa-facebook-f"></span>
                        </div>
                        <h3 class="mb-2">Website</h3>
                        <p><a href="#"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section contact-section ftco-no-pt">
        <div class="container">
            <div class="row block-9">
                <div class="col-md-12 order-md-last d-flex">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.4736632130252!2d105.73253187443527!3d21.05373598692186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345457e292d5bf%3A0x20ac91c94d74439a!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2hp4buHcCBIw6AgTuG7mWk!5e0!3m2!1svi!2sus!4v1684852313308!5m2!1svi!2sus"width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-intro ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="img" style="background-image: url({{ asset('page/images/bg_2.jpg') }});">
                        <div class="overlay"></div>
                        <h2>Chào mừng bạn đến với Fun Travel</h2>
                        <p>Chúng tôi sẽ đem đến trãi nghiệm các tour du lịch tốt nhất dành cho bạn</p>
                        <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Liên hệ qua Messager của chúng tôi</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('script')
@stop
