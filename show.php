<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gästebucheinträge</title>
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
          <h1>Gästebucheinträge</h1>
          <div class="link">
            <a href="./gb.php">Eintrag verfassen</a>
          </div>
          <?php
            $text = "";
            $datalines = file('gb.csv');
            // Neueste Einträge am Ende
            // foreach ($datalines as $datakey => $dataline) {
            // Neueste Einträge zuerst
              for($i = count($datalines) -1; $i >= 0; $i--) {
                $dataline = $datalines[$i];
                $data = explode("|", $dataline);
          ?>
          <div class="container">
              <div class="name item"><p>Name: <?php echo($data[0]) ?></p></div>
              <div class="title item"><p>Titel: <?php echo($data[1]) ?></p></div>
              <div class="content item"><p>Nachricht: <?php echo($data[2]) ?></p></div>
              <div class="date item"><p>Verfasst: <?php echo($data[3]) ?></p></div>
              <!-- <div class="ip"><p>IP: <?php echo($data[4]) ?></p></div>
              <div class="agent"><p>User-Agent: <?php echo($data[5]) ?></p></div> -->
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