 @extends('layout-client.layout')

 @section('title', 'Story')

 <!-- Start Story -->

 @section('content')
     <style>
         .title-box h2 {
             background: gray;
             font-size: 55px;
             font-family: fantasy;
             color: #222222;
             padding: 10px;
             display: inline-block;
         }
     </style>
     <div id="story" class="story-box main-timeline-box">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="title-box">
                         <h2>Thông tin về chúng tôi!</h2>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                     </div>
                 </div>
             </div>
             <div class="row timeline-element separline">
                 <div class="timeline-date-panel col-xs-12 col-md-6  align-left">
                     <div class="time-line-date-content">
                         <p class="mbr-timeline-date mbr-fonts-style display-font">
                             Studio Diễm My
                         </p>
                     </div>
                 </div>
                 <span class="iconBackground"></span>
                 <div class="col-xs-12 col-md-6 align-left">
                     <div class="timeline-text-content">
                         <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">Ảnh ... Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, officia?</h4>
                         <p class="mbr-timeline-text mbr-fonts-style display-7">
                            <a href="http://localhost/Project/project-wedding"> Diemmystudio.com</a>
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
                         <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font text-center" style="font-family:fantasy" >Phạm Ông Sơn</h4>
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
 @endsection
