﻿<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    if (isset($_POST['name'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['family'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['email'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['city'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
 
 
 if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
	$password = stripslashes($password);
    $password = htmlspecialchars($password);
	$name = stripslashes($name);
    $name = htmlspecialchars($name);
	$family = stripslashes($family);
    $family = htmlspecialchars($family);
	$email = stripslashes($email);
    $email = htmlspecialchars($email);
	$city = stripslashes($city);
    $city = htmlspecialchars($city);
	
 //удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
	$name = trim($name);
	$family = trim($family);
    $email = trim($email);
	$city = trim($city);
 // подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
 // если такого нет, то сохраняем данные
    $result2 = mysql_query ("INSERT INTO users (login,password,name,family,email,city) VALUES('$login','$password','$name','$family','$email','$city')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>