<!--
 * = ENABLE-ALL-POSTS.PHP
 *
 * PHP FILE TO ENABLE ALL POST ON THE WEBSITE.
 *
 * ------------------------------------------------------------------------- -->
<?php
include("dbconfig.php");
if (isset($_POST['all-posts-enable'])) {
    $res = mysqli_query($conn, "UPDATE posts SET post_status = '1'");
    if ($res) {
        echo "<script>
            alert('All post is now Active!');
            window.location.href='../admin/list-posts';
            </script>";
    }
} else {
    echo "error";
}
?>