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
              <a href='/' class='back-home'>หน้าแรก</a> > ผลงาน : ระบบเลือกตั้งออนไลน์
              </div>
              <div class='content-subtitle'>
                Tag : <a>Laravel</a> <a>Nodejs</a> <a>ReactJs</a>
              </div>



              <div class="slide-container">
                <div id="slides">
                <img src="/kmuttelection1.png" >
                  
                  <img src="/kmuttelection2.png">
                  
                  <a href="#" class="slidesjs-previous slidesjs-navigation">ก่อนหน้า<i class="icon-chevron-left icon-large"></i></a>
                  <a href="#" class="slidesjs-next slidesjs-navigation">ถัดไป<i class="icon-chevron-right icon-large"></i></a>
                </div>
              </div>


              <div class='content-detail'>
              ระบบเลือกตั้งออนไลน์ ประจำปี 2562 เพื่อเลือกประธานนักศึกษา และสภานักศึกษา
จัดกิจกรรมเลือกตั้งเมื่อวันที่ 27-29 เมษายน 2563 เป็นเวลาสามวัน มีผู้เข้าร่วมการเลือกตั้ง
มากกว่า 2,300 คน พัฒนาโดยใช้ Laravel Nodejs และ ReactJs เเละใช้ mySQL ในการเก็บข้อมูล
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
