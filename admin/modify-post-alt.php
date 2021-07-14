<!--
 * = MODIFY-POST-ALT.PHP
 *
 * THE PHP FILE FOR MODIFYING THE GIVEN POST WITHOUT ITS IMAGE.
 *
 * ------------------------------------------------------------------------- -->
<?php
require_once("../util/dbconfig.php");
session_start();
error_reporting(0);
if (!isset($_SESSION['loggedin'])) {
	header('Location: login');
	exit;
}
require_once("../util/modify-post-alt-util.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin Interface | Modify Post Without It's Picture</title>

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
			<h2 class="admin-post-h2">MODIFY POST WITHOUT ITS PICTURE</h2>
			<?php
			$hirid = intval($_GET['id']);
			$query = mysqli_query($conn, "SELECT * FROM posts WHERE id =$hirid");
			while ($row = mysqli_fetch_array($query)) {
			?>
				<form method="post" enctype="multipart/form-data">
					<div class="textfield-label-1">
						<label for="label_txt"><b>Post label</b></label><span class="form-red-star">*</span><br>
						<input type="textfield" name="label_txt" id="label_txt" maxlength="120" placeholder="Write label here..." value="<?php echo htmlentities($row['post_label']); ?>" required />
						<div id="char-left-label"></div>
					</div>


					<div class="textfield-label-2">
						<label for="intro_txt"><b>Introduction text</b></label><span class="form-red-star">*</span><br>
						<textarea type="textfield" name="intro_txt" id="intro_txt" maxlength="250" placeholder="Write introduction text here..." rows="5" required><?php echo htmlentities($row['post_intro_txt']); ?></textarea>
						<div id="char-left-intro"></div>
					</div>


					<div class="textarea-label-1">
						<label for="content_txt"><b>Main text</b></label><br>
						<textarea name="content_txt" class="editorField" maxlength="5000" id="post-textarea"><?php echo htmlentities($row['post_content_txt']); ?></textarea>
						<script>
							CKEDITOR.replace('content_txt');
						</script>
						<div id="char-left-main"></div>
					</div>

					<label for="pdate">Publication date</label>
					<input type="date" id="pdate" name="pdate" class="input-date" value="<?php echo htmlentities($row['date']); ?>">

					<br>
				<?php } ?>
				<div class="admin-submit-notice">
					<h3>NOTICE</h3>
					<p>After your post update, the post will have the following attributes:</p>
					<ul>
						<li>Inactive state</li>
						<li>Same post image, the old picture wont be changed.</li>
					</ul>
					<p>Inputs with <span class="form-red-star">*</span> symbol, must be filled out!</p>
				</div>
				<button type="submit" name="update" class="publish-button">MODIFY</button>
				</form>

		</div>

	</div>
</body>

</html>