  <!DOCTYPE html>
  <html lang="de">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staedte</title>
  </head>
  <body>
<?php
  $SERVER = "localhost";
  $USER = "root";
  $PASS = "";
  $DATABASE = "reisebuero";
  $conn = mysqli_connect($SERVER, $USER, $PASS, $DATABASE);

  $query = "SELECT st_nr AS id, st_name AS city, la_name AS country FROM rb_staedte AS s	JOIN  rb_laender AS l ON s.st_land = l.la_nr";
  $results = mysqli_query($conn, $query);
  while( $row = mysqli_fetch_array($results, MYSQLI_ASSOC) ) {
    // var_dump($row);
    //echo("\n");
  ?>

      <table>
        <tr>
          <th>ID</th>
          <th>Stadt</th>
          <th>Land</th>
        </tr>
        <tr>
          <td><?php echo ($row['id']); ?></td>
          <td><?php echo ($row['city']); ?></td>
          <td><?php echo ($row['country']); ?></td>
        </tr>
      </table>

        <?php
        }
        mysqli_close($conn);
      ?>
  </body>
  </html>