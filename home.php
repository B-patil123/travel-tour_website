<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!--swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!--font awesome coding link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--custom css file link-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--header section starts-->
   <section class="header">
    <a href="home.php" class="logo">travel.</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
   </section>

  <!--header section ends-->

  <!--home section starts-->

  <section class="home">

    <div class="swiper home-slider">

       <div class="swiper-wrapper">
        
         <div class="swiper-slide slide" style="background:url(images/home-slide4.jpg) no-repeat">
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>travel around the world</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide1.jpg) no-repeat">
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>discover the new places</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide3.jpg) no-repeat">
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>make your tour worthwhile</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

       </div>

       <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    </div>

  </section>

  <!--home section ends-->

<!--services section starts---->

   <section class="services">

    <h1 class="heading-title"> our services </h1>

    <div class="box-container">

    <div class="box">
     <img src="images/icon2.png" alt="" width="100px" height="100px">
     <h3>adventure</h3>
    </div>

    <div class="box">
     <img src="images/icon3.png" alt="" width="100px" height="100px">
     <h3>tour guide</h3>
    </div>

    <div class="box">
     <img src="images/icon4.png" alt="" width="100px" height="100px">
     <h3>trekking</h3>
    </div>

    <div class="box">
     <img src="images/icon5.png" alt="" width="100px" height="100px">
     <h3>camp fire</h3>
    </div>

    <div class="box">
     <img src="images/icon6.png" alt="" width="100px" height="100px">
     <h3>off road</h3>
    </div>

    <div class="box">
     <img src="images/icon7.png" alt="" width="100px" height="100px">
     <h3>camping</h3>
    </div>

    </div>

   </section>

<!--services section ends---->

<!--home about section starts---->

<section class="home-about">

   <div class="image">
    <img src="images/explore.jpg" alt="">
   </div>

   <div class="content">
    <h3>about us</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est, qui hic? Laborum tempore nisi aut facere et cumque dolore animi sequi, numquam, dolorem quasi, earum veniam! Velit sapiente distinctio dicta!</p>
    <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!--home about section ends---->

<!--home packages section starts---->

<section class="home-packages">

 <h1 class="heading-title"> our packages </h1>

 <div class="box-container">
  
      <div class="box">
        <div class="image">
            <img src="images/taj.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, accusamus?</p>
            <a href="book.php" class="btn">book now</a>
        </div>
      </div>
  
      <div class="box">
        <div class="image">
            <img src="images/jaipur.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, accusamus?</p>
            <a href="book.php" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
            <img src="images/agra.jpg" alt="">
        </div>
        <div class="content">
            <h3>adventure & tour</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, accusamus?</p>
            <a href="book.php" class="btn">book now</a>
        </div>
      </div>

 </div>

 <div class="load-more"> <a href="package.php" class="btn">load more</a></div>

</section>

<!--home packages section ends---->

<!--home offer section starts---->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex ipsa nesciunt recusandae exercitationem odio temporibus ab qui quos ullam sunt.</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>

<!--home offer section ends---->













<!--footer section starts-->
 <section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
        <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i>privacy and policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
        <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
        <a href="#"> <i class="fas fa-envelope"></i> bhaktipatil@gmail.com </a>
        <a href="#"> <i class="fas fa-phone"></i> Nanded, India - 431606 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>
    <div class="credit"> created by <span> mr.web.designer </span> | all rights reserved! </div>
 </section>
<!--footer section ends-->

<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!--custom js file link-->
<script src="js/script.js"></script>

</body>
</html>