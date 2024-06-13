<?php
session_start();
$login = $_SESSION['itlogin'];
$link = mysqli_connect("localhost", "root", "", "clothes");
$id = $_POST['id'];
$size = $_POST['size'];


$sql = mysqli_query($link,"SELECT * FROM goods WHERE id = $id");
foreach($sql as $row){
    $name = $row['name'];
    $price = $row['cost'];
};

$insert_query = "INSERT INTO orders ( username,product,price, size ) VALUES ('$login','$name','$price','$size')";
mysqli_query($link,$insert_query);