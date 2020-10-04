<?php
$servername = "127.0.0.1";
$username = "autoadyu_root";
$password = "Saphir987";
$db = "autoadyu_auto";
$dbport = "3306";

$conexiune= new mysqli($servername, $username, $password, $db, $dbport);
$comanda ="select * from elevi;";

$elevi= $conexiune->query($comanda);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>

    <h3><center>Tabel cu elevii inscrisi</center></h3> <br>
    <table class="table">
      <thead>
        <th>ID</th>
        <th>nume</th>
        <th>email</th>
        <th>telefon</th>
        <th>categorie</th>
        <th>data</th>
      </thead>
      <tbody>
        <?php
          $rand = $elevi->fetch_assoc();

          while($rand){

            echo '<tr>';
            echo '<td>';
            echo $rand['id'];
            echo '</td>';

            echo '<td>';
            echo $rand['nume'];
            echo '</td>';

            echo '<td>';
            echo $rand['email'];
            echo '</td>';

            echo '<td>';
            echo $rand['telefon'];
            echo '</td>';

            echo '<td>';
            echo $rand['categorie'];
            echo '</td>';

            echo '<td>';
            echo $rand['data'];
            echo '</td>';

            echo '</tr>';

            $rand = $elevi->fetch_assoc();
          }

         ?>
      </tbody>
    </table>
  </body>
</html>
