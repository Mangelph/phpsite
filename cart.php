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
    <title>Сart</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <?php
    $link = mysqli_connect("localhost", "root", "", "clothes");
    $sql = mysqli_query($link,"SELECT * FROM orders WHERE username = '$login'");
    ?>
    <header></header>
    <div id="home-section-1" class="movie-show-container">
        <h3>Текущий заказ</h3>

        <table class="table_dark">
            <tr>
                <th>Товар</th>
                <th>Цена</th>
                <th>Размер</th>
                <th>Взаимодействие</th>
            </tr>

            <?
            $summ = 0;
            foreach ($sql as $row){
                echo '<tr>';
                echo '<td>' . $row['product'] . '</td>';
                echo '<td>' . $row['price'] . ' $</td>';
                echo '<td>' . $row['size'] . '</td>';
                echo '<td><a href="delete.php?id=' .$row["id"] .'" class="push_button red_push">Удалить</a></td>';
                echo '</tr>';
                $summ = $summ + $row["price"];
            }

            ?>
            <td>Общая цена</td>
            <td><? echo $summ ?> $</td>
            <td><a href="cart.php" class="push_button red_push">Обновить</a></td>
        </table>

    </div>
  <div style="margin-top: 4%;">
      <form action="createorder.php" method="post">
          <div class="form-group">
              <label for="First_name" style="margin-left: 47%;">Адрес клиента:</label>
              <input type="text" class="form-control" style="width: 50%; margin-left: 25%;"  name="address"  required>
          </div><br>

          <div class="form-group">
              <label for="Second_name" style="margin-left: 47.5%;">Имя клиента:</label>
              <input type="text" style="width: 50%; margin-left: 25%;" class="form-control"  name="name"   required>
          </div><br>

          <div class="form-group">
              <label for="birthday" style="margin-left: 46%;">Номер телефона клиента:</label>
              <input  class="form-control" style="width: 50%; margin-left: 25%;"  required  type="text"   name="phone">
          </div><br>

          <button class="btn btn-warning" style="width: 40%; margin-left: 30%; margin-top: 1%; margin-bottom: 1%;" type="submit" ><span> Завершить заказ </span></button>

      </form>

  </div>
    <footer></footer>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>

<style>


    .table_dark {
        font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
        font-size: 14px;
        width: 100%;
        text-align: left;
        border-collapse: collapse;
        background: #252F48;
        margin: 10px;
    }
    .table_dark th {
        color: #EDB749;
        border-bottom: 1px solid #37B5A5;
        padding: 12px 17px;
    }
    .table_dark td {
        color: #CAD4D6;
        border-bottom: 1px solid #37B5A5;
        border-right:1px solid #37B5A5;
        padding: 7px 17px;
    }
    .table_dark tr:last-child td {
        border-bottom: none;
    }
    .table_dark td:last-child {
        border-right: none;
    }

    .push_button {
        position: relative;
        width:120px;
        height:30px;
        text-align:center;
        color:#FFF;
        text-decoration:none;
        line-height:30px;
        font-family:'Oswald', Helvetica;
        display: block;
        margin: 10px 0;
    }
    .push_button:before {
        background:#f0f0f0;
        background-image:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#D0D0D0), to(#f0f0f0));
        -webkit-border-radius:5px;
        -moz-border-radius:5px;
        border-radius:5px;
        -webkit-box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF;
        -moz-box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF;
        box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF;
        position: absolute;
        content: "";
        left: -6px; right: -6px;
        top: -6px; bottom: -10px;
        z-index: -1;
    }
    .push_button:active {
        -webkit-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset;
        top:5px;
    }
    .push_button:active:before{
        top: -11px;
        bottom: -5px;
        content: "";
    }
    .red_push {
        text-shadow:-1px -1px 0 #A84155;
        background: #D25068;
        text-transform: uppercase;
        border:1px solid #D25068;
        background-image:-webkit-linear-gradient(top, #F66C7B, #D25068);
        background-image:-moz-linear-gradient(top, #F66C7B, #D25068);
        background-image:-ms-linear-gradient(top, #F66C7B, #D25068);
        background-image:-o-linear-gradient(top, #F66C7B, #D25068);
        background-image:linear-gradient(to bottom, #F66C7B, #D25068);
        -webkit-border-radius:5px;
        -moz-border-radius:5px;
        border-radius:5px;
        -webkit-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #AD4257, 0 4px 2px rgba(0, 0, 0, .5);
        -moz-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #AD4257, 0 4px 2px rgba(0, 0, 0, .5);
        box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset, 0 4px 0 #AD4257, 0 4px 2px rgba(0, 0, 0, .5);
    }
    .red_push:hover {
        background: #F66C7B;
        color: #fff;
        background-image:-webkit-linear-gradient(top, #D25068, #F66C7B);
        background-image:-moz-linear-gradient(top, #D25068, #F66C7B);
        background-image:-ms-linear-gradient(top, #D25068, #F66C7B);
        background-image:-o-linear-gradient(top, #D25068, #F66C7B);
        background-image:linear-gradient(top, #D25068, #F66C7B);
    }

</style>