<?php
    session_start();
    $db=new mysqli('localhost','root','','recepti') or die("Ni se mogoče povezati");
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../CSS/index.css" type="text/css">
		<link rel="stylesheet" href="../CSS/kalkulator_kalorij.css" type="text/css">
		<title>Kalkulator kalorij</title>
	</head>

	<body>
		<header>
			<div class="nav-bar">
				<div class="nav-bar-left"> <a class="gold2" href="index.php">Receptko</a> </div>
				<div class="nav-bar-right"> <a href="recepti.php">Recepti</a> <a href="ShujsevalniProgrami.php">Dietni programi</a> <a href="nakupovalni seznam.php">Nakupovalni seznam</a> <a href="kalkulator kalorij.php">Kalkulator kalorij</a>
					<?php 
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
                {
                    echo '<a >'.$_SESSION['uporabnisko_ime'].'</a>';
                    echo 
                        '<a href="../PHP/odjava.php">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 30 30" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </a>';
                }
                else
                {
                    echo 
                        '<a href="prijava.php">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor">
                                <path fillRule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clipRule="evenodd" />
                            </svg>
                        </a>';
                }
            ?> </div>
			</div>
			<div class="ozadje"> </div>
		</header>
		
		<div class="kalkulatorja-skupaj">
			<div class="kalkulator-kalorij">
				<div class="kalkulator-naslov">Kalkulator kalorij</div>
				<div class="kalkulator-text">Uporabi kalkulator kalorij za izračun števila kalorij na dan, ki jih potrebuje tvoje telo za vzdrževanje trenutne teže.</div>
				<div class="kalkulator-podatki">
					<h3>Vnesite svoje podatke</h3>
					<input class="input1" type="text" id="starost" name="starost" placeholder="Starost">
					<input class="input1" type="number" id="visina" name="visina" placeholder="Višina">
					<input class="input1" type="number" id="teza" name="teza" placeholder="Teža">
					<div>
						<button class="gumb-izracun" id="btnIzracun" onclick="izracun()">Izračunaj</button>
					</div>
				</div>
				<div class="rezultat">
					<div class="rezultat-text">Rezultat kalorij:</div>
					<div class="rezultat-stevilo" id="rezultat"></div>
				</div>
			</div>
		</div>

		<footer>
			<div class="footer-leva"></div>
			<div class="footer-desna">
				<a href=""> <img src="../Images/facebook-icon.png" width="28px" alt=""> </a>
				<a href=""> <img src="../Images/instagram-icon.png" width="28px" alt=""> </a>
			</div>
		</footer>
		<script src="../JS/kalkulator-kalorij.js"></script>
	</body>

	</html>