<nav>
    <ul>
      <li><a href="./">Startseite</a></li>
      <li><a href="./info.php">Touristensuche</a></li>
      <li><a href="./auskunft.php">Reisesuche</a></li>
      <li><a href="./forum.php">Forum</a></li>
      <li><a href="./gb.php">Gästebuch</a></li>
      <li><hr /></li>
      <?php
        if(!isset($_SESSION['user_id'])) {
          echo ("<li><a href='./login.php'>Einloggen</a></li>");
        } else {
          echo ("<li><a href='./member.php'>Kundenbereich</a></li>");
          echo ("<li><a href='./logout.php'>Abmelden</a></li>");
        }
      ?>

    </ul>
  </nav>