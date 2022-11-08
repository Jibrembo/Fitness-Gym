<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/back.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Bodybuilding supplements are dietary supplements commonly used by those involved in bodybuilding,
            weightlifting, mixed martial arts, and athletics for the purpose of facilitating an increase in lean body mass.
            Bodybuilding supplements may contain ingredients that are advertised to increase a person's muscle, body weight, 
            athletic performance, and decrease a person's percent body fat for desired muscle definition.
             Among the most widely used are high protein drinks, pre-workout blends, branched-chain amino acids (BCAA), 
             glutamine, arginine, essential fatty acids, creatine, HMB, whey protein, ZMA, and weight loss products.
              Supplements are sold either as single ingredient preparations or in the form of "stacks" – proprietary blends of various supplements marketed as offering synergistic advantages.</p>
         
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Penghantaran pantas… barang dapat seperti yg diorder… rasa sedap… bancuh dgn susu lg best.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Apit</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Parcel received in good condition. Very fast shipping by seller. Good packaging. Value for money. Will repeat oder again if good. Tqvm seller.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Man</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Fuhh barang sudah sampai. Terbaikkk barang sampai dengan selamat. Seller balut dengan penuh ciri ciri keselamatan. Sampai dengan cepat. Tak sabar nak guna. Steady bro!.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mirul</h3>
      </div>

      

   </div>

</section>

<section class="authors">

   <h1 class="title">our trainers</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/train1.jpg" alt="">
         <div class="share">

            <a href="https://www.instagram.com/davidlaid/" class="fab fa-instagram"></a>
            <a href="https://www.youtube.com/c/DavidLaid" class="fab fa-youtube"></a>
         </div>
         <h3>David Laid</h3>
      </div>

      <div class="box">
         <img src="images/train2.jpg" alt="">
         <div class="share">

            <a href="https://www.instagram.com/cbum/" class="fab fa-instagram"></a>
            <a href="https://www.youtube.com/c/ChrisBumstead" class="fab fa-youtube"></a>
         </div>
         <h3>Chris Bumstead</h3>
      </div>

      <div class="box">
         <img src="images/train3.jpg" alt="">
         <div class="share">

            <a href="https://www.instagram.com/michaelcvazquez/" class="fab fa-instagram"></a>
            <a href="https://www.youtube.com/c/MichaelVazquez1" class="fab fa-youtube"></a>
         </div>
         <h3>Michael Vazquez</h3>
      </div>

      

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>