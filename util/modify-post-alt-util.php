<!--
 * = MODIFY-POST-ALT-UTIL.PHP
 *
 * PHP FILE FOR MODIFY POSTS ON THE ADMIN PAGE WITHOUT ITS IMAGE.
 *
 * ------------------------------------------------------------------------- -->
<?php
require_once("utility-functions.php");
if (isset($_POST['update'])) {
  $label = $_POST['label_txt'];
  $intro = $_POST['intro_txt'];
  $content = $_POST['content_txt'];
  $status = 0;
  $post_id = intval($_GET['id']);
  $url = generateURL($label);
  $post_date = $_POST['pdate'];

  $query = mysqli_query($conn, "UPDATE posts SET post_label='$label', post_intro_txt='$intro', post_content_txt='$content', url='$url', post_status='$status', date='$post_date' WHERE id='$post_id'");
  if ($query && (strlen($label) <= 120) && (strlen($intro) <= 250) && (strlen($content) <= 5000)) {
    echo "<script>
      alert('Success!');
      window.location.href='list-posts';
      </script>";
  } else {
    echo "<script>alert('Error!');</script>";
  }
}
?>