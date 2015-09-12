<?php
	session_start();
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку 
    echo "<a href='login.php'>Войти на сайт</a>		<a href='registration.php'>Регистрация</a>";
    }
    else
    {
    echo "Вы    вошли на сайт, как $_SESSION[login] (<a    href='myscripts/exit.php'>выход</a>)<br>";
      
    }