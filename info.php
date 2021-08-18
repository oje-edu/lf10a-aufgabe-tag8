<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Reisebüro | Touristensuche</title>
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
        <h2>Touristeninfo</h2>
        <form action="./info.php" method="GET">
          <div class="row">
            <div class="col-25">
              <label for="info">Abreiseort:</label>
            </div>
            <div class="col-75">
              <div class="custom-select-wrapper">
                  <div class="custom-select">
                    <div class="custom-select__trigger"><span>[Bitte wählen]</span>
                      <div class="arrow"></div>
                    </div>
                    <div class="custom-options">
                      <span class="custom-option selected" name="info" data-value="1">Köln</span>
                      <span class="custom-option" name="info" data-value="2">Bonn</span>
                      <span class="custom-option" name="info" data-value="3">Düsseldorf</span>
                      <span class="custom-option" name="info" data-value="4">Frankfurt</span>
                      <span class="custom-option" name="info" data-value="5">München</span>
                      <span class="custom-option" name="info" data-value="6">Stuttgart</span>
                      <span class="custom-option" name="info" data-value="7">Bielefeld</span>
                      <span class="custom-option" name="info" data-value="8">Malle</span>
                    </div>
                  </div>
                <div>
              </div>
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