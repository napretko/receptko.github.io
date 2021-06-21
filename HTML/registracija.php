<?php
    session_start();
?>
	<!DOCTYPE html>
	<html>

	<head>
		<title>Ustvari racun</title>
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" href="../CSS/registracija.css"> </head>

	<body>
		<div class="prijava">
			<div class="prijava-left">
				<div class="nav-bar">
					<div class="nav-bar-left">
						<a href="index.php">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /> </svg>
						</a>
						<div class="nav-bar-logo">Receptko</div>
					</div>
					<div class="nav-bar-right">
						<div class="siva">Že imaš račun?</div>
						<a href="prijava.php">
							<button class="button2">Prijavi se</button>
						</a>
					</div>
				</div>
				<div class="abc">
					<form class="login-form" action="../PHP/registracija-php.php" method="post">
						<h2>Registracija</h2>
						<div class="uime">Uporabniško ime</div>
						<input type="text" id="uporabnisko_ime" name="uporabnisko_ime" required>
						<div class="obvestilo">*Obvezno polje</div>
						<div class="uime">Geslo</div>
						<input type="password" id="Geslo" name="Geslo" required>
						<div class="obvestilo">*Obvezno polje</div>
						<div class="uime">Ime</div>
						<input type="text" id="Ime" name="Ime" required>
						<div class="obvestilo">*Obvezno polje</div>
						<div class="uime">Priimek</div>
						<input type="text" id="Priimek" name="Priimek" required>
						<div class="obvestilo">*Obvezno polje</div>
						<div class="uime">Telefonska številka</div>
						<input type="tel" id="Telefonska" name="Telefonska" pattern="[0-9]{9}" required>
						<div class="obvestilo">Tel. številka mora vsebovati 9 številk</div>
						<div style="margin-top: 30px;">
							<button class="button1" type="submit" name="registracija">Registriraj se</button>
						</div>
					</form>
				</div>
				<div class="napaka">
					<?php
                            if(isset($_SESSION['napaka']))
                            {
                                if ($_SESSION['napaka']=="Uporabnisko_ime1") 
                                {
                                    echo "Uporabniško ime je napačno.";
                                }
                                else if ($_SESSION['napaka']=="Geslo") 
                                {
                                    echo "Geslo je napačno.";
                                } 
                            }
                        ?>
				</div>
				<div class="registracija">
					<div class="registracija-2"> Že imaš račun? <a href="prijava.php">Prijavi se</a> </div>
				</div>
			</div>
			<div class="prijava-right"> <img src="../Images/CyberSecurity2.jpg" alt=""> </div>
		</div>
	</body>

	</html>