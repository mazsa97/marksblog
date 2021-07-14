<!--
 * = LIST-POSTS.PHP
 *
 * THE PHP FILE FOR LISTING ALL THE POST FROM THE DATABASE.
 *
 * ------------------------------------------------------------------------- -->
<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['loggedin'])) {
	header('Location: login');
	exit;
}
    include("../util/dbconfig.php");
	include("../util/list-post-util.php");
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
	<title>Admin Interface | Manage Posts</title>

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
				<!--<a href="admin/login.php" id="adminMenu"><i class="fas fa-user fa-2x"></i></a>-->
                <form>
		<span id="search-icon"><i  class="fas fa-search fa-lg"></i></span>
		<input type="text" name="search" placeholder="Search posts..." id="search-bar" autocomplete="off" onkeyup="listPosts()">
		</form>
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
    
		<div class="admin-post-list-div">
		<div class="mainAdmin">
			<h2 class="post-table-label">Posts <br>(Ordered by their Queue Nr.)</h2>
            <hr class="post-hr">
			<table id="post-table">
				<thead>
					<tr>
						<th>Label</th>
						<th>Nr.</th>						
						<th>Date</th>
						<th>Status</th>
						<th>Actions</th>
					</tr>
				</thead>				
				<tbody>
					<?php
					$query = mysqli_query($conn, "SELECT * FROM posts ORDER BY post_queue asc, id asc");
					$rowcount = mysqli_num_rows($query);

					if ($rowcount == 0 ) {
					?>
						<tr>
							<td colspan="5">
								<h3>There is no posts in the database!</h3>
							</td>
						<tr>
							<?php
						} else {
							while ($row = mysqli_fetch_array($query)) {
							?>
						<tr class="tablaTR">
							
							<td class="post-table-td-label"><b><?php echo htmlentities($row['post_label']); ?></b></td>
							<td class="post-table-td-queue"><?php echo htmlentities($row['post_queue']) ?></td>
							<td class="post-table-td-date"><?php emptyDate($row['date'],"-") ?></td>
							<td class="post-table-td-active"><?php statusText($row['post_status']) ?></td>
							<td class="post-table-td-actions"><a class="modify-link-1" href="modify-post?id=<?php echo htmlentities($row['id']); ?>"><i class="fas fa-edit" title="Modify post with its picture."></i></a>
								&nbsp; <a class="modify-link-2" href="modify-post-alt?id=<?php echo htmlentities($row['id']); ?>"><i class="far fa-edit" title="Modify post without its picture."></i></a>
								&nbsp;<a class="delete-link" href="list-posts?id=<?php echo htmlentities($row['id']); ?>&&action=delete" onclick="return confirm('Delete selected post?')"><i class="fas fa-trash-alt" title="Delete post."></i></a>
								&nbsp;<a class="status-link" href="list-posts?id=<?php echo htmlentities($row['id']); ?>&&action=status_change" onclick="return confirm('Change post status?')"><i class="fas fa-exchange-alt" title="Change post's status."></i></a>
								&nbsp;<a class="" href="list-posts?id=<?php echo htmlentities($row['id']); ?>&&action=move_up"><i class="fas fa-arrow-up" id="up-arrow" title="Move post up in queue."></i></a>
								&nbsp;<a class="" href="list-posts?id=<?php echo htmlentities($row['id']); ?>&&action=move_down"><i class="fas fa-arrow-down" id="down-arrow" title="Move post down in queue."></i></a></td>
						</tr>
				<?php }
						} ?>
				</tbody>
			</table>
			<h3 id="search-result-tr">No search results!</h3>
			<div id="status-buttons-div">
			<form method="POST" action="../util/enable-all-posts.php">
        		<input type="submit" class="change-buttons" id="enable-posts-button" name="all-posts-enable" value="Activate all"/>
    		</form>
			<form method="POST" action="../util/disable-all-posts.php">
        		<input type="submit" class="change-buttons" id="disable-posts-button" name="all-posts-disable" value="Inactivate all"/>
    		</form>
			</div>
			
            <hr class="post-hr">

            <div class="post-footnote">  
            <h4>Footnote</h4>
            <p><i class="fas fa-edit modify-link-1" ></i> Modify post with its picture.</p>
            <p><i class="far fa-edit modify-link-2"></i> Modify post without its picture.</p>
            <p><i class="fas fa-trash-alt delete-link"></i> Delete post.</p>
            <p><i class="fas fa-exchange-alt status-link"></i>  Change posts status.</p>
            <p><i class="fas fa-arrow-up" id="up-arrow"></i> Move post up in queue.</p>
            <p><i class="fas fa-arrow-down" id="down-arrow"></i> Move post down in queue.</p>
            </div>

			
		</div>
</ul>
		</div>
	</div>
	</body>

	</html>