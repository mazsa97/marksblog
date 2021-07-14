<!--
 * = HOME.PHP
 *
 * THE PHP FILE FOR THE ADMIN HOME PAGE.
 *
 * ------------------------------------------------------------------------- -->
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin Interface | Home</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, minimum-scale=1">
	<meta charset="utf-8" />
	<meta name="description" content="Mark's Blog - Blog Website. A blog website project im currently working on.">
	<meta name="keywords" content="Márk, Szakács, Website, html, css, js, javascript, jquery, ajax, php, mysql">
	<meta name="author" content="Márk Szakács">

	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/font/css/all.css" rel="stylesheet">
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon">

	<script src="../script/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="../script/script.js" type="text/javascript"></script>

</head>

<body>
	<div class="admin-main-div">
		<header>
			<div class="site-header">
				<a id="website-label" href="home">Admin Interface</a>
			</div>
		</header>
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="sidenav-close-button" onclick="closeNav()"><i class="far fa-times-circle fa-lg"></i></a>
			<a href="home"><i class="fas fa-user-shield"></i> Menu</a>
			<hr>
			<a href="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
			<table class="sidenav-social-icons">
				<tbody>
					<tr>
						<td><a href="https://www.facebook.com/szakacs.mark.7" target="_blank" title="Facebook"><i class="fab fa-facebook-square"></i></a></td>
						<td><a href="https://www.instagram.com/szakacs.mark/" target="_blank" title="Intsagram"><i class="fab fa-instagram-square"></a></i></td>
						<td><a href="mailto:szakacsmark@gmail.com" target="_blank" title="E-mail"><i class="fas fa-envelope-square"></i></a></td>
					</tr>
				</tbody>
			</table>
		</div>
		<span onclick="openNav()" class="sidenav-menu" title="Menu"><i class="fas fa-bars fa-2x"></i></span>
		<div class="admin-content-div">
			<h1>ADMIN HOME PAGE</h1>
			<h3>Please choose, what action do you want to execute.</h3>
			<ul class="admin-home-menu">
				<li><a href="new-post"><i class="fas fa-pen-alt fa-lg"></i> Create new post</a></li>
				<li><a href="list-posts"><i class="fas fa-database fa-lg"></i> Manage posts</a></li>
			</ul>

		</div>
	</div>
</body>

</html>