<?php
require "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <title>Обратная связь</title>
</head>
    <body>
    <div class="container">
        <div class="row">
            <form action="index.php" method="POST" enctype="multipart/form-data" class="form-group">
                <div class="form-group">
                    <label for="nameInput">Имя
                        <input type="text" name="name" id="nameInput" class="form-control" placeholder="Введите ваше имя" required>
                    </label>
                </div>
                <div class="form-group">
                    <label for="emailInput">E-mail
                        <input type="email" name="email" id="emailInput" class="form-control" placeholder="Введите ваш e-mail" required>
                    </label>
                </div>
                <div class="form-group">
                    <label for="phoneInput">Номер телефона
                        <input id="phoneInput" name="number" type="tel" class="form-control" placeholder="+7 (999)999-99-99" required>
                    </label>
                </div>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input type="radio" name="radio" id="r1" value="Почта" checked>
                        <label for="r1">Связаться с Вами по эл.почте</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="radio" id="r2" value="Телефон">
                        <label for="r2">Связаться с Вами по телефону</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Удобное для связи время:
                        <select name="select" class="form-control">
                            <option value="Круглосуточно">В любое время</option>
                            <option value="Только вечер">Вечером</option>
                        </select>
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        <textarea name="textarea" rows="5" class="form-control" cols="50" placeholder="Введите текст сообщения"></textarea>
                    </label>
                </div>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input name="image" type="file" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02">Выберите файл</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>
                        Согласны ли вы на рекламные объявления?
                    </label>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" name="checkbox" id="check1" value="Да">
                        <label for="check1" class="form-check-label">Да, согласен</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox"  name="checkbox" class="form-check-input" id="check2" value="Нет">
                        <label for="check2" class="form-check-label">Нет, не согласен</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Отправить</button>
                    <button  type="reset" class="btn btn-dark">Очистить </button>
                </div>
            </form>
        </div>
        <button id="resultbtn" class="btn btn-dark">
            <a id="result" href="results.php">Посмотреть все сообщения</a>
        </button>
    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_REQUEST['name']);
    $email = trim($_REQUEST['email']);
    $telephone_number = trim($_REQUEST['number']);
    $type = trim($_REQUEST['radio']);
    $time = trim($_REQUEST['select']);
    $message = trim($_REQUEST['textarea']);
    $mailing = trim($_REQUEST['checkbox']);

    if (!empty($_FILES["image"])){
        $image = $_FILES['image'];

        $types = ["image/jpeg", "image/png"];

        if (!in_array($image["type"], $types)){
            die("Некорректный тип файла.");
        }


        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }
        $extension = pathinfo($image["name"], PATHINFO_EXTENSION);
        $fileName = time() . ".$extension";

        move_uploaded_file($image["tmp_name"], "uploads/" . $fileName);
        $filepath = "uploads/".$fileName;
        $mysqli->query("INSERT INTO messages (name, email, telephone, communication_type, convenient_time, message, mailing, filepath) VALUES ('$name','$email','$telephone_number','$type','$time','$message','$mailing', '$filepath')");
    }else{
        $mysqli->query("INSERT INTO messages (name, email, telephone, communication_type, convenient_time, message, mailing) VALUES ('$name','$email','$telephone_number','$type','$time','$message','$mailing')");
    }


    /*Аккаунт с которого отправляются письма -->  testmailtestmailg@gmail.com test123test*/
    mail("litvinov374@gmail.com", "Письмо от пользователя ".$name, $message);
}
?>