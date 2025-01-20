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
$sql = "SELECT * FROM coments";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo '<div class= "commits">';
    echo "<p>Количество комментариев: $rowsCount</p>";
    foreach($result as $row){
        echo '<div class="com">';
            echo "<h2>" . $row["Name"] . "</h2>";
            echo "<p>" . $row["Com"] . "</p>";
            //echo "<p>" . $row["Com_date"] . "</p>";
        echo '</div>';
    }
    echo '</div>';
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
