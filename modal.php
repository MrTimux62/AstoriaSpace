<div class="modal fade" id="MecanoModal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Que voulez-vous réparer ?
            </div>
            <div class="modal-footer">
                <div class="mx-auto">
                    <button id="modal-button" type="button" onclick="repaircoque();" class="btn btn-success mx-auto" data-bs-dismiss="modal">Coque</button>
                    <p>50</p>
                </div>
                <div class="mx-auto">
                    <button id="modal-button2" type="button" onclick="repairweapon();" class="btn btn-success mx-auto" data-bs-dismiss="modal">Armes</button>
                    <p>25</p>
                </div>
                <div class="mx-auto">
                    <button id="modal-button2" type="button" onclick="repairengine();" class="btn btn-success mx-auto" data-bs-dismiss="modal">Moteur</button>
                    <p>25</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="MenuModal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Abandonner la mission ?
            </div>
            <div class="modal-footer">
                <button id="modal-button" type="button" onclick="stopMission();" class="btn btn-danger mx-auto">Oui</button>
                <button id="modal-button2" type="button" class="btn btn-success mx-auto" data-bs-dismiss="modal">Non</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="MarchandModal1" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Que voulez-vous acheter ?
            </div>
            <div class="modal-footer">
                <div class="mx-auto border-right">
                    <img src="AstoriaRessources/images/railgunUp.png" alt="railgunUp">
                    <button id="modal-button" type="button" onclick="upgradeweapon();" class="btn btn-success mx-auto" data-bs-dismiss="modal">Acheter</button>
                    <p>+3-6 Dégâts</p>
                    <p>100<img src="AstoriaRessources/images/ecrous.png"></p>
                </div>
                <div class="mx-auto">
                    <img src="AstoriaRessources/images/mon_vaisseau.png" alt="mon_vaisseau">
                    <button id="modal-button2" type="button" onclick="upgradelife();" class="btn btn-success mx-auto" data-bs-dismiss="modal">Acheter</button>
                    <p>+25 HP</p>
                    <p>50<img src="AstoriaRessources/images/ecrous.png"></p>
                </div>
                <div class="mx-auto">
                    <img src="AstoriaRessources/images/shieldEffectHp+.png" alt="shieldEffectUp">
                    <button id="modal-button2" type="button" onclick="upgradeshield();" class="btn btn-success mx-auto" data-bs-dismiss="modal">Acheter</button>
                    <p>+25</p>
                    <p>50<img src="AstoriaRessources/images/ecrous.png"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="MarchandModal2" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Que voulez-vous acheter ?
            </div>
            <div class="modal-footer">
                <div class="mx-auto border-right">
                    <img src="AstoriaRessources/images/railgunHp+.png" alt="railgunUp">
                    <button id="modal-button" type="button" onclick="upgradeweaponhp();" class="btn btn-success mx-auto" data-bs-dismiss="modal">Acheter</button>
                    <p>+25hp</p>
                    <p>50<img src="AstoriaRessources/images/ecrous.png"></p>
                </div>
                <div class="mx-auto">
                    <img src="AstoriaRessources/images/cible.png" alt="cible">
                    <button id="modal-button2" type="button" onclick="upgradeprecision();" class="btn btn-success mx-auto" data-bs-dismiss="modal">Acheter</button>
                    <p>Tir plus précis</p>
                    <p>45<img src="AstoriaRessources/images/ecrous.png"></p>
                </div>
                <div class="mx-auto">
                    <img src="AstoriaRessources/images/ecrousUp.png" alt="cible">
                    <button id="modal-button2" type="button" onclick="upgradescrapBonus();" class="btn btn-success mx-auto" data-bs-dismiss="modal">Acheter</button>
                    <p>Gain de Scrap accrue</p>
                    <p>150<img src="AstoriaRessources/images/ecrous.png"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="MarchandModal3" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Que voulez-vous acheter ?
            </div>
            <div class="modal-footer">
                <div class="mx-auto border-right">
                    <img src="AstoriaRessources/images/moteurHp+.png" alt="engineUp">
                    <button id="modal-button" type="button" onclick="upgradeenginehp();" class="btn btn-success mx-auto" data-bs-dismiss="modal">Acheter</button>
                    <p>+25hp</p>
                    <p>50<img src="AstoriaRessources/images/ecrous.png"></p>
                </div>
                <div class="mx-auto">
                    <img src="AstoriaRessources/images/rez.png" alt="rez">
                    <button id="modal-button2" type="button" onclick="rezEquipage();" class="btn btn-success mx-auto" data-bs-dismiss="modal">Acheter</button>
                    <p>+1 Equipage</p>
                    <p>125<img src="AstoriaRessources/images/ecrous.png"></p>
                </div>
                <div class="mx-auto">
                    <img src="AstoriaRessources/images/mon_vaisseauUp.png" alt="mon_vaisseauUp">
                    <button id="modal-button2" type="button" onclick="upgradefuite();" class="btn btn-success mx-auto" data-bs-dismiss="modal">Bouclier</button>
                    <p>+Chance Fuite</p>
                    <p>75<img src="AstoriaRessources/images/ecrous.png"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="StatsModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Stats
            </div>
            <div class="modal-footer">
                <p class="mx-auto degatstats">Dégâts : 5</p><br>
                <p class="mx-5 pvstats">PV Max : 150hp</p><br>
                <p class="mx-5 bouclierstats">Bouclier Max : 50</p><br>
                <p class="mx-5 esquivestats">Esquive : 50</p>
                <p class="mx-5 precisionstats">Precision : 50</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="GameOverModal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center">
        <div class="modal-content fs-1">
            <form action="traitement_score.php" method="post">
                <div class="modal-body modalimg">
                    <p class="mb-0" style="font-size : 200% ;">GAME OVER</p><br>
                    <label for="SCORE">Score :</label>
                    <input id="SCORE" name="score" readonly></input>
                </div>
                <div class="modal-footer">
                    <input id="modal-button" type="submit" class="btn btn-danger mx-auto fs-3" value="MENU"></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="WinModal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Scraps gagné !
                <p id="winscrap">10 Scraps</p>
            </div>
            <div class="modal-footer">
                <button id="modal-button" onclick="normalMode();" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">Continuer</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="EscapeModal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Vous vous êtes enfui
            </div>
            <div class="modal-footer">
                <button id="modal-button" onclick="normalMode();" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">Continuer</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="MapTutoModal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center">
        <div class="modal-content fs-5">
            <div class="modal-body modalimg">

                Voici la carte, elle est belle hein ?

                Pour te déplacer, rien de plus simple, utilises les flêches du clavier et la magie opère.

                Pour atterrir sur une planéte, il te suffit de te diriger vers elle
                <img src="AstoriaRessources/images/map/landing.png" alt="" style="width: 50px; height: 50px">
                Et tu atteindras ta destination.
                Facile hein ?

                Par contre, fais juste attention à ce que tu pourrais y croiser, il y a des fous un peu partout non ?

                A toi de jouer Soldat!
            </div>
            <div class="modal-footer">
                <button id="modal-button" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="CombatTutoModal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-5">
            <div class="modal-body modalimg">

                Attention un ennemi sauvage est apparu !!

                C'est un combat en tour par tour, tu as la priorité bien sur, le joueur est ROI !
                Il te suffit d'appuyer sur attaquer et d'attendre la riposte.
                <button type="button" class="btn btn-danger"><strong>ATTAQUER</strong></button>

                Voici quelques astuces pour t'en sortir en combat:

                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success lifejs" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">150hp</div>
                Voici la barre de vie de ton Vaisseau, fais en sorte qu'elle reste au-dessus de 0 et que celle de l'ennemi tombe à 0 et tu auras gagné.

                <div class="progress-bar progress-bar-striped progress-bar-animated shieldjs" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">50</div>
                Voici la barre de Shield, c'est par là que l'ennemi va commencer à attaquer,si elle tombe à 0 l'ennemi pourras se mettre à attaquer les autres parties de ton Vaisseau.
                Mais ne t'en fais pas, si ton bouclier est arrivé à 0, il te suffit d'attendre 3 tours et il sera de retour pour jouer des mauvais tours.
                <img src="AstoriaRessources/images/bouclier.png" alt="bouclier" style="width: 50px; height: 50px;">
                <br>
                <img src="AstoriaRessources/images/moteur.png" alt="moteur" style="width: 50px; height: 50px;">
                Voici ton moteur, fais attention, si il est détruit, tes chances d'esquives seront réduites à néant.
                <br>
                <img src="AstoriaRessources/images/railgun.png" alt="armes" style="width: 50px; height: 50px;">
                Voici tes armes, si elles sont détruites, il y aura une légère chance qu'elles s'enrayent mais pas de panique, tu pourras quand même te défendre.
                <br>
                <button type="button" class="btn btn-success"><strong>ESQUIVE (x3)</strong></button>
                Tu peux aussi faire en sorte de doubler ton esquive, car oui tu peux rater ton tir ça arrive à tout le monde, mais l'ennemi aussi peut rater le sien et ça c'est cool.
                <br>
                <button type="button" class="btn btn-warning"><strong>FUIR (30%)</strong></button>
                Ou alors tu peux essayer de fuir la queue entre les jambes.

                Bon courage Soldat, et que la Force soit avec toi.
            </div>
            <div class="modal-footer">
                <button id="modal-button" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="EventPlanet1Modal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Vous percevez un message crypté provenant d'une planète voisine
            </div>
            <div class="modal-footer">
                <button id="modal-button" onclick="event1();" type="button" class="btn btn-danger mx-auto event1" data-bs-dismiss="modal">Y aller</button>
                <button id="modal-button" onclick="event1_1();" type="button" class="btn btn-danger mx-auto event1" data-bs-dismiss="modal">Ignorer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="EventPlanet2Modal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Tu veux botter plus de culs ?
            </div>
            <div class="modal-footer">
                <button id="modal-button" onclick="event2();" type="button" class="btn btn-danger mx-auto event2" data-bs-dismiss="modal">C'est le but de la manoeuvre ...</button>
                <button id="modal-button2" onclick="event2_1();" type="button" class="btn btn-success mx-auto event2_1" data-bs-dismiss="modal">Pas besoin tqt</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="EventPlanet3Modal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Coque endommagée, c'est ça de faire le fou dans un champ d'Astéroïdes
            </div>
            <div class="modal-footer">
                <button id="modal-button" onclick="event3();" type="button" class="btn btn-danger mx-auto event3" data-bs-dismiss="modal">Fait chier.</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="EventPlanet4Modal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Une mouette à fait caca dans le chargeur de l'arme ...
            </div>
            <div class="modal-footer">
                <button id="modal-button" onclick="event4();" type="button" class="btn btn-danger mx-auto event4" data-bs-dismiss="modal">hein, une mouette dans l'espace ?</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="EventPlanet5Modal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Un appel radio raconte une prophétie sur la fin du monde
            </div>
            <div class="modal-footer">
                <button id="modal-button" onclick="event5();" type="button" class="btn btn-danger mx-auto event5" data-bs-dismiss="modal">Ecouter</button>
                <button id="modal-button2" onclick="event5_1();" type="button" class="btn btn-success mx-auto event5_1" data-bs-dismiss="modal">Ignorer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="EventPlanet6Modal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Un type louche vous propose d'améliorer votre système de bouclier.
            </div>
            <div class="modal-footer">
                <button id="modal-button" onclick="event6();" type="button" class="btn btn-danger mx-auto event6" data-bs-dismiss="modal">Accepter</button>
                <button id="modal-button2" onclick="event6_1();" type="button" class="btn btn-success mx-auto event6_1" data-bs-dismiss="modal">Refuser</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="EventPlanet7Modal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Un marchand qui passait par là vous à regardé de travers
            </div>
            <div class="modal-footer">
                <button id="modal-button" onclick="event7();" type="button" class="btn btn-danger mx-auto event7" data-bs-dismiss="modal">Le Zigouiller</button>
                <button id="modal-button2" onclick="event7_1();" type="button" class="btn btn-success mx-auto event7_1" data-bs-dismiss="modal">Ignorer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="EventPlanet8Modal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Le pilote fait grève
            </div>
            <div class="modal-footer">
                <button id="modal-button" onclick="event8();" type="button" class="btn btn-danger mx-auto event8" data-bs-dismiss="modal">Demander Poliment</button>
                <button id="modal-button2" onclick="event8_1();" type="button" class="btn btn-success mx-auto event8_1" data-bs-dismiss="modal">Se Battre</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="EventPlanet9Modal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Une planète à envoyé un appel de détresse
            </div>
            <div class="modal-footer">
                <button id="modal-button" onclick="event9();" type="button" class="btn btn-danger mx-auto event9" data-bs-dismiss="modal">Atterrir</button>
                <button id="modal-button2" onclick="event9_1();" type="button" class="btn btn-success mx-auto event9_1" data-bs-dismiss="modal">S'enfuir</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="EventPlanet10Modal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Un groupe de pirates vous a tendu une embuscade !
            </div>
            <div class="modal-footer">
                <button id="modal-button" onclick="event10();" type="button" class="btn btn-danger mx-auto event10" data-bs-dismiss="modal">Oh Merde !</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="EventPlanet11Modal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Un Vaisseau Marchand passe devant toi.
                Tu peux aperçevoir l'équipage par la fenêtre, tu distingues un humain aux cheveux roux, une cyclope aux cheveux violet et un robot tordeur.
                Leur vaisseau ne paye pas de mine mais peut-être transporte t'il quelque chose d'intéressant.
            </div>
            <div class="modal-footer">
                <button id="modal-button" onclick="event11();" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">Le piller.</button>
                <!--Il est parti trop vite, tu n'as pas eu le temps de les aborder-->
                <button id="modal-button2" onclick="event11_1();" type="button" class="btn btn-success mx-auto" data-bs-dismiss="modal">Le laisser passer en leurs faisant signe.</button>
                <!--Tu t'es fait de nouveaux amis un peu chelous, génial non ?-->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="EventPlanet12Modal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Tu appercois au loin un énorme rocher qui scintille.
                Tu avais entendu une histoire dans un bar comme quoi une mine immense flotterais dans un coin de la galaxie.
                Ce n'est qu'un cailloux après tout.
            </div>
            <div class="modal-footer">
                <button id="modal-button" onclick="event12();" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">La fortune souris aux audacieux</button><!-- Tu tombes dans un piége tendu par des pirates de l'espace-->
                <button id="modal-button2" onclick="event12_1();" type="button" class="btn btn-success mx-auto" data-bs-dismiss="modal">Tu as déjà assez d'argent comme ça.</button>
                <!--Quel minerai d'or flotte dans l'espace +n SCRAP-->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="EventPlanet13Modal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Les lumiéres du Vaisseau se coupent, sûrement le disjonteur.
                Un membre de l'équipage se dévoue pour aller le rallumer.
            </div>
            <div class="modal-footer">
                <button id="modal-button" onclick="event13();" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">Rallumer la lumière.</button><!-- Un membre de l'quipage est mort,mais qui a bien pu faire ça.-->

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="EventPlanet14Modal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Un marchand se présente à vous
            </div>
            <div class="modal-footer">
                <button id="modal-button" onclick="event14();" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">Marchander</button>
                <button id="modal-button" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">Passer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="EquipageDead" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Un membre d'équipage est mort
            </div>
            <div class="modal-footer">
                <button id="modal-button" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">Ah !</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Lumiere" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                La lumière c'est rallumé sans incident...
            </div>
            <div class="modal-footer">
                <button id="modal-button" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Pilote" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Le pilote c'est calmé est devient plus concentré
                <br>
                Vous gagner en esquive !
            </div>
            <div class="modal-footer">
                <button id="modal-button" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">Tant mieux</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Degats" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Degats augmenté !.
            </div>
            <div class="modal-footer">
                <button id="modal-button" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">Cool !</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="Bouclier" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Bouclier amélioré !
            </div>
            <div class="modal-footer">
                <button id="modal-button" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">Pas mal !</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="BouclierNon" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Bouclier abimé !
            </div>
            <div class="modal-footer">
                <button id="modal-button" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">Oh l'e******</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ArmesNon" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Armes abimé !
            </div>
            <div class="modal-footer">
                <button id="modal-button" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">Quoi ?!</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ScrapNon" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-1">
            <div class="modal-body modalimg">
                Vous n'avez pas assez de scraps !
            </div>
            <div class="modal-footer">
                <button id="modal-button" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">Dommage ...</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="IntroTutoModal" tabindex="-1" aria-labelledby="EventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center modal-lg">
        <div class="modal-content fs-5">
            <div class="modal-body modalimg">
                Hey bonjour Soldat!
                <br>
                Bienvenue sur Astoria Space, un petit jeux fun tu verras.
                <br>
                Je vais t'expliquer les basses rapidement:
                <br>
                <img src="AstoriaRessources/images/Clé.png" alt="mécano" style="width: 50px; height: 50px;">
                Ça c'est le mécano pour réparer ton vaisseaux.
                <br>
                <img src="AstoriaRessources/images/Stats.png" alt="Stats" style="width: 50px; height: 50px;">
                La c'est pour connaitre les caractéristiques de ton Vaisseaux.
                <br>
                <img src="AstoriaRessources/images/menu.png" alt="Menu" style="width: 50px; height: 50px;">
                Pour si tu veut abandonner comme un lâche.
                <br>
                <img src="AstoriaRessources/images/ecrous.png" alt="Menu" style="width: 50px; height: 50px;">
                Le plus intéressant la MONNAIE du jeux le SCRAP.
                <br>
                <img src="AstoriaRessources/images/galaxy.png" alt="Menu" style="width: 50px; height: 50px;">
                La Carte pour pouvoir faire Thomas Pesquet et te promener dans la Galaxie.
                <br>
                <img src="AstoriaRessources/images/Henriette.png" alt="Menu" style="width: 50px; height: 50px;">
                Et bien sur les meilleurs pour la fin ton équipages(c'est pour leur faire plaisir),si ton équipages vient à mourir ce sera un GAME-OVER.
                Garde quand même un œil sur Telquaex il est un peu bizarre.
                <br>
                Bon Courage Soldat et Amuse toi bien !
                <div class="modal-footer">
                    <button id="modal-button" type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
</div>