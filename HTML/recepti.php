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

		<div class="vsi-recepti">
			<?php
   $sql="SELECT * FROM recept";
    $result = $db->query($sql);

    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
           ?>
				<div class="recept">
					<div class="recept-slika">
						<?= '<img src="data:image;base64,' .base64_encode($row['slika']).'">'?> </div>
					<div class="recept-podatki">
						<div class="recept-ime">
							<a href="recept.php?id=<?= $row['id_recepta'];?>">
								<?=  $row["ime_jedi"]?>
							</a>
						</div>
						<div class="recept-opis">
							<?=  $row["opis_jedi"] ?>
						</div>
						<div class="cas-kolicina">
							<div class="kolicina">
								<?= $row["količina"]?>
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
										<path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" /> </svg>
							</div>
							<div class="cas">
								<?=  $row["cas_priprave"]?>
							</div>
						</div>
					</div>
				</div>
				<br>
				<?php 
        }
    }
?>
		</div>

		<footer>
			<div class="footer-leva"></div>
			<div class="footer-desna">
				<a href=""> <img src="../Images/facebook-icon.png" width="28px" alt=""> </a>
				<a href=""> <img src="../Images/instagram-icon.png" width="28px" alt=""> </a>
			</div>
		</footer>
	</body>

	</html>