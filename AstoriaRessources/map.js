let vaisseau = document.querySelector('#vaisseau');
let moveBy = 10;
var block = 0;

function getRandomInt(max) { // Fonction pour récupéré un nombre aléatoire
    return Math.floor(Math.random() * max);
}

window.addEventListener('load', function () {
    vaisseau.style.position = 'absolute';
    vaisseau.style.transform = 'rotate(0deg)';
    if (localStorage.getItem("Vtop") != null) {
        vaisseau.style.top = localStorage.getItem("Vtop")
        vaisseau.style.left = localStorage.getItem("Vleft")
    } else {
        vaisseau.style.left = 0;
        vaisseau.style.top = 0;
    }

});

window.addEventListener('keydown', function (event) {
    if (block == 0) {
        switch (event.key) {
            case 'ArrowLeft':
                vaisseau.style.left = parseInt(vaisseau.style.left) - moveBy + 'px';
                vaisseau.style.transform = 'rotate(180deg)';
                break;
            case 'ArrowRight':
                vaisseau.style.left = parseInt(vaisseau.style.left) + moveBy + 'px';
                vaisseau.style.transform = 'rotate(0deg)';
                break;
            case 'ArrowUp':
                vaisseau.style.top = parseInt(vaisseau.style.top) - moveBy + 'px';
                vaisseau.style.transform = 'rotate(270deg)';
                break;
            case 'ArrowDown':
                vaisseau.style.top = parseInt(vaisseau.style.top) + moveBy + 'px';
                vaisseau.style.transform = 'rotate(90deg)';
                break;
        }
    }
});


window.addEventListener('keydown', function () {
    if (block == 0) {
        let vaisseauX = window.getComputedStyle(vaisseau).getPropertyValue("left");
        let vaisseauY = window.getComputedStyle(vaisseau).getPropertyValue("top");

        let planet1X = 620 + 'px';
        let planet1Y = 250 + 'px';
        if (planet1X == vaisseauX && planet1Y == vaisseauY) {
            landingVessel(1);
        }
        let planet2X = 1170 + 'px';
        let planet2Y = 140 + 'px';
        if (planet2X == vaisseauX && planet2Y == vaisseauY) {
            landingVessel(2);
        }
        let planet3X = 150 + 'px';
        let planet3Y = 300 + 'px';
        if (planet3X == vaisseauX && planet3Y == vaisseauY) {
            landingVessel(3);
        }
        let planet4X = 300 + 'px';
        let planet4Y = 400 + 'px';
        if (planet4X == vaisseauX && planet4Y == vaisseauY) {
            landingVessel(4);
        }
        let planet5X = 800 + 'px';
        let planet5Y = 120 + 'px';
        if (planet5X == vaisseauX && planet5Y == vaisseauY) {
            landingVessel(5);
        }
        let planet6X = 1150 + 'px';
        let planet6Y = 350 + 'px';
        if (planet6X == vaisseauX && planet6Y == vaisseauY) {
            landingVessel(6);
        }
        let planet7X = 960 + 'px';
        let planet7Y = 230 + 'px';
        if (planet7X == vaisseauX && planet7Y == vaisseauY) {
            landingVessel(7);
        }
        let planet8X = 200 + 'px';
        let planet8Y = 90 + 'px';
        if (planet8X == vaisseauX && planet8Y == vaisseauY) {
            landingVessel(8);
        }
        let planet9X = 470 + 'px';
        let planet9Y = 350 + 'px';
        if (planet9X == vaisseauX && planet9Y == vaisseauY) {
            landingVessel(9);
        }
        let planet10X = 920 + 'px';
        let planet10Y = 470 + 'px';
        if (planet10X == vaisseauX && planet10Y == vaisseauY) {
            landingVessel(10);
        }
        let planet11X = 470 + 'px';
        let planet11Y = 50 + 'px';
        if (planet11X == vaisseauX && planet11Y == vaisseauY) {
            landingVessel(11);
        }
        /*
        console.log(planet8X);
        console.log(vaisseauX);
        console.log(planet8Y);
        console.log(vaisseauY);
        */
    }

});
var Savenum = 0;
function landingVessel(num) {
    if (localStorage.getItem("SaveNum") != num || localStorage.getItem("SaveNum") == null) {
        localStorage.setItem("SaveNum", num)
        block = 1;
        $("#landingPlanet" + num).attr("src", "AstoriaRessources/images/map/landingvert.png");
        //localStorage.setItem("Vtop", planet.num.Y)
        //localStorage.setItem("Vleft", planet + num + X)
        localStorage.setItem("Vtop", vaisseau.style.top)
        localStorage.setItem("Vleft", vaisseau.style.left)
        var myAudio = new Audio('AstoriaRessources/son/load.wav');
        myAudio.play();
        var saveMap = localStorage.getItem("randomimg")
        localStorage.setItem("randomimg", "url(" + "AstoriaRessources/images/fond_" + Math.floor(Math.random() * 8) + ".jpg" + ")")
        while (saveMap == localStorage.getItem("randomimg")) {
            localStorage.setItem("randomimg", "url(" + "AstoriaRessources/images/fond_" + Math.floor(Math.random() * 8) + ".jpg" + ")")
        }
        setTimeout(() => {
            localStorage.removeItem("numEvent");
            localStorage.setItem("first", 0);

            window.location.href = "mainPage.php";
        }, 3500);
    }
}

$(document).ready(function () {
    var myAudio = new Audio('AstoriaRessources/son/map.mp3');
    myAudio.play();
});


