<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>Авторизация</title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>

<body>
<?php 
        $link = mysqli_connect("localhost", "root", "", "clothes");
?>
<div class="navbar-brand">
    <a href="index.php">
        <h1 class="navbar-heading">Clothes Administration</h1>
    </a>
</div>
<div>
<div mt="150px" class="container">
    <div class="row" style="margin-bottom: 20%;">
        <div class="col-3"></div>
        <div class="col-6">
            <h1><center>Пожалуйста, введити ваши данные консультанта</center></h1><br>

            <form action="" method="POST" >
                <div class="box-body">

                    <div class="step_1">
                        <div class="form-group">
                            <label for="First_name">Логин:</label>
                            <input type="text" class="form-control first_name "  name="name"  required>
                        </div><br>


                        <div class="form-group">
                            <label for="subject">Пароль:</label>
                            <input  class="form-control subject"  required  type="text"   name="position"   >
                        </div><br>


                        <div class="box-footer">
                            <button type="submit" style="width: 100%;" name="submit" value="submit" class="btn btn-danger">Вход</button>
                            <button type="button" style="width: 100%; margin-top: 2%; background-color: #1b9b4c;" onclick="window.location.href = 'registration.php';" class="btn btn-danger">Зарегистрироваться</button>
                        </div>
                    </div>
                </div>
                <?php

                if(isset($_POST['submit'])){
                    $tyy = $_POST['name'];
                    $pass = $_POST['position'];
                    $sql = "SELECT id FROM users WHERE login = '$tyy'";
                    $check = "SELECT id FROM users WHERE login = '$tyy' and password = '$pass'";
                    $result = mysqli_query($link,$sql);
                    $res = mysqli_query($link,$check);
                    if(mysqli_num_rows($result)==0) {
                        echo "Такого пользователя не существует, пожалуйста, зарегистрируйтесь!";
                    }elseif(mysqli_num_rows($res)==0){
                        echo "Введённый пароль не верный, попробуйте снова";
                    }else{
                        $_SESSION['itlogin'] = $tyy;
                        header ("location: /index.php");
                     }
                }
                ?>
            </form>
        </div>
    </div>
</div>
</div>
<footer></footer>
    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>