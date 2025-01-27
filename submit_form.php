<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Здесь можно добавить код для отправки email или сохранения данных в базу данных

    echo "Спасибо, $name! Ваше сообщение отправлено.";
}
?>