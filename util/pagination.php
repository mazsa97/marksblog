<!--
 * = PAGINATION-END.PHP
 *
 * PHP FILE FOR THE PAGINATION FUNCTION ON THE SITE.
 *
 * ------------------------------------------------------------------------- -->
<?php

$limit = 5;

if (isset($_GET["page"])) {
	$page  = $_GET["page"];
} else {
	$page = "1";
};

$start_from = ($page - 1) * $limit;
$result = mysqli_query($conn, "SELECT * FROM posts WHERE post_status=1 ORDER BY post_queue asc, id asc LIMIT $start_from, $limit");
?>