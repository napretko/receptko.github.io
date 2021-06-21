<?php
    session_start();
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../CSS/admin.css" type="text/css">
		<title>Admin</title>
	</head>

	<body>
		<section>
			<div class="nav-bar">
				<div class="nav-bar-left">
					<a href="index.php">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" /> </svg>
					</a>
				</div>
				<div class="nav-bar-right">
					<?php 
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
                {
                    echo '<a >POZDRAVLJEN/A '.$_SESSION['uporabnisko_ime'].'</a>';
                    echo 
                        '<a href="../PHP/odjava.php">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </a>';
                }
            ?> </div>
			</div>
			<div class="naslov">Administrator</div>
		</section>
	</body>

	</html>