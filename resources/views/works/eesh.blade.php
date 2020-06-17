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
              <a href='/' class='back-home'>หน้าแรก</a> > ผลงาน : ระบบประเมินความเสี่ยงภัย
              </div>
              <div class='content-subtitle'>
                Tag : <a>Laravel</a>
              </div>



              <div class="slide-container">
                <div id="slides">
                <img src="https://scontent.fbkk25-1.fna.fbcdn.net/v/t1.15752-9/100793308_579436092974837_6223200826408566784_n.png?_nc_cat=110&_nc_sid=b96e70&_nc_eui2=AeGYcBG6Wv61HuQ23G_pdYEFS6sMY9S1gsJLqwxj1LWCwm4HAsiBJLPciiSoJqgPLg1PsvoK5Fk6gvN9_OIjAlyi&_nc_ohc=rHgxnIUcBZUAX93dd1y&_nc_ht=scontent.fbkk25-1.fna&oh=8c3eb38765d5070f199447f10ac89b9f&oe=5EF6D8C9" >
                  
                  <img src="https://scontent.fbkk25-1.fna.fbcdn.net/v/t1.15752-9/99436412_1432451316926864_4643349792938786816_n.png?_nc_cat=103&_nc_sid=b96e70&_nc_eui2=AeHZ7Zw66WHj24IXTzpFJ_FMw9TnOYeIQ0DD1Oc5h4hDQB7vank07XE7w-pFSMzAQwJumsKWwdCCX3b7PQp9Tnwt&_nc_ohc=KECFCiEZN5oAX-JSgTx&_nc_ht=scontent.fbkk25-1.fna&oh=f358a4bdc9a4f53bce1160f0e65d4c2d&oe=5EF6DC66">
                  
                  <a href="#" class="slidesjs-previous slidesjs-navigation">ก่อนหน้า<i class="icon-chevron-left icon-large"></i></a>
                  <a href="#" class="slidesjs-next slidesjs-navigation">ถัดไป<i class="icon-chevron-right icon-large"></i></a>
                </div>
              </div>


              <div class='content-detail'>
                ระบบประเมินความเสี่ยงภัย ใช้ภายในองค์กร Energy Environment Safety and
Health (EESH) ภายในมหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี ใช้ในการจัดการ
เเละเพื่อให้เจ้าหน้าที่รายงานความเสี่ยงภัยที่เกิดขึ้น ภายในโรงประลองหรือห้องปฏิบัตรการ
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
