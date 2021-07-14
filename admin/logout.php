<!--
 * = LOGOUT.PHP
 *
 * THE PHP FILE THAT LOG OUT THE USER FROM THE ADMIN PAGES.
 *
 * ------------------------------------------------------------------------- -->
<?php
session_start();
session_destroy();
echo "<script>
          alert('Logged out successfully!');
          window.location.href='login';
          </script>";
?>