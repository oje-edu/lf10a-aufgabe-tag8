<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Neue Benutzer</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  <div id="mySidenav" class="sidenav">
    <?php require_once('inc/nav.php') ?>
  </div>

<div id="main">
  <?php require_once('inc/header.php') ?>
    <main>
      <section>
        <div class="container">
          <h1>Neue Benutzer</h1>
          <div class="link">
            <a href="./login.php">Neuer Benutzer</a>
          </div>
          <?php
            $text = "";
            $datalines = file('newuser.csv');
            // Neueste Einträge am Ende
            // foreach ($datalines as $datakey => $dataline) {
            // Neueste Einträge zuerst
              for($i = count($datalines) -1; $i >= 0; $i--) {
                $dataline = $datalines[$i];
                $data = explode("|", $dataline);
          ?>
          <div class="container">
              <div class="name item"><p>Email: <?php echo($data[0]) ?></p></div>
              <div class="title item"><p>Vorname: <?php echo($data[1]) ?></p></div>
              <div class="content item"><p>Nachname: <?php echo($data[2]) ?></p></div>
              <div class="date item"><p>Geburtsdatum: <?php echo($data[3]) ?></p></div>
              <div class="date item"><p>Straße: <?php echo($data[4]) ?></p></div>
              <div class="date item"><p>Hausnummer: <?php echo($data[5]) ?></p></div>
              <div class="date item"><p>PLZ: <?php echo($data[6]) ?></p></div>
              <div class="date item"><p>Wohnort: <?php echo($data[7]) ?></p></div>
              <div class="ip"><p>Land: <?php echo($data[8]) ?></p></div>
              <div class="ip"><p>Ihre IP: <?php echo($data[9]) ?></p></div>
              <div class="agent"><p>User-Agent: <?php echo($data[10]) ?></p></div>
          </div>
          <?php
            }
          ?>
        </div>
      </section>
    </main>

    </div>

</body>
</html>