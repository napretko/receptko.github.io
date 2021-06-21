<?php
    session_start();
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../CSS/index.css" type="text/css">
		<title>Receptko</title>
	</head>

	<body>
		<header>
			<div class="nav-bar">
				<div class="nav-bar-left"> <a class="gold2" href="index.php">Receptko</a> </div>
				<div class="nav-bar-right"> <a href="recepti.php">Recepti</a> <a href="ShujsevalniProgrami.php">Dietni programi</a> <a href="nakupovalni seznam.php">Nakupovalni seznam</a> <a href="kalkulator kalorij.php">Kalkulator kalorij</a>
					<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
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
            }?> </div>
			</div>
			<div class="ozadje"> </div>
		</header>
		<section class="welcome-section">
			<div class="welcome"></div>
			<!-- <img src="../Images/ponev.png" alt=""> --></section>
		<section class="about-us-section">
			<div class="about-us">
				<div class="about-us-left"> <img src="../Images/Instagram.jpg" alt=""> </div>
				<div class="about-us-right">
					<div class="text">
						<p class="gold2">Odkrijte</p>
						<h1>najino zgodbo</h1>
						<p>Sva Tin in Luka, dijaka 4. letnika Srednje šole za kemijo, elektrotehniko in računalništvo. </p> </div>
				</div>
			</div> <img src="../Images/Slikica.png" class="slika"> </section>
		<section class="jedi">
			<div class="jedi-info">
				<div class="jedi-info-leva">
					<p class="gold2">Odkrijte</p>
					<h1>naše recepte</h1> </div>
				<div class="jedi-info-desna">
					<p>Najna spletna stran ponuja širok nabor izbranih prvovrstnih receptov. Vsebuje ogromno sladic, glavnih jedi ter predjedi s katerimi boste zagotovo presenetili vaše najbližje. Recepti si vrstijo od preprostih, takšnih, ki jih je sposoben pripraviti prav vsakdo, vse do zapletenih receptov, izbranih od priznanih mojstrov kulinarike. V kolikor želite odkriti naše recepte kliknite na zavihek: RECEPTI ter začnite kuhati sedaj...</p>
				</div>
			</div>
			<div class="predjedi">
				<div class="predjedi-leva"> <img src="../Images/solate.png" alt=""> </div>
				<div class="predjedi-desna">
					<p class="gold2">Predjedi</p> Kot izbor za predjedi smo za vas izbrali recepte, ki so preprosti za pripravo, hitri ter se priležejo h katerikoli vrsti glavne jedi. Čaka vas izbor vse od ribjih predjedi do solat in juh.</div>
			</div>
			<div class="glavne-jedi">
				<div class="glavne-jedi-leva">
					<p class="gold2">Glavne jedi</p> Za glavne jedi so za vas pripravljeni recepti naših prvovrstnih gurmanov. Recepti se podajajo vse od mesnih jedi, morskih ali pa vegeterjanskih in veganskih dobrot.</div>
				<div class="glavne-jedi-desna"> <img src="../Images/glavnajed.png" alt=""> </div>
			</div>
			<div class="sladice">
				<div class="sladice-leva"> <img src="../Images/sladice.png" alt=""> </div>
				<div class="sladice-desna">
					<p class="gold2">Sladice</p>Tortice, sadne kupe, palačinke, šmorni, potice, pite in še mnogo več...</div>
			</div>
		</section>
		<footer>
			<div class="footer-leva"></div>
			<div class="footer-desna">
				<a href=""> <img src="../Images/facebook-icon.png" width="28px" alt=""> </a>
				<a href=""> <img src="../Images/instagram-icon.png" width="28px" alt=""> </a>
			</div>
		</footer>
	</body>

	</html>