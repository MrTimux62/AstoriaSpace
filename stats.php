<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="AstoriaRessources/stats.css">
    <title>Top Classement AstoriaSpace</title>
    <?php include_once('connect_inc.php')?>
</head>
<body>
<a href="index.php" target="_self"><img src="AstoriaRessources/images/fleche.png" alt="back" id="fleche"></a>
<table>
    <u><h1>Top Joueur AstoriaSpace</h1></u>
    <br>
    <tr>
        <td>Pseudo</td>
        <td>Score</td>
    </tr>
<?php 
    $req = $pdo->query('SELECT pseudo, score FROM score');
    foreach ($req as $row){
?>
    <tr>
        <td><?php echo $row['pseudo']?></td>
        <td><?php echo $row['score']?></td>
    </tr>
<?php      
    }
?>
</table>
</body>
</html>