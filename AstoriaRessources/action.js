let OverDegats, SelectPart, Esquive, Degats, GiveScrap; // Variables de l'ennemi
var MarchandAudio = new Audio('AstoriaRessources/son/marchand.mp3');
/*
document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
  });

  $(document).keydown(function (event) {
    if (event.keyCode == 123) { // Prevent F12
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
        return false;
    }
});
*/
$(document).ready(function () {
    updateVessel();

    if (localStorage.getItem("vie") <= 0 || localStorage.getItem("equipages") <= 0) {
        $("#SCORE").val(localStorage.getItem("score"))
        $('#GameOverModal').modal({ backdrop: 'static', keyboard: false, });
        $("#GameOverModal").modal("show");
    }
});

if (localStorage.getItem("vieMax") == null || localStorage.getItem("vieMax") == "") {
    setVessel();
}

function lasereffect() {
    $(".laser1").css("display", "block");
    $(".laser2").css("display", "block");
    setTimeout(() => {
        $(".laser1").css("display", "none");
        $(".laser2").css("display", "none");
    }, 300);
}

function smallExplosionEffect() {
    switch (getRandomInt(4)) {
        case 0:
            $(".explo0").css("display", "block");
            setTimeout(() => {
                $(".explo0").css("display", "none");
            }, 1000);
            break;
        case 1:
            $(".explo1").css("display", "block");
            setTimeout(() => {
                $(".explo1").css("display", "none");
            }, 1000);
            break;
        case 2:
            $(".explo2").css("display", "block");
            setTimeout(() => {
                $(".explo2").css("display", "none");
            }, 1000);
            break;
        case 3:
            $(".explo3").css("display", "block");
            setTimeout(() => {
                $(".explo3").css("display", "none");
            }, 1000);
            break;
        default:
            break;
    }
}


function bigExplosionEffect() {
    $(".megaexplo").css("display", "block");
    setTimeout(() => {
        $(".megaexplo").css("display", "none");
        $(".ennemi").css("display", "none");
    }, 1000);
}

function mesmallExplosionEffect() {
    switch (getRandomInt(4)) {
        case 0:
            $(".Meexplo0").css("display", "block");
            setTimeout(() => {
                $(".Meexplo0").css("display", "none");
            }, 1000);
            break;
        case 1:
            $(".Meexplo1").css("display", "block");
            setTimeout(() => {
                $(".Meexplo1").css("display", "none");
            }, 1000);
            break;
        case 2:
            $(".Meexplo2").css("display", "block");
            setTimeout(() => {
                $(".Meexplo2").css("display", "none");
            }, 1000);
            break;
        case 3:
            $(".Meexplo3").css("display", "block");
            setTimeout(() => {
                $(".Meexplo3").css("display", "none");
            }, 1000);
            break;
        default:
            break;
    }
}

function mebigExplosionEffect() {
    $(".Memegaexplo").css("display", "block");
    setTimeout(() => {
        $(".Memegaexplo").css("display", "none");
        $(".vaisseau").css("display", "none");
    }, 1000);
}

function shieldEffect() {
    $(".shieldeffect").css("display", "block");
    setTimeout(() => {
        $(".shieldeffect").css("display", "none");
    }, 500);
}

/**
 * Apparition ennemi
 */
function ennemyAppear() {
    var difficulty = localStorage.getItem("difficulty");
    console.log(localStorage.getItem("difficulty"));
    /*Affichage aléatoire du vaisseau ennemi */
    localStorage.setItem("img_ennemi", "AstoriaRessources/images/Ennemi_" + Math.floor(Math.random() * 5) + ".png")
    document.getElementById('img_ennemi').src = localStorage.getItem("img_ennemi");

    /*Affichege du nom de l'ennemi*/
    localStorage.setItem("url", document.getElementById('img_ennemi').src)
    var url = localStorage.getItem("url"); /*URL de l'image*/
    localStorage.setItem("filename", url.split('/').pop().split('.')[0])
    var filename = localStorage.getItem("filename")/*nom de l'image sans extension*/
    document.getElementById("text_ennemi").innerHTML = (filename + '').charAt(0).toUpperCase() + filename.substr(1); /*Affichage du nom avec premiere lettre en majuscule*/

    console.log("Ennemi Respawn");
    localStorage.setItem("E_Vie", 80 * difficulty + getRandomInt(25) - getRandomInt(15));  // Vie de l'ennemi avec une valeur minimum de 30 * la difficulté + un nombres aléa entre 0 et 25
    localStorage.setItem("E_VieMax", localStorage.getItem("E_Vie"));
    localStorage.setItem("E_Degats", 8 * difficulty + getRandomInt(5) - getRandomInt(5)); // Degats
    localStorage.setItem("E_Esquive", 5 * difficulty + getRandomInt(5) - parseInt(localStorage.getItem("precision"))); // Esquive en pourcentage
    console.log("Ennemi Stats : Vie : " + localStorage.getItem("E_Vie") + " | Degats : " + localStorage.getItem("E_Degats") + " | Esquive : " + localStorage.getItem("E_Esquive"));
    updateEnnemi();
}

function getRandomInt(max) { // Fonction pour récupéré un nombre aléatoire
    return Math.floor(Math.random() * max);
}

$("#setvesselbutton").click(function () {
    var myAudio = new Audio('AstoriaRessources/son/spawn.wav');
    myAudio.play();
    setVessel();
    updateVessel();
});

