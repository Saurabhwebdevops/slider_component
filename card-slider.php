<html lang="en">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> 
   <link rel="stylesheet" href="./blue-style.css">
  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 100%;
      font-family:'Montserrat';
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .mySwiper .swiper-slide{
    height: 600px;
 }
    .swiper-button-next, .swiper-button-prev {
  text-rendering: auto;
}
  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper d-center">
      <div class="swiper-slide" >
         <div class="card-body bl-w-100 ">
         <img src="./images/card/int1.jpg" alt="">
          <div class="card-text">
            <span class='count'>01</span>
            <h3>Interior Design</h3>
          </div>
         </div>
    



      </div>
      <div class="swiper-slide"><div class="card-body bl-w-100">
      <img src="./images/card/int6.jpg" alt="">
          <div class="card-text">
            <span class='count'>02</span>
            <h3>Interior Design</h3>
          </div>
         </div></div>
      <div class="swiper-slide"><div class="card-body bl-w-100">
      <img src="./images/card/int2.jpg" alt="">
          <div class="card-text">
            <span class='count'>03</span>
            <h3>Interior Design</h3>
          </div>
         </div></div>
      <div class="swiper-slide"><div class="card-body bl-w-100">
      <img src="./images/card/int3.jpg" alt="">
          <div class="card-text">
            <span class='count'>04</span>
            <h3>Interior Design</h3>
          </div>
         </div></div>
      <div class="swiper-slide"><div class="card-body bl-w-100">
      <img src="./images/card/int4.jpg" alt="">
          <div class="card-text">
            <span class='count'>05</span>
            <h3>Interior Design</h3>
          </div>
         </div></div>
      <div class="swiper-slide"><div class="card-body bl-w-100">
      <img src="./images/card/int5.jpg" alt="">
          <div class="card-text">
            <span class='count'>06</span>
            <h3>Interior Design</h3>
          </div>
         </div></div>
     
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 0,
      loop:true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        enabled:true,
      },
      breakpoints:{
        640:{
          slidesPerView: 1.25,
          spaceBetween: 0,
        },
        1024:{
          slidesPerView: 4,
          spaceBetween: 0,
        }
      }
     
    });
  </script>
</body>

</html>