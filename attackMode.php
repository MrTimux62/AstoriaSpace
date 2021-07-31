<html>
<?php require_once("connect_inc.php") ?>
<?php require_once("head.php") ?>
<link rel='stylesheet' type='text/css' media='screen' href='AstoriaRessources/vaisseau.css'>

<body>
    <?php require_once("ath.php") ?>


    <div id="mon_vaisseau">
        <img src="AstoriaRessources/images/mon_vaisseau.png" alt="non trouvé" class="vaisseau">
        <img src="AstoriaRessources/images/laser.png" alt="non trouvé" style="display: none;" class="laser1">
        <img src="AstoriaRessources/images/laser.png" alt="non trouvé" style="display: none;" class="laser2">
        <img src="AstoriaRessources/images/BigExplosion.gif" alt="non trouvé" style="display: none;" class="Meexplo0">
        <img src="AstoriaRessources/images/BigExplosion.gif" alt="non trouvé" style="display: none;" class="Meexplo1">
        <img src="AstoriaRessources/images/BigExplosion.gif" alt="non trouvé" style="display: none;" class="Meexplo1">
        <img src="AstoriaRessources/images/BigExplosion.gif" alt="non trouvé" style="display: none;" class="Meexplo3">
        <img src="AstoriaRessources/images/BigExplosion.gif" alt="non trouvé" style="display: none;" class="Memegaexplo">
        <img src="AstoriaRessources/images/shieldEffect.gif" alt="non trouvé" style="display: none;" class="shieldeffect">
        <p id="notif_V" style="opacity: 0;">MISS</p>
        <button type="button" id="btn" class="btn_attaquer btn btn-danger vbutton attackbutton"><strong>ATTAQUER</strong></button>
        <button type="button" id="btn" class="btn_esquive btn btn-success vbutton esquivebutton"><strong>ESQUIVE (x3)</strong></button>
        <button type="button" id="btn" class="btn_fuir btn btn-warning vbutton escapebutton"><strong></strong></button>
    </div>
    <div id="vaisseau_ennemi">
        <p id="text_ennemi"><strong>Ennemi</strong></p>
        <div class="progress vieennemi">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success E_lifejs" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%">80hp</div>
        </div>
        <img src="AstoriaRessources/images/Ennemi_1.png" alt="non trouvé" id="img_ennemi" class="ennemi">
        <img src="AstoriaRessources/images/BigExplosion.gif" alt="non trouvé" style="display: none;" class="explo0">
        <img src="AstoriaRessources/images/BigExplosion.gif" alt="non trouvé" style="display: none;" class="explo1">
        <img src="AstoriaRessources/images/BigExplosion.gif" alt="non trouvé" style="display: none;" class="explo2">
        <img src="AstoriaRessources/images/BigExplosion.gif" alt="non trouvé" style="display: none;" class="explo3">
        <img src="AstoriaRessources/images/BigExplosion.gif" alt="non trouvé" style="display: none;" class="megaexplo">
        <p id="notif_E" style="opacity: 0;">MISS</p>

    </div>

    <?php require_once("script.php") ?>
    <?php require_once("modal.php") ?>
    <script type="text/javascript">
        $("#map").css("display", "none")
        console.log(localStorage.getItem("E_Vie"));
        if (localStorage.getItem("E_Vie") == null || localStorage.getItem("E_Vie") <= 0) {
            ennemyAppear();
        }
        var soundplay = 0
        $(document.body).hover(function() {
            if (soundplay == 0) {
                soundplay = 1
                var myAudio = new Audio('AstoriaRessources/son/fight.mp3');
                myAudio.loop = true
                myAudio.play();
            }
        });
        $(document).ready(function() {
            updateEnnemi();
            $(".escapebutton").text("FUIR (" + localStorage.getItem("fuite") + "%)");
            if (localStorage.getItem("TutoCombat") == null) {
                localStorage.setItem("TutoCombat", 1)
                $("#CombatTutoModal").modal("show");
            }
        });


        document.body.style.backgroundImage = localStorage.getItem("randomimg");
        var images = new Array()

        function preload() {
            for (i = 0; i < preload.arguments.length; i++) {
                images[i] = new Image()
                images[i].src = preload.arguments[i]
            }
        }
        preload(
            "AstoriaRessources/images/BigExplosion.gif",
            "AstoriaRessources/images/laser.png"
        )
        if (localStorage.getItem("E_Vie") == null) {
            ennemyAppear();
        }
    </script>
</body>

</html>