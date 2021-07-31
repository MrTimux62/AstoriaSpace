<!DOCTYPE html>
<html lang="fr">
<?php require_once("connect_inc.php"); session_destroy(); ?>
<?php require_once("head.php"); ?>
<link rel='stylesheet' type='text/css' media='screen' href='AstoriaRessources/main.css'>

<body>
    <div class='wrapper>'>
        <div class='typing'>
            <h1>ASTORIA SPACE</h1>
        </div>
    </div>
    <div class="modal fade" id="EventModal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered text-center">
            <div class="modal-content">
                <div class="modal-body modalimg fs-5">
                    Veuillez choisir un Pseudos:
                </div>
                <div>
                    <form method="POST" action="traitement_pseudo.php">
                        <input type="text" id="musique" name="pseudo" value="John" required><br>
                        <input id="modal-button2" type="submit" onclick="valid()" class="btn mx-auto" value="Continuer">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <ul>
        <li><a href="#" id="newGame">NOUVEAU JEU</a></li>
        <li><a href="stats.php">STATS</a></li>
        <li><a href="">OPTIONS</a></li>
        <li><a href="credit.php">CREDITS</a></li>
        <li><a href="" onclick="window.open('', '_self', ''); window.close();">QUITTER</a></li>
    </ul>

    <footer>
        <p>&copy 2021 | Astoria Space All Rigths Reserved.</p>
    </footer>
    <?php require_once("script.php") ?>
    <script>
        localStorage.clear();
        localStorage.setItem("score", 0)
        localStorage.setItem("difficultyturn", 0)
        localStorage.setItem("difficulty", 1)
        localStorage.setItem("eventturn", 0)
        localStorage.setItem("first", 1)
        localStorage.setItem("tutomain", 1)
        localStorage.setItem("randomimg", "url("+ "AstoriaRessources/images/fond_" + Math.floor(Math.random() * 8) + ".jpg" +")")
        var soundplay = 0
        $(document.body).hover(function() {
            if (soundplay == 0) {
                soundplay = 1
                var myAudio = new Audio('AstoriaRessources/son/intro.mp3');
                myAudio.play();
            }
        });
        $(document).ready(function(){
            $('#newGame').click(function(){
                if (localStorage.getItem("pseudo") == null){
                    console.log(localStorage.getItem("pseudo"));
                    $('#EventModal').modal({
                        backdrop: 'static',
                        keyboard: false,
                    });
                }
                $('#EventModal').modal('show');
            });
        });
    </script>
    <?php require_once("script.php") ?>
</body>

</html>