$("#respawnbutton").click(function () {
    var myAudio = new Audio('AstoriaRessources/son/spawn_ennemi.wav');
    myAudio.play();
    ennemyAppear();
    $(".ennemi").css("display", "block");
});
$(".attackbutton").click(function () {
    turnSystem("attaque");
    attack();
});
$(".escapebutton").click(function () {
    turnSystem("escape");
});
$(".esquivebutton").click(function () {
    var myAudio = new Audio('AstoriaRessources/son/regen.wav');
    myAudio.play();
    localStorage.setItem("esquive", parseInt(localStorage.getItem("esquive")) * 3);
    turnSystem("esquive");
});
$("#attackmebutton").click(function () {
    var myAudio = new Audio('AstoriaRessources/son/laser_ennemi.wav');
    myAudio.play();
    setTimeout(attackMe, 1000)
});

$("#givescrapbutton").click(function () {
    var myAudio = new Audio('AstoriaRessources/son/give.wav');
    myAudio.play();
    localStorage.setItem("scrap", parseInt(localStorage.getItem("scrap")) + 50);
    console.log("SCRAP : " + localStorage.getItem("scrap"));
    updateVessel();
});

$("#repaircoquebutton").click(function () {
    repaircoque();
});
$("#repairweaponbutton").click(function () {
    repairweapon();
});
$("#repairenginebutton").click(function () {
    repairengine();
});

$("#damagelifebutton").click(function () {
    damage("vie", 20);
});
$("#damageweaponbutton").click(function () {
    damage("armes", 20);
});
$("#damageenginebutton").click(function () {
    damage("moteur", 20);
});
$("#damageequipagebutton").click(function () {
    var myAudio = new Audio('AstoriaRessources/son/kill.wav');
    myAudio.play();
    localStorage.setItem("equipages", parseInt(localStorage.getItem("equipages") - 1));
    killequipages();
});

function updateVessel() {
    if (localStorage.getItem("vie") / localStorage.getItem("vieMax") < 0.33) {
        $(".lifejs").removeClass("bg-success")
        $(".lifejs").addClass("bg-danger")
        $(".lifejs").removeClass("bg-warning")
    } else if (localStorage.getItem("vie") / localStorage.getItem("vieMax") < 0.66) {
        $(".lifejs").removeClass("bg-success")
        $(".lifejs").removeClass("bg-danger")
        $(".lifejs").addClass("bg-warning")
    } else {
        $(".lifejs").addClass("bg-success")
        $(".lifejs").removeClass("bg-danger")
        $(".lifejs").removeClass("bg-warning")
    }
    $(".lifejs").text(localStorage.getItem("vie") + "hp")
    $(".lifejs").css("width", (parseInt(localStorage.getItem("vie") / parseInt(localStorage.getItem("vieMax")) * 100) + "%"))
    $(".shieldjs").text(localStorage.getItem("bouclier"))
    $(".shieldjs").css("width", (parseInt(localStorage.getItem("bouclier") / parseInt(localStorage.getItem("bouclierMax")) * 100) + "%"))
    $("#scrapjs").val(localStorage.getItem("scrap"))
    $(".enginejs").text(localStorage.getItem("moteur") + "hp")
    $(".enginejs").css("width", (parseInt(localStorage.getItem("moteur") / parseInt(localStorage.getItem("moteurMax")) * 100) + "%"))
    $(".weaponjs").text(localStorage.getItem("armes") + "hp")
    $(".weaponjs").css("width", (parseInt(localStorage.getItem("armes") / parseInt(localStorage.getItem("armesMax")) * 100) + "%"))
    if (localStorage.getItem("bouclier") <= 0) {
        $(".shieldturn").text(3 - parseInt(localStorage.getItem("bouclierRegen")) + " Tours")
        $(".shieldturn").css("width", parseInt(localStorage.getItem("bouclierRegen")) / 3 * 100 + "%")
    }
    for (let index = 0; index < 5; index++) {
        if (localStorage.getItem("equipage" + index) == 0) {
            $(".Equipage" + index).find("div").removeClass("bg-success");
            $(".Equipage" + index).find("div").removeClass("progress-bar-animated");
            $(".Equipage" + index).find("div").addClass("bg-danger");
            $(".Equipage" + index).find("div").text("Mort");
        } else {
            $(".Equipage" + index).find("div").removeClass("bg-danger");
            $(".Equipage" + index).find("div").addClass("progress-bar-animated");
            $(".Equipage" + index).find("div").addClass("bg-success");
            $(".Equipage" + index).find("div").text("25hp");
        }
    }

}

