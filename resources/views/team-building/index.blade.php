@extends('layout-client.layout')

@section('title', 'Team building')



@section('content')
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
