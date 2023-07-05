@extends('user.layout.app')

@section('seo')
    <title>Hekto Store</title>
@endsection

@section('content')
    <div class="mt-5 py-2 slider">
        <div id="carouselExampleDark" class="carousel carousel-dark slide mt-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class='home-banner'>
                        <div class="container d-flex">
                            <div class='home-left'>
                                <div>
                                    <img width="200" src="{{ asset('assets/images/light-slide.svg') }}" alt="light" />
                                </div>
                                <div>
                                    <p>Best Furniture For Your Castle...</p>
                                    <h1>New Furniture Collection Trend in 2020</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry... </p>
                                    <button class='button' style="width: 170px">
                                        Shop now
                                    </button>
                                </div>
                            </div>
                            <div class='home-right'>
                                <div>
                                    <img width="350" alt='sofa' src="{{ asset('assets/images/sofa-slide.svg') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="home-banner">
                        <div class="container d-flex">
                            <div class="w-50">
                                <img width="350" src="{{ asset('assets/images/sofa-slide2.svg') }}" alt="Sofa">
                            </div>
                            <div>
                                <h2>Unique Features Of leatest & Trending Poducts</h2>
                                <div>
                                    <div class="title">
                                        <img width="13"
                                            src="/static/media/Ellipse41.899bb24a3a852fdcfe56ee99aafdb1b7.svg"
                                            alt="">
                                        <p>All frames constructed with hardwood solids and laminates</p>
                                    </div>
                                    <div class="title">
                                        <img width="13"
                                            src="/static/media/Ellipse42.e50d14306c275d023bab3430c88896b7.svg"
                                            alt="">
                                        <p>Reinforced with double wood dowels, glue, screw - nails corner blocks and machine
                                            nails</p>
                                    </div>
                                    <div class="title">
                                        <img width="13"
                                            src="/static/media/Ellipse43.f6d987918f77b0124323bf67018adb82.svg"
                                            alt="">
                                        <p>Arms, backs and seats are structurally reinforced</p>
                                    </div>
                                </div>
                                <button class="button">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="home-banner home-backgroundImg">
                        <div class="container ">
                            <div>
                                <h1>Get Leatest Update By Subscribe 0ur Newslater Shop Now</h1>
                                <button class="button">Shop Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
@endsection
