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
   <title>about</title>

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
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p><b>E-kart:</b> Affordable Online Shopping at Your Fingertips
There are many benefits of shopping online. You can take your time and look at different options to find exactly what you want. It's easy to compare prices online and find exactly what you are looking for. And now with E-kart, you can shop for anything you want at the lowest prices in the market.  Even if you want to shop for cool gifts for your friends and family, there are many options that you can find on the Internet. 

A Huge Selection of Products Across All Categories
We have a vast inventory of products ranging from apparel to cosmetics to home utility and kitchen products and more. With over 50 lakh products and 650+ product categories, E-kart is sure to have everything you need. In our latest collections, you will find all the popular items at an affordable price, so you can be confident you're getting the best deal. Whether you're in the market for new clothes, accessories, or just some daily-use items for home, E-kart has what you need.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/abhi.jpg" alt="">
         <p>Great Servive Thanks E-kart for making my first online TV purchase a seamless experience without any hiccups.
</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Abhishek</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/manish.jpg" alt="">
         <p>An awesome product and worth for the money we spent. 2 years product warranty is great Pictures quality and sound quality is good</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Manish</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/rajesh.jpg" alt="">
         <p>This is my first evry google tv and i am liking it. tv gives premium experience with its picture quality and sound quality.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rajesh</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/kalu.jpg" alt="">
         <p>I am using this phone for the last 3 months approximately. This phone is perfect for all, whatever you need you can get from this device.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Dharmendra</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/yogesh.jpg" alt="">
         <p>This is my first iphone and the experience is just amazing and i am also using an android phone but the animation, UI, camera is best.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Yogesh</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/kala.jpg" alt="">
         <p>I was very much delighted after viewing the product.. Laptop is very beautiful as its screenquality impressed me a lot.
.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aman</h3>
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