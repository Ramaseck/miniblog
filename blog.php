<?php
//se connecter à la base de donée

$host='localhost';
$user='root';
$pass='root';
$dbname='mblog';

// se connecter avec 
$pdo= new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8',$user,$pass,[
PDO:: ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
PDO:: ATTR_DEFAULT_FETCH_MODE =>PDO:: FETCH_ASSOC
]);

if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage = 2;
}

// recupération des articles


    
        
        //$results = $pdo->query('SELECT * FROM posts ORDER BY date DESC LIMIT 0,10' );
        //$posts = $results->fetchAll();


        $sql = 'SELECT * FROM `posts` ORDER BY `date` DESC LIMIT 0,9';

// On prépare la requête
$results = $pdo->prepare($sql);

// On exécute
$results->execute();

// On récupère les valeurs dans un tableau associatif
$posts = $results->fetchAll(PDO::FETCH_ASSOC);

//pagination
//nombre d'article
$sql='SELECT COUNT(*) AS nb_articles FROM `posts`';

// On prépare la requête
$results = $pdo->prepare($sql);

// On exécute
$results->execute();

// On récupère le nombre d'articles
$result = $results->fetch();

$nbArticles = (int) $result['nb_articles'];

// On détermine le nombre d'articles par page
$parPage = 2;

// On calcule le nombre de pages total
$pages = ceil($nbArticles / $parPage);

$premier = ($currentPage * $parPage) - $parPage;
$sql = 'SELECT * FROM `posts` ORDER BY `date` DESC LIMIT :premier, :parpage;';

// On prépare la requête
$results = $pdo->prepare($sql);

$results->bindValue(':premier', $premier, PDO::PARAM_INT);
$results->bindValue(':parpage', $parPage, PDO::PARAM_INT);

// On exécute
$results->execute();

// On récupère les valeurs dans un tableau associatif
$posts = $results->fetchAll(PDO::FETCH_ASSOC);




?>




<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

 
  <link rel="stylesheet" href="style.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">

  <title>Mini-Blog</title>
</head>

<body>
  <!--header-->
  <?PHP
  include_once 'header.php';
  ?>
<br> <br> <br> <br> <br> <br> <br>
   

  <!-- Page Wrapper -->
  <!--<div class="page-container">

    <!- Post Slider -->
    <div class="posts">
      <h1 class="posts-title">Articles</h1>
      <div class="post-container">
        <?php foreach ($posts as $post ): ?>
       
            <div class="post" style="margin-left: 200px; margin-top:10px; margin-bottom:30px;">
              <img src="<?php echo $post['image'] ;?>"alt="" class="slider-image">
              <div class="post-info">
                <h4 style="font-size: 18Px; color:green;"><a href="single.php? id=<?=$post['id'];?>"><?php echo $post['title']; ?></a></h4>
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
    <nav>
      <style>
        ul{
          list-style-type:none
        }
        ul li{
          text-decoration: none;
        }
      </style>
            <ul class="pagination" style="justify-content: center;">
            <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
            <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
            <a href="?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
                                   </li>
            <?php for($page = 1; $page <= $pages; $page++): ?>
            <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
            <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
              <a href="?page=<?= $page ?>" class="page-link"><?= $page ?></a>
              </li>
            <?php endfor ?>
         <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
             <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                 <a href="?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
                        </li>
              </ul>
     </nav>
</div>

  <!-- // footer --> 

  <style>
        .footer2 .footer-bottom{
            background: #343a40;
            color: #686868;
            height: 50px;
            width: 100%;
            text-align: center;
            bottom: 0px;
            left: 0px;
            margin-top: 150px;

        }
    </style>
       <div class="footer2">
      <div class="footer-bottom">
        &copy; codingpoets.com | Designed by Rama
      </div>
        </div>  <body>
  </html>