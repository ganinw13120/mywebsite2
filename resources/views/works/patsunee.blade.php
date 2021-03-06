<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>Gan Mongklakorn | Portfolio</title>
    <link rel="icon" href="/favicon.png">
    <link href="/css/main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/139719/jquery.slides.min.js"></script>
    </head>
    <body>
        <div class='content'>
          <div class='content-container'>
              <div class='content-title'>
              <a href='/' class='back-home'>หน้าแรก</a> > ผลงาน : Patsunee
              </div>
              <div class='content-subtitle'>
                Tag : <a>Nodejs</a> <a>Line Platform</a>
              </div>



              <div class="slide-container">
                <div id="slides">
                <img src="/patsunee1.jpg">
                  
                  <img src="/patsunee2.jpg" >
                  
                  <a href="#" class="slidesjs-previous slidesjs-navigation">ก่อนหน้า<i class="icon-chevron-left icon-large"></i></a>
                  <a href="#" class="slidesjs-next slidesjs-navigation">ถัดไป<i class="icon-chevron-right icon-large"></i></a>
                </div>
              </div>


              <div class='content-detail'>
              Patsunee ไลน์เเชทบอทเกี่ยวกับการค้นหาพัสดุบนเเฟลตฟอร์มไลน์ ที่สามารถเข้าถึงได้ง่าย สะดวกเเละรวดเร็ว รองรับทั้งการค้นหาสถานะของพัสดุ อัตราค่าบริการของเเต่ละผู้ให้บริการรวบรวมไว้ในที่เดียว มีผู้ติดตามมากกว่าสองหมื่นคน เเละมีการใช้งานอย่างต่อเนื่อง
              พัฒนาโดยใช้ Nodejs บน Line Platform
              </div>
              <div style='text-align:center;padding-top:30px;' class='bot-add'>
              <a  href='https://line.me/R/ti/p/%40395qwwor'>เพิ่มเพื่อน</a>
              </div>
          </div>
        </div>
    </body>
  <script>
      $(function() {
        $('#slides').slidesjs({
          width: 1000,
          height: 500,
          navigation: false,
          play: { auto: true,interval: 4000, },
      effect: {
        slide: {speed: 1500},
        fade: { speed: 300, },
              }
        });
      }); 
  </script>
</html>
