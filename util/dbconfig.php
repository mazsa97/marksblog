<!--
 * = DBCONFIG.PHP
 *
 * PHP FILE FOR ESTABLISHING THE CONNECTION WITH THE DATABASE.
 *
 * ------------------------------------------------------------------------- -->
<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PW', '');
define('DB', 'marksblog');
$conn = mysqli_connect(HOST, USER, PW, DB);
if (mysqli_connect_errno()) {
    echo "Cant connect to DB.";
}
?>