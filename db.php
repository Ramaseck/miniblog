
<?php
// CONNECTER A LA BASE DE DONNÉE

        $host='localhost';
        $user='root';
        $pass='root';
        $dbname='mblog';

        // se connecter avec 
        $pdo= new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8',$user,$pass,[
        PDO:: ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO:: ATTR_DEFAULT_FETCH_MODE =>PDO:: FETCH_ASSOC
        ]);

?>