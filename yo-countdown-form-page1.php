<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YO-Countdown</title>
    <style>
body {
  overflow-y : auto;
  background-color: #1D1F20;
  text-align: center;
  color: white;
  font-family: Arial, Helvetica, sans-serif;
  margin:0;
}
.topnav {
  position: relative;
  overflow: hidden;
  background-color: white;
}

.topnav a {
  float: left;
  color: #1D1F20;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #1D1F20;
  color: white;
}

.topnav a.active {
  background-color: white
  color: #1D1F20;
}

.topnav-cente#e50000 a {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.topnav-right {
  float: right;
}

/* Responsive navigation menu (for mobile devices) */
@media screen and (max-width: 600px) {
  .topnav a, .topnav-right {
    float: none;
    display: block;
  }
  
  .topnav-cente#e50000 a {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
  }
}
#laatikko {
    border: 2px solid #e50000;
    padding: 10px;
    width: 250px;
    margin: 0 auto;
}
#demo {
    font-weight: bold;
    font-size: 25px;
    letter-spacing: 1px;
    color: #e50000;
}
#aineetlaatikko {
    border: 2px solid #e50000;
    padding: 10px;
    width: 250px;
    margin: 0 auto;
}
#aineet1 {
    font-weight: bold;
    font-size: 25px;
    letter-spacing: 1px;
    color: #e50000;
}
#aineet2 {
    font-weight: bold;
    font-size: 25px;
    letter-spacing: 1px;
    color: #e50000;
}
#aineet3 {
    font-weight: bold;
    font-size: 25px;
    letter-spacing: 1px;
    color: #e50000;
}
#aineet4 {
    font-weight: bold;
    font-size: 25px;
    letter-spacing: 1px;
    color: #e50000;
}
#aineet5 {
    font-weight: bold;
    font-size: 25px;
    letter-spacing: 1px;
    color: #e50000;
}
#aineet6 {
    font-weight: bold;
    font-size: 25px;
    letter-spacing: 1px;
    color: #e50000;
}
#aineet7 {
    font-weight: bold;
    font-size: 25px;
    letter-spacing: 1px;
    color: #e50000;
}
#aineet8 {
    font-weight: bold;
    font-size: 25px;
    letter-spacing: 1px;
    color: #e50000;
}
#aineet9 {
    font-weight: bold;
    font-size: 25px;
    letter-spacing: 1px;
    color: #e50000;
}
select {
  margin: 10px;
  width: 150px;
  padding: 5px 35px 5px 5px;
  font-size: 16px;
  border: 1px solid white;
  height: 35px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background: url(https://i.imgur.com/tQgWQij.png) 96% / 15% no-repeat #eee;
}

select::-ms-expand { 
    display: none; /* remove default arrow in IE 10 and 11 */
}

/* target Internet Explorer 9 to undo the custom arrow */
@media screen and (min-width:0\0) {
    select {
        background:none\9;
        padding: 5px\9;
    }
}
.button1 {
  background-color: #1D1F20;
  border: 2px solid white;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1:hover {
    background-color: #e50000;
    color: #1D1F20;
    border: 2px solid #e50000;
}
#ig-linkki {
  text-decoration: none;
  color: #1D1F20;
}
#page-container {
  position: relative;
  min-height: 100vh;
}
#content-wrap {
  padding-bottom: 100px;    /* Footer height */
}
#footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 60px;            /* Footer height */
  font-family: monospace;
  color: #1D1F20;
  text-align: center;
  background-color: white;
}
    </style>
  </head>
  <body>
      <!-- Top navigation -->
<div class="topnav">

        <!-- Cente#e50000 link -->
        <div class="topnav-cente#e50000">
          <a href="index.html" class="active">YO-Spekulaattori</a>
        </div>
        
        <!-- Left-aligned links (default) -->
        <a href="pisteiden_vertailu.html">YO-Leaderboard</a>
        <a href="Yhteystiedot.html">Yhteydenotto</a>
        
        <!-- Right-aligned links -->
        <div class="topnav-right">
          <a href="yo-countdown.html">YO-Countdown</a>
          <a href="Tietoja.html">Tietoja</a>
        </div>
 </div>     
