<?php
    session_start();
    include('db/config.php');
    if (isset($_POST['register'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $bday = $_POST['bday'];
        $strasse = $_POST['strasse'];
        $hnr = $_POST['hnr'];
        $plz = $_POST['plz'];
        $ort = $_POST['ort'];
        $land = $_POST['land'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM rb_users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<p class="error">Diese E-Mail Adresse ist bereits registriert!</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO rb_users(fname,lname,password,email,bday,strasse,hnr,plz,ort,land) VALUES (:fname,:lname,:password_hash,:email,:bday,:strasse,:hnr,:plz,:ort,:land)");
            $query->bindParam("fname", $fname, PDO::PARAM_STR);
            $query->bindParam("lname", $lname, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $query->bindParam("bday", $bday, PDO::PARAM_STR);
            $query->bindParam("strasse", $strasse, PDO::PARAM_STR);
            $query->bindParam("hnr", $hnr, PDO::PARAM_STR);
            $query->bindParam("plz", $plz, PDO::PARAM_INT);
            $query->bindParam("ort", $ort, PDO::PARAM_STR);
            $query->bindParam("land", $ort, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                echo '<p class="success">Die Registration war erfolgreich!</p>';
               header("Location: login.php");
            } else {
                echo '<p class="error">Ooops - Irgendwas ging schief!</p>';
            }
        }
    }
    ?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./assets/css/style.css">
    <title>Reisebüro | Registrieren</title>
</head>
<body>
    <div id="mySidenav" class="sidenav">
        <?php include_once "inc/nav.php" ?>
    </div>

  <div id="main">
   <?php include_once "inc/header.php" ?>
    <main>
      <div class="container">
    <h2>Neuer Kunde</h2>
        <p>Bitte geben Sie hier Ihre Daten ein, falls Sie ein neuer Kunde sind (die mit * markierten Felder sind Pflichtangaben):</p>

        <form action="registration.php"  method="POST">
          <fieldset>
            <legend><h3>Registrieren</h3></legend>
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
                <label for="password">Passwort:*</label>
              </div>
              <div class="col-75">
                <input type="password" name="password" id="password" placeholder="Dein Passwort" required />
              </div>
            </div>
            </fieldset>
            <fieldset>
                <legend><h3>Persönliches</h3></legend>
            <div class="row">
              <div class="col-25">
                <label for="fname">Vorname:*</label>
              </div>
              <div class="col-75">
                <input type="text" name="fname" id="fname" placeholder="Maximilian" required />
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="lname">Familienname:*</label>
              </div>
              <div class="col-75">
                <input type="text" name="lname" id="lname" placeholder="Musterfrau" required />
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
              <div class="col-25">
                <input type="submit" name="register" value="Eintragen">
                <p>Bereits registriert <a href="./login.php">Einloggen</a></p>
            </div>
            <div class="col-25 reset">
            <input type="reset" value="Zurücksetzen">
          </div>
        </div>
        </form>

    </main>
</div>
</body>
</html>


