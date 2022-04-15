<?php 
//connection à la base de donnée
require_once 'db.php';

// recupere plusieurs articles 
function selectAll(){
global $pdo;

    $results = $pdo->query('SELECT * FROM posts ORDER BY date DESC LIMIT 0,4' );
    $posts = $results->fetchAll();
    return $posts;
}
   // recupére une seule article
function selectOne($id){
    global $pdo;
    $query=$pdo->prepare('SELECT * FROM posts WHERE id = :post_id');
    $query->execute(array('post_id' => $id ));
    $posts=$query->Fetch();
    return $posts;
}

// enregistrement d'un article
function create($author,$title,$content,$image){
    global $pdo;
    $query= $pdo->prepare('INSERT INTO posts(author,title,content,image,date) VALUES(:auteur,:titre,:contenu,:image,NOW())');
    $query->execute([
        'auteur'=>$author,
        'titre'=>$title,
        'Contenu'=>$content,
        'Image'=>$image
    ]);
    
}

?>