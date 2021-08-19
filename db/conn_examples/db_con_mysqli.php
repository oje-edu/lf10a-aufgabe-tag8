<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kunden</title>
  </head>
  <body>
      <?php
        $SERVER = "localhost";
        $USER = "root";
        $PASS = "";
        $DATABASE = "reisebuero";
        $conn = new mysqli($SERVER, $USER, $PASS, $DATABASE);

        $query = "SELECT * FROM rb_kunden";
        $result = $conn->query($query);
        echo ("<select id='ddlClients' size='4'>");
        while($row = $result->fetch_array(MYSQLI_NUM)) {
          // var_dump($row);
          // echo("<br />");
          echo ("<option value='".$row[0]."'> " . $row[2] . ", " .$row[1] . "</option>");
        }
        echo ("</select>");
        $conn->close();
        ?>
</body>
</html>