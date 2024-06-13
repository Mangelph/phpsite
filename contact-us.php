<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Обратная связь</title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>

<body>
<?php 
        $link = mysqli_connect("localhost", "root", "", "clothes");
?>
    <header></header>
    <div class="gmap_canvas"><iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.5815823728194!2d-80.73889560000869!3d35.14211377150105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885421a2eb1e7ea9%3A0x338011bddfd77820!2sWeb%20Development%20Company%20Charlotte!5e0!3m2!1sru!2sua!4v1654828127938!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contact-us-container">
        <div class="contact-us-section contact-us-section1">
            <h1>Оставьте ваш отзыв</h1>
            <p>Содействуйте лучшей работе сервиса. Пожалуйста, оставьте ваш отзыв о нашей работе.</p>
            <form action="" method="POST">
                <input placeholder="Ваше имя" name="fName" required><br>
                <input placeholder="Тема отзыва" name="lName" ><br>
                <input placeholder="Ваш E-mail адрес" name="email" required><br>
                <textarea placeholder="Ваш отзыв" name="feedback" rows="10" cols="30" required></textarea><br>
                <button type="submit" name="submit" value="submit">Оставить отзыв</button>
                <?php

                    if(isset($_POST['submit'])){
                        $insert_query = "INSERT INTO 
                        feedbackTable ( senderfName,
                                        senderlName,
                                        sendereMail,
                                        senderfeedback)
                        VALUES (        '".$_POST["fName"]."',
                                        '".$_POST["lName"]."',
                                        '".$_POST["eMail"]."',
                                        '".$_POST["feedback"]."')";
                        mysqli_query($link,$insert_query);
                        }
                    ?>
            </form>
            
        </div>
        <div class="contact-us-section contact-us-section2">
            <h1>Адрес & Информация</h1>
            <h3>Наши контакты</h3>
            <p><a href="tel:099 999 99 99">+38 099 999 99 99</a><br>
                <a href="tel:099 999 99 99">+38 099 999 99 99</a></p>
            <h3>Адрес</h3>
            <p>El Sherouk City , Suez Desert Road , Cairo 11837 - P.O. Box 43</p>
            <h3>E-mail</h3>
            <p><a href="#">сlothesфdministration@gmail.com</a></p>
        </div>
    </div>
    <footer></footer>
    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>