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
              <a href='/' class='back-home'>หน้าแรก</a> > ผลงาน : ระบบจัดการคลังเวชภัณฑ์
              </div>
              <div class='content-subtitle'>
                Tag : <a>Laravel</a>
              </div>



              <div class="slide-container">
                <div id="slides">
                <img src="https://scontent.fbkk25-1.fna.fbcdn.net/v/t1.15752-9/99441009_1517289645099699_3788462988193693696_n.png?_nc_cat=104&_nc_sid=b96e70&_nc_eui2=AeG07P2oWErlrKjcmCv5aI17C1wnlwdh934LXCeXB2H3fnlsELyfsrDDP2lFZoMaKTvSoEhuvBT73Nlz3jkaDGLn&_nc_ohc=bVxWhj5lmi8AX-BHe-R&_nc_ht=scontent.fbkk25-1.fna&oh=1d2964bcdc160574daced1eca600a3d2&oe=5EF63A96">
                  
                  <img src="https://scontent.fbkk25-1.fna.fbcdn.net/v/t1.15752-9/99436514_287003905806600_1026890568388575232_n.png?_nc_cat=100&_nc_sid=b96e70&_nc_eui2=AeFHlbDebhpbUayjHYf4eaIPoYQKXIGBVvGhhApcgYFW8QB4_cj0LiD_xuzZPSv38XeFcW-1L59R1Ae56XILLQZo&_nc_ohc=kJlKojw-4gsAX_8Ut5M&_nc_ht=scontent.fbkk25-1.fna&oh=4470acbd0cab141a0b915059f14adcc0&oe=5EF5F7DF" >
                  
                  <a href="#" class="slidesjs-previous slidesjs-navigation">ก่อนหน้า<i class="icon-chevron-left icon-large"></i></a>
                  <a href="#" class="slidesjs-next slidesjs-navigation">ถัดไป<i class="icon-chevron-right icon-large"></i></a>
                </div>
              </div>


              <div class='content-detail'>
              ระบบบริหารจัดการคลังเวชภัณฑ์ที่มิใช่ยา เพื่อจัดสรรอุปกรณ์ทางการเเพทย์ให้ตรงกับ
ความต้องการของเเต่ละโรงพยาบาลทั่วประเทศ เเละให้เกิดประสิทธิภาพมากที่สุดจากกรณี
โรคติดเชื้อไวรัสโคโรนา 2019 (COVID-19) โดยเป็นระบบภายในหน่วยงาน เเละเป็นระบบที่
ได้รับความร่วมมือจากกระทรวงสาธารณสุข สำนักงานวิจัยเเห่งชาติ เเละมหาวิทยาลัยมหิดล
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
