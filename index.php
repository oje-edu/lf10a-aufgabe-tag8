<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reisebüro | verschwindi.buzz</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
<div id="mySidenav" class="sidenav">
  <?php include_once "inc/nav.php" ?>
</div>


<div id="main">
   <?php include_once "inc/header.php" ?>
   <main>
     <section>
      <div class="container">
        <h2>Herzlich willkommen!</h2>
        <p>wir sind Ihr Online-Reisebüro, spezialisiert auf Flugreisen in europäische Metropolen und die entsprechenden
          Hotelaufenthalte. wir wünschen Ihnen einen angenehmen Aufenthalt - auf unserer Webseite und Ihrem Urlaub!</p>

        <table>
          <tr>
            <th>ID</th>
            <th>Stadt</th>
            <th>Land</th>
          </tr>
          <tr>
            <?php include_once "db/conn_examples/db_con_mysql_query.php" ?>
          </tr>
        </table>



      </div>
     </section>
   </main>
</div>

</body>
</html>