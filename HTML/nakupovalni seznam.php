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
		<link rel="stylesheet" href="../CSS/nakupovalni_seznam.css" type="text/css">
		<title>Nakupovalni seznam</title>
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
		<div class="nakupovalni-seznam">
			<div class="grocery-container">
				<h1 class="naslov" id="title">Nakupovalni seznam</h1>
				<div class="form">
					<svg onclick="eraseList()" xmlns="http://www.w3.org/2000/svg" width="1.7em" height="1.7em" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
						<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" /> </svg>
					<input id="one-item" maxlength="25">
					<br>
					<br> </div>
				<div id="all-items"></div>
			</div>
		</div>
		<footer>
			<div class="footer-leva"></div>
			<div class="footer-desna">
				<a href=""> <img src="../Images/facebook-icon.png" width="28px" alt=""> </a>
				<a href=""> <img src="../Images/instagram-icon.png" width="28px" alt=""> </a>
			</div>
		</footer>
		<script src="../JS/nakupovalni-seznam.js"></script>
	</body>

	</html>