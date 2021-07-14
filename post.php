<!--
 * = POST.PHP
 *
 * PHP FILE FOR THE POSTS PAGE TO DISPLAY THE FULL POST
 *
 * ------------------------------------------------------------------------- -->
<?php
require_once("util/dbconfig.php");
include("util/utility-functions.php");
/*$post_url = $_GET['url'];
$query = mysqli_query($conn, "SELECT * FROM posts WHERE url='$post_url'");*/

$stmnt = $conn->prepare('SELECT * FROM posts WHERE url= ?');
$stmnt->bind_param('s', $_GET['url']);
$stmnt->execute();
$result = $stmnt->get_result();
while ($row = $result->fetch_assoc()) {
?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Mark's Blog | <?php echo htmlentities($row['post_label']); ?></title>

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
				<a href="index"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
				<a href="about"><i class="fas fa-question-circle" title="About us"></i> About</a>
				<a href="contact"><i class="fas fa-address-book" title="Contact us"></i> Contact</a>
				<hr>
				<a href="admin/login"><i class="fas fa-user"></i> Login</a>
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
			<div class="post-content-div">

				<div class="">
					<div class="">
						<img src="admin/<?php echo htmlentities($row['post_img']); ?>" class="post-img"></img>
						<h2 class="post-label"><?php echo htmlentities($row['post_label']); ?></h2>
						<h2 class="post-date"><?php
												$formDatum = $row['date'];
												emptyDate($formDatum, "");
												?>
						</h2>

						<article>
							<div class="reading-time"></div>
						</article>

						<hr />
						<h4 class="post-introduction-text"><?php echo htmlentities($row['post_intro_txt']); ?></h4>
						<hr />
						<section class="post-full-content">
							<p class="post-content-text"><?php echo htmlspecialchars_decode(stripslashes($row['post_content_txt'])); ?></p>
							<section class="post-full-content">
					</div>

				</div>
			<?php } ?>
			<div class="social-share-div">
				<p>Share this post</p>
				<a class="icon-fb" href="<?php echo 'http://www.facebook.com/sharer.php?u=' . urlencode("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>" id="facebook-share" target="_blank" title="Share this post on Facebook!"><i class="fab fa-facebook-square fa-2x"></i></a>
				<a class="icon-tw" href="#" id="twitter-share" target="_blank" title="Share this post on Twitter!"><i class="fab fa-twitter-square fa-2x"></i></a>
			</div>

			</div>
			<i class="top-of-page-button fas fa-caret-square-up fa-3x"></i>
			<?php include("util/footer.php") ?>
		</div>
	</body>
	</html>