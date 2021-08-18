<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Reisebüro | Reisesuche</title>
</head>
<body>

  <div id="mySidenav" class="sidenav">
    <?php include_once "./nav.php" ?>
  </div>

  <span class="navOpen" onclick="openNav()">Navigation</span>

  <div id="main">
   <?php include_once "./header.php" ?>
    <main>
    <div class="container">
      <h2>Reiseauswahl</h2>
        <form action="./ergebnis.php" method="POST">
          <div class="row">
            <div class="col-25">
              <label for="start">Abreiseort:</label>
            </div>
            <div class="col-75">
              <div class="custom-select-wrapper">
                  <div class="custom-select">
                    <div class="custom-select__trigger"><span>[Bitte wählen]</span>
                      <div class="arrow"></div>
                    </div>
                    <div class="custom-options">
                      <span class="custom-option selected" name="start" data-value="1">Köln</span>
                      <span class="custom-option" name="start" data-value="2">Bonn</span>
                      <span class="custom-option" name="start" data-value="3">Düsseldorf</span>
                      <span class="custom-option" name="start" data-value="4">Frankfurt</span>
                      <span class="custom-option" name="start" data-value="5">München</span>
                      <span class="custom-option" name="start" data-value="6">Stuttgart</span>
                      <span class="custom-option" name="start" data-value="7">Bielefeld</span>
                    </div>
                  </div>
                <div>
                <br />
                <span style="font-size: 10px">Die meisten Flugangebote gehen von/nach Köln/Bonn, einige auch von/nach
                  Frankfurt oder Düsseldorf.</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="ziel">Zielort:</label>
            </div>
            <div class="col-75">
              <div class="custom-select-wrapper">
                <div class="custom-select">
                  <div class="custom-select__trigger"><span>[Bitte wählen]</span>
                    <div class="arrow"></div>
                  </div>
                  <div class="custom-options">
                    <span class="custom-option selected" name="ziel" data-value="1">Köln</span>
                    <span class="custom-option" name="ziel" data-value="2">Bonn</span>
                    <span class="custom-option" name="ziel" data-value="3">Düsseldorf</span>
                    <span class="custom-option" name="ziel" data-value="4">Frankfurt</span>
                    <span class="custom-option" name="ziel" data-value="5">München</span>
                    <span class="custom-option" name="ziel" data-value="6">Stuttgart</span>
                    <span class="custom-option" name="ziel" data-value="7">Bielefeld</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="abreise">Abreisedatum:</label>
            </div>
            <div class="col-75">
              <input class="datum" type="date" id="abreise" name="abreise">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="rueckreise">Rückreisedatum:</label>
            </div>
            <div class="col-75">
              <input class="datum" type="date" id="rueckreise" name="rueckreise">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="subject">Mit Hotelangebot?</label>
            </div>
            <div class="col-75">
              <input type="radio" name="hotel" id="ja" value="1" checked="checked" />
              <label for="ja">ja</label>
              <input type="radio" name="hotel" id="nein" value="0" />
              <label for="nein">nein</label>
            </div>
          </div>
          <div class="row">
            <input type="submit" value="Anfrage senden">
          </div>
        </form>
      </div>
    </main>
  </div>
  <script src="./assets/js/app.js"></script>
</body>
</html>
