<?php
$session;
$Gebruikersnaam = $_POST['Username'];
$Wachtwoord = $_POST['Password'];

if (empty($Gebruikersnaam && $Wachtwoord))
{
	echo "<h2 align='center'>Nothing was entered in one or both fields</h2>";
}
else
{
	$servername = "localhost";
	$username = "Gert";
	$password = "ZImZDvgpX5SOw8Oi";
	$dbname = "accounts";

	$conn = new mysqli($servername, $username, $password, $dbname);
	$Server_Gebruikersnaam = mysqli_query($conn, "SELECT `Gebruikersnaam`,`Wachtwoord` FROM `gebruikersgegevens` WHERE `Gebruikersnaam`='$Gebruikersnaam'");
	$Server_Wachtwoord = mysqli_query($conn, "SELECT Wachtwoord FROM `gebruikersgegevens` WHERE Wachtwoord='$Wachtwoord'");

	$Server_Gebruikersnaam_result = mysqli_fetch_assoc ($Server_Gebruikersnaam)["Gebruikersnaam"];
	$Server_Wachtwoord_result = mysqli_fetch_assoc ($Server_Wachtwoord)["Wachtwoord"];

	if ($Gebruikersnaam == $Server_Gebruikersnaam_result && $Wachtwoord == $Server_Wachtwoord_result)
	{
		echo "<h2 align='center'>You are now logged in, you will be redirected in a few seconds</h2>";
		echo "<script> 
		var Gebruikersnaam = '$Gebruikersnaam';
		sessionStorage.setItem('Username', Gebruikersnaam);
		</script>";
		echo ("<script type='text/javascript'>
		setTimeout(redirect, 3000);
		function redirect()
		{
			window.location.href = 'C:\xampp\htdocs\PIU\Login_page.html';
		}
		</script>");
	}
	else
	{
		echo "<div align='center'><h1>Invalid Username or Password<h1></div>";
	}
}
?>