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
		<link rel="stylesheet" href="../CSS/recepti.css" type="text/css">
        <link rel="stylesheet" href="../CSS/dodajrecept.css" type="text/css">
		<title>Recepti</title>
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
		<div class="search">
			<table>
				<tr>
					<form method="post" action="../PHP/search.php">
						<td>
							<input type="text" name="isci" id="isci" class="search-bar" placeholder="Išči jedi..."> </td>
						<td>
							<button class="potrdi" type="submit">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /> </svg>
							</button>
						</td>
					</form>
				</tr>
			</table>
		</div>

		<div class="dodaj-recept">
			Dodaj nov recept:
			<a href="dodaj-recept.php">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
				</svg>
			</a> 
			
		</div>

        <form method="post" action="../PHP/dodajrecept.php">
            <div class="skupaj">
                <div class="dodaj-celota">
                    <div class="podatek">
                        Id recepta: 
                        <input type="text" name="id" id="id">
                    </div>
                    <div class="podatek">
                        Ime jedi: 
                        <input type="text" name="ime_jedi" id="ime_jedi">
                    </div>
                    <div class="podatek">
                        Opis jedi: 
                        <input type="text" name="opis_jedi" id="opis_jedi">
                    </div>
                    <div class="podatek">
                        Kalorije: 
                        <input type="number" name="kalorije" id="kalorije">
                    </div>
                    <div class="podatek">
                        Število oseb: 
                        <input type="number" name="osebe" id="osebe">
                    </div>
                    <div class="podatek">
                        Čas priprave: 
                        <input type="text" name="cas" id="cas">
                    </div>
                    <div class="podatek">
                        Id vrste jedi: 
                        <input type="number" name="vrsta" id="vrsta">
                    </div>
               <!-- <div class="podatek">
                        Dodaj sliko: 
                        <input type="file" name="slika" id="slika">
                    </div> -->
                </div>

                <div class="dodaj-postopek">
                    <div class="postopek">
                        Št. postopka: 
                        <input type="text" name="posotpek" id="postopek">
                    </div>
                    <div class="postopek">
                        Opis postopka: 
                        <input type="text" name="posotpek-opis" id="postopek-opis">
                    </div>
                </div>
            </div>
            <button class="button1" type="submit" name="Dodaj">Dodaj recept</button>
        </form>

		<footer>
			<div class="footer-leva"></div>
			<div class="footer-desna">
				<a href=""> <img src="../Images/facebook-icon.png" width="28px" alt=""> </a>
				<a href=""> <img src="../Images/instagram-icon.png" width="28px" alt=""> </a>
			</div>
		</footer>
	</body>

	</html>