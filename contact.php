<!--
 * = CONTACT.PHP
 *
 * PHP FILE FOR THE CONTACT PAGE
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
			<a href="about"><i class="fas fa-question-circle" title="About us"></i> About</a>
			<a href="contact" class="sidenav-selected"><i class="fas fa-address-book" title="Contact us"></i> Contact</a>
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
				<h1>Contact us</h1>
				<div id="contact-icon-div">
					<p><i class="fas fa-envelope fa-2x"> </i> E-mail: <a href="mailto:szakacsmark@gmail.com" class="contact-href-links">szakacsmark@mail.com</a></p>
					<p><i class="fas fa-phone-square-alt fa-2x"></i> Phone: <a href="tel:+36705421965" class="contact-href-links">+36-70-542-1965</a></p>
					<p><i class="fas fa-map-marked-alt fa-2x"></i> 6721 Szeged, Hungary</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d176631.64435741768!2d20.00038615263729!3d46.23294095485579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474487e22bcce54b%3A0x400c4290c1e1190!2sSzeged!5e0!3m2!1shu!2shu!4v1615382252635!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>

		</div>
	</div>
</body>

</html>