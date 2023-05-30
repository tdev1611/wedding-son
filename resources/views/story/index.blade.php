 @extends('layout-client.layout')

 @section('title', 'Story')

 <!-- Start Story -->

 @section('content')
     <style>
         .title-box #our-info {
             background: gray;
             font-size: 55px;
             font-family: fantasy;
             color: #222222;
             padding: 10px;
             display: inline-block;
         }

         .story-desc {
             font-size: 22px;
             margin-top: 12px;

         }

         .website-story {
             border-bottom: 2px solid;
         }

         .website-story:hover {
             border-bottom: 3px solid;
             color: burlywood;
             font-size: 18px
         }
         .desc_bottom {
            position: relative;
            top: 80px;
            text-align: end;
        }
     </style>
     <div id="story" class="story-box main-timeline-box">
         <div class="container">

             <div class="row">
                 <div class="col-lg-12">


                 </div>
                 <div class="col-lg-12">
                     <div class="title-box">
                         <h2 id="our-info">Thông tin về chúng tôi!</h2>
                         <p class="story-desc">Diễm My studio cung cấp các dịch vụ chụp ảnh sản phẩm, chụp ảnh thời cưới,
                             chụp ảnh áo dài, chụp
                             ảnh kỷ yếu, chụp ảnh doanh nghiệp...
                         </p>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                     </div>


                 </div>
             </div>
             <div class="row timeline-element separline">
                 <div class="timeline-date-panel col-xs-12 col-md-6  align-left">
                     <div class="time-line-date-content">
                         <p class="mbr-timeline-date mbr-fonts-style display-font ">
                             Studio Diễm My
                         </p>
                     </div>
                 </div>
                 <span class="iconBackground"></span>
                 <div class="col-xs-12 col-md-6 align-left">
                     <div class="timeline-text-content">
                         <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">Ảnh ... Lorem ipsum dolor sit amet
                             consectetur adipisicing elit. Temporibus, officia?</h4>
                         <p class="mbr-timeline-text mbr-fonts-style display-7">
                             <a href="http://localhost/Project/project-wedding"> <span
                                     class="website-story">Diemmystudio.com</span></a>
                         </p>
                     </div>
                 </div>
             </div>
             <div class="row timeline-element reverse separline">
                 <div class="timeline-date-panel col-xs-12 col-md-6  align-left">
                     <div class="time-line-date-content">
                         <p class="mbr-timeline-date mbr-fonts-style display-font">
                             𝐇𝐨𝐭𝐥𝐢𝐧𝐞
                         </p>
                     </div>
                 </div>
                 <span class="iconBackground"></span>
                 <div class="col-xs-12 col-md-6 align-right">
                     <div class="timeline-text-content">
                         <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font text-center"
                             style="font-family:fantasy"><a target="_blank" href="https://www.facebook.com/son.phamong">Phạm
                                 Ông Sơn</a></h4>
                         <p class="mbr-timeline-text mbr-fonts-style display-7">
                             0123456677 - 01234567689
                         </p>
                     </div>
                 </div>
             </div>
             <div class="row timeline-element separline">
                 <div class="timeline-date-panel col-xs-12 col-md-6  align-left">
                     <div class="time-line-date-content">
                         <p class="mbr-timeline-date mbr-fonts-style display-font" style="font-family: monospace">
                             Address
                         </p>
                     </div>
                 </div>
                 <span class="iconBackground"></span>
                 <div class="col-xs-12 col-md-6 align-left">
                     <div class="timeline-text-content">
                         <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">Thanh Hóa</h4>
                         <p class="mbr-timeline-text mbr-fonts-style display-7">
                             20-Lorem, ipsum dolor - Lorem, ipsum.
                         </p>
                     </div>
                 </div>
             </div>
             <div class="row timeline-element reverse separline">
                 <div class="timeline-date-panel col-xs-12 col-md-6  align-left">
                     <div class="time-line-date-content">
                         <p class="mbr-timeline-date mbr-fonts-style display-font">
                             Thông tin khác
                         </p>
                     </div>
                 </div>
                 <span class="iconBackground"></span>
                 <div class="col-xs-12 col-md-6 align-right">
                     <div class="timeline-text-content">
                         <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">Facebook-gmail</h4>
                         <p class="mbr-timeline-text mbr-fonts-style display-7">
                             aaaa ---- aagmail
                         </p>
                     </div>
                 </div>
             </div>

         </div>
     </div>
     {{--  --}}
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
                                         <div class="about-img" style="border: 3px solid rgb(79, 57, 28);">
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
         <p class="desc_bottom">Lorem Delectus, consequatur? HẢI NAME</p>
     </div>
 @endsection
