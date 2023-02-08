<?php
include './includes/templates/head.php';
session_start();
$password = $_SESSION['password'];
?>
<p class="py-5 ps-2 text-light bg-info rounded h3 text-center">La tua passord è :  <?php echo $password; ?></p>