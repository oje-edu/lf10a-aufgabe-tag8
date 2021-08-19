<?php
 if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $vname = $_POST['vname'];
  $nname = $_POST['nname'];
  $bday = $_POST['bday'];
  $strasse = $_POST['strasse'];
  $hnr = $_POST['hnr'];
  $plz = $_POST['plz'];
  $ort = $_POST['ort'];
  $land = $_POST['land'];
  $date = date('d.m.Y H:i:s');
  $user_ip= $_SERVER['REMOTE_ADDR'];
  $user_agent = $_SERVER['HTTP_USER_AGENT'];

  $zeile = $email . "|" . $vname . "|" . $nname . "|" . $bday . "|" . $strasse . "|" . $hnr . "|" . $plz . "|" . $ort . "|" . $land . "|" . $user_ip . "|" . $user_agent . "|" . "\n";

  file_put_contents("newuser.csv", $zeile, FILE_APPEND);
  header('Location: ./newuser.php');
 }
?>
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Reisebüro | Anmeldung</title>
</head>

<body>
  <div id="mySidenav" class="sidenav">
    <?php include_once "inc/nav.php" ?>
  </div>



  <div id="main">
   <?php include_once "inc/header.php" ?>
    <main>
      <div class="container">
        <!-- <h2>Kundenanmeldung</h2>
        <p>Bitte geben Sie hier Ihre E-Mail-Adresse ein, falls Sie bereits registriert sind:</p>
        <form action="./login.php" method="POST">
          <div class="row">
            <div class="col-25">
              <label for="login">E-mail:</label>
            </div>
            <div class="col-75">
              <input type="email" name="login" id="login" placeholder="Ihre E-Mail Adresse" required />
            </div>
          </div>
          <br />
            <span style="font-size: 10px">Anmerkung: Hier fehlt zur Praxistauglichkeit eine Passwortüberprüfung.</span>
          <div>
            <input type="hidden" name="b" value="<?php echo ($buchnr); ?>" />
            <input type="hidden" name="bt" value="<?php echo ($buchtxt); ?>" />
          </div>
        </form> -->

        <h2>Neuer Kunde</h2>
        <p>Bitte geben Sie hier Ihre Daten ein, falls Sie ein neuer Kunde sind (die mit * markierten Felder sind Pflichtangaben):</p>

        <form action="./login.php" method="POST">
          <fieldset>
            <legend><h3>Persönliches</h3></legend>
            <div class="row">
              <div class="col-25">
                <label for="email">E-Mail:</label>
              </div>
              <div class="col-75">
                <input type="email" name="email" id="email" placeholder="Ihre E-Mail Adresse" required />
              </div>
            </div>
            <br />
            <span style="font-size: 10px">Dies wird Ihre Anmelde-ID.</span>
            <div class="row">
              <div class="col-25">
                <label for="vname">Vorname:*</label>
              </div>
              <div class="col-75">
                <input type="text" name="vname" id="vname" placeholder="Maximilian" required />
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="name">Familienname:*</label>
              </div>
              <div class="col-75">
                <input type="text" name="nname" id="nname" placeholder="Musterfrau" required />
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="geb">Geburtsdatum:*</label>
              </div>
              <div class="col-75">
                <input type="date" name="bday" id="bday" required />
              </div>
            </div>
          </fieldset>

          <fieldset>
            <legend><h3>Anschrift</h3></legend>
            <div class="row">
              <div class="col-25">
                <label for="strasse">Strasse</label>
              </div>
              <div class="col-75">
                <input type="text" name="strasse" id="strasse" placeholder="Am Hang" />
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="hnr">Hausnummer</label>
              </div>
              <div class="col-75">
                <input type="text" name="hnr" id="hnr" placeholder="1a" />
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="plz">Postleitzahl</label>
              </div>
              <div class="col-75">
                <input type="text" name="plz" id="plz" placeholder="36163" />
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="ort">Wohnort:</label>
              </div>
              <div class="col-75">
                <input type="text" name="ort" id="ort" placeholder="Poppenhausen" />
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="land">Land:*</label>
              </div>
              <div class="col-75">
                <select name="land" id="land" required>
                  <option value="default">[Bitte wählen]</option>
                  <option value="deutschland">Deutschland</option>
                  <option value="oesterreich">Österreich</option>
                  <option value="schweiz">Schweiz</option>
                  <option value="daenemark">Dänemark</option>
                  <option value="norwegen">Norwegen</option>
                  <option value="schweden">Schweden</option>
                  <option value="udssr">UdSSR</option>
                </select>
              </div>
            </div>
          </fieldset>
          <input type="hidden" name="b" value="<?php echo ($buchnr); ?>" />
          <input type="hidden" name="bt" value="<?php echo ($buchtxt); ?>" />
          <div class="row">
            <input type="reset" value="Zurücksetzen">

            <input type="submit" name="submit" value="Eintragen">
          </div>
        </form>
      </div>
    </main>
  </div>
  <script src="./assets/js/app.js"></script>
</body>
</html>