function updateEnnemi() {
    if (localStorage.getItem("E_Vie") / localStorage.getItem("E_VieMax") < 0.33) {
        $(".E_lifejs").removeClass("bg-success")
        $(".E_lifejs").addClass("bg-danger")
        $(".E_lifejs").removeClass("bg-warning")
    } else if (localStorage.getItem("E_Vie") / localStorage.getItem("E_VieMax") < 0.66) {
        $(".E_lifejs").removeClass("bg-success")
        $(".E_lifejs").removeClass("bg-danger")
        $(".E_lifejs").addClass("bg-warning")
    } else {
        $(".E_lifejs").addClass("bg-success")
        $(".E_lifejs").removeClass("bg-danger")
        $(".E_lifejs").removeClass("bg-warning")
    }
    $(".E_lifejs").text(localStorage.getItem("E_Vie") + "hp")
    $(".E_lifejs").css("width", (parseInt(localStorage.getItem("E_Vie") / parseInt(localStorage.getItem("E_VieMax")) * 100) + "%"))
    if (localStorage.getItem("E_Vie") <= 0) {
        $(".ennemi").css("display", "none");
    }
    document.getElementById('img_ennemi').src = localStorage.getItem("img_ennemi");
    var url = localStorage.getItem("url"); /*URL de l'image*/
    var filename = localStorage.getItem("filename")/*nom de l'image sans extension*/
    document.getElementById("text_ennemi").innerHTML = (filename + '').charAt(0).toUpperCase() + filename.substr(1); /*Affichage du nom avec premiere lettre en majuscule*/
}

function selectRandom() {
    let select = getRandomInt(5);
    if ($(".Equipage" + select).find("div").text() == "Mort") {
        console.log("boom");
        selectRandom();
    } else {
        console.log("boom2");
        selectEquip = select;
    }
    console.log($(".Equipage" + select).find("div").text());
}

let selectEquip;
function killequipages() {
    selectRandom();
    switch (selectEquip) {
        case 0:
            console.log("Case 0");
            if ($(".Equipage0").find("div").text() != "Mort") {
                $(".Equipage0").find("div").removeClass("bg-success");
                $(".Equipage0").find("div").removeClass("progress-bar-animated");
                $(".Equipage0").find("div").addClass("bg-danger");
                $(".Equipage0").find("div").text("Mort");
                localStorage.setItem("equipage0", 0);
            } else {
                killequipages();
            }
            break;
        case 1:
            console.log("Case 1");
            if ($(".Equipage1").find("div").text() != "Mort") {
                $(".Equipage1").find("div").removeClass("bg-success");
                $(".Equipage1").find("div").removeClass("progress-bar-animated");
                $(".Equipage1").find("div").addClass("bg-danger");
                $(".Equipage1").find("div").text("Mort");
                localStorage.setItem("equipage1", 0);
            } else {
                killequipages();
            }
            break;
        case 2:
            console.log("Case 2");
            if ($(".Equipage2").find("div").text() != "Mort") {
                $(".Equipage2").find("div").removeClass("bg-success");
                $(".Equipage2").find("div").removeClass("progress-bar-animated");
                $(".Equipage2").find("div").addClass("bg-danger");
                $(".Equipage2").find("div").text("Mort");
                localStorage.setItem("equipage2", 0);
            } else {
                killequipages();
            }
            break;
        case 3:
            console.log("Case 3");
            if ($(".Equipage3").find("div").text() != "Mort") {
                $(".Equipage3").find("div").removeClass("bg-success");
                $(".Equipage3").find("div").removeClass("progress-bar-animated");
                $(".Equipage3").find("div").addClass("bg-danger");
                $(".Equipage3").find("div").text("Mort");
                localStorage.setItem("equipage3", 0);
            } else {
                killequipages();
            }
            break;
        case 4:
            console.log("Case 4");
            if ($(".Equipage4").find("div").text() != "Mort") {
                $(".Equipage4").find("div").removeClass("bg-success");
                $(".Equipage4").find("div").removeClass("progress-bar-animated");
                $(".Equipage4").find("div").addClass("bg-danger");
                $(".Equipage4").find("div").text("Mort");
                localStorage.setItem("equipage4", 0);
            } else {
                killequipages();
            }
            break;

        default:
            break;
    }


    console.log("Equipages restant : " + localStorage.getItem("equipages"));
    if (localStorage.getItem("equipages") <= 0) {
        if (localStorage.getItem("equipages") <= 0) {
            $("#SCORE").val(localStorage.getItem("score"))
            $('#GameOverModal').modal({ backdrop: 'static', keyboard: false, });
            $("#GameOverModal").modal("show");
        }
        console.log("GAME OVER");
    }
}

function damage(part, val) {
    localStorage.setItem(part, parseInt(localStorage.getItem(part)) - val)
    if (localStorage.getItem(part) <= 0) {
        localStorage.setItem(part, 0);
        console.log("Partie " + part + "cassé");
        var myAudio = new Audio('AstoriaRessources/son/destroy.wav');
        myAudio.play();
    } else {
        var myAudio = new Audio('AstoriaRessources/son/touch.wav');
        myAudio.play();
        console.log("Partie " + part + " etat : " + localStorage.getItem(part));
    }
    updateVessel();
    if (localStorage.getItem("vie") <= 0) {
        $("#SCORE").val(localStorage.getItem("score"))
        $('#GameOverModal').modal({ backdrop: 'static', keyboard: false, });
        $("#GameOverModal").modal("show");
    }
}

function repaircoque() {
    turnSystem("repair")
    console.log("SCRAP ACTUEL : " + localStorage.getItem("scrap"));
    console.log("COUT DE LA REPARATION : 50 SCRAP");
    if (localStorage.getItem("scrap") >= 50) {
        console.log("ACHAT EFFECTUE");
        var myAudio = new Audio('AstoriaRessources/son/repair.wav');
        myAudio.play();
        localStorage.setItem("vie", localStorage.getItem("vieMax"));
        localStorage.setItem("scrap", parseInt(localStorage.getItem("scrap")) - 50);
        updateVessel();
    } else {
        $("#ScrapNon").modal("show")
        console.log("PAS ASSEZ DE SCRAP");
    }
    updateVessel();
}

