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
    <title>Регистрация</title>
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
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1><center>Пожалуйста, заполните форму для регистрации в приложении</center></h1><br>

            <form action="" method="POST" >
                <div class="box-body">

                    <div class="step_1">
                        <div class="form-group">
                            <label for="First_name">Логин:</label>
                            <input type="text" class="form-control first_name "  name="name"  required>
                        </div><br>

                        <div class="form-group">
                            <label for="Second_name">Имя:</label>
                            <input type="text" class="form-control second_name"  name="sname"   required>
                        </div><br>

                        <div class="form-group">
                            <label for="birthday">Фамилия:</label>
                            <input  class="form-control birthday"  required  type="text"   name="company"   >
                        </div><br>

                        <div class="form-group">
                            <label for="subject">Пароль:</label>
                            <input  class="form-control subject"  required  type="text"   name="position"   >
                        </div><br>

                        <div class="form-group">
                            <label for="country">Должность:</label>
                            <select class="form-control country" name="country" id="country"  >
                                <?php
                                $arr = array("Консультант","Администратор торгового зала","Стажёр");
                                foreach ($arr as &$value) {
                                    echo "<option>".$value."</option>";
                                }?>
                            </select>
                        </div><br>

                        <div class="box-footer">
                            <button type="submit" style=" width: 100%;" name="submit" value="submit" class="btn btn-danger">Зарегистрироваться</button>
                        </div>
                        <div class="auth_button">
                            <h4 style="margin-top: 5%;">Уже зарегистрированы ?</h4>
                            <a href="auth.php">Войти</a>
                        </div>
                    </div>
                </div>
                <?php

                if(isset($_POST['submit'])){
                    $tyy = $_POST['name'];
                    $sql = "SELECT id FROM users WHERE login = '$tyy'";
                    $result = mysqli_query($link,$sql);
                    if(mysqli_num_rows($result)==0){
                        $insert_query = "INSERT INTO 
                            users ( login,
                                            name,
                                            lname,
                                            password,
                                            country
                                            )
                            VALUES (        '".$_POST["name"]."',
                                            '".$_POST["sname"]."',
                                            '".$_POST["company"]."',
                                            '".$_POST["position"]."',
                                            '".$_POST["country"]."'
                                            )";
                        mysqli_query($link,$insert_query);
                        $_SESSION['itlogin'] = $tyy;
                        echo "<script>alert(\"Успешная регистрация!\");</script>";
                        echo '<script>  setTimeout(function () {  window.location.href = "index.php"; }); </script>';
                     }else{
                    echo "<script>alert(\"Этот логин уже занят!\");</script>";
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