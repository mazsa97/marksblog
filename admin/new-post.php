<!--
 * = NEW-POST.PHP
 *
 * THE PHP FILE FOR CREATING NEW POST.
 *
 * ------------------------------------------------------------------------- -->
<?php
require_once("../util/dbconfig.php");
session_start();
error_reporting(0);
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
require_once("../util/new-post-util.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin Interface | New Post</title>

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
	<script src="../plugins/ckeditor/ckeditor.js"></script>

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

		<div class="admin-new-post-div">
			<h2 class="admin-post-h2">CREATE NEW POST</h2>
			<form method="post" action="new-post.php" enctype="multipart/form-data">
				<div class="textfield-label-1">
					<label for="label_txt"><b>Post label</b></label><span class="form-red-star">*</span><br>
					<input type="textfield" name="label_txt" id="label_txt" maxlength="120" placeholder="Write label here..." required />
					<div id="char-left-label"></div>
				</div>

				<div class="textfield-label-2">
					<label for="intro_txt"><b>Introduction text</b></label><span class="form-red-star">*</span><br>
					<textarea type="textfield" name="intro_txt" id="intro_txt" maxlength="250" placeholder="Write introduction text here..." rows="5" required></textarea>
					<div id="char-left-intro"></div>
				</div>

				<div class="textarea-label-1">
					<label for="content_txt"><b>Main text</b></label><br>
					<textarea name="content_txt" class="editorField" maxlength="5000" id="post-textarea"></textarea>
					<script>
						CKEDITOR.replace('content_txt');
					</script>
					<div id="char-left-main"></div>
				</div>

				<label for="date">Publication date</label>
				<input type="date" id="date" name="date" class="input-date">


				<input type="file" id="postimage" name="postimage" class="custom-file-input" required><span class="form-red-star">*</span>
				<p id='file_name'></p>
				<br>
				<div class="admin-submit-notice">
					<h3>NOTICE</h3>
					<p>After your post submission, the post will have the following attributes:</p>
					<ul>
						<li>Inactive state</li>
						<li>1st position in the post queue order</li>
						<li>All the other posts will be shifted back in the queue</li>
					</ul>
					<p>Inputs with <span class="form-red-star">*</span> symbol, must be filled out!</p>
				</div>
				<button type="submit" name="submit" class="publish-button">PUBLISH</button>
			</form>
		</div>

	</div>
</body>

</html>