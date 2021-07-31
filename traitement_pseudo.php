<?php
include_once('connect_inc.php');

$req = $pdo->query('SELECT pseudo FROM score');
    foreach ($req as $row){
        $pseudoBdd = $row['pseudo'];
        if ($pseudoBdd == $_POST['pseudo']){
            session_start();
            $_SESSION['pseudo'] = $pseudoBdd;
            header('Location: mainPage.php');
            exit();  
        }  
    }
        
$pseudo = "";

if(isset($_POST['pseudo']) && !empty($_POST['pseudo'])){
    $pseudo = $_POST['pseudo'];
}else{
    exit('erreur pseudo');
}

$sql = "INSERT INTO score (pseudo,score) VALUES ('$pseudo',0)";
if ($pdo->exec($sql) === 1){
    session_start();
    $_SESSION['pseudo'] = $pseudo;
    header('Location: mainPage.php');
}else{
    exit('ERREUR');
}

?>