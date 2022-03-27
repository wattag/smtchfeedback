<?php 
require "connect.php";


$feed = $mysqli->query("SELECT * FROM messages");
    while ($result = mysqli_fetch_array($feed, MYSQLI_ASSOC)){
    	$feeds[] = $result;
    }

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
        <title>Обращения</title>
    </head>
    <body>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Имя</th>
                <th scope="col">E-mail</th>
                <th scope="col">Номер телефона</th>
                <th scope="col">Вид связи</th>
                <th scope="col">Удобное время</th>
                <th scope="col">Сообщение пользователя</th>
                <th scope="col">Согласие на рассылку</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($feeds as $feed) :?>
        <tr>

                <td><?php echo $feed['id']; ?></td>
                <td><?php echo $feed['name'];?></td>
                <td><?php echo $feed['email']; ?></td>
                <td><?php echo $feed['telephone']; ?></td>
                <td><?php echo $feed['communication_type']; ?></td>
                <td><?php echo $feed['convenient_time']; ?></td>
                <td><?php echo $feed['message']; ?></td>
                <td><?php echo $feed['mailing']; ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="form-group">
        <button id="resultbtn" class="btn btn-dark">
            <a id="result" href="index.php">Вернуться обратно</a>
        </button>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

