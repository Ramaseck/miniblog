<?php
//se connecter à la base de donée

require_once 'db.php';


// recupération des articles

require_once 'function.php';
$posts=selectAll();




?>




<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

 
  <link rel="stylesheet" href="style.css">

  <title>Mini-Blog</title>
</head>

<body>
  <!--header-->
   <?php include_once ('header.php');?>
<div class="section">
   
<div class="sect">
    <h1> Hello Electromanager</h1> <br> <br> 
    <h2>Des conseils Meubles et Électroménager,<br>
    des idées Déco est Aménagement. <br>
L'essentiel pour votre maison se trouve sur le blog HEM!
</h2>
</div>


</div>

  <!-- Page Wrapper -->
  <div class="page-container">

    <!-- Post Slider -->
    <div class="posts">
      <h1 class="posts-title">Articles</h1>
      <div class="post-container">
        <?php foreach ($posts as $post ): ?>
       
            <div class="post">
              <img src="<?php echo $post['image'] ;?>"alt="" class="slider-image">
              <div class="post-info">
                <h4 style="color: green;"><a href="single.php? id=<?=$post['id'];?>"><?php echo $post['title']; ?></a></h4>
                <i > <?php echo $post['author'] ;?></i>
                &nbsp;
                <i ><?php echo date('d,m,y',strtotime($post['date']));?></i>
                <i></i>
              </div>
            </div>
            <?php endforeach;?>


            
          
      </div>
    </div>
        </div>
      
    </div>

  <!-- // footer --> 

  <?php  include_once ('footer.php');?>
  <body>
  </html>