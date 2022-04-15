<?php 
  $id='';
  if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'] ;
    
  }
  if (empty($_GET['id'])) {
    die('erreur');
  }
/*
$post = selectOne($id);
$comments = findAllComments($id);

if (isset($_GET['id_comment_delete'])) {
  $id_com =$_GET['id_comment_delete'];
  deleteComment($id_com);
  header('Location:single.php?id='.$id);
  exit();
}
if (isset($_POST['add-comment'])) {
  $author =$_POST['author'];
  $id = $_POST['id'] ;
  $comment = nl2br(htmlentities($_POST['comment']));
  
  saveComment($author,$id,$comment);
  header('Location:single.php?id='.$_POST['id']);
  exit();
}*/ 

?>