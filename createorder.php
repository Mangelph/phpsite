<?php

session_start();
if ($_SESSION['itlogin'] == "") {
    header('Location: /auth.php');
} else {
    $login = $_SESSION['itlogin'];
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$link = mysqli_connect("localhost", "root", "", "clothes");
$sql = mysqli_query($link, "SELECT * FROM orders WHERE username = '$login'");
$products = '';
$summ = 0;
    foreach ($sql as $row){
        $products = $products . ' , ' . $row['product'] . ' размера ' . $row['size'];
        $summ = $summ + $row['price'];
    }

$newsql = mysqli_query($link, "INSERT INTO readyorder ( products,price,address,phone,name ) VALUES ('$products','$summ','$address','$phone','$name')");
echo'<script>alert("Заказ клиента успешно сформирован !");</script>';
echo'<script>window.location.href="index.php"</script>';