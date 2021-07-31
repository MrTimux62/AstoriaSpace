<html>
<?php require_once("connect_inc.php") ?>
<?php require_once("head.php") ?>
<link rel='stylesheet' type='text/css' media='screen' href='AstoriaRessources/vaisseau.css'>

<body>
    <?php require_once("ath.php") ?>
    <div id="mon_vaisseau">
        <img src="AstoriaRessources/images/mon_vaisseau.png" alt="non trouvé" class="vaisseau2">
    </div>
    <?php require_once("script.php") ?>
    <?php require_once("modal.php") ?>
    <script>
        var soundplay = 0
        $(document.body).hover(function() {
            if (soundplay == 0) {
                soundplay = 1
                var myAudio = new Audio('AstoriaRessources/son/normal.mp3');
                myAudio.loop = true
                myAudio.play();
            }
        });
        document.body.style.backgroundImage = localStorage.getItem("randomimg");
        localStorage.setItem("bouclier", parseInt(localStorage.getItem("bouclierMax")));
        $(document).ready(function() {
            if (localStorage.getItem("tutomain") == 1) {
                $("#IntroTutoModal").modal("show");
                localStorage.setItem("tutomain", 0);
            }
            if (localStorage.getItem("numEvent") != null && localStorage.getItem("first") != 1) {
                startEvent();
            }
            if (localStorage.getItem("numEvent") == null && localStorage.getItem("first") != 1) {
                var event = getRandomInt(13) + 1;
                localStorage.setItem("difficultyturn", parseInt(localStorage.getItem("difficultyturn")) + 1)
                if (localStorage.getItem("difficultyturn") >= 15) {
                    localStorage.setItem("difficulty", parseInt(localStorage.getItem("difficulty")) + 1)
                    localStorage.setItem("difficultyturn", 0);
                }
                if (localStorage.getItem("savenumEvent") != null) {
                    while (event == localStorage.getItem("savenumEvent")) {
                        event = getRandomInt(13) + 1;
                    }
                }
                localStorage.setItem("numEvent", event);
                localStorage.setItem("savenumEvent", localStorage.getItem("numEvent"));
                if (event != 14) {
                    localStorage.setItem("eventturn", (parseInt(localStorage.getItem("eventturn")) + 1))
                }
                if (localStorage.getItem("eventturn") >= 4) {
                    localStorage.setItem("numEvent", 14);
                    localStorage.setItem("savenumEvent", localStorage.getItem("numEvent"));
                    localStorage.setItem("eventturn", 0);
                }
                console.log(localStorage.getItem("eventturn"));
                startEvent();
            }
        });
    </script>
</body>

</html>