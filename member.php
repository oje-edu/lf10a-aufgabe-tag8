<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reisebüro | Benutzerseite</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('Location: login.php');
        exit;
    } else { ?>
    <body>
    <div id="mySidenav" class="sidenav">
      <?php include_once "inc/nav.php" ?>
    </div>


    <div id="main">
      <?php include_once "inc/header.php" ?>
      <main>
        <section>
          <div class="container">
          <h1>Benutzer Seite</h1>
          <p>Hallo <?php echo $_SESSION['user_id']; ?>!</p>
        </section>
      </main>
    </div>
    <?php
    }
?>