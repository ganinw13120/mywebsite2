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
                <img src="https://scontent.fbkk25-1.fna.fbcdn.net/v/t1.15752-9/100855686_2367774363526460_2985735662155595776_n.jpg?_nc_cat=107&_nc_sid=b96e70&_nc_eui2=AeHL_OGeUAl1sBWsvHYEodN5myXonEfTetmbJeicR9N62dbWBLrNCgRS_-3YXJ2LXWyMMH_-uPrxncGt6GWwjug0&_nc_ohc=7kNNs40SX2UAX-uVZ9S&_nc_ht=scontent.fbkk25-1.fna&oh=770ef8266857c938b389ece83122b062&oe=5EF7F076">
                  
                  <img src="https://scontent.fbkk25-1.fna.fbcdn.net/v/t1.15752-9/100692654_174659973983335_4208641949453778944_n.jpg?_nc_cat=109&_nc_sid=b96e70&_nc_eui2=AeGue3ZkRKoY81aak12zEXizMbZHe03hczAxtkd7TeFzMBSuXVzip9VDpkTz3ED_eddt95luKHDGzGGsJy4N3-p0&_nc_ohc=uZxnAvdnf-4AX9QUHCU&_nc_ht=scontent.fbkk25-1.fna&oh=58f2c56ec59d72d6af7bb6b00a5b5f70&oe=5EF57B0D" >
                  
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
