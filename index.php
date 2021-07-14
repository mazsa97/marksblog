<!--
 * = INDEX.PHP
 *
 * PHP FILE FOR THE INDEX/MAIN PAGE
 *
 * ------------------------------------------------------------------------- -->
<?php
error_reporting(0);
require_once("util/dbconfig.php");
include("util/pagination.php");
include("util/utility-functions.php");
include("util/post-search.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Mark's Blog | Latest Posts</title>

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

		<span id="search-icon"><i class="fas fa-search fa-lg"></i></span>
		<input type="text" name="search" placeholder="Search posts..." id="search" autocomplete="off">
		<span id="search-clear-button"><i class="fas fa-times fa-lg"></i></span>
		<div id="search-results">
		</div>

		<div class="index-content-div">
			<h3 id="latest-label">Latest Posts</h3>
			<?php
			$query = mysqli_query($conn, "SELECT * FROM posts WHERE post_status=1 ORDER BY post_queue asc, id asc LIMIT $start_from, $limit");
			if (mysqli_num_rows($query) == 0) {
				emptypostMessage();
			}
			while ($row = mysqli_fetch_array($query)) {
			?>
				<table class="index-news-table">
					<tbody>
						<tr>
							<td class="index-news-table-img-td">
								<?php
								$c_txt = $row['post_content_txt'];
								$c_length = strlen($c_txt);
								$i_txt = $row['post_intro_txt'];
								$i_length = strlen($intro_txt);
								?>
								<?php if ($c_length != 0) : ?>
									<a href="post?url=<?php echo htmlentities($row['url']) ?>" class=""><img src="admin/<?php echo htmlentities($row['post_img']); ?>" class="news-img"></img></a>
									</a>
								<?php elseif ($c_length == 0 && $i_length < 150) : ?>
									<img src="admin/<?php echo htmlentities($row['post_img']); ?>" class="news-img"></img>
								<?php elseif ($c_length == 0 && $i_length >= 150) : ?>
									<a href="post?url=<?php echo htmlentities($row['url']) ?>" class=""><img src="admin/<?php echo htmlentities($row['post_img']); ?>" class="news-img"></img></a>
								<?php endif; ?>
							</td>
							<td class="index-news-table-label-td">
								<?php
								$c_txt = $row['post_content_txt'];
								$c_length = strlen($c_txt);
								$intro_txt = $row['post_intro_txt'];
								$i_length = strlen($intro_txt);
								?>
								<?php if ($c_length != 0) : ?>
									<a href="post?url=<?php echo htmlentities($row['url']) ?>" class="news-link-label">
										<h2 class="index-news-label"><?php echo htmlentities($row['post_label']); ?></h2>
									</a>
								<?php elseif ($c_length == 0 && $i_length < 150) : ?>
									<h2 class="index-news-label"><?php echo htmlentities($row['post_label']); ?></h2>
								<?php elseif ($c_length == 0 && $i_length >= 150) : ?>
									<a href="post?url=<?php echo htmlentities($row['url']) ?>" class="news-link-label">
										<h2 class="index-news-label"><?php echo htmlentities($row['post_label']); ?></h2>
									<?php endif; ?>
							</td>

						</tr>
						<tr>
							<td colspan="2" class="index-news-intro-text"><?php
								$intro_txt = $row['post_intro_txt'];
								$i_length = strlen($intro_txt);
								if ($i_length >= 150) {
									$short_intro_txt = substr($intro_txt, 0, strrpos(substr($intro_txt, 0, 151), ' '));
									$intro_txt_final = $short_intro_txt . "...";
									echo htmlentities($intro_txt_final);
								}
								if ($i_length < 150) {
									echo htmlentities($intro_txt);
								}
							?></td>
						</tr>
					</tbody>
				</table>
				<hr />
			<?php } ?>
		</div>
		<i class="top-of-page-button fas fa-caret-square-up fa-3x"></i>
		<?php include("util/pagination-end.php") ?>
		<?php include("util/footer.php") ?>
	</div>

</body>

</html>