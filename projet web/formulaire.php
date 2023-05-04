<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>restaurant</title> <!--titre de page à trouver-->
        <link rel="stylesheet" type="text/css" href="./resa.css">
        <!--font google-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
        <!---->
        <!--icons-->
        <script src="https://kit.fontawesome.com/83f99e36e2.js" crossorigin="anonymous"></script>
        <!---->
        <!--javascript-->
        <script src="./resa.js"></script>
        <!---->
    </head>

    <body>
        <header>
            <nav class="nav" >
                <div id="barnav" class="barnav">
                    <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
                        <ul>
                            <li class="menu2"><a href="./accueil.html">accueil</a></li>
                            <li class="menu">notre carte
                                <ul class="sousmenu">
                                    <li><a href="./menu.html">le midi</a></li>
                                    <li><a href="./menusoir.html">le soir</a></li>
                                </ul>
                            </li>
                            <li class="menu">r&eacute;servation
                                <ul class="sousmenu">
                                    <li><a href="./resa.html">r&egrave;server une table</a></li>
                                    <li><a href="">&eacute;v&egrave;nement</a></li>
                                </ul>
                            </li>
                            <li class="menu2"><a href="">&Agrave; propos</a></li>
                        </ul>
                </div>
                <i class="fa-solid fa-bars" onclick="openmenu()"></i>
            </nav>
        </header>
        <!--
        <main>
        
            <div class="main">
                <div class="sideb">
                    <div class="header">
                        <i class="fa-solid fa-circle-arrow-left"></i>
                        <span><span class="month"></span>
                        <span class="year"></span>
                        </span>
                        <i class="fa-solid fa-circle-arrow-right" onclick="prochainmois()"></i>
                    </div>
                    <div class="calendar">
                        <table>
                            <thead>
                                <tr>
                                    <th jours="Lun" data-column="0">Lun</th>
                                    <th jours="Mar" data-column="1">Mar</th>
                                    <th jours="Mer" data-column="2">Mer</th>
                                    <th jours="Jeu" data-column="3">Jeu</th>
                                    <th jours="Ven" data-column="4">Ven</th>
                                    <th jours="Sam" data-column="5">Sam</th>
                                    <th jours="Dim" data-column="6">Dim</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="days" data-row="0">
                                    <td data-column="0"></td>
                                    <td data-column="1"></td>
                                    <td data-column="2"></td>
                                    <td data-column="3"></td>
                                    <td data-column="4"></td>
                                    <td data-column="5"></td>
                                    <td data-column="6"></td>
                                </tr>
                                <tr class="days" data-row="1">
                                    <td data-column="0"></td>
                                    <td data-column="1"></td>
                                    <td data-column="2"></td>
                                    <td data-column="3"></td>
                                    <td data-column="4"></td>
                                    <td data-column="5"></td>
                                    <td data-column="6"></td>
                                </tr>
                                <tr class="days" data-row="2">
                                    <td data-column="0"></td>
                                    <td data-column="1"></td>
                                    <td data-column="2"></td>
                                    <td data-column="3"></td>
                                    <td data-column="4"></td>
                                    <td data-column="5"></td>
                                    <td data-column="6"></td>
                                </tr>
                                <tr class="days" data-row="3">
                                    <td data-column="0"></td>
                                    <td data-column="1"></td>
                                    <td data-column="2"></td>
                                    <td data-column="3"></td>
                                    <td data-column="4"></td>
                                    <td data-column="5"></td>
                                    <td data-column="6"></td>
                                </tr>
                                <tr class="days" data-row="4">
                                    <td data-column="0"></td>
                                    <td data-column="1"></td>
                                    <td data-column="2"></td>
                                    <td data-column="3"></td>
                                    <td data-column="4"></td>
                                    <td data-column="5"></td>
                                    <td data-column="6"></td>
                                </tr>
                                <tr class="days" data-row="5">
                                    <td data-column="0"></td>
                                    <td data-column="1"></td>
                                    <td data-column="2"></td>
                                    <td data-column="3"></td>
                                    <td data-column="4"></td>
                                    <td data-column="5"></td>
                                    <td data-column="6"></td>
                                </tr>
                            </tbody>
                        </table>    
                    </div>
                </div>
            </div>
        </main>
        -->

        <div class="formresa">

            <div class="titre">
                <h4>R&eacute;server</h4>
            </div>

            <form action="resa.php" method="POST">
                <fieldset>
                    <div class="table">
                        <div class="ligne1">
                            <div class="tabgauche">
                                <label for="nom">Nom </label>
                            </div>
                            <div class="tabgauche">
                                <input name="nom" type="text" placeholder="Nom"><br><br>
                            </div>
                            <div class="tabdroite">
                                <label for="date">Date </label>
                            </div>
                            <div class="tabdroite">
                                <input name="date" type="date"><br><br>
                            </div>
                        </div>
                        <div class="ligne2">
                            <div class="tabgauche">
                                <label for="num">T&eacute;l&eacute;phone </label>
                            </div>
                            <div class="tabgauche">
                                <input name="num" type="tel" placeholder="Numéro"><br><br>
                            </div>
                            <div class="tabdroite">
                                <label for="heure">Heure </label>
                            </div>
                            <div class="tabdroite">
                                <select name="heure" >
                                    <optgroup label="Heure">
                                        <option>18:30</option>
                                        <option>19:00</option>
                                        <option>19:30</option>
                                        <option selected>20:00</option>
                                        <option>20:30</option>
                                        <option>21:00</option>
                                    </optgroup>
                                    
                                </select><br><br>
                            </div>
                        </div>
                        <div class="ligne3">
                            <div  class="tabgauche">
                                <label for="email">Email </label>
                            </div>
                            <div  class="tabgauche">
                                <input name="email" type="email" placeholder="Email"><br><br>
                            </div>
                            <div class="tabdroite">
                                <label for="nbpers">Invité(s) </label>
                            </div>
                            <div class="tabdroite">
                                <input name="nbpers" type="number" placeholder="Invité(s)" min="0" max="8"><br><br>
                            </div>
                            <div class="tabdroite">
                                <input type="submit" value="réserver">
                            </div>
                        </div>
                   </div>                  
                </fieldset>
            </form>
        </div>
        
        

        <footer class="iconapps">
            <i class="fa-brands fa-instagram"></i>
            <a href="" ><i class="fa-sharp fa-regular fa-envelope-open"></i></a>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-regular fa-comments"></i>
            <p class="parfooter"><br>Bouet Laure / Zennani Farid</p>
        
        </footer>
    </body>
    
</html>
