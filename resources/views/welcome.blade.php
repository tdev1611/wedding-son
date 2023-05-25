@extends('layout-client.layout')
@section('title', 'Studio Diễm My')

@section('content')
    <style>
        #record {}
    </style>
    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" data-transition="zipReveal" data-duration="1500"
                        style="background-image:url({{ asset('theme-client/images/slider-01.jpg') }});">
                        <div class="lbox-caption">
                            <div class="lbox-details">
                                <h1>#Duchai & #B</h1>
                                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, culpa.</h3>
                                    <p>Lưu giữ kỹ niệm <strong>Ngày/Tháng/Năm</strong></p>
                                    <a href="#contact" class="btn ">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1500"
                        style="background-image:url({{ asset('theme-client/images/slider-02.jpg') }});">
                        <div class="lbox-caption">
                            <div class="lbox-details">
                                <h1>#C & #D</h1>
                                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, culpa.</h3>
                                    <p>Lưu giữ kỹ niệm <strong>Ngày/Tháng/Năm</strong></p>
                                    <a href="#contact" class="btn ">Contact</a>
                                    <p><small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo,
                                            aliquam?</small></p>
                            </div>
                        </div>
                    </div>

                </div><!-- .pogoSlider -->
            </div>
        </div>
    </div>

    <!-- Start About us -->
    <div id="about" class="about-box">
        <div class="about-a1">
            <div class="container">
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
                                        <h2> About <span>{{ $item->name }}</span></h2>
                                        <p>{{ $item->desc }}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="about-img">
                                            <img class="img-fluid rounded" src="{{ url($item->images) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="row align-items-center about-main-info">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="about-img">
                                            <img class="img-fluid rounded" src="{{ url($item->images) }}" alt="" />
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
    </div>


    {{-- gallaery --}}
    <div id="gallery" class="gallery-box">
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
    </div>
    <!-- End Gallery -->
@endsection
