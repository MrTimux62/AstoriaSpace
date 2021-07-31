<!DOCTYPE html>
<html lang="fr">
<?php require_once("connect_inc.php") ?>
<?php require_once("head.php") ?>
<link rel="stylesheet" type="text/css" href="AstoriaRessources/map.css">

<body>
    <img src="AstoriaRessources/images/map/mon_vaisseau.png" id="vaisseau">
    <img src="AstoriaRessources/images/map/soleil.png" class="planet" id="planet1"><img src="AstoriaRessources/images/map/landing.png" class="landing" id="landingPlanet1">
    <img src="AstoriaRessources/images/map/lune.png" class="planet" id="planet2"><img src="AstoriaRessources/images/map/landing.png" class="landing" id="landingPlanet2">
    <img src="AstoriaRessources/images/map/jupiter.png" class="planet" id="planet3"><img src="AstoriaRessources/images/map/landing.png" class="landing" id="landingPlanet3">
    <img src="AstoriaRessources/images/map/mars.png" class="planet" id="planet4"><img src="AstoriaRessources/images/map/landing.png" class="landing" id="landingPlanet4">
    <img src="AstoriaRessources/images/map/mercure.png" class="planet" id="planet5"><img src="AstoriaRessources/images/map/landing.png" class="landing" id="landingPlanet5">
    <img src="AstoriaRessources/images/map/neptune.png" class="planet" id="planet6"><img src="AstoriaRessources/images/map/landing.png" class="landing" id="landingPlanet6">
    <img src="AstoriaRessources/images/map/pluton.png" class="planet" id="planet7"><img src="AstoriaRessources/images/map/landing.png" class="landing" id="landingPlanet7">
    <img src="AstoriaRessources/images/map/saturne.png" class="planet" id="planet8"><img src="AstoriaRessources/images/map/landing.png" class="landing" id="landingPlanet8">
    <img src="AstoriaRessources/images/map/terre.png" class="planet" id="planet9"><img src="AstoriaRessources/images/map/landing.png" class="landing" id="landingPlanet9">
    <img src="AstoriaRessources/images/map/uranus.png" class="planet" id="planet10"><img src="AstoriaRessources/images/map/landing.png" class="landing" id="landingPlanet10">
    <img src="AstoriaRessources/images/map/venus.png" class="planet" id="planet11"><img src="AstoriaRessources/images/map/landing.png" class="landing" id="landingPlanet11">
    
<?php require_once("script.php") ?>
<?php require_once("modal.php") ?>
<script src="AstoriaRessources/map.js"></script>
<script>
    $(document).ready(function () {
        if (localStorage.getItem("TutoMap") == null) {
        localStorage.setItem("TutoMap", 1)
        $("#MapTutoModal").modal("show");
    } 
    });
    
</script>


</body>
</html>