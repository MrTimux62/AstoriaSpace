<?php
    require_once('connect_inc.php');
    header('Location: index.php');
    $reqscore = $pdo->query('SELECT id_score FROM score');
    foreach ($reqscore as $row){
        $scoreBdd = $row['id_score'];
        if ($scoreBdd < $_POST['score']){
            $req = $pdo->prepare('UPDATE score SET score = :score WHERE pseudo = :pseudo');
            $req->execute(array(
                'score' => $_POST['score'],
                'pseudo' => $_SESSION['pseudo'])); // On enregistre le score selon l'id de la session actuelle
            echo 'enregistrement ok'; 
        }  
    }
    session_destroy();
?>