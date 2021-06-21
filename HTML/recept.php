<?php
    session_start();
    $db=new mysqli('localhost','root','','recepti') or die("Ni se mogoče povezati");
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<script src="jquery.min.js"></script>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../CSS/index.css" type="text/css">
		<link rel="stylesheet" href="../CSS/recept.css" type="text/css">
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
		<?php
   $id = $_GET['id'];
   $sql="SELECT * FROM recept r INNER JOIN recept_sestavine rs ON r.id_recepta = rs.id_recepta INNER JOIN sestavine s ON rs.id_sestavina = s.id_sestavina WHERE r.id_recepta = '$id'";
   $result = $db->query($sql);
   $row = $result->fetch_assoc();

   $sql2="SELECT * FROM recept_sestavine rs WHERE id_recepta = '$id'";
   $result2 = $db->query($sql);

   $sql3="SELECT * FROM recept r INNER JOIN recept_priprava rp ON r.id_recepta = rp.id_recepta INNER JOIN priprava_jedi p ON rp.id_koraka = p.id_koraka WHERE rp.id_recepta = '$id'";
   $result3 = $db->query($sql3);
   //echo var_dump($id);   
?>
			<div class="recept">
				<div class="podrobnosti1">
					<div class="recept-slika">
						<?= '<img src="data:image;base64,' .base64_encode($row['slika']).'">'?> </div>
					<div class="podrobnosti">
						<div class="podrobnosti-ime">
							<?=  $row["ime_jedi"]?>
						</div>
						<div class="podrobnosti-opis">
							<?=  $row["opis_jedi"] ?>
								<hr> </div>
					</div>
				</div>
				<div class="priprava">
					<div class="priprava-sestavine">
						<div class="sestavine-text"> SESTAVINE
							<hr> </div>
						<div class="tabela-sestavine">
							<table class="tabelca">
								<tr class="tabela-kolicina">
									<td class="L1"> Sestavine za </td>
									<td class="D">
										<?= $row["količina"]?>
											<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
												<path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" /> </svg>
									</td>
								</tr>
								<?php
            while($row2 = $result2->fetch_assoc()) 
            {?>
									<tr>
										<td class="L">
											<?= $row2["kolicina"]?>
										</td>
										<td class="D">
											<?=  $row2["ime_sestavine"]?>
										</td>
									</tr>
									<?php
            }
            ?>
							</table>
						</div>
					</div>
					<div class="priprava-postopek">
						<div class="priprava-text"> POSTOPEK
							<hr> </div>
						<table>
							<tr class="priprava-cas">
								<td> Čas: </td>
								<td>
									<?=  $row["cas_priprave"]?>
								</td>
							</tr>
							<?php
                while($row3 = $result3->fetch_assoc()) 
                {?>
								<tr>
									<td class="L2">
										<?= $row3["id_koraka"]?>
									</td>
									<td class="D2">
										<?=  $row3["opis_jedi"]?>
									</td>
								</tr>
								<?php
                }
                ?>
						</table>
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
	</body>

	</html>