function repairweapon() {
    turnSystem("repair")
    console.log("SCRAP ACTUEL : " + localStorage.getItem("scrap"));
    console.log("COUT DE LA REPARATION : 25 SCRAP");
    if (localStorage.getItem("scrap") >= 25) {
        console.log("ACHAT EFFECTUE");
        var myAudio = new Audio('AstoriaRessources/son/repair.wav');
        myAudio.play();
        localStorage.setItem("armes", localStorage.getItem("armesMax"));
        localStorage.setItem("scrap", parseInt(localStorage.getItem("scrap")) - 25);
    } else {
        $("#ScrapNon").modal("show")
        console.log("PAS ASSEZ DE SCRAP");
    }
    updateVessel();
}

function repairengine() {
    turnSystem("repair")
    console.log("SCRAP ACTUEL : " + localStorage.getItem("scrap"));
    console.log("COUT DE LA REPARATION : 25 SCRAP");
    if (localStorage.getItem("scrap") >= 25) {
        console.log("ACHAT EFFECTUE");
        var myAudio = new Audio('AstoriaRessources/son/repair.wav');
        myAudio.play();
        localStorage.setItem("moteur", localStorage.getItem("moteurMax"));
        localStorage.setItem("scrap", parseInt(localStorage.getItem("scrap")) - 25);
    } else {
        $("#ScrapNon").modal("show")
        console.log("PAS ASSEZ DE SCRAP");
    }
    updateVessel();
}

/**
 * Définir les valeurs par défauts
 */
function setVessel() {
    //var audio = new Audio('audio_file.mp3'); Son du départ
    //audio.play();
    console.log("Vaisseau Respawn");
    localStorage.setItem("degats", 8);
    localStorage.setItem("vie", 150);
    localStorage.setItem("vieMax", 150);
    localStorage.setItem("esquive", 15);
    localStorage.setItem("bouclier", 50);
    localStorage.setItem("bouclierMax", 50);
    localStorage.setItem("bouclierRegen", 0);
    localStorage.setItem("moteur", 50);
    localStorage.setItem("moteurMax", 50);
    localStorage.setItem("armes", 50);
    localStorage.setItem("armesMax", 50);
    localStorage.setItem("scrap", 0);
    localStorage.setItem("equipages", 5);
    localStorage.setItem("equipage0", 1);
    localStorage.setItem("equipage1", 1);
    localStorage.setItem("equipage2", 1);
    localStorage.setItem("equipage3", 1);
    localStorage.setItem("equipage4", 1);
    localStorage.setItem("precision", 0);
    localStorage.setItem("fuite", 30);
    localStorage.setItem("bonusScrap", 0);
}



/**
 * Attaqué l'ennemi
 */
function attack() {
    if (localStorage.getItem("E_Vie") > 0) {

        if (localStorage.getItem("armes") <= 0) {
            if (getRandomInt(3) == 0) {
                Degats = localStorage.getItem("degats");
            } else {
                $("#notif_V").css("transition", "none")
                $("#notif_V").css("opacity", "1")
                $("#notif_V").text("Enrayé");
                setTimeout(() => {
                    $("#notif_V").css("transition", "opacity 2s")
                    $("#notif_V").css("opacity", "0")
                }, 1000);
                var myAudio = new Audio('AstoriaRessources/son/enraye.wav');
                myAudio.play();
                Degats = 0;
                console.log("Armes endommagés !!! ATTAQUE RATE");
            }

        } else {
            Degats = localStorage.getItem("degats");
        }
        if (Degats != 0) {
            var myAudio = new Audio('AstoriaRessources/son/laser.wav');
            myAudio.play();
            lasereffect();
            setTimeout(() => {
                if (getRandomInt(100) > localStorage.getItem("E_Esquive")) {
                    Degats = (Degats - getRandomInt(5) + getRandomInt(5))
                    localStorage.setItem("E_Vie", parseInt(localStorage.getItem("E_Vie")) - Degats);
                    $("#notif_E").css("transition", "none")
                    $("#notif_E").css("opacity", "1")
                    $("#notif_E").text("-" + Degats);
                    setTimeout(() => {
                        $("#notif_E").css("transition", "opacity 2s")
                        $("#notif_E").css("opacity", "0")
                    }, 1000);

                    if (localStorage.getItem("E_Vie") <= 0) {
                        localStorage.setItem("E_Vie", 0);
                        console.log("Ennemi Mort !");
                        bigExplosionEffect();
                        var myAudio = new Audio('AstoriaRessources/son/destroy.wav');
                        myAudio.play();
                    } else {
                        var myAudio = new Audio('AstoriaRessources/son/touch.wav');
                        myAudio.play();
                    }
                    smallExplosionEffect();
                    console.log("Vie Restante Ennemi : " + localStorage.getItem("E_Vie"));
                } else {
                    $("#notif_E").css("transition", "none")
                    $("#notif_E").css("opacity", "1")
                    $("#notif_E").text("Miss");
                    setTimeout(() => {
                        $("#notif_E").css("transition", "opacity 2s")
                        $("#notif_E").css("opacity", "0")
                    }, 1000);
                    console.log("Esquive");
                    var myAudio = new Audio('AstoriaRessources/son/miss.wav');
                    myAudio.play();
                }
                updateEnnemi();
            }, 1000);
        }

    }

}

