<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="./css/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
		<script
			src="https://kit.fontawesome.com/caa9d418fd.js"
			crossorigin="anonymous"></script>
		<title>Strona na SKiTI</title>
	</head>
	<body>
    <!-- nawigacja -->
		<nav>
			<div class="wrapper">
				<div class="nav-items">
                    <span class="nav-logo"><i class="fa-solid fa-music"></i><span>Hity</span>.pl</span>
					<a href="./index.html">Home</a>
					<a href="./onas.html">projekt</a>
					<a href="./propozycje.html">wasze propozycje</a>
					<a href="./kontakt.html">kontakt</a>
				</div>
			</div>
		</nav>


<?php
    $date = date("Y-m-d H:i");
?>
<p>Witaj dzisiaj jest <?php echo $date;?></p>
<footer class="footer-box">
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.youtube.com"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://open.spotify.com/"><i class="fa-brands fa-spotify"></i></a>
            <a href="https://discord.com/channels/@me"><i class="fa-brands fa-discord"></i></a>
        <div class="footer-text">
            <p>
                &copy; 2023 by Łukasz Suski | <span class="logo-text">Hity</span
                ><span class="pl-text">PL</span>
            </p>
        </div>
    </footer>
    <script src="./script.js"></script>
</body>
</html>
