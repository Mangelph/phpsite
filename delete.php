<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "", "supermarket");
$sql = mysqli_query($link,"DELETE FROM orders WHERE id = '$id'");
echo"<script>window.location.href='cart.php'</script>";