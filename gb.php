<?php
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date('d.m.Y H:i:s');
    $user_ip= $_SERVER['REMOTE_ADDR'];
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    $zeile = $name . "|" . $title . "|" . $content . "|" . $date . "|" . $user_ip . "|" . $user_agent . "|" . "\n";

    file_put_contents("gb.csv", $zeile, FILE_APPEND);
    header('Location: ./show.php');
  } else {
?>
  <?php  session_start(); ?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gästebuch | Eintrag verfassen</title>
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
        <fieldset>
          <legend>Gästebuch</legend>
            <div class="gb_link">
              <a href="./show.php">Einträge lesen</a>
            </div>
          <form id="form1" action="./gb.php" method="post">
          <div class="row">
            <div class="col-25">
              <label for="name">Spitzname:</label>
            </div>
            <div class="col-75">
              <input type="text" name="name" id=name placeholder="Maximilian Musterfrau" required />
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="titel">Titel:</label>
            </div>
            <div class="col-75">
              <input type="text" name="titel" id=titel placeholder="Einfach Super!!!" required />
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="content">Ihr Eintrag:</label>
            </div>
            <div class="col-75">
              <textarea name="content" id="content" rows="7" wrap="virtual"
                  placeholder="Dieses Reisebüro ist einfach spitze. Vielen Dank für diesen tollen Urlaub"
                  required></textarea>
            </div>
          </div>
          <div class="buttons">
            <div class="row">
              <input name="submit" type="submit" value="Hau weg!">
            </div>
          </div>
        </form>
        </fieldset>
      </div>
    </section>
  </main>
</body>
</html>
<?php
  }
?>