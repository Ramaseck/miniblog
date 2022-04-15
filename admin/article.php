
<?php 
require_once '../db.php';
$sql = 'SELECT * FROM `posts` ORDER BY `date` DESC LIMIT 0,100';

// On prépare la requête
$results = $pdo->prepare($sql);

// On exécute
$results->execute();

// On récupère les valeurs dans un tableau associatif
$posts = $results->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Custom Styling -->
        <link rel="stylesheet" href="style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="article.css">

        <title>Section Admin - Gestions des articles</title>
    </head>

    <body>
    <header>
    <div class="logo">
      <h1 class="logo-text">H<span>E</span>M <p>hello ElectroManager</p> </h1>
    </div>
    <ul class="nav">
      <li><a href="../index.php">Accueil</a></li>
      <li><a href="#">A propos</a></li>
      <li><a href="../blog.php">Blog</a></li>
      <li><a href="article.php">Article</a></li> 

      <li><a href="../contact.php">Contact</a></li>
    </ul>
  </header>

        <!-- Admin Page Wrapper -->
        <div class="admin-container">

            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="creation.php" class="btn btn-big">Creation d'un article</a>
                    <a href="index.html" class="btn btn-big">Modofier un articles</a>
                </div>
                <div class="container">
                    <h2 class="page-title">Gestion des articles</h2>
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                        <?php foreach($posts as $key=>$post):?>

                       
                                <tr>
                                    <td><?= $key +1 ?></td>
                                    <td><?= $post['title'];?></td>
                                    <td><?= $post['author'];?></td>
                                    <td><a href="" class="edit">edit</a></td>
                                    <td><a href="" class="delete">delete</a></td>  
                                </tr>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    
      </div>
      <style>
        .footer2 .footer-bottom{
            background: #313133;
            color: #686868;
            height: 100px;
            width: 100%;
            text-align: center;
            bottom: 0px;
            left: 0px;
            margin-top: 20%;
            padding: 30px 10px;

        }
    </style>
       <div class="footer2">
      <div class="footer-bottom">
        &copy; codingpoets.com | Designed by Rama
      </div>
        </div>

    </body>

</html>