/**
 * Sélectionner une partie du vaisseau
 */
function parts() {
    SelectPart = getRandomInt(3);
    switch (SelectPart) {
        case 0:
            SelectPart = "vie"
            break;
        case 1:
            SelectPart = "armes"
            break;
        case 2:
            SelectPart = "moteur"
            break;
        default:
            break;
    }
    if (localStorage.getItem(SelectPart) <= 0) {
        parts();
    }
}

/**
 * Se Faire attaqué
 */
function attackMe() {
    var degats;
    if (localStorage.getItem("moteur") <= 0) {
        Esquive = 0;
        console.log("Vous n'avez plus de moteur !!! ESQUIVE IMPOSSIBLE");
    } else {
        console.log(localStorage.getItem("esquive"));
        $("#notif_V").css("transition", "none")
        $("#notif_V").css("opacity", "1")
        $("#notif_V").text("Miss");
        setTimeout(() => {
            $("#notif_V").css("transition", "opacity 2s")
            $("#notif_V").css("opacity", "0")
        }, 1000);
        Esquive = localStorage.getItem("esquive")
    }
    if (getRandomInt(100) > localStorage.getItem("esquive")) {
        if (localStorage.getItem("bouclier") > 0) {
            shieldEffect();
            degats = (localStorage.getItem("E_Degats") - getRandomInt(5) + getRandomInt(5))
            localStorage.setItem("bouclier", localStorage.getItem("bouclier") - degats);
            $("#notif_V").css("transition", "none")
            $("#notif_V").css("opacity", "1")
            $("#notif_V").text("-" + degats);
            setTimeout(() => {
                $("#notif_V").css("transition", "opacity 2s")
                $("#notif_V").css("opacity", "0")
            }, 1000);
            var myAudio = new Audio('AstoriaRessources/son/shield.wav');
            myAudio.play();
            if (localStorage.getItem("bouclier") <= 0) {
                OverDegats = Math.abs(localStorage.getItem("bouclier"));
                localStorage.setItem("bouclier", 0);
                parts();
                localStorage.setItem(SelectPart, localStorage.getItem(SelectPart) - OverDegats);
                console.log(SelectPart + " Abimé");
                if (localStorage.getItem(SelectPart) <= 0) {
                    mesmallExplosionEffect();
                    localStorage.getItem(SelectPart) = 0;
                    var myAudio = new Audio('AstoriaRessources/son/destroy.wav');
                    myAudio.play();
                } else {
                    mesmallExplosionEffect();
                    var myAudio = new Audio('AstoriaRessources/son/touch.wav');
                    myAudio.play();
                }
                console.log("Vie : " + localStorage.getItem("vie") + " | Armes : " + localStorage.getItem("armes") + " | Moteur : " + localStorage.getItem("moteur"));
            }
            console.log("Bouclier Restant : " + localStorage.getItem("bouclier"));
        } else {
            parts();
            degats = (localStorage.getItem("E_Degats") - getRandomInt(5) + getRandomInt(5))
            localStorage.setItem(SelectPart, localStorage.getItem(SelectPart) - degats);
            $("#notif_V").css("transition", "none")
            $("#notif_V").css("opacity", "1")
            $("#notif_V").text("-" + degats);
            setTimeout(() => {
                $("#notif_V").css("transition", "opacity 2s")
                $("#notif_V").css("opacity", "0")
            }, 1000);
            console.log(SelectPart + " Abimé");
            mesmallExplosionEffect();
            if (localStorage.getItem(SelectPart) <= 0) {
                localStorage.setItem(SelectPart, 0);
                console.log(SelectPart + " Détruite !");
                var myAudio = new Audio('AstoriaRessources/son/destroy.wav');
                myAudio.play();
            } else {
                var myAudio = new Audio('AstoriaRessources/son/touch.wav');
                myAudio.play();
            }
            console.log("Vie : " + localStorage.getItem("vie") + " | Armes : " + localStorage.getItem("armes") + " | Moteur : " + localStorage.getItem("moteur"));
        }
    } else {
        console.log("Esquive");
        var myAudio = new Audio('AstoriaRessources/son/miss.wav');
        myAudio.play();
    }
    if (localStorage.getItem("vie") <= 0) {
        mebigExplosionEffect();
        var myAudio = new Audio('AstoriaRessources/son/destroy.wav');
        myAudio.play();
        console.log("GAME OVER");
        $("#SCORE").val(localStorage.getItem("score"))
        $('#GameOverModal').modal({ backdrop: 'static', keyboard: false, });
        $("#GameOverModal").modal("show");
    }
    updateVessel();
}

$("#meca").click(function () {
    $('#MecanoModal').modal('toggle');
});

$("#menu").click(function () {
    $('#MenuModal').modal('toggle');
});

$("#startEvent").click(function () {
    $('#EventModal').modal({ backdrop: 'static', keyboard: false, });
    $('#EventModal').modal('toggle');
});
$("#startMarchand").click(function () {
    $('#MarchandModal').modal('toggle');
});
$("#stats").click(function () {
    $(".degatstats").text("Degats : " + localStorage.getItem("degats"))
    $(".pvstats").text("PV Max : " + localStorage.getItem("vieMax") + "hp")
    $(".bouclierstats").text("Bouclier Max : " + localStorage.getItem("bouclierMax"))
    $(".esquivestats").text("Esquive : " + localStorage.getItem("esquive"))
    $(".precisionstats").text("Precision : " + localStorage.getItem("precision"))
    $('#StatsModal').modal('toggle');
});

