<!--
 * = NEW-POST-UTIL.PHP
 *
 * PHP FILE FOR CREATING NEW POSTS ON THE ADMIN PAGES.
 *
 * ------------------------------------------------------------------------- -->
<?php
include("utility-functions.php");
if (isset($_POST['submit'])) {
  $label = $_POST['label_txt'];
  $intro = $_POST['intro_txt'];
  $content = $_POST['content_txt'];
  $post_date = $_POST['date'];
  $queue_final = 1;
  $status = 0;
  $url = generateURL($label);


  $target_dir = "p_img/";
  $target_file = $target_dir . basename($_FILES["postimage"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  if (isset($_POST["submit"])) {
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
    echo "<script>alert('Error during image upload!');</script>";
  } else {
    if (move_uploaded_file($_FILES["postimage"]["tmp_name"], $target_file)) {
      $query = mysqli_query($conn, "INSERT INTO posts(post_label,post_intro_txt,post_content_txt,post_img,post_status,url,date,post_queue) values('$label','$intro','$content','$target_file','$status','$url','$post_date','$queue_final')");
      if ($query && (strlen($label) <= 120) && (strlen($intro) <= 250) && (strlen($content) <= 5000)) {

        echo "<script>
          alert('Success!');
          window.location.href='list-posts';
          </script>";

        $shiftSorrend = mysqli_query($conn, "UPDATE posts SET post_queue = post_queue+1 WHERE NOT (post_label = '$label')");
      } else {
        echo "<script>alert('Error!');</script>";
      }
    } else {
    }
  }
}
?>