<?php

// Данные для подключения к базе данных
$servername = "localhost";
$username = "root";  // Имя пользователя MySQL
$password = "";      // Пароль MySQL
$dbname = "commits";  // Имя базы данных

// Подключение к базе данных
$conn = new mysqli($servername, $username, $password, $dbname,);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = htmlspecialchars(trim($_POST['name']));
    $mes = htmlspecialchars(trim($_POST['message']));
if(!empty($name) && !empty($mes)){
    $stmt = $conn->prepare("INSERT INTO coments (Name, Com) VALUES ('$name', '$mes')");
            if ($stmt->execute()) {
                echo " Коменнтарий отправлен ";
            } else {
                echo "Ошибка при отправке заявки: " . $conn->error;
              
            }
            $stmt->close();
} else {
    echo "Ошибка заполните поля ";
}
}else {
    echo "Ошибка: некорректный метод запроса.";
};
$conn->close();
?>