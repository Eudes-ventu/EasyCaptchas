<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
</head>
<body>
<p>Saisissez le code ci-dessous</p>
<?php
session_start();
$affichage = "<img src='script-captchas.php' alt='captchas' />";
if (isset($_POST['send'])) {
	$answer = $_POST['captcha'];
	if (empty($answer))
    { echo "<p style='color: red;'>Le code de sécurité doit être impérativement saisi !</p>"; }
    elseif (isset($_SESSION['$code']))
    {
		if($code!=value.input)
		{ echo "Code validé avec succès"; }
    }
	else { echo "<p style='color: red;'>Code invalide</p>"; }
}
echo $affichage;
?>
<form method="POST" action="#">
<input type="text" name="captcha">
<input type="submit" name="send">
</form>
</body>
</html>