function stopMission() {
    localStorage.clear()
    window.location.href = "index.php";
}

function normalMode() {
    window.location.href = "mainPage.php";
}
function combatMode() {
    window.location.href = "attackMode.php";
}

function upgradeweapon() {
    MarchandAudio.pause();
    if (localStorage.getItem("scrap") >= 100) {
        var myAudio = new Audio('AstoriaRessources/son/give.wav');
        myAudio.play();
        localStorage.setItem("scrap", parseInt(localStorage.getItem("scrap")) - 100)
        localStorage.setItem("degats", parseInt(localStorage.getItem("degats")) + (getRandomInt(4) + 3));
        updateVessel();
    } else {
        $("#ScrapNon").modal("show")
    }

}
function upgradelife() {
    MarchandAudio.pause();
    if (localStorage.getItem("scrap") >= 50) {
        var myAudio = new Audio('AstoriaRessources/son/give.wav');
        myAudio.play();
        localStorage.setItem("scrap", parseInt(localStorage.getItem("scrap")) - 50)
        localStorage.setItem("vieMax", parseInt(localStorage.getItem("vieMax")) + 25);
        localStorage.setItem("vie", parseInt(localStorage.getItem("vie")) + 25);
        updateVessel();
    } else {
        $("#ScrapNon").modal("show")
    }

}
function upgradescrapBonus() {
    MarchandAudio.pause();
    if (localStorage.getItem("scrap") >= 150) {
        var myAudio = new Audio('AstoriaRessources/son/give.wav');
        myAudio.play();
        localStorage.setItem("scrap", parseInt(localStorage.getItem("scrap")) - 150)
        localStorage.setItem("scrapBonus", parseInt(localStorage.getItem("scrapBonus")) + 10);
        updateVessel();
    } else {
        $("#ScrapNon").modal("show")
    }

}
function upgradeweaponhp() {
    MarchandAudio.pause();
    if (localStorage.getItem("scrap") >= 50) {
        var myAudio = new Audio('AstoriaRessources/son/give.wav');
        myAudio.play();
        localStorage.setItem("scrap", parseInt(localStorage.getItem("scrap")) - 50)
        localStorage.setItem("armesMax", parseInt(localStorage.getItem("armesMax")) + 25);
        localStorage.setItem("armes", parseInt(localStorage.getItem("armes")) + 25);
        updateVessel();
    } else {
        $("#ScrapNon").modal("show")
    }

}
function upgradeenginehp() {
    MarchandAudio.pause();
    if (localStorage.getItem("scrap") >= 50) {
        var myAudio = new Audio('AstoriaRessources/son/give.wav');
        myAudio.play();
        localStorage.setItem("scrap", parseInt(localStorage.getItem("scrap")) - 50)
        localStorage.setItem("moteurMax", parseInt(localStorage.getItem("moteurMax")) + 25);
        localStorage.setItem("moteur", parseInt(localStorage.getItem("moteur")) + 25);
        updateVessel();
    } else {
        $("#ScrapNon").modal("show")
    }

}
function upgradeshield() {
    MarchandAudio.pause();
    if (localStorage.getItem("scrap") >= 50) {
        var myAudio = new Audio('AstoriaRessources/son/give.wav');
        myAudio.play();
        localStorage.setItem("scrap", parseInt(localStorage.getItem("scrap")) - 50)
        localStorage.setItem("bouclierMax", parseInt(localStorage.getItem("bouclierMax")) + 25);
        localStorage.setItem("bouclier", parseInt(localStorage.getItem("bouclier")) + 25);
        updateVessel();
    } else {
        $("#ScrapNon").modal("show")
    }

}
function upgradeprecision() {
    MarchandAudio.pause();
    if (localStorage.getItem("scrap") >= 45) {
        var myAudio = new Audio('AstoriaRessources/son/give.wav');
        myAudio.play();
        localStorage.setItem("precision", parseInt(localStorage.getItem("precision")) + 5)
        localStorage.setItem("scrap", parseInt(localStorage.getItem("scrap")) - 45)
        updateVessel();
    } else {
        $("#ScrapNon").modal("show")
    }

}
function upgradefuite() {
    MarchandAudio.pause();
    if (localStorage.getItem("scrap") >= 75) {
        var myAudio = new Audio('AstoriaRessources/son/give.wav');
        myAudio.play();
        localStorage.setItem("fuite", parseInt(localStorage.getItem("fuite")) + 5)
        localStorage.setItem("scrap", parseInt(localStorage.getItem("scrap")) - 75)
        updateVessel();
    } else {
        $("#ScrapNon").modal("show")
    }

}
function rezEquipage() {
    MarchandAudio.pause();
    console.log(localStorage.getItem("equipages"));
    if (localStorage.getItem("equipages") < 5) {
        if (localStorage.getItem("scrap") >= 125) {
            var myAudio = new Audio('AstoriaRessources/son/give.wav');
            myAudio.play();
            localStorage.setItem("equipages", parseInt(localStorage.getItem("equipages")) + 1)
            for (let index = 0; index < 5; index++) {
                if (localStorage.getItem("equipage" + index) == 0) {
                    localStorage.setItem("equipage" + index, 1);
                    break;
                }
            }
            localStorage.setItem("scrap", parseInt(localStorage.getItem("scrap")) - 125)
            updateVessel();
        } else {
            $("#ScrapNon").modal("show")
        }
    }

}

