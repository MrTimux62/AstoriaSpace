<link rel='stylesheet' type='text/css' media='screen' href='AstoriaRessources/ath.css'>

<nav class="navbar navbar-light">
  <div class="progress vie ">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success lifejs" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">150hp</div>
  </div>
  <div id="decal">
    <span id="scrap"><img src="AstoriaRessources/images/ecrous.png" alt="scrap" style="cursor: default;"><input id="scrapjs" type="text" placeholder="0" disabled></span>
    <a href="map.php" id="map"><img src="AstoriaRessources/images/galaxy.png" alt="Carte" id="carte"></a>
    <img src="AstoriaRessources/images/Clé.png" alt="Mécano" id="meca">
    <img src="AstoriaRessources/images/Stats.png" alt="Stats" id="stats">
    <img src="AstoriaRessources/images/menu.png" alt="Menu" id="menu">

  </div>
  <div class="progress shield">
    <div class="progress-bar progress-bar-striped progress-bar-animated shieldjs" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">50</div>
  </div>
</nav>
<span> <button class="collapsible btnath fs-4">Equipage ↓</button>
  <div class="content">
    <span class="Equipage0 fs-3"><img src="AstoriaRessources/images/Maurice.png" alt="">Maurice
      <div class="progress-bar progress-bar-striped progress-bar-animated bg-success hp" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">50hp</div>
    </span>
    <span class="Equipage1 fs-3"><img src="AstoriaRessources/images/Bernard.png" alt="">Bernard
      <div class="progress-bar progress-bar-striped progress-bar-animated bg-success hp" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">80hp</div>
    </span>
    <span class="Equipage2 fs-3"><img src="AstoriaRessources/images/Henriette.png" alt="">Henriette
      <div class="progress-bar progress-bar-striped progress-bar-animated bg-success hp" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">20hp</div>
    </span>
    <span class="Equipage3 fs-3"><img src="AstoriaRessources/images/Geraldine.png" alt="">Géraldine
      <div class="progress-bar progress-bar-striped progress-bar-animated bg-success hp" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">10hp</div>
    </span>
    <span class="Equipage4 fs-3"><img src="AstoriaRessources/images/Telqaex.png" alt="">Telqaex
      <div class="progress-bar progress-bar-striped progress-bar-animated bg-success hp" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">120hp</div>
    </span>
  </div>
</span>
<div id="vaisseaux">
  <span><img src="AstoriaRessources/images/bouclier.png" alt="bouclier">
    <div class="progress-bar progress-bar-striped progress-bar-animated b shieldturn" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%">0 Tours</div>
  </span>
  <span><img src="AstoriaRessources/images/moteur.png" alt="moteur">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success hpm enginejs" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">50hp</div>
  </span>
  <span><img src="AstoriaRessources/images/railgun.png" alt="armes">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success hpa weaponjs" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">50hp</div>
  </span>
</div>



<div>
  <button onclick="damage('vie', 20)">Damage</button>
  <button onclick="localStorage.setItem('score', 50)">score +</button>
</div>