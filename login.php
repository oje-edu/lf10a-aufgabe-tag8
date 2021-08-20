<?php session_start(); ?>
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
<?php
    include('db/config.php');
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM rb_users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
    }
?>

      <div class="container">
        <h2>Kundenanmeldung</h2>
        <p>Bitte geben Sie hier Ihre E-Mail-Adresse ein, falls Sie bereits registriert sind:</p>
        <form action="./login.php" method="POST">
          <div class="row">
            <div class="col-25">
              <label for="login">E-mail:</label>
            </div>
            <div class="col-75">
              <input type="email" name="email" id="email" placeholder="Ihre E-Mail Adresse" required />
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="password">Passwort:</label>
            </div>
            <div class="col-75">
              <input type="password" name="password" id="password" placeholder="Bitte Passwort eingaben" required />
            </div>
          </div>
          <div>
            <input type="hidden" name="b" value="<?php echo ($buchnr); ?>" />
            <input type="hidden" name="bt" value="<?php echo ($buchtxt); ?>" />
          </div>
          <div class="row">
            <input type="submit" name="login" value="Einloggen">
            Du hast noch kein Konto? <a href="./registration.php">Konto erstellen</a>
          </div>
        </form>
          <div class="row">
            <div class="col-75">
              <?php
              if (!$result) { ?>
                <div class="login-error">
                  <p>Benutzername-ID oder Passwort ist falsch!</p>
                </div>
                <?php
              } else {
                  if (password_verify($password, $result['password'])) {
                      $_SESSION['user_id'] = $result['id'];
                      $_SESSION['user_fname'] = $result['fname']; ?>
                      <div class="login-success">
                        <p>Du hast Dich erfolgreich eingeloggt!</p>
                      </div>
                      <?php
                      header("Location: member.php");
                  } else {
                      echo ("<p class='login-error'>Benutzername-ID oder Passwort ist falsch!</p>");
                  }
              }
              ?>
            </div>
          </div>
      </div>
    </main>
  </div>
  <script src="./assets/js/app.js"></script>
</body>
</html>