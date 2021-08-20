<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Reisebüro | Forum</title>
</head>
<body>
  <div id="mySidenav" class="sidenav">
    <?php include_once "inc/nav.php" ?>
  </div>

  <div id="main">
   <?php include_once "inc/header.php" ?>
    <main>
      <div class="container">
        <h2>Forumsbeitrag verfassen</h2>
        <div class="foren_link">
          <a href="./forum.php">Einträge lesen</a>
        </div>
        <form action="./forum.php" method="POST">
          <div class="row">
            <div class="col-25">
              <label for="nick">Spitzname:</label>
            </div>
            <div class="col-75">
              <input type="text" name="nick" id=nick placeholder="Maximilian Musterfrau" required />
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="email">E-Mail (optional):</label>
            </div>
            <div class="col-75">
              <input type="email" name="email" id=email placeholder="Ihre E-Mail Adresse" />
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="titel">Titel:</label>
            </div>
            <div class="col-75">
              <input type="text" name="titel" id=titel placeholder="Malle" required />
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="eintr">Ihr Eintrag:</label>
            </div>
            <div class="col-75">
              <textarea name="eintr" id="eintr" rows="7" wrap="virtual"
                  placeholder="Wassss ein geiler Urlaub auf Malle!!! Und gleich mal 14 Tage in Quarantäne, Syphilis loswerden !!11elf"
                  required></textarea>
            </div>
          </div>
          <div class="row">
            <input type="submit" value="Eintragen">
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>