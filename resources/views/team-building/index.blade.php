@extends('layout-client.layout')

@section('title', 'Team building')



@section('content')
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
                        <p>Lorem Ipsum is simply dummy text  Lorem Ipsum has
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
                        <p>Lorem Ipsum iy. Lorem Ipsum has
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
    <div id="gallery" class="gallery-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Team Building</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                </div>
            </div>
            {{-- // --}}
            <div class="row">
                <ul class="popup-gallery clearfix">
                    <li>
                        <a href="http://localhost/Project/project-wedding/public/uploads/personal/son-ong-pham-.jpg">
                            <img class="img-fluid" src="http://localhost/Project/project-wedding/public/uploads/personal/son-ong-pham-.jpg"
                                alt="single image">
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('theme-client/images/gallery-02.jpg') }}">
                            <img class="img-fluid" src="http://localhost/Project/project-wedding/public/uploads/personal/son-ong-pham-.jpg"
                                alt="single image">
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('theme-client/images/gallery-03.jpg') }}">
                            <img class="img-fluid" src="http://localhost/Project/project-wedding/public/uploads/personal/son-ong-pham-.jpg"
                                alt="single image">
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('theme-client/images/gallery-04.jpg') }}">
                            <img class="img-fluid" src="http://localhost/Project/project-wedding/public/uploads/personal/son-ong-pham-.jpg"
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
