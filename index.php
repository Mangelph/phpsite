<?php
session_start();
if($_SESSION['itlogin'] == ""){
    header('Location: /auth.php');
}else{
    $login = $_SESSION['itlogin'];
}

?>


<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Clothes Administration</title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>

<body>
    <?php
    $link = mysqli_connect("localhost", "root", "", "clothes");
    $sql = "SELECT * FROM kategories";
    ?>
    <header></header>
    <div id="home-section-1" class="movie-show-container">
        <h1>Категории товаров</h1>
        <h3>Выберите категорию товаров для взаимодействия</h3>

        <div class="movies-container">

            <?php
                        if($result = mysqli_query($link, $sql)){
                            $lines = mysqli_num_rows($result);
                            if(mysqli_num_rows($result) > 0){
                                for ($i = 0; $i <= $lines - 1; $i++){
                                    $row = mysqli_fetch_array($result);
                                    echo '<div class="movie-box">';
                                    echo '<img src="'. $row['img'] .'" alt=" ">';
                                    echo '<div class="movie-info ">';
                                    echo '<h3>'. $row['title'] .'</h3>';
                                    echo '<a href="goods.php?id='.$row['id'].'"><i class="fas fa-ticket-alt"></i> Перейти </a>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                mysqli_free_result($result);
                            } else{
                                echo '<h4 class="no-annot">В данный момент нет актуальных категорий</h4>';
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        
                        // Close connection
                        mysqli_close($link);
                        ?>
        </div>
    </div>
    <div id="home-section-2" class="services-section">
        <h1>Как использовать приложение ?</h1>
        <h3>Основные шаги взаимодействия приложения !</h3>

        <div class="services-container">
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-video"></i>
                </div>
                <h2>1. Выбор категории товаров</h2>
                <p>Выберите категорию товара, информацию по поводу которого хотите получить</p>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-credit-card"></i>
                </div>
                <h2>2. Выбор товара</h2>
                <p>Выберите необходимый товар для взаимодействия</p>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-theater-masks"></i>
                </div>
                <h2>3. Взаимодействие </h2>
                <p> Взаимодействуйте с выбранным товаром согласно потребностям клиента </p>
            </div>
            <div class="service-item"></div>

        </div>
    </div>
    <div id="home-section-3" class="trailers-section">
        <h1 class="section-title"> Необходима помощь с процессом продаж ?</h1>
        <h3>Ознакомьтесь со специально подготовленными материалами о взаимодествии с клиентами !</h3>
        <div class="trailers-grid">
            <div class="trailers-grid-item">
                <img src="img/1.png" alt="">
                <div class="trailer-item-info" data-video="hsq3YHk2jn0?si=Q0vJjltbj40hBUPp">
                    <h3>Как разговаривать с клиентом</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/2.png" alt="">
                <div class="trailer-item-info" data-video="Pm0cniSG_fk?si=-Li6VnTASdJINaV5">
                    <h3>Установление контакта в продажах </h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/3.png" alt="">
                <div class="trailer-item-info" data-video="xbmOladP5Jg?si=pECAfD4sfd1G27ll">
                    <h3>Активные продажи</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/4.png" alt="">
                <div class="trailer-item-info" data-video="fZ3LfgCwZ3I?si=N4443XK5nZ0WzKwA">
                    <h3>6 способов привлечения клиентов</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/5.png" alt="">
                <div class="trailer-item-info" data-video="plYGH-P5QQA?si=VPGhEAGaL37NgZIa">
                    <h3>Установления контакта с клиентом</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/6.png" alt="">
                <div class="trailer-item-info" data-video="ql4Sju2_42w?si=Q9XK9Sr3bKGdmbPI">
                    <h3>Как убедить покупателя совершить покупку</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
        </div>
    </div>
    <footer></footer>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>