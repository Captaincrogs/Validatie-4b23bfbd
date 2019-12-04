<!DOCTYPE html>

<head>
  <title> </title>
  <meta charset="UTF-8">
</head>

<body>

<div>

  <form action="form.php" method="get" target="_blank">
  Email address: <input type="text" name="Emailadres"><br>
<br>
  <input type="submit" name="submit" value="Verzenden">
  <p> <bold> Druk op Verzenden </bold> </p>

  <?php
  if (isset($_GET['submit'])) {
    $email = $_GET["Emailadres"];
    if (filter_var($_GET, FILTER_VALIDATE_EMAIL)) {
      echo "dit is een geldig email adres";

    }else{
        echo "Geen geldig email address";
      }
  }
?>
</form>

</div>

</input>


</body>


<footer>

</footer>




</html>