function turnSystem(type) {
    if (localStorage.getItem("E_Vie") != null && localStorage.getItem("E_Vie") != 0) {
        console.log(localStorage.getItem("E_Vie"));
        $(".attackbutton").prop('disabled', true);
        $(".esquivebutton").prop('disabled', true);
        $(".escapebutton").prop('disabled', true);
        if (type == "escape" && getRandomInt(100) < parseInt(localStorage.getItem("fuite"))) {
            var myAudio = new Audio('AstoriaRessources/son/load.wav');
            myAudio.play();
            setTimeout(() => {
                $("#EscapeModal").modal("show");
            }, 3500);


        } else {
            if (type == "escape") {
                var myAudio = new Audio('AstoriaRessources/son/loseescape.wav');
                myAudio.play();
                $("#notif_V").css("transition", "none")
                $("#notif_V").css("opacity", "1")
                $("#notif_V").text("fuite échoué...");
                setTimeout(() => {
                    $("#notif_V").css("transition", "opacity 2s")
                    $("#notif_V").css("opacity", "0")
                }, 1000);
            }
            setTimeout(() => {
                if (localStorage.getItem("E_Vie") > 0) {
                    var myAudio = new Audio('AstoriaRessources/son/laser_ennemi.wav');
                    myAudio.play();
                    setTimeout(attackMe, 1000)
                    setTimeout(() => {
                        $(".attackbutton").prop('disabled', false);
                        $(".esquivebutton").prop('disabled', false);
                        $(".escapebutton").prop('disabled', false);
                        if (localStorage.getItem("bouclier") <= 0) {
                            localStorage.setItem("bouclierRegen", parseInt(localStorage.getItem("bouclierRegen")) + 1);
                            if (localStorage.getItem("bouclierRegen") >= 3) {
                                localStorage.setItem("bouclier", parseInt(localStorage.getItem("bouclierMax")))
                                localStorage.setItem("bouclierRegen", 0);
                                var myAudio = new Audio('AstoriaRessources/son/regen.wav');
                                myAudio.play();
                                updateVessel();
                            }
                            $(".shieldturn").text(3 - parseInt(localStorage.getItem("bouclierRegen")) + " Tours")
                            $(".shieldturn").css("width", parseInt(localStorage.getItem("bouclierRegen")) / 3 * 100 + "%")
                        }

                        if (type == "esquive") {
                            localStorage.setItem("esquive", parseInt(localStorage.getItem("esquive")) / 3);
                        }
                    }, 1500);
                } else {
                    var myAudio = new Audio('AstoriaRessources/son/win.wav');
                    myAudio.play();
                    let winscrap = getRandomInt(20) + 30 + parseInt(localStorage.getItem("bonusScrap")) + (10 * localStorage.getItem("difficulty"))
                    $("#winscrap").text(winscrap + " Scraps")
                    localStorage.setItem("scrap", parseInt(localStorage.getItem("scrap")) + winscrap);
                    localStorage.setItem("bouclier", parseInt(localStorage.getItem("bouclierMax")));
                    $("#WinModal").modal("show");
                    localStorage.setItem("score", parseInt(localStorage.getItem("score")) + 25)
                    localStorage.removeItem("E_Vie");
                    updateVessel();
                }

            }, 2500);
        }
    }
}

function valid() {
    if ($("#musique").val() != null && $("#musique").val() != "") {
        console.log($("#musique").val());
        var myAudio = new Audio('AstoriaRessources/son/intro.mp3');
        myAudio.play();
        localStorage.setItem("pseudo", $("#musique").val())
        $("#EventModal").modal("hide");
    }
}

function escape() {
    if (getRandomInt(100) < 30) {
        $("#EscapeModal").modal("show");
    } else {
        turnSystem();
    }
}

