<!--
 * = LOGIN.PHP
 *
 * THE PHP FILE FOR THE LOGIN INTERFACE.
 *
 * ------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Mark's Blog | Admin Login</title>

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

<body class="admin-body">
	<header>
		<div class="site-header">
			<a id="website-label" href="../index">Mark's Blog</a>
		</div>
	</header>
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="sidenav-close-button" onclick="closeNav()"><i class="far fa-times-circle fa-lg"></i></a>
		<a href="../index"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
		<a href="../about"><i class="fas fa-question-circle" title="About us"></i> About</a>
		<a href="../contact"><i class="fas fa-address-book" title="Contact us"></i> Contact</a>
		<hr>
		<a href="admin/login" class="sidenav-selected"><i class="fas fa-user"></i> Login</a>
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
	<div class="admin-login-div">
		<form method="post" class="login-form" action="../util/authenticate.php">

			<legend>Admin Login</legend>
			<div class="form-field">

				<input type="text" required="" name="username" id="username_field" required readonly onfocus="this.removeAttribute('readonly');" onkeyup="checkForm()">
				<label for="name">Username</label>
			</div>
			<div class="form-field">
				<input type="password" required="" name="password" id="password_field" autocomplete="new-password" required onkeyup="checkForm()">
				<label for="name">Password</label>
			</div>
			<button type="submit" name="login" class="admin-login-button" id="login-button" disabled="disabled">Login</button>
			<p id="login-help-text">Need help? Contact us <a href="../contact">here</a></p>
		</form>
	</div>

</body>

</html>