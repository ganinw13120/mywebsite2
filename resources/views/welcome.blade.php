<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>Gan Mongklakorn | Portfolio</title>
    <link rel="icon" href="favicon.png">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168031241-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-168031241-1');
</script>

    </head>
    <body>
      <div class='app'>
        <div class='container'>
            <canvas id="canvas"></canvas>
            <div class='text-home'>
                <div class='name'>แกน มงคลากร</div>
                <div class='sub-name'>เเฟ้มผลงานออนไลน์</div>
                <div class='home-menu'><a href="#infomation">ข้อมูลส่วนตัว</a><div class='separators'></div><a href="#work">ผลงาน</a></div>
            </div>
        </div>    
        
        <div class='infomation' id='infomation'>
        <div>
            <img src='profile.jpg' class='img-info'></img>
        </div>
            <div class='infomation-detail'>
            <div class='bold'>ข้อมูลส่วนตัว</div>
            <div class='detail bold'>นายแกน มงคลากร (แกน)</div>
            <div class='detail-s'>นักศึกษาชั้นปีที่ 1 คณะวิศวกรรมศาสตร์ สาขาวิชาวิศวกรรมคอมพิวเตอร์</div>
            <div class='detail-s'>มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี</div>
            <div class='detail-s bold'>ความสามารถ</div>
            <div class='detail-s'>ด้านเว็ปไซต์ : <a>Javascript</a> <a>PHP</a> <a>Nodejs</a> <a>React</a> <a>Laravel</a></div>
            <div class='detail-s'>ด้านการพัฒนาเกม : <a>Unity</a> ด้วยภาษา C#</div>
            <div class='detail-s'>อื่น ๆ : <a>SQL</a> และ <a>Line Platform</a> เช่น ไลน์เเชทบอท</div>
            <div class='detail-s'></div>
            <div class='bold'>ช่องทางการติดต่อ</div>
            <div class='detail-s'>โทร 086-4062057</div>
            <div class='detail-s'>อีเมล gan131201@gmail.com</div>
            <div class='detail-s'></div>
            <div class='detail-s'></div>
            </div>
        </div>
        <div class='work-title' id='work'>
        ผลงาน  
      </div>
        <div class='card'>
          <div class="card-container" onclick="window.location='works/patsunee'">
            <div class='card-image blue'><img src='patsunee.jpg' class='card-img'></div>
            <div class='card-title'>ไลน์บอท Patsunee</div>
            <div class='card-detail'>แชทบอทที่มีผู้ใช้งานมากกว่า 20,000 คน
            แชท บอทเกี่ยวกับการติดตามพัสดุ</div>
            <div class='card-footer'><a>Line Platform</a> <a>NodeJs</a></div>
            <div class='card-button'><a>ดูรายละเอียด</a></div>
          </div>
          <div class="card-container "  onclick="window.location='works/election'">
            <div class='card-image yellow'><img src='kmuttelection.png' class='card-img'></div>
            <div class='card-title'>ระบบเลือกตั้งออนไลน์</div>
            <div class='card-detail'>ระบบเลือกตั้งออนไลน์ภายใน มจธ.
            มีผู้เข้าร่วมการเลือกตั้งมากกว่า 2,300 คน</div>
            <div class='card-footer'><a>Laravel</a> <a>Nodejs</a> <a>ReactJs</a></div>
            <div class='card-button'><a>ดูรายละเอียด</a></div>
          </div>
          <div class="card-container" onclick="window.location='works/eesh'">
            <div class='card-image yellow'><img src='eesh.png' class='card-img'></div>
            <div class='card-title'>ระบบประเมิณความเสี่ยงภัย</div>
            <div class='card-detail'>ใช้ภายในองค์กร Energy Environment 
            Safety and Health (EESH) ภายในมจธ.</div>
            <div class='card-footer'><a>Laravel</a></div>
            <div class='card-button'><a>ดูรายละเอียด</a></div>
          </div>
          <div class="card-container" onclick="window.location='works/matching'">
            <div class='card-image blue'><img src='http://logcov.org/images/new-logo.png' class='card-img-cov'></div>
            <div class='card-title'>ระบบบริหารจัดการคลังเวชภัณฑ์
                Matching System </div>
            <div class='card-detail'>ได้รับความร่วมมือจากกระทรวงสาธารณสุข 
            สำนักงานวิจัยเเห่งชาติ เเละมหาวิทยาลัยมหิดล</div>
            <div class='card-footer'><a>Laravel</a></div>
            <div class='card-button'><a>ดูรายละเอียด</a></div>
          </div>
        </div>
        </div>
    </body>
    <script>
    var canvas = document.getElementById("canvas"),
    ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var stars = [], // Array that contains the stars
    FPS = 60, // Frames per second
    x = 100, // Number of stars
    mouse = {
      x: 0,
      y: 0
    };  // mouse location

// Push stars to array

for (var i = 0; i < x; i++) {
  stars.push({
    x: Math.random() * canvas.width,
    y: Math.random() * canvas.height,
    radius: Math.random() * 1 + 1,
    vx: Math.floor(Math.random() * 50) - 25,
    vy: Math.floor(Math.random() * 50) - 25
  });
}

// Draw the scene

function draw() {
  ctx.clearRect(0,0,canvas.width,canvas.height);
  
  ctx.globalCompositeOperation = "lighter";
  
  for (var i = 0, x = stars.length; i < x; i++) {
    var s = stars[i];
  
    ctx.fillStyle = "#fff";
    ctx.beginPath();
    ctx.arc(s.x, s.y, s.radius, 0, 2 * Math.PI);
    ctx.fill();
    ctx.fillStyle = 'black';
    ctx.stroke();
  }
  
  ctx.beginPath();
  for (var i = 0, x = stars.length; i < x; i++) {
    var starI = stars[i];
    ctx.moveTo(starI.x,starI.y); 
    if(distance(mouse, starI) < 150) ctx.lineTo(mouse.x, mouse.y);
    for (var j = 0, x = stars.length; j < x; j++) {
      var starII = stars[j];
      if(distance(starI, starII) < 150) {
        //ctx.globalAlpha = (1 / 150 * distance(starI, starII).toFixed(1));
        ctx.lineTo(starII.x,starII.y); 
      }
    }
  }
  ctx.lineWidth = 0.05;
  ctx.strokeStyle = 'white';
  ctx.stroke();
}

function distance( point1, point2 ){
  var xs = 0;
  var ys = 0;
 
  xs = point2.x - point1.x;
  xs = xs * xs;
 
  ys = point2.y - point1.y;
  ys = ys * ys;
 
  return Math.sqrt( xs + ys );
}

// Update star locations

function update() {
  for (var i = 0, x = stars.length; i < x; i++) {
    var s = stars[i];
  
    s.x += s.vx / FPS;
    s.y += s.vy / FPS;
    
    if (s.x < 0 || s.x > canvas.width) s.vx = -s.vx;
    if (s.y < 0 || s.y > canvas.height) s.vy = -s.vy;
  }
}

canvas.addEventListener('mousemove', function(e){
  mouse.x = e.clientX;
  mouse.y = e.clientY;
});

// Update and draw

function tick() {
  draw();
  update();
  requestAnimationFrame(tick);
}

tick();</script>
</html>