function startEvent() {
    $("#EventPlanet" + localStorage.getItem("numEvent") + "Modal").modal({ backdrop: 'static', keyboard: false, });
    $("#EventPlanet" + localStorage.getItem("numEvent") + "Modal").modal("show")
}
function event1() {
    localStorage.setItem("first", 1);
    if (getRandomInt(100) < 50) {
        event14()
    } else {
        combatMode()
    }
}
function event1_1() {
    localStorage.setItem("first", 1);
}
function event2() {
    localStorage.setItem("score", parseInt(localStorage.getItem("score")) + 10)
    localStorage.setItem("degats", parseInt(localStorage.getItem("degats")) + (getRandomInt(4) + 3))
    var myAudio = new Audio('AstoriaRessources/son/upgrade.mp3');
    myAudio.play();
    $("#Degats").modal("show");
    localStorage.setItem("first", 1);
}
function event2_1() {
    localStorage.setItem("first", 1);
}
function event3() {
    localStorage.setItem("score", parseInt(localStorage.getItem("score")) + 10)
    localStorage.setItem("first", 1);
    damage("vie", (getRandomInt(10) + 10));
}
function event4() {
    localStorage.setItem("score", parseInt(localStorage.getItem("score")) + 10)
    localStorage.setItem("first", 1);
    $("#ArmesNon").modal("show");
    damage("armes", (getRandomInt(10) + 10));
}
function event5() {
    localStorage.setItem("score", parseInt(localStorage.getItem("score")) + 10)
    localStorage.setItem("first", 1);
    if (getRandomInt(100) < 75) {
        var myAudio = new Audio('AstoriaRessources/son/upgrade.mp3');
        myAudio.play();
        localStorage.setItem("degats", parseInt(localStorage.getItem("degats")) + getRandomInt(5) + 3)
        $("#Degats").modal("show");
    } else {
        var myAudio = new Audio('AstoriaRessources/son/kill.wav');
        myAudio.play();
        localStorage.setItem("equipages", parseInt(localStorage.getItem("equipages") - 1));
        killequipages();
        $("#EquipageDead").modal("show");
    }
}
function event5_1() {
    localStorage.setItem("first", 1);
}
function event6() {
    localStorage.setItem("score", parseInt(localStorage.getItem("score")) + 10)
    localStorage.setItem("first", 1);
    if (getRandomInt(100) < 75) {
        var myAudio = new Audio('AstoriaRessources/son/upgrade.mp3');
        myAudio.play();
        localStorage.setItem("bouclierMax", parseInt(localStorage.getItem("bouclierMax")) + 25)
        localStorage.setItem("bouclier", parseInt(localStorage.getItem("bouclier")) + 25)
        $("#Bouclier").modal("show");
    } else {
        damage("bouclier", (getRandomInt(10) + 10))
        //localStorage.setItem("bouclier", parseInt(localStorage.getItem("bouclier")) - (getRandomInt(10) + 10))
        $("#BouclierNon").modal("show");
    }
    updateVessel();
}
function event6_1() {
    localStorage.setItem("first", 1);
}
function event7() {
    localStorage.setItem("first", 1);
    combatMode();
}
function event7_1() {
    localStorage.setItem("first", 1);
}
function event8() {
    localStorage.setItem("first", 1);
}
function event8_1() {
    localStorage.setItem("score", parseInt(localStorage.getItem("score")) + 10)
    localStorage.setItem("first", 1);
    if (getRandomInt(100) < 60) {
        localStorage.setItem("esquive", parseInt(localStorage.getItem("esquive")) + 5);
        var myAudio = new Audio('AstoriaRessources/son/upgrade.mp3');
        myAudio.play();
        $("#Pilote").modal("show");
    } else {
        var myAudio = new Audio('AstoriaRessources/son/kill.wav');
        myAudio.play();
        localStorage.setItem("equipages", parseInt(localStorage.getItem("equipages") - 1));
        killequipages();
        $("#EquipageDead").modal("show");
    }

}
function event9() {
    localStorage.setItem("score", parseInt(localStorage.getItem("score")) + 10)
    localStorage.setItem("first", 1);
    if (getRandomInt(100) < 70) {
        var myAudio = new Audio('AstoriaRessources/son/win.wav');
        myAudio.play();
        let winscrap = getRandomInt(20) + 15 + parseInt(localStorage.getItem("bonusScrap")) + (10 * localStorage.getItem("difficulty"))
        $("#winscrap").text(winscrap + " Scraps")
        localStorage.setItem("scrap", parseInt(localStorage.getItem("scrap")) + winscrap);
        localStorage.setItem("bouclier", parseInt(localStorage.getItem("bouclierMax")));
        $("#WinModal").modal("show");
        updateVessel();
    } else {
        damage("vie", getRandomInt(20) + 10)
    }
}
function event9_1() {
    localStorage.setItem("first", 1);
}
function event10() {
    localStorage.setItem("first", 1);
    combatMode();
}
function event11() {
    localStorage.setItem("first", 1);
    combatMode();
}
function event11_1() {
    localStorage.setItem("first", 1);
}
function event12() {
    localStorage.setItem("first", 1);
    combatMode();
}
function event12_1() {
    localStorage.setItem("score", parseInt(localStorage.getItem("score")) + 10)
    localStorage.setItem("first", 1);
    var myAudio = new Audio('AstoriaRessources/son/win.wav');
    myAudio.play();
    let winscrap = getRandomInt(15) + 10 + parseInt(localStorage.getItem("bonusScrap")) + (10 * localStorage.getItem("difficulty"))
    $("#winscrap").text(winscrap + " Scraps")
    localStorage.setItem("scrap", parseInt(localStorage.getItem("scrap")) + winscrap);
    localStorage.setItem("bouclier", parseInt(localStorage.getItem("bouclierMax")));
    $("#WinModal").modal("show");
    updateVessel();
}
function event13() {
    localStorage.setItem("score", parseInt(localStorage.getItem("score")) + 10)
    localStorage.setItem("first", 1);
    if (getRandomInt(100) < 60) {
        $("#Lumiere").modal("show");
    } else {
        var myAudio = new Audio('AstoriaRessources/son/kill.wav');
        myAudio.play();
        localStorage.setItem("equipages", parseInt(localStorage.getItem("equipages") - 1));
        killequipages();
        $("#EquipageDead").modal("show");
    }
}

function event14() {
    localStorage.setItem("first", 1);
    openMarchand();
}

function openMarchand() {
    MarchandAudio.play();
    $('#MarchandModal' + (getRandomInt(3) + 1)).modal('toggle');
}