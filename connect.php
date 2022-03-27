<?php 


$mysqli = mysqli_connect('localhost', 'root', '','smtchfeedback');

if (!$mysqli) {
	die("Ошибка соединения: " . mysqli_connect_error());
}
