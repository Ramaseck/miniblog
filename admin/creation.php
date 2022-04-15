<?php 
//connexion
require_once '../db.php';

//recuperaation
require_once '../function.php';
?>

<?php 
//traitement d'image
if (isset($_POST['add-post'])) {
    # code...

var_dump($_FILES['image']);
    if (!empty($_FILES['image'][   'name'])) {
        $image_name = $_FILES['image']['name'];
        $destination = "$image_name";
        $result=move_uploaded_file($_FILES['image']['tmp_name'],$destination);
        if($result){
            $_POST['image']=$image_name;

        }
        # code...
    }
    $_POST['content'] =  nl2br(htmlentities($_POST['content']));
    //enregistrement de l'articl
    create($_POST['author'],$_POST['title'],$_POST['content'],$_POST['image']);
    header('location: article.php');
    exit();
}
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
<link rel="stylesheet" href="article.css">
<link rel="stylesheet" href="style.css">

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
                    <a href="index.html" class="btn btn-big">Modofier un article</a>
                </div>   
     <div class="contain">
        <form action="">
     <h2 >Gestion des articles</h2>
     <label for="author">Auteur</label> <br>
     <input type="text" name="author" placeholder="Rama"> <br>
     <label for="title">Titre</label> <br>
     <input type="text" name="title"> <br>
     <label for="content">Contenu</label> <br>
    <textarea name="content" id="" cols="30" rows="10" class="content"></textarea> <br>
    <label for="image">Image</label> 
    <input type="file" name="image"> <br>
    <input type="submit" value="Créer un article" class="btn btn_primary" style="margin-top: 10px; 
    width:10%;">
        </form>
    </div>
    <?php include_once('../footer.php'); ?>
</body>
</html>