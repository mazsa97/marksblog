<!--
 * = ABOUT.PHP
 *
 * PHP FILE FOR THE ABOUT PAGE
 *
 * ------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Mark's Blog | About us</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, minimum-scale=1">
	<meta charset="utf-8" />
	<meta name="description" content="Mark's Blog - Blog Website. A blog website project im currently working on.">
	<meta name="keywords" content="Márk, Szakács, Website, html, css, js, javascript, jquery, ajax, php, mysql">
	<meta name="author" content="Márk Szakács">

	<link href="css/style.css" rel="stylesheet">
	<link href="css/font/css/all.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">

	<script src="script/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script src="script/script.js" type="text/javascript"></script>



</head>

<body>
	<div class="site-main-div">
		<header>
			<div class="site-header">
				<a id="website-label" href="index" title="Home">Mark's Blog</a>
			</div>
		</header>
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="sidenav-close-button" onclick="closeNav()"><i class="far fa-times-circle fa-lg"></i></a>
			<a href="index"><i class="fas fa-home" title="Home"></i> Home</a>
			<a href="about" class="sidenav-selected"><i class="fas fa-question-circle" title="About us"></i> About</a>
			<a href="contact"><i class="fas fa-address-book" title="Contact us"></i> Contact</a>
			<hr>
			<a href="admin/login"><i class="fas fa-user"></i> Login</a>
			<table class="sidenav-social-icons">
				<tbody>
					<tr>
						<td><a href="https://www.facebook.com/szakacs.mark.7" target="_blank" title="Facebook"><i class="fab fa-facebook-square"></i></a></td>
						<td><a href="https://www.instagram.com/szakacs.mark/" target="_blank" title="Intsagram"><i class="fab fa-instagram-square"></i></a></td>
						<td><a href="mailto:szakacsmark@gmail.com" target="_blank" title="E-mail"><i class="fas fa-envelope-square"></i></a></td>
					</tr>
				</tbody>
			</table>
		</div>
		<span onclick="openNav()" class="sidenav-menu" title="Menu"><i class="fas fa-bars fa-2x"></i></span>
		<div class="index-content-div">
			<div class="about-content">
				<h1>About us</h1>
				<p>Mark's Blog is a blog website project made by Márk Szakács</p>
				<p>The website tries to simulate a real blog.</p>
				<p>If you have access to the admin interface, you can make, modify, manage posts, which will appear on the index page.</p>
				<p>Feel free to browse the whole site!</p>
				<p>If you would like to contact us, you can do it <a href="contact">here</a></p>
			</div>

		</div>
	</div>
</body>

</html>