<?php
	$loginProfile = "Login";
	$link = "../index.php";
	$logo = "glyphicon glyphicon-log-in";

	if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1) {
		$loginProfile = "My Profile: " . $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if (isset($_SESSION['Category']) && $_SESSION['Category'] != 1) {
			$link = "profile.php";
		} else {
			$link = "../profileView.php";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Farm-India</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<header id="header">
		<h1><a href="index.php">Farm-India</a></h1>
		<nav id="nav">
			<ul>
				<li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="<?= $link; ?>"><span class="<?= $logo; ?>"></span><?= " " . $loginProfile; ?></a></li>
				<li><a href="../market.php"><span class="glyphicon glyphicon-grain"> Digital-Market</a></li>
			</ul>
		</nav>
	</header>
</body>
</html>
