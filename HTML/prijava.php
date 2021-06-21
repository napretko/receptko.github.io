<?php
    session_start();
?>
	<!DOCTYPE html>
	<html>

	<head>
		<link rel="stylesheet" href="../CSS/prijava.css" type="text/css">
		<title>Prijavi se v racun</title>
	</head>

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
						<div class="siva">Še nimaš računa?</div>
						<a href="registracija.php">
							<button class="button2">Registriraj se</button>
						</a>
					</div>
				</div>
				<div class="abc">
					<form class="login-form" action="../PHP/prijava-php.php" method="post">
						<h2>Prijava</h2>
						<div class="uime">Uporabniško ime</div>
						<input type="text" id="uporabnisko_ime" name="uporabnisko_ime">
						<div class="geslo">Geslo</div>
						<input type="password" id="Geslo" name="Geslo" required>
						<br></br>
						<div style="margin-top: 20px;"><span></span></div>
						<div style="margin-top: 20px;"></div>
						<div style="margin-top: 30px;">
							<button class="button1" type="submit" name="Prijava">Prijavi se</button>
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
				<div class="registracija"> Še nimaš računa? <a href="registracija.php">Registriraj se</a> </div>
			</div>
			<div class="prijava-right"> <img src="../Images/CyberSecurity2.jpg" alt=""> </div>
		</div>
	</body>

	</html>