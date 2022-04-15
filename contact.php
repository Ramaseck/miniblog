<?php 
require_once 'db.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">

</head>
<body style="    height: 50%;
">
    
    <!--header-->
 <?php  include_once 'header.php';?>
<section style="float: right; margin-right:550px" >
<div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 600px ;margin-left
:53%;margin-top:30px;">
<h2 style="top:10px;">Adress</h2>
  <iframe src="https://maps.google.com/maps?q=saintlouis&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
    style="border:0; height:300px;" allowfullscreen></iframe>
</div>
<ul style="margin-top: 50px;">
  <li>tel</li>
</ul>
</section>

<nav >
  <div class="contain" style="margin-left:330px; margin-top:15px;">
  <h2>Conctacter nous</h2>
    <form action="">
      <label for="nom">Nom</label> <br>
      <input type="text" name="nom" style="width: 255px;"> <br>
      <label for="email">E-mail</label> <br>
      <input type="text" style="width: 255px;"> <br>
      <label for="contenu">contenu</label> <br>
      <textarea name="contenu" id="" cols="30" rows="10"></textarea> <br>
      <input type="submit" class="btn btn-primary">
    </form>
  </div>
</nav>
  <!--content-->
<!--<div class="contact" style="margin-top: 0;">
      <div class="contact-content" style="margin-top: 0;">  
        <div class="contact-section contact-form">
          <h2 style="margin-right: 76%;">Contacter nous</h2>
          <br>
          <form action="index.html" method="post">
            <input type="email" name="email" class="text-input contact-input" placeholder="Votre addresse e-mail..." style="width: 50%;">
            <textarea rows="4" name="message" class="text-input contact-input" placeholder="Votre message..." style="width: 50%;"></textarea>
            <button type="submit" class="btn btn-big contact-btn">
              <i class="fas fa-envelope"></i>
             Envoyer
            </button>
          </form>
        </div>
      </div>
</div>-->

<!--géolocalisation-->

<!--Google map-->



<!--Google Maps-->
    <!--footer-->
    <style>
        .footer1 .footer-bottom{
            background: #343a40;
            color: #686868;
            height: 100px;
            width: 100%;
            text-align: center;
            position: absolute;
            bottom: 0px;
            left: 0px;
            padding-top: 20px;
            margin-top: 100px;

        }
    </style>
    <footer>
        <div class="footer1">
    <div class="footer-bottom">
        &copy; codingpoets.com | Designed by Rama
      </div>
        </div>
    </footer>

</body>
</html>