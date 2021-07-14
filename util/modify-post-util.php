<!--
 * = MODIFY-POST-UTIL.PHP
 *
 * PHP FILE FOR THE MODIFY FUNCTIONS IN THE ADMIN PAGE.
 *
 * ------------------------------------------------------------------------- -->
<?php
include("utility-functions.php");
if (isset($_POST['update'])) {
  $label = $_POST['label_txt'];
  $intro = $_POST['intro_txt'];
  $content = $_POST['content_txt'];
  $post_date = $_POST['pdate'];
  $imgfile = $_FILES["postimage"]["name"];
  $status = 0;
  $post_id = intval($_GET['id']);
  $url = generateURL($label);

  $target_dir = "p_img/";
  $target_file = $target_dir . basename($_FILES["postimage"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  if (isset($_POST["update"])) {
    $check = getimagesize($_FILES["postimage"]["tmp_name"]);
    if ($check !== false) {
      $uploadOk = 1;
    } else {
      $uploadOk = 0;
    }
  }

  if (file_exists($target_file)) {
    echo "<script>alert('The image you want to upload is already exists!');</script>";
    $uploadOk = 0;
  }

  if ($_FILES["postimage"]["size"] > 2000000) {
    echo "<script>alert('The size of the image you want to upload is more than 2MB!');</script>";
    $uploadOk = 0;
  }

  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    echo "<script>alert('Wrong image format!');</script>";
    $uploadOk = 0;
  }

  if ($uploadOk == 0) {
    echo "<script>alert('Cant upload image!');</script>";
  } else {
    if (move_uploaded_file($_FILES["postimage"]["tmp_name"], $target_file)) {

      $post_id_img = intval($_GET['id']);
      $res = mysqli_query($conn, "SELECT post_img FROM posts WHERE id = '$post_id_img'");
      $row = mysqli_fetch_array($res);
      $path = $row['post_img'];
      unlink(realpath($path));

      $query = mysqli_query($conn, "UPDATE posts SET post_label='$label', post_intro_txt='$intro', post_content_txt='$content', post_img='$target_file', url='$url', post_status='$status', date='$post_date' WHERE id='$post_id'");
      if ($query && (strlen($label) <= 120) && (strlen($intro) <= 250) && (strlen($content) <= 5000)) {
        echo "<script>
          alert('Succes!');
          window.location.href='list-posts';
          </script>";
      } else {
        echo "<script>alert('Error!');</script>";
      }
    } else {
    }
  }
}
?>