<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>@yield('title') </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    {{-- {{ url('public/theme-client/') }} --}}
    <!-- Site Icons -->
    {{-- img thum web --}}
    <link rel="shortcut icon" href="{{ url('public/theme-client/images/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ url('public/theme-client/images/apple-touch-icon.png') }}">



    <link rel="stylesheet" href="{{ asset('theme-client/css/bootstrap.min.css') }}">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{ asset('theme-client/css/pogo-slider.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('theme-client/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('theme-client/css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('theme-client/css/custom.css') }}">


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="preloader pulse">
            <i class="fa fa-heartbeat" aria-hidden="true"></i>
        </div>
    </div><!-- end loader -->
    <!-- END LOADER -->
    {{-- https://scontent.fthd1-1.fna.fbcdn.net/v/t1.6435-9/121971138_1659352534225361_1079750085293412818_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=sVqU31wcojMAX-LhR9h&_nc_ht=scontent.fthd1-1.fna&oh=00_AfDbmCdRRXs_k62ABk0AZPZlXYwqCuT3dAso4BLerxL5xw&oe=64959A73 --}}
    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('homes') }}"><img src="{{ url('public/theme-client/images/logo.jpg') }}"
                        alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
                    aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="{{ route('homes') }}">Trang chủ</a></li>
                        {{-- <li><a class="nav-link" href="#about">Thông tin về Studio</a></li> --}}
                        <li><a class="nav-link" href="{{ route('story.index') }}">Thông tin Studio</a></li>
                        {{-- story.index --}}
                        {{-- <li><a class="nav-link" href="#family">Family</a></li> --}}
                        <li><a class="nav-link" href="{{ route('tbuilding.index') }}">Team building</a></li>
                        <li><a class="nav-link" href="#events">Sự kiện</a>
                        </li>
                        <li><a class="nav-link" href="#contact">Nhận báo giá</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    @yield('content')

    <!-- Start Events -->
    <div id="events" class="events-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2 style="font-family: 'FontAwesome'" >SỰ KIỆN</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="event-inner">
                        <div class="event-img">
                            <img class="img-fluid" src="{{ asset('theme-client/images/event-img-01.jpg') }}" alt="" />
                        </div>
                        <h2>2 June 2018 Engagement</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard </p>
                        <a href="#">Xem  chi tiết ></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="event-inner">
                        <div class="event-img">
                            <img class="img-fluid" src="{{ asset('theme-client/images/event-img-02.jpg') }}" alt="" />
                        </div>
                        <h2>3 June 2018 Main Ceremony </h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard </p>
                        <a href="#">Xem  chi tiết ></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="event-inner">
                        <div class="event-img">
                            <img class="img-fluid" src="{{ asset('theme-client/images/event-img-03.jpg') }}" alt="" />
                        </div>
                        <h2>4 June 2018 Wedding party </h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard </p>
                        <a href="#">Xem  chi tiết ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Events -->

    <!-- Start Contact -->
    <div id="contact" class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Contact wth Studio</h2>
                        <p>Điền thông tin của bạn xuống mẫu bên dưới </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="contact-block">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Tên của bạn" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Số điện thoại" id="phone"
                                            class="form-control" name="phone" required
                                            data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email liên hệ" id="email"
                                            class="form-control" name="name" required
                                            data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="custom-select d-block form-control" id="event" required
                                            data-error="Please select an item in the list.">
                                            <option disabled selected>Chọn kiểu chụp</option>
                                            <option value="1">Sự kiện</option>
                                            <option value="2">Ảnh cưới</option>
                                            <option value="3">Gala dinner </option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Ghi chú" rows="8"
                                            data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn btn-common" id="submit" type="submit">Gửi thông tin</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="footer-company-name"> 2023 Design By : <a target="_blank"
                            href="https://www.facebook.com/BugCreatordmBug/">Tdev1986</a> - Studio Diễm My : <a
                            href="https://www.facebook.com/son.phamong">Phạm Ông Sơn</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    {{-- {{ url('public/theme-client/') }} --}}

    <!-- ALL JS FILES -->
    <script src="{{ url('public/theme-client/js/popper.min.js') }}"></script>
    <script src="{{ url('public/theme-client/js/jquery.min.js') }}"></script>
    <script src="{{ url('public/theme-client/js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ url('public/theme-client/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('public/theme-client/js/jquery.pogo-slider.min.js') }}"></script>
    <script src="{{ url('public/theme-client/js/slider-index.js') }}"></script>
    <script src="{{ url('public/theme-client/js/smoothscroll.js') }}"></script>
    {{-- <script src="{{ url('public/theme-client/js/form-validator.min.js') }}"></script> --}}
    <script src="{{ url('public/theme-client/js/contact-form-script.js') }}"></script>
    <script src="{{ url('public/theme-client/js/custom.js') }}"></script>
</body>

</html>
