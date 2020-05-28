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
                <img src="https://scontent.fbkk25-1.fna.fbcdn.net/v/t1.15752-9/100648164_245550730195712_8612148180034781184_n.png?_nc_cat=108&_nc_sid=b96e70&_nc_eui2=AeGzS1n3K79m0VqzX0U6qM6FW0JaO6d86ulbQlo7p3zq6SBbAIjsjwGjlMm-qSzxSWizLa15AVav13HWzdEWlS9h&_nc_ohc=IZ9Zv_B4SdEAX-tWCBd&_nc_ht=scontent.fbkk25-1.fna&oh=83b2a7f6f71b176d009653d4449596e1&oe=5EF686B9" >
                  
                  <img src="https://scontent.fbkk25-1.fna.fbcdn.net/v/t1.15752-9/101062727_186285205970183_3404665591091429376_n.png?_nc_cat=103&_nc_sid=b96e70&_nc_eui2=AeEH3lJ1V7ltpRqVv7HeEjw6u5Bzk_qz4_W7kHOT-rPj9UUepx7__paD3mOfobxZT0qOQ2sm6RdqjXHQ6se31JSh&_nc_ohc=swhH9b4kshwAX8YK6jD&_nc_ht=scontent.fbkk25-1.fna&oh=c2686d8768df1de8c4417911536875bf&oe=5EF5F709">
                  
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
