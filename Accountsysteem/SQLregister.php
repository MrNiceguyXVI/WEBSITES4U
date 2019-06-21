<?php
$Gebruikersnaam = $_POST['Username'];
$Wachtwoord = $_POST['Password'];

$servername = "localhost";
$username = "Gert";
$password = "ZImZDvgpX5SOw8Oi";
$dbname = "accounts";

$conn = new mysqli($servername, $username, $password, $dbname);

if (empty($Gebruikersnaam && $Wachtwoord))
{
	echo"<h2 align='center'>Nothing was entered in one or both fields</h2>";
}
else{
	if (isset($_POST['Agree']))
	{
		$username_server = mysqli_query($conn, "SELECT `Gebruikersnaam` FROM `gebruikersgegevens` WHERE `Gebruikersnaam`='$Gebruikersnaam'");
		$Server_Gebruikersnaam_result = mysqli_fetch_assoc ($username_server)["Gebruikersnaam"];
		
		if ($Server_Gebruikersnaam_result == $Gebruikersnaam)
		{
			echo "<h2 align='center'>This username was already taken</h2>";
			echo "<script>
			setTimeout(redirectback, 3000);
			function redirectback()
			{
				window.location.href = '/Register_page.html';
			}
			</script>";
		}
		else
		{
			$sql = "INSERT INTO gebruikersgegevens (Gebruikersnaam, Wachtwoord, Admin)
			VALUES ('$Gebruikersnaam', '$Wachtwoord', 'No')";
				mysqli_query($conn, $sql);
				echo "<h2 align='center'>Your account has now been created</h2>";
				echo "<script>
					setTimeout(redirect, 3000);
					function redirect()
					{
						window.location.href = '/Login_page.html';
					}
				</script>";
		}
	}
	else
	{
		echo "You need to agree to the EULA";
	}
}
?>