<!--
 * = AUTHENTICATE.PHP
 *
 * PHP FILE FOR REACHING SECURELY THE ADMIN PAGES.
 *
 * ------------------------------------------------------------------------- -->
<?php
session_start();
require_once("dbconfig.php");

if (!isset($_POST['username'], $_POST['password'])) {
    exit('Please fill out both input fields!');
}


if ($login_stmnt = $conn->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
    $login_stmnt->bind_param('s', $_POST['username']);
    $login_stmnt->execute();
    $login_stmnt->store_result();
    if ($login_stmnt->num_rows > 0) {
        $login_stmnt->bind_result($id, $password);
        $login_stmnt->fetch();
        if (password_verify($_POST['password'], $password)) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: ../admin/home');
        } else {
            echo "<script>
            alert('Incorrect username and/or password!');
            window.location.href='../admin/login';
            </script>";
        }
    } else {
        echo "<script>
        alert('Incorrect username and/or password!');
        window.location.href='../admin/login';
        </script>";
    }
    $login_stmnt->close();
}
?>