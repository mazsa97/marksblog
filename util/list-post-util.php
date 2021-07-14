<!--
 * = LIST-POST-UTIL.PHP
 *
 * PHP FILE FOR THE POST TABLE FUNCTIONS IN THE ADMIN PAGE.
 *
 * ------------------------------------------------------------------------- -->
<?php
require_once("utility-functions.php");
$action = isset($_GET['action']) ? $_GET['action'] : NULL;
switch ($action) {

	case 'delete':
		$post_id = intval($_GET['id']);
		$res = mysqli_query($conn, "SELECT post_img FROM posts WHERE id = '$post_id'");
		$row = mysqli_fetch_array($res);
		$path = $row['post_img'];
		unlink(realpath($path));
		$query = mysqli_query($conn, "DELETE FROM posts WHERE id='$post_id'");
		break;

	case 'status_change':
		$post_id = intval($_GET['id']);
		$query = mysqli_query($conn, "UPDATE posts SET post_status = IF(post_status=1, 0, 1) WHERE id='$post_id'");
		break;

	case 'move_up':
		$post_id = intval($_GET['id']);
		$res = mysqli_query($conn, "SELECT post_queue FROM posts WHERE id = '$post_id'");
		while ($row = mysqli_fetch_row($res)) {
			$v = intval($row[0]);
		}
		if ($v > 1) {
			mysqli_query($conn, "UPDATE posts SET post_queue = (SELECT post_queue FROM posts WHERE id = '$post_id') - 1 WHERE id = '$post_id'");
		}
		break;

	case 'move_down':
		$post_id = intval($_GET['id']);
		$res = mysqli_query($conn, "SELECT post_queue FROM posts WHERE post_queue = (SELECT MAX(post_queue) FROM posts)");
		$res2 = mysqli_query($conn, "SELECT post_queue FROM posts WHERE post_queue != (SELECT MAX(post_queue) FROM posts) ORDER BY post_queue DESC LIMIT 1");

		while ($row = mysqli_fetch_row($res)) {
			$queue_value_max[] = intval($row[0]);
		}
		while ($row2 = mysqli_fetch_row($res2)) {
			$queue_value_pre_max = intval($row2[0]);
		}

		$actual_post_queue = mysqli_query($conn, "SELECT post_queue FROM posts WHERE id = '$post_id'");
		while ($row = mysqli_fetch_row($actual_post_queue)) {
			$act_queue_value = intval($row[0]);
		}

		if (sizeof($queue_value_max) > 1 && $queue_value_max[0] == $act_queue_value) {
			mysqli_query($conn, "UPDATE posts SET post_queue = (SELECT post_queue FROM posts WHERE id = '$post_id') + 1 WHERE id = '$post_id'");
		} else if ($queue_value_max[0] != $act_queue_value) {
			mysqli_query($conn, "UPDATE posts SET post_queue = (SELECT post_queue FROM posts WHERE id = '$post_id') + 1 WHERE id = '$post_id'");
		}
		break;
}
?>