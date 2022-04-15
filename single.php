<?php 

$id = '';
if(isset($_GET['id']) && is_numeric($_GET['id'])){
  $id =$_GET['id'];
}
if(empty($_GET['id'])){
  die("L'article demandé n'existe pas !");
}
 // CONEXION A LA BASE DE DONNÉE
 $host ='localhost';
 $user ='root';
 $pass='root';
 $dbName= 'mblog';

 $pdo = new PDO('mysql:host='.$host.';dbname='
 .$dbName.';charset=utf8',$user,$pass,[
 PDO ::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION,
 PDO ::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC]);
 
 //recupere
 $query = $pdo->prepare('SELECT * FROM posts WHERE 
 id = :post_id' );
 $query->execute(array('post_id'=>$id));
 $post = $query->fetch();


//require_once 'db.php';
      

  //message d'erreurs
    // include_once ('traitement.php');

      //recupere le pdo
     //require_once 'function.php';
     //$post= selectOne($id);
     
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="style.css">

  <title>Article </title>
</head>

<body>


<?php include('header.php') ?>
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
<h1>

  <!-- Page Wrapper -->
  <div class="page-container" >

    <!-- Content -->
    <div class="container" >

      <!-- Main Content Wrapper -->

      <div class="">
        <div class="main-content single">
          
        <h4><?php echo $post['title']; ?></a></h4>
          <div class="post-image">
              <img src="<?= $post['image'] ;?>" alt=""  style="width: 50%;">
          </div>
          <h3><?php $post['author'];?></h3>
          <h6 class="post-content">
            <?= $post['content']  ;?> 
                   </h6>

      <div class="form" style="margin-left: 10%;">
      <label for="email"></label>
      <input type="text" placeholder="e-mail"> <br>
      <textarea name="" id="" cols="30" rows="10">Message</textarea> <br>
      <input type="submit">
      </div>
        </div>
        
      </div>


  <!-- footer -->
  <?php  include_once ('footer.php');?>
  <!-- // footer -->

</body>

</html>