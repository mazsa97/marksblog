<!--
 * = DISABLE-ALL-POSTS.PHP
 *
 * PHP FILE TO DISABLE ALL POST ON THE WEBSITE.
 *
 * ------------------------------------------------------------------------- -->
<?php
include("dbconfig.php");
if (isset($_POST['all-posts-disable'])) {
    $res = mysqli_query($conn, "UPDATE posts SET post_status = '0'");
    if ($res) {
        echo "<script>
            alert('All post is now Inactive!');
            window.location.href='../admin/list-posts';
            </script>";
    }
} else {
    echo "error";
}
?>