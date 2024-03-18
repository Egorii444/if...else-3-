<!DOCTYPE html>
<html>
<head>
    <title>Система входа на сайт</title>
</head>
<body>
<h2>Вход на сайт</h2>
<form method="post">
    <label>Логин:</label><br>
    <input type="text" name="username"><br><br>
    <label>Пароль:</label><br>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Войти">
</form>

<?php
// Заранее заданные логин и пароль
$correct_username = "user";
$correct_password = "password";

// Проверяем, были ли отправлены логин и пароль из формы
if(isset($_POST['username']) && isset($_POST['password'])) {
    // Получаем введенные логин и пароль из формы
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    // Проверяем совпадение логина и пароля
    if($entered_username === $correct_username && $entered_password === $correct_password) {
        echo "<p>Добро пожаловать!</p>";
    } else {
        echo "<p>Ошибка входа. Пожалуйста, проверьте введенные данные.</p>";
    }
}
?>
</body>
</html>