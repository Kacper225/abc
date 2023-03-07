<?php
	session_start();
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: zalogowano.php');
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="Stylesheet" type="text/css" href="style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">

</head>

    <body>
      <center>

<div class="mid">
<table>

<form method="POST" action="zaloguj.php">
  <tr>
  <td><label>Login:</label></td>
  <td><input type="text" name="login"></td><br>
  </tr>
  <td><label>Haslo:</label></td>
  <td><input type="password" name="haslo"></td><br><br>
  <tr>
    <td colspan="2" class="zaloguj"><input class="log" type="submit" value="Zaloguj"></td>
  </tr>
</form></table>
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>
</div></center>
   
</body>
</html>