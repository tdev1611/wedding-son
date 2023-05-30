@extends('layout-client.layout')
@section('title', 'Studio Diễm My')

@section('content')

    <style>
        /* #about {
            border-bottom: 1px solid gray;
            width: 85%;
            margin: 0px auto
        } */
        .border_bottom {
            border-bottom: 1px solid gray;
            width: 85%;
            margin: 0px auto
        }
        .about-img {
            cursor: pointer;
        }

        .desc_bottom {
            position: relative;
            top: 80px;
            text-align: end;
        }



        .container-images {
            position: relative;
            display: inline-block;
            overflow: hidden;

        }

        .container-images::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .container-images:hover::before {
            cursor: pointer;
            opacity: 1;

        }

        .container-images img {
            cursor: pointer;
            display: block;
            transition: transform 0.3s, filter 0.3s;
        }

        .container-images:hover img {
            cursor: pointer;
            transform: scale(1.1);
            filter: brightness(70%);
            border: 11px solid teal;
        }

        /*  */
        .service {
            flex: 0 0 100%;
            max-width: 100%;
        }

        @media (min-width: 768px) {
            .service {
                flex: 0 0 50%;
                max-width: 33%;
            }
        }

        .container-images {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .container-images img {
            display: block;
            width: 100%;
            height: auto;
            transition: transform 0.3s, filter 0.3s;
        }

        .container-images:hover img {
            transform: scale(1.1);
            filter: brightness(70%);
        }

        .hel_bottom_title {
            position: absolute;
            top: 66%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            padding: 10px;
            /* background-color: rgba(0, 0, 0, 0.7); */
            color: #fff;
            width: 80%;
        }

        .hel_bottom_title h3 {
            font-size: 21px;
        }

        .hel_bottom_title p {
            font-size: 14px;
            line-height: 1.4;
            margin-top: 5px;
            font-style: oblique;
        }

        .title-service {
            color: #fff;
        }
    </style>
    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" data-transition="zipReveal" data-duration="1500"
                        style="background-image:url(http://localhost/Project/project-wedding/public/uploads/personal/son-ong-pham-.jpg)">
                        <div class="lbox-caption">
                            <div class="lbox-details">
                                <h1># Lorem, ipsum dolor.</h1>
                                <h2>Lorem ipsum, dolo r quisq nesciunt rem sit consequatur laboriosam sapiente, voluptatum
                                    ab unde culpa?</h3>
                                    <p>Save The Date <strong>20 June ...</strong></p>
                                    <a href="#" class="btn ">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1500"
                        style="background-image:url(http://localhost/Project/project-wedding/public/uploads/personal/son-ong-pham-.jpg)">
                        <div class="lbox-caption">
                            <div class="lbox-details">
                                <h1># Lorem, ipsum dolor.</h1>
                                <h2>Lorem ipsun quam provident labore ab unde culpa?</h3>
                                    <p>Save The Date <strong>20 June ...</strong></p>
                                    <a href="#" class="btn ">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" data-transition="shrinkReveal" data-duration="2000"
                        style="background-image:url({{ asset('theme-client/images/slider-03.jpg') }});">
                        <div class="lbox-caption">
                            <div class="lbox-details">
                                <h1>#Leida & #Dominic</h1>
                                <h2>We're getting married</h3>
                                    <p>Save The Date <strong>20 June ...</strong></p>
                                    <a href="#" class="btn">Contact</a>
                            </div>
                        </div>

                    </div>
                </div><!-- .pogoSlider -->

            </div>
        </div>
    </div>

    <!-- end us -->

    <!-- Start About us -->

    <div id="about" class="about-box border_bottom">
        <div class="about-a1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center"
                            style="margin-top: -25px;margin-bottom:42px; font:700 50px/50px uvn_bai_sau_nheregular, Arial;">
                            Dịch vụ của studio</h2>
                    </div>

                    <div class="col-lg-4 service col-sm-6" style="margin-bottom: 10px">
                        <div class="container-images">
                            <img class="img-fluid rounded"
                                src="http://localhost/Project/project-wedding/public/uploads/personal/tronny-deng-.png"
                                alt="">
                        </div>
                        <div class="hel_bottom_title">
                            <h3 class="title-service">Cho thuê studio quay phim</h3>
                            <p class="d-none d-sm-block">Click mở Báo giá thuê studio quay phim tại Tròn studio Lorem ipsum
                                dolor sit amet

                                laboriosam velit.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 service col-sm-6" style="margin-bottom: 10px">
                        <div class="container-images">
                            <img class="img-fluid rounded"
                                src="http://localhost/Project/project-wedding/public/uploads/personal/tronny-deng-.png"
                                alt="">
                        </div>
                        <div class="hel_bottom_title">
                            <h3 class="title-service">Chụp ảnh Tết</h3>
                            <p class="d-none d-sm-block">Click mở Báo giá thuê studio quay phim tại Tròn studio Lorem ipsum
                                dolor sit amet
                                consectetur, adipisicing
                                laboriosam velit.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 service col-sm-6" style="margin-bottom: 10px">
                        <div class="container-images">
                            <img class="img-fluid rounded"
                                src="http://localhost/Project/project-wedding/public/uploads/personal/tronny-deng-.png"
                                alt="">
                        </div>
                        <div class="hel_bottom_title">
                            <h3 class="title-service">Kỷ yếu</h3>
                            <p class="d-none d-sm-block">Click mở Báo giá thuê studio quay phim tại Tròn studio Lorem ipsum
                                dolor sit amet

                                laboriosam velit.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <p class="desc_bottom">Lorem Delectus, consequatur? HẢI NAME</p>
    </div>
    {{--  --}}
    <section class="section-padding mt-3 ">
        <div class="container-fluid border_bottom">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="post-grid mb-5 ">
                                <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                    <img src="http://localhost/Project/revolve-1.0.0/images/news/news-1.jpg" alt=""
                                        class="img-fluid w-100">
                                </a>

                                <div class="post-content-grid">
                                    <div class="label-date">
                                        <span class="day">15</span>
                                        <span class="month text-uppercase">apr</span>
                                    </div>
                                    <span
                                        class="cat-name text-color font-extra font-sm text-uppercase letter-spacing">Travel</span>
                                    <h3 class="post-title mt-1"><a href="blog-single.html">The best soft chocolate chip
                                            cookies</a></h3>
                                    <p>Lorem ipsum dolor sitamet consectetu ocilng elit. Donec eros aseb dui, suscipit
                                        ex uti commodo dignis justo acas turpis egestas. Nullam et cursus</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="post-grid mb-5">
                                <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                    <img src="http://localhost/Project/revolve-1.0.0/images/news/news-1.jpg" alt=""
                                        class="img-fluid w-100">
                                </a>
                                <div class="post-content-grid">
                                    <div class="label-date">
                                        <span class="day">02</span>
                                        <span class="month text-uppercase">Jan</span>
                                    </div>
                                    <span
                                        class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">lifestyle</span>
                                    <h3 class="post-title mt-1"><a href="blog-single.html">A Simple Way to Feel Like
                                            Home</a></h3>
                                    <p>Lorem ipsum dolor sitamet consectetu ocilng elit. Donec eros aseb dui, suscipit
                                        ex uti commodo dignis justo acas turpis egestas. Nullam et cursus</p>

                                </div>

                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="post-grid mb-5">
                                <a class="post-thumb mb-4 d-block" href="blog-single.html">
                                    <img src="http://localhost/Project/revolve-1.0.0/images/news/news-3.jpg"
                                        alt="" class="img-fluid w-100">
                                </a>
                                <div class="post-content-grid">
                                    <div class="label-date">
                                        <span class="day">20</span>
                                        <span class="month text-uppercase">sep</span>
                                    </div>
                                    <span
                                        class=" cat-name text-color font-sm font-extra text-uppercase letter-spacing">weekends</span>
                                    <h3 class="post-title mt-1"><a href="blog-single.html">5 tips to plan your
                                            weekends</a></h3>
                                    <p>Lorem ipsum dolor sitamet consectetu ocilng elit. Donec eros aseb dui, suscipit
                                        ex uti commodo dignis justo acas turpis egestas. Nullam et cursus</p>
                                </div>

                            </article>
                        </div>



                    </div>
                </div>


            </div>
        </div>

        <!-- Start Events -->
        <div id="events" class="events-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2 style="font-family: 'FontAwesome'">BLOG SỰ KIỆN</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="event-inner">
                            <div class="event-img">
                                <img class="img-fluid" src="{{ asset('theme-client/images/event-img-01.jpg') }}"
                                    alt="" />
                            </div>
                            <h2>2 June 2018 Engagement</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard </p>
                            <a href="#">Xem chi tiết ></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="event-inner">
                            <div class="event-img">
                                <img class="img-fluid" src="{{ asset('theme-client/images/event-img-02.jpg') }}"
                                    alt="" />
                            </div>
                            <h2>3 June 2018 Main Ceremony </h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard </p>
                            <a href="#">Xem chi tiết ></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="event-inner">
                            <div class="event-img">
                                <img class="img-fluid" src="{{ asset('theme-client/images/event-img-03.jpg') }}"
                                    alt="" />
                            </div>
                            <h2>4 June 2018 Wedding party </h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard </p>
                            <a href="#">Xem chi tiết ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Events -->
        <div id="about" class="about-box ">
            <div class="about-a1 ">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-box">
                                <h2>Studio Diễm My <span>&</span> ...</h2>
                            </div>
                        </div>
                    </div>
                    {{-- /perrsonal --}}
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            @foreach ($personal as $index => $item)
                                @if ($index % 2 == 0)
                                    <div class="row align-items-center about-main-info" id="record">
                                        <div class="col-lg-8 col-md-6 col-sm-12">
                                            <h2> About <span style="color: black; font-size:3rem">{{ $item->name }}</span></h2>
                                            <p>{{ $item->desc }}</p>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="about-img" style="border: 3px solid rgb(79, 57, 28);">
                                                <img class="img-fluid rounded" src="{{ url($item->images) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="row align-items-center about-main-info">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="about-img">
                                                <img class="img-fluid rounded" src="{{ url($item->images) }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-6 col-sm-12">
                                            <h2 style="font-family: initial;"> About <span>{{ $item->name }}</span></h2>
                                            <p>{{ $item->desc }}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
    
    
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="border_bottom">
                <p class="desc_bottom ">Lorem Delectus, consequatur? HẢI NAME</p>
            </div> --}}
        </div>
    </section>


    {{--  --}}
    {{-- gallaery --}}
    {{-- <div id="gallery" class="gallery-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2 style="font-family: fantasy;">Ảnh Cưới tại studio</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="popup-gallery clearfix">
                    <li>
                        <a href="{{ asset('theme-client/images/gallery-01.jpg') }}">
                            <img class="img-fluid" src="{{ asset('theme-client/images/gallery-01.jpg') }}"
                                alt="single image">
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('theme-client/images/gallery-02.jpg') }}">
                            <img class="img-fluid" src="{{ asset('theme-client/images/gallery-02.jpg') }}"
                                alt="single image">
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('theme-client/images/gallery-03.jpg') }}">
                            <img class="img-fluid" src="{{ asset('theme-client/images/gallery-03.jpg') }}"
                                alt="single image">
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('theme-client/images/gallery-04.jpg') }}">
                            <img class="img-fluid" src="{{ asset('theme-client/images/gallery-04.jpg') }}"
                                alt="single image">
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('theme-client/images/gallery-05.jpg') }}">
                            <img class="img-fluid" src="{{ asset('theme-client/images/gallery-05.jpg') }}"
                                alt="single image">
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('theme-client/images/gallery-06.jpg') }}">
                            <img class="img-fluid" src="{{ asset('theme-client/images/gallery-06.jpg') }}"
                                alt="single image">
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('theme-client/images/gallery-07.jpg') }}">
                            <img class="img-fluid" src="{{ asset('theme-client/images/gallery-07.jpg') }}"
                                alt="single image">
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('theme-client/images/gallery-08.jpg') }}">
                            <img class="img-fluid" src="{{ asset('theme-client/images/gallery-08.jpg') }}"
                                alt="single image">
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div> --}}
    <!-- End Gallery -->
@endsection
