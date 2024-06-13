
<?php
        session_start();
        $login = $_SESSION['itlogin'];
        $categoryid = $_GET['id'];
        $link = mysqli_connect("localhost", "root", "", "clothes");
        $Query = "SELECT * FROM kategories WHERE id = $categoryid";
        $ImageById =  mysqli_query($link,$Query);
        $row =  mysqli_fetch_array($ImageById);
        $name = $row['title'];
        $sql = "SELECT * FROM goods WHERE category = '$name'";
        $result = $link->query($sql)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Актуальные товары категории <?php echo $row['title']; ?></title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body style="background-color:#6e5a11; ">
        <div class="booking-panel-section booking-panel-section4" style="width: 96%; margin-left: 2%; margin-bottom: 50px; ">
            <button class="btn btn-warning" onclick="window.location = 'index.php';" ><span> К выбору категории </span></button>
            <div class="movie-box" style="width: 20%; margin-left: 40%;">
                <?php
                echo '<img src="'.$row['img'].'" alt="">';
                ?>
            </div>
            <div class="title" style="text-align: center;"><?php echo $row['title']; ?></div>

            <div  style="margin-left: 5%;">
              <h4 style="text-align: center"><?php echo $row['descr']; ?></h4>
            </div>
            <div style="margin-left: 2%; width: 96%;   margin-top: 3%; display: flex; flex-wrap: wrap;" >
                <?
                foreach($result as $row2) {

                        $disc = $row2["cost"];
                        echo' <div style="height: 100%; width: 400px; border: 1px solid black; position: relative; margin-left: 8%; margin-top: 2%; margin-bottom: 2%; ">';
                    echo' <img src="' . $row2["img"] . '" style="width: 380px; height: 400px; margin-left: 10px; margin-top: 2%;">';
                    echo' <h4 style="text-align: center">' . $row2["name"] . '</h4>';
                    echo' <h4 style="text-align: center; margin-top: 3%;">Цена: ' . $row2["cost"] . ' $.</h4>';
                    echo' <h4 style="text-align: center; margin-top: 3%; ">Артикул: ' . $row2["art"] . '.</h4>';
                    echo' <h4 style="text-align: center; margin-top: 3%; ">В наличии: ' . $row2["S"] + $row2["M"] + $row2["L"] +  $row2["XL"] + $row2["XXL"] . ' шт.</h4>';
                    echo' <div style="margin-top: 3%;  width: 100%; height: 40px; padding-top: 1.3%;">';
                    echo '<button type="button" onclick="window.location.href = \'good.php?id=' . $row2["id"] . '\'" style="text-align: center; vertical-align: center; color: white; width: 100%; height: 100%; background: green">Детальнее</button>';
                   echo'  </div>';
                echo' </div>';
                }
                ?>

            </div>

        </div>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>