<div id="page-container">  
 <div id="content-wrap">
  <h1>YO-Countdown</h1>
  <p>Valitse aine ja katso kuinka kauan aikaa on koepäivään</p>
  <img id="ycl" src="https://i.imgur.com/1P0Y5i4.png" alt="yo-countdown logo" style="width:250px">
  <form id="ajastin-aine" form action="yo-countdown-form-page.php">
  <select name="aine" id="ainevalikko" form="ajastin-aine">
    <option value="Äidinkielen lukutaidon koe, suomi">Äidinkielen lukutaidon koe, suomi</option>
    <option value="Äidinkielen lukutaidon koe, ruotsi">Äidinkielen lukutaidon koe, ruotsi</option>
    <option value="Äidinkielen kirjoitustaidon koe, suomi">Äidinkielen kirjoitustaidon koe, suomi</option>
    <option value="Äidinkielen kirjoitustaidon koe, ruotsi">Äidinkielen kirjoitustaidon koe, ruotsi</option>
    <option value="Äidinkielen koe, pohjoissaame">Äidinkielen koe, pohjoissaame</option>
    <option value="Suomi toisena kielenä">Suomi toisena kielenä</option>
    <option value="Ruotsi toisena kielenä">Ruotsi toisena kielenä</option>
    <option value="Matematiikan koe, pitkä oppimäärä">Matematiikan koe, pitkä oppimäärä</option>
    <option value="Matematiikan koe, lyhyt oppimäärä">Matematiikan koe, lyhyt oppimäärä</option>
    <option value="Ruotsi, pitkä oppimäärä">Ruotsi, pitkä oppimäärä</option>
    <option value="Ruotsi, keskipitkä oppimäärä">Ruotsi, keskipitkä oppimäärä</option>
    <option value="Suomi, pitkä oppimäärä">Suomi, pitkä oppimäärä</option>
    <option value="Suomi, keskipitkä oppimäärä">Suomi, keskipitkä oppimäärä</option>
    <option value="Englanti, pitkä oppimäärä">Englanti, pitkä oppimäärä</option>
    <option value="Saksa, pitkä oppimäärä">Saksa, pitkä oppimäärä</option>
    <option value="Ranska, pitkä oppimäärä">Ranska, pitkä oppimäärä</option>
    <option value="Venäjä, pitkä oppimäärä">Venäjä, pitkä oppimäärä</option>
    <option value="Espanja, pitkä oppimäärä">Espanja, pitkä oppimäärä</option>
    <option value="Latina, laajempi oppimäärä">Latina, laajempi oppimäärä</option>
    <option value="Saksa, lyhyt oppimäärä">Saksa, lyhyt oppimäärä</option>
    <option value="Englanti, lyhyt oppimäärä">Englanti, lyhyt oppimäärä</option>
    <option value="Ranska, lyhyt oppimäärä">Ranska, lyhyt oppimäärä</option>
    <option value="Venäjä, lyhyt oppimäärä">Venäjä, lyhyt oppimäärä</option>
    <option value="Espanja, lyhyt oppimäärä">Espanja, lyhyt oppimäärä</option>
    <option value="Italia, lyhyt oppimäärä">Italia, lyhyt oppimäärä</option>
    <option value="Latina, lyhyt oppimäärä">Latina, lyhyt oppimäärä</option>
    <option value="Pohjoissaame, lyhyt oppimäärä">Pohjoissaame, lyhyt oppimäärä</option>
    <option value="Koltansaame, lyhyt oppimäärä">Koltansaame, lyhyt oppimäärä</option>
    <option value="Portugali, lyhyt oppimäärä">Portugali, lyhyt oppimäärä</option>
    <option value="Evankelis-luterilainen uskonto">Evankelis-luterilainen uskonto</option>
    <option value="Ortodoksinen uskonto">Ortodoksinen uskonto</option>
    <option value="Elämänkatsomustieto">Elämänkatsomustieto</option>
    <option value="Filosofia">Filosofia</option>
    <option value="Psykologia">Psykologia</option>
    <option value="Historia">Historia</option>
    <option value="Yhteiskuntaoppi">Yhteiskuntaoppi</option>
    <option value="Fysiikka">Fysiikka</option>
    <option value="Kemia">Kemia</option>
    <option value="Biologia">Biologia</option>
    <option value="Maantiede">Maantiede</option>
    <option value="Terveystieto">Terveystieto</option>        
      </select>
  </form>
    <br>
    <br>
    <button class="button1" type="submit" form="ajastin-aine">Aikaa jäljellä</button>
    <br>
    <br>
    <br>
    <div id="aineetlaatikko">
    <?php 
    include("aineet1.php"); 
    include("aineet2.php");
    include("aineet3.php");
    include("aineet4.php");
    include("aineet5.php");
    include("aineet6.php");
    include("aineet7.php");
    include("aineet8.php");
    include("aineet9.php");
    ?>
    </div>
</div>
<footer id="footer">
  <p><a id="ig-linkki" href="https://www.instagram.com/jukka.knuutinen/?hl=fi">Jukka Knuutinen</a></p>
        <p>2019 YO-Spekulaattori®</p>
      </footer>
      </div>
      <script src="aineet1.js"></script>
      <script src="aineet2.js"></script>
      <script src="aineet3.js"></script>
      <script src="aineet4.js"></script>
      <script src="aineet5.js"></script>
      <script src="aineet6.js"></script>
      <script src="aineet7.js"></script>
      <script src="aineet8.js"></script>
      <script src="aineet9.js"></script>

  </body>