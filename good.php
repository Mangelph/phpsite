
<?php
        session_start();
        $login = $_SESSION['itlogin'];
        $id = $_GET['id'];
        $link = mysqli_connect("localhost", "root", "", "clothes");
        $sql = "SELECT * FROM goods WHERE id = '$id'";
        $result = $link->query($sql);
        $row = mysqli_fetch_array($result);

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
    <title>Товар <?php echo $row['name']; ?></title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body style="background-color:#6e5a11; ">
        <div class="booking-panel-section booking-panel-section4" style="width: 96%; margin-left: 2%; margin-bottom: 50px; ">
            <button class="btn btn-warning" onclick="window.location = 'index.php';" ><span> Назад </span></button>
            <div class="title" style="text-align: center;">Информация по поводу товара <?php echo $row['name']; ?></div>
            <div style="width: 96%; margin-left: 2%;  display: flex; margin-bottom: 2%;" >
                <div class="movie-box" style="width: 50%;">
                    <?php
                    echo '<img style="width: 50%; height:500px; margin-left: 25%; margin-top: 10%; " src="'.$row['img'].'" alt="">';
                    ?>
                </div>

                <div class="movie-box" style="width: 50%;">
                    <h4 style="line-height: 1.5; margin-top: 10%">
                        <span style="font-weight: bold; color: brown;">Название: </span>
                        <span style="font-family: Arial, sans-serif;"><? echo $row["name"] ?></span>
                    </h4>
                    <h4 style="line-height: 1.5;">
                        <span style="font-weight: bold; color: brown;">Категория: </span>
                        <span style="font-family: Arial, sans-serif;"><? echo $row["category"] ?></span>
                    </h4>
                    <h4 style="line-height: 1.5;">
                        <span style="font-weight: bold; color: brown;">Описание: </span>
                        <span style="font-family: Arial, sans-serif;"><? echo $row["descr"] ?></span>
                    </h4>
                    <h4 style="line-height: 1.5;">
                        <span style="font-weight: bold; color: brown;">Пол: </span>
                        <span style="font-family: Arial, sans-serif;"><? echo $row["sex"] ?></span>
                    </h4>
                    <h4 style="line-height: 1.5;">
                        <span style="font-weight: bold; color: brown;">Страна - производитель: </span>
                        <span style="font-family: Arial, sans-serif;"><? echo $row["country"] ?></span>
                    </h4>
                    <h4 style="line-height: 1.5;">
                        <span style="font-weight: bold; color: brown;">Цена: </span>
                        <span style="font-family: Arial, sans-serif;"><? echo $row["cost"] ?> $</span>
                    </h4>
                    <h4 style="line-height: 1.5;">
                        <span style="font-weight: bold; color: brown;">Артикул: </span>
                        <span style="font-family: Arial, sans-serif;"><? echo $row["art"] ?> </span>
                    </h4>
                    <h4 style="line-height: 1.5; margin-top: 2%;">
                        <span style="font-weight: bold;  color: brown;">Наличие на складе: </span>
                    </h4>

                    <table>
                        <tr>
                            <th>Размер</th>
                            <th>S</th>
                            <th>M</th>
                            <th>L</th>
                            <th>XL</th>
                            <th>XXL</th>
                        </tr>
                        <tr>
                            <td>Кол - во:</td>
                            <td><?php echo $row["S"]; ?></td>
                            <td><?php echo $row["M"]; ?></td>
                            <td><?php echo $row["L"]; ?></td>
                            <td><?php echo $row["XL"]; ?></td>
                            <td><?php echo $row["XXL"]; ?></td>
                        </tr>
                    </table>

                </div>
            </div>
            <h4 style="line-height: 1.5; text-align: center;  margin-bottom: 1%;">
                <span style="font-weight: bold;color: brown;">Размерная сетка: </span>
            </h4>
            <img style="width: 40%; margin-left: 30%; margin-bottom: 2%;" src="img/grid1.png">
            <button class="btn btn-warning" style="width: 40%; margin-left: 30%; margin-top: 1%; margin-bottom: 2%;" onclick="showSizeModal(<?php echo $row['id']; ?>);"><span> Добавить в заказ </span></button>
            <!-- Модальное окно для выбора размера -->
            <div id="sizeModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="hideSizeModal()">&times;</span>
                    <h2 style="text-align: center; margin-bottom: 5%;">Выберите размер</h2>
                    <button onclick="addToCart(<?php echo $row['id']; ?>, 'S')">S</button>
                    <button onclick="addToCart(<?php echo $row['id']; ?>, 'M')">M</button>
                    <button onclick="addToCart(<?php echo $row['id']; ?>, 'L')">L</button>
                    <button onclick="addToCart(<?php echo $row['id']; ?>, 'XL')">XL</button>
                    <button onclick="addToCart(<?php echo $row['id']; ?>, 'XXL')">XXL</button>
                </div>
            </div>
        </div>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>

<script>
    var login = '<?=$login;?>';
    function showSizeModal(id) {
        var modal = document.getElementById('sizeModal');
        modal.style.display = 'block';
    }

    // Скрыть модальное окно с выбором размера
    function hideSizeModal() {
        var modal = document.getElementById('sizeModal');
        modal.style.display = 'none';
    }

    // Добавить товар в корзину с указанием размера
    function addToCart(id, size) {
        $.ajax({
            url: 'addtocart.php',
            method: 'post',
            dataType: 'html',
            data: {id: id, size: size},
            success: function(response) {
                alert('Товар успешно добавлен в заказ');
                hideSizeModal();
            },
            error: function(xhr, status, error) {
                alert('Произошла ошибка: ' + error);
            }
        });
    }
</script>

<style>
    table {
        width: 60%;
        border-collapse: collapse;
    }
    th, td {
        border: 3px solid black;
        text-align: center;
        height: 50px;
    }
    td {
        height: 60px;
    }
    th {
        width: calc(100% / 6); /* Делим на количество столбцов */
    }
    td {
        width: calc(100% / 6); /* Делим на количество столбцов */
    }
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        height: 310px;
        background-color: #fefefe;
        border: 1px solid #888;
    }

    .modal-content {
        width: 100%;
        height: 100%;
        padding: 20px;
        box-sizing: border-box;
    }

    .close {
        float: right;
        cursor: pointer;
    }

    .close:hover {
        color: #000;
    }

    button {
        margin: 5px;
    }
