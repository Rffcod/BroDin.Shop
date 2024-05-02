<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/23.png" alt="">
      </div>

      <div class="content">
         <h3>Developer's Message:</h3>
         <p>"Selamat datang di BroDin.Shop, tempat di mana kebutuhan aksesoris ponsel Anda dipenuhi dengan koleksi terlengkap dan terbaru. Temukan beragam pilihan aksesoris yang dirancang untuk meningkatkan gaya dan kenyamanan penggunaan ponsel Anda. Dari pelindung layar hingga aksesori unik, kami siap membantu Anda menemukan yang sesuai dengan gaya dan kebutuhan Anda."</p>
         <p>"Mari jelajahi dunia aksesoris ponsel yang tak terbatas di BroDin.Shop dan temukan yang terbaik untuk Anda!"</p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/JaosnStatham.webp" alt="">
         <p>Good boy. Sangar awakmu cak, joss!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> <a href="" target="_blank">Jason Statham</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/BillieElish.jpg" alt="">
         <p>Halo Sam, ojo ngomong sopo-sopo aku iki asline wong nganjuk</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="" target="_blank">Billie Elish</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/Ronaldo.jpg" alt="">
         <p>Info bal-balan lur. Ayo sam melok aku nang Al-Nasr gelem gak? Siiiiuuuuuuuuuuu!!!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="" target="_blank">Cristiano Ronaldo</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/barack-obama.jpg" alt="">
         <p>Kweren sampean le. Tak akoni jempol lima. Wes pokok pesenku ojo lali sholate</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="" target="_blank">Barack Obama</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/luffy.jpg" alt="">
         <p>Aku lapaarrrr!!!! Aku laparrrrr!!! Aku laparrrrrr!!!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="" target="_blank">Monkey D Luffy</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/ronaldinho.jpg" alt="">
         <p>Sepurane le, aku wis pensiun malene raiso ngajak bal-balan awakmu neh. Sepurane le yoo</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href=""  target="_blank">Ronaldinho</